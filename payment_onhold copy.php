<?php

session_start();

if (!isset($_SESSION['loggedn1']) || $_SESSION['loggedn1'] != true) {
    header("location: admin_login.php");
    exit;
}

?>



<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>payment on hold</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="./assets/js/init-alpine.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script>


    <!-- bootsatrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="./assets/css/custom.css">

</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
            <div class="py-4 text-gray-500 dark:text-gray-400 my-5">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                    coin-ex
                </a>
                <ul>

                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="admin.php">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="payment_onhold.php">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span class="ml-4">Payment on hold</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="getaway.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                                <path d="M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z" />
                            </svg>
                            <span class="ml-4">Getaway</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="payment_history.php">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                                </path>
                            </svg>
                            <span class="ml-4">Payment History</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="account_id.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <span class="ml-4">Account NO</span>
                        </a>
                    </li>


                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="state.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
                                <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <span class="ml-4">Status</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="add_notice.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                            </svg>
                            <span class="ml-4">Add Notice</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="admin_logout.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg>
                            <span class="ml-4">Logout</span>
                        </a>
                    </li>



                </ul>

            </div>
        </aside>
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
        <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden" x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu" @keydown.escape="closeSideMenu">
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                    Access Network
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">


                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="admin.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="total_user.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg>
                            <span class="ml-4">Total User</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">

                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="payment_onhold.php">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span class="ml-4">Payment on hold</span>
                        </a>


                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="add_user.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                            <span class="ml-4">Add User</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="payment_history.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                            <span class="ml-4">Payment History</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="notice.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z" />
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                            </svg>
                            <span class="ml-4">Add Notice</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="admin_logout.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg>
                            <span class="ml-4">Logout</span>
                        </a>
                    </li>



                </ul>
            </div>
        </aside>
        <div class="flex flex-col flex-1 w-full">
            <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                    <!-- Mobile hamburger -->
                    <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="toggleSideMenu" aria-label="Menu">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Search input -->
                    <div class="flex justify-center flex-1 lg:mr-32">
                        <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">


                        </div>
                    </div>
                    <ul class="flex items-center flex-shrink-0 space-x-6">
                        <!-- Theme toggler -->
                        <li class="flex">
                            <button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme" aria-label="Toggle color mode">
                                <template x-if="!dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                    </svg>
                                </template>
                                <template x-if="dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                                    </svg>
                                </template>
                            </button>
                        </li>
                        <!-- Notifications menu -->

                        <!-- Profile menu -->

                    </ul>
                </div>
            </header>

            <div class="container">
                <main>


                    <div class="row g-5 my-5">
                        <div class="col-md-5 col-lg-4 order-md-last">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-primary">Payment on hold</span>

                                <?php

                                include('connection.php');

                                $show = "SELECT * FROM `user_payment_backup`";
                                $showquery = mysqli_query($con, $show);
                                $shownum = mysqli_num_rows($showquery);



                                ?>
                                <span class="badge bg-primary rounded-pill"><?php
                                                                            echo $shownum;

                                                                            ?></span>
                            </h4>


                            <!-- order loop -->

                            <?php

                            include('connection.php');

                            $sql = "SELECT * FROM `user_payment_backup`";
                            $query = mysqli_query($con, $sql);

                            // $dataf = mysqli_fetch_array($query);

                            // $numrow = mysqli_num_rows($query);

                            if ($numrow = mysqli_num_rows($query) > 0) {
                                while ($dataf = mysqli_fetch_array($query)) {



                                    echo '<div class = "my-3">';

                                    echo '<div class="card" style="width: 18rem;">';
                                    echo '<div class="card-body">';
                                    echo '<h5 class="card-title">TRACKING ID : ' . $dataf['sno'];
                                    echo '</h5>';
                                    echo '</div>';
                                    echo '<ul class="list-group list-group-flush">';
                                    echo '<li class="list-group-item">USER NAME : ' . $dataf['user_name'];
                                    echo '</li>';
                                    echo '<li class="list-group-item">EMAIL: ' . $dataf['user'];
                                    echo '</li>';
                                    echo '<li class="list-group-item">PHONE : ' . $dataf['phone'];
                                    echo '</li>';
                                    echo '<li class="list-group-item">ACCOUNT NO : '  . $dataf['account_no'];
                                    echo '</li>';
                                    echo '<li class="list-group-item">SEND: '  . $dataf['send'];
                                    echo '</li>';
                                    echo '<li class="list-group-item">SEND AM: ' . $dataf['sendam'];
                                    echo '</li>';
                                    echo '<li class="list-group-item">RECIVE: ' . $dataf['recive'];
                                    echo '</li>';
                                    echo '<li class="list-group-item">RECIVE AM: ' . $dataf['reciveam'];
                                    echo '</li>';
                                    echo '<li class="list-group-item">TRX ID: ' . $dataf['trx'];
                                    echo '</li>';
                                    echo '</ul>';
                                    echo '<div class="card-body">';
                                    echo '<form action="payment_onhold.php" method = "POST">';


                                    echo '<input type="hidden" class="btn btn-danger" name = "ids" value =' . $dataf["sno"] . '>';
                                    echo '<input type="submit" name ="views" class="btn btn-danger" value = "View">';
                                    echo '<input type="submit" class="btn btn-info mx-2" value = "Finish">';

                                    echo '</form>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            }

                            ?>

                            <?php
                            if (isset($_POST['views'])) {
                                $sele = "SELECT * FROM `user_payment_backup` WHERE sno = {$_POST['ids']}";

                                $results = mysqli_query($con, $sele);
                                $resfetch = mysqli_fetch_array($results);
                            }
                            ?>

                        </div>
                        <div class="col-md-7 col-lg-8">
                            <h4 class="mb-3">Billing Details</h4>
                            <form class="needs-validation" novalidate="" action="payment_onhold.php" method="POST">

                                <!-- update logic -->

                                <?php

                                if (isset($_POST['update'])) {

                                    include('connection.php');



                                    $Trxid = $_POST['trxids'];
                                    $status1 = $_POST['status'];
                                    $track = $_POST['tracking'];



                                    //  $update2 = "UPDATE `user-data` SET `state`='$status1' WHERE trx = '$Trxid' ";

                                    $update_sql = "UPDATE `user_payment` SET `state`='$status1' WHERE trx = '$Trxid' ";
                                    // $update_sql1 = "UPDATE `user_payment_backup` SET `state`='$status1' WHERE trx = $Trxid";

                                    $up_query = mysqli_query($con, $update_sql);




                                    if ($up_query) {
                                        $sucess = '<div class="alert alert-success" role="alert">
                                    payment status hasbeen updated
                                  </div>';
                                    } else {
                                        // echo "error";
                                    }

                                    //    delet data

                                    $del = "DELETE FROM `user_payment_backup` WHERE sno =$track";

                                    $delquery = mysqli_query($con, $del);
                                }
                                ?>

                                <div>
                                    <?php
                                    if (isset($sucess)) {
                                        echo  $sucess;
                                    }
                                    ?>
                                </div>

                                <div class="row g-3">

                                    <div class="col-6">
                                        <label for="email" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="email" placeholder="you@example.com" readonly value="<?php if (isset($_POST['views'])) {
                                                                                                                                                echo $resfetch['user_name'];
                                                                                                                                            }  ?>">

                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">Phone nimber</label>
                                        <input type="text" class="form-control" id="email" placeholder="you@example.com" readonly value="<?php if (isset($_POST['views'])) {
                                                                                                                                                echo $resfetch['phone'];
                                                                                                                                            }  ?>">

                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="text" class="form-control" id="email" placeholder="you@example.com" readonly value="<?php if (isset($_POST['views'])) {
                                                                                                                                                echo $resfetch['user'];
                                                                                                                                            }  ?>">

                                    </div>

                                    <div class="col-3">
                                        <label for="address" class="form-label">Send</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" readonly value="<?php if (isset($_POST['views'])) {
                                                                                                                                                        echo $resfetch['send'];
                                                                                                                                                    }  ?>">

                                    </div>
                                    <div class="col-3">
                                        <label for="address" class="form-label">Send am</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" readonly value="<?php if (isset($_POST['views'])) {
                                                                                                                                                        echo $resfetch['sendam'];
                                                                                                                                                    }  ?>">

                                    </div>
                                    <div class="col-3">
                                        <label for="address" class="form-label">Recive</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" readonly value="<?php if (isset($_POST['views'])) {
                                                                                                                                                        echo $resfetch['recive'];
                                                                                                                                                    }  ?>">

                                    </div>
                                    <div class="col-3">
                                        <label for="address" class="form-label">Recive am</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" readonly value="<?php if (isset($_POST['views'])) {
                                                                                                                                                        echo $resfetch['reciveam'];
                                                                                                                                                    }  ?>">

                                    </div>
                                    <div class="col-12">
                                        <label for="address" class="form-label">Date</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" readonly value="<?php if (isset($_POST['views'])) {
                                                                                                                                                        echo $resfetch['date'];
                                                                                                                                                    }  ?>">

                                    </div>
                                    <div class="col-12">
                                        <label for="address" class="form-label">Account No</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" readonly value="<?php if (isset($_POST['views'])) {
                                                                                                                                                        echo $resfetch['account_no'];
                                                                                                                                                    }  ?>">

                                    </div>

                                    <div class="col-6">
                                        <label for="address" class="form-label">Trx ID</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="trxids" required="" readonly value="<?php if (isset($_POST['views'])) {
                                                                                                                                                                        echo $resfetch['trx'];
                                                                                                                                                                    }  ?>">

                                    </div>
                                    <div class="col-6">
                                        <label for="address" class="form-label">Tracking</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="tracking" required="" readonly value="<?php if (isset($_POST['views'])) {
                                                                                                                                                                        echo $resfetch['sno'];
                                                                                                                                                                    }  ?>">

                                    </div>




                                    <div class="col-md-5">
                                        <label for="country" class="form-label">Status</label>
                                        <select class="form-select" id="country" name="status" required="" value="<?php if (isset($_POST['views'])) {
                                                                                                                        echo $resfetch['state'];
                                                                                                                    }  ?>">


                                            <option value="">Choose...</option>
                                            <option>Paid</option>
                                            <option>Canceled</option>

                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>




                                </div>

                                <hr class="my-4">

                                <button class="w-100 btn btn-primary btn-lg" type="submit" name="update">Update</button>
                            </form>
                        </div>
                    </div>
                </main>


            </div>
        </div>
    </div>

</body>

</html>