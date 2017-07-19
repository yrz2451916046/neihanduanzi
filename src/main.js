import Vue from 'vue'
import App from './App.vue'
import router from '@/router'
import ElementUI from 'element-ui'
import locale from 'element-ui/lib/locale/lang/en'
Vue.use(ElementUI, { locale })
import Axios from 'axios'

import VueLazyload from 'vue-lazyload';
// Vue.use(VueLazyload)

Vue.prototype.Axios = "$http";
import '@/assets/app'
Vue.config.productionTip = false

Vue.use(VueLazyload, {
  preLoad: 1.3,
  error: 'http://localhost/src/assets/img/loading.gif',
  loading: 'http://cdn.uehtml.com/201402/1392662591495_1140x0.gif',
  attempt: 1
});

        Vue.directive('red', {
            bind: function(el, binding, vnode) {
                el.play();
            }
        })


/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: {
    App
  }
})
