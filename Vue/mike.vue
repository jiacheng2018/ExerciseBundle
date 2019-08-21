<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<div id="app">
		<input type="button" value="Gogo" @click="lang">
		<input type="button" value="NotGogo" @click="nolang">
		<h4>{{msg}}</h4>
	</div>
	<script>
		const vm=new Vue({
			el:"#app",
			data:{
              msg:"not not not"
			},
			methods:{
              lang(){
               var start=this.msg.substring(0,1);
               var end=this.msg.substring(1);
               this.msg=end+start;
              },
              nolang(){

              }
			}
		})
	</script>
</body>
</html>