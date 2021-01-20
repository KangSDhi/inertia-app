<template>
    <div>
        <h1 v-text="name"></h1>
        <inertia-link href="/home">Home</inertia-link>
    </div>
</template>

<script>
export default {
    props: ['name']
}
</script>