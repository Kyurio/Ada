<div id="app">
  <div class="container-text mt-1 mb-5">
    <div class="text-center">
      <div class="row">
        <div class="d-flex justify-content-center">
          <div class="col-6 col-auto">
            <div class="py-5 mx-5">
              <h2 class="font-weight-bold mb-5">Title text</h2>

              <p class="mb-5"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>

              {{ message }}
              <button type="button" @click="test" name="button">TEST</button>


              <form class="" action="<?php echo RUTA_URL ?>config/control/Upload.php" enctype="multipart/form-data" method="post">
                <input type="file" name="archivo" value="">
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br>
                <button type="submit" class="btn btn-success" name="button">subir</button>
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
