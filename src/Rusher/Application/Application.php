<?php

namespace Rusher\Application;

use Rusher\BaseRusher,
    Rusher\Logger\Logger,
    Rusher\Routing\Routing,
    Rusher\Interfaces\Application\Application as InterfaceApplication;

class Application extends BaseRusher implements InterfaceApplication
{

  /**
   * @var Rusher\Logger\Logger
   */
  protected $logger;
  protected $routing;

  public function run()
  {
    
  }

  public function log($message, $level)
  {
    if ($this->logger instanceof Logger)
    {
      $this->logger->log($message, $level);
    }
  }

  public function setRouting(Routing $routing)
  {
    
  }

  public function getRouting()
  {
    
  }

  public function setLogger(Logger $logger)
  {
    
  }

  public function getLogger()
  {
    
  }

}