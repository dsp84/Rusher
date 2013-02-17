<?php

namespace Rusher\Application;

use Rusher\Routing\Routing,
    Rusher\Logger\Logger;

interface InterfaceApplication
{

  public function run();

  public function setRouting(Routing $routing);

  public function getRouting();

  public function setLogger(Logger $logger);

  public function getLogger();
}