<template>
    <div id="about" class="bg-primaryColor md:py-10 py-5 relative overflow-hidden bg-pattern">
        <div class="md:flex md:justify-between md:space-x-32 px-8 items-center mx-auto max-w-8xl">
            <div>
                <h1 class="text-white font-bold md:text-6xl text-3xl drop-shadow-lg tracking-wide">
                    {{ __("DESPRE NOI") }}
                </h1>
                <p class="text-white text-lg mt-4 font-medium drop-shadow-lg z-40">
                    {{__("La LODGRIN, suntem pasionați de tehnologie și inovație, oferind soluții digitale personalizate. Deși suntem o firmă nouă, avem experiență valoroasă și suntem pregătiți să facem față provocărilor. Misiunea noastră este să sprijinim afaceri de toate dimensiunile în digitalizare, livrând servicii de cea mai înaltă calitate. Credem în puterea colaborării și lucrăm îndeaproape cu clienții pentru a reflecta viziunea și obiectivele lor. Hai să construim împreună viitorul afacerii tale!")}}
                </p>
            </div>
            <img class="hidden md:flex" src="/assets/about.svg" width="540px" />
        </div>
    </div>
</template>
<style scoped>
.bg-pattern {
    position: relative;
    background-image: url('/assets/polygons.svg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.bg-pattern::before,
.bg-pattern::after {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    height: 50px;
    pointer-events: none;
}

.bg-pattern::before {
    top: 0;
    background: linear-gradient(to bottom, #04bf62, rgba(255, 255, 255, 0));
}

.bg-pattern::after {
    bottom: 0;
    background: linear-gradient(to top, #04bf62, rgba(255, 255, 255, 0));
}
</style>
