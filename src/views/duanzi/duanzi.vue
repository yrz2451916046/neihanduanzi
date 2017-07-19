<template>
  <div >
       <div v-for="item in num" class="duanzi">
          <span class="head">
            <img class="img" v-bind:src="item.user.avatar_url">
            <a href="#" class="user_name">{{item.user.name}}</a>
          </span></br>
          <a class="text">{{item.text}}</a>
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
  .duanzi{
    width:80%;
    height:auto;
    border: 1px solid #ccc; 
    padding: 20px;
    margin: 5px auto;
    background: #ccc;
  }
  .head{
    width: 100%;
    float: left;
  }
  .img{
    border-radius: 40px;
    width: 40px;
    height: 40px;
    float: left;
  }
  .user_name{
    display: block;
    float: left;
    line-height: 40px;
    text-align: center;
    font-size: 14px;
    color: black;
    margin-left: 7px;
  }
  .text{
    display: block;
    font-size: 16px;
    line-height: 20px;
  }
</style>
