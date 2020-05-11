<?php
declare(strict_types=1);

$files = [];
foreach ($files as $file) {
	$source = file_get_contents($file);
	$refactoring = new Refactoring($source);
	$refactoring->addDeclare();
	file_put_contents($file, $refactoring->toString());
}

/**
 * @link https://www.php.net/manual/ja/function.token-get-all.php token_get_all()
 * @link https://www.php.net/manual/ja/tokens.php Tokens list
 */
class Refactoring {
	private $tokens;

	public function __construct(string $source) {
		$this->tokens = token_get_all($source);
	}

	public function addDeclare(): void {
		$open_tag = current($this->tokens);
		if ($open_tag[0] !== T_OPEN_TAG) {
			throw new Exception('Open tag is invalid.');
		}

		var_dump($this->tokens[0], $this->tokens[1], $this->tokens[2], $this->tokens[3], $this->tokens[4]);

		while (in_array(next($this->tokens)[0], [T_WHITESPACE, T_COMMENT, T_DOC_COMMENT])) {
			// nop
		}
		$declare = current($this->tokens);
		if ($declare[0] !== T_DECLARE) {
			$declare_tokens = token_get_all("declare(strict_types=1);" . PHP_EOL);
			array_splice($this->tokens, 1, 0, $declare_tokens);
		}

		reset($this->tokens);
	}

	public function toString(): string {
		$source = '';
		foreach ($this->tokens as $token) {
			if (is_array($token)) {
				[, $string, ] = $token;
				$source .= $string;
			} else { // single character (i.e.: ;, ., >, !, etc...)
				$source .= $token;
			}
		}
		return $source;
	}
}
