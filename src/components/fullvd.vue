<template>
	<!-- <video id="video "   v-red src="./../assets/video/aa.mp4" loop="true" ></video> -->

	<video id="video "   v-red v-bind:src="url" loop="ture" controls="true"></video>

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
    		 var url = "http://localhost/src/assets/php/post.php?id=-104";
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
    @media screen and (min-width: 320px) {html{font-size:312.5%;}video{width: 100%;display: block;}}
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
    @media screen and (min-width: 960px) {html{font-size:937.5%;} }
    @media screen and (min-width: 1000px) {html{font-size:937.5%;}
	video{display:block;margin: 0 auto;height: 100%;width: auto;max-height: 100%;}
	}
</style>
