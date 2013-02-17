<?php

namespace Rusher\Logger;

class Logger extends BaseRusher implements Rusher\Interfaces\Logger\Logger
{

  const LEVEL_ERROR = 'error';
  const LEVEL_DEBUG = 'debug';
  const LEVEL_WARNING = 'warning';
  const LEVEL_NOTICE = 'notice';

  protected $driver;
  protected $loglevel;

  public function __construct(Driver $driver = null, $loglevel = self::LEVEL_ERROR)
  {
    $this->driver = $driver;
    $this->loglevel = $loglevel;
  }

  public function setDriver(Driver $driver)
  {
    $this->driver = $driver;
  }

  public function getDriver()
  {
    return $this->driver;
  }

  public function log($message, $level = BaseLogger::ERROR)
  {
    if ($this->loglevel !== $level)
      return false;

    if (empty($this->driver))
    {
      throw new Logger('Driver not set');
    }
    return $this->driver->log($message, $level);
  }

}