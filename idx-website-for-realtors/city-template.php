<?php
// Prevent direct access to this file
if (!isset($city)) {
    $base_url = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/6designs/' : '/';
    header('Location: ' . $base_url . '404.php');
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $city['name']; ?> Real estate website for realtors | IDX & VOW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <meta name="title" content="<?php echo $city['name']; ?> Real estate website for realtors | IDX & VOW">
    <meta name="description" content="<?php echo $city['name']; ?> Real estate website for realtors | IDX & VOW">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sixdesign.ca/">
    <meta property="og:title"
        content="Project Marketing, CRM Integration  & Branding for Realtors, Brokerages & Builders">
    <meta property="og:description"
        content="Stand Out From The Crowd. Need a beautiful website ? No website is too small or big for us!">
    <meta property="og:image" content="https://sixdesign.ca/images/sixdesign-logo.svg">

    <link rel="stylesheet" href="<?php echo $base_url; ?>css/silverBox.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url; ?>apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url; ?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url; ?>favicon-16x16.png">
    <link rel="manifest" href="<?php echo $base_url; ?>site.webmanifest">
</head>

<body>
    <?php include_once('../components/header.php'); ?>

    <section>
        <div class="mt-5 px-2">
            <h1 class="text-center pt-md-5 d-flex justify-content-center align-items-center">
                <?php echo $city['name']; ?> Real Estate Website for Realtors | IDX & VOW
            </h1>
            <div class="d-flex justify-content-center align-items-center">
                <p class="textt pt-5 mx-4">
                    <b>Are you a Real estate agent in <?php echo $city['name']; ?> and looking for IDX website
                        displaying properties listed
                        on <?php echo $city['name']; ?>? </b>
                    <br><br>
                    The IDX (Internet Data Exchange) website for realtors is a powerful and indispensable tool in the
                    real estate industry. IDX websites provide real estate professionals with the ability to display a
                    comprehensive and up-to-date database of property listings directly on their websites, allowing
                    potential buyers and sellers to easily access information on available properties.
                    <br><br>
                    If you are real estate agent in <?php echo $city['name']; ?> and looking to build a Resale website
                    look no further,
                    Sixdesign can help you build a good real estate website. We can complete the task in as less as 3
                    days.
                    <br><br>
                </p>
            </div>

            <br>
            <div class="">
                <h2 class="text-center pt-md-5 d-flex justify-content-center align-items-center">Why is IDX website
                    important for realtors in <?php echo $city['name']; ?>?</h2>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <p class="d-flex textt mx-4 pt-4">
                    These websites are essential for realtors, as they not only enhance the user experience but also
                    help in generating leads and increasing the online presence of real estate agents. With customizable
                    search features, property details, and high-quality images, IDX websites make it convenient for both
                    realtors and clients to navigate the world of real estate and find the perfect home or property,
                    making them an invaluable asset for anyone in the real estate business.
                </p>
            </div>

            <div class="pt-5 container textt">
                <div class="row row-cols-2 row-cols-md-2">
                    <div class="col">
                        <a href="https://tonyning.ca/" target="_blank" class="text-decoration-none">
                            <div class="afte">
                                <img src="<?php echo $base_url; ?>images/2.png" alt="Tony Ning"
                                    class="img-fluid rounded-mine imghei">
                                <div class="img-text"></div>
                            </div>
                            <div class="img-text">
                                <p class="img-text">Tony Ning</p>
                            </div>
                        </a>
                    </div>

                    <div class="col">
                        <a href="https://shrutidua.com/" target="_blank" class="text-decoration-none">
                            <div class="afte">
                                <img src="<?php echo $base_url; ?>images/4.png" alt="Shruti Dua"
                                    class="img-fluid rounded-mine imghei">
                                <div class="img-text"></div>
                            </div>
                            <div class="img-text">
                                <p class="img-text">Shruti Dua</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <a href="https://www.sixdesign.ca/difference-between-idx-and-vow/" target="_blank"
                    class="text-decoration-none text-dark">
                    <h2 class="text-center pt-md-5 d-flex justify-content-center align-items-center">What Is the
                        Difference Between IDX and VOW?</h2>
                </a>

                <div class="d-flex justify-content-center align-items-center">
                    <p class="textt pt-4 mx-4">When it comes to real estate websites, you may have encountered terms
                        like IDX and VOW. Both play crucial roles in helping buyers and sellers connect in the digital
                        real estate landscape, but they serve different purposes and have distinct features. In this
                        article, we'll dive into the key differences between IDX (Internet Data Exchange) and VOW
                        (Virtual Office Website) to help you better understand their functions and benefits.
                </div>

                <div class="d-flex textt">
                    <h2 class="pt-5 textt mx-4">IDX (Internet Data Exchange):</h2>
                </div>

                <div class="d-flex justify-content-center align-items-center">
                    <ol class="textt pt-3 mx-4 ">
                        <li class="pb-2"><b>Broker Cooperation:</b> IDX primarily facilitates cooperation among real
                            estate brokers and agents. It allows them to share property listings from multiple brokers
                            on their websites. This fosters collaboration within the industry and ensures that buyers
                            have access to a wide range of listings.</li>
                        <li class="pb-2"> <b> Property Search:</b> IDX enables users to search for properties listed by
                            multiple brokers in a specific area. Users can filter results based on various criteria such
                            as price range, property type, location, and more. This makes it a powerful tool for
                            homebuyers looking for their dream home.</li>
                        <li class="pb-2"><b>Limited Information:</b> IDX typically provides limited property information
                            to the public. Users can view property details, photos, and contact the listing agent for
                            more information. However, certain sensitive information, such as seller contact details,
                            may be restricted.</li>
                        <li class="pb-2"><b>Consumer-Friendly:</b> IDX is designed to be consumer-friendly, making it
                            easy for homebuyers and sellers to search for properties and connect with real estate
                            professionals.</li>
                    </ol>
                </div>
                <br>
                <div class="d-flex textt">
                    <h2 class="pt-5 textt mx-4">VOW (Virtual Office Website):</h2>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <ol class="textt pt-3 mx-4">
                        <li class="pb-2"><b>Direct Access to MLS:</b> VOW websites, on the other hand, offer direct
                            access to the Multiple Listing Service (MLS). This means that users can access more detailed
                            and comprehensive property information, including historical data, property history, and
                            even information on properties not currently on the market.</li>
                        <li class="pb-2"> <b>Registration Required:</b> To access the full range of information
                            available on VOW websites, users typically need to register or create an account. This
                            allows real estate professionals to capture leads and provide personalized services.</li>
                        <li class="pb-2"><b>Enhanced Property Data:</b> VOW websites provide in-depth property
                            information, including past sales, price changes, and property history. This wealth of
                            information can be invaluable for serious homebuyers and investors.</li>
                        <li class="pb-2"><b>Agent Collaboration: </b> VOWs often encourage users to work closely with a
                            specific agent or broker. These platforms may offer advanced search options and tools for
                            collaborating with real estate professionals.</li>
                    </ol>
                </div>
            </div>
    </section>
    <div class="my-5  py-md-3 py-1" id="Contact"></div>
    <div class="pt-5 mt-5" data-aos="fade-up" data-aos-duration="2000">
        <div class="row mx-0 ">
            <img src="<?php echo $base_url; ?>images/contact-img.webp" loading="lazy" class="img-fluid cnt-img" alt="">
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
                            <div class="mb-3 "><input type="text" aria-describedby="emailHel" placeholder="Phone"
                                    name="phone" class="fields"></div>
                        </div>
                        <div class="col">
                            <div class="mb-3 "><input type="text" aria-describedby="emailHelp" placeholder="Email"
                                    name="email" class="fields"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" "><textarea name="message" id="message" placeholder="Enter your message"
                                class="fields mess"></textarea></div>
                    </div>
                    <div class="row">
                        <p class=" text-muted sm-text text-center">I consent to receive future communications about
                            Sixdesigns. I understand I can opt out at anytime by sending an email.</p>
                    </div>
                    <div class="row">
                        <div class="col text-center"><input type="submit" value="Send"
                                class="btn call-btn btn-sm p-2 px-4 btn-lg" id="subbtn2">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row-cols-md-3"></div>
        </div>
    </div>
    <?php include_once('../components/floating-button.php'); ?>
    <?php include_once('../components/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        // Change navbar background color on scroll
        window.addEventListener('scroll', function () {
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