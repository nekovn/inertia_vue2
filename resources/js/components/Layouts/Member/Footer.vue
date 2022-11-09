<template>
    <footer class="footer footer-transparent d-print-none">
        <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
                <FooterRight/>
                <FooterLeft/>
            </div>
        </div>
    </footer>
</template>

<script>
import FooterLeft from "./Items/FooterLeft";
import FooterRight from "./Items/FooterRight";
export default {
    name: "Footer.vue",
    components: {FooterRight, FooterLeft}
}
</script>

<style scoped>

</style>
