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
    <tr v-for="(item, index) in ListadoTareas" v-show="(pag - 1) * num_results_perfil <= index  && pag * num_results_perfil > index" >

      <th>{{ item.tarea }}</th>
      <th>{{ item.descripcion }}</th>
      <th v-if="item.estado == 0"><span class="tag is-link">En proceso</span></th>
      <th v-else-if="item.estado == 1"><span class="tag is-success">Completo</span></th>
      <th v-else-if="item.estado == 2"><span class="tag is-warning">Pausada</span></th>
      <th v-else="item.estado == 3"><span class="tag is-danger">Finalizado</span></th>
      <th>

        <button class="button is-success is-small">completar</button>
        <button class="button is-warning is-small">Pausar</button>

      </th>
    </tr>
  </tbody>
</table>
