var urlUser='https://randomuser.me/api/?results=20';
new vue({
	el: "#main", 
	created:function()
	{
		this.getUsers();
	}

	data:{
		list:[]
	},
	methods: {
		getUsers: function(){
			this.$http.get(urlUser).then(function(response){
				this.list = response;
			});
		}
	}

});
