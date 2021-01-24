<template>
    <div>
        <h1>Daftar {{ title }}</h1>
        <ul>
            <li v-for="user in users">
                <p>{{ user.name }}</p>
                <inertia-link :href="`/users/${user.id}`">Lihat User</inertia-link>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        users: Array
    }
}
</script>