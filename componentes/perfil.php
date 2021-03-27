<div id="app">
  <div class="container">
    <div class="features mt-5">
      <div class="card">
        <div class="card-content">


          <div class="columns is-centered is-vcentered is-mobile">
            <div class="column is-12 is-narrow has-text-centered">

              <!-- tabla -->
              <?php require_once("../componentes/subcomponentes/tablePerfil.php"); ?>
              <!-- end tabla -->

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
  </div>
</div>
