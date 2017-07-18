<template>
	<video id="video "   v-red src="./../assets/video/aa.mp4" loop="true" ></video>
	
	<!-- <video id="video "   v-red v-bind:src="url" ></video> -->

</template>



<script type="text/javascript">
	import axios from "axios";
	export default  {
    name: 'fullvd',
    data(){
    	return{
    		url:'/api/neihan/video/playback/1500282089.68/?video_id=11e71e7ccfb346dfa59412be5b73f9b5&quality=origin&line=0&is_gif=0&device_platform=android'
    	}
    },
    created(){
    },
    methods:{
    	getTest(){
    		// var url = "http://localhost/src/assets/php/post.php?id=-101";
    		var url = "/php/src/assets/php/post.php?id=-101"
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
