<?php

namespace GeneralSystemsVehicle\JustReadTheInstructions;

use Laravel\Nova\Fields\Field;

class JustReadTheInstructions extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'JustReadTheInstructions';

    /**
     * Display the field as raw HTML using Vue.
     *
     * @return $this
     */
    public function asHtml()
    {
        return $this->withMeta(['asHtml' => true]);
    }
}
