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
    <section class="my-5 prod-resp-mt">
        <div class="yellow-bg text-center">
            <div class="text-center py-5">
                <h2 class="main-h2 fw-bold h-s1-h m-0 text-uppercase">Our Products</h2>
                <img class="mt-3 img-fluid" src="assets/images/h-decor.png" alt="">
            </div>
        </div>
    </section>

    <!-- section-2  -->
    <section class="my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-touch="true" data-bs-ride="carousel">
                        <div class="carousel-inner rounded-5">
                            <div class="carousel-item active">
                                <img src="assets/images/prod-inner-img.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/prod-inner-img.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-next-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" id="IconChangeColor" transform="scale(-1, 1)"> <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" id="mainIconPathAttribute" stroke="#ffffff" stroke-width="2"></path> </svg>
                            </span>                            
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" id="IconChangeColor"> <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" id="mainIconPathAttribute" stroke="#ffffff" stroke-width="2"></path> </svg>
                            </span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="pb-3">
                        <div class="prod-inner-s2-col2-h-div pb-4 pt-5 pt-lg-0">
                            <h2 class="text-end main-h2 fw-bold h-s1-h text-uppercase">Al hind</h2>
                            <p class="text-end main-h2 fw-normal fs-3 text-uppercase">Golden Sella</p>
                        </div>
                        <p class="text-end body-p fw-medium">is a variety of long, slender-grained aromatic rice which is traditionally grown in India.Basmati rice is believed to have been cultivated in the Indian subcontinent for centuries. Earliest mention of Basmati rice has been made in the epic Heer Ranjha composed by the Punjabi poet Varis Shah in 1766.India accounts for over 70% of the world's basmati rice production</p>
                        <img class="img-fluid" src="assets/images/prod-inner-border.png" alt="">
                    </div>
                    <div>
                        <p class="text-start main-h2 fw-normal fs-3 text-uppercase">AVAILABLE PACK</p>
                        <div class="position-relative">
                            <img src="assets/images/prod-inner-pack-no.png" alt="">
                            <h2 class="main-h2 fw-bold position-absolute translate-middle top-50 prod-inner-s2-col2-packno">30</h2>
                        </div>
                    </div>
                </div>
                <img class="img-fluid mt-5" src="assets/images/prod-inner-border.png" alt="">
            </div>
        </div>
    </section>

    <!-- section-3  -->
    <section class="my-5 pt-5">
        <div class="container-fluid p-0">
            <img class="position-absolute h-s3-grain" src="assets/images/h-s1-grain-img.png" alt="">
        </div>
        <div class="container">
            <div class="text-center position-relative mb-5 pb-3 mt-5">
                <p class="body-p fw-normal fs-4">We are a company that specializes in bringing you the finest products under five distinct brands - Akbar, Alhind, Alif Laila, Firdous, and Abusalam. Each brand has its unique focus, but all are united by a passion for quality and excellence.</p>
                <p class="body-p fw-normal fs-4">With our years of experience in the industry, we have become experts in bringing you the very best in [mention the types of products you offer]. Our commitment to exceptional quality, attention to detail, and customer satisfaction has made us a trusted name in the industry. Thank you for choosing our products, and we look forward to bringing you the very best that our brands have to offer.</p>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>

    <!-- script -->
    <?php include 'assets/includes/common_script.php';?>
</body>
</html>