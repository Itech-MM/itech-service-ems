<template>
    <div 
        class="flex flex-col backdrop-blur-sm bg-gray-300/30 rounded-lg oveflow-hidden h-[fit-content] hover:shadow cursor-default relative"
        :class="class">
        <div class="w-full border-b-1 border-gray-100">
            <div class="flex p-2 border-b-2 border-gray-100 items-center">
                <slot name="body"></slot>
                
            </div>
        </div>
        <div class="flex items-center justify-between px-2 py-1">
            <slot name="footer"></slot>
        </div>
        <div class="pop-noti w-4 h-4 rounded-full" :class="noti.class" v-if="noti"></div>
    </div>
</template>

<script setup>
const props = defineProps({
    label: String,
    class: String,
    noti: Object
})
</script>
