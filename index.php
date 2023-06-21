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
    <!-- banner section  -->
    <section class="mt-lg-4 mt-5 pt-5 pt-lg-0 pb-0 pb-lg-5">
        <div class="container">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-touch="true" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner rounded-5">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="assets/images/h-banner.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="assets/images/h-banner.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" id="IconChangeColor" transform="scale(-1, 1)"> <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" id="mainIconPathAttribute" stroke="#ffffff" stroke-width="0.5"></path> </svg>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" id="IconChangeColor"> <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" id="mainIconPathAttribute" stroke="#ffffff" stroke-width="0.5"></path> </svg>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- section-1  -->
    <section class="py-5 mb-0 mb-lg-5 position-relative">
        <img class="position-absolute h-s1-decor-1" src="assets/images/h-s1-rice-1.png" alt="">
        <img class="position-absolute h-s1-decor-2 end-0" src="assets/images/h-s1-rice-2.png" alt="">
        <div class="container">
            <div>
                <h2 class="main-h fw-bold text-center blk-prime h-s1-h mx-auto max-w">Discover the Secret to Perfect Rice Every Time!</h2>
            </div>
            <div>
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="img-fluid" src="assets/images/h-s1-banner-img.png" alt="">
                    </div>
                    <div class="col-12">
                        <div class="rounded rounded-5 h-s1-yellow-div yellow-bg position-relative">
                            <div class="text-center">
                                <p class="body-p fw-bold fs-4 max-w mx-auto">We are a company that specializes in bringing you the finest products under five distinct brands - Akbar, Alhind, Alif Laila, Firdous, and Abusalam. Each brand has its unique focus, but all are united by a passion for quality and excellence.</p>
                                <p class="body-p fw-semibold mt-4">With our years of experience in the industry, we have become experts in bringing you the very best in [mention the types of products you offer]. Our commitment to exceptional quality, attention to detail, and customer satisfaction has made us a trusted name in the industry. Thank you for choosing our products, and we look forward to bringing you the very best that our brands have to offer.</p>
                                <div class="mt-5">
                                    <a class="d-inline-flex bg-white rounded-pill px-4 py-3 text-decoration-none align-items-center text-black h-s1-butn" href="#">
                                        <p class="body-p fw-semibold fs-5 m-0">Read our story</p>
                                        <img class="ms-3" src="assets/images/butn-icon.svg" alt="">
                                    </a>
                                </div>
                            </div>
                            <img class="position-absolute start-0 bottom-0 h-s1-grain-1" src="assets/images/h-s1-grain-img.png" alt="">
                            <img class="position-absolute end-0 bottom-0 h-s1-grain-2" src="assets/images/h-s1-grain-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 2  -->
    <section class="py-5 mb-0 mb-lg-5">
        <div class="container-fluid p-0 position-relative">
            <img class="position-absolute h-s2-rice-pack" src="assets/images/abusalam.png" alt="">
            <div class="h-s2-div brown-bg pb-5">
                <span class="h-s2-line-span d-block w-100 mb-5"></span>
                <div class="container">
                    <p class="body-p fw-normal text-white text-center fs-4 m-0">Basmati rice is a long-grain rice variety that is known for its fragrant aroma, delicate flavor, and fluffy texture. It is primarily grown in the Indian subcontinent, particularly in the northern regions of India, Pakistan, and Iran</p>
                </div>
            </div>
        </div>
    </section>

    <!-- section 3  -->
    <section class="py-5">
        <div class="container-fluid p-0">
            <div class="text-center position-relative mb-5 pb-3">
                <img class="position-absolute h-s3-grain" src="assets/images/h-s1-grain-img.png" alt="">
                <h2 class="main-h fw-bold blk-prime h-s1-h mx-auto max-w">Take a Look at What We Offer</h2>
                <img class="mt-3 img-fluid" src="assets/images/h-decor.png" alt="">
            </div>
            <div class="brown-bg py-5 mt-5 position-relative h-s3-div">
                <img class="position-absolute h-s3-rice-pack-1" src="assets/images/akbarcityxxl.png" alt="">
                <img class="position-absolute h-s3-rice-pack-2" src="assets/images/alfirdous.png" alt="">
                <div class="container">
                    <p class="body-p fw-normal text-white text-center fs-4 mt-5">Rice is a staple food for millions of people around the world. It provides a source of carbohydrates, vitamins, and minerals that are essential for human health. However, ensuring access to rice can be challenging, especially in regions where it is not locally produced or where supply chains are weak. This is where rice companies play a crucial role in ensuring the availability and accessibility of rice produts.</p>
                    <p class="body-p fw-normal text-white text-center fs-4">Rice companies are business entities that specialize in the production, processing, and distribution of rice products. They may engage in the cultivation of rice by operating rice farms, or they may source rice from farmers and rice mills. The rice is then processed to remove the husk, bran, and germ, and packaged for distribution. In addition to producing and distributing rice, a rice company may also manufacture rice-based products such as rice flour, rice noodles, rice snacks, and rice-based beverages.</p>
                    <p class="body-p fw-normal text-white text-center fs-4 mb-5">Marketing and distribution are key factors in the success of rice companies. They need to ensure that their products reach consumers through various channels such as supermarkets, wholesalers, and online marketplaces. This requires building strong partnerships with retailers and logistics providers, as well as investing in branding and advertising to raise awareness and build trust among consumers.</p>
                </div>
            </div>
            <div class="h-s3-ban-div"></div>
        </div>
    </section>

    <!-- section-4  -->
    <section class="py-5 mb-0 mb-lg-5">
        <div class="container">
            <div class="text-center">
                <h2 class="main-h2 fw-bold mx-auto max-w fs-1 m-0 text-uppercase">Our Products</h2>
                <p class="body-p fw-medium">Our range of finest basmati rice comes from thousands of rice growers across India</p>
                <img class="mt-3 img-fluid" src="assets/images/h-decor.png" alt="">
            </div>
            <div class="container mt-5">
                <div class="product-slide row text-center py-4">
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="kaima">
                            <img class="h-s4-product-img" src="assets/images/aliflaila.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="basmati">
                            <img class="h-s4-product-img" src="assets/images/alhind.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al Hind</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="kolam">
                            <img class="h-s4-product-img" src="assets/images/abusalam.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Abu Salam</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="kaima">
                            <img class="h-s4-product-img" src="assets/images/akbarcity-jeera.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Akbar city</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="basmati">
                            <img class="h-s4-product-img" src="assets/images/akbarcity-rozana.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Akbar city</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="basmati">
                            <img class="h-s4-product-img" src="assets/images/akbarcity-rozana-green.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Akbar city</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="basmati">
                            <img class="h-s4-product-img" src="assets/images/akbarcityxxl.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Akbar city</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="basmati">
                            <img class="h-s4-product-img" src="assets/images/akbarcity-xxl-green.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Akbar city</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="basmati">
                            <img class="h-s4-product-img" src="assets/images/alhind-biriyani-blue.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al hind</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="basmati">
                            <img class="h-s4-product-img" src="assets/images/alhind-bukhari.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al hind</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="basmati">
                            <img class="h-s4-product-img" src="assets/images/alhind-super.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al hind</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="basmati">
                            <img class="h-s4-product-img" src="assets/images/alhind-whitesella.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al hind</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="basmati">
                            <img class="h-s4-product-img" src="assets/images/alkilal-orange.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al qilal</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="basmati">
                            <img class="h-s4-product-img" src="assets/images/alqilal-basmathi.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al qilal</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="basmati">
                            <img class="h-s4-product-img" src="assets/images/alqilal-blck.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al qilal</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="basmati">
                            <img class="h-s4-product-img" src="assets/images/alqilal-green.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al qilal</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="kaima">
                            <img class="h-s4-product-img" src="assets/images/alqilal-jeerakam.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al qilal</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="kolam">
                            <img class="h-s4-product-img" src="assets/images/alqilal-kolam.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al qilal</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="kolam">
                            <img class="h-s4-product-img" src="assets/images/alfirdous.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al firdous</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="basmati">
                            <img class="h-s4-product-img" src="assets/images/akbarcity-xxl-green.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Akbar city</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="kaima">
                            <img class="h-s4-product-img" src="assets/images/qilaf-jeerakam-brown.png" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Qilaf</h5>
                        </a>
                    </div>
                </div>
                <div class="text-center d-block d-lg-none mb-4">
                    <img class="img-fluid" src="assets/images/carousel-line.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- section-5  -->
    <section class="py-5 mb-0 mb-lg-5">
        <div class="container">
            <div class="text-center">
                <h2 class="main-h2 fw-bold mx-auto max-w fs-1 m-0 text-uppercase">Recipes</h2>
                <p class="body-p fw-medium">Make lip-smacking dishes with our award winning products</p>
                <img class="mt-3 img-fluid" src="assets/images/h-decor.png" alt="">
            </div>
            <div class="container mt-5">
                <div class="recipes-slide row text-center py-4">
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="#">
                            <img class="py-4 recipes-caro-img" src="assets/images/h-s5-prdt-1.jpg" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="#">
                            <img class="py-4 recipes-caro-img" src="assets/images/h-s5-prdt-2.jpg" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="#">
                            <img class="py-4 recipes-caro-img" src="assets/images/h-s5-prdt-3.jpg" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="#">
                            <img class="py-4 recipes-caro-img" src="assets/images/h-s5-prdt-4.jpg" alt="">
                            <h5 class="body-p brown-bg px-5 py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                        </a>
                    </div>
                    <div class="h-s4-item">
                        <a class="h-pro-card-a" href="#">
                            <img class="py-4 recipes-caro-img" src="assets/images/h-s5-prdt-3.jpg" alt="">
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

    <!-- section-6  -->
    <section class="py-5 mb-0 mb-lg-5">
        <div class="container-fluid p-0">
            <div class="h-s6-ban-div">
                <div class="container position-relative">
                    <div class="brown-bg rounded-5 p-3 p-md-5 position-absolute text-center text-white h-s6-pos-div me-3">
                        <h2 class="main-h2 fw-bold h-s1-h m-0 text-uppercase">Rice Tales</h2>
                        <img class="mt-0 img-fluid" src="assets/images/h-decor-2.png" alt="">
                        <p class="body-p fw-normal text-white text-center fs-3 mt-2">rom its first cultivation around 10,000 years ago, rice has fed more people than any other grain. It has been closely linked with the evolution of human civilisation across continents. Let’s explore different aspects of rice and our association with the god of grain</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mt-5">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="position-relative h-s6-img-div">
                            <img class="img-fluid" src="assets/images/h-s6-img-1.jpg" alt="">
                            <div class="position-absolute h-s6-img-label">
                                <h3 class="main-h2 fw-bold text-white mb-1 text-uppercase">Ricing Since Century</h3>
                                <a class="text-decoration-none text-white h-s6-img-label-a text-uppercase" href="#">Know More></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative h-s6-img-div">
                            <img class="img-fluid" src="assets/images/h-s6-img-2.jpg" alt="">
                            <div class="position-absolute h-s6-img-label">
                                <h3 class="main-h2 fw-bold text-white mb-1 text-uppercase">Traditional</h3>
                                <a class="text-decoration-none text-white h-s6-img-label-a text-uppercase" href="#">Know More></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section-7  -->
    <section class="py-5 mb-0 mb-lg-5">
        <div class="container text-center">
            <h2 class="main-h2 fw-bold h-s1-h m-0 h-s7-head text-uppercase">Biriyani History</h2>
            <div class="brown-bg py-4 px-2 px-md-3 px-lg-5 rounded-5 position-relative">
                <img class="position-absolute h-s1-decor-1 h-s7-decor-1 start-0 d-none d-lg-block" src="assets/images/h-s1-rice-1.png" alt="">
                <img class="position-absolute h-s1-decor-2 h-s7-decor-2 end-0 d-none d-lg-block" src="assets/images/h-s1-rice-2.png" alt="">
                <div class="px-3 px-md-4 px-lg-5">
                    <p class="body-p fw-normal text-white fs-4 mt-5">The history of biryani can be traced back to the Mughal Empire, which ruled over the Indian subcontinent from the 16th to the 19th century. It is believed that the Mughal emperors and their royal kitchens played a significant role in the development of this dish.</p>
                    <p class="body-p fw-normal text-white fs-4">According to some historians, the biryani was introduced to India by the Persian travelers and traders who came to the country in the medieval era. The dish was originally prepared in the Persian style with meat, rice, and a blend of spices and herbs.</p>
                    <p class="body-p fw-normal text-white fs-4 mb-5">Over time, the biryani evolved and became popular across different regions of India, with each region adding its unique flavor and ingredients. For instance, the biryani in Hyderabad is known for its spicy and tangy taste, while the biryani in Lucknow is more delicate and fragrant.</p>
                </div>
                <div class="my-5">
                    <a class="d-inline-flex bg-white rounded-pill px-4 py-3 text-decoration-none align-items-center text-black h-s1-butn" href="#">
                        <p class="body-p fw-semibold fs-5 m-0">Read our story</p>
                        <img class="ms-3" src="assets/images/butn-icon.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- section-8  -->
    <section class="pt-5 mb-0 position-relative h-s3-div">
        <img class="position-absolute end-0 h-s8-ricepack-img" src="assets/images/h-s8-ricepack-img.png" alt="">
        <div class="container pb-5">
            <div class="mb-5">
                <h2 class="sp-font fw-medium blk-prime h-s1-h m-0 h-s8-sp-font-1 text-uppercase">Al Firdous</h2>
                <span class="body-p blk-prime fw-medium fs-5 m-0 text-uppercase">A Quality Food</span>
                <h2 class="sp-font fw-medium blk-prime h-s1-h m-0 h-s8-sp-font-1 h-s8-sp-font-2 text-uppercase">Foods</h2>
                <p class="body-p blk-prime fw-medium fs-6 m-0">#667,<br>GROUND FLOOR,<br>SECTOR 4, KARNAL,<br>HARIYANA, PIN<br>132001</p>
            </div>
            <div class="row gx-3 gx-lg-5 gy-4">
                <div class="col-md-4">
                    <div class="p-4 rounded-5 d-inline-flex flex-column bg-white text-center">
                        <h4 class="body-p fw-bold fs-3 text-uppercase">Contact Us</h4>
                        <img class="img-fluid" src="assets/images/h-s8-card-decor.png" alt="">
                        <p class="body-p blk-prime fw-medium fs-5 my-3 px-0 px-xl-5">biryani evolved and became popular across different regions of India,</p>
                        <a class="text-decoration-none body-p fw-medium mt-3 h-s8-card-a text-uppercase" href="#">Know More ></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-5 d-inline-flex flex-column bg-white text-center">
                        <h4 class="body-p fw-bold fs-3 text-uppercase">Future Plan</h4>
                        <img class="img-fluid" src="assets/images/h-s8-card-decor.png" alt="">
                        <p class="body-p blk-prime fw-medium fs-5 my-3 px-0 px-xl-5">biryani evolved and became popular across different regions of India,</p>
                        <a class="text-decoration-none body-p fw-medium mt-3 h-s8-card-a text-uppercase" href="#">Know More ></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-5 d-inline-flex flex-column bg-white text-center">
                        <h4 class="body-p fw-bold fs-3 text-uppercase">The Range</h4>
                        <img class="img-fluid" src="assets/images/h-s8-card-decor.png" alt="">
                        <p class="body-p blk-prime fw-medium fs-5 my-3 px-0 px-xl-5">biryani evolved and became popular across different regions of India,</p>
                        <a class="text-decoration-none body-p fw-medium mt-3 h-s8-card-a text-uppercase" href="#">Know More ></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="brown-bg h-s8-lower-div mt-5"></div>
    </section>

    <!-- section-9  -->
    <section class="mb-0 mb-lg-5">
        <div class="h-s9-bg">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="offset-lg-5 col-lg-7">
                        <div class="h-s9-div brown-bg p-2 p-md-3 p-lg-5 rounded-start-5 position-relative">
                            <img class="position-absolute h-s9-ricepack-img d-none d-md-block" src="assets/images/abusalam.png" alt="">
                            <img class="position-absolute h-s9-ricegrain-img d-none d-md-block" src="assets/images/h-s9-grain-decor.png" alt="">
                            <div class="h-s9-head-div">
                                <div class="text-center">
                                    <h2 class="main-h2 fw-bold fs-1 m-0 text-white text-uppercase">Grains of hope</h2>
                                    <img class="mt-3 img-fluid" src="assets/images/h-decor.png" alt="">
                                </div>
                            </div>
                            <p class="body-p fw-normal text-white fs-3 mt-5 mb-5 pb-5">A drive to bring a smile to every face and food on every plate. During the time of the pandemic, ‘Grains of Hope’ an initiative India Gate Foods was initiated for Mothers by ensuring the maximum number, receiving rice supply and benefited many families across the country.</p>
                            <img class="position-absolute end-0 bottom-0" src="assets/images/h-s9-grain-decor.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section-10  -->
    <section class="py-5 mb-5">
        <div class="container-fluid p-0">
            <div class="h-s10-ban-img"></div>
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