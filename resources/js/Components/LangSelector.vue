<template>
    <div class="ml-4">
        <!-- <Link :href="route('language', [selectable_locale])">
            <icon class="w-5 h-5" :name="selectable_locale" />
        </Link> -->
        <select-input v-model="selected" @change="select(selected)">
            <option value="ro">{{ __('Romanian') }} </option>
            <option value="en">{{ __('English') }}</option>
        </select-input>
    </div>

</template>

<script>
import SelectInput from './SelectInput.vue'
import Icon from './Icon.vue'
import { Link } from '@inertiajs/inertia-vue3'


export default {
    components: {
        Icon, Link, SelectInput

    },
    data() {
        return {
            selected: this.$page.props.locale
        }
    },

    methods: {
        select(selected) {
            this.$inertia.post("/language/" + selected);
            console.log(selected)
        }
    },
}
</script>