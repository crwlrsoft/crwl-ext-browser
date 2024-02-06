<?php

namespace Crwlr\CrwlExtBrowser\StepBuilders;

use Crwlr\Crawler\Steps\StepInterface;
use Crwlr\CrawlerExtBrowser\Steps\GetColors;
use Crwlr\CrwlExtensionUtils\StepBuilder;
use Exception;

class GetColorsBuilder extends StepBuilder
{
    public function stepId(): string
    {
        return 'browser.getColorsFromImage';
    }

    public function label(): string
    {
        return 'Get the most used colors from an image (e.g. screenshot).';
    }

    /**
     * @throws Exception
     */
    public function configToStep(array $stepConfig): StepInterface
    {
        return GetColors::fromImage();
    }

    public function configParams(): array
    {
        return [];
    }
}
