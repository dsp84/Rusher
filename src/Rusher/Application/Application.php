<?php

namespace Rusher\Application;

use Rusher\BaseRusher,
    Rusher\Logger\Logger,
    Rusher\Routing\Routing,
    Rusher\Application\InterfaceApplication,
    Rusher\Exception\Application as ApplicationException;

class Application extends BaseRusher implements InterfaceApplication
{

  /**
   * @var Rusher\Logger\Logger
   */
  protected $logger;
  protected $routing;
  protected $routing_enabled;

  public function __construct(Routing $routing = null)
  {
    $this->routing = $routing;
    $this->routing_enabled = !empty($routing);
  }

  public function run()
  {
    try
    {
      if ($this->routing_enabled)
      {
        if (empty($this->routing))
        {
          throw new \RuntimeException('"NULL" is not a valid routing instance');
        }
      } else
      {
        $this->log('Routing disabled', Logger::LEVEL_INFO);
      }
    } catch (\Exception $e)
    {
      throw new ApplicationException($e);
    }
  }

  public function log($message, $level = Logger::LEVEL_ERROR)
  {
    if ($this->logger instanceof Logger)
    {
      $this->logger->log($message, $level);
    }
  }

  public function setRouting(Routing $routing)
  {
    $this->routing = $routing;
  }

  public function getRouting()
  {
    return $this->routing;
  }

  public function setLogger(Logger $logger)
  {
    $this->logger = $logger;
  }

  public function getLogger()
  {
    return $this->logger;
  }

  public function getMemoryPeak()
  {
    return memory_get_peak_usage(true);
  }

  public function getMemory()
  {
    return memory_get_usage(true);
  }

}