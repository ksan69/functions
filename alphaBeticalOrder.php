<?php
/**
 * Возвращает переданную строку с буквами в алфавитном порядке.
 * Пример строки: 'alphabetical'
 * Ожидаемый результат: 'aaabcehillpt'
 *
 * @param string $str
 * 
 * @return string
 */
function alphaBeticalOrder(string $str) {
    $arr = str_split($str);
    sort($arr);
    return join('', $arr);
}

// echo alphaBeticalOrder('ckfziejracb') . PHP_EOL;