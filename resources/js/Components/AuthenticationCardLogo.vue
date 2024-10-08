<template>
    <Link :href="'/'" class="flex justify-center">
    <img src="/images/lodgrin_logo_white_background.png"
        class="object-contain w-[30%]" />
    </Link>
</template>
<script>
import { Link } from '@inertiajs/vue3';

export default {

    components: {
        Link,
    },

    data() {
        return {
            darkMode: false,
        }
    },

    mounted() {
        this.darkMode = localStorage.getItem('theme');
    }
}
</script>