
<div id="app">


  <div class="container">

    <!-- form -->
    <div class="card">

      <div class="card-content">
        <h5 class="title is-5">Tareas</h5>
        <div class="content">


          <!-- form -->
          <?php require_once("../componentes/subcomponentes/formTask.php"); ?>
          <!-- end form -->

        </div>
      </div>
    </div>
    <!-- end form -->

    <br>

    <!-- table -->
    <div class="card">
      <div class="card-content">
        <div class="content">

          <div class="columns is-centered is-vcentered is-mobile">
            <div class="column is-12 is-narrow has-text-centered">

              <!-- form -->
              <?php require_once("../componentes/subcomponentes/tableTask.php"); ?>
              <!-- end form -->

            </div>
          </div>
          
          <!-- paginador -->
          <nav class="pagination" role="navigation" aria-label="pagination">
            <a class="pagination-previous" v-show="pag != 1" @click.prevent="pag -= 1">Anteriror</a>
            <a class="pagination-next" v-show="pag * num_results / ListadoTareas.length < 1" @click.prevent="pag += 1">Siguiente</a>
          </nav>
          <!-- end paginadaro -->

        </div>
      </div>
    </div>
    <!-- end table -->
  </div>


</div>
