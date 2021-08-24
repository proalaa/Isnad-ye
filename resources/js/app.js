import Vue from 'vue'
import store from '~/store'
import router from '~/router'
import i18n from '~/plugins/i18n'
import App from '~/components/App'
import '~/plugins'
import '~/components'
import './general'
import helpers from "./mixins/helpers";
Vue.mixin(helpers);
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  i18n,
  store,
  router,
  ...App,
})
