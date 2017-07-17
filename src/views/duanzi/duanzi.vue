<template>
  <div>
      这里是段子
       <!-- <div v-for="item in data">{{item.group.text}}</div>  -->
  </div>
</template>
<script>
// import jsonp from 'jsonp'
import Vue from 'vue'
// import VueAwesomeSwiper from 'vue-awesome-swiper'
// Vue.use(VueAwesomeSwiper)
// import Swipe from '@/components/Swipe'
export default {
  name:'duanzi',
  data () {
    return {
      data: {}
    }
  },
  created () {
    this.getText()
    // this.getJsonp()
  },
  components:{
    // swipe:Swipe
  },
  methods: {
    getText () {
    this.$http.get('http://iu.snssdk.com/neihan/stream/mix/v1/',{
        params:{
            
        }
    })
        .then((res) => {
        this.data = res
        console.log("1hdyhdhy")
        })
        .catch((error) => {
        console.log(error)
        })
    },
    // getJsonp () {
    // jsonp('https://sp0.baidu.com/5a1Fazu8AA54nxGko9WTAnF6hhy/su', null, function (err, data) {
    //     if (err) {
    //     console.error(err.message);
    //     } else {
    //     console.log(data);
    //     }
    // });

    // }
}
}
</script>
