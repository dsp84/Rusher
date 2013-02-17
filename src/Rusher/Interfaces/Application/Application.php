<?php

namespace Rusher\Interfaces\Application;

use Rusher\Routing\Routing,
   Rusher\Logger\Logger;

interface Application
{

  public function run();

  public function setRouting(Routing $routing);

  public function getRouting();

  public function setLogger(Logger $logger);

  public function getLogger();
}