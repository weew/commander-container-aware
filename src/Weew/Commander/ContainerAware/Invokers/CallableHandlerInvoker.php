<?php

namespace Weew\Commander\ContainerAware\Invokers;

use Weew\Commander\Invokers\CallableHandlerInvoker as BaseInvoker;
use Weew\Container\IContainer;

class CallableHandlerInvoker extends BaseInvoker {
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
     * @param callable $handler
     * @param $command
     *
     * @return mixed
     */
    protected function invokeHandler(callable $handler, $command) {
        return $this->container->call(
            $handler, ['command' => $command, 'task' => $command]
        );
    }
}
