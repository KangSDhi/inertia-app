<template>
    <layout title="Daftar User">
        <h1>Daftar {{ title }}</h1>
        <inertia-link href="/users/create">Register</inertia-link>
        <div v-if="$page.props.flash.message" class="alert">
            {{ $page.props.flash.message }}
        </div>
        <ul>
            <li v-for="user in users">
                <p>{{ user.name }}</p>
                <inertia-link :href="`/users/${user.id}`">Lihat User</inertia-link>
            </li>
        </ul>
    </layout>
</template>

<script>
import Layout from '../../Shared/Layout.vue'
export default {
    components: {
        Layout
    },
    props: {
        title: String,
        users: Array
    }
}
</script>