    <section class="pb-5 pb-lg-0">
        <div class="container">
            <!-- desktop-nav  -->
            <div class="d-none d-lg-block">
                <div class="desk-nav rounded-pill position-relative p-5 pb-3">
                    <div class="position-absolute top-0 start-50 translate-middle">
                        <a href="index"><img src="assets/images/logo.svg" alt=""></a>
                    </div>
                    <div class="d-flex body-p mt-4 justify-content-evenly">
                        <a class="blk-prime text-decoration-none px-4 py-2 rounded-pill bg-white border border-2 fs-5 nav-a <?php active('index');?>" href="index">Home</a>
                        <a class="blk-prime text-decoration-none px-4 py-2 rounded-pill bg-white border border-2 fs-5 nav-a <?php active('about');?>" href="#">About</a>
                        <a class="blk-prime text-decoration-none px-4 py-2 rounded-pill bg-white border border-2 fs-5 nav-a <?php active('products');?>" href="products">Products</a>
                        <a class="blk-prime text-decoration-none px-4 py-2 rounded-pill bg-white border border-2 fs-5 nav-a <?php active('recipes');?>" href="recipes">Recipes</a>
                        <a class="blk-prime text-decoration-none px-4 py-2 rounded-pill bg-white border border-2 fs-5 nav-a <?php active('contact');?>" href="#">Contact</a>
                    </div>
                </div>
            </div>
            <!-- responsive-nav -->
            <div class="d-block d-lg-none">
                <nav class="navbar resp-nav fixed-top">
                    <div class="container-fluid">
                        <a class="navbar-brand ms-3" href="index"><img class="w-75 resp-nav-logo-1" src="assets/images/logo.svg" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <img style="width:36px;" src="assets/images/resp-toggle.png" alt="">
                        </button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img class="w-50" src="assets/images/logo.svg" alt=""></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 text-center fs-5 body-p fw-medium">
                                    <li class="nav-item">
                                        <a class="nav-link rounded-5 <?php active('index');?>" href="index">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link rounded-5 <?php active('about');?>" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link rounded-5 <?php active('products');?>" href="products">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link rounded-5 <?php active('recipes');?>" href="recipes">Recipes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link rounded-5 <?php active('contact');?>" href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>    