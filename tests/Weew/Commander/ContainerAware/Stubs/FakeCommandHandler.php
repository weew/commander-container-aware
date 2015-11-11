<?php

namespace Tests\Weew\Commander\ContainerAware\Stubs;

use Weew\Commander\ICommandHandler;

class FakeCommandHandler implements ICommandHandler {
    public function __construct(FooStub $stub) {}

    public function handle($command) {
        return $command->foo;
    }
}
