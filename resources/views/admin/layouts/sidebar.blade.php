 <div id="layoutSidenav_nav">
     <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
         <div class="sb-sidenav-menu">
             <div class="nav">
                 <div class="sb-sidenav-menu-heading">Core</div>
                 <a class="nav-link" href="{{ route('dashboard') }}">
                     <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                     Dashboard
                 </a>

                 <a class="nav-link" href="{{ route('products') }}">
                     <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                     Products
                 </a>

                 <a class="nav-link" href="{{ route('students') }}">
                     <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                     Students
                 </a>
                 
             </div>
         </div>
         <div class="sb-sidenav-footer">
             <div class="small">Logged in as:</div>
             user
         </div>
     </nav>
 </div>
