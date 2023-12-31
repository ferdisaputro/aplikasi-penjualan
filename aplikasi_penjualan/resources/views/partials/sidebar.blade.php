<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
   <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
         <li class="nav-item">
            <a class="nav-link {{ Request::is('beranda')? 'active' : '' }}" aria-current="page" href="/">
               <span data-feather="home" class="align-text-bottom"></span>
               Beranda
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link {{ Request::is('penjualan') || Request::is('penjualan/*')? 'active' : '' }}" href="/penjualan">
               <span data-feather="shopping-cart" class="align-text-bottom"></span>
               Penjualan
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link {{ Request::is('pelanggan') || Request::is('pelanggan/*')? 'active' : '' }}" href="/pelanggan">
               <span data-feather="users" class="align-text-bottom"></span>
               Pelanggan
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link {{ Request::is('produk') || Request::is('produk/*')? 'active' : '' }}" href="/produk">
               <span data-feather="package" class="align-text-bottom"></span>
               Produk
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link {{ Request::is('supplier') || Request::is('supplier/*')? 'active' : '' }}" href="/supplier">
               <span data-feather="bar-chart-2" class="align-text-bottom"></span>
               Supplier
            </a>
         </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
         <span>Saved reports</span>
         <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
         </a>
      </h6>
      <ul class="nav flex-column mb-2">
         <li class="nav-item">
            <a class="nav-link" href="#">
               <span data-feather="file-text" class="align-text-bottom"></span>
               Bulan ini
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">
               <span data-feather="file-text" class="align-text-bottom"></span>
               3 bulan terakhir
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">
               <span data-feather="file-text" class="align-text-bottom"></span>
               Banyak pengunjung
            </a>
         </li>
      </ul>
   </div>
</nav>