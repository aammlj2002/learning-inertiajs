<template>
    <nav>
        <ul>
            <li>
                <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
            </li>
            <li>
                <NavLink href="/users" :active="$page.component === 'Users'">Users</NavLink>
            </li>
            <li>
                <NavLink href="/settings" :active="$page.component === 'Settings'">Settings</NavLink>
            </li>
            <li>
                <Link href="/logout" method="post" as="button" :data="{foo:'bar'}">Log out</Link>
            </li>
            <li>{{username}}</li>
        </ul>
    </nav>
</template>

<script>
import NavLink from './NavLink'
import { Link } from "@inertiajs/inertia-vue3"
export default {
    components: {
        NavLink, Link
    },
    computed: {
        username() {
            return this.$page.props.auth.user.username;
        }
    }
}
</script>

<style>
.text-red {
    color: red;
}
</style>