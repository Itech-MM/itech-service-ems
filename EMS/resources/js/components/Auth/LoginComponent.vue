<template>
    <LRLayout title="Login to Your Account" :create-fn="createFn">
        <template v-slot:frame>
            <Transition name="fade">
                <div v-if="'errors' in errors" class="flex items-center justify-between px-2 py-3 bg-red-100 text-red-500 rounded">
                    Invalid login id or password!
                    <span @click="errors = {}"
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
                    <label for="loginId" class="sr-only">Login Id</label>
                    <input id="loginId" v-model="user.loginId" name="loginId" type="text" autocomplete="off"
                        required
                        class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                        placeholder="Login Id">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" v-model="user.password" name="password" type="password"
                        autocomplete="current-password" required
                        class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                        placeholder="Password">
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" v-model="user.remember" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                </div>
                <div class="text-sm">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
                </div>
            </div>
        </template>
        <template v-slot:footer>
                Or <br>
                New user?
                <Link href="/registration" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Registeration
                </Link>
        </template>
    </LRLayout>
</template>
<script setup>
import { ref } from 'vue';
import LRLayout from '../UI/LRLayout.vue';
import {Link} from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';
defineProps({
    errors: Object
})
let error = ref()
const user = {
  'loginId': '',
  'password': '',
  'remember': false
}
const createFn = function(){
    Inertia.post('/login',user)
}
</script>