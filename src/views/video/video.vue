<template>
  <div >
      <!-- <video src="http://v3.365yg.com/58b61d189e7b53da841c902225f15d98/596f6074/video/m/2207cc370d954024eff8ea2e6e184b6459f11473d2000018c9e2d16145/"></video> -->
       <div v-for="item in data" class="duanzi">
          <!-- <span>{{item.group.mp4_url}}</span> -->
        <!-- <iframe v-bind:src="item.group.mp4_url"></iframe> -->
        <video src="http://v1.365yg.com/e1ef567045c07b937b5415445dac20c3/596f5d7d/video/m/2201bf4b2cd72654ce887d0620c24e724e7114691600001eb26d3afea4/"></video>
       </div>
  </div>
</template>
<script>
import Axios from 'axios'
export default {
  name:'duanzi',
  data () {
    return {
      data: {}
    }
  },
  created () {
    this.getText()
  },
  methods: {
    getText () {
      var that = this;
      var page = 1;
      //var url = "http://localhost/src/assets/php/bsbdj.php?page="+page;
      var url = "http://localhost/src/assets/php/post1.php?id=-104";
      // var url = "http://bxu2359590376.my3w.com/php/bsbdj.php?page=1";
     // var url ="http://ic.snssdk.com/neihan/video/playback/?video_id=7352a3ad45d244ac960c2fc8e18ceb10&quality=480p&line=0&is_gif=0&device_platform=.mp4";
      Axios.get(url).then(response => {
          console.log(response);
          // this.data = response.data.data.data;
          // this.data =response.data.showapi_res_body.pagebean.contentlist;
          // console.log(this.data[0].group.mp4_url);

      }, response => {
          // error callback
      })
   }
 }
}
</script>
<style>
  .duanzi{width:80%;height:auto;border: 1px solid red; padding: 20px;}
</style>
