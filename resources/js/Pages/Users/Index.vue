<template>
    <Head>
        <title>Users</title>
    </Head>
    <div class="flex justify-between px-5">
        <div class="flex items-center">
            <h1>Users</h1>
            <Link
                v-if="can.createUser"
                href="/users/create"
                class="ml-2 text-sm text-blue-500"
            >create user</Link>
        </div>
        <input v-model="search" type="text" class="px-2 border rounded-lg" placeholder="search..." />
    </div>
    <div class="p-5">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                                    >Name</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="user in users.data" :key="user.id">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div
                                                    class="text-sm font-medium text-gray-900"
                                                >{{user.name}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap"
                                    >
                                        <a
                                            v-if="user.can.edit"
                                            :href="`/users/edit/${user.id}`"
                                            class="text-indigo-600 hover:text-indigo-900"
                                        >Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Pagination :links="users.links" />
</template>

<script setup>
import Pagination from '../../Shared/Pagination.vue'
import { Link } from "@inertiajs/inertia-vue3"
import { ref } from '@vue/reactivity'
import { watch } from '@vue/runtime-core';
import { Inertia } from '@inertiajs/inertia';
import debounce from "lodash/debounce";

let props = defineProps({ users: Object, filters: Object, can: Object });
let search = ref(props.filters.search);
watch(search, debounce(function (value) {
    Inertia.get("/users", { search: value }, { preserveState: true, replace: true })
}, 500))
</script>