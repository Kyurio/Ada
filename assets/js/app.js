
var app = new Vue({

  el: '#app',
  data: {

    titulo: 'titulo default',

  
    },

  mounted: function(){

    this.tabs();

  },


  methods: {

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

    changeTitle: function(title){

      this.titulo = title;

    }


  },








})
