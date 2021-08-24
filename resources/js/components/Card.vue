<template>
  <div class="card" style="text-align: start">
    <div v-if="title" class="card-header">
     <p class="float-right"> {{ title }}</p>
      <slot name="header"></slot>
    </div>

    <div class="card-body">
      <slot />
    </div>
  </div>
</template>

<script>
export default {
  name: 'Card',

  props: {
    title: { type: String, default: null }
  }
}
</script>
