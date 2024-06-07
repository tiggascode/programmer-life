<script setup>
import Layout from "@/Components/Layout.vue";

defineProps({
    post: {
        type: Object,
    },
});
</script>

<template>
    <Layout>
        <section class="mx-auto flex max-w-2xl flex-col pb-4">
            <div class="flex justify-center items-center">
                <img
                    :src="'storage/' + post.image_path"
                    height="250"
                    width="250"
                />
            </div>
            <div class="mt-5 flex justify-center items-center">
                <h1 class="font-bold text-4xl">{{ post.title }}</h1>
            </div>
        </section>
    </Layout>
</template>

<style scoped></style>
