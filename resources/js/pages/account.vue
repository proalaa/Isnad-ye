<template>
  <div>
    this is Account page
  </div>
</template>
<script>
export default {
  name: 'Account',
  layout: 'default',
  mounted () {
    console.log(this.$route.meta.headerTitle)
  }
}
</script>

<style scoped>

</style>
