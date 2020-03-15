var route = document.querySelector("[name=route]").value;
var urlMedicamentos=route + '/apiMedicamento';
new Vue({

	el:'#medicamento',
	// token
	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	data:{
		medicamentos:[],
		id_medicamento:'',
		tipo_animal:'',
		utilidad:'',
		buscar:'',
		
	},

	created:function(){
		this.getMedicamento();
	},

	methods:{
		getMedicamento:function(){
			this.$http.get(urlMedicamentos)
			.then(function(json){
				this.medicamentos=json.data
			});
		},

		guardarMedicamento:function(id){
			this.$http.get(urlMedicamentos + '/' + id)
			.then(function(json){
				this.id_medicamento=json.data.id_medicamento;
				this.tipo_animal=json.data.tipo_animal;
				this.utilidad=json.data.utilidad;
			});
		},

		eliminarMedicamento:function(id){
			var resp=confirm("¿Estas Seguro Que Deseas Eliminar?")
			if(resp==true)
			{
				this.$http.delete(urlMedicamentos + '/' + id)
				.then(function(json){
				this.getMedicamento();
				});
			}
			
		},
		
		agregarMedicamento:function(){
			var medicamento={
				id_medicamento:this.id_medicamento,
				tipo_animal:this.tipo_animal,
				utilidad:this.utilidad,

			};

				this.id_medicamento='';
				this.tipo_animal='';
				this.utilidad='';

			this.$http.post(urlMedicamentos,medicamento)
			.then(function(response){
				this.getMedicamento();
			});

		},

		actualizarMedicamento:function(id){
			// crear un json 
			var medicamento={
				id_medicamento:this.id_medicamento,
				tipo_animal:this.tipo_animal,
				utilidad:this.utilidad,
					  }
		    console.log();

			this.$http.patch(urlMedicamentos + '/' + id,medicamento)
			.then(function(json){
				this.getMedicamento();
				this.limpiar();
			})
		},

		limpiar:function(){
				this.id_medicamento='';
				this.tipo_animal='';
				this.utilidad='';
			
		}

	},

	computed:{
		filtroMedicamento:function(){
			return this.medicamentos.filter((med)=>{
				return med.id_medicamento.match(this.buscar.trim())||
					med.id_medicamento.toLowerCase()
					.match(this.buscar.trim().toLowerCase());
			});
		},
	},
});

