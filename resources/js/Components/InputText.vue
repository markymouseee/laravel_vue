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
    <input class="form-control" id="floatingInput" v-model="model" ref="input"/>
</template>
