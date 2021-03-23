var app = new Vue({

  el: '#app',
  data: {

    test: 'el nene',

    tarea: '',
    usuario: '',
    descripcion: '',

    num_results: 10,
    pag: 1,


    ListadoTareas: {},


  },

  mounted: function(){

    this.listar_area();

  },

  methods: {

    GrabarTarea: function () {

      axios({
        method: 'POST',
        url: 'http://localhost/Ada/config/control/Task.php',
        data: {

          strtarea: this.tarea,
          intusuario: this.usuario,
          strdescripcion: this.descripcion,
          intestado: 0,
        }

      }).then(function (response) {
        // handle success
        if(response.data == true){
          var notification = alertify.notify('sample', 'success', 5, function(){  console.log('dismissed'); });
        }else{
          var notification = alertify.notify('sample', 'success', 5, function(){  console.log('dismissed'); });
        }
        console.log(response.data);
      }).catch(function (response) {
        console.log("error interno"+response);
      });


      //refresca la tabla

    },

    ListadoTarea: function () {
      capturador = this;
      axios.get('/Ada/config/control/ListadoTask.php', {
      }).then(function (response) {
        capturador.categorys = response.data;
      });
    },

  }

})
