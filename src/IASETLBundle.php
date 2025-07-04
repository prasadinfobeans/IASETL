<?php

// src/IASETLBundle.php
namespace IASETL\Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class IASETLBundle extends Bundle {}

// src/DependencyInjection/IASETLExtension.php
namespace IASETL\Bundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Extension\Extension;

class IASETLExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../../config'));
        $loader->load('services.yaml');
    }
}