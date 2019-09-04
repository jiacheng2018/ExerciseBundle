const express=require('express');
const morgan=require('morgan');
const dotenv=require('dotenv');
dotenv.config({path:'./config.env'});
const port=process.env.PORT||8003;
const app=express();
if(process.env.NODE_ENV==='development'){
   app.use(morgan('dev'));
}
app.use('/api/v1/profile',require('./routes/profile'));
app.get('/api/v1/profile/:platform/:gamertag',(req,res)=>{
    console.log(req.params.platform)
	res.send('Hello');
})
//listen to the port
app.listen(port,()=>{
	console.log(`server is running in ${process.env.NODE_ENV} mode on ${port}`);
})