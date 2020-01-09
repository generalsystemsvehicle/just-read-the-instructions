<template>
    <default-field :field="field" :errors="errors" :fullWidthContent="true">
        <template slot="field">
            <textarea
                :value="value"
                :name="field.name"
                :id="uniqueId"
                :placeholder="field.name"
                @change="handleChange"
                @input="handleChange"
            />
        </template>
    </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from "laravel-nova";

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ["resourceName", "resourceId", "field"],

    created: function() {
        if (window.Laraberg.editor != null) {
            window.location.reload();
        }
        window.addEventListener("keyup", this.syncData);
        window.addEventListener("click", this.syncData);
    },

    mounted: function() {
        Laraberg.init(this.uniqueId, {
            laravelFilemanager: true
        });
    },

    computed: {
        uniqueId() {
            return "justreadtheinstructions-" + this._uid + "-" + this.field.name;
        }
    },

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || "";
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value || "");
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value;
        },

        /**
         * Update the fields internal value based on the Laraberg state
         */
        syncData() {
            this.value = Laraberg.getContent();
        }
    }
};
</script>
