<?php

namespace Rusher\Logger;

use Rusher\BaseRusher,
    Rusher\Interfaces\InterfaceLogger,
    Rusher\Interfaces\InterfaceDriver;

class Logger extends BaseRusher implements InterfaceLogger
{

  const LEVEL_ERROR = 100;
  const LEVEL_DEBUG = 10;
  const LEVEL_WARNING = 80;
  const LEVEL_NOTICE = 60;
  const LEVEL_INFO = 40;

  protected $driver;
  protected $loglevel;

  public function __construct(InterfaceDriver $driver = null, $loglevel = self::LEVEL_ERROR)
  {
    $this->driver = $driver;
    $this->loglevel = $loglevel;
  }

  public function setDriver(InterfaceDriver $driver)
  {
    $this->driver = $driver;
  }

  public function getDriver()
  {
    return $this->driver;
  }

  public function error($message)
  {
    $this->log($message, self::LEVEL_ERROR);
  }

  public function info($message)
  {
    $this->log($message, self::LEVEL_INFO);
  }

  public function notice($message)
  {
    $this->log($message, self::LEVEL_NOTICE);
  }

  public function warn($message)
  {
    $this->log($message, self::LEVEL_WARNING);
  }

  public function debug($message)
  {
    $this->log($message, self::LEVEL_DEBUG);
  }

  public function log($message, $level = self::LEVEL_ERROR)
  {
    if ($this->loglevel >= $level)
      return false;

    if (empty($this->driver))
    {
      throw new Logger('Driver not set');
    }
    switch ($level)
    {
      case self::LEVEL_DEBUG: $level = 'debug';
        break;
      case self::LEVEL_INFO: $level = 'info';
        break;
      case self::LEVEL_NOTICE: $level = 'notice';
        break;
      case self::LEVEL_WARNING: $level = 'warn';
        break;
      case self::LEVEL_ERROR: $level = 'err';
        break;
      default:
        return false;
        break;
    }
    return $this->driver->log($message, $level);
  }

}