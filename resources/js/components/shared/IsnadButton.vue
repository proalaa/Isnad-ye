<template>
  <a class="btn btn-primary" :href="this.link">
    <slot />
  </a>
</template>

<script>
export default {
  name: "IsnadButton",
  data:() => ({
  }),
  props:{
    link:URL,
    type:String
  }
}
</script>

<style scoped>
 a{
   background: #25A2B8;
   color: #ffffff;
   text-decoration: none;
   border-radius: 10px;
   padding: 5px 20px;
 }


</style>
