<template>
    <div class="page">
        <Header/>
        <Navbar/>
        <slot/>
        <Footer/>
    </div>
</template>

<script>
import Footer from '@components/Layouts/Member/Footer';
import Header from "@components/Layouts/Member/Header";
import Navbar from "@components/Layouts/Member/Navbar";

export default {
    name: "ThemeAuth",
    components: {Footer, Navbar, Header}
}
</script>

<style scoped>

</style>
