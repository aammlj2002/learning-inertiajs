<template>
    <h1>Users</h1>
    <p style="margin-top: 500px">the current time is {{time}}</p>
    <Link href="/users" preserve-scroll>Refresh</Link>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3"
import Layout from '../Shared/Layout'

export default {
    layout: Layout,
    components: { Link }
}
</script>

<style>
</style>