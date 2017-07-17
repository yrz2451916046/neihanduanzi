<template>
  <div >
      这里是段子
       <div v-for="item in data" class="duanzi">
          <span>{{item.group.video_id}}</span>
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
      axios.get('http://localhost/src/assets/php/post.php?id=-101')
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
