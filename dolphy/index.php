<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dolphy | New PreConstruction Homes Platform in Canada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <meta name="title" content="Dolphy | Platform for New PreConstruction Homes in Canada ">
    <meta name="description" content="Dolphy.ca is a canada's leading platform for pre construction townhomes, condos & detached homes in Calgary. ">

    <!-- Open Graph / Facebook -->


    <link rel="stylesheet" href="../css/silverBox.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
   
    <link rel="manifest" href="../site.webmanifest">
    </head>

<body>
<?php include_once('../components/header.php');  ?>

<section>
    <div class = "container pt-5">
    <div class="d-flex justify-content-center align-content-center">
    <img src="../images/dolphy.png" class="img-fluid" alt="Dolphy.ca">
    </div>
   <p class=" pb-3 text-center textt px-2"><a href="https://dolphy.ca/pre-construction-homes/calgary" target="_blank" class="fw-bold">Dolphy.ca</a> is a canada's leading platform for pre construction townhomes, condos & detached homes in Calgary. Dolphy has the most updated information on upcoming and new projects happening in Calgary. </p></div>
 
</section>


<div class="my-5  py-md-3 py-1" id="Contact"></div>
    <div class="pt-5 mt-5" data-aos="fade-up" data-aos-duration="2000">
        <div class="row mx-0 ">
            <img src="../images/contact-img.webp" loading="lazy" class="img-fluid cnt-img" alt="">
            <!-- <h6 class="text-center fs-1 fw-bold pt-3 register "> Contact us today</h6> -->
            <div class="registertext  d-flex justify-content-center align-items-center  text-center px-5">
                <!-- <p>Need a beautiful website ? No website is too small or big for us!
                </p> -->
            </div>

        </div>
        <div class="row row-cols-1 row-cols-md-3 mx-0 g-5 pb-md-5">
            <div class="col-md-3 "></div>
            <div class="col-md-6 px-md-5 ">
                <form action="../contactForm.php" method="POST">
                    <div class="row ">
                        <div class="mb-3 "><input type="text" placeholder="Name" name="name" class="fields"></div>

                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 ">
                        <div class="col">
                            <div class="mb-3 "><input type="text" aria-describedby="emailHel" placeholder="Phone" name="phone" class="fields"></div>
                        </div>
                        <div class="col">
                            <div class="mb-3 "><input type="text" aria-describedby="emailHelp" placeholder="Email" name="email" class="fields"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" "><textarea name="message" id="message" placeholder="Enter your message" class="fields mess"></textarea></div>
                    </div>
                    <div class="row">
                        <p class=" text-muted sm-text text-center">I consent to receive future communications about Sixdesigns. I understand I can opt out at anytime by sending am email.</p>
                    </div>
                    <div class="row">
                        <div class="col text-center"><input type="submit" value="Send" class="btn call-btn btn-sm p-2 px-4 btn-lg" id="subbtn2">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row-cols-md-3"></div>
        </div>
    </div>
<?php include_once('../components/footer.php');  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
<script>
        // Change navbar background color on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 0) {
                navbar.classList.remove('transparent-navbar');
                navbar.classList.add('solid-navbar', 'navbar-brand-sm');
               

            } else {
                navbar.classList.remove('navbar-brand-sm');
                navbar.classList.remove('solid-navbar');
                navbar.classList.add('transparent-navbar');

            }
        });
    </script>
</body>

</html>