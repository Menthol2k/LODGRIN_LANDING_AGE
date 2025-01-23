<template>
    <AppLayout>
        <div class="container mx-auto p-6">
            <!-- Header -->
            <header class="text-center mb-8">
                <h1 class="text-4xl text-primaryColor font-bold">{{ __("Politica de Confidențialitate, GDPR și Termeni și Condiții - LODGRIN SRL") }}</h1>
            </header>

            <!-- Politica de Confidențialitate -->
            <section class="mb-12 mt-20">
                <h2 class="text-2xl text-primaryColor font-semibold mb-4">{{ __("Politica de Confidențialitate") }}</h2>

                <h3 class="text-xl text-secondaryColor font-semibold mb-2">{{ __("Informații Generale") }}</h3>
                <p class="text-gray-700">{{ __("LODGRIN SRL (\"noi\", \"compania\", \"LODGRIN\") respectă confidențialitatea utilizatorilor săi și se angajează să protejeze datele personale conform legislației GDPR.") }}</p>

                <div class="mt-4">
                    <p class="text-gray-700"><strong>{{ __("Nume firmă:") }}</strong> LODGRIN SRL</p>
                    <p class="text-gray-700"><strong>{{ __("Cod Unic de Înregistrare:") }}</strong> 50457182</p>
                    <p class="text-gray-700"><strong>{{ __("Nr. Înmatriculare:") }}</strong> J2024017294005</p>
                    <p class="text-gray-700"><strong>{{ __("EUID:") }}</strong> ROONRC.J2024017294005</p>
                </div>

                <h3 class="text-xl text-secondaryColor font-semibold mt-6 mb-2">{{ __("Ce date colectăm?") }}</h3>
                <p class="text-gray-700">{{ __("Pentru utilizatorii care folosesc formularul de tarife și formularul de contract, LODGRIN SRL NU stochează, NU vinde și NU distribuie datele cu caracter personal. Orice informație furnizată este utilizată exclusiv pentru scopul răspunsului la solicitarea utilizatorului și nu este păstrată.") }}</p>

                <h3 class="text-xl text-secondaryColor font-semibold mt-6 mb-2">{{ __("Cum protejăm datele?") }}</h3>
                <p class="text-gray-700">{{ __("Nu stocăm datele pe servere proprii sau terțe. Comunicările se fac doar pentru scopul declarat de utilizator. Nu partajăm datele cu terți.") }}</p>
            </section>

            <!-- Termeni și Condiții -->
            <section class="mb-12">
                <h2 class="text-2xl text-primaryColor font-semibold mb-4">{{ __("Termeni și Condiții") }}</h2>

                <h3 class="text-xl text-secondaryColor font-semibold mb-2">{{ __("Acceptarea Termenilor") }}</h3>
                <p class="text-gray-700">{{ __("Prin utilizarea site-ului nostru, sunteți de acord cu Termenii și Condițiile prezentate mai jos.") }}</p>

                <h3 class="text-xl text-secondaryColor font-semibold mt-6 mb-2">{{ __("Serviciile Noastre") }}</h3>
                <p class="text-gray-700">{{ __("Site-ul nostru oferă doar informații despre serviciile LODGRIN SRL. Utilizatorii pot solicita oferte de prețurile prin formularul de tarife sau formularul de contract.") }}</p>

                <h3 class="text-xl text-secondaryColor font-semibold mt-6 mb-2">{{ __("Limitarea Răspunderii") }}</h3>
                <p class="text-gray-700">{{ __("LODGRIN SRL nu este responsabil pentru eventualele erori, omisiuni sau informații inexacte prezentate pe site.") }}</p>

                <h3 class="text-xl text-secondaryColor font-semibold mt-6 mb-2">{{ __("Drepturile Utilizatorilor") }}</h3>
                <p class="text-gray-700">{{ __("Utilizatorii au dreptul de a ne contacta pentru orice întrebare legată de utilizarea datelor personale.") }}</p>
            </section>

            <!-- Politica GDPR -->
            <section class="mb-12">
                <h2 class="text-2xl text-primaryColor font-semibold mb-4">{{ __("Politica GDPR") }}</h2>

                <h3 class="text-xl text-secondaryColor font-semibold mb-2">{{ __("Drepturile Utilizatorilor") }}</h3>
                <p class="text-gray-700">{{ __("Conform Regulamentului General privind Protecția Datelor (GDPR), utilizatorii au următoarele drepturi:") }}</p>
                <ul class="list-disc pl-6 text-gray-700">
                    <li>{{ __("Dreptul de acces la date") }}</li>
                    <li>{{ __("Dreptul de rectificare sau ștergere") }}</li>
                    <li>{{ __("Dreptul de a obiecta asupra prelucrării") }}</li>
                    <li>{{ __("Dreptul de portabilitate a datelor") }}</li>
                </ul>

                <h3 class="text-xl text-secondaryColor font-semibold mt-6 mb-2">{{ __("Contact") }}</h3>
                <p class="text-gray-700">{{ __("Pentru orice solicitare legată de protecția datelor, ne puteți contacta la:") }}</p>
                <div class="mt-4">
                    <p class="text-gray-700"><strong>{{ __("Email:") }}</strong> office@lodgrin.com</p>
                    <p class="text-gray-700"><strong>{{ __("Telefon:") }}</strong> +40 790 460 533</p>
                </div>
            </section>
        </div>

    </AppLayout>
</template>
<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

</script>
