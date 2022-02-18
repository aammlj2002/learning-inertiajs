<template>
    <Head>
        <title>Users</title>
    </Head>
    <h1>Users</h1>
    <p style="margin-top: 500px">the current time is {{time}}</p>
    <Link href="/users" preserve-scroll>Refresh</Link>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3"

export default {
    components: { Link }
}
</script>