var app = new Vue({

  el: '#app',
  data: {

    test: 'el nene',

    tarea: '',
    usuario: '',
    descripcion: '',

    num_results: 5,
    pag: 1,


    ListadoTareas: {},


  },

  mounted: function(){

    this.ListadoTasks();

  },

  methods: {

    GrabarTarea: function () {
      axios({
        method: 'POST',
        url: '/Ada/config/control/Task.php',
        data: {

          str_tarea: this.tarea,
          int_usuario: this.usuario,
          str_descripcion: this.descripcion,
          intestado: 0,
        }

      }).then(function (response) {
        // handle success
        console.log(response.data);
        if(response.data == true){
          swal("Good job!", "You clicked the button!", "success");
        }else{
          swal("error", "Something went wrong!" ,  "error" )
        }



      }).catch(function (response) {
        console.log("error interno"+response);
      });

      this.tarea = '';
      this.usuario = '';
      this.descripcion = '';

      //refresca la tabla
      this.ListadoTask();
    },

    ListadoTasks: function () {
      capturador = this;
      axios.get('/Ada/config/control/ListadoTask.php', {
      }).then(function (response) {
        capturador.ListadoTareas = response.data;
      });
    },

  }

})
