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
        form.post(route('registeruser'), {
            onFinish: () => {
                form.reset('password')
            console.log("Submit done")
            },
            onError: () => {
                console.log("Error")
            }
        })
    };
</script>

<template>
    <form @submit.prevent="submit">
        <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="../../../images/logo.png" class="app-logo ">
                        <p style="font-family: 'Times New Roman', Times, serif; font-size: 25px;" class="text-success fw-bolder">Legacy College of Compostela</p>
                        <h1 class="modal-title fs-5 mb-3 text-success">Registration</h1>
                        <div class="form-floating mb-3">
                            <InputText type="text"  id="fullname" placeholder="name@examplee.com" v-model="form.fullname"/>
                            <label for="floatingInput">Fullname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <InputText type="text" id="username" placeholder="name@examplee.com" v-model="form.username"/>
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <InputText type="email" id="email" placeholder="name@example.com" v-model="form.email"/>
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <InputText type="password"  id="password" placeholder="name@example.com" v-model="form.password"/>
                            <label for="floatingInput">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <InputText type="password"  id="password_confirmation" placeholder="name@example.com" v-model="form.password_confirmation"/>
                            <label for="floatingInput">Confirm password</label>
                        </div>

                        <PrimaryButton type="submit" class="w-100 bg-success">Register</PrimaryButton>

                        <div class="mt-3">
                            <p>Already have an account?<Link data-bs-toggle="modal" data-bs-target="#loginModal" class="ms-1 text-success">Log in</Link></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>

<style scoped>
    .app-logo{
        height:100px;
    }
</style>
