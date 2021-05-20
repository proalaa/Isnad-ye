<template>
  <div>
    this is Account page
  </div>
</template>
<script>
export default {
  name: 'Account',
  layout: 'default',
  middleware: 'auth',
  mounted () {
    console.log(this.$route.meta.headerTitle)
  }
}
</script>

<style scoped>

</style>
