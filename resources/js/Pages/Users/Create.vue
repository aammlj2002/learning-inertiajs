<template>
    <div class="max-w-md mx-auto">
        <Head title="Create User" />
        <h1 class="text-3xl">Create New User</h1>
        <form action="/" method="POST" class="mt-8">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-xs font-bold text-gray-800 uppercase">Name</label>
                <input
                    type="text"
                    class="w-full p-2 border border-gray-400"
                    name="name"
                    id="name"
                    required
                />
            </div>
            <div class="mb-6">
                <label
                    for="email"
                    class="block mb-2 text-xs font-bold text-gray-800 uppercase"
                >Email</label>
                <input
                    type="text"
                    class="w-full p-2 border border-gray-400"
                    name="email"
                    id="email"
                    required
                />
            </div>
            <div class="mb-6">
                <label
                    for="password"
                    class="block mb-2 text-xs font-bold text-gray-800 uppercase"
                >Password</label>
                <input
                    type="text"
                    class="w-full p-2 border border-gray-400"
                    name="password"
                    id="password"
                    required
                />
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
<script>
export default {

}
</script>
<style scoped>
</style>