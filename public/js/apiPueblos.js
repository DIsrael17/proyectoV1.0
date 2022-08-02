 function iniciar(){
 	let URLpueblo='http://localhost/proyectoV1.0/public/municipio';
 	new Vue({


 		el:'#main',
 		created:function(){this.getPueblo();},
 		// -----------------------------------------------------------------------------------------------------------
 		data:{
 			variable:'Hola que hace',  
 			buscar:'',
 			towns:[],

 		},
 		// -----------------------------------------------------------------------------------------------------------
 		methods:{
 			getPueblo:function(){
 				this.$http.get(URLpueblo).then(function(response){
 					this.towns = response.data;

 				});
 			}, 

 		},
 		// -----------------------------------------------------------------------------------------------------------
 		computed:{
 			filtro:function()
 			{
 				return this.towns.filter(town=>{
 					return town.nombre_municipio.toLowerCase().match(this.buscar.toLowerCase().trim())
 				});
 			}
 		}



 	});

 }
 window.onload=iniciar;