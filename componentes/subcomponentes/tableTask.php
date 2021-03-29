<table class="table">
  <thead>
    <tr>

      <th>Tarea</th>
      <th>Descripcion</th>
      <th>Estado</th>
      <th>Accion</th>

    </tr>
  </thead>
  <tbody>
    <tr v-for="(item, index) in ListadoTareas" v-show="(pag - 1) * num_results <= index  && pag * num_results > index" >
      <th>{{ item.tarea }}</th>
      <th>{{ item.descripcion }}</th>
      <th v-if="item.estado == 0"><span class="tag is-link">En proceso</span></th>
      <th v-else-if="item.estado == 1"><span class="tag is-success">Completo</span></th>
      <th v-else-if="item.estado == 2"><span class="tag is-warning">Pausada</span></th>
      <th v-else="item.estado == 3"><span class="tag is-danger">Finalizado</span></th>
      <th>
        <button class="button is-small is-danger " @click="EliminarTarea(item.id_tare)" title="Eliminar">
          <span class="icon is-small">
            <i class="fas fa-times"></i>
          </span>
        </button>

        <button class="button is-small is-warning " @click="EditarTarea(item.id_tarea, item.tarea, item.descripcion, item.usuario)" title="Editar">
          <span class="icon is-small">
            <i class="fas fa-pen"></i>
          </span>
        </button>
      </th>
    </tr>
  </tbody>
</table>
