<template>
    <panel-item :field="field" class="gutenberg__content wp-embed-responsive" />
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
