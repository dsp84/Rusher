<?php

namespace Rusher\Interfaces\Logger;

use Rusher\Logger\Driver,
    Rusher\Logger\Logger;

interface Logger
{

  public function setDriver(Driver $driver);

  public function getDriver();

  public function log($message, $level = Logger::ERROR);
}