<!DOCTYPE html>
<html lang="en">
<?php include 'assets/includes/head.php';?>
<body>
    <!-- nav-section -->
    <?php include 'assets/includes/navbar.php';?>
    <?php
    function active($currect_page){
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  
    if($currect_page == $url){
        echo 'active-nav';
    } 
    }
    ?>

    <!-- section -1  -->
    <!-- <section class="prod-resp-mt prod-inner-s1 mx-auto">
        <div class="yellow-bg text-center prod-inner-s1-hdiv">
            <div class="text-center py-5">
                <h2 class="main-h2 fw-bold h-s1-h m-0 text-uppercase">Recipes</h2>
                <img class="mt-3 img-fluid" src="assets/images/h-decor.png" alt="">
            </div>
        </div>
    </section> -->
    
    <section class="mt-lg-4 mt-5 pt-5 pt-lg-0 pb-0 pb-lg-5">
        <div class="yellow-bg text-center">
            <div class="text-center py-5">
                <h2 class="main-h2 fw-bold h-s1-h m-0 text-uppercase">Recipes</h2>
                <img class="mt-3 img-fluid" src="assets/images/h-decor.png" alt="">
            </div>
        </div>
    </section>

    <!-- section-2  -->
    <section class="py-5 mb-0 mb-lg-5">
        <div class="container">
            <div class="text-start">
                <h2 class="main-h2 fw-bold fs-1 m-0 reci-s2-h">Biriyani</h2>
            </div>
            <div class="container mt-4">
                <div class="recipes-slide row text-center py-4">
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="recipes">
                            <img class="py-4" src="assets/images/h-s5-prdt-1.jpg" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="recipes_inner">
                            <img class="py-4" src="assets/images/h-s5-prdt-2.jpg" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="#">
                            <img class="py-4" src="assets/images/h-s5-prdt-3.jpg" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="#">
                            <img class="py-4" src="assets/images/h-s5-prdt-4.jpg" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="#">
                            <img class="py-4" src="assets/images/h-s5-prdt-3.jpg" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                </div>
                <div class="text-center d-block d-lg-none mb-4">
                    <img class="img-fluid" src="assets/images/carousel-line.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- section-3  -->
    <section class="py-5 mb-0 mb-lg-5">
        <div class="container">
            <div class="text-start">
                <h2 class="main-h2 fw-bold fs-1 m-0 reci-s2-h">Pulavu</h2>
            </div>
            <div class="container mt-4">
                <div class="recipes-slide row text-center py-4">
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="recipes">
                            <img class="py-4" src="assets/images/recips-pulav-1.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="#">
                            <img class="py-4" src="assets/images/recips-pulav-2.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="#">
                            <img class="py-4" src="assets/images/recips-pulav-3.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="#">
                            <img class="py-4" src="assets/images/recips-pulav-4.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="#">
                            <img class="py-4" src="assets/images/recips-pulav-3.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                </div>
                <div class="text-center d-block d-lg-none mb-4">
                    <img class="img-fluid" src="assets/images/carousel-line.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- section-4  -->
    <section class="py-5 mb-0 mb-lg-5">
        <div class="container-fluid p-0 brown-bg position-relative overflow-hidden">
            <img class="position-absolute recipes-s4-grain h-s1-grain-1" src="assets/images/h-s1-grain-img.png" alt="">
            <img class="position-absolute recipes-s4-grain-2 h-s1-grain-1" src="assets/images/h-s1-grain-img.png" alt="">
            <div class="container text-white text-center py-5">
                <h2 class="main-h2 fw-bold h-s1-h m-0 text-uppercase">Rice Tales</h2>
                <p class="body-p fw-normal fs-3 mt-2">rom its first cultivation around 10,000 years ago, rice has fed more people than any other grain. It has been closely linked with the evolution of human civilisation across continents. Let’s explore different aspects of rice and our association with the god of grain</p>
                <a class="text-decoration-none recipes-s4-a h-s6-img-label-a text-uppercase fs-5" href="#">Know More></a>
            </div>
        </div>
    </section>

    

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>
    <!-- J Query  -->
    <?php include 'assets/includes/jquery_slick.php';?>
    <!-- script -->
    <?php include 'assets/includes/common_script.php';?>
    <!-- slick slider -->
    <?php include 'assets/includes/java_slick.php';?>
</body>
</html>