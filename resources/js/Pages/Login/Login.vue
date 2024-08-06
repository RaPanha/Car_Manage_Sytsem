<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <h3>Login form</h3>
        <Link :href="route('register')">Route to Register</Link>
    </div>
</template>

<style scoped>
Link {
    text-align: none;
}
</style>
