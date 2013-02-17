<?php

namespace Rusher\Interfaces\Logger;

interface Driver
{

  public function log($message, $level = Logger::ERROR);
}