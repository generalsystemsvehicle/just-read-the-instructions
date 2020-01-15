<?php

namespace GeneralSystemsVehicle\JustReadTheInstructions;

use VanOns\Laraberg\Helpers\BlockHelper;
use VanOns\Laraberg\Helpers\EmbedHelper;

class Helper
{
    public function render(?string $html = '', bool $wrapHtml = true)
    {
        $html = $html ?? '';
        $rendered = $wrapHtml ? '<div class="gutenberg__content wp-embed-responsive">' : '';
        $rendered .= BlockHelper::renderBlocks(EmbedHelper::renderEmbeds($html));
        $rendered .= $wrapHtml ? '</div>' : '';
        return $rendered;
    }
}
