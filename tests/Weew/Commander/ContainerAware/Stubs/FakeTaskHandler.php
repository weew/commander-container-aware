<?php

namespace Tests\Weew\Commander\ContainerAware\Stubs;

class FakeTaskHandler {
    public function __construct(FooStub $stub) {}

    public function handle($task) {
        return $task->foo;
    }
}
