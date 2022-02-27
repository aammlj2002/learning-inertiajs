<template>
    <Head title="Login" />
    <main>
        <div class="flex items-center justify-center min-h-full px-4 py-12 sm:px-6 lg:px-8">
            <div class="w-full max-w-md space-y-8">
                <div>
                    <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900">Login</h2>
                </div>
                <form class="mt-8 space-y-6" @submit.prevent="submit">
                    <input type="hidden" name="remember" value="true" />
                    <div class="-space-y-px rounded-md shadow-sm">
                        <div>
                            <label for="email-address" class="sr-only">Email address</label>
                            <input
                                v-model="form.email"
                                id="email-address"
                                name="email"
                                type="email"
                                autocomplete="email"
                                required
                                class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-none appearance-none rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Email address"
                            />
                        </div>
                        <div>
                            <label for="password" class="sr-only">Password</label>
                            <input
                                v-model="form.password"
                                id="password"
                                name="password"
                                type="password"
                                autocomplete="current-password"
                                required
                                class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-none appearance-none rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Password"
                            />
                        </div>
                    </div>
                    <div>
                        <button
                            type="submit"
                            class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md group hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'
export default {
    layout: null,
}
</script>
<script setup>
let form = useForm({
    email: "",
    password: ""
})
let submit = () => {
    form.post("/login")
}
</script>


<style>
</style>