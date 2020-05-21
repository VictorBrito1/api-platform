<?php

namespace App\Exception;

use Symfony\Component\HttpKernel\Exception\HttpException;

class EmptyBodyException extends HttpException
{
    /**
     * EmptyBodyException constructor.
     * @param int $statusCode
     * @param string|null $message
     * @param \Throwable|null $previous
     * @param array $headers
     * @param int|null $code
     */
    public function __construct(int $statusCode, string $message = null, \Throwable $previous = null, array $headers = [], ?int $code = 0)
    {
        parent::__construct($statusCode, $message, $previous, $headers, $code);
    }
}