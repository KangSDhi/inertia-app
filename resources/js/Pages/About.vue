<template>
    <Layout title="Inertia - About">
        <h1 v-text="name"></h1>
    </Layout>
</template>

<script>
import Layout from '../Shared/Layout.vue'
export default {
    components: {
        Layout
    },
    props: ['name']
}
</script>