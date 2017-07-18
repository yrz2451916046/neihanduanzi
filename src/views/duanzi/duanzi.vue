<template>
  <div >
      这里是段子
       <div v-for="item in data" class="duanzi">
          <span>{{item.group}}</span>
       </div>
  </div>
</template>
<script>
import axios from "axios";
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
      var url = "/php/src/assets/php/post.php?id=-101"
      axios.get(url)
          .then(function (response) {
            console.log(response.data.data.data);
            that.data = response.data.data.data;
          })
          .catch(function (error) {
            console.log(error);
          });
   }
 }
}
</script>
<style>
  .duanzi{width:80%;height:auto;border: 1px solid red; padding: 20px;}
</style>
