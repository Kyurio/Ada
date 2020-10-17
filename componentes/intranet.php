

<div class="container">

  <ul class="nav navbar navbar-expand-lg navbar-light mt-5" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true"><i class="far fa-chart-bar"></i> Dashboard</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#configuracion" role="tab" aria-controls="configuracion" aria-selected="false"><i class="fas fa-cog"></i> Configuracion</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#mensajes" role="tab" aria-controls="mensajes" aria-selected="false"><i class="far fa-envelope"></i> Mensajes</a>
    </li>
  </ul>




  <div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="home-tab">

      Dashboard

    </div>

    <div class="tab-pane fade" id="configuracion" role="tabpanel" aria-labelledby="profile-tab">

      <!-- contenido -->
      <div class="mt-2 py-2 mb-5">
        <div class="card">
          <div class="card-body">
            <h6 class="font-weight-bold">configuracion</h6>
            <hr>
            <div class="row">
              <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                  <a class="nav-link active" id="v-pills-social-tab" data-toggle="pill" href="#v-pills-social" role="tab" aria-controls="v-pills-social" aria-selected="true">Redes sociales</a>
                  <a class="nav-link" id="v-pills-profile-tab"  data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Nosotros</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Ubicacion</a>

                </div>
              </div>
              <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">

                  <!-- configuracion de redes sociales y contacto -->
                  <div class="tab-pane fade show active" id="v-pills-social" role="tabpanel" aria-labelledby="v-pills-social-tab">

                    <form class="" action="http://localhost/Aleria/pages/AddSocial" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Facebook</label>
                        <input class="form-control form-control-sm" type="text" name="facebook" placeholder="www.facebook.com/doublecode">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Twitter</label>
                        <input class="form-control form-control-sm" type="text"  name="twitter" placeholder="@doublecode01">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Instagram</label>
                        <input class="form-control form-control-sm" type="text" name="instagram" placeholder="@doublecode01">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Linkedin</label>
                        <input class="form-control form-control-sm" type="text" name="linkedin" placeholder="/doublecode">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Pinterest</label>
                        <input class="form-control form-control-sm" type="text" name="pinterest" placeholder="@doublecode">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Google plus</label>
                        <input class="form-control form-control-sm" type="text" name="google_plus" placeholder="@doublecode">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Whatsapp</label>
                        <input class="form-control form-control-sm" type="text" name="whatsapp" placeholder="+569 65063392">
                      </div>
                      <button type="submit" class="btn btn-dark btn-sm" name="button">Grabar</button>
                    </form>

                  </div>
                  <!-- end configuracion de redes sociales y contacto -->

                  <!-- configuracion de informacion general de la web -->
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                    <!-- configuracion textos de la web - informacion quienes somos etc -->
                    <form class="" action="index.html" method="post">
                      <div class="container">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>Titulo</small></label>
                          <input class="form-control form-control-sm" type="text" placeholder="titulo">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>cuadro cuatro</small></label>
                          <textarea class="form-control form-control-sm" type="text" placeholder=""></textarea>
                          <small id="emailHelp" class="form-text text-muted">se utilizara en el link en toda la web como acceso directo</small>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>Titulo</small></label>
                          <input class="form-control form-control-sm" type="text" placeholder="titulo">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>cuadro cuatro</small></label>
                          <textarea class="form-control form-control-sm" type="text" placeholder=""></textarea>
                          <small id="emailHelp" class="form-text text-muted">se utilizara en el link en toda la web como acceso directo</small>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>Titulo</small></label>
                          <input class="form-control form-control-sm" type="text" placeholder="titulo">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>cuadro cuatro</small></label>
                          <textarea class="form-control form-control-sm" type="text" placeholder=""></textarea>
                          <small id="emailHelp" class="form-text text-muted">se utilizara en el link en toda la web como acceso directo</small>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>Titulo</small></label>
                          <input class="form-control form-control-sm" type="text" placeholder="titulo">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>cuadro cuatro</small></label>
                          <textarea class="form-control form-control-sm" type="text" placeholder=""></textarea>
                          <small id="emailHelp" class="form-text text-muted">se utilizara en el link en toda la web como acceso directo</small>
                        </div>
                        <!-- end informacion web -->

                        <button type="button" name="button">Grabar</button>

                      </div>
                    </form>


                  </div>
                  <!-- end configuracion de informacion general de la web -->

                  <!-- geo map ubicacion -->
                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                    <div class="container">
                      <div class="form-group">
                        <label for="exampleInputEmail1"><small>mapa</small></label>
                        <input class="form-control form-control-sm" type="text" placeholder="titulo">
                      </div>
                      <div class="form-group">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13738.4902480071!2d-71.20425024999999!3d-30.58819865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2scl!4v1598726460856!5m2!1ses-419!2scl" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                      </div>

                    </div>
                    <!-- end geo map ubicacion -->

                  </div>
                  <!-- end geo map-->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end contendio -->

    </div>

    <div class="tab-pane fade" id="mensajes" role="tabpanel" aria-labelledby="contact-tab">

      Mensajes


    </div>

  </div>

</div>
