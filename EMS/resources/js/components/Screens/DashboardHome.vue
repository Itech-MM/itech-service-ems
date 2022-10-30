<template>
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
                    <div class="px-2 flex flex-col max-w-[50%]">
                        <h2 class="truncate">Attendance</h2>
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
                    <div class="px-2 flex flex-col max-w-[50%]">
                        <h2 class="truncate">WFH Records</h2>
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
                    <div class="px-2 flex flex-col max-w-[50%]">
                        <h2 class="truncate">Leave Records</h2>
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
                    <div class="px-2 flex flex-col max-w-[50%]">
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
        <div class="flex py-2 px-4">
            <div class=" w-[65%] flex overflow-hidden rounded-lg mt-10">
                <ChartWidget style="width: 100%;max-height: 300px"></ChartWidget>
            </div>
            <div class="w-[35%] flex p-4 justify-center overflow-auto rounded-lg">
                <CardWidget classes="mt-12">
                    <template v-slot:header>Employee Engagements</template>
                    <template v-slot:body>
                        <div class="flex items-center bg-gray-100 p-2 mb-2 rounded-lg">
                            <div class="flex items-center justify-center w-8 h-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#0a6373" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="none" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                            </div>
                            <h3 class="pl-2 pr-4">All Employees</h3> -
                            <small class="pl-4">200</small>
                        </div>
                        <div class="flex items-center bg-gray-100 p-2 mb-2 rounded-lg">
                            <div class="flex items-center justify-center w-8 h-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                </svg>
                            </div>
                            <h3 class="pl-2 pr-4">New Assigns</h3> -
                            <small class="pl-4">20</small>
                        </div>
                        <div class="flex items-center bg-gray-100 p-2 mb-2 rounded-lg">
                            <div class="flex items-center justify-center w-8 h-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M22 10.5h-6m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                </svg>
                            </div>
                            <h3 class="pl-2 pr-4">Resigns</h3> -
                            <small class="pl-4">5</small>
                        </div>
                    </template>
                    <template v-slot:footer>
                        <div class="flex items-center rounded-lg">
                            <button class="px-3 py-2 rounded-lg btn flex items-center">
                                <span>Details</span>
                                <div class="w-6 h-6 ml-4 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </template>
                </CardWidget>
            </div>
        </div>
        <div class="flex px-4">
            <div class="w-full flex px-4 justify-center overflow-auto rounded-lg text-sm">
                <CardWidget classes="mt-4">
                    <template v-slot:header>
                        <div class="flex items-center justify-between">
                            <h3>Position Categories</h3>
                            <button class="w-8 h-8 rounded-full flex items-center justify-center btn primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                </svg>
                            </button>
                        </div>
                    </template>
                    <template v-slot:body>
                        <Table :headers="employeeCateg.header" :datas="employeeCateg.datas"></Table>
                    </template>
                    <template v-slot:footer>
                        <div class="flex items-center rounded-lg">
                            <button class="px-3 py-2 rounded-lg btn flex items-center">
                                <span>Details</span>
                                <div class="w-6 h-6 ml-4 rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </template>
                </CardWidget>
            </div>
        </div>
        <div class="w-full pt-4 px-4 my-8 grid grid-cols-4 gap-4 h-[fit-content]">
            <LightCardWidget :noti="attendanceCardNoti">
                <template v-slot:body>
                    <button
                        class="w-16 h-16 m-2 bg-gray-300 rounded-full flex items-center justify-center overflow-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                    <div class="px-2 flex flex-col max-w-[50%]">
                        <h2 class="truncate">Currency</h2>
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
                        <small>Dollar</small>
                        <span
                            class="w-6 h-6 flex items-center ml-1 justify-center flex items-center justify-center rounded-full bg-gray-200 mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-3 h-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                            </svg>
                        </span>
                    </button>
                </template>
            </LightCardWidget>
            <LightCardWidget>
                <template v-slot:body>
                    <button
                        class="w-16 h-16 m-2 bg-gray-300 rounded-full flex items-center justify-center overflow-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                    </button>
                    <div class="px-2 flex flex-col max-w-[50%]">
                        <h2 class="truncate">Account Manager</h2>
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                        </svg>

                    </button>
                    <div class="px-2 flex flex-col max-w-[50%]">
                        <h2 class="truncate">Customize UI</h2>
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
        </div>

</template>
<script setup>
import LightCardWidget from '../UI/Widgets/LightCardWidget.vue';
import ChartWidget from '../UI/Widgets/ChartWidget.vue';
import CardWidget from '../UI/Widgets/CardWidget.vue';
import Table from '../UI/Table.vue';

const attendanceCardNoti = {
    class: 'normal'
}

const employeeCateg = {
    header: ['Position','Salary','Current','Average'],
    datas:[
        ['COO', '550 $', '2', '0.1%'],
        ['Managers', '400 $', '20', '0.1%'],
        ['Leaders', '320 $', '35', '3.5%'],
        ['Sub-Leaders', '280 $', '40', '4.1%'],
        ['Seniors', '250 $', '80', '15%'],
        ['Juniors', '180 $', '240', '35%']
    ]
}
</script>
