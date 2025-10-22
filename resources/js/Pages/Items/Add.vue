<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
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
    </AuthenticatedLayout>
</template>