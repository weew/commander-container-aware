<?php

namespace Weew\Commander\ContainerAware\Invokers;

use Weew\Commander\ICommandHandler;
use Weew\Commander\Invokers\CommandHandlerInvoker as BaseInvoker;
use Weew\Container\IContainer;

class CommandHandlerInvoker extends BaseInvoker {
    /**
     * @var IContainer
     */
    protected $container;

    /**
     * CallableHandlerInvoker constructor.
     *
     * @param IContainer $container
     */
    public function __construct(IContainer $container) {
        $this->container = $container;
    }

    /**
     * @param $class
     *
     * @return mixed
     */
    protected function createHandler($class) {
        return $this->container->get($class);
    }

    /**
     * @param ICommandHandler $handler
     * @param $command
     *
     * @return mixed
     */
    protected function invokeHandler(ICommandHandler $handler, $command) {
        return $this->container->callMethod(
            $handler, 'handle', ['command' => $command]
        );
    }
}
