<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>
  <li><a href="{{ route('dashboard')}}"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
  @if(Auth::user()->role == "admin")
  <li><a href="{{ route('menampilkankelas')}}"><i class="fa fa-book"></i> <span>Data Siswa</span></a></li>
  <li><a href="{{ route('indexguruadmin')}}"><i class="fa fa-book"></i> <span>Data Guru</span></a></li>
  <li><a href="{{route ('menampilkannilaikelas')}}"><i class="fa fa-book"></i> <span>Data Nilai</span></a></li>
  @elseif(Auth::user()->role == "guru")
  <li><a href="{{route ('dataMapel') }}"><i class="fa fa-book"></i> <span>Input Nilai</span></a></li>
  
  @endif

</ul>