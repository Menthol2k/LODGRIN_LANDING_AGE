<template>
    <img src="/images/lodgrin_logo_white_background.png"
        class="object-contain w-fit max-w-[170px]" />
</template>
<script>
export default {

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