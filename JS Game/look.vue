<template>
	<div id="app-2">
	  <span v-bind:title="message">
	    Hover your mouse over me for a few seconds
	    to see my dynamically bound title!
	  </span>
    </div>
</template>
<style>
	
</style>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
   var app2 = new Vue({
	  el: '#app-2',
	  data: {
	    message: 'You loaded this page on ' + new Date().toLocaleString()
	  }
   })
</script>