<table class="table">
  <thead>
    <tr>

      <th>Tarea</th>
      <th>Descripcion</th>
      <th>Estadi</th>
      <th>Accion</th>

    </tr>
  </thead>
  <tbody>
    <tr v-for="(item, index) in ListadoTareas" v-show="(pag - 1) * num_results <= index  && pag * num_results > index" >
      <th>{{ item.tarea }}</th>
      <th>{{ item.descripcion }}</th>
      <th>{{ item.estado }}</th>
      <th>
        <button class="button is-small is-danger ">
          <span>Delete</span>
          <span class="icon is-small">
            <i class="fas fa-times"></i>
          </span>
        </button>

        <button class="button is-small is-warning " @click="EditarTarea(item.id_tarea, item.tarea, item.descripcion, item.usuario)">
          <span>Edit</span>
          <span class="icon is-small">
            <i class="fas fa-pen"></i>
          </span>
        </button>
      </th>
    </tr>
  </tbody>
</table>
