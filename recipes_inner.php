<!DOCTYPE html>
<html lang="en">
<?php include 'assets/includes/head.php';?>
<body class="bg-black">
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
    <section class="mt-lg-4 mt-5 pt-5 pt-lg-0 pb-0 pb-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="reci-inner-iframe-div position-relative overflow-hidden w-100">
                        <iframe class="reci-inner-iframe position-absolute start-0 end-0 top-0 bottom-0 w-100 h-100" src="https://www.youtube.com/embed/d0M_GcQE4gM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section-2  -->
    <section class="py-5 mb-0 mb-lg-5">
        <div class="container">
            <div class="text-white text-center">
                <h2 class="main-h2 fw-bold h-s1-h m-0 text-uppercase recipes-inner-s2-h">Recipes</h2>
                <p class="body-p fw-normal fs-4 mt-2">
                    Chicken - For the most flavor, I recommend using a bone-in skin-on piece of chicken such as thighs or drumsticks. Breast meat will work in a pinch, but it won't be as flavorful, and it will get dry due to the longer cooking time of this dish.
                </p>
                <p class="body-p fw-normal fs-4 mt-2">
                    Aromatics - The chicken is marinated with ginger garlic paste along with herbs and spices. As the chicken steams, it releases all these flavors into the rice.
                </p>
                <p class="body-p fw-normal fs-4 mt-2">
                    Herbs - I like to use fresh herbs like cilantro (a.k.a. coriander leaves), and fresh mint leaves in my marinade for the chicken. These also make for a nice garnish to sprinkle on top of the Chicken Biryani, so be sure to chop up a little extra.
                </p>
                <p class="body-p fw-normal fs-4 mt-2">
                    Spices - I use ground spices like garam masala and ground cinnamon for the chicken marinade. If you can find it, Biryani masala works well too. For the rice, I include whole spices such as green cardamom, cumin, and bay leaves. I also sometimes like to add some cloves or star anise here. The yellow color in the rice comes from saffron, but if you can't find it, turmeric makes a suitable substitute
                </p>
                <p class="body-p fw-normal fs-4 mt-2">
                    Onions - Along with the chicken and rice, the third component of Biryani is fried onions, and I like to have a lot of them.
                </p>
                <p class="body-p fw-normal fs-4 mt-2">
                    Ghee - Ghee is butter with the milk proteins and water removed, making it clear. This is why it's also called "clarified butter." It gives you the flavor of butter without worrying about the milk solids burning.
                </p>
                <p class="body-p fw-normal fs-4 mt-2">
                    Chili Peppers - I usually use fresh green chilies in my marinade for the chicken to add some heat to this dish, but red chili powder will work as well.
                </p>
                <p class="body-p fw-normal fs-4 mt-2">
                    Rice - Biryani should always be made with long-grain rice. I recommend using basmati.
                </p>
            </div>
        </div>
    </section>

    

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>
    <!-- script -->
    <?php include 'assets/includes/common_script.php';?>
</body>
</html>