<template>
    <div class="max-w-md mx-auto">
        <Head title="Create User" />
        <h1 class="text-3xl">Update User</h1>
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
                <button
                    type="submit"
                    class="px-2 py-4 text-white bg-blue-400 rounded hover:bg-blue-500"
                >Update</button>
            </div>
        </form>
    </div>
</template>
<script >
import { useForm } from "@inertiajs/inertia-vue3";

export default {
    props: {
        user: Object,
        errors: Object
    },
    setup(props) {
        let form = useForm({
            name: props.user.name,
            email: props.user.email
        })
        let submit = () => {
            form.put(`/users/update/${props.user.id}`);
        }
        return { form, submit }
    }
}

</script>
<style scoped>
</style>