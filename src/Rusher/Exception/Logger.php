<?php

namespace Rusher\Exception;

use Rusher\Exception\BaseException;

class Logger extends BaseException
{

  public function __construct(\Exception $e)
  {
    parent::__construct('Logger', $e->getMessage(), $e->getCode(), $e->getPrevious());
  }

}