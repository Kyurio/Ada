
<div class="field">
  <label class="label">Nombre Usuario</label>
  <div class="control">
    <input class="input" type="text" placeholder="titulo tarea" v-model="nombre_usuario" required>
  </div>
</div>

<div class="field">
  <label class="label">Contraseña</label>
  <div class="control">
    <input class="input" type="password" placeholder="descripcion" v-model="password" required>
  </div>
</div>

<div class="field">
  <label class="label">Correo</label>
  <div class="control">
    <input class="input" type="mail" placeholder="usuario que realiza la tarea" v-model="correo" required>
  </div>
</div>

<div class="field is-grouped" v-if="btn_usuario == false">
  <div class="control">
    <button class="button is-primary is-small" @click="GrabarUsuario">Grabar</button>
  </div>
</div>
<div class="field if-grouped" v-else>
  <div class="control">
    <button class="button is-warning is-small" @click="GrabarUsuario">Editar</button>
    <button class="button is-danger is-small" @click="CancelarEditUsuario">Cancelar</button>
  </div>
</div>
