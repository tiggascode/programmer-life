<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import Layout from "@/Components/Layout.vue";

defineProps({
    isAuth: {
        type: Boolean,
    },
});
let form = useForm({
    name: "",
    email: "",
    password: "",
    employer: "",
});

let submit = () => {
    form.post("/register");
};
</script>

<template>
    <Layout :isAuth="isAuth">
        <section class="text-center pt-6 mt-10">
            <h1 class="font-bold text-4xl">Register</h1>

            <form
                action="/register"
                class="mt-6 max-w-2xl mx-auto space-y-6"
                @submit.prevent="submit"
            >
                <input
                    v-model="form.name"
                    class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                    name="name"
                    placeholder="Name"
                    type="text"
                />

                <input
                    v-model="form.email"
                    class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                    name="email"
                    placeholder="Email"
                    type="email"
                />

                <input
                    v-model="form.password"
                    class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                    name="password"
                    placeholder="Password"
                    type="password"
                />

                <input
                    class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                    name="password_confirmation"
                    placeholder="Password confirmation"
                    type="password"
                />

                <button class="bg-blue-800 rounded py-2 px-6 font-bold">
                    Register
                </button>
            </form>
        </section>
    </Layout>
</template>

<style scoped></style>
