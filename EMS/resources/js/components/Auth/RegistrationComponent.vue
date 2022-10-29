<template>
    <LRLayout title="Create Your Free Account" :create-fn="createFn" btn="Registration">
        <template v-slot:frame>
            <Transition name="fade">
                <div v-if="errors" class="flex items-center justify-between px-2 py-3 bg-red-100 text-red-500 rounded">
                    {{ errors }}
                    <span @click="errors = null"
                        class="w-8 h-8 flex items-center justify-center rounded-full transition-colors cursor-pointer hover:bg-[rgba(0,0,0,0.2)]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                </div>
            </Transition>
            <div class="-space-y-px rounded-md shadow-sm">
                <div>
                    <label for="username" class="sr-only">Username</label>
                    <input id="username" v-model="user.name" name="username" type="text"
                        class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                        placeholder="Username">
                </div>
                <div>
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" v-model="user.email" name="email" type="email" autocomplete="email"
                        class="relative block w-full appearance-none rounded-none border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                        placeholder="Email address">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" v-model="user.password" name="password" type="password" autocomplete="current-password"
                        class="relative block w-full appearance-none rounded-none border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                        placeholder="Password">
                </div>
                <div>
                    <label for="password_confirmation" class="sr-only">Password</label>
                    <input id="password_confirmation" v-model="user.password_confirmation" name="password_confirmation"
                        type="password"
                        class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                        placeholder="Confirm Password">
                </div>
            </div>
            
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                </div>
            </div>

        </template>
        <template v-slot:footer>
                Or <br>
                Already have account?
                <Link href="/login" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Sign In
                </Link>
        </template>
    </LRLayout>
</template>
<script setup>
import LRLayout from '../UI/LRLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
const user = {
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
}
const createFn = function(){
    Inertia.post('/registration',{user})
}
defineProps({
    errors: null
})
</script>