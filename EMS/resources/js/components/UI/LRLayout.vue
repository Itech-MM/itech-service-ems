<template>
    <Transition name="slide-up">
    <div class="max-w-[400px] mx-auto my-4 relative">
        <div>
            <img class="mx-auto h-[150px] w-auto" src="../../../images/logo.svg" alt="Blogs">
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">{{title}}</h2>
            <p class="mt-2 text-center text-sm text-gray-600">
            </p>
        </div>
        <form class="mt-8 space-y-6" @submit.prevent="createFn">
            
            <input type="hidden" name="remember" value="true">
            <slot name="frame"></slot>
            <div class="text-center">
                <button type="submit"
                    class="group relative flex w-full justify-center rounded-md border border-transparent bg-[#1ba39a] py-2 px-4 text-sm font-medium text-white hover:bg-[#1ba39aab] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4 def-icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.636 5.636a9 9 0 1012.728 0M12 3v9" />
                        </svg>
                    </span>
                    {{btn?btn:'Sign In'}}
                </button>
                <slot name="footer"></slot>
            </div>
        </form>
    </div>
</Transition>
</template>
<script setup>
import { ref } from 'vue';

defineProps({
    title: String,
    createFn: Function,
    btn: String
})

let error = ref()
const user = {
    'email': '',
    'password': '',
    'remember': false
}
</script>