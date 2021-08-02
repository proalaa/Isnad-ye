<template>
  <div id="" class="upper-menu">
    <div class="container-fluid row h-100 justify-content-between align-items-center">
      <div class=" col my-auto text-right d-flex">
        <img src="/images/humburgermenu.svg" class="hamburger-icon  d-inline-block" @click="toggleSidebar">
        <div class=" mr-4 mt-4">
          <h3 class="text-muted ">
            {{ headerTitle }}
          </h3>
          <p class="mr-2">{{ headerDesc }}</p>
        </div>
      </div>
      <div class=" col d-flex justify-content-end  align-items-center text-left">
        <a href="" class="ml-1"><Fa icon="envelope" /> </a>
        <a href="" class="mr-3 position-relative"><Fa icon="bell" /><span class="dot">&nbsp;</span></a>
        <a href="" class="btn btn-info rounded-pill d-none d-md-inline-flex align-items-center mr-md-4 py-2 mr-3" @click.prevent="logout"> <i class="fas fa-plus mr-3 ml-2"  /><span class="ml-3" >{{ $t('logout') }} </span></a>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions } from 'vuex'

export default {
  name: 'Header',
  props: ['title'],
  data: () => ({

  }),
  computed: {
    routeName () {
      const { name } = this.$route
      return name
    },
    headerTitle () {
      return this.$t(this.routeName + '_page_title')
    },
    headerDesc () {
      return this.$t(this.routeName + '_page_desc')
    }
  },
  mounted () {
  },
  methods: {
    ...mapActions({
      toggleSidebar: 'sidebar/toggleSidebar'
    }),
    async logout () {
      // Log out the user.
      await this.$store.dispatch('auth/logout')

      // Redirect to login.
      this.$router.push({ name: 'login' })
    }
  }
}
</script>

  <style scoped lang="scss">
  .slide-enter-active,
  .slide-leave-active
  {
    transition: transform 0.4s ease;
  }

  .slide-enter,
  .slide-leave-to {
    transform: translateX(100%);
    transition: all .4s ease-in 0s
  }
  .hamburger-icon
  {
    cursor: pointer;
    display: none;
  }
  </style>
