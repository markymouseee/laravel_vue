<script setup>
    import { onMounted, ref } from 'vue';

    const model = defineModel({
        type: String,
        required: true
    });

    const input = ref(null);

    onMounted(() => {
        if(input.value.hasAttribute('autofocus')){
            input.value.focus();
        }
    });
</script>

<template>
    <input class="form-control text-input" id="floatingInput" v-model="model" ref="input"/>
</template>

<style scoped>
    .text-input:focus-visible{
        border: 2px solid #198754;
        border-color: #198754;
        box-shadow: 0 0 5px 5px #1987545e;
    }
</style>
