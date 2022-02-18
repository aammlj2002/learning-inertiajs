<template>
    <Head>
        <title>Users</title>
    </Head>
    <h1>Users</h1>
    <ul>
        <li v-for="user in users" :key="user.id" v-text="user.user"></li>
    </ul>
    <p style="margin-top: 500px">the current time is {{time}}</p>
    <Link href="/users" preserve-scroll>Refresh</Link>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3"

export default {
    props: { users: String },
    components: { Link }
}
</script>