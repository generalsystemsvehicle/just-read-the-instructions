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

    /**
     * Resolve the field's value for display.
     *
     * @param  mixed  $resource
     * @param  string|null  $attribute
     * @return void
     */
    public function resolveForDisplay($resource, $attribute = null)
    {
        parent::resolveForDisplay($resource, $attribute);
        $this->value = (new Helper)->render($this->value);
    }
}
