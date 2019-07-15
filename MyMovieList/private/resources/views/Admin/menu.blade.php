  <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <br><br>
        <li>
          <a href="{{route('Admin')}}">
            <i class="fa fa-newspaper-o"></i> <span>Dashbord</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Movie</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('MovieList.index')}}"><i class="fa fa-circle-o"></i> Data Movie List</a></li>
            <li><a href="{{ route('MovieList.create') }}"><i class="fa fa-circle-o" class="nav-link"></i> Tambah Movie List</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Artikel </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('ArtikelList.index')}}"><i class="fa fa-circle-o"></i> Data Atikel List</a></li>
            <li><a href="{{ route('ArtikelList.create') }}"><i class="fa fa-circle-o" class="nav-link"></i> Tambah Artikel</a></li>
          </ul>
        </li>
        <li>
          <a href="{{route('AboutAdmin')}}">
            <i class="fa fa-info-circle"></i> <span>About</span>
          </a>
        </li>

      </ul>