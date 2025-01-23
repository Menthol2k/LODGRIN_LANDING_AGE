<template>
    <div id="cta" class="bg-white md:py-32 py-5 relative overflow-hidden">
        <div class="flex justify-between items-center mx-auto max-w-8xl">
            <div class="px-6 lg:px-8 z-20">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-7xl drop-shadow-lg">
                    <span class="text-primaryColor font-extrabold py-1 rounded-md">{{ __("Dezvoltăm") }}</span> {{__("soluții web.")}}
                </h2>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-7xl drop-shadow-lg">
                    <span class="text-primaryColor font-extrabold py-1 rounded-md">{{ __("Amplificăm") }}</span>
                    {{ __("succesul afacerii tale.") }}
                </h2>

                <p class="mt-6 text-lg text-gray-700">{{
                        __("Fie că ai nevoie de o platformă customizată sau de o aplicație scalabilă, suntem aici să transformăm viziunea ta în realitate. Cu soluții eficiente și design modern, îți oferim exact ceea ce ai nevoie pentru a reuși.")
                    }}</p>

                <div class="mt-10 flex items-center gap-x-6 z-40">
                    <a href="#contact"
                        class="rounded-md bg-primaryColor transition-all px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-hoverColor focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primaryColor">
                        {{ __("Contactează-ne") }}
                    </a>
                    <a href="#about" class="text-sm font-semibold leading-6 text-gray-900">{{ __("Vezi mai multe") }} <span
                            aria-hidden="true">→</span></a>
                </div>

                <div class="mt-12 md:flex md:justify-between md:items-center">
                    <div>
                        <ul class="mt-4 list-disc text-lg text-gray-700 space-y-3">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="size-6 w-8 h-8 fill-green-50 mr-2 text-primaryColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <div class="flex flex-col">
                                    <strong class="text-xl font-bold">{{ __("Dezvoltare Personalizată") }}:</strong>
                                    <span class="text-gray-600 text-base">{{ __("Soluții tailor-made pentru nevoile tale specifice.") }}</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="size-6 w-8 h-8 fill-green-50 mr-2 text-primaryColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <div class="flex flex-col">
                                    <strong class="text-xl font-bold">{{ __("Integrare API") }}:</strong>
                                    <span class="text-gray-600 text-base">{{ __("Conectăm aplicațiile tale pentru a lucra eficient împreună.") }}</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="size-6 w-8 h-8 fill-green-50 mr-2 text-primaryColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <div class="flex flex-col">
                                    <strong class="text-xl font-bold">{{ __("Design Responsiv") }}:</strong>
                                    <span class="text-gray-600 text-base">{{ __("Interfețe care arată bine pe orice dispozitiv.") }}</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="size-6 w-8 h-8 fill-green-50 mr-2 text-primaryColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <div class="flex flex-col">
                                    <strong class="text-xl font-bold">{{ __("Suport Tehnic") }}:</strong>
                                    <span class="text-gray-600 text-base">{{ __("Asistență constantă pentru o funcționare fără probleme.") }}</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="flex flex-col items-start md:w-4/12 w-full relative md:mt-0 mt-10 md:pb-0 pb-10">
                        <p class="text-4xl text-primaryColor font-extrabold text-center w-full z-20">{{ __("Dezvoltăm chiar și")}}</p>
                        <h1 class="text-2xl text-secondaryColor font-bold min-h-[60px] text-center z-20 w-full">
                            {{ __(currentService) }}
                        </h1>
                    </div>
                </div>
            </div>
            <img class="hidden sm:flex absolute z-10 right-0 bottom-0 opacity-10" src="/assets/blob_bottom_right.svg" />
            <img class="hidden sm:flex absolute z-10 left-0 top-0 opacity-10" src="/assets/blob_top_left.svg" />
            <!-- <img class="absolute z-10 left-0 top-0 opacity-10 scale-100" src="/assets/blob_top_left_general.svg" /> -->
        </div>
        <!-- Separator -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
            class="absolute md:-bottom-[35px] -bottom-[10px] z-10">
            <path fill="#04bf62" fill-opacity="1"
                d="M0,256L120,261.3C240,267,480,277,720,277.3C960,277,1200,267,1320,261.3L1440,256L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
            </path>
        </svg>

    </div>
    <div>
        <a href="#about" class="hidden md:block z-40 animate-bounce absolute left-[50%] right-[50%] bottom-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-8 text-gray-400 drop-shadow-xl">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
            </svg>
        </a>
    </div>
</template>
<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';

const availableServices = [
    'Aplicații de Management al Proiectelor',
    'Sisteme de Gestionare a Relațiilor cu Clienții (CRM)',
    'Aplicații de Gestiune a Resurselor Umane (HRM)',
    'Sisteme de Gestionare a Conținutului (CMS)',
    'Aplicații Financiare și de Bugetare',
    'Platforme de Feedback și Recenzii',
];

const currentService = ref(availableServices[0]);
let intervalId;

const changeService = () => {
    const randomIndex = Math.floor(Math.random() * availableServices.length);
    currentService.value = availableServices[randomIndex];
};

onMounted(() => {
    intervalId = setInterval(changeService, 1500);
});

onBeforeUnmount(() => {
    clearInterval(intervalId);
});
</script>
