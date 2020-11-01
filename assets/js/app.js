
var app = new Vue({

  el: '#app',
  data: {
    message: 'Hello Vue!',
    url_map: '',
    error: [],
    flagError: false,
  },

  mounted: function(){

    this.tabs();

  },


  methods: {


    add_mapa: function(){


      axios({

        method: 'POST',
        url: "/kyaria/config/control/Mapa.php",
        data:{

          map_url: this.url_map

        }

      }).then(function (response) {
        // handle success

        if(response.data == true){

          alertify.notify('Mapa guardado con exito', 'success');
          alertify.error('Error no se pudieron grabar los datos.');

        }else{

          alertify.error('Error no se pudieron grabar los datos.');

        }
        //console.log(response.data);
      }).catch(function (error) {

        console.log(error);

      });

      this.url_map = '';

    },

    test: function(){

      capturador = this;
      axios.get('/kyaria/config/control/test.php', {
      }).then(function (response) {
        console.log(response);
      });

    },

    tabs: function(){

      $(document).ready(function(){
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
          localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if(activeTab){
          $('#myTab a[href="' + activeTab + '"]').tab('show');
        }
      });
    },


  },







})
