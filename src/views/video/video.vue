<template>
  <div >
       <div v-for="item in num" class="duanzi">
          <span>{{item.text}}</span>
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
      var url = "http://localhost/src/assets/php/bsbdj.php";
      Axios.get(url).then(response => {
          console.log(response);
          // this.data =response.data.data.data;
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
