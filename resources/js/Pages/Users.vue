<template>
    <Layout>
        <h1>Users</h1>
        <p style="margin-top: 500px">the current time is {{time}}</p>
        <Link href="/users" preserve-scroll>Refresh</Link>
    </Layout>
</template>

<script setup>
import Layout from '../Shared/Layout'
import { Link } from "@inertiajs/inertia-vue3"

defineProps({
    time: String
})
</script>

<style>
</style>