<template>
    <Head>
        <title>{{ this.appName }} - {{ title }}</title>
        <meta name="description" :content="description">
        <meta name="title" :content="title">
        <meta name="site_name" :content="title">
        <meta property="og:title" :content="title">
        <meta property="og:description" :content="description">
        <meta property="og:site_name" :content="title">
        <meta name="twitter:title" :content="title">
        <meta name="twitter:description" :content="description">
        <link rel="canonical" :href="canonical">
    </Head>
</template>

<script>
import {Head} from "@inertiajs/inertia-vue"

export default {
    name: "HeadTag",
    components: {Head},
    props: {
        'title': {type: String, default: ''},
        'description': {type: String, default: ''},
        'canonical': {type: String, default: ''},
    },
}
</script>

<style scoped>

</style>
