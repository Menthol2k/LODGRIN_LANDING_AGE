<template>
    <AppLayout title="Engineering">
        <div class="scroll-smooth">
            <Cta />
            <About />
            <Services />
            <Testimonials />
            <Contact />
        </div>
        <!--Scroll TOP button-->
        <TransitionRoot :show="goUpButton" enter="transition-all duration-75" enter-from="opacity-0 translate-y-full"
            enter-to="opacity-100 translate-y-0" leave="transition-all duration-150"
            leave-from="opacity-100 translate-y-0" leave-to="opacity-0 translate-y-full"
            class="fixed bottom-5 right-5 z-40">
            <button type="button" @click="goBackToTop" class="bg-white p-2 rounded-2xl shadow-xl border-2 text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                </svg>
            </button>
        </TransitionRoot>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import Cta from './Partials/Cta.vue';
import About from './Partials/About.vue';
import Services from './Partials/Services.vue';
import windowScrollPosition from '@/window-scroll-position';
import { TransitionRoot } from '@headlessui/vue';
import Testimonials from './Partials/Testimonials.vue';
import Contact from './Partials/Contact.vue';

export default {
    components: {
        AppLayout, Cta, About, Services, TransitionRoot,
        Testimonials, Contact
    },

    props: {
        recaptcha_site_key: String,
    },

    methods: {
        goBackToTop() {
            window.scrollTo(0, 0);
        }
    },

    mixins: [windowScrollPosition('position')],

    computed: {
        goUpButton() {
            if (this.position[1] >= 500) {
                return true;
            } else {
                return false;
            }
        }
    }
}

</script>
