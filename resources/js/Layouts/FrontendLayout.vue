<script setup>
    import Navbar from '@/Components/Navbar.vue';
    import Loginmodal from '@/Pages/Auth/Loginmodal.vue';
    import Registermodal from '@/Pages/Auth/Registermodal.vue';
</script>

<template>
    <div>
        <Navbar/>
        <slot/>
        <Loginmodal/>
        <Registermodal/>
    </div>
</template>
