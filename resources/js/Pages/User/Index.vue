<template>
    <div>
        <h1>Daftar {{ title }}</h1>
        <ul>
            <li v-for="user in users">{{ user.name }}</li>
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