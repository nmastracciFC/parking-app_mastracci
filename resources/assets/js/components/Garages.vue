<template>
    <div class="container">
        <h1>I am the Garages Component</h1>
        <router-link to="/garages/{id}"></router-link>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>