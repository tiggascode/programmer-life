<script setup>
import TheNav from "@/Components/TheNav.vue";

defineProps({
    isAuth: {
        type: Boolean,
    },
});
</script>

<template>
    <main class="mx-auto max-w-[986px]">
        <TheNav :isAuth="isAuth" />
        <slot></slot>
    </main>
</template>

<style scoped></style>
