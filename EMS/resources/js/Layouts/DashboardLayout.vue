<template>
    <div class="lg:w-[25%] md:w-[30%] fixed h-full p-4">
        <DashboardMenuWidget></DashboardMenuWidget>
    </div>
    <div class="lg:w-[75%] md:w-[70%] h-[800px] min-h-[100vh]  flex ml-[25%] relative">
        <div class="w-[inherit] fixed px-2 top-4 z-50">
            <div class="w-full backdrop-blur-sm bg-gray-300/30 rounded-lg flex items-center justify-between p-2">
                <BreadcrumbWidget></BreadcrumbWidget>
                <div class="flex items-center">
                    <button class="btn mx-1 primary w-8 h-8 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                        </svg>
                    </button>
                    <input type="search" hidden
                        class="appearance-none px-2 py-1 rounded focus:shadow focus:outline-none focus:border-0"
                        placeholder="Search Menu">
                    <button class="btn ml-1 primary w-8 h-8 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </button>
                    <button class="btn mx-1 primary w-8 h-8 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                    </button>
                    <button class="btn ml-1 primary w-8 h-8 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>
                    <button class="btn mx-1 primary w-8 h-8 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                        </svg>
                    </button>

                </div>
            </div>
        </div>
        <div class="w-full pt-4 px-4 mt-16 grid grid-cols-4 gap-4 h-[fit-content]">
            <LightCardWidget :noti="attendanceCardNoti">
                <template v-slot:body>
                    <button
                        class="w-16 h-16 m-2 bg-gray-300 rounded-full flex items-center justify-center overflow-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#0a6373" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                    </button>
                    <div class="px-2 flex flex-col">
                        <h2>Attendance</h2>
                        <div class="flex items-center">
                            <button class="flex items-end mr-1">
                                <span class="w-4 h-6 flex items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#0a6373" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                </span>
                                <small>350</small>
                            </button>
                            <button class="flex items-end mr-1">
                                <span class="w-4 h-6 flex items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                </span>
                                <small>250</small>
                            </button>

                        </div>
                    </div>
                </template>
                <template v-slot:footer>
                    <small>2022-10-20</small>
                    <button class="py-1 pl-2 m-1 rounded-lg bg-gray-300 hover:bg-gray-300/50 flex items-center">
                        <small>90</small>
                        <span
                            class="w-6 h-6 flex items-center ml-1 justify-center flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-percent text-sm text-[#0a6373]"></i>
                        </span>
                    </button>
                </template>
            </LightCardWidget>
            <LightCardWidget>
                <template v-slot:body>
                    <button
                        class="w-16 h-16 m-2 bg-gray-300 rounded-full flex items-center justify-center overflow-hidden">
                        <i class="fa-solid fa-house-laptop text-2xl icon-text-primary"></i>
                    </button>
                    <div class="px-2 flex flex-col">
                        <h2>WFH Records</h2>
                        <div class="flex items-center">
                            <button class="flex items-end mr-1">
                                <span class="w-4 h-6 flex items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#0a6373" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                </span>
                                <small>350</small>
                            </button>
                            <button class="flex items-end mr-1">
                                <span class="w-4 h-6 flex items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                </span>
                                <small>50</small>
                            </button>

                        </div>
                    </div>
                </template>
                <template v-slot:footer>
                    <small>2022-10-20</small>
                    <button class="py-1 pl-2 m-1 rounded-lg bg-gray-300 hover:bg-gray-300/50 flex items-center">
                        <small>4.5</small>
                        <span
                            class="w-6 h-6 flex items-center ml-1 justify-center flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-percent text-sm text-[#0a6373]"></i>
                        </span>
                    </button>
                </template>
            </LightCardWidget>
            <LightCardWidget>
                <template v-slot:body>
                    <button
                        class="w-16 h-16 m-2 bg-gray-300 rounded-full flex items-center justify-center overflow-hidden">
                        <i class="fa-solid fa-person-walking-arrow-right text-2xl icon-text-warn"></i>
                    </button>
                    <div class="px-2 flex flex-col">
                        <h2>Leave Records</h2>
                        <div class="flex items-center">
                            <button class="flex items-end mr-1">
                                <span class="w-4 h-6 flex items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#0a6373" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                </span>
                                <small>350</small>
                            </button>
                            <button class="flex items-end mr-1">
                                <span class="w-4 h-6 flex items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                </span>
                                <small>9</small>
                            </button>

                        </div>
                    </div>
                </template>
                <template v-slot:footer>
                    <small>2022-10-20</small>
                    <button class="py-1 pl-2 m-1 rounded-lg bg-gray-300 hover:bg-gray-300/50 flex items-center">
                        <small>1.25</small>
                        <span
                            class="w-6 h-6 flex items-center ml-1 justify-center flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-percent text-sm text-[#0a6373]"></i>
                        </span>
                    </button>
                </template>
            </LightCardWidget>
            <LightCardWidget>
                <template v-slot:body>
                    <button
                        class="w-16 h-16 m-2 bg-gray-300 rounded-full flex items-center justify-center overflow-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 icon-green-tea">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                    <div class="px-2 flex flex-col max-w-[60%]">
                        <h2 class="truncate">Schedule</h2>
                        <div class="flex items-center">
                            <button class="flex items-end mr-1">
                                <span class="w-4 h-6 flex items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#0a6373" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                </span>
                                <small>350</small>
                            </button>
                            <button class="flex items-end mr-1">
                                <span class="w-4 h-6 flex items-center justify-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                </span>
                                <small>250</small>
                            </button>

                        </div>
                    </div>
                </template>
                <template v-slot:footer>
                    <small>2022-10-20</small>
                    <button class="py-1 pl-2 m-1 rounded-lg bg-gray-300 hover:bg-gray-300/50 flex items-center">
                        <small>Plan</small>
                        <span
                            class="w-6 h-6 flex items-center ml-1 justify-center flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                            </svg>

                        </span>
                    </button>
                </template>
            </LightCardWidget>
        </div>
    </div>
</template>

<script setup>
import DashboardMenuWidget from '../components/UI/Widgets/DashboardMenuWidget.vue';
import BreadcrumbWidget from '../components/UI/Widgets/BreadcrumbWidget.vue';
import LightCardWidget from '../components/UI/Widgets/LightCardWidget.vue';

const attendanceCardNoti = {
    class: 'normal'
}
</script>
<style>
.main-menu {
    position: relative;
    width: 35%;
}

.main-menu .mns {
    position: fixed;
    width: 100%;
    height: 100%;
}
</style>