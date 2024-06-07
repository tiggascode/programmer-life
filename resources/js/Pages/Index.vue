<script setup>
import Layout from "@/Components/Layout.vue";
import PostCard from "@/Components/PostCard.vue";
import Pagination from "@/Components/Pagination.vue";
import logo from "../../images/logo.jpg";

defineProps({
    posts: {
        type: Object,
        required: true,
    },
    isAuth: {
        type: Boolean,
    },
});
</script>

<template>
    <Layout :isAuth="isAuth">
        <div class="flex justify-center items-center">
            <img :src="logo" height="130" width="130" />
        </div>
        <div class="mt-5 flex justify-center items-center">
            <h1 class="font-bold text-4xl">Programmer Life</h1>
        </div>

        <div class="mt-20 flex justify-between">
            <div>Written By Tigran Gasparyan</div>
            <div class="flex justify-between items-center gap-5">
                <a href="https://x.com/y0UNGcOd3Rlife" target="_blank">
                    <svg
                        class="h-9 w-9"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <g>
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"
                            ></path>
                        </g>
                    </svg>
                </a>
                <a href="https://t.me/y0UNGcOd3Rlife" target="_blank">
                    <svg
                        class="h-9 w-9"
                        viewBox="0 0 50 50"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M25,2c12.703,0,23,10.297,23,23S37.703,48,25,48S2,37.703,2,25S12.297,2,25,2z M32.934,34.375	c0.423-1.298,2.405-14.234,2.65-16.783c0.074-0.772-0.17-1.285-0.648-1.514c-0.578-0.278-1.434-0.139-2.427,0.219	c-1.362,0.491-18.774,7.884-19.78,8.312c-0.954,0.405-1.856,0.847-1.856,1.487c0,0.45,0.267,0.703,1.003,0.966	c0.766,0.273,2.695,0.858,3.834,1.172c1.097,0.303,2.346,0.04,3.046-0.395c0.742-0.461,9.305-6.191,9.92-6.693	c0.614-0.502,1.104,0.141,0.602,0.644c-0.502,0.502-6.38,6.207-7.155,6.997c-0.941,0.959-0.273,1.953,0.358,2.351	c0.721,0.454,5.906,3.932,6.687,4.49c0.781,0.558,1.573,0.811,2.298,0.811C32.191,36.439,32.573,35.484,32.934,34.375z"
                        ></path>
                    </svg>
                </a>
            </div>
        </div>
        <section class="pt-10">
            <div class="grid lg:grid-cols-3 gap-8 mt-9">
                <PostCard v-for="post in posts.data" :post="post" />
            </div>
            <div class="flex items-center justify-around">
                <Pagination :links="posts.links" class="mt-10 flex gap-2" />
            </div>
        </section>
    </Layout>
</template>

<style scoped></style>
