<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<template>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
           <a href="#" class="navbar-brand">Navbar</a>

           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navabarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <Link :href="route('homepage')" class="nav-link active" aria-current="page">Home</Link>
                </li>
                <li class="nav-item">
                    <Link :href="route('aboutpage')" class="nav-link active" aria-current="page">About</Link>
                </li>
                <li class="nav-item">
                    <Link :href="route('contactpage')" class="nav-link active" aria-current="page">Contact</Link>
                </li>
            </ul>
           </div>
        </div>
    </nav>
</template>
