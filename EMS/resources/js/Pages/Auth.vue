<template>
    <AuthTemplate :page="current" :reference="reference" :errors="errors"></AuthTemplate>
</template>

<script setup>
import AuthTemplate from '../Layouts/AuthTemplate.vue';
const props = defineProps({
    current: String,
    reference: String,
    errors: null
})
console.log(props.errors)
</script>