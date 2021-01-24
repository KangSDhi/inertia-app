<template>
    <div>
        <h1>{{ title }}</h1>
        <ul>
            <li>
                <h3>{{ user.name }}</h3>
                <p>Email : <strong>{{ user.email }}</strong></p>
                <p>{{ user.created_at }}</p>
                <inertia-link href="/users">Kembali</inertia-link>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        user: Object
    }
}
</script>