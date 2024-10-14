<script setup>
    import { Link } from '@inertiajs/vue3';
    import AppLogo from './AppLogo.vue';
</script>

<template>
    <nav class="navbar navbar-expand-lg bg-success">
<<<<<<< HEAD
        <div class="container container-fluid">
           <Link :href="route('homepage')"  class="navbar-brand text-light" style="font-family: 'Times New Roman', Times, serif; font-size: 22px; font-weight: 900;">
=======
        <div class="container-fluid">
           <Link :href="route('homepage')"  class="navbar-brand text-light" style="font-family: 'Times New Roman', Times, serif; font-size: 22px; font-weight:800;">
>>>>>>> 8d7564a728df0289ac9d3dcc993aba528d128398
            <AppLogo/>
            Legacy College of Compostela
           </Link>

           <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navabarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-5">
                <li class="nav-item">
                    <Link :href="route('homepage')" class="nav-link active me-5 text-light" aria-current="page">Home</Link>
                </li>
                <li class="nav-item">
                    <Link :href="route('aboutpage')" class="nav-link active me-5 text-light" aria-current="page">About</Link>
                </li>
                <li class="nav-item">
                    <Link :href="route('contactpage')" class="nav-link active me-5 text-light" aria-current="page">Contact</Link>
                </li>
                <li class="nav-item">
                    <Link :href="route('loginpage')" class="nav-link active me-5 text-light" aria-current="page">Log in</Link>
                </li>
            </ul>
           </div>
        </div>
    </nav>
</template>

<style scoped>
    .nav-link:hover{
        text-decoration: underline;
    }
</style>
