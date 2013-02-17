<?php

namespace Rusher\Interfaces;

use Rusher\Interfaces\InterfaceDriver,
    Rusher\Logger\Logger;

interface InterfaceLogger
{

  public function setDriver(InterfaceDriver $driver);

  public function getDriver();

  public function log($message, $level = Logger::ERROR);
}