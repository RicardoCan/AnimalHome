var route = document.querySelector("[name=route]").value;
var urlEsteticas=route + '/apiEstetica';
new Vue({

	el:'#estetica',
	// token
	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	data:{
		esteticas:[],
		id_estetica:'',
		nombre_animal:'',
		nombre_dueño:'',
		tipo:'',
		fecha_programada:'',
		hora_entrada:'',
		hora_salida:'',
		buscar:'',
		
	},

	created:function(){
		this.getEstetica();
	},


	methods:{
		getEstetica:function(){
			this.$http.get(urlEsteticas)
			.then(function(json){
				this.esteticas=json.data
			});
		},

		guardarEstetica:function(id){
			this.$http.get(urlEsteticas + '/' + id)
			.then(function(json){
				this.id_estetica=json.data.id_estetica;
				this.nombre_animal=json.data.nombre_animal;
				this.nombre_dueño=json.data.nombre_dueño;
				this.tipo=json.data.tipo;
				this.fecha_programada=json.data.fecha_programada;
				this.hora_entrada=json.data.hora_entrada;
				this.hora_salida=json.data.hora_salida;
			});
		},

		eliminarEstetica:function(id){
			var resp=confirm("¿Estas Seguro Que Deseas Eliminar?")
			if(resp==true)
			{
				this.$http.delete(urlEsteticas + '/' + id)
				.then(function(json){
				this.getEstetica();
				});
			}
			
		},

		agregarEstetica:function(){
			var estetica={
				id_estetica:this.id_estetica,
				nombre_animal:this.nombre_animal,
				nombre_dueño:this.nombre_dueño,
				tipo:this.tipo,
				fecha_programada:this.fecha_programada,
				hora_entrada:this.hora_entrada,
				hora_salida:this.hora_salida,
			};

				this.id_estetica='';
				this.nombre_animal='';
				this.nombre_dueño='';
				this.tipo='';
				this.fecha_programada='';
				this.hora_entrada='';
				this.hora_salida='';

			this.$http.post(urlEsteticas,estetica)
			.then(function(response){
				this.getEstetica();
			});

		},

		actualizarEstetica:function(id){
			// crear un json 
			var estetica={
				id_estetica:this.id_estetica,
				nombre_animal:this.nombre_animal,
				nombre_dueño:this.nombre_dueño,
				tipo:this.tipo,
				fecha_programada:this.fecha_programada,
				hora_entrada:this.hora_entrada,
				hora_salida:this.hora_salida,
					  }
		    console.log();

			this.$http.patch(urlEsteticas + '/' + id,estetica)
			.then(function(json){
				this.getEstetica();
				this.limpiar();
			})
		},

		limpiar:function(){
				this.id_estetica='';
				this.nombre_animal='';
				this.nombre_dueño='';
				this.tipo='';
				this.fecha_programada='';
				this.hora_entrada='';
				this.hora_salida='';
			
		}

	},

	computed:{
		filtroEstetica:function(){
			return this.esteticas.filter((est)=>{
				return est.nombre_dueño.match(this.buscar.trim())||
					est.nombre_dueño.toLowerCase()
					.match(this.buscar.trim().toLowerCase());
			});
		},
	},
});

