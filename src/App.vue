<template>

  <div id="app">

	<el-menu theme="dark" :default-active="activeIndex" class="el-menu-demo" mode="horizontal" >
	  <el-menu-item index="1" class="index1"><router-link to="/duanzi" > <a> 推荐 </a></router-link></el-menu-item> 
	  <el-menu-item index="2" class = "index2"><router-link to="/picture" > <a> 图片 </a></router-link></el-menu-item>
	   <el-menu-item index="3" class = "index2"><router-link to="/duanzi" > <a> 段子 </a></router-link></el-menu-item>
	    <el-menu-item index="4" class = "index2"><router-link to="/video" > <a> 视频 </a></router-link></el-menu-item>
	  <el-submenu index="5" class = 'index3'>
	    <template slot="title">我的工作台</template>
	    <el-menu-item index="5-1">选项1</el-menu-item>
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
	/*body{background: #999}*/
	div{width: 100%}
	.el-menu-demo{z-index: 999;position:fixed;width:100%}
	a{text-decoration: none;}
	.index1{padding-left: 30px; width: 20%;text-align: center;}
	.index2{width: 20%;text-align: center;}
	.index3{width: 20%;text-align: center;}
	.index4{width: 20%;text-align: center;}
	.index5{width: 5%;text-align: center;}
</style>
