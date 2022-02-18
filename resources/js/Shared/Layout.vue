<template>
    <Head>
        <meta type="description" content="information about layout" head-key="description" />
    </Head>
    <Nav></Nav>
    <slot />
</template>

<script>
import Nav from './Nav'
export default {
    components: { Nav }
}
</script>