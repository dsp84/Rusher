<?php

namespace Rusher\Exception;

use Rusher\Exception\BaseException;

class Application extends BaseException
{

  public function __construct(\Exception $e)
  {
    parent::__construct('Application', $e->getMessage(), $e->getCode(), $e->getPrevious());
  }

}