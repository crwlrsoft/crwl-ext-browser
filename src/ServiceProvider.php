<?php

namespace Crwlr\CrwlExtBrowser;

use Crwlr\CrwlExtBrowser\StepBuilders\GetColorsBuilder;
use Crwlr\CrwlExtBrowser\StepBuilders\ScreenshotBuilder;
use Crwlr\CrwlExtensionUtils\Exceptions\DuplicateExtensionPackageException;
use Crwlr\CrwlExtensionUtils\Exceptions\DuplicateStepIdException;
use Crwlr\CrwlExtensionUtils\Exceptions\InvalidStepException;
use Crwlr\CrwlExtensionUtils\ExtensionPackageManager;
use Illuminate\Contracts\Container\BindingResolutionException;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * @throws DuplicateExtensionPackageException
     * @throws DuplicateStepIdException
     * @throws InvalidStepException
     * @throws BindingResolutionException
     */
    public function register(): void
    {
        $this->app->make(ExtensionPackageManager::class)
            ->registerPackage('crwlr/crawler-ext-browser')
            ->registerStep(ScreenshotBuilder::class)
            ->registerStep(GetColorsBuilder::class);
    }
}
