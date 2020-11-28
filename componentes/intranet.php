<div id="app">




  <div class="container-fluid">
    <div class="row">

      <!-- importa el sidebar -->
      <?php require_once("../componentes/sidebar.php"); ?>
      <!-- end inmport -->


      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <div class="container mt-4 mb-4 py-4">
            <h3>{{ titulo }}</h3>
          </div>
        </div>

        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="container py-5">

              <div class="row">
                <div class="col-md-6">

                  <button type="button"  class="btn btn-sm btn-success" name="button" data-toggle="modal" data-target="#AgregarPost" ><i class="fas fa-plus"></i></button>
                  <div class="text-center">

                  </div>
                </div>
              </div>

              <table class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>

                      <button type="button"  class="btn btn-sm btn-danger" name="button" ><i class="fas fa-trash"></i></button>
                      <button type="button"  class="btn btn-sm btn-info" name="button" ><i class="fas fa-pen"></i></button>


                    </td>
                  </tr>
                </tbody>
              </table>

            </div>


          </div>

          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container py-5">
              <h5>Profile</h5>
            </div>
          </div>

          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="container py-5">
              <h5>Contact</h5>
            </div>
          </div>

          <div class="tab-pane fade" id="config" role="tabpanel" aria-labelledby="config-tab">
            <div class="container py-5">
              <h5>Config</h5>
            </div>
          </div>

        </div>


      </main>

    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="AgregarPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content form-elegant">

        <div class="modal-header text-center">
          <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Nueva  publicacion</strong></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-4">
          <div class="md-form mb-5">
            <input type="email" id="Form-email1" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-email1">Titulo</label>
          </div>
          <div class="md-form pb-3">
            <input type="password" id="Form-pass1" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-pass1"></label>
          </div>
            <button type="button" class="btn blue-gradient">Registrar</button>
    
        </div>

      </div>
    </div>
  </div>



</div>
