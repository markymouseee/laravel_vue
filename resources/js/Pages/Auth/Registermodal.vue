<script setup>
    import { useForm, Link } from '@inertiajs/vue3';
    import InputText from '@/Components/InputText.vue'
    import PrimaryButton from '@/Components/PrimaryButton.vue';

    const form = useForm({
        fullname: '',
        username: '',
        email: '',
        password: '',
        password_confirmation: ''
    });

    const submit = () => {
        form.post(route('register'), {
            onFinish: () => form.reset('password')
        })
    };
</script>

<template>
    <form @submit.prevent="submit">
        <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">    
                    <div class="modal-body">
                        <h1 class="modal-title fs-5 mb-3">Registration</h1>
                        <div class="form-floating mb-3">
                            <InputText type="text" :id="floatingInput" id="fullname" placeholder="name@examplee.com" v-model="form.fullname"/>
                            <label for="floatingInput">Fullname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <InputText type="text" :id="floatingInput" id="username" placeholder="name@examplee.com" v-model="form.username"/>
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <InputText type="email" :id="floatingInput" id="email" placeholder="name@example.com" v-model="form.email"/>
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <InputText type="password" :id="floatingInput" id="password" placeholder="name@example.com" v-model="form.password"/>
                            <label for="floatingInput">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <InputText type="password" :id="floatingInput" id="password_confirmation" placeholder="name@example.com" v-model="form.password_confirmation"/>
                            <label for="floatingInput">Confirm password</label>
                        </div>

                        <PrimaryButton type="submit" class="w-100">Register</PrimaryButton>

                        <div class="mt-3">
                            <p>Already have an account?<Link data-bs-toggle="modal" data-bs-target="#loginModal" class="ms-1">Log in</Link></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>