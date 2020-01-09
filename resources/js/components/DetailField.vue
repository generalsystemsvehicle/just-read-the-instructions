<template>
    <div class="gutenberg__content wp-embed-responsive">
        <panel-item :field="field" />
    </div>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
