<template>
    <div class="w-full overflow-hidden rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
            <tr>
                <th scope="col" class="py-3 px-6" v-for="h of headers">
                    {{h}}
                </th>
                <th scope="col" class="py-3 px-6 text-center" v-if="details && details.show">
                    <button class="px-3 py-2 bg-[#0f857d] hover:bg-[#33c6bc] rounded text-gray-200">{{details.label}}</button>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b hover:bg-gray-50" v-for="data of datas">
                <td class="py-2 px-6" v-for="d of data" v-html="d">
                </td>
                <td class="py-2 px-6 text-center"  v-if="details && details.show">
                    <button 
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</template>

<script setup>
const props = defineProps({
    headers: {
        type: Array,
        default: ()=>{}
    },
    datas: Array,
    details: Object
})
</script>