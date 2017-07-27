<template>

  <div id="app">
  	
	<el-menu theme="dark" :default-active="activeIndex" class="el-menu-demo" mode="horizontal" >
	  <el-menu-item index="1" class="index1"><router-link to="/duanzi" > <span>推荐</span> </router-link></el-menu-item> 
	  <el-menu-item index="2" class = "index2"><router-link to="/picture" ><span>图片</span> </router-link></el-menu-item>
	   <el-menu-item index="3" class = "index2"><router-link to="/duanzi" ><span>段子</span>  </router-link></el-menu-item>
	    <el-menu-item index="4" class = "index2"><router-link to="/video" > <span>视频</span></router-link></el-menu-item>
	  <!-- <el-submenu index="5" class = 'index3'>
	    <template slot="title">我的工作台</template>
	    <el-menu-item index="5-1">选项1</el-menu-item>
	  </el-submenu> -->
	</el-menu>

    <router-view></router-view>
  </div>
</template>
<script>
import fullvd from "./components/fullvd"
export default {
  name: 'app',
   data() {
      return {
        activeIndex: '1',
        activeIndex2: '1'
      };
    },
    created(){
    	
    },
    methods: {
      handleSelect(key, keyPath) {
        console.log(key, keyPath);
      }
    },
    components:{
    	fullvd:fullvd
    }
}
 
</script>
	
<style>
	span{font-size: 24px}
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
	body{background: #999;margin: 0;padding: 0}
	div{width: 100%}
	.el-menu-demo{z-index: 999;position:fixed;width:100%;top: 0;}
	a{text-decoration: none;}
	.index1{padding-left: 30px; width: 23%;text-align: center;}
	.index2{width: 23%;text-align: center;}
	.index3{width: 23%;text-align: center;}
	.index4{width: 23%;text-align: center;}
	.index5{width: 5%;text-align: center;}
	fullvd{width:50px;}
	.el-menu-demo{opacity: 0.7;background: #666}
</style>
