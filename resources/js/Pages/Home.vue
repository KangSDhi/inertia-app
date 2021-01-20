<template>
    <Layout title="Inertia - Home">
        <h1>{{ title }}</h1>    
    </Layout>    
</template>

<style>

</style>

<script>
import Layout from '../Shared/Layout.vue'
export default {
    components: {
        Layout
    },
    props: ['title']
}
</script>