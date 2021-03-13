var app = new Vue({

  el: '#app',
  data: {

    test: 'el nene',

    tarea: '',
    usuario: '',
    descripcion: '',


    ListadoTareas: {},


  },

  mounted: function(){


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

  }

})
