 <!--start sidebar -->
 <aside class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
         <div>
             <img src="{{ asset('admin/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
         </div>
         <div>
             <a href="{{ route('home') }}">
                 <h4 class="logo-text">Horizon</h4>
             </a>
         </div>
     </div>
     </div>
     <!--navigation-->
     <ul class="metismenu" id="menu">
         @can('product-show', 'product-show')
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="fas fa-cubes"></i>
                 </div>
                 <div class="menu-title">Quản lí sản phẩm</div>
             </a>
             <ul>
                 <li> <a style="text-decoration: none" href="{{ route('categories.index') }}"><i class="bi bi-arrow-right-short"></i>Danh mục sản phẩm</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('products.index') }}"><i class="bi bi-arrow-right-short"></i>Sản phẩm</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('productImages.index') }}"><i class="bi bi-arrow-right-short"></i>Hình ảnh sản phẩm</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('brands.index') }}"><i class="bi bi-arrow-right-short"></i>Thương hiệu</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('attributes.index') }}"><i class="bi bi-arrow-right-short"></i>Thuộc tính</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('productAttributes.index') }}"><i class="bi bi-arrow-right-short"></i>Thuộc tính sản phẩm</a>
                 </li>

                 <li> <a style="text-decoration: none" href="{{ route('suppliers.index') }}"><i class="bi bi-arrow-right-short"></i>Nhà cung cấp</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('stocks.index') }}"><i class="bi bi-arrow-right-short"></i>Kho</a>
                 </li>
             </ul>
         </li>
         @endcan
         @can('discount-show', 'discount-show')
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="fas fa-money-bill-wave"></i>
                 </div>
                 <div class="menu-title">Quản lí khuyến mãi</div>
             </a>
             <ul>
                 <li> <a style="text-decoration: none" href="{{ route('discounts.index') }}"><i class="bi bi-arrow-right-short"></i>Chiết Khấu</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('discountProduct.index') }}"><i class="bi bi-arrow-right-short"></i>Chiết Khấu sản phẩm</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('coupons.index') }}"><i class="bi bi-arrow-right-short"></i>Thẻ giảm giá</a>
                 </li>
             </ul>
         </li>
         @endcan
         @can('order-show', 'order-show')
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="fas fa-file-invoice-dollar"></i>
                 </div>
                 <div class="menu-title">Quản lí đơn hàng</div>
             </a>
             <ul>
                 <li> <a style="text-decoration: none" href="{{ route('orders.index') }}"><i class="bi bi-arrow-right-short"></i>Thông tin đơn hàng</a>
                 </li>
             </ul>
         </li>
         @endcan
         @can('customer-show', 'customer-show')
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="fas fa-users"></i>
                 </div>
                 <div class="menu-title">Quản lí khách hàng</div>
             </a>
             <ul>
                 <li> <a style="text-decoration: none" href="{{ route('users.index') }}"><i class="bi bi-arrow-right-short"></i>Tài khoản khách hàng</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('customers.index') }}"><i class="bi bi-arrow-right-short"></i>Khách hàng</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('comments.index') }}"><i class="bi bi-arrow-right-short"></i>Khách hàng Review SP</a>
                 </li>
             </ul>
         </li>
         @endcan
         @can('employee-show', 'employee-show')
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="fas fa-user-shield"></i>
                 </div>
                 <div class="menu-title">Quản lí nhân sự</div>
             </a>
             <ul>
                 <li> <a style="text-decoration: none" href="{{ route('employees.index') }}"><i class="bi bi-arrow-right-short"></i>Nhân sự</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('groups.index') }}"><i class="bi bi-arrow-right-short"></i>Nhóm chức vụ quản lý</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('roles.index') }}"><i class="bi bi-arrow-right-short"></i>Vai trò quản lý</a>
                 </li>
                 <li> <a style="text-decoration: none" href="{{ route('groupPermisions.index') }}"><i class="bi bi-arrow-right-short"></i>Phân quyền quản lý</a>
                 </li>
             </ul>
         </li>
         @endcan
     </ul>
     <!--end navigation-->
 </aside>
 <!--end sidebar -->
