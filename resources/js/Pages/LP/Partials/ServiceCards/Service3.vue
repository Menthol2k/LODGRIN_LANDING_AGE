<template>
    <div ref="target" :style="{
        transform: cardTransform,
        transition: 'transform 0.25s ease-out'
    }" class="flex gap-4 items-start flex-col bg-secondaryColor p-8 rounded-xl shadow">
        <span class="text-green-600 bg-green-500/10 p-3 rounded-full"><svg width="15" height="15" viewBox="0 0 15 15"
                fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                <path
                    d="M7.28856 0.796908C7.42258 0.734364 7.57742 0.734364 7.71144 0.796908L13.7114 3.59691C13.8875 3.67906 14 3.85574 14 4.05V10.95C14 11.1443 13.8875 11.3209 13.7114 11.4031L7.71144 14.2031C7.57742 14.2656 7.42258 14.2656 7.28856 14.2031L1.28856 11.4031C1.11252 11.3209 1 11.1443 1 10.95V4.05C1 3.85574 1.11252 3.67906 1.28856 3.59691L7.28856 0.796908ZM2 4.80578L7 6.93078V12.9649L2 10.6316V4.80578ZM8 12.9649L13 10.6316V4.80578L8 6.93078V12.9649ZM7.5 6.05672L12.2719 4.02866L7.5 1.80176L2.72809 4.02866L7.5 6.05672Z"
                    fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg></span>
        <div>
            <h3 class="font-semibold text-xl text-white">Consultanță IT și automatizare procese
            </h3>
            <p class="mt-1 text-gray-300"> Te ajutăm să identifici și să implementezi soluții
                tehnologice care automatizează procesele, reduc costurile și cresc eficiența afacerii
                tale.</p>
        </div>
        <div>
            <ul>
                <li class="flex items-start mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8 w-8 h-8 fill-secondaryColor mr-2 text-hoverColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <div class="flex flex-col">
                        <strong class="text-xl font-bold text-gray-200">Analiză și consultanță
                            IT</strong>
                        <span class="text-gray-200/70 text-base"> Identificăm nevoile tale tehnologice și
                            oferim soluții personalizate.</span>
                    </div>
                </li>
                <li class="flex items-start mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8 w-8 h-8 fill-secondaryColor mr-2 text-hoverColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <div class="flex flex-col">
                        <strong class="text-xl font-bold text-gray-200">Automatizare procese:</strong>
                        <span class="text-gray-200/70 text-base"> Implementăm soluții de automatizare de la
                            gestionarea stocurilor la facturare
                            automată.</span>
                    </div>
                </li>
                <li class="flex items-start mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8 w-8 h-8 fill-secondaryColor mr-2 text-hoverColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <div class="flex flex-col">
                        <strong class="text-xl font-bold text-gray-200">Integrare API și sisteme
                            externe</strong>
                        <span class="text-gray-200/70 text-base">Conectăm aplicațiile tale cu servicii
                            externe pentru o gestionare integrată.</span>
                    </div>
                </li>
                <li class="flex items-start mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8 w-8 h-8 fill-secondaryColor mr-2 text-hoverColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <div class="flex flex-col">
                        <strong class="text-xl font-bold text-gray-200">Soluții cloud</strong>
                        <span class="text-gray-200/70 text-base"> Oferim soluții de hosting și migrare
                            către platforme cloud (DigitalOcean).</span>
                    </div>
                </li>
                <li class="flex items-start mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8 w-8 h-8 fill-secondaryColor mr-2 text-hoverColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <div class="flex flex-col">
                        <strong class="text-xl font-bold text-gray-200">Suport și scalabilitate</strong>
                        <span class="text-gray-200/70 text-base"> Oferim suport continuu și soluții
                            scalabile pe măsură ce afacerea ta crește.</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>
<style scoped>
.card {
    transform: v-bind(cardTransform);
    transition: transform 0.25s ease-out;
}
</style>

<script setup lang="ts">
import { ref, computed } from 'vue'
import { useMouse, useMouseInElement } from '@vueuse/core';

const target = ref(null);

const { elementX, elementY, isOutside, elementHeight, elementWidth } = useMouseInElement(target);

const cardTransform = computed(() => {
    const MAX_ROTATION = 6;

    const normalizedX = (elementX.value / elementWidth.value) - 0.5;
    const normalizedY = (elementY.value / elementHeight.value) - 0.5;

    const rX = (normalizedY * MAX_ROTATION).toFixed(2);
    const rY = (normalizedX * MAX_ROTATION).toFixed(2);

    return isOutside.value ? '' : `perspective(${elementWidth.value}px) rotateX(${rX}deg) rotateY(${rY}deg)`;
});


</script>
