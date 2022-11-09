<template>
    <div class="col-lg-auto ms-lg-auto">
        <ul class="list-inline list-inline-dots mb-0">
            <li class="list-inline-item">
                <font-awesome-icon icon="location-dot" class="icon custom-theme"/>
                {{ address }}
            </li>
            <li class="list-inline-item">
                <font-awesome-icon icon="phone-volume" class="icon custom-theme"/>
                {{ tell }}
            </li>
            <li class="list-inline-item">
                <font-awesome-icon icon="envelope" class="icon custom-theme"/>
                {{ mail }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "FooterRight",
    data() {
        return {
            address: process.env.MIX_ADMIN_ADDRESS,
            tell: process.env.MIX_ADMIN_TEL,
            mail: process.env.MIX_ADMIN_MAIL,
        }
    }
}
</script>

<style scoped>

</style>
