<script setup>
    import { useForm } from '@inertiajs/vue3';

    const form = useForm({
        fullname: '',
        usernam: '',
        email: '',
        password: '',
        password_confirm: ''
    });

    const submit = () => {
        form.post(route('register'), {
            onFinish: () => form.reset('password')
        })
    };
</script>

<template>
    <form >
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                
            </div>
        </div>
    </form>
</template>