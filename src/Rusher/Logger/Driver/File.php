<?php

namespace Rusher\Logger\Driver;

use Rusher\Logger\Logger,
    Rusher\Exception\Logger as LoggerException;

class File extends BaseRusher implements Rusher\Interfaces\Logger\Driver
{

  protected $logfile;
  protected $format = 'Y-m-d H:i:s';

  public function __construct($logfile = 'application.log')
  {
    $this->logfile = $logfile;
  }

  public function __destruct()
  {
    unset($this->logfile);
  }

  public function setTimeFormat($format = 'Y-m-d H:i:s')
  {
    $this->format = $format;
  }

  public function log($message, $level = Logger::ERROR)
  {
    try
    {
      if (file_put_contents($this->logfile, '[' . date($this->format, time()) . ']:' . $message, FILE_APPEND) === false)
      {
        throw new \RuntimeException(sprintf('Unable to write your logfile "%s"', $this->logfile));
      }
    } catch (Exception $e)
    {
      throw new LoggerException($e);
    }
  }

}