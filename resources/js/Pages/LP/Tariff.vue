<template>
    <AppLayout>
        <div class="max-w-8xl mx-auto mt-10 px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 grid-cols-1">
            <div>
                <h1 v-if="!successfull_form"
                    class="text-3xl sm:text-4xl lg:text-6xl font-bold text-primaryColor text-center sm:text-left">{{__("Cere o ofertă personalizată")}}</h1>
                <div class="mt-10 sm:mt-14 pb-16 sm:pb-32 flex flex-col sm:flex-row sm:items-center sm:justify-between">
                    <form v-if="!successfull_form" @submit.prevent="sendOffer" class="w-full sm:max-w-xl">
                        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                            <div class="col-span-2">
                                <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">{{__("Nume & Prenume")}} *</label>
                                <div class="mt-1">
                                    <input v-model="form.name" :placeholder="__('Popescu Ion')" type="text" name="name"
                                           id="name"
                                           autocomplete="given-name"
                                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primaryColor sm:text-sm sm:leading-6">
                                </div>
                                <div>
                                    <p v-if="errors.name" class="text-red-500 text-sm font-medium mt-1">{{
                                            __(errors.name)
                                        }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-span-2">
                                <label for="email"
                                       class="block text-sm font-semibold leading-6 text-gray-900">Email*</label>
                                <div class="mt-1">
                                    <input v-model="form.email" :placeholder="__('popescu.ios@email.ro')" name="email"
                                           id="email"
                                           autocomplete="email"
                                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primaryColor sm:text-sm sm:leading-6">
                                </div>
                                <div>
                                    <p v-if="errors.email" class="text-red-500 text-sm font-medium mt-1">{{
                                            __(errors.email)
                                        }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-span-2">
                                <label for="phone"
                                       class="block text-sm font-semibold leading-6 text-gray-900">{{ __("Numar de telefon") }}*</label>
                                <div class="mt-1">
                                    <input v-model="form.phone" :placeholder="__('0712 345 678')" name="phone" id="phone"
                                           autocomplete="phone"
                                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primaryColor sm:text-sm sm:leading-6">
                                </div>
                                <div>
                                    <p v-if="errors.phone" class="text-red-500 text-sm font-medium mt-1">{{
                                            __(errors.phone)
                                        }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-span-2">
                                <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">{{__("Companie / CUI")}}*</label>
                                <div class="mt-1">
                                    <input v-model="form.company" :placeholder="__('Denumire companie SRL')" type="text"
                                           name="company" id="company" autocomplete="company"
                                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primaryColor sm:text-sm sm:leading-6">
                                </div>
                                <div>
                                    <p v-if="errors.company" class="text-red-500 text-sm font-medium mt-1">{{
                                            __(errors.company)
                                        }}</p>
                                </div>
                            </div>

                            <div class="col-span-2">
                                <label for="message"
                                       class="block text-sm font-semibold leading-6 text-gray-900">{{ __("Mesaj") }}*</label>
                                <div class="mt-1">
                                <textarea v-model="form.message" :placeholder="__('Mesajul dvs...')" name="message"
                                          id="message" rows="4"
                                          class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primaryColor sm:text-sm sm:leading-6"></textarea>
                                </div>
                                <div class="flex items-center mt-1"
                                     :class="errors.message ? 'justify-between' : 'justify-end'">
                                    <p v-if="errors.message" class="text-red-500 text-sm font-medium">{{
                                            __(errors.message)
                                        }}
                                    </p>
                                    <p class="text-gray-400 text-xs">{{ form.message ? form.message.length : 0 }}
                                        {{__("caractere")}}.
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
                                    {{ __("Sunt de acord cu") }} <a href="/politica" class="underline">{{__("termenii și condițiile")
                                    }}</a> {{ __("de utilizare") }}. {{ __('Sunt de acord cu') }} <a href="/politica" class="underline">
                                    {{ __("politica de prelucrare a datelor") }}</a>. {{ __("Am peste 16 ani") }}.
                                </label>
                            </div>
                        </div>
                        <HCaptcha @verify="onVerify" @expire="onExpire" class="mt-10"/>
                        <p v-if="errors.captcha_token" class="text-red-500 text-sm font-medium">{{
                                __(errors.captcha_token)
                            }}
                        </p>
                        <div class="mt-8 flex justify-end">
                            <button type="submit"
                                    class="inline-block rounded-md bg-primaryColor hover:bg-hoverColor px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                {{__("Trimite formularul")}}
                            </button>
                        </div>
                    </form>
                    <div v-else class="flex justify-center items-center text-center pb-16">
                        <div>
                            <h1 class="text-3xl font-bold text-primaryColor">{{ __("Formularul a fost trimis cu succes") }}</h1>
                            <p class="text-lg font-semibold text-gray-900">{{ __("Va multumim pentru mesaj!") }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:block rounded-2xl h-fit mt-32 overflow-hidden" @click="mute_video = !mute_video">
                <video autoplay :muted="!mute_video" loop src="/videos/lodgrin_welcome.mp4"></video>
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
import {CheckIcon, ChevronUpDownIcon} from '@heroicons/vue/20/solid'
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
            mute_video: false,
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
        sendOffer(event) {
            event.preventDefault();

            this.loading = true;
            axios.post('/send-offer', this.form, {preserveState: true})
                .then((response) => {
                    this.successfull_form = true;
                })
                .catch((errors) => {
                    console.error(errors);
                    this.errors = catchErrors(errors);
                });
            this.loading = false;
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
