<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
<br><br>
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
@if(Auth::user()->role == "admin")
<br><br>
        <a href="{{ route('menampilkankelas')}}">
          <i class="fa fa-dashboard"></i> <span> Data Siswa</span>
        </a>

<br><br>

        <a href="{{ route('indexguruadmin')}}">
          <i class="fa fa-dashboard"></i> <span> Data Guru </span>
        </a>

        <br><br>

        <a href="{{route ('menampilkannilaikelas')}}">
          <i class="fa fa-dashboard"></i> <span> Data Nilai </span>
        </a>
@elseif(Auth::user()->role == "guru")
<br><br>

        <a href="{{route ('dataMapel') }}">
          <i class="fa fa-dashboard"></i> <span> input Nilai </span>
        </a>

<br><br>
@endif

<br><br>
        <a href="#">
          <i class="fa fa-dashboard"></i> <span> Profil </span>
        </a>
      

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
