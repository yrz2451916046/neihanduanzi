<template>
  <div >
       
       <section class="finan">
    <!-- 上拉加载更多 -->
    <load-more
    :bottom-method="loadBottom"
    :bottom-all-loaded="allLoaded"
    :bottomPullText='bottomText'
    :auto-fill="false"
    @bottom-status-change="handleBottomChange"
    ref="loadmore">
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
       <a href="http://localhost:8080/picture" style="float: left;">刷新佛挡杀佛房</a>
        <div v-show="loading" slot="bottom" class="loading">
          <img src="./../../assets/img/loading.gif">
        </div>
    </load-more>
  </section>
  </div>
</template>
<script>
import LoadMore from './../../components/common/loadmore.vue';
import Axios from 'axios'
export default {
  name:'duanzi',
  data () {
    return {
      data: {},
       scrollHeight: 0,
      scrollTop: 0,
      containerHeight: 0,
      loading: false,
      allLoaded: false,
      bottomText: '上拉加载更多...',
      bottomStatus: '',
      pageNo: 1,
      totalCount: ''
    }
  },
  created () {
    this.getText()
  },
  methods: {
    getText () {
      var that = this;
          //目前推荐的是-101，视频的是-104，段友秀的是-301，图片的是-103，段子的是-102
      var url = "http://localhost/src/assets/php/post.php?id=-103";
      Axios.get(url).then(response => {
          console.log(response.data.data.data);
          this.data =response.data.data.data; 
      }, response => {
          // error callback
      })
   },
   /* 下拉加载 */
        _scroll: function(ev) {
            ev = ev || event;
            this.scrollHeight = this.$refs.innerScroll.scrollHeight;
            this.scrollTop = this.$refs.innerScroll.scrollTop;
            this.containerHeight = this.$refs.innerScroll.offsetHeight;
        },
        loadBottom: function() {
            this.loading = true;
            this.pageNo += 1;   // 每次更迭加载的页数
            if (this.pageNo == this.totalGetCount) {
                // 当allLoaded = true时上拉加载停止
                this.loading = false;
                this.allLoaded = true;
            }
         var url = "http://bxu2359590376.my3w.com/php/post1.php?id=-103";
         Axios.get(url).then(response => {
          console.log(response.data.data.data);
          
          setTimeout(() => {
            this.data =response.data.data.data; 
            // 要使用的后台返回的数据写在setTimeout里面
                  this.$nextTick(() => {
                    this.loading = false;
                })
            }, 1000)
          }, response => {
              // error callback
          })
        },
        handleBottomChange(status) {
            this.bottomStatus = status;
        }
 }
 ,components: {
        LoadMore
      }
}
</script>
<style>
@media screen and (min-width: 320px) {html{font-size:312.5%;}}
  @media screen and (min-width: 360px) {html{font-size:351.5625%;}}
  @media screen and (min-width: 375px) {html{font-size:366.211%;}}
  @media screen and (min-width: 400px) {html{font-size:390.625%;}}
  @media screen and (min-width: 414px) {html{font-size:404.2969%;}}
  @media screen and (min-width: 440px) {html{font-size:429.6875%;}}
  @media screen and (min-width: 480px) {html{font-size:468.75%;}}
  @media screen and (min-width: 520px) {html{font-size:507.8125%;}}
  @media screen and (min-width: 560px) {html{font-size:546.875%;}}
  @media screen and (min-width: 600px) {html{font-size:585.9375%;}}
  @media screen and (min-width: 640px) {html{font-size:625%;}}
  @media screen and (min-width: 680px) {html{font-size:664.0625%;}}
  @media screen and (min-width: 720px) {html{font-size:703.125%;}}
  @media screen and (min-width: 760px) {html{font-size:742.1875%;}}
  @media screen and (min-width: 800px) {html{font-size:781.25%;}}
  @media screen and (min-width: 960px) {html{font-size:937.5%;}}
  .picture{width:100%;max-width: 1000px; padding: 20px;;margin-bottom: 40px;margin: 0 auto;box-sizing: border-box;}
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
    border-radius: 0.2rem;
    width: 0.2rem;
    height: 0.2rem;
    float: left;
  }
  .user_name{
    float: left;
    line-height: 0.2rem;
    text-align: center;
    font-size: 14px;
    color: black;
    margin-left: 7px;
  }
  .main_img{
    float: left;
    width: 100%;
    max-width: 1000px;
  }
  .foot{
    width: 100%;
    float: left;
    margin-top: 0.1rem;
  }
  .share{
    margin-right: 0.1rem;
  }
</style>