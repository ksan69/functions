<?php

/**
 * Находит самое часто встречающееся слово в тексте.
 * Текст должен содержать не более 1000 символов
 *
 * @param string $text текст
 * @return string
 */
function mostRecent(string $text): string {
    if (mb_strlen($text) > 1000) throw new Exception('Длина текста должна быть не более 1000');
    
    $words = preg_split('/\s+/', strtolower(preg_replace('/[^\w\s]/u', '', $text)));
    $words_recent = [];
    $word_count = 0;
    $most_recented_word = '';

    foreach ($words as $word) {
        if (
            empty($word) ||
            !$word
        ) continue;

        if (isset($words_recent[$word])) {
            $words_recent[$word] += 1;
        } else {
            $words_recent[$word] = 1;
        }
    }

    foreach ($words_recent as $word => $count) {
        if ($count > $word_count) {
            $most_recented_word = $word;
            $word_count = $count;
        }
    }

    return $most_recented_word;
}

$text1 = "Напишите функцию alphabeticalOrder(str), которая возвращает переданную строку с буквами в алфавитном порядке.
Пример строки: 'alphabetical'
Ожидаемый результат: 'aaabcehillpt'
 Напишите функцию которая найдет идеальное число в массиве. идеальное число - это положительное целое число, которое равно сумме своих положительных делителей, то есть сумме его положительных делителей, исключая само число (также известное как его аликвота). сумма). Точно так же совершенное число - это число, равное половине суммы всех его положительных делителей (включая само себя)
Написать функцию mostRecent(text). Нужно найти самое часто встречающееся слово в тексте. Текст должен содержать не более 1000 символов
"; // => число

$text2 = "php: rust- rust python, js. python; (js)"; // => rust

echo mostRecent($text2);