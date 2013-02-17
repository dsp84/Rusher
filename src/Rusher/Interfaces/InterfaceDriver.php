<?php

namespace Rusher\Interfaces;

use Rusher\Logger\Logger;

interface InterfaceDriver
{

  public function log($message, $level = Logger::ERROR);
}