<template>
    <AppLayout>
        <div class="max-w-8xl mx-auto mt-20">
            <h1 v-if="!successfull_form" class="text-6xl font-bold text-primaryColor">Cere o ofertă personalizată</h1>
            <div class="mt-14 pb-32 flex items-center justify-between">
                <form v-if="!successfull_form" @submit.prevent="sendOffer">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 max-w-xl">
                        <div class="col-span-2">
                            <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Nume &
                                Prenume*</label>
                            <div class="mt-1">
                                <input v-model="form.name" placeholder="Popescu Ion" type="text" name="name" id="name"
                                    autocomplete="given-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primaryColor sm:text-sm sm:leading-6">
                            </div>
                            <div>
                                <p v-if="errors.name" class="text-red-500 text-sm font-medium mt-1">{{ errors.name }}
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
                            <label for="phone"
                                class="block text-sm font-semibold leading-6 text-gray-900">Telefon*</label>
                            <div class="mt-1">
                                <input v-model="form.phone" placeholder="0712 345 678" name="phone" id="phone"
                                    autocomplete="phone"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primaryColor sm:text-sm sm:leading-6">
                            </div>
                            <div>
                                <p v-if="errors.phone" class="text-red-500 text-sm font-medium mt-1">{{ errors.phone }}
                                </p>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Companie
                                / CUI*</label>
                            <div class="mt-1">
                                <input v-model="form.company" placeholder="Denumire companie SRL" type="text"
                                    name="company" id="company" autocomplete="company"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primaryColor sm:text-sm sm:leading-6">
                            </div>
                            <div>
                                <p v-if="errors.company" class="text-red-500 text-sm font-medium mt-1">{{ errors.company
                                    }}
                                </p>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <Combobox as="div" v-model="form.caen" @update:modelValue="params.query = ''">
                                <ComboboxLabel class="block text-sm font-medium leading-6 text-gray-900">Domeniu
                                    activitate (CAEN)*
                                </ComboboxLabel>
                                <div class="relative mt-1">
                                    <ComboboxInput placeholder="Scrie domeniul de activitate..."
                                        class="w-full rounded-md border-0 bg-white py-1.5 pl-3 pr-10 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primaryColor sm:text-sm sm:leading-6"
                                        @change="params.query = $event.target.value" @blur="params.query = ''"
                                        :display-value="(person) => person?.name" />
                                    <ComboboxButton
                                        class="absolute inset-y-0 right-0 flex items-center rounded-r-md px-2 focus:outline-none">
                                        <ChevronUpDownIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                                    </ComboboxButton>

                                    <ComboboxOptions v-if="filteredPeople.length > 0"
                                        class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                        <ComboboxOption v-for="person in filteredPeople" :key="person.id"
                                            :value="person" as="template" v-slot="{ active, selected }">
                                            <li
                                                :class="['relative cursor-default select-none py-2 pl-3 pr-9', active ? 'bg-primaryColor text-white' : 'text-gray-900']">
                                                <span :class="['block truncate', selected && 'font-semibold']">
                                                    {{ person.name }}
                                                </span>

                                                <span v-if="selected"
                                                    :class="['absolute inset-y-0 right-0 flex items-center pr-4', active ? 'text-white' : 'text-primaryColor']">
                                                    <CheckIcon class="h-5 w-5" aria-hidden="true" />
                                                </span>
                                            </li>
                                        </ComboboxOption>
                                    </ComboboxOptions>
                                </div>
                                <div>
                                    <p v-if="errors.caen" class="text-red-500 text-sm font-medium mt-1">{{
                                        errors.caen
                                        }}
                                    </p>
                                </div>
                            </Combobox>
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
                        <div class="col-span-2 flex justify-end">
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
                    </div>
                    <p v-if="errors.captcha_token" class="text-red-500 text-sm font-medium">{{
                        errors.captcha_token
                    }}
                    </p>
                </form>
                <div v-else class="flex justify-center items-center text-center">
                    <div>
                        <h1 class="text-3xl font-bold text-primaryColor">Formularul a fost trimis cu succes</h1>
                        <p class="text-lg font-semibold text-gray-900">Va multumim pentru mesaj!</p>
                    </div>
                </div>
                <div class="flex justify-center mt-20">
                    <img width="480" src="/assets/calling.svg" class="relative" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import pickBy from 'lodash/pickBy';
import throttle from 'lodash/throttle';
import catchErrors from '@/catchErrors';
import debounce from 'lodash/debounce';
import { CheckIcon, ChevronUpDownIcon } from '@heroicons/vue/20/solid'
import {
    Combobox,
    ComboboxButton,
    ComboboxInput,
    ComboboxLabel,
    ComboboxOption,
    ComboboxOptions,
} from '@headlessui/vue'
import HCaptcha from '@/Components/HCaptcha.vue';

export default {
    components: {
        AppLayout, CheckIcon, ChevronUpDownIcon,
        Combobox, ComboboxButton, ComboboxInput,
        ComboboxLabel, ComboboxOption, ComboboxOptions,
        HCaptcha
    },

    props: {
        caens: Object,
    },

    data() {
        return {
            form: this.$inertia.form({
                name: null,
                company: null,
                email: null,
                phone: null,
                caen: null,
                message: null,
                terms_and_conditions: false,
                captcha_token: null,
            }),
            errors: [],
            params: {
                query: '',
            },
            loading: false,
            selectedPerson: null,
            people: this.caens,
            successfull_form: false,
        }
    },

    methods: {
        sendOffer() {
            this.loading = true;
            setTimeout(() => {
                axios.post('/send-offer', this.form, { preserveState: true })
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

    computed: {
        filteredPeople() {
            if (this.params.query.length < 1) {
                return [];
            }
            return this.people.filter((person) => {
                return person.name.toLowerCase().includes(this.params.query.toLowerCase());
            });
        }
    },

}

</script>