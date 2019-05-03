<template>
    <div>
        <h2>{{ $t('the_other_meps') }}</h2>
        <a type="button" :href="address" target="_blank" class="btn btn-primary btn-lg mt-2">{{ $t('find_on_the_other_calc') }}</a>
    </div>
</template>

<script>
    export default {
        computed: {
            search: function () {
                return window.location.search
            },
            address: function () {
                return this.$t('the_other_calc') + this.search + '&' + this.$settings['cookie'] + this.$settings['cookie_code'] + '=' + this.$getSetCookie(this.$settings['cookie'])
            }
        }
    }
</script>
