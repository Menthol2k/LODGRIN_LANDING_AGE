<template>
    <div>
        <div ref="target" :style="{
            transform: cardTransform,
            transition: 'transform 0.25s ease-out'
        }" class="flex gap-4 items-start flex-col bg-secondaryColor p-8 rounded-xl shadow">
            <span class="text-green-600 bg-green-500/10 p-3 rounded-full"><svg width="15" height="15"
                    viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <path
                        d="M9.96424 2.68571C10.0668 2.42931 9.94209 2.13833 9.6857 2.03577C9.4293 1.93322 9.13832 2.05792 9.03576 2.31432L5.03576 12.3143C4.9332 12.5707 5.05791 12.8617 5.3143 12.9642C5.5707 13.0668 5.86168 12.9421 5.96424 12.6857L9.96424 2.68571ZM3.85355 5.14646C4.04882 5.34172 4.04882 5.6583 3.85355 5.85356L2.20711 7.50001L3.85355 9.14646C4.04882 9.34172 4.04882 9.6583 3.85355 9.85356C3.65829 10.0488 3.34171 10.0488 3.14645 9.85356L1.14645 7.85356C0.951184 7.6583 0.951184 7.34172 1.14645 7.14646L3.14645 5.14646C3.34171 4.9512 3.65829 4.9512 3.85355 5.14646ZM11.1464 5.14646C11.3417 4.9512 11.6583 4.9512 11.8536 5.14646L13.8536 7.14646C14.0488 7.34172 14.0488 7.6583 13.8536 7.85356L11.8536 9.85356C11.6583 10.0488 11.3417 10.0488 11.1464 9.85356C10.9512 9.6583 10.9512 9.34172 11.1464 9.14646L12.7929 7.50001L11.1464 5.85356C10.9512 5.6583 10.9512 5.34172 11.1464 5.14646Z"
                        fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg></span>
            <div>
                <h3 class="font-semibold text-xl text-white"> Dezvoltare și optimizare aplicații web</h3>
                <p class="mt-1 text-gray-300"> Dezvoltăm și optimizăm aplicații web personalizate pentru
                    afacerea ta, utilizând tehnologii moderne pentru a asigura scalabilitate și performanță.
                </p>
                <div class="mt-5">
                    <ul>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-8 w-8 h-8 fill-secondaryColor mr-2 text-hoverColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <div class="flex flex-col">
                                <strong class="text-xl font-bold text-gray-200">Dezvoltare aplicații
                                    personalizate</strong>
                                <span class="text-gray-200/70 text-base"> Proiectăm și construim aplicații web
                                    de la zero, adaptate complet cerințelor tale.</span>
                            </div>
                        </li>
                        <li class="flex items-start mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-8 w-8 h-8 fill-secondaryColor mr-2 text-hoverColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <div class="flex flex-col">
                                <strong class="text-xl font-bold text-gray-200">Optimizare
                                    performanță</strong>
                                <span class="text-gray-200/70 text-base"> Creștem viteza și eficiența
                                    aplicațiilor existente pentru o experiență îmbunătățită a
                                    utilizatorilor.</span>
                            </div>
                        </li>
                        <li class="flex items-start mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-8 w-8 h-8 fill-secondaryColor mr-2 text-hoverColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <div class="flex flex-col">
                                <strong class="text-xl font-bold text-gray-200">Mentenanță și suport
                                    continuu</strong>
                                <span class="text-gray-200/70 text-base">Asigurăm actualizări regulate și
                                    rezolvarea rapidă a eventualelor probleme tehnice.</span>
                            </div>
                        </li>
                        <li class="flex items-start mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-8 w-8 h-8 fill-secondaryColor mr-2 text-hoverColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <div class="flex flex-col">
                                <strong class="text-xl font-bold text-gray-200">Integrare API</strong>
                                <span class="text-gray-200/70 text-base"> Conectăm aplicațiile tale cu alte
                                    servicii externe pentru automatizarea proceselor.</span>
                            </div>
                        </li>
                        <li class="flex items-start mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-8 w-8 h-8 fill-secondaryColor mr-2 text-hoverColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <div class="flex flex-col">
                                <strong class="text-xl font-bold text-gray-200">Export date</strong>
                                <span class="text-gray-200/70 text-base"> Implementăm funcționalități de export
                                    de date în format Excel și PDF direct din aplicațiile dezvoltate.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
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

    const rX = (
        MAX_ROTATION / 2 - (elementY.value / elementHeight.value) * MAX_ROTATION
    ).toFixed(2); // miscare axa X

    const rY = (
        MAX_ROTATION / 2 - (elementX.value / elementWidth.value) * MAX_ROTATION - MAX_ROTATION / 2
    ).toFixed(2); // miscare axa Y

    return isOutside.value ? '' : `perspective(${elementWidth.value}px) rotateX(${rX}deg) rotateY(${rY}deg)`;

});

</script>