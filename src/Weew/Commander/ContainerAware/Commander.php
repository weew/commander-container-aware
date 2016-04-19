<?php

namespace Weew\Commander\ContainerAware;

use Weew\Commander\Commander as BaseCommander;
use Weew\Commander\ContainerAware\Invokers\CallableHandlerInvoker;
use Weew\Commander\ContainerAware\Invokers\CommandHandlerInvoker;
use Weew\Container\IContainer;

class Commander extends BaseCommander {
    /**
     * @var IContainer
     */
    protected $container;

    /**
     * Commander constructor.
     *
     * @param IContainer $container
     */
    public function __construct(IContainer $container) {
        $this->setContainer($container);
        parent::__construct();
    }

    /**
     * @return IContainer
     */
    public function getContainer() {
        return $this->container;
    }

    /**
     * @param IContainer $container
     */
    public function setContainer(IContainer $container) {
        $this->container = $container;
    }

    /**
     * @return array
     */
    protected function createDefaultInvokers() {
        return [
            new CallableHandlerInvoker($this->container),
            new CommandHandlerInvoker($this->container),
        ];
    }
}
