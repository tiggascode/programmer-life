<script setup>
import Layout from "@/Components/Layout.vue";

import { useForm } from "@inertiajs/inertia-vue3";

defineProps({
    isAuth: {
        type: Boolean,
    },
});
let form = useForm({
    title: "",
    body: "",
    image: null,
});

const handleFileChange = (event) => {
    form.image = event.target.files[0];
};

let submit = () => {
    form.post("/posts");
};
</script>

<template>
    <Layout :isAuth="isAuth">
        <section class="text-center pt-6 mt-10">
            <h1 class="font-bold text-4xl">Create Post</h1>

            <form
                class="mt-6 max-w-2xl mx-auto space-y-6"
                @submit.prevent="submit"
            >
                <input
                    v-model="form.title"
                    class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                    name="title"
                    placeholder="title"
                    type="text"
                />

                <textarea
                    v-model="form.body"
                    class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                    name="body"
                    placeholder="body"
                    type="text"
                >
                </textarea>
                <input
                    id="image"
                    class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                    type="file"
                    @change="handleFileChange"
                />
                <button class="bg-blue-800 rounded py-2 px-6 font-bold">
                    Create
                </button>
            </form>
        </section>
    </Layout>
</template>

<style scoped></style>
