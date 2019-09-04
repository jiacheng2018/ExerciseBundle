import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex);
export const store=new Vuex.Store({
	state:{
		products:[
         {name:'Banana Skin',price:20},
         {name:'Cube Smoke',price:10},
         {name:'Cucumber Bruise',price:10},
      ]
	},
	getters:{
    saleProduct:state=>{
        var sale=state.products.map((product)=>{
          return{
            name:"**"+product.name,
            price:product.price
          }
       });
       return sale;
    }
  }
})