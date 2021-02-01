<template>
    <Layout v-bind:title="title">
        <h1>Update Profile</h1>
        <form @submit.prevent="update">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" v-model="form.name">
                <p v-if="errors.name">{{ errors.name }}</p>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" v-model="form.email">
                <p v-if="errors.email">{{ errors.email }}</p>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
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
            form: {
                name: this.user.name,
                email: this.user.email
            }
        }
    },
    props: {
        title: String,
        errors: Object,
        user: Object
    },
    methods: {
        update(){
            // console.log(this.user);
            this.$inertia.put('/users/' + this.user.id, this.form);
        }
    }
}
</script>