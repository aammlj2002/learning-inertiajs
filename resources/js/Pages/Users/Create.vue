<template>
    <div class="max-w-md mx-auto">
        <Head title="Create User" />
        <h1 class="text-3xl">Create New User</h1>
        <form @submit.prevent="submit" class="mt-8">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-xs font-bold text-gray-800 uppercase">Name</label>
                <input
                    v-model="form.name"
                    type="text"
                    class="w-full p-2 border border-gray-400"
                    name="name"
                    id="name"
                />
                <div v-if="errors.name" class="text-xs text-red-500">{{errors.name}}</div>
            </div>
            <div class="mb-6">
                <label
                    for="email"
                    class="block mb-2 text-xs font-bold text-gray-800 uppercase"
                >Email</label>
                <input
                    v-model="form.email"
                    type="email"
                    class="w-full p-2 border border-gray-400"
                    name="email"
                    id="email"
                />
                <div v-if="errors.email" class="text-xs text-red-500">{{errors.email}}</div>
            </div>
            <div class="mb-6">
                <label
                    for="password"
                    class="block mb-2 text-xs font-bold text-gray-800 uppercase"
                >Password</label>
                <input
                    v-model="form.password"
                    type="password"
                    class="w-full p-2 border border-gray-400"
                    name="password"
                    id="password"
                />
                <div v-if="errors.password" class="text-xs text-red-500">{{errors.password}}</div>
            </div>
            <div class="mb-6">
                <button
                    type="submit"
                    class="px-2 py-4 text-white bg-blue-400 rounded hover:bg-blue-500"
                >Submit</button>
            </div>
        </form>
    </div>
</template>
<script setup>
import { Inertia } from "@inertiajs/inertia";
import { ref } from "@vue/reactivity";

defineProps({ errors: Object })
let form = ref({
    name: "",
    email: "",
    password: ""
})
let submit = () => {
    Inertia.post("/users", form.value)
}
</script>
<style scoped>
</style>