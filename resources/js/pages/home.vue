<template>
  <card :title="$t('home')">
    {{ $t('you_are_logged_in') }}
  </card>
</template>

<script>
export default {
  name: 'Home',
  middleware: 'auth',
  metaInfo () {
    return { title: this.$t('home') }
  }
}
</script>
