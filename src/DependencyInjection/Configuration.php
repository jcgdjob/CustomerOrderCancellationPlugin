<?php

declare(strict_types=1);

namespace Sylius\CustomerOrderCancellationPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('sylius_customer_order_cancellation');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
