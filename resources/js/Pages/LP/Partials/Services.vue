<template>
    <div id="services" class="bg-white md:py-10 py-5 relative overflow-hidden bg-pattern">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="absolute md:-top-20 -top-5">
            <path fill="#04bf62" fill-opacity="1"
                d="M0,128L120,112C240,96,480,64,720,80C960,96,1200,160,1320,192L1440,224L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
            </path>
        </svg>

        <div class="md:flex md:justify-between md:space-x-32 px-8 items-center mx-auto max-w-8xl mt-16 mb-20">
            <div>
                <h1 class="text-primaryColor font-bold md:text-6xl text-3xl drop-shadow-lg">
                    {{ __("Serviciile noastre") }}
                </h1>
            </div>
        </div>
        <div>
            <div class="grid md:grid-cols-3 max-w-8xl mx-auto gap-10 mt-8 px-5">
                <Service1 />

                <Service2 />

                <Service3 />

            </div>
        </div>
    </div>
</template>
<script setup>
import Service1 from './ServiceCards/Service1.vue';
import Service2 from './ServiceCards/Service2.vue';
import Service3 from './ServiceCards/Service3.vue';
</script>
