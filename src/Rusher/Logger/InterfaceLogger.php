<?php

namespace Rusher\Logger;

use Rusher\Logger\Driver\InterfaceDriver,
    Rusher\Logger\Logger;

interface InterfaceLogger
{

  public function setDriver(InterfaceDriver $driver);

  public function getDriver();

  public function log($message, $level = Logger::ERROR);
}