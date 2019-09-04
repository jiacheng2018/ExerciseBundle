<template>
  <div id="list2">
     <h2>Product List Two</h2>
     <ul>
         <li v-for="product in saleProducts">
               <span class="name">{{product.name}}</span>
               <span class="price">${{product.price}}</span>
         </li>
     </ul>
  </div>
</template>

<script>
export default {
  name: 'app',
  computed:{
     getProperty(){
      return this.$store.state.products
     },
     saleProducts(){
      return this.$store.getters.saleProduct
     }
  }
}
</script>

<style scoped>
*{
  font-size: 1vw;
  list-style: none;
}
#list2{
  margin: auto;
  width: 80%;
  height: 25vh;
  background: red;
  text-align: center;
}
h2{
  
}
ul{
  padding: 1rem;
}
li{
  padding: 0.3rem;
  letter-spacing: 1px;
};
</style>
