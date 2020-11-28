
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column" id="myTab" role="tablist">

          <li class="nav-item" role="presentation">
            <a class="nav-link active" @click="changeTitle('Home')" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-home"></i> Home</a>
          </li>

          <li class="nav-item" role="presentation">
            <a class="nav-link" @click="changeTitle('Perfil')" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-male"></i> Profile</a>
          </li>

          <li class="nav-item" role="presentation">
            <a class="nav-link" @click="changeTitle('Mensajes')" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-envelope"></i> Contact</a>
          </li>

          <li class="nav-item" role="presentation">
            <a class="nav-link" @click="changeTitle('Configuracion')" id="contact-tab" data-toggle="tab" href="#config" role="tab" aria-controls="config" aria-selected="false"><i class="fas fa-cog"></i> config</a>
          </li>

        </ul>
      </div>
    </nav>
