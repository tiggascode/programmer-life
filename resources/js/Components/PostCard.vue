<script setup>
defineProps({
    post: {
        required: true,
        type: Object,
    },
});
</script>

<template>
    <div
        class="p-4 bg-white/5 rounded-xl border border-black flex flex-col text-center"
    >
        <div class="text-sm flex justify-center">
            <img :src="'storage/' + post.image_path" />
        </div>
        <div class="py-8">
            <h3 class="font-bold text-black text-xl hover:underline">
                <Link :href="'/posts/' + post.id" target="_blank"
                    >{{ post.title }}
                </Link>
            </h3>
            <p class="text-sm mt-4">Tigran Gasparyan</p>
        </div>
    </div>
</template>

<style scoped></style>
