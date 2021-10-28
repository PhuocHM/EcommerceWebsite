 <!--start sidebar -->
 <aside class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
         <div>
             <img src="{{ asset('admin/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
         </div>
         <div>
             <h4 class="logo-text">Ecommerce</h4>
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
                 <div class="menu-title">Trang chủ</div>
             </a>
             <ul>
                 <li> <a style="text-decoration: none" href="{{ route('categories.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Danh mục sản phẩm</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('products.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Sản phẩm</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('productImages.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Hình ảnh sản phẩm</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('attributes.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Thuộc tính</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('brands.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Thương hiệu</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('productAttributes.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Thuộc tính sản phẩm</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('users.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Tài khoản khách hàng</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('suppliers.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Nhà cung cấp sản phẩm</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('stocks.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Kho</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('groups.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Nhóm chức vụ quản lý</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('employees.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Quản lý nhân sự</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('coupons.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Thẻ giảm giá</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('comments.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Bình luận của khách hàng</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('roles.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Vai trò quản lý</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('groupPermisions.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Phân quyền quản lý</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('orders.index') }}"><i
                             class="bi bi-arrow-right-short"></i>Đơn hàng</a>
                 </li>

             </ul>
         </li>



     </ul>
     <!--end navigation-->
 </aside>
 <!--end sidebar -->
