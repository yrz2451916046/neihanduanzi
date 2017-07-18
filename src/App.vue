<template>

  <div id="app">

	<el-menu theme="dark" :default-active="activeIndex" class="el-menu-demo" mode="horizontal" >
	  <el-menu-item index="1" class="index1"><router-link to="/duanzi" > <a> 段子 </a></router-link></el-menu-item>
	  
	  <el-menu-item index="2" class = "index2"><a href="#" target="_blank">视频</a></el-menu-item>
	  <el-submenu index="3" class = 'index3'>
	    <template slot="title">我的工作台</template>
	    <el-menu-item index="2-1">选项1</el-menu-item>
	    <el-menu-item index="2-2">选项2</el-menu-item>
	    <el-menu-item index="2-3">选项3</el-menu-item>
	  </el-submenu>
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
    created(){
    	
    },
    methods: {
      handleSelect(key, keyPath) {
        console.log(key, keyPath);
      }
    }
}
 
</script>
	
<style>
	body{background: #999}
	div{width: 100%}
	.el-menu-demo{z-index: 999}
	a{text-decoration: none;}
	.index1{padding-left: 30px; width: 30%;text-align: center;}
	.index2{width: 30%;text-align: center;}
	.index3{width: 30%;text-align: center;}
</style>
