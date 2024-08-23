<script setup>
    import InputText from '@/Components/InputText.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import { useForm } from '@inertiajs/vue3';
    import { Link } from '@inertiajs/vue3';

    const form = useForm({
        email: '',
        password: ''
    });

    const submit = () => {
        form.post(route('login'), {
            onFinish: () => form.reset('password')
        });
    };
</script>

<template>
    <form @submit.prevent="submit">
       <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="modal-title fs-5 mb-3">Log in</h1>
                    <div class="form-floating mb-3">
                        <InputText type="email" id="floatingInput" v-model="form.email" placeholder="name@example.com"/>
                        <label for="floatingInput">Username or email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <InputText type="password" id="floatingInput" v-model="form.password" placeholder="name@example.com"/>
                        <label for="floatingInput">Password</label>
                    </div>
                    
                    <PrimaryButton type="submit" class="w-100">Log in</PrimaryButton>
                    <div class="d-flex justify-content-between mt-3">
                        <Link href="">Forgot password?</Link>
                        <Link href="">Create account</Link>
                    </div>
                </div>
            </div>
        </div>
       </div>
        
    </form>
</template>
