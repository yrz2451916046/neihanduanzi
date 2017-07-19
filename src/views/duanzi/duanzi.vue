<template>

<div >
  <div class="blank">
    
  </div>
   <div v-for="item in num" class="duanzi">
      <div class="head">
        <img class="img" v-bind:src="item.user.avatar_url">
        <a href="#" class="user_name">{{item.user.name}}</a>
      </div>
      <div class="text">{{item.text}}</div>
   </div>
   <a href="http://localhost:8080/duanzi"><sapn class="flush">刷新</sapn></a>
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
      var url = "http://bxu2359590376.my3w.com/php/post1.php?id=-102";
      Axios.get(url).then(response => {
          // console.log(response.data.data.data);
          this.data =response.data.data.data;
           for (var i = 0; i < that.data.length; i++) {
              this.num.push(that.data[i].group);
            }
            console.log(this.num)
      }, response => {
          // error callback
      })
   }
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
  .duanzi{
    width:100%;
    max-width:1000px;
    margin: 0 auto;
    height:auto;
    border: 1px solid #ccc; 
    padding: 0.1rem;
    box-sizing: border-box;
    margin-top:0.2rem;
    background: #ccc;
  }
  .blank{
    height: 60px;
  }
  .head{
    width: 100%;
    float: left;
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
    font-size: 0.1rem;
    color: black;
    margin-left: 0.05rem;
  }
  .text{
    font-size: 0.12rem;
    line-height: 0.14rem;
    text-indent: 0.24rem;
    letter-spacing: 0.01rem;
  }
  .flush{font-size: 0.3rem;display: block;margin: 0 auto;margin-left: 50%}
</style>
