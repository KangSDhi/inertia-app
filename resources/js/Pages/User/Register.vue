<template>
    <Layout v-bind:title="title">
        <h1>{{ title }}</h1>
        <form @submit.prevent="register">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" v-model="user.name">
                <p v-if="errors.name">{{ errors.name }}</p>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" v-model="user.email">
                <p v-if="errors.email">{{ errors.email }}</p>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" v-model="user.password">
                <p v-if="errors.password">{{ errors.password }}</p>
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
        title: String,
        errors: Object 
    },
    methods: {
        register(){
            // console.log(this.user);
            this.$inertia.post('/users', this.user);
        }
    }
}
</script>