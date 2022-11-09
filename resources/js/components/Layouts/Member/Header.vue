<template>
    <!-- Header -->
    <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl">
            <HeaderLeft/>
            <HeaderRight/>
        </div>
    </header>
</template>

<script>
import HeaderLeft from "./Items/HeaderLeft";
import HeaderRight from "./Items/HeaderRight";
export default {
    name: "Header",
    components: {HeaderRight, HeaderLeft}
}
</script>

<style scoped>

</style>
