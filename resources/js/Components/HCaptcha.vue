<template>
    <div class="h-captcha" data-sitekey="a05685aa-815c-4584-8a4a-f8dcaeee9058" ref="hcaptcha"></div>
</template>

<script>
export default {
    data() {
        return {
            siteKey: 'a05685aa-815c-4584-8a4a-f8dcaeee9058', // Site key pentru hCaptcha
        };
    },
    methods: {
        renderHCaptcha() {
            if (window.hcaptcha) {
                window.hcaptcha.render(this.$refs.hcaptcha, {
                    sitekey: this.siteKey,
                    callback: this.onVerify,
                    'expired-callback': this.onExpire,
                });
            }
        },
        onVerify(token) {
            this.$emit('verify', token);
        },
        onExpire() {
            this.$emit('expire');
            this.resetHCaptcha(); // Reîncarcă hCaptcha atunci când expiră tokenul
        },
        resetHCaptcha() {
            if (window.hcaptcha) {
                window.hcaptcha.reset(this.$refs.hcaptcha); // Resetează hCaptcha
                this.renderHCaptcha(); // Re-randează hCaptcha pentru a obține un nou token
            }
        },
    },
    mounted() {
        this.renderHCaptcha();
    },
}
</script>
