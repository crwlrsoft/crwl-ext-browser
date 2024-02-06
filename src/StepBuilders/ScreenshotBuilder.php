<?php

namespace Crwlr\CrwlExtBrowser\StepBuilders;

use Crwlr\Crawler\Steps\StepInterface;
use Crwlr\CrawlerExtBrowser\Steps\Screenshot;
use Crwlr\CrwlExtensionUtils\StepBuilder;
use Exception;

class ScreenshotBuilder extends StepBuilder
{
    public function stepId(): string
    {
        return 'browser.screenshot';
    }

    public function label(): string
    {
        return 'Load a page in the browser and take a screenshot.';
    }

    /**
     * @throws Exception
     */
    public function configToStep(array $stepConfig): StepInterface
    {
        if (empty($this->fileStoragePath)) {
            throw new Exception('No file storage path defined.');
        }

        return Screenshot::loadAndTake($this->fileStoragePath);
    }

    public function configParams(): array
    {
        return [];
    }
}
