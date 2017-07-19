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
          <span>{{item.group.content}}</span><br/>
          <span>{{item.group.user.name}}user.name</span><br/>
          <span>{{item.group.category_name}}category_name</span>
          <img v-lazy="item.group.large_image.url_list[0].url" v-bind:width="item.group.large_image.width" v-bind:height="item.group.large_image.height"></img><br/>
          <span>{{item.group.favorite_count}}favorite_count</span>
          <span>{{item.group.bury_count}}bury_count</span>
          <span>{{item.group.comment_count}}comment_coun</span>
          <span>{{item.group.share_count}}share_count</span>
       </div>
       <a href="http://localhost:8080/picture">刷新佛挡杀佛房</a>
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
      var url = "http://localhost/src/assets/php/post1.php?id=-103";
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
         var url = "http://localhost/src/assets/php/post1.php?id=-103";
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
  .picture{max-width:60%;height:auto; padding: 20px;margin-left: 20%;margin-bottom: 40px;}
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
</style>