<?php

namespace Tests\Weew\Commander\ContainerAware\Invokers;

use PHPUnit_Framework_TestCase;
use stdClass;
use Tests\Weew\Commander\ContainerAware\Stubs\FooStub;
use Weew\Commander\ContainerAware\Invokers\CallableHandlerInvoker;
use Weew\Commander\Definition;
use Weew\Container\Container;

class CallableHandlerInvokerTest extends PHPUnit_Framework_TestCase {
    public function test_invoke() {
        $invoker = new CallableHandlerInvoker(new Container());
        $definition = new Definition(stdClass::class, function(FooStub $stub, $command) {
            return $command->foo;
        });
        $result = $invoker->invoke($definition, (object) ['foo' => 'bar']);
        $this->assertEquals('bar', $result);
    }
}
