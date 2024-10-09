<script setup>
import { ref } from 'vue';
import $ from 'jquery';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

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

        <Head :title="title" />

        <Banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
                <!-- Primary Navigation Menu -->
                <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div>
                        <div>
                            <div class="flex justify-between h-16 items-center">
                                <!-- Logo -->
                                <div class="shrink-0 flex items-center">
                                    <Link :href="route('home')">
                                    <ApplicationMark class="block h-9 w-auto" />
                                    </Link>
                                </div>
                                <div class="flex justify-en">
                                    <!-- Navigation Links -->
                                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                        <NavLink :href="'/#about'" :active="route().current('#about')">
                                            Despre noi
                                        </NavLink>
                                    </div>
                                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                        <NavLink :href="'/#services'" :active="route().current('dashboard')">
                                            Serviciile noastre
                                        </NavLink>
                                    </div>
                                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                        <NavLink :href="'/#testimonials'" :active="route().current('dashboard')">
                                            Testimoniale
                                        </NavLink>
                                    </div>
                                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                        <NavLink :href="route('tariff')" :active="route().current('tariff')">
                                            Tarife
                                        </NavLink>
                                    </div>
                                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                        <NavLink :href="'/#contact'" :active="route().current('dashboard')">
                                            Contact
                                        </NavLink>
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
                                                d="M4 6h16M4 12h16M4 18h16" />
                                            <path
                                                :class="{ 'hidden': !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
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
                        <ResponsiveNavLink :href="'#about'" :active="route().current('dashboard')">
                            Despre noi
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="'#services'" :active="route().current('dashboard')">
                            Serviciile noastre
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="'#testimonials'" :active="route().current('dashboard')">
                            Testimoniale
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('home')" :active="route().current('dashboard')">
                            Tarife
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="'#contact'" :active="route().current('dashboard')">
                            Contact
                        </ResponsiveNavLink>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>


    <footer class="bg-white rounded-lg shadow dark:bg-gray-900">
        <div class="w-full mx-auto md:pt-8 max-w-8xl">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="/images/lodgrin_logo_white_background.png" class="h-8" alt="Flowbite Logo" />
                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#about" class="hover:underline me-4 md:me-6">Drespre noi</a>
                    </li>
                    <li>
                        <a href="#services" class="hover:underline me-4 md:me-6">Serviciile noastre</a>
                    </li>
                    <li>
                        <a href="#testimonials" class="hover:underline me-4 md:me-6">Testimoniale</a>
                    </li>
                    <li>
                        <a href="/tariff" class="hover:underline me-4 md:me-6">Tarife</a>
                    </li>
                    <li>
                        <a href="#contact" class="hover:underline me-4 md:me-6">Contact</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">T&C</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Politica de Confidențialitate</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="pb-8">
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ new Date().getFullYear() }}
                <a href="https://lodgrin.com/" class="hover:underline">LODGRIN S.R.L.</a>. Toate drepturile
                rezervate.</span>
        </div>
    </footer>


</template>
