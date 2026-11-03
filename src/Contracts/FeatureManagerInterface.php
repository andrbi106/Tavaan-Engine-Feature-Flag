<?php

declare(strict_types=1);

namespace Tavaan\Engine\FeatureFlag\Contracts;

/**
 * قرارداد FeatureManager.
 *
 * @see \Tavaan\Engine\FeatureFlag\FeatureManager
 * @api 1.0
 */
interface FeatureManagerInterface
{
    /**
     * متد enabled.
     *
     * @return mixed
     */
    public function enabled(/* ... */): mixed;

    /**
     * متد for.
     *
     * @return mixed
     */
    public function for(/* ... */): mixed;

    /**
     * متد value.
     *
     * @return mixed
     */
    public function value(/* ... */): mixed;

    /**
     * متد define.
     *
     * @return mixed
     */
    public function define(/* ... */): mixed;

    /**
     * متد kill.
     *
     * @return mixed
     */
    public function kill(/* ... */): mixed;

    /**
     * متد revive.
     *
     * @return mixed
     */
    public function revive(/* ... */): mixed;

    /**
     * متد experiment.
     *
     * @return mixed
     */
    public function experiment(/* ... */): mixed;

    /**
     * متد percentage.
     *
     * @return mixed
     */
    public function percentage(/* ... */): mixed;
}