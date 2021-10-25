 <!--start sidebar -->
 <aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Skodash</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="/admin/home" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-house-door"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="{{ route('categories.index') }}"><i class="bi bi-arrow-right-short"></i> Danh mục sản phẩm</a>
                </li>
                <li> <a href="{{ route('attributes.index') }}"><i class="bi bi-arrow-right-short"></i>Thuộc tính</a>
                </li>  
                <li> <a href="{{ route('brands.index') }}"><i class="bi bi-arrow-right-short"></i>Thương hiệu</a>
                </li>
                
            </ul>
        </li>
        
     
           
    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->