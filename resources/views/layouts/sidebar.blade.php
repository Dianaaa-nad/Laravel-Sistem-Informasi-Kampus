      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{url('/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home   
              </p>
            </a>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-server"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{url('/fakultas')}}" class="nav-link">
              <i class=" far fa-building nav-icon "></i>
              <p>
                Fakultas
              </p>
              </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/prodi')}}" class="nav-link">
                  <i class="far fa-bookmark nav-icon"></i>
                  <p>Program Studi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pegawai
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{url('/pendidik')}}" class="nav-link">
              <i class=" fas fa-user-tie nav-icon"></i>
              <p>
                Tenaga Pendidik
              </p>
              </a>
              </li>              
              <li class="nav-item">
                <a href="{{url('/kependidikan')}}" class="nav-link">
                  <i class="fas fa-user-tie nav-icon"></i>
                  <p>Tenaga Kependidikan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Perkuliahan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{url('/matkul')}}" class="nav-link">
              <i class=" fas fa-book nav-icon"></i>
              <p>
                Mata Kuliah
              </p>
              </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/kelas')}}" class="nav-link">
                  <i class="fas fa-chalkboard nav-icon"></i>
                  <p>Kelas</p>
                </a>
              </li>              
              <li class="nav-item">
                <a href="{{url('/jadwal')}}" class="nav-link">
                  <i class="fas fa-calendar-alt nav-icon"></i>
                  <p>Jadwal</p>
                </a>
              </li>              
              <li class="nav-item">
                <a href="{{url('/mahasiswa')}}" class="nav-link">
                  <i class="fas fa-user-graduate nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
          </li>
          <li class="nav-header">ADMIN</li>
          <li class="nav-item">
            <a href="{{url('/adm')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Daftar Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
               logout
                
              </p>
            </a>
          </li>
