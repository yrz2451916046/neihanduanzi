<template>

  <div id="app">

	
	<video id="video " v-on:play="getplayer"  v-red src="http://v3.365yg.com/df8d1b31882ea2c8f548983762681bd3/596c4572/video/m/220a67d34029bc443bf912ec970e482bd4911475f800001905508e11aa/" >


	</video>
	<p id="pp"></p>
	<el-menu theme="dark" :default-active="activeIndex" class="el-menu-demo" mode="horizontal" @select="handleSelect">
	  <el-menu-item index="1"><router-link to="/duanzi" exact tag="li"> <a> 段子 </a></router-link></el-menu-item>
	  <el-submenu index="2">
	    <template slot="title">我的工作台</template>
	    <el-menu-item index="2-1">选项1</el-menu-item>
	    <el-menu-item index="2-2">选项2</el-menu-item>
	    <el-menu-item index="2-3">选项3</el-menu-item>
	  </el-submenu>
	  <el-menu-item index="3"><a href="#" target="_blank">段子</a></el-menu-item>
	</el-menu>

  <router-view></router-view>
  </div>
</template>
<script>
import Vue from 'vue'
import axios from 'axios'
export default {
  name: 'app',
   data() {
      return {
        activeIndex: '1',
        activeIndex2: '1'
      };
    },
    created(){
    	// this.getplayer()
    },
    methods: {
      handleSelect(key, keyPath) {
        console.log(key, keyPath);
      },
      getplayer(){
      	 axios.get('http://localhost/src/assets/php/post.php')
        .then(function (response) {
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
      }
    }
}
 
</script>
	
<style>
	video{min-width:70%;height:80%;position: fixed;left:5%;bottom: 10%;width: auto;}
	.el-menu-demo{opacity: 0.7;background: #666}
</style>
