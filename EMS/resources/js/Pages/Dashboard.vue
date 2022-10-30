<template>
    <DashboardLayout></DashboardLayout>
    <Transition name="alert">
        <AletBox :show="true" title="Test"></AletBox>
    </Transition>
    <Notification :show="true" message="Test message" :done="true"/>
    
</template>

<script setup>
import DashboardLayout from '../Layouts/DashboardLayout.vue';
import Notification from '../components/UI/LightUI/Notification.vue';
import AletBox from '../components/UI/LightUI/AletBox.vue';
</script>
