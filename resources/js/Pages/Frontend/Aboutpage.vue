<script setup>
    import FrontendLayout from '@/Layouts/FrontendLayout.vue';
    import { Head } from '@inertiajs/vue3';

    defineProps({
        title: String
    });
</script>

<template>
    <div>
        <FrontendLayout>
            <Head title="About"/>
            <h1>{{ title }} page</h1>
        </FrontendLayout>
    </div>
</template>
