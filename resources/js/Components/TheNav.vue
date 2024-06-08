<script setup>
import logo from "./../../images/logo.jpg";

defineProps({
    isAuth: {
        type: Boolean,
    },
});
</script>

<template>
    <nav
        class="flex justify-between items-center mb-10 py-4 border-b border-white/10"
    >
        <div>
            <Link class="flex justify-center items-center" href="/">
                <img :src="logo" height="50" width="50" />
                Programmer Life
            </Link>
        </div>

        <div v-if="!isAuth" class="space-x-6 font-bold">
            <Link href="/register">Sing Up</Link>
            <Link href="/login">Login</Link>
        </div>
        <div v-if="isAuth" class="space-x-6 font-bold"></div>
    </nav>
</template>

<style scoped></style>
