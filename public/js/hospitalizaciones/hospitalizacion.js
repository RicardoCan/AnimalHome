var route = document.querySelector("[name=route]").value;
var urlHospitalizaciones=route + '/apiHospitalizacion';
new Vue({

	el:'#hospital',
	// token
	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	data:{
		hospitalizaciones:[],
		id_posicion:'',
		nombre_dueño:'',
		nombre_mascota:'',
		causa:'',
		hora_entrada:'',
		hora_salida:'',
		estatus:'',
		buscar:'',
		
	},

	created:function(){
		this.getHospitalizacion();
	},


	methods:{
		getHospitalizacion:function(){
			this.$http.get(urlHospitalizaciones)
			.then(function(json){
				this.hospitalizaciones=json.data
			});
		},

		guardarHospitalizacion:function(id){
			this.$http.get(urlHospitalizaciones + '/' + id)
			.then(function(json){
				this.id_posicion=json.data.id_posicion;
				this.nombre_dueño=json.data.nombre_dueño;
				this.nombre_mascota=json.data.nombre_mascota;
				this.causa=json.data.causa;
				this.hora_entrada=json.data.hora_entrada;
				this.hora_salida=json.data.hora_salida;
				this.estatus=json.data.estatus;
			});
		},

		eliminarHospitalizacion:function(id){
			var resp=confirm("¿Estas Seguro Que Deseas Eliminar?")
			if(resp==true)
			{
				this.$http.delete(urlHospitalizaciones + '/' + id)
				.then(function(json){
				this.getHospitalizacion();
				});
			}
			
		},

		agregarHospitalizacion:function(){
			var hospitalizacion={
				id_posicion:this.id_posicion,
				nombre_dueño:this.nombre_dueño,
				nombre_mascota:this.nombre_mascota,
				causa:this.causa,
				hora_entrada:this.hora_entrada,
				hora_salida:this.hora_salida,
				estatus:this.estatus,
			};

				this.id_posicion='';
				this.nombre_dueño='';
				this.nombre_mascota='';
				this.causa='';
				this.hora_entrada='';
				this.hora_salida='';
				this.estatus='';

			this.$http.post(urlHospitalizaciones,hospitalizacion)
			.then(function(response){
				this.getHospitalizacion();
			});

		},

		actualizarHospitalizacion:function(id){
			// crear un json 
			var hospitalizacion={
				id_posicion:this.id_posicion,
				nombre_dueño:this.nombre_dueño,
				nombre_mascota:this.nombre_mascota,
				causa:this.causa,
				hora_entrada:this.hora_entrada,
				hora_salida:this.hora_salida,
				estatus:this.estatus,
					  }
		    console.log();

			this.$http.patch(urlHospitalizaciones + '/' + id,hospitalizacion)
			.then(function(json){
				this.getHospitalizacion();
				this.limpiar();
			})
		},

		limpiar:function(){
				this.id_posicion='';
				this.nombre_dueño='';
				this.nombre_mascota='';
				this.causa='';
				this.hora_entrada='';
				this.hora_salida='';
				this.estatus='';
			
		}

	},

	computed:{
		filtroHospital:function(){
			return this.hospitalizaciones.filter((hos)=>{
				return hos.nombre_dueño.match(this.buscar.trim())||
					hos.nombre_dueño.toLowerCase()
					.match(this.buscar.trim().toLowerCase());
			});
		},
	},
});

