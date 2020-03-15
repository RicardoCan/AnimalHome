var route = document.querySelector("[name=route]").value;
var urlConfiguraciones=route + '/apiConfiguracion';
new Vue({

	el:'#configuracion',
	// token
	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	data:{
		configuraciones:[],
		id_nombre:'',
		mision:'',
		vision:'',
		calle:'',
		telefono:'',
		// buscar:'',
		
	},

	created:function(){
		this.getConfiguracion();
		// this.getBuscar();
	},


	methods:{
		getConfiguracion:function(){
			this.$http.get(urlConfiguraciones)
			.then(function(json){
				this.configuraciones=json.data
			});
		},

		// getBuscar:function(){
		// 	this.$http.get(urlMascotas)
		// 	.then(function(json){
		// 		this.mascotas=json.data;
		// 	}).catch(function(json){
		// 		console.log(json);
		// 	})
		// },

		guardarConfiguracion:function(id){
			this.$http.get(urlConfiguraciones + '/' + id)
			.then(function(json){
				this.id_nombre=json.data.id_nombre;
				this.mision=json.data.mision;
				this.vision=json.data.vision;
				this.calle=json.data.calle;
				this.telefono=json.data.telefono;
			});
		},

		eliminarConfiguracion:function(id){
			var resp=confirm("¿Estas Seguro Que Deseas Eliminar?")
			if(resp==true)
			{
				this.$http.delete(urlConfiguraciones + '/' + id)
				.then(function(json){
				this.getConfiguracion();
				});
			}
			
		},

		agregarConfiguracion:function(){
			var configuracion={
				id_nombre:this.id_nombre,
				mision:this.mision,
				vision:this.vision,
				calle:this.calle,
				telefono:this.telefono,
			};

				this.id_nombre='';
				this.mision='';
				this.vision='';
				this.calle='';
				this.telefono='';

			this.$http.post(urlConfiguraciones,configuracion)
			.then(function(response){
				this.getConfiguracion();
			});

		},

		actualizarConfiguracion:function(id){
			// crear un json 
			var configuracion={
				id_nombre:this.id_nombre,
				mision:this.mision,
				vision:this.vision,
				calle:this.calle,
				telefono:this.telefono,
					  }
		    console.log();

			this.$http.patch(urlConfiguraciones + '/' + id,configuracion)
			.then(function(json){
				this.getConfiguracion();
				this.limpiar();
			})
		},

		limpiar:function(){
				this.id_nombre='';
				this.mision='';
				this.vision='';
				this.calle='';
				this.telefono='';
			
		}

	},

	// computed:{
	// 	filtroMascota:function(){
	// 		return this.mascotas.filter((mascotas)=>{
	// 			return mascotas.dueño.match(this.buscar.trim())||
	// 				mascotas.dueño.toLowerCase()
	// 				.match(this.buscar.trim().toLowerCase());
	// 		});
	// 	},
	// },
});

