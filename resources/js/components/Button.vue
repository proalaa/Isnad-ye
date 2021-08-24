<template>
  <button role="button" @click="GoTo()" :type="nativeType" :disabled="loading" :class="{
    [`btn-${type}`]: true,
    'btn-block': block,
    'btn-lg': large,
    'btn-loading': loading
  }" class="btn"
  >
    <slot />
  </button>
</template>

<script>
export default {
  name: 'VButton',

  props: {
    type: {
      type: String,
      default: 'primary'
    },
    link: {
      type:String,
      default:''
    },
    nativeType: {
      type: String,
      default: 'submit'
    },

    loading: {
      type: Boolean,
      default: false
    },

    block: {
      type: Boolean,
      default: false
    },

    large: {
      type: Boolean,
      default: false
    }
  },
  methods:{
    GoTo(){
      if(this.link)
      {
        console.log('fff');
        this.$router.push(this.link);
      }
    }
  }
}
</script>
