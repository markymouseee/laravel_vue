<script setup>
    defineProps({
        type: {
            type: String,
            default: "text"
        }
    });
</script>

<template>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" placeholder="name@example.com" id="floatingInput">
        <label for="floatingInput">Username or email</label>
    </div>
</template>
