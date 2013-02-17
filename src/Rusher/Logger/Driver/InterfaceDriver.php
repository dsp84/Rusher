<?php

namespace Rusher\Logger\Driver;

use Rusher\Logger\Logger;

interface InterfaceDriver
{

  public function log($message, $level = Logger::ERROR);
}