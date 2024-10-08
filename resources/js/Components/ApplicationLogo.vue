<template>
    <img src="/images/lodgrin_logo_white_background.png"/>

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