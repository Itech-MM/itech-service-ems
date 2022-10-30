<template>
    <div :class="classes" class="w-full h-[fit-content] bg-gray-200 rounded-lg flex flex-col">
        <div class="w-full border-b-2 border-gray-100 py-2 px-4">
            <slot name="header"></slot>
        </div>
        <div class="flex flex-col p-2">
            <slot name="body"></slot>
        </div>
        <div class="w-full border-t-2 border-gray-100 py-2 px-4">
            <slot name="footer"></slot>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    classes: String
})
</script>
