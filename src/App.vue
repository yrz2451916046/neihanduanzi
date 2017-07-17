<template>

  <div id="app">
	<video autoplay="true">
		<!-- <source src="./assets/video/aa.mp4" type=""> -->
		<source src="http://mvideo.spriteapp.cn/video/2017/0716/75ebf2f6-6a02-11e7-97cf-1866daeb0df1_wpc.mp4" type="">
	</video>
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
export default {
  name: 'app',
   data() {
      return {
        activeIndex: '1',
        activeIndex2: '1'
      };
    },
    methods: {
      handleSelect(key, keyPath) {
        console.log(key, keyPath);
      }
    }
}
 
</script>
	
<style>
	video{min-width:70%;height:80%;position: fixed;right:15%;bottom: 10%;width: auto;}
	.el-menu-demo{opacity: 0.7;background: #666}
</style>
