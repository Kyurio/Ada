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
      <th>{{ item.estado }}</th>
      <th>

        <button class="button is-success is-small">completar</button>
        <button class="button is-warning is-small">Pausar</button>

      </th>
    </tr>
  </tbody>
</table>
