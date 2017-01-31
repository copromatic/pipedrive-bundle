<?php

namespace PipeDriveBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {

    public function getConfigTreeBuilder() {

        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('pipedrive');

        $rootNode
            ->children()
                ->scalarNode('key')->end()
            ->end()
        ;

        return $treeBuilder;
    }

}