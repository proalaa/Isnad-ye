<template>
  <transition name="slide">
    <div v-if="isSidebarOpen" id="sidebar">
      <div class="top-side">
        <div class="container" />
      </div>

      <div>
        <button class="d-inline-block exit-sidebar d-lg-none" @click="closeSidebar">
          &times;
        </button>
        <div class="clearfix d-lg-none" />
        <router-link to="home" tag="a" role="button" class="btn  rounded-pill text-light d-flex flex-row align-items-center justify-content-start">
          <Fa /><span class="align-self-start">الرئيسية</span>
        </router-link>
        <router-link to="account" tag="a" role="button" class="btn  rounded-pill text-light d-flex flex-row align-items-center justify-content-start">
          <Fa /><span class="align-self-start">حسابي</span>
        </router-link>
        <router-link to="orders" tag="a" role="button" class="btn  rounded-pill text-light d-flex flex-row align-items-center justify-content-start">
          <Fa /><span class="align-self-start">الطلبات</span>
        </router-link>
        <router-link to="entity" tag="a" role="button" class="btn  rounded-pill text-light d-flex flex-row align-items-center justify-content-start">
          <Fa /><span class="align-self-start">بروفايل المنشاة</span>
        </router-link>
        <router-link to="offers" tag="a" role="button" class="btn  rounded-pill text-light d-flex flex-row align-items-center justify-content-start">
          <Fa /><span class="align-self-start">العروض</span>
        </router-link>
      </div>
    </div>
  </transition>
</template>

<script>
import { mapGetters , mapActions } from 'vuex'
export default {
  name: 'Sidebar',
  data: () => ({
  }),
  computed: {
    ...mapGetters({ isSidebarOpen: 'sidebar/isSidebarOpen' })
  },
  mounted () {
    console.log(this.isSidebarOpen)
  },
  methods: {
    ...mapActions({
      closeSidebar: 'sidebar/closeSidebar'
    })
  }
}
</script>

<style scoped lang="scss">
a.active{

}
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
.top-side
{
  height: 100px;
}
</style>
