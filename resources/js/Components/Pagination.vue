<script setup>
defineProps({
    links: Array,
});
</script>

<template>
    <div>
        <Component
            :is="link.url ? 'Link' : 'Span'"
            v-for="link in links"
            :class="{ 'text-gray-500': !link.url, 'font-bold': link.active }"
            :href="link.url"
            class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-800 transition-colors duration-300 text-center"
            v-html="link.label"
        />
    </div>
</template>
