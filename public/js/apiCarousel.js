function init()
{
	var urlC = 'http://localhost/proyectoV1.0/public/Carousel';
	new Vue
		({
			http:{
			headers:
			  {
				'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
			  }
		   },
		   el:'#apiCarousel',
		   created:function()
		   {
		   		this.getCarousel();
		   },

		   data:
		   {
		   	 imagenes:[]
		   },

		   methods:
		   {
		   	 getCarousel()
		   	 {
		   	 	this.$http.get(urlC).then
		   	 	(function(response)
		   	 	{
		   	 	  this.imagenes=response.data;
		   	 	}
		   	 	);
		   	 },
		   	 showModal:function()
		   	 {
		   	 	 $('#add_img').modal('show');
		   	 }
		   }
		});

}
window.onload=init;