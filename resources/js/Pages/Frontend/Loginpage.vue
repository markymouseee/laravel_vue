<script setup>
    import FrontendLayout from '@/Layouts/FrontendLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import Loginmodal from '../Auth/Loginmodal.vue';
    import Registermodal from '../Auth/Registermodal.vue';
</script>

<template>
    <div>
        <FrontendLayout>
            <Head title="Log in"/>
            <Loginmodal/>
            <Registermodal/>
        </FrontendLayout>
    </div>
</template>