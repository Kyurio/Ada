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
          <span class="icon is-small">
            <i class="fas fa-times"></i>
          </span>
        </button>

        <button class="button is-small is-warning "  @click="EditarUsuario(item.id_usuario, item.nombre_usuario, item.contraseña, item.correo, item.estado)">
          <span class="icon is-small">
            <i class="fas fa-pen"></i>
          </span>
        </button>
      </th>
    </tr>
  </tbody>
</table>
