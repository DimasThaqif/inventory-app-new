<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';

    defineProps({
        items: Array
    })
</script>

<template>
     <Head title="Items" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Item List
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <primary-button>
                            <a href="/items/create" class="no-underline text-white" >Add Item</a>
                        </primary-button>

                        <div v-if="$page.props.flash.success" class="mt-4 p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                            {{ $page.props.flash.success }}
                        </div>

                        <table class="table-auto w-full mt-4 border-collapse border border-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Unit</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="(item, index) in items" :key="index">
                                    <td class="px-6 py-4 whitespace-nowrap">{{ ++index }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ item.name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ item.qty }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ item.unit }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap"> edit | stock card</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
