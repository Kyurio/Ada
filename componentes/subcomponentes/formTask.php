<div class="field">
  <label class="label">Tarea</label>
  <div class="control">
    <input class="input is-small" type="text" placeholder="titulo tarea" v-model="tarea">
  </div>
</div>

<div class="field">
  <label class="label">Descripcion</label>
  <div class="control">
    <textarea class="textarea is-small" placeholder="descripcion" v-model="descripcion"></textarea>
  </div>
</div>

<div class="field">
  <label class="label">Usuario</label>
  <div class="control">
    <input class="input is-small" type="text" placeholder="usuario que realiza la tarea" v-model="usuario">
  </div>
</div>



<div class="field is-grouped" v-if="btn_tarea == false">
  <div class="control">
    <button class="button is-primary is-small" @click="GrabarTarea">Grabar</button>
  </div>
</div>
<div class="field is-grouped" v-else>
  <div class="control">
    <button class="button is-warning is-small" @click="UpdateTarea">Editar</button>
  </div>
  <div class="control">
    <button class="button is-danger is-small" @click="CancelarEdit">Cancelar</button>
  </div>
</div>
