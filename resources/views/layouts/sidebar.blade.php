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
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
      </li>
      
  
        <a href="{{ route('indexsiswaadmin')}}">
          <i class="fa fa-dashboard"></i> <span> Data Siswa</span>
        </a>
    
<br><br>
      
        <a href="{{ route('indexguruadmin')}}">
          <i class="fa fa-dashboard"></i> <span> Data Guru </span>
        </a>
      

      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span> Data Nilai </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
      </li>

      
        <a href="{{route ('indexinputnilai') }}">
          <i class="fa fa-dashboard"></i> <span> input Nilai </span>
        </a>
    

      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span> Profil </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
