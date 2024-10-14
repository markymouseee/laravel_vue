<script setup>
    import InputText from '@/Components/InputText.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import { useForm } from '@inertiajs/vue3';
    import { Link } from '@inertiajs/vue3';
    import { ref } from 'vue';

    defineProps({
        errormessage: {
            type: String
        }
    });

    const showPasswordIcon = ref(false);

    function toggleIconShowPassword(){
        showPasswordIcon.value = !showPasswordIcon.value;
    }

    const form = useForm({
        email: '',
        password: ''
    });

    const submit = () => {
        form.post(route('loginuser'), {
            onFinish: () => {
                form.reset('password')
                console.log("Success")
            },
            onError: () => {
                console.log("Error");
                console.log(errors)
            }
        });
    };
</script>

<template>
    <div class="login-container">
        <form @submit.prevent="submit" class="login-form">
            <div class="d-flex justify-content-center">
                <div class="container bg-light d-flex justify-content-center">
                    <div class="card text-center login-wrapper">
                        <div class="card-body">
                            <img src="../../../images/logo.png" class="app-logo">
                            <p style="font-family: 'Times New Roman', Times, serif; font-size: 25px;" class="text-success fw-bolder">Legacy College of Compostela</p>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-weight: 700; font-size: 22px;" class="text-success">Student Portal</p>
                            <div class="form-floating mb-3">
                                <InputText type="text"  id="email" placeholder="" v-model="form.email"/>
                                <label for="floatingInput">Username or email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <InputText :type="showPasswordIcon ? 'text' : 'password'"  id="password" placeholder="@" v-model="form.password"/>
                                <i :class="showPasswordIcon ? 'fa fa-eye' : 'fa fa-eye-slash'" class="position-absolute fs-5 text-secondary icon-password" @click="toggleIconShowPassword"></i>
                                <label for="floatingInput">Password</label>
                            </div>

                            <PrimaryButton class="btn btn-success w-100 mt-3">Log in</PrimaryButton>

                            <div class="d-flex justify-content-between mt-3 fw-bold">
                                <Link href="#" class="text-decoration-none text-success">Forgot password?</Link>
                                <Link href="#" data-bs-toggle="modal" data-bs-target="#registrationModal" class="text-decoration-none text-success">Create account</Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<style scoped>
    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Full viewport height */
        background-color: #f8f9fa; /* Light background color */
    }


    .icon-password{
        right: 20px;
        bottom: 10px;
        cursor: pointer;
    }

    .app-logo{
        height:100px;
    }

    .login-wrapper{
        width: 400px;
        box-shadow: 0 0 1px 1px #0000004c;
    }

</style>
