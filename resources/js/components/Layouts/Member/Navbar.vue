<template>
    <!-- Start Top Nav -->
    <div class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar navbar-light">
                <NavbarItem/>
            </div>
        </div>
    </div>
</template>

<script>
import NavbarItem from "./Items/NavbarItem";
export default {
    name: "Navbar",
    components: {NavbarItem}
}
</script>

<style scoped>

</style>
