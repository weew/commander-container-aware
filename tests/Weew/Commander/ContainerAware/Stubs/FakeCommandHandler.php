<?php

namespace Tests\Weew\Commander\ContainerAware\Stubs;

class FakeCommandHandler {
    public function __construct(FooStub $stub) {}

    public function handle($command) {
        return $command->foo;
    }
}
