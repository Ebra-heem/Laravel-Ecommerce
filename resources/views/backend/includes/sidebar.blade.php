<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('/backend/') }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{URL::to('/admin/home')}}">
            <i class="fa fa-dashboard text-green"></i> <span class="text-green">Dashboard</span>
      
          </a>
        
        </li>
        <li>
          <a href="{{URL::to('/admin/calendar')}}">
            <i class="fa fa-calendar text-yellow"></i> <span class="text-yellow">Calender</span>
      
      </a>
        
        </li>
<!--################## Category ##########################-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart text-aqua"></i>
            <span class="text-aqua">Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('/admin/category/add')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>
            <li><a href="{{URL::to('/admin/category/manage')}}"><i class="fa fa-circle-o"></i> Manage Category</a></li>
          
          </ul>
        </li>

        <!--################## Manufacturar ##########################-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart text-aqua"></i>
            <span class="text-aqua">Manufacturar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('/admin/manufacturar/add')}}"><i class="fa fa-circle-o"></i> Add Manufacturar</a></li>
            <li><a href="{{URL::to('/admin/manufacturar/manage')}}"><i class="fa fa-circle-o"></i> Manage Manufacturar</a></li>
          
          </ul>
        </li>

        <!--################## Product ##########################-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart text-aqua"></i>
            <span class="text-aqua">Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('/admin/product/add')}}"><i class="fa fa-circle-o"></i> Add Product</a></li>
            <li><a href="{{URL::to('/admin/product/manage')}}"><i class="fa fa-circle-o"></i> Manage Product</a></li>
          
          </ul>
        </li>
        <!--###### Manage Order ######-->
       <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart text-aqua"></i>
            <span class="text-aqua">Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('manage-order') }}"><i class="fa fa-circle-o"></i> Manage Order Details</a></li>
          
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart text-aqua"></i>
            <span class="text-aqua">Contact</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('contact.index') }}"><i class="fa fa-circle-o"></i> Contact Details</a></li>
            <!--
            <li><a href=""><i class="fa fa-circle-o"></i> User</a></li>-->
          
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart text-aqua"></i>
            <span class="text-aqua">Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('slider.create') }}"><i class="fa fa-circle-o"></i> Add Slider</a></li>
            <li><a href="{{ route('slider.index') }}"><i class="fa fa-circle-o"></i> Manage Slider</a></li>
          
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart text-aqua"></i>
            <span class="text-aqua">Store Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Store Information</a></li>
          
          </ul>
        </li>
        
       

      </ul>
    </section>
    <!-- /.sidebar -->