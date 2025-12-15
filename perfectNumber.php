<?php




/**
 *
 * @param int $num
 * @return bool
 */
function isPerfectNumber(int $num): bool {
    if ($num <= 0) {
        return false;
    }
    $sum = 0;
    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $num;
}



/**
 * Возвращает идеальное число из массива.
 * Идеальное число - это положительное целое число,
 * которое равно сумме своих положительных делителей,
 * то есть сумме его положительных делителей,
 * исключая само число (также известное как его аликвота). сумма).
 * Точно так же совершенное число - это число,
 * равное половине суммы всех его положительных делителей (включая само себя)
 *
 * @param int[] $nums
 * 
 * @return int[]
 */
function perfectNumbers(array $nums): array {
    $perfectNumbers = [];
    foreach ($nums as $num) {
        if (isPerfectNumber($num)) {
            $perfectNumbers[] = $num;
        }
    }
    return $perfectNumbers;
}

$numbers = [6,23,28,7,13,99];
perfectNumbers($numbers); // => [6, 28]