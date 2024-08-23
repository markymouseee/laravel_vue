<script setup>
    import Navbar from '@/Components/Navbar.vue';
    import Loginmodal from '@/Pages/Auth/Loginmodal.vue';
</script>

<template>
    <div>
        <Navbar/>
        <slot/>
        <Loginmodal/>
    </div>
</template>
