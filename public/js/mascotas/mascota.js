var route = document.querySelector("[name=route]").value;
var urlMascotas=route + '/apiMascota';
new Vue({

	el:'#mascota',
	// token
	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	data:{
		mascotas:[],
		id_mascota:'',
		especie:'',
		sexo:'',
		edad:'',
		mascota:'',
		fecha_nacimiento:'',
		propietario:'',
		// buscar:'',
		
	},

	created:function(){
		this.getMascota();
		// this.getBuscar();
	},


	methods:{
		getMascota:function(){
			this.$http.get(urlMascotas)
			.then(function(json){
				this.mascotas=json.data
			});
		},

		guardarMascota:function(id){
			this.$http.get(urlMascotas + '/' + id)
			.then(function(json){
				this.id_mascota=json.data.id_mascota;
				this.especie=json.data.especie;
				this.sexo=json.data.sexo;
				this.edad=json.data.edad;
				this.mascota=json.data.mascota;
				this.fecha_nacimiento=json.data.fecha_nacimiento;
				this.propietario=json.data.propietario;
			});
		},

		eliminarMascota:function(id){
			var resp=confirm("¿Estas Seguro Que Deseas Eliminar?")
			if(resp==true)
			{
				this.$http.delete(urlMascotas + '/' + id)
				.then(function(json){
				this.getMascota();
				});
			}
			
		},
		
		agregarMascota:function(){
			var mascota={
				id_mascota:this.id_mascota,
				especie:this.especie,
				sexo:this.sexo,
				edad:this.edad,
				mascota:this.mascota,
				fecha_nacimiento:this.fecha_nacimiento,
				propietario:this.propietario,

			};

				this.id_mascota='';
				this.especie='';
				this.sexo='';
				this.edad='';
				this.mascota='';
				this.fecha_nacimiento='';
				this.propietario='';

			this.$http.post(urlMascotas,mascota)
			.then(function(response){
				this.getMascota();
			});

		},

		actualizarMascota:function(id){
			// crear un json 
			var mascota={
				id_mascota:this.id_mascota,
				especie:this.especie,
				sexo:this.sexo,
				edad:this.edad,
				mascota:this.mascota,
				fecha_nacimiento:this.fecha_nacimiento,
				propietario:this.propietario,
					  }
		    console.log();

			this.$http.patch(urlMascotas + '/' + id,mascota)
			.then(function(json){
				this.getMascota();
				this.limpiar();
			})
		},

		limpiar:function(){
				this.id_mascota='';
				this.especie='';
				this.sexo='';
				this.edad='';
				this.mascota='';
				this.fecha_nacimiento='';
				this.propietario='';
			
		}

	},

	// computed:{
	// 	filtroMascota:function(){
	// 		return this.mascotas.filter((mascota)=>{
	// 			return mascotas.propietario.match(this.buscar.trim())||
	// 				mascotas.propietario.toLowerCase()
	// 				.match(this.buscar.trim().toLowerCase());
	// 		});
	// 	},
	// },
});

