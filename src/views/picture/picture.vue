<template>
  <div>
       <div v-for="item in data" class="picture">
          <span class="head">
            <img class="img" v-lazy="item.group.user.avatar_url" />
            <span class="user_name">{{item.group.user.name}}</span><br/>
          </span>
          <img class="main_img" v-lazy="item.group.large_image.url_list[0].url" /><br/>
          <span class="foot">
            <i class="el-icon-star-on"><span>{{item.group.favorite_count}}</span></i>
            <i class="el-icon-star-off"><span>{{item.group.bury_count}}</span></i>
            <!-- <span>{{item.group.comment_count}}comment_coun</span> -->
            <el-button class="share" type="primary" icon="share"><span>{{item.group.share_count}}</span></el-button>
          </span>
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
  .picture{max-width:60%;max-height:auto; padding: 20px;margin-left: 20%;margin-bottom: 40px;}
  .picture img{margin:0 auto;  }
   img{
     /*transition:all 0.5s;*/
  }  
   img[lazy=loading]{

  }
   img[lazy=loaded]{
    animation:fade 0.5s;
  }
  @keyframes fade {
    0%{
      opacity: 0;
    }
    100%{
      opacity: 1;
    }
  }
  .head{
    width: 100%;
    float: left;
    margin-bottom: 10px;
  }
  .img{
    border-radius: 40px;
    width: 40px;
    height: 40px;
    float: left;
  }
  .user_name{
    float: left;
    line-height: 40px;
    text-align: center;
    font-size: 14px;
    color: black;
    margin-left: 7px;
  }
  .main_img{
    float: left;
    width: 500px;
  }
  .foot{
    width: 100%;
    float: left;
    margin-top: 20px;
  }
  .share{
    margin-left: 350px;
  }
</style>