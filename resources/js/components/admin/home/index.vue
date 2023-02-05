<script setup>

import { useRouter } from 'vue-router';
import Base from '../layouts/base.vue'

const router = useRouter()

const logout = () => {
    localStorage.removeItem('token')
    router.push('/')
}

</script>

<template>
    <Base />
    <h1>welcome to admin overiview dashboard</h1>
    <div>
        <router-link to="/">Home page</router-link>
    </div>
    <br>
    <button @click="logout">
        Log out
    </button>
</template>
