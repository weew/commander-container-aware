<?php

namespace Tests\Weew\Commander\ContainerAware;

use PHPUnit_Framework_TestCase;
use Weew\Commander\ContainerAware\Commander;
use Weew\Commander\ContainerAware\Invokers\CallableHandlerInvoker;
use Weew\Commander\ContainerAware\Invokers\CommandHandlerInvoker;
use Weew\Container\Container;

class CommanderTest extends PHPUnit_Framework_TestCase {
    public function test_default_invokers() {
        $commander = new Commander(new Container());
        $invokers = $commander->getCommandHandlerInvokers();

        $this->assertEquals(2, count($invokers));
        $this->assertTrue($invokers[0] instanceof CallableHandlerInvoker);
        $this->assertTrue($invokers[1] instanceof CommandHandlerInvoker);
    }
}
