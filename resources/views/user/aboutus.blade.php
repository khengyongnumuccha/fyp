<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <nav class="navbar">
        <div class="logo"><a href="{{ url('/') }}"><i class="fas fa-paw"></i><br>PawFect Match</a></div>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>

        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('aboutus') }}">About Us</a></li>
            <li><a href="{{ route('adopt') }}">Pet Adoption</a></li>
            <li><a href="{{ route('donate') }}">Donate</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>

    <div class="content">
        <div class="first">
            <div class="main">
                <h1>About Us</h1>
                <p>At Pawfect Match, we are committed to creating a brighter future for animals in need.
                    Our team works tirelessly to connect loving homes with pets in search
                    of a second chance.</p>
            </div>
            <div class="car">
                <img src="image/dog3.png" alt="">
            </div>
        </div>

        <div class="second">
            <div class="image">
                <img src="image/dog4.png" alt="">
            </div>
            <div class="desc">
                <h2>Rescue, Foster And Adopt</h2>
                <p>We rescue animals in need, offering them a second chance at life
                    by providing loving foster care, medical attention, and rehabilitation.
                    Our mission is to create a safe and nurturing environment for every animal until
                    they find their forever homes. At PawFect Match, we believe every pet deserves love,
                    care, and companionship. Our platform connects
                    compassionate individuals with pets in need, encouraging adoption, fostering, and community support.
                </p>
            </div>
        </div>

        <div class="team">
            <h1>Our Team</h1>
            <section class="container">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="image/girl.jpg" alt="Shayla">
                            <div class="name">Luna</div>
                            <div class="gender">Founder</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="image/boy.jpg" alt="Rocky">
                            <div class="name">Amir</div>
                            <div class="gender">Co - Founfer</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="image/girl2.jpg" alt="Yumi">
                            <div class="name">Priya</div>
                            <div class="gender"> Rescue Volunteer</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="image/boy2.jpg" alt="Yumi">
                            <div class="name">Firoz</div>
                            <div class="gender"> Rescue Volunteer</div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </section>
        </div>

        <div class="help">
            <h1>Why Help PawFect Match?</h1>
            <div class="reasons">
                <div class="type">
                    <img src="image/educate1.png" alt="Educate">
                    <h2>We Educate</h2>
                    <p>PawFect Match fosters compassion between humans and animals by promoting responsible adoption,
                        supporting animal welfare, and raising awareness about stray and shelter animals.</p>
                </div>
                <div class="type">
                    <img src="image/cure.png" alt="Care">
                    <h2>We Care</h2>
                    <p>PawFect Match has grown from a small initiative to a platform helping countless pets find loving
                        homes and supporting shelters with care and compassion.</p>
                </div>
                <div class="type">
                    <img src="image/prevent.png" alt="Prevent">
                    <h2>We Prevent</h2>
                    <p>We ensure all rescued pets are spayed/neutered and vaccinated, promoting animal welfare and
                        preventing overpopulation and disease.</p>
                </div>
            </div>
        </div>

    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo">
                <i class="fas fa-paw"></i>
                <h2>PawFect Match</h2>
                <p>Let's make living worth</p>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Damak 7, Jhapa, Nepal</p>
                <p>+977 9876543271</p>
                <p>pawfectmatch@gmail.com</p>
            </div>
            <div class="footer-social">
                <p class="fb"><i class="fab fa-facebook"></i>PawFectMatch Foundation</p>
                <p class="insta"><i class="fab fa-instagram"></i>PawFectMatchFoundation</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper", {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 20,
            autoplay: {
                delay: 3000, // Auto-slide every 3 seconds
                disableOnInteraction: false, // Continue autoplay even after interaction
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }
        });
    </script>
</body>

</html>