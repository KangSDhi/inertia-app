<template>
    <Layout v-bind:title="title">
        <h1>{{ title }}</h1>
        <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </Layout>
</template>

<script>
import Layout from '../../Shared/Layout.vue'
export default {
    components: {
        Layout
    },
    props: {
        title: String
    }
}
</script>