var login = new Vue({

  el: '#login',
  data: {

    // tarea
    usuario: '',
    password: '',
    errors: {},

  },

  mounted: function(){


  },

  methods: {

    Login: function () {

      alert("login");

      axios({
        method: 'POST',
        url: '/Ada/config/control/Login.php',
        data: {

          str_usuario: this.usuario,
          str_password: this.password,

        }

      }).then(function (response) {
        // handle success
        console.log(response.data);
        if(response.data == "true"){

          //redirecciona
          //location.href="http://localhost/Ada/perfil";

        }else{
          swal("error", "Something went wrong!" ,  "error" )
        }

      }).catch(function (response) {
        console.log("error interno"+response);
      });

      this.usuario = '';
      this.password = '';


    },

    checkFormLogin: function (e) {

      alert(e);


      if (this.usuario && this.password) {
        return true;
      }

      this.errors = [];

      if (!this.usuario) {
        this.errors.push('El usuario es requerido');
      }
      if (!this.validEmail(this.usuario)) {
        this.errors.push('ingrese un email valido.');
      }

      if (!this.errors.length) {
        this.Login();
      }

      e.preventDefault();
    },

    validEmail: function (email) {
      var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }

  }

})
