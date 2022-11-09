<template>
    <div class="navbar-nav flex-row order-md-last">
        <!--   Facebook   -->
        <div class="nav-item d-none d-md-flex me-3">
            <div class="btn-list">
                <a href="https://fb.com/letgo.cuong" class="btn" target="_blank" rel="noreferrer"
                   :title="this.$t('global.facebook')">
                    <img src="/assets/img/icon/facebook-f.svg"
                         :alt="this.$t('global.facebook')">{{ this.$t('global.facebook') }}</a>
            </div>
        </div>
        <div class="nav-item d-md-flex me-3">
            <!--   Dark model   -->
            <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" :title="this.$t('global.model_dark')"
               data-bs-toggle="tooltip"
               data-bs-placement="bottom">
                {{ this.$t('global.dark') }}
                <font-awesome-icon icon="cloud-moon" :alt="this.$t('global.model_dark')" class="icon custom-theme px-1"/>
            </a>
            <!--   Light model   -->
            <a href="?theme=light" class="nav-link px-0 hide-theme-light" :title="this.$t('global.model_light')"
               data-bs-toggle="tooltip"
               data-bs-placement="bottom">
                {{ this.$t('global.light') }}
                <font-awesome-icon icon="cloud-sun" :alt="this.$t('global.model_light')" class="icon custom-theme px-1"/>
            </a>
        </div>
        <div class="nav-item d-md-flex me-3">
            <!--   Login   -->
            <a href="/login" class="nav-link px-0" rel="noreferrer" :title="this.$t('global.login')">
                <font-awesome-icon icon="right-to-bracket" :alt="this.$t('global.login')" class="icon custom-theme px-1"/>
                {{ this.$t('global.login') }}
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: "HeaderRight",
    methods: {
        toggleModel(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            const body = document.querySelector('body');
            body.classList.toggle('theme-dark');
            body.classList.toggle('theme-light');
        }
    },
    mounted() {
        const currentUrl = new URL(window.location.href);
        const getParam = currentUrl.searchParams.get('theme');
        const body = document.querySelector('body');
        if (getParam === 'dark') {
            body.classList.add('theme-dark');
        } else {
            body.classList.add('theme-light');
        }
    }
}
</script>

<style>
.nav-link:hover {
    cursor: pointer;
}
</style>
