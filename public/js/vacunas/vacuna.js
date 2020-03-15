var route = document.querySelector("[name=route]").value;
// var personal='http://localhost/git/public/';
var urlVacunas=route + '/apiVacuna';
new Vue({

	el:'#vacuna',
	// token
	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	data:{
		vacunas:[],
		id_vacuna:'',
		mascota:'',
		propietario:'',
		apellidos_propietario:'',
		fecha_programada:'',
		// buscar:'',
		
	},

	created:function(){
		this.getVacuna();
		// this.getBuscar();
	},


	methods:{
		getVacuna:function(){
			this.$http.get(urlVacunas)
			.then(function(json){
				this.vacunas=json.data
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

		guardarVacuna:function(id){
			this.$http.get(urlVacunas + '/' + id)
			.then(function(json){
				this.id_vacuna=json.data.id_vacuna;
				this.mascota=json.data.mascota;
				this.propietario=json.data.propietario;
				this.apellidos_propietario=json.data.apellidos_propietario;
				this.fecha_programada=json.data.fecha_programada;
			});
		},

		eliminarVacuna:function(id){
			var resp=confirm("¿Estas Seguro Que Deseas Eliminar?")
			if(resp==true)
			{
				this.$http.delete(urlVacunas + '/' + id)
				.then(function(json){
				this.getVacuna();
				});
			}
			
		},

		// cancelarPersonal:function(){

		// 	var resp=confirm("¿Estas Seguro Que Deseas Cancelar?")
		// 	if(resp==true)
		// 	{

		// 		this.curp='';
		// 		this.nombre='';
		// 		this.apellidop='';
		// 		this.apellidom='';				
		// 	}

		// },
		agregarVacuna:function(){
			var vacuna={
				id_vacuna:this.id_vacuna,
				mascota:this.mascota,
				propietario:this.propietario,
				apellidos_propietario:this.apellidos_propietario,
				fecha_programada:this.fecha_programada,
			};

				this.id_vacuna='';
				this.mascota='';
				this.propietario='';
				this.apellidos_propietario='';
				this.fecha_programada='';

			this.$http.post(urlVacunas,vacuna)
			.then(function(response){
				this.getVacuna();
			});

		},

		actualizarVacuna:function(id){
			// crear un json 
			var vacuna={
				id_vacuna:this.id_vacuna,
				mascota:this.mascota,
				propietario:this.propietario,
				apellidos_propietario:this.apellidos_propietario,
				fecha_programada:this.fecha_programada,
					  }
		    console.log();

			this.$http.patch(urlVacunas + '/' + id,vacuna)
			.then(function(json){
				this.getVacuna();
				this.limpiar();
			})
		},

		limpiar:function(){
				this.id_vacuna='';
				this.mascota='';
				this.propietario='';
				this.apellidos_propietario='';
				this.fecha_programada='';
			
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

