<?php

namespace Tests\Weew\Commander\ContainerAware\Invokers;

use PHPUnit_Framework_TestCase;
use stdClass;
use Tests\Weew\Commander\ContainerAware\Stubs\FakeCommandHandler;
use Tests\Weew\Commander\ContainerAware\Stubs\FakeTaskHandler;
use Tests\Weew\Commander\ContainerAware\Stubs\FooStub;
use Weew\Commander\ContainerAware\Invokers\CommandHandlerInvoker;
use Weew\Commander\Definition;
use Weew\Container\Container;

class CommandHandlerInvokerTest extends PHPUnit_Framework_TestCase {
    public function test_invoke() {
        $invoker = new CommandHandlerInvoker(new Container());
        $definition = new Definition(stdClass::class, new FakeCommandHandler(new FooStub()));
        $result = $invoker->invoke($definition, (object) ['foo' => 'bar']);
        $this->assertEquals('bar', $result);

        $definition = new Definition(stdClass::class, FakeCommandHandler::class);
        $result = $invoker->invoke($definition, (object) ['foo' => 'bar']);
        $this->assertEquals('bar', $result);
    }

    public function test_invoke_with_task() {
        $invoker = new CommandHandlerInvoker(new Container());
        $definition = new Definition(stdClass::class, new FakeTaskHandler(new FooStub()));
        $result = $invoker->invoke($definition, (object) ['foo' => 'bar']);
        $this->assertEquals('bar', $result);

        $definition = new Definition(stdClass::class, FakeCommandHandler::class);
        $result = $invoker->invoke($definition, (object) ['foo' => 'bar']);
        $this->assertEquals('bar', $result);
    }
}
