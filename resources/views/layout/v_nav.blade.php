<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      @if (Auth::user()->level == 1)
        <li class="nav-item">
          <a href="/home" class="nav-link {{request()->is('home') ? 'active' : ''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/dosen" class="nav-link {{request()->is('dosen') ? 'active' : ''}}">
            <i class="nav-icon fas fa-file"></i>
            <p>Kelola Dosen</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/mahasiswa" class="nav-link {{request()->is('mahasiswa') ? 'active' : ''}}">
            <i class="nav-icon fas fa-file"></i>
            <p>Mahasiswa</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/user" class="nav-link {{request()->is('user') ? 'active' : ''}}">
            <i class="nav-icon fas fa-file"></i>
            <p>User</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/about" class="nav-link {{request()->is('about') ? 'active' : ''}}">
            <i class="nav-icon fas fa-file"></i>
            <p>About</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/chartjs" class="nav-link {{request()->is('chartjs') ? 'active' : ''}}">
            <i class="nav-icon fas fa-file"></i>
            <p>Chart</p>
          </a>
        </li>
  
        <li class="nav-item">
          <a href="/invoice" class="nav-link {{request()->is('invoice') ? 'active' : ''}}">
            <i class="nav-icon fas fa-file"></i>
            <p>Invoice</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link {{request()->is('logout') ? 'active' : ''}}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-file"></i>
              <p>Logout</p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </li>
      @endif
      @if (Auth::user()->level == 2)
        <li class="nav-item">
          <a href="/home" class="nav-link {{request()->is('home') ? 'active' : ''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/user2" class="nav-link {{request()->is('user2') ? 'active' : ''}}">
            <i class="nav-icon fas fa-file"></i>
            <p>User</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link {{request()->is('logout') ? 'active' : ''}}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-file"></i>
              <p>Logout</p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </li>
      @endif
      @if (Auth::user()->level == 3)
        <li class="nav-item">
          <a href="/home" class="nav-link {{request()->is('home') ? 'active' : ''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/mahasiswa3" class="nav-link {{request()->is('mahasiswa3') ? 'active' : ''}}">
            <i class="nav-icon fas fa-file"></i>
            <p>Mahasiswa</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link {{request()->is('logout') ? 'active' : ''}}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-file"></i>
              <p>Logout</p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </li>
      @endif
      @if (Auth::user()->level == 4)
        <li class="nav-item">
          <a href="/home" class="nav-link {{request()->is('home') ? 'active' : ''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/dosen4" class="nav-link {{request()->is('dosen4') ? 'active' : ''}}">
            <i class="nav-icon fas fa-file"></i>
            <p>Kelola Dosen</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link {{request()->is('logout') ? 'active' : ''}}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-file"></i>
              <p>Logout</p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </li>
      @endif
    </ul>
  </nav>

