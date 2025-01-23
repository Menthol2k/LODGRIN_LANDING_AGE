<template>
    <div class="h-captcha" data-sitekey="a05685aa-815c-4584-8a4a-f8dcaeee9058" ref="hcaptcha"></div>
</template>

<script>
export default {
    data() {
        return {
            siteKey: '58729860-6890-459e-83b8-cabe1d042546', // Site key pentru hCaptcha
        };
    },
    methods: {
        renderHCaptcha() {
            if (window.hcaptcha && this.$refs.hcaptcha) {
                window.hcaptcha.render(this.$refs.hcaptcha, {
                    sitekey: this.siteKey,
                    callback: this.onVerify,
                    'expired-callback': this.onExpire,
                });
            }
        },
        onVerify(token) {
            this.$emit('verify', token); // Emitere token-ul atunci când este verificat
        },
        onExpire() {
            this.$emit('expire'); // Emitere când token-ul expiră
            this.resetHCaptcha(); // Reîncarcă hCaptcha atunci când expiră tokenul
        },
        resetHCaptcha() {
            if (window.hcaptcha && this.$refs.hcaptcha) {
                window.hcaptcha.reset(this.$refs.hcaptcha); // Resetează hCaptcha
                setTimeout(() => {
                    this.renderHCaptcha(); // Re-randează hCaptcha după resetare
                }, 300); // Adăugăm o mică întârziere pentru a asigura resetarea corectă
            }
        },
    },
    mounted() {
        this.renderHCaptcha(); // Randează hCaptcha la montarea componentei
    },
}
</script>
