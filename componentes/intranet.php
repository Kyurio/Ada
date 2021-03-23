
<div id="app">


  <div class="container">

    <!-- form -->
    <div class="card">
      <div class="card-content">
        <div class="content">

          <div class="field">
            <label class="label">Tarea</label>
            <div class="control">
              <input class="input" type="text" placeholder="titulo tarea">
            </div>
          </div>

          <div class="field">
            <label class="label">Descripcion</label>
            <div class="control">
              <input class="input" type="text" placeholder="descripcion">
            </div>
          </div>

          <div class="field">
            <label class="label">Usuario</label>
            <div class="control">
              <input class="input" type="text" placeholder="usuario que realiza la tarea">
            </div>
          </div>


          <div class="field is-grouped">
            <div class="control">
              <button class="button is-primary is-samll">Submit</button>
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

        <div class="content">

          <table class="table">
            <thead>
              <tr>

                <th>Tarea</th>
                <th>Descripcion</th>
                <th>Usuario</th>
                <th>Accion</th>

              </tr>
            </thead>
            <tbody>
              <tr v-for="(item, index) in filterProducts" v-show="(pag - 1) * num_results <= index  && pag * num_results > index">
                <th>1</th>
                <th>1</th>
                <th>1</th>
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


        </div>

      </div>
    </div>
    <!-- end table -->
  </div>


</div>
