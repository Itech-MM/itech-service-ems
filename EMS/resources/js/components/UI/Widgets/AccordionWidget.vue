<template>
  <div class="w-full">
    <div class="mx-auto w-full max-w-md rounded-2xl p-2">
      <Disclosure  as="div" class="mb-2" v-slot="{ open }" v-for="list of props.lists">
        <DisclosureButton
          class="flex w-full justify-between rounded-lg bg-purple-100 px-4 py-2 text-left text-sm font-medium text-purple-900 hover:bg-purple-200 focus:outline-none focus-visible:ring focus-visible:ring-purple-500 focus-visible:ring-opacity-75"
        >
          <span class="text-[#0a6373]">{{list.title}}</span>
          <ChevronUpIcon
            :class="open ? 'rotate-180 transform' : 'rotate-90 transform'"
            class="h-5 w-5 text-[#0a6373] ease-in-out duration-300"
          />
        </DisclosureButton>
        <Transition name="fade">
          <DisclosurePanel class="py-2 pl-3 text-sm text-gray-500">
              <div class="flex flex-col px-1">
                  <div class="w-full p-2 bg-gray-300 mb-1 rounded-lg cursor-pointer hover:bg-[#d1d5db4c]" v-for="child of list.children">
                      {{child}}
                  </div>
              </div>
          </DisclosurePanel>
        </Transition>
      </Disclosure>
    </div>
  </div>
</template>

<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronUpIcon } from '@heroicons/vue/20/solid'
const props = defineProps({
    lists:Array
});
</script>
