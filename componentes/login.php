
<div id="login">

  <div class="container mt-5">

    <div class="hero-body">
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-8">



            <p v-if="errors.length">
              <b>Please correct the following error(s):</b>
              <ul>
                <li v-for="error in errors">{{ error }}</li>
              </ul>
            </p>

            <div class="field">
              <label class="label">
                Email
              </label>
              <input type="email" class="input is-small" placeholder="john@example.com" v-model="usuario" required>

            </div>
            <div class="field">
              <label class="label">Password</label>
              <input type="password" class="input is-small" v-model="password" required>

            </div>

            <div class="field">
              <button class="button is-primary is-small"  @click="Login">Login</button>
            </div>


          </div>
        </div>
      </div>
    </div>

  </div>

</div>
