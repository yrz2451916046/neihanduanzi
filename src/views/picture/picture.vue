<template>
  <div >
       <div v-for="item in data" class="picture">
          <span>{{item.group.content}}</span><br/>
          <span>{{item.group.user.name}}user.name</span><br/>
          <span>{{item.group.category_name}}category_name</span>
          <img v-bind:src="item.group.large_image.url_list[0].url"></img><br/>
          <span>{{item.group.favorite_count}}favorite_count</span>
          <span>{{item.group.bury_count}}bury_count</span>
          <span>{{item.group.comment_count}}comment_coun</span>
          <span>{{item.group.share_count}}share_count</span>

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
      num:{}
    }
  },
  created () {
    this.getText()
  },
  methods: {
    getText () {
      var that = this;
          //目前推荐的是-101，视频的是-104，段友秀的是-301，图片的是-103，段子的是-102
      var url = "http://localhost/src/assets/php/post1.php?id=-103";
      Axios.get(url).then(response => {
          console.log(response.data.data.data);
          this.data =response.data.data.data;
           
      }, response => {
          // error callback
      })
   }
 }
}
</script>
<style>
  .picture{max-width:60%;height:auto; padding: 20px;margin-left: 20%;margin-bottom: 40px;}
  .picture img{margin:0 auto;}
</style>