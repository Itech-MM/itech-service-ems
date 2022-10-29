<template>
    <div>
        {{user}}
        {{token}}
    </div>
</template>
<script setup>
const props = defineProps({
    user: Object,
    token: String
})
</script>