<?php
// 特定のインターフェイスを実装しているクラスのリストを取得する
//
// oop - PHP: how to get a list of classes that implement certain interface? - Stack Overflow
// https://stackoverflow.com/questions/3993759/php-how-to-get-a-list-of-classes-that-implement-certain-interface

function implements_classes(string $interface): array
{
    return array_filter(get_declared_classes(), function (string $class) use ($interface) {
        $reflection = new ReflectionClass($class);
        return $reflection->implementsInterface($interface);
    });
}

function implements_classes(string $interface): array
{
    return array_filter(get_declared_classes(), function (string $class) use ($interface) {
        return in_array($interface, class_implements($class));
    });
}
