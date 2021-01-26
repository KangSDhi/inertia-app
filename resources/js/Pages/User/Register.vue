<template>
    <Layout v-bind:title="title">
        <h1>{{ title }}</h1>
        <form @submit.prevent="register">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" v-model="user.name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" v-model="user.email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" v-model="user.password">
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
    data(){
        return {
            user: {
                name: '',
                email: '',
                password: ''
            }
        }
    },
    props: {
        title: String
    },
    methods: {
        register(){
            // console.log(this.user);
            this.$inertia.post('/users', this.user);
        }
    }
}
</script>