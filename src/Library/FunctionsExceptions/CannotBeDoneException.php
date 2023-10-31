<?php

declare(strict_types=1);

namespace Namlier\MakeSeven\FunctionsExceptions;

use Exception;

/**
 * Such operation cannot be done.
 */
class CannotBeDoneException extends Exception
{
    /**
     * 错误信息
     */
    protected $message = "It simply cannot be done, please!";
}
