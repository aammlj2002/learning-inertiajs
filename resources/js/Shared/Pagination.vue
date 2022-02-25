<template>
    <div>
        <Component
            v-for="link in links"
            :is="link.url ? 'Link' : 'span'"
            :key="link.url"
            :href="link.url"
            v-html="link.label"
            class="p-1"
            :class="link.url ? '' : 'text-gray-500'"
        />
    </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3"
export default {
    components: { Link },
    props: {
        links: Array
    }
}
</script>

<style>
</style>