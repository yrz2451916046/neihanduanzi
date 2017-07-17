import Vue from 'vue'
import App from './App.vue'
import router from '@/router'
import ElementUI from 'element-ui'
import locale from 'element-ui/lib/locale/lang/en'
import Axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios,Axios)
Vue.use(ElementUI, { locale })


import '@/assets/app'
Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: {
    App
  }
})
