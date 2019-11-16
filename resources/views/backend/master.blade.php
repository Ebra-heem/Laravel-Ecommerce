    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>AdminBackend</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.7 -->
      @include('backend.includes.headerlink')
    </head>
    <!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
    <body class="hold-transition skin-red-light layout-boxed sidebar-mini">
      <!-- Site wrapper -->
      <div class="wrapper">

        <header class="main-header">
         @include('backend.includes.navbar')
       </header>

       <!-- =============================================== -->

       <!-- Left side column. contains the sidebar -->
       <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        @include('backend.includes.sidebar')
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Welcome To Dashboard
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Dashboard</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          @yield('home')
          

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->


      @include('backend.includes.footer')
      
      <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
       <div class="control-sidebar-bg"></div>
     </div>
     <!-- ./wrapper -->

     @include('backend.includes.footerlink')
    </body>
    </html>
