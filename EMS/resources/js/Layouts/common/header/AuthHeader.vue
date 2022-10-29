<template>
    <Header :is-backable="true">
        <template v-slot:right>
            <div class="flex items-center justify-center">
                <Link :href="`/${reference}`"
                    class="w-auto ml-2 flex items-center justify-center rounded-full p-1 bg-[#0000004c] hover:bg-[#0000002b] cursor-pointer">
                    <span class="bg-[#0000004c] w-6 h-6 mr-2 flex items-center justify-center rounded-full"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-4 h-4 def-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1012.728 0M12 3v9" />
                        </svg></span>
                    <span class="pr-1">{{reference}}</span>
                </Link>
                <button 
                class="w-8 h-8 ml-2 flex items-center justify-center rounded-full p-1 bg-[#0000004c] hover:bg-[#0000002b] cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke="var(--app-icon-color)"
                        d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                </svg>
                </button>
            </div>
        </template>
    </Header>
</template>
<script setup>
import Header from './Header.vue';
import {Link} from '@inertiajs/inertia-vue3';
defineProps({
    current: String,
    reference: String
})
</script>