<?php

namespace GeneralSystemsVehicle\JustReadTheInstructions;

use VanOns\Laraberg\Helpers\BlockHelper;
use VanOns\Laraberg\Helpers\EmbedHelper;

class Helper
{
    public function render(string $html)
    {
        return BlockHelper::renderBlocks(EmbedHelper::renderEmbeds($html));
    }
}
