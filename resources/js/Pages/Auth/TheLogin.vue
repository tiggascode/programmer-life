<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import Layout from "@/Components/Layout.vue";

defineProps({
    isAuth: {
        type: Boolean,
    },
});
let form = useForm({
    email: "",
    password: "",
});

let submit = () => {
    form.post("/login");
};
</script>

<template>
    <Layout :isAuth="isAuth">
        <section class="text-center pt-6 mt-10">
            <h1 class="font-bold text-4xl">Login</h1>

            <form
                class="mt-6 max-w-2xl mx-auto space-y-6"
                @submit.prevent="submit"
            >
                <input
                    v-model="form.email"
                    class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                    placeholder="Email"
                    type="email"
                />
                <input
                    v-model="form.password"
                    class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                    placeholder="Password"
                    type="password"
                />
                <div>{{}}</div>
                <button
                    class="bg-blue-800 rounded py-2 px-6 font-bold'"
                    type="submit"
                >
                    Login
                </button>
            </form>
        </section>
    </Layout>
</template>

<style scoped></style>
