<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
    <title>Document</title>
</head>

<body>

    <aside id="adminSidebar" class="sidebar shadow-sm">
        <div class="brand">
            <img src="" alt="Logo">
        </div>


        <nav class="p-3">
            <ul class="nav flex-column gap-1">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#" data-section="dashboard"><i
                            class="fa-solid fa-house fa-fw me-2"></i><span class="menu-text">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#" data-section="products"><i
                            class="fa-solid fa-boxes-stacked fa-fw me-2"></i><span class="menu-text">Products</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#" data-section="orders"><i
                            class="fa-solid fa-receipt fa-fw me-2"></i><span class="menu-text">Orders</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#" data-section="orders_item"><i
                            class="fa-solid fa-list fa-fw me-2"></i><span class="menu-text">Orders Item</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#" data-section="categories"><i
                            class="fa-solid fa-layer-group fa-fw me-2"></i><span class="menu-text">Category</span></a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link d-flex align-items-center" href="#" data-section="create_staff"><i
                            class="fa-solid fa-user-plus fa-fw me-2"></i><span class="menu-text">Create Account
                            Staff</span></a>
                </li>
            </ul>
        </nav>
    </aside>


    <!-- MAIN (to the right of sidebar) -->
    <div id="mainWrap" class="main-wrapper">
        <!-- TOPBAR / HEADER -->
        <header id="topbar" class="topbar d-flex align-items-center">
            <div class="d-flex align-items-center gap-2">
                <button id="btnToggle" class="btn btn-sm btn-outline-secondary d-flex align-items-center"><i
                        class="fa-solid fa-bars"></i><span class="ms-2 d-none d-md-inline">Menu</span></button>
                <button id="btnMobileOpen" class="btn btn-sm btn-outline-primary d-md-none"><i
                        class="fa-solid fa-bars"></i></button>
            </div>


            <div class="d-flex align-items-center gap-3">
                <div class="d-flex align-items-center">
                    <div class="avatar-circle me-2">A</div>
                    <div class="d-none d-sm-block text-end">
                        <div class="fw-semibold">Admin User</div>
                        <div class="small text-muted">Administrator</div>
                    </div>
                </div>
            </div>
        </header>


        <!-- Content area (below header) -->
        <main class="content-area">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
        crossorigin="anonymous"></script>
    <script src="js/sidebar.js">
    </script>
</body>

</html>