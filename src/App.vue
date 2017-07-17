<template>
  <div id="app">
    
  </div>
</template>

<script>
import Navbar from '@/components/Navbar.vue'
export default {
  name: 'app',
  data() {
    return {
        username: 'stark'
    }
  },
  components:{
      // boomheader:Header,
      name:Navbar
  }
}
</script>

<style>

</style>
