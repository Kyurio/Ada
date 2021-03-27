
<div id="app">


  <div class="container">

    <!-- form -->
    <div class="card">

      <div class="card-content">
        <h5 class="title is-5">Usuarios</h5>

        <div class="content">


          <div class="field">
            <label class="label">Nombre Usuario</label>
            <div class="control">
              <input class="input" type="text" placeholder="titulo tarea" v-model="nombre_usuario">
            </div>
          </div>

          <div class="field">
            <label class="label">Contraseña</label>
            <div class="control">
              <input class="input" type="password" placeholder="descripcion" v-model="password">
            </div>
          </div>

          <div class="field">
            <label class="label">Correo</label>
            <div class="control">
              <input class="input" type="text" placeholder="usuario que realiza la tarea" v-model="correo">
            </div>
          </div>

          <div class="field is-grouped">
            <div class="control">
              <button class="button is-primary is-small" @click="GrabarUsuario">Grabar</button>
            </div>
          </div>


        </div>

      </div>

    </div>
    <!-- end form -->

    <br>

    <!-- table -->
    <div class="card">
      <div class="card-content">

        <div class="content is-centered">





          <div class="columns is-centered is-vcentered is-mobile">
            <div class="column is-12 is-narrow has-text-centered">

              <table class="table">
                <thead>
                  <tr>

                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Estado</th>
                    <th>Accion</th>

                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(item, index) in ListadoUsuarios" v-show="(pag - 1) * num_results <= index  && pag * num_results > index" >
                    <th>{{ item.nombre_usuario }}</th>
                    <th>{{ item.correo }}</th>
                    <th>{{ item.estado }}</th>
                    <th>
                      <button class="button is-small is-danger ">
                        <span>Delete</span>
                        <span class="icon is-small">
                          <i class="fas fa-times"></i>
                        </span>
                      </button>

                      <button class="button is-small is-warning ">
                        <span>Edit</span>
                        <span class="icon is-small">
                          <i class="fas fa-pen"></i>
                        </span>
                      </button>
                    </th>
                  </tr>
                </tbody>
              </table>

              <!-- paginador -->
              <nav class="pagination" role="navigation" aria-label="pagination">
                <a class="pagination-previous" v-show="pag != 1" @click.prevent="pag -= 1">Anteriror</a>
                <a class="pagination-next" v-show="pag * num_results / ListadoUsuarios.length < 1" @click.prevent="pag += 1">Siguiente</a>
              </nav>
              <!-- end paginadaro -->




            </div>
          </div>
        </div>

        <!-- end table -->

      </div>
    </div>

  </div>


</div>
