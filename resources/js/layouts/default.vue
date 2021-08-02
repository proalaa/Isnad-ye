<template>
  <div class="main-layout">
    <div class="d-flex">
      <!--      side bar-->
      <!--      TODO
       make nav component and then use in sidebar component
       -->
      <div id="" class="">
        <sidebar />
      </div>
      <!--      -->
      <div id="content" class="flex-grow-1">
        <Header/>
        <!--      TODO
       isolate application child from another child ex:login child
       -->
        <div class="container-fluid mt-4">
          <child />
        </div>
      </div>
      <!--      -->
    </div>
  </div>
</template>

<script>
import Sidebar from '~/components/sidebar'
import Header from '../components/Header'
import Child from '../components/Child'

export default {
  name: 'MainLayout',
  components: {
    Header,
    Child,
    Sidebar
  },
  data: () => ({
  }),
  watch: {
    $route: {
      handler: (to, from) => {
        window.headerTitle = to.meta.headerTitle
      }
    }
  }
}
</script>
