<template>
    <div id="contact" class="relative isolate bg-white">
        <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2">
            <div class="relative px-6 pb-20 pt-24 sm:pt-32 lg:static lg:px-8 lg:py-48">
                <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                    <div class="absolute inset-y-0 left-0 -z-10 w-full overflow-hidden bg-white lg:w-1/2">
                        <svg class="absolute inset-0 h-full w-full stroke-gray-200 [mask-image:radial-gradient(50%_70%_at_center,white,transparent)]"
                            aria-hidden="true">
                            <defs>
                                <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="100%"
                                    y="-1" patternUnits="userSpaceOnUse">
                                    <path d="M130 200V.5M.5 .5H200" fill="none" />
                                </pattern>
                            </defs>
                            <rect width="100%" height="100%" stroke-width="0" fill="white" />
                            <svg x="100%" y="-1" class="overflow-visible fill-gray-50">
                                <path d="M-470.5 0h201v201h-201Z" stroke-width="0" />
                            </svg>
                            <rect width="100%" height="100%" stroke-width="0"
                                fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
                        </svg>
                    </div>
                    <h2 class="text-6xl font-bold tracking-tight text-primaryColor">Contact</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Vrem să fim mereu la un mesaj distanță! Echipa
                        noastră este pregătită să îți ofere suportul de care ai nevoie pentru a-ți transforma ideile în
                        realitate. Nu ezita să ne contactezi pentru orice întrebări sau colaborări!</p>
                    <dl class="mt-10 space-y-4 text-base leading-7 text-gray-600">
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Address</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                                </svg>
                            </dt>
                            <dd>Ilfov, Chiajna, Strada Tineretului NR. 37C
                                <br>Cod poștal: 077040
                            </dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Telefon</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                            </dt>
                            <dd><a class="hover:text-gray-900" href="tel:+1 (555) 234-5678">+40 790 *** ***</a></dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Email</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                            </dt>
                            <dd><a class="hover:text-gray-900" href="mailto:office@lodgrin.com">office@lodgrin.com</a>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
            <form v-if="!successfull_form" @submit.prevent="sendMessage"
                class="px-6 pb-24 pt-20 sm:pb-32 lg:px-8 lg:py-48">
                <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div class="md:col-span-1 col-span-2">
                            <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">Nume &
                                Prenume*</label>
                            <div class="mt-1">
                                <input v-model="form.name" placeholder="Popescu Ion" type="text" name="first-name"
                                    id="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primaryColor sm:text-sm sm:leading-6">
                            </div>
                            <div>
                                <p v-if="errors.name" class="text-red-500 text-sm font-medium mt-1">{{ errors.name }}
                                </p>
                            </div>
                        </div>
                        <div class="md:col-span-1 col-span-2">
                            <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Companie
                                / CUI</label>
                            <div class="mt-1">
                                <input v-model="form.company" placeholder="Denumire companie SRL" type="text"
                                    name="last-name" id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primaryColor sm:text-sm sm:leading-6">
                            </div>
                            <div>
                                <p v-if="errors.company" class="text-red-500 text-sm font-medium mt-1">{{ errors.company
                                    }}
                                </p>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="email"
                                class="block text-sm font-semibold leading-6 text-gray-900">Email*</label>
                            <div class="mt-1">
                                <input v-model="form.email" placeholder="popescu.ios@email.ro" name="email" id="email"
                                    autocomplete="email"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primaryColor sm:text-sm sm:leading-6">
                            </div>
                            <div>
                                <p v-if="errors.email" class="text-red-500 text-sm font-medium mt-1">{{ errors.email }}
                                </p>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Numar
                                de telefon*</label>
                            <div class="mt-1">
                                <input v-model="form.phone" placeholder="0712 345 678" type="tel" name="phone-number"
                                    id="phone-number" autocomplete="tel"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primaryColor sm:text-sm sm:leading-6">
                            </div>
                            <div>
                                <p v-if="errors.phone" class="text-red-500 text-sm font-medium mt-1">{{ errors.phone }}
                                </p>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="message"
                                class="block text-sm font-semibold leading-6 text-gray-900">Mesaj*</label>
                            <div class="mt-1">
                                <textarea v-model="form.message" placeholder="Mesajul dvs..." name="message"
                                    id="message" rows="4"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primaryColor sm:text-sm sm:leading-6"></textarea>
                            </div>
                            <div class="flex items-center mt-1"
                                :class="errors.message ? 'justify-between' : 'justify-end'">
                                <p v-if="errors.message" class="text-red-500 text-sm font-medium">{{ errors.message
                                    }}
                                </p>
                                <p class="text-gray-400 text-xs">{{ form.message ? form.message.length : 0 }} caractere.
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 sm:col-span-2">
                            <div class="flex h-6 items-center">
                                <button type="button" @click="form.terms_and_conditions = !form.terms_and_conditions"
                                    :class="form.terms_and_conditions ? 'bg-primaryColor' : 'bg-gray-200'"
                                    class="flex w-8 flex-none cursor-pointer rounded-full p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                    role="switch" aria-checked="false" aria-labelledby="switch-1-label">
                                    <span class="sr-only">Politica de Confidențialitate</span>
                                    <span aria-hidden="true"
                                        :class="form.terms_and_conditions ? 'translate-x-3.5' : 'translate-x-0'"
                                        class="h-4 w-4 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
                                </button>
                            </div>
                            <label @click="form.terms_and_conditions = !form.terms_and_conditions"
                                class="text-sm leading-6 text-gray-600" id="switch-1-label">
                                Sunt de acord cu <a href="/terms-and-conditions" class="underline">termenii și
                                    condițiile</a> de utilizare. Sunt
                                de acord cu <a href="/politics" class="underline">politica
                                    de
                                    prelucrare a datelor</a>. Am peste 16 ani.
                            </label>
                        </div>
                        <div class="col-span-2">
                            <p v-if="errors.terms_and_conditions" class="text-red-500 text-sm font-medium">{{
                                errors.terms_and_conditions
                            }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-end">
                        <button type="submit" :disabled="loading"
                            :class="loading ? 'bg-gray-500 hover:bg-gray-600 cursor-no-drop' : 'bg-primaryColor hover:bg-hoverColor'"
                            class="rounded-md transition-all flex items-center justify-center space-x-3 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primaryColor">
                            <svg v-if="loading" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M10.72,19.9a8,8,0,0,1-6.5-9.79A7.77,7.77,0,0,1,10.4,4.16a8,8,0,0,1,9.49,6.52A1.54,1.54,0,0,0,21.38,12h.13a1.37,1.37,0,0,0,1.38-1.54,11,11,0,1,0-12.7,12.39A1.54,1.54,0,0,0,12,21.34h0A1.47,1.47,0,0,0,10.72,19.9Z">
                                    <animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite"
                                        type="rotate" values="0 12 12;360 12 12" />
                                </path>
                            </svg>
                            <p>
                                Trimite
                                formularul</p>
                        </button>
                    </div>
                    <HCaptcha @verify="onVerify" @expire="onExpire" />
                    <p v-if="errors.captcha_token" class="text-red-500 text-sm font-medium">{{
                        errors.captcha_token
                        }}
                    </p>
                </div>
            </form>
            <div v-else class="flex justify-center items-center text-center">
                <div>
                    <h1 class="text-3xl font-bold text-primaryColor">Formularul a fost trimis cu succes</h1>
                    <p class="text-lg font-semibold text-gray-900">Va multumim pentru mesaj!</p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import catchErrors from '@/catchErrors.js';
import HCaptcha from '@/Components/HCaptcha.vue';

export default {

    components: {
        HCaptcha
    },

    data() {
        return {
            form: this.$inertia.form({
                name: null,
                company: null,
                email: null,
                phone: null,
                message: null,
                terms_and_conditions: false,
                captcha_token: null,
            }),
            errors: [],
            successfull_form: false,
            loading: false,
        }
    },

    methods: {
        sendMessage() {
            this.loading = true;
            setTimeout(() => {
                axios.post('/send-message', this.form, { preserveState: true })
                    .then((response) => {
                        this.successfull_form = true;
                    })
                    .catch((errors) => {
                        console.error(errors);
                        this.errors = catchErrors(errors);
                    });
                this.loading = false;
            }, 1800);
        },
        onVerify(token) {
            this.form.captcha_token = token;
        },
        onExpire() {
            this.form.captcha_token = '';
        },
    },
}
</script>
<style scoped>
.h-captcha {
    margin: 20px 0;
}
</style>