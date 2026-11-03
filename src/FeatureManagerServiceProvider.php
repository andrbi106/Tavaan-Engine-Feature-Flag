<?php

declare(strict_types=1);

namespace Tavaan\Engine\FeatureFlag;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\FeatureFlag\Contracts\FeatureManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * FeatureManagerServiceProvider — ثبت سرویس‌های موتور FeatureManager.
 */
final class FeatureManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(FeatureManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new FeatureManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('feature', $this->app->get(FeatureManagerInterface::class));

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            FeatureManagerInterface::class,
            'feature',
        ];
    }
}