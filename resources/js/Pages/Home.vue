<template>
    <div>
        <h1>{{ title }}</h1>    
        <inertia-link href="/about" as="button">About</inertia-link>
    </div>    
</template>

<style>

</style>

<script>
export default {
    props: ['title']
}
</script>