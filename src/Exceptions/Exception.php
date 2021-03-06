<?php
/**
 * This file is part of the Damianopetrungaro\CachetSDK\Exceptions package.
 *
 * @author Damiano Petrungaro <damianopetrungaro@gmail.it>
 */

namespace Damianopetrungaro\CachetSDK\Exceptions;

use RuntimeException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Exception extends RuntimeException implements ExceptionInterface
{
    private $request;
    private $response;

    public function __construct(RequestInterface $request, $message, \Exception $previous = null, ResponseInterface $response = null)
    {
        parent::__construct($message, 0, $previous);
        $this->request = $request;
        $this->response = $response;
    }

    public function request()
    {
        return $this->request;
    }

    public function response()
    {
        return $this->response;
    }
}
