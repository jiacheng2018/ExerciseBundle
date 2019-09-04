<template>
  <div id="list1">
     <h2>Product List One</h2>
     <ul>
         <li v-for="product in products">
               <span class="name">{{product.name}}</span>
               <span class="price">${{product.price}}</span>
         </li>
     </ul>
  </div>
</template>

<script>
export default {
  computed:{
    products(){
       return this.$store.state.products
    }
  }
}
</script>

<style>
</style>
