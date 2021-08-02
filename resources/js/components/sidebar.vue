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
        <router-link to="/home" tag="a" role="button" class="btn  rounded-pill text-light d-flex flex-row align-items-center justify-content-start">
          <Fa icon="home" /><span class="align-self-start">{{ $t('home_page_title') }}</span>
        </router-link>
        <router-link to="/profile" tag="a" role="button" class="btn  rounded-pill text-light d-flex flex-row align-items-center justify-content-start">
          <Fa icon="id-badge" /><span class="align-self-start">{{$t('profile_page_title')}}</span>
        </router-link>
    <!--  entity routes    -->
        <template v-if="user.role == 2">

          <a href="#orders-route-items" data-toggle="collapse" @click.prevent="" role="button" class="btn rounded-pill text-light d-flex flex-row align-items-center justify-content-start ">
            <Fa icon="shopping-cart"/>
            الطلبات
          </a>
            <ul id="orders-route-items" class="collapse">
              <li class="list-unstyled"><router-link to="/orders/myorders" exact tag="a" role="button" class="btn  rounded-pill text-light d-flex flex-row align-items-center justify-content-start">طلباتي</router-link></li>
              <li class="list-unstyled"><router-link to="/orders/published" exact tag="a" role="button" class="btn  rounded-pill text-light d-flex flex-row align-items-center justify-content-start">مشاركة في طلب</router-link></li>
              <li class="list-unstyled"><router-link to="/orders/new" tag="a" role="button" class="btn  rounded-pill text-light d-flex flex-row align-items-center justify-content-start">إنشاء طلب جديد</router-link></li>
            </ul>


        </template>
    <!--  facility routes  -->
        <template v-if="user.role == 1">
          <a href="#offers-route-items" data-toggle="collapse" @click.prevent="" role="button" class="btn rounded-pill text-light d-flex flex-row align-items-center justify-content-start ">
            <Fa icon="box-open"/>
            العروض
          </a>
          <ul id="offers-route-items" class="collapse">
            <li class="list-unstyled"><router-link to="/offers" exact tag="a" role="button" class="btn  rounded-pill text-light d-flex flex-row align-items-center justify-content-start">عروضي</router-link></li>
            <li class="list-unstyled"><router-link to="/offers/new" tag="a" role="button" class="btn  rounded-pill text-light d-flex flex-row align-items-center justify-content-start">إنشاء عرض جديد</router-link></li>
          </ul>
        </template>
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
    ...mapGetters({ isSidebarOpen: 'sidebar/isSidebarOpen' , user : 'auth/user'})
  },
  mounted () {
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
a{
  color: white;
  font-size: 15px !important;
  font-weight: 700;
}
a svg{
  margin-left: 10px;
  color: white !important;
}
</style>
