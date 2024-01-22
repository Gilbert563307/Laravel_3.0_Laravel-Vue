<template>
    <nav style="display: flex; gap: 1em;">
        <router-link to="/todos">Todo</router-link>
        <router-link to="/todos/create">Create Todo</router-link>
    </nav>
    <router-view></router-view>
</template>

<script setup>

</script>