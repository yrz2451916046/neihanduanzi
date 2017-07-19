<template>
	<!-- <video id="video "   v-red src="./../assets/video/aa.mp4" loop="true" ></video> -->
	
	<video id="video "   v-red v-bind:src="url" loop="ture"></video>

</template>



<script type="text/javascript">
	import axios from "axios";
	export default  {
    name: 'fullvd',
    data(){
    	return{
    		url:'http://v1.365yg.com/d64f603bf80326358ffd91955d01ce62/596f112f/video/m/2208d1245062c0f437093ef7e939152ae17114a2e1000057a6c0e29618/'
    	}
    },
    created(){
    },
    methods:{
    	getTest(){
    		 var url = "http://localhost/src/assets/php/post.php?id=-101";
    		//var url = "/php/src/assets/php/post.php?id=-101"
    		axios.get(url)
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

<style type="text/css">
	video{min-width:70%;height:80%;position: fixed;left:5%;bottom: 10%;width: auto;}
	.el-menu-demo{opacity: 0.7;background: #666}
</style>
