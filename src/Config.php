<?php
// @codingStandardsIgnoreFile

use Aura\Di\Container;
use Aura\Di\ContainerConfig;

class Config extends ContainerConfig
{
	protected $configs;

    public function __construct()
    {
        $this->configs = [
            new Config\Routes,
            new Config\Application
        ];
    }

    /**
     * @SuppressWarnings(PHPMD.ShortVariable)
     */
    public function define(Container $di)
    {
		foreach ($this->configs as $config) {
            $config->define($di);
        }
    }

    /**
     * @SuppressWarnings(PHPMD.ShortVariable)
     */
    public function modify(Container $di)
    {
		foreach ($this->configs as $config) {
            $config->modify($di);
        }
    }
}
