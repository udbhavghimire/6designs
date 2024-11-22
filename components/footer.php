<?php
$base_url = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/6designs/' : '/';
?>

<img src="../images/mouse.png" class="foot-up-img" alt="" data-aos="fade-up" data-aos-duration="2000">
<footer class="footerr  my-md-5 my-5 py-5 ">
    <div class="container ">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 d-flex justify-content-between ">
            <div class="col-md-4 my-3 mb-5 fotwidth center-sm px-4 px-md-0">
                <p class="navbar-brand ">
                    <img src="../images/sixdesign-logo.svg" class="img-fluid footer-logo navbar-brand"
                        alt="Sixdesigns logo">
                </p>
                <span class="small-text">

                    We specialize in creating high-quality websites, captivating landing pages, and visually appealing
                    designs tailored for realtors, brokerages, and builders. Please note that the information provided
                    on this website is for general reference only, and we cannot be held liable for any misuse of the
                    content, including copyrighted materials such as logos and images from builders
                    <div>

                    </div>
            </div>


            <div class="col-md-3 mt-md-5 pt-4 mx-md-3 mb-3 center-sm d-flex justify-content-center">
                <div>
                    <h5 class="text-dark fw-bold  ">About</h5>
                    <div class="list d-block ">
                        <p class="mybot ">
                            Company : Sixdesign
                        </p>

                        <p class="mybot ">
                            Services : Project Marketing, CRM Integration & Branding for Realtors, Brokerages &
                            Builderss
                        </p>
                        <p class="mybot ">
                            Contact : 647-527-4970
                        </p>

                    </div>

                </div>
            </div>

            <!-- <div class="col mt-md-5 pt-md-5 mt-sm-0 pt-sm-0  ">
                    <img src="images/istockphoto-500558937-612x612.jpg " class="img-fluid navbar-brand-sm" alt="plant image">
                </div> -->
            <div class="col-md-3 mt-5 mt-md-4 pt-md-0 pt-3 px-4 center-sm ">
                <h5 class="text-dark fw-bold">Idx Website for Realtors</h5>
                <ul class="list-unstyled">
                    <li class="py-2 "><a href="<?php echo $base_url; ?>toronto-idx-website-for-realtors/"
                            class="text-decoration-none hover-red">Toronto Real Estate Website</a></li>
                    <li class="py-2 "><a href="<?php echo $base_url; ?>brampton-idx-website-for-realtors/"
                            class="text-decoration-none hover-red">Brampton Real Estate Website</a></li>
                    <li class="py-2 "><a href="<?php echo $base_url; ?>mississauga-idx-website-for-realtors/"
                            class="text-decoration-none hover-red">Mississauga Real Estate Website</a></li>
                    <li class="py-2 "><a href="<?php echo $base_url; ?>edmonton-idx-website-for-realtors/"
                            class="text-decoration-none hover-red">Edmonton Real Estate Website</a></li>
                    <li class="py-2 "><a href="<?php echo $base_url; ?>vancouver-idx-website-for-realtors/"
                            class="text-decoration-none hover-red">Vancouver Real Estate Website</a></li>
                    <li class="py-2 "><a href="<?php echo $base_url; ?>calgary-idx-website-for-realtors/"
                            class="text-decoration-none hover-red">Calgary Real Estate Website</a></li>
                    <li class="py-2 "><a href="<?php echo $base_url; ?>ottawa-idx-website-for-realtors/"
                            class="text-decoration-none hover-red">Ottawa Real Estate Website</a></li>
                    <li class="py-2 "><a href="<?php echo $base_url; ?>regina-idx-website-for-realtors/"
                            class="text-decoration-none hover-red">Regina Real Estate Website</a></li>
                    <li class="py-2 "><a href="<?php echo $base_url; ?>winnipeg-idx-website-for-realtors/"
                            class="text-decoration-none hover-red">Winnipeg Real Estate Website</a></li>

                </ul>
            </div>
        </div>
        <div>
            <div class="d-flex justify-content-center pt-5 pt-md-0 row row-cols-md-3 row-cols-1 px-md-0 px-2">
                <div class="col ">
                    <form action="./contactForm.php" method="POST">
                        <h6 class="fs-5 fw-bold py-2 register text-center">SUBSCRIBE TO NEWSLETTER</h6>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><input type="text" aria-describedby="emailHelp" placeholder="Name"
                                        name="name" class="fields"></div>
                            </div>
                            <div class="col">
                                <div class="mb-3"><input type="text" aria-describedby="emailHel" placeholder="Email"
                                        name="email" class="fields"></div>
                            </div>
                        </div>
                        <div class="row mx-1">
                            <input type="submit" value="Subscribe Now" class="btn call-btn btn-sm p-3 btn-lg"
                                id="subbtn2">
                            <div class="d-flex justify-content-center align-items-center pt-3">
                                <a href="https://www.instagram.com/sixdesign_ca/" target="_blank"><img
                                        src="../images/instagram.svg" class="img-fluid" alt="instagram"></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center pt-5">
            <div class="list pt-3 col-12 text-center">
                <p><b>Designed with love by</b></p>
                <img src="../images/udbhav-black-signtaure.png" class="signature mt-0 " alt="">
            </div>
        </div>



    </div>
</footer>