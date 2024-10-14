<script setup>
const props = defineProps({
    message: {
        type: String,
        default: ''
    }
});
</script>

<template>
    <!-- Show error message only if it exists -->
    <div v-if="props.message" class="invalid-feedback">
        <p>{{ props.message }}</p>
    </div>
</template>

<style scoped>
.invalid-feedback {
    color: #dc3545; /* Bootstrap's default error color */
    font-size: 0.875em; /* Bootstrap's default font size for errors */
}
</style>
