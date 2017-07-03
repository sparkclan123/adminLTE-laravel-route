 
 <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->user()->name }}</p>
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
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Manu</span>
           
            </span>
          </a>
       
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-child"></i>
            <span>จัดการสมาชิก</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/pages/member/add"><i class="fa fa-circle-o"></i> เพิ่มสมาชิก</a></li>
            <li><a href="/pages/member/list"><i class="fa fa-circle-o"></i> รายชื่อสมาชิก</a></li>
         
          </ul>

           <li class="treeview">
          <a href="#">
            <i class="fa fa-credit-card"></i>
            <span>เเจ้งฝากเงิน</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/pages/balance/deposit"><i class="fa fa-circle-o"></i> เเจ้งฝากเงิน</a></li>
            <li><a href="/pages/balance/list"><i class="fa fa-circle-o"></i> รายการฝากเงิน</a></li>
            <li><a href="/pages/balance/edit"><i class="fa fa-circle-o"></i> เเก้ไขรายการฝากเงิน</a></li>
         
          </ul>
       
    </section>