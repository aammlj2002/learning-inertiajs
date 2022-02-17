<template>
    <Layout>
        <h1>Users</h1>
        <p style="margin-top: 500px">the current time is {{time}}</p>
        <Link href="/users" preserve-scroll>Refresh</Link>
    </Layout>
</template>

<script>
import Layout from '../Shared/Layout'
import { Link } from "@inertiajs/inertia-vue3"
export default {
    components: {
        Layout, Link
    },
    props: {
        time: String
    },
}
</script>

<style>
</style>