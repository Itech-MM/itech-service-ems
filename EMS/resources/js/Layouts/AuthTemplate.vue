<template>
    <AuthHeader :current="page" :reference="reference"></AuthHeader>
    <div class="pt-[60px] container">
        <Transition name="slide-up">
            <Login v-if="page == 'login'" :errors="errors"></Login>
        </Transition>
        <Transition name="fade">
            <Registration v-if="page == 'registration'" :errors="errors? errors:null"></Registration>
        </Transition>
    </div>
</template>
<script setup>
import AuthHeader from './common/header/AuthHeader.vue';
import Login from '../components/Auth/LoginComponent.vue';
import Registration from '../components/Auth/RegistrationComponent.vue';

defineProps({
    page: String,
    reference: String,
    errors: null
})
</script>