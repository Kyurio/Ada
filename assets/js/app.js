var app = new Vue({

  el: '#app',
  data: {

    // tarea
    id_tarea: '',
    tarea: '',
    usuario: '',
    descripcion: '',

    // usuario
    nombre_usuario: '',
    password: '',
    correo: '',

    //botones edicion
    btn_tarea: false,

    num_results: 5,
    pag: 1,


    ListadoTareas: {},
    ListadoUsuarios: {},

  },

  mounted: function(){

    this.ListadoTasks();
    this.ListadoUsuario();

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

    GrabarUsuario: function () {

      axios({
        method: 'POST',
        url: '/Ada/config/control/User.php',
        data: {

          str_usuario: this.nombre_usuario,
          str_correo: this.correo,
          str_password: this.password,

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

      this.nombre_usuario = '';
      this.correo = '';
      this.password = '';

      //refresca la tabla
      this.ListadoTask();

    },

    EditarTarea: function (int_id, str_tarea, str_descripcion, int_usuario) {

      this.id_tarea = int_id;
      this.tarea = str_tarea;
      this.usuario = int_usuario;
      this.descripcion = str_descripcion;

      this.btn_tarea = true;

    },

    UpdateTarea: function (){
      axios({
        method: 'POST',
        url: '/Ada/config/control/UpdateTask.php',
        data: {
          id_tarea: this.id_tarea,
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

    CancelarEdit: function () {

      this.id_tarea = "";
      this.tarea = "";
      this.usuario = "";
      this.descripcion = "";

      this.btn_tarea = false;

    },

    UpdateTarea: function (){
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

    ListadoUsuario: function () {

      capturador = this;
      axios.get('/Ada/config/control/ListadoUsuario.php', {
      }).then(function (response) {
        console.log(response.data);
        capturador.ListadoUsuarios = response.data;
      });

    },

  }

})
