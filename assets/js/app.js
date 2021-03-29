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
    estado_usuario: '',

    //botones edicion
    btn_tarea: false,
    btn_usuario: false,

    num_results: 5,
    num_results_perfil: 15,
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

    EditarUsuario: function (id_usuario, nombre_usuario, contraseña,  correo, estado) {

      this.id_usuario = id_usuario,
      this.nombre_usuario = nombre_usuario,
      this.password = contraseña,
      this.correo = correo,
      this.estado_usuario = estado,

      this.btn_usuario = true;

    },

    CancelarEditUsuario: function(){

      this.id_usuario = "",
      this.nombre_usuario = "",
      this.password = "",
      this.correo = "",
      this.estado_usuario = "",

      this.btn_usuario = false;


    },

    EditarTarea: function (int_id, str_tarea, str_descripcion, int_usuario) {

      this.id_tarea = int_id;
      this.tarea = str_tarea;
      this.usuario = int_usuario;
      this.descripcion = str_descripcion;

      this.btn_tarea = true;

    },

    EliminarTarea: function (id){

      swal({
        title: "¿Estas seguro de Eliminar el registro?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          //ejecuta la funcion
          axios({
            method: 'POST',
            url: '/Ada/config/control/EliminarTask.php',
            data: {
              id_tarea: id,
            }
          }).then(function (response) {
            console.log(response.data);
            if(response.data == true){
              swal("Poof! Tu registro fue eliminado !", {
                icon: "success",
              });
            }else {
              swal("Error al eliminar el registro", {
                icon: "error",
              });
            }
          });
          this.ListadoTask();
          //mensaje de elemento eleiminado
        }
      });

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
          swal("Datos Actualizados con extio!", "tu registro fue actualizado exitosamente", "success");
        }else{
          swal("Error", "No se pudieron actualizar tus datos!" ,  "error" )
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
        capturador.ListadoUsuarios = response.data;
      });

    },


  }

})
