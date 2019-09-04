<template>
  <div id="app">
     <product-list-one v-bind:products="products"></product-list-one>
     <product-list-two v-bind:products="products"></product-list-two>
  </div>
</template>

<script>
import productListOne from './Components/productListOne.vue';
import productListTwo from './Components/productListTwo.vue';
export default {
  name: 'app',
  components:{
   productListOne,
   productListTwo
  }
  
}
</script>

<style>
</style>
