<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm } from '@inertiajs/vue3';
const form = useForm({
    name: '',
    qty: 0,
    unit: '',
});

const submitForm = () => {
    form.post('/items');
};

</script>

<template>
     <Head title="Add Items" />

    <AuthenticatedLayout>
         <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Add Item
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form @submit.prevent="submitForm" action="/items" method="POST">
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Namee</label>
                                <input type="text" v-model="form.name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required />
                                <div class="bg-red-200 p-2 mt-2 rounded" v-if="form.errors.name">{{ form.errors.name }}</div>
                            </div>
                            <div class="mb-4">
                                <label for="qty" class="block text-sm font-medium text-gray-700">Quantityy</label>
                                <input type="number" v-model="form.qty" id="qty" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required />
                                <div class="bg-red-200 p-2 mt-2 rounded" v-if="form.errors.qty">{{ form.errors.qty }}</div>
                            </div>
                            <div class="mb-4">
                                <label for="unit" class="block text-sm font-medium text-gray-700">Unit</label>
                                <input type="text" v-model="form.unit" id="unit" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required />
                                <div class="bg-red-200 p-2 mt-2 rounded" v-if="form.errors.unit">{{ form.errors.unit }}</div>
                            </div>
                            <div class="flex items-center justify-end">
                                <primary-button>
                                    <span>Add Item</span>
                                </primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
