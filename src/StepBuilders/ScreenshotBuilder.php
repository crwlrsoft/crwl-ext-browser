<?php

namespace Crwlr\CrwlExtBrowser\StepBuilders;

use Crwlr\Crawler\Steps\StepInterface;
use Crwlr\CrawlerExtBrowser\Steps\Screenshot;
use Crwlr\CrwlExtensionUtils\ConfigParam;
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

        $step = Screenshot::loadAndTake($this->fileStoragePath);

        $waitAfterPageLoaded = $this->getValueFromConfigArray('waitAfterPageLoaded', $stepConfig);

        if ($waitAfterPageLoaded !== null && $waitAfterPageLoaded > 0.0) {
            $step->waitAfterPageLoaded($waitAfterPageLoaded);
        }

        return $step;
    }

    public function configParams(): array
    {
        return [
            ConfigParam::float('waitAfterPageLoaded')
                ->inputLabel('Wait X seconds')
                ->description('Wait X seconds after the page is fully loaded, before taking the screenshot.'),
        ];
    }
}
