<template>
    <div class="fixed p-3 w-full backdrop-blur-sm bg-gray-200/30 header">
        <div class="w-[80%] flex items-center justify-between mx-auto">
            <div class="w-[fit-content] h-full flex items-center">
                <Link :href="link ? link:'/'" v-if="isBackable" class="w-10 h-10 flex items-center justify-center bg-[#0000004c] rounded-full mx-2 hover:bg-gray-600/40">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                </Link>
                <button class="w-10 h-10">
                    <img src="@img/logo.svg" class="w-full h-full" alt="">
                </button>
            </div>
            <slot name="center"></slot>
            <slot name="right"></slot>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
defineProps({
    isBackable: Boolean,
    link: String
})
</script>

<style lang="scss" scoped>

</style>