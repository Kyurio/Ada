
<div id="app">

      {{  test }}

      <h3>Tareas</h3>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Tarea</th>
            <th scope="col">Usuario</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>

  
      <!-- formulario insert tarea -->
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="exampleFormControlInput1">Tarea</label>
                <input type="email" class="form-control" placeholder="Titulo de Tarea" v-model="tarea">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Usuario</label>
                <input type="email" class="form-control" placeholder="Usuario a realizar la tarea" v-model="usuario">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripcion</label>
                <textarea class="form-control" rows="3" v-model="descripcion"></textarea>
              </div>

              <button type="button" name="button" v-on:click="GrabarTarea" class="btn btn-sm btn-success mt-1 mb-1">Grabar</button>

            </form>
          </div>
        </div>
      </div>
      <!-- end formulario -->


  </div>
