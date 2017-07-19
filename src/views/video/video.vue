<template>
  <div >
       <div v-for="item in data" class="duanzi">
          <span>{{item.video_uri}}</span>
       </div>
  </div>
</template>
<script>
import Axios from 'axios'
export default {
  name:'duanzi',
  data () {
    return {
      data: {},
      num:[]
    }
  },
  created () {
    this.getText()
  },
  methods: {
    getText () {
      var that = this;
      var page = 1;
      var url = "http://localhost/src/assets/php/bsbdj.php?page="+page;
      // var url = "http://bxu2359590376.my3w.com/php/bsbdj.php?page=1";
     
      Axios.get(url).then(response => {
          console.log(response);
          this.data =response.data.showapi_res_body.pagebean.contentlist;
          console.log(this.data);
          //  for (var i = 0; i < that.data.length; i++) {
          //     this.num.push(that.data[i].group);
          //   }
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
