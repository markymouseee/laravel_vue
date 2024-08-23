<script setup>
    import InputText from '@/Components/InputText.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import { useForm } from '@inertiajs/vue3';

    const form = useForm({
        email: '',
        password: ''
    });

    const submit = () => {
        form.post(route('login'), {
            onFinish: () => form.reset('password')
        })
    }
</script>

<template>
    <from @submit.prevent="submit">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <InputText type="email" id="email" v-model="form.email" required/>

                    <PrimaryButton type="submit" :class="form.processing">Log in</PrimaryButton>
                </div>
            </div>
        </div>
      </div>
    </from>
</template>
