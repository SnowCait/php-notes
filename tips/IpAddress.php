<?php
declare(strict_types=1);

/**
 * @param string $needle_ip
 * @param string[] $ranges
 * @return bool
 */
function in_ip_address_range(string $needle_ip, array $ranges): bool
{
  foreach ($ranges as $range)
  {
    [$haystack_ip, $mask] = explode('/', $range);  // [PHP < 7] list($accept_ip, $mask) = 
    $haystack_long = ip2long($haystack_ip) >> (32 - $mask);
    $needle_long = ip2long($needle_ip) >> (32 - $mask);
    if ($haystack_long === $needle_long)
    {
      return true;
    }
  }
  return false;
}

$ip = $_SERVER['REMOTE_ADDR'];
$private_ips = [
  '10.0.0.0/8',
  '172.16.0.0/12',
  '192.168.0.0/16',
];
if (in_ip_address_range($ip, $private_ips))
{
  echo "{$ip} is private network IP address.";
}

// 参考
// https://qiita.com/ran/items/039706c93a8ff85a011a
// http://www.sys238.jp/contents_notes1/php/php_ip_allow_md/
