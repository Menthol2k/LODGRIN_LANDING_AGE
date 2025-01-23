<script setup>
import {ref} from 'vue';
import $ from 'jquery';
import {Head, Link, router} from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';


defineProps({
    title: String,
});

const languages = ref([
    { code: 'en', name: 'English' },
    { code: 'ro', name: 'Română' },
    { code: 'es', name: 'Español' },
    { code: 'fr', name: 'Français' },
    { code: 'ch', name: 'Chinese' },
    { code: 'ru', name: 'Russian' },
]);

const changeLanguage = (code) => {
    console.log('Changing language to:', code);
};

const showingNavigationDropdown = ref(false);
const darkMode = ref(localStorage.getItem('theme'));
const accordionContent = ref(null);

const logout = () => {
    router.post(route('logout'));
};

const toggleAccordion = () => {
    const content = accordionContent.value;
    $(content).slideToggle(300);
    showingNavigationDropdown.value = !showingNavigationDropdown.value;
};
</script>
<template>
    <div>
        <Head :title="title"/>
        <Banner/>
        <div class="min-h-screen bg-white dark:bg-gray-900">
            <nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
                <!-- Primary Navigation Menu -->
                <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div>
                        <div>
                            <div class="flex justify-between h-16 items-center">
                                <!-- Logo -->
                                <div class="shrink-0 flex items-center">
                                    <Link :href="route('home')">
                                        <ApplicationMark class="block h-9 w-auto"/>
                                    </Link>
                                </div>
                                <div class="flex justify-en">
                                    <!-- Navigation Links -->
                                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                        <NavLink :href="'/#about'" :active="route().current('#about')">
                                            {{__("Despre noi")}}
                                        </NavLink>
                                    </div>
                                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                        <NavLink :href="'/#services'" :active="route().current('dashboard')">
                                            {{ __("Serviciile noastre") }}
                                        </NavLink>
                                    </div>
                                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                        <NavLink :href="'/#testimonials'" :active="route().current('dashboard')">
                                            {{ __("Testimoniale")}}
                                        </NavLink>
                                    </div>
                                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                        <NavLink :href="route('tariff')" :active="route().current('tariff')">
                                            {{ __("Tarife") }}
                                        </NavLink>
                                    </div>
                                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                        <NavLink :href="'/#contact'" :active="route().current('dashboard')">
                                            {{ __("Contact") }}
                                        </NavLink>
                                    </div>
                                    <div class="relative pt-2 ml-10">
                                        <Menu as="div" class="relative inline-block text-left">
                                            <div>
                                                <MenuButton class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white text-sm font-semibold text-gray-900 shadow-xs ring-inset hover:bg-gray-50 p-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                                                    </svg>
                                                </MenuButton>
                                            </div>

                                            <transition
                                                enter-active-class="transition ease-o   ut duration-100"
                                                enter-from-class="transform opacity-0 scale-95"
                                                enter-to-class="transform opacity-100 scale-100"
                                                leave-active-class="transition ease-in duration-75"
                                                leave-from-class="transform opacity-100 scale-100"
                                                leave-to-class="transform opacity-0 scale-95">

                                                <MenuItems class="absolute z-40 right-0 mt-2 w-40 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                                    <div class="py-1">
                                                        <MenuItem v-for="(lang, key) in languages" :key="key" v-slot="{ active }">
                                                            <Link :href="route('language', lang.code)"
                                                                @click="changeLanguage(lang.code)"
                                                                :class="[$page.props.locale == lang.code ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm w-full text-left']">
                                                                {{ lang.name }}
                                                            </Link>
                                                        </MenuItem>
                                                    </div>
                                                </MenuItems>
                                            </transition>
                                        </Menu>
                                    </div>
                                </div>
                                <!-- Hamburger -->
                                <div class="-me-2 flex items-center sm:hidden">
                                    <button
                                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out"
                                        @click="toggleAccordion">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path
                                                :class="{ 'hidden': showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16"/>
                                            <path
                                                :class="{ 'hidden': !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- MOBILE -->
                <div ref="accordionContent"
                     :class="{ 'block': showingNavigationDropdown, 'hidden': !showingNavigationDropdown }"
                     class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="'/#about'" :active="route().current('dashboard')">
                            {{ __("Despre noi") }}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="'/#services'" :active="route().current('dashboard')">
                            {{ __("Serviciile noastre") }}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="'/#testimonials'" :active="route().current('dashboard')">
                            {{ __("Testimoniale") }}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="'/tariff'" :active="route().current('tariff')">
                            {{ __("Tarife") }}
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="'/#contact'" :active="route().current('dashboard')">
                            {{ __("Contact") }}
                        </ResponsiveNavLink>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main>
                <slot/>
            </main>
        </div>
    </div>


    <footer class="bg-white rounded-lg shadow dark:bg-gray-900">
        <div class="w-full mx-auto pt-8 max-w-8xl">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/" class="flex justify-center items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="/images/lodgrin_logo_white_background.png" class="h-6" alt="Flowbite Logo"/>
                </a>
                <ul
                    class="flex justify-center flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="/#about" class="hover:underline me-4 md:me-6">{{ __("Despre noi") }}</a>
                    </li>
                    <li>
                        <a href="/#services" class="hover:underline me-4 md:me-6">{{ __("Serviciile noastre") }}</a>
                    </li>
                    <li>
                        <a href="/#testimonials" class="hover:underline me-4 md:me-6">{{ __("Testimoniale") }}</a>
                    </li>
                    <li>
                        <a href="/tariff" class="hover:underline me-4 md:me-6">{{ __("Tarife") }}</a>
                    </li>
                    <li>
                        <a href="/#contact" class="hover:underline me-4 md:me-6">{{ __("Contact") }}</a>
                    </li>
                    <li>
                        <a href="/politica" class="hover:underline me-4 md:me-6">{{ __("Politica") }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"/>
        <div class="pb-8">
            <span class="flex justify-center text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{
                    new Date().getFullYear()
                }} &nbsp;
                <a href="https://lodgrin.com/" class="hover:underline">LODGRIN S.R.L.</a>.
                {{ __("Toate drepturile rezervate") }}.</span>
        </div>
    </footer>
</template>
