<template>
    <div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="/" class="custom-logo" :title="this.appName">
                <img src="/assets/img/logo.svg" width="89" height="79" :alt="this.appName" class="navbar-brand-image">
                {{ this.appName }}
            </a>
        </h1>
    </div>
</template>

<script>
export default {
    name: "HeaderLeft"
}
</script>

<style>
.custom-logo {
    display: flex;
    align-items: center;
}
.custom-logo:hover {
    text-decoration: none;
}
</style>
