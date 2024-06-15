      <?php

        $URL_CONTROLLER = $_SESSION["url_controller"];
        $URL_METHOD = $_SESSION["url_method"];

        ?>

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="index3.html" class="brand-link">
              <!-- <img
            src="./_resources/dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          /> -->
              <span class="brand-text font-weight-light">AdminLTEEE 3</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                      <!-- <img src="../_resources/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" /> -->
                  </div>
                  <div class="info">
                      <a href="#" class="d-block">Alexander Pierce</a>
                  </div>
              </div>

              <!-- Sidebar MAIN Menu -->
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                      <!-- INICIO -->
                      <li class="nav-item">
                          <a href="<?= ROOT ?>" class="nav-link <?= $URL_CONTROLLER == "inicio" ? "active" : ""  ?>">
                              <ion-icon name="home-outline"></ion-icon>
                              <p>Inicio</p>
                          </a>
                      </li>

                      <!-- INICIO -->
                      <li class="nav-item">
                          <a href="<?= ROOT ?>/nosotros" class="nav-link <?= $URL_CONTROLLER == "nosotros" ? "active" : ""  ?>">
                              <ion-icon name="receipt-outline"></ion-icon>
                              <p>Nosotros</p>
                          </a>
                      </li>


                  </ul>
              </nav>
              <!-- /.sidebar-menu -->
          </div>
      </aside>