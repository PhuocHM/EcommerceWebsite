<!--start top header-->
<header class="top-header">
    <nav class="navbar">
        <div class="mobile-toggle-icon d-xl-none">
            <i class="bi bi-list"></i>
        </div>
        <div class="narbar d-none d-xl-block justufy-content-end">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
      
    </nav>
</header>
<!--end top header-->
