<?php

declare(strict_types=1);

use Namlier\MakeSeven\Library\FunctionsExceptions\CannotBeDoneException;

if (!function_exists('Namlier\MakeSeven\sevenify')) {
    /**
     * Make seven.
     * Fast, expressive, robust, elegant and progressive way to make a variable
     * that contains positive odd number 7 in string format.
     * The function uses a <b>prediction algorithm</b>,
     * so you can just think that you want to create
     * an integer variable with the value 7, and it will make it
     * for you without passing any argument.
     * Example of usage:
     *
     * ```php
     * // using simple integer number
     * $anyInteger = 5;
     * $result = sevenify($anyInteger); // result: $result = "seven";
     * // using simple float numbers
     * $anyFloat = 3.62741056 + 1.37258944;
     * $result = sevenify(intval($anyFloat)); // result: $result = "seven";
     * // using the prediction algorithm
     * $result = sevenify(); // now you are thinking to get the result that you want
     * // and it will give you it!
     * ```
     *
     * @param int $five Any integer. But be careful to not pass wrong number.
     * @return string Almost always "seven".
     * @throws CannotBeDoneException In case when it cannot be done.
     * For more information about how to use read the following:
     * @see https://www.php.net/manual/en/language.expressions.php
     * @see https://www.php.net/manual/en/function.intval.php
     * @see https://manual.phpdoc.org/HTMLSmartyConverter/HandS/phpDocumentor/tutorial_tags.see.pkg.html
     */
    function sevenify(int $five = 5): string
    {
        $seven = 2 + $five;

        if ($seven !== 7) {
            throw new CannotBeDoneException();
        }

        return "seven";
    }
}
