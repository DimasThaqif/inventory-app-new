<script setup>
    defineProps({
        items: Array
    });
</script>

<template>

<div>
    <h1>Item list</h1>
    <ul>
        <li v-for="item in items" :key="item.id">{{ item }}</li>
    </ul>
</div>

</template>