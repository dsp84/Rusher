<?php

namespace Rusher\Exception;

class BaseException extends \Exception
{

  public function __construct($class, $message, $code, $previous)
  {
    parent::__construct(sprintf('[%s]:' . $message, $class), $code, $previous);
  }

}