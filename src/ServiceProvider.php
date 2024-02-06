<?php

namespace Crwlr\CrwlExtBrowser;

use Crwlr\CrwlExtBrowser\StepBuilders\GetColorsBuilder;
use Crwlr\CrwlExtBrowser\StepBuilders\ScreenshotBuilder;
use Crwlr\CrwlExtensionUtils\Exceptions\DuplicateExtensionPackageException;
use Crwlr\CrwlExtensionUtils\Exceptions\DuplicateStepIdException;
use Crwlr\CrwlExtensionUtils\Exceptions\InvalidStepException;
use Crwlr\CrwlExtensionUtils\ExtensionPackageManager;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * @throws DuplicateExtensionPackageException|DuplicateStepIdException|InvalidStepException
     */
    public function register(): void
    {
        ExtensionPackageManager::singleton()
            ->registerPackage('crwlr/crawler-ext-browser')
            ->registerStep(ScreenshotBuilder::class)
            ->registerStep(GetColorsBuilder::class);
    }
}
