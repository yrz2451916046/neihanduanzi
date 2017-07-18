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
      var url = "http://localhost/src/assets/php/post1.php?id=-102";
      Axios.get(url).then(response => {
          console.log(response.data.data.data);
          this.data =response.data.data.data;
           for (var i = 0; i < that.data.length; i++) {
              this.num.push(that.data[i].group);
            }
      }, response => {
          // error callback

      })
      // this.$http.get(url)
      //     .then((res) => {
      //       console.log(res);
      //       this.data = res.data.data.data
      //     })
      //     .catch((error) => {
      //       console.log(error)
      //     })
   }
 }
}
</script>
<style>
  .duanzi{width:80%;height:auto;border: 1px solid red; padding: 20px;}
</style>
