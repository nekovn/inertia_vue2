<template>
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-tight">
                <form @submit.prevent="submit" accept-charset="UTF-8" name="admin_login"
                      id="form-login-page" class="" role="form" autocomplete="off">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">{{ $t('global.login') }}</h2>
                        <div class="mb-3">
                            <label for="login-code" class="form-label">{{ $t('global.code') }}</label>
                            <input class="form-control" id="login-code" :placeholder="$t('global.code_placeholder')"
                                   autocomplete="off" name="code" type="text" v-model="loginForm.code">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="login-password">
                                {{ $t('global.password') }}
                                <span class="form-label-description">
                                    <a href="/">{{ $t('global.cannot_login') }}</a>
                                </span>
                            </label>
                            <div class="input-group input-group-flat">
                                <input class="form-control" id="login-password" :placeholder="$t('global.password_placeholder')"
                                       autocomplete="off" name="password" type="password" v-model="loginForm.password">
                                <label @click="toggleEye">
                                    <span class="input-group-text px-2 nav-link" id="eye-on">
                                        <font-awesome-icon icon="eye" class="icon"/>
                                    </span>
                                    <span class="input-group-text px-2 nav-link d-none" id="eye-off">
                                        <font-awesome-icon icon="eye-slash" class="icon"/>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-check" for="login-remember">
                                <input class="form-check-input" id="login-remember" name="remember" type="checkbox"
                                       v-model="loginForm.remember">
                                <span class="form-check-label">{{ $t('global.login_remember') }}</span>
                            </label>
                        </div>
                        <div class="form-footer">
                            <input class="btn btn-primary w-100" type="submit" :value="$t('global.login')">
                        </div>
                    </div>
                </form>
                <div class="text-center text-muted mt-3">{{ $t('global.login_description') }}</div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "LoginForm",
    props: {
      errors: Object
    },
    data() {
        return {
            loginForm: {
                code: '',
                password: '',
                remember: false
            }
        }
    },
    methods: {
        toggleEye() {
            const eyeOn = document.getElementById('eye-on');
            const eyeOff = document.getElementById('eye-off');
            const login_password = document.getElementById('login-password');
            if (eyeOn.classList.contains('d-none')) {
                login_password.type = 'password';
            } else {
                login_password.type = 'text';
            }
            eyeOn.classList.toggle('d-none');
            eyeOff.classList.toggle('d-none');
        },
        //submitフォーム
        submit() {
            this.$inertia.post(route('admin.login'), this.loginForm)
        }
    }
}
</script>

<style scoped>

</style>
