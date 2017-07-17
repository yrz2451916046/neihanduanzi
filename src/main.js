import Vue from 'vue'
import App from './App'
import router from './router'
import ElementUI from 'element-ui'
import locale from 'element-ui/lib/locale/lang/en'

Vue.use(ElementUI, { locale })


import '@/assets/app'
Vue.config.productionTip = false

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
  components: { App }
})
