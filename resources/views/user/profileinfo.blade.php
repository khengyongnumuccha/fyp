<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawFect Match</title>
    <link rel="stylesheet" href="{{ asset('css/profileinfo.css') }}">
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

    <!-- Slider -->
    <div class="content">
        <div class="count">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="image/car1.png" alt="Slide 1">
                    </div>
                    <div class="swiper-slide">
                        <img src="image/cat2.png" alt="Slide 2">
                    </div>
                    <div class="swiper-slide">
                        <img src="image/cat3.png" alt="Slide 3">
                    </div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="desc">
                <div class="name">
                    <h1>Name: Shayla</h1>
                    <p>Age: 1 year 15 months</p>
                    <p>Gender: Female</p>
                    <p>Breed: Tuxedo</p>
                    <p>Hobby: Playing, Roaming </p>
                    <p>Vaccinated: Yes</p>
                    <p>Size: Medium</p>
                </div>

                <div class="detail">
                    <p>Shayla is a sweet and calm cat who enjoys her own space.
                        She’ll appreciate your love and attention when she’s ready.
                        Adopt her if you have a gentle heart to offer.</p>
                </div>
                <div class="button">
                    <button><a href="{{ route('adoptform') }}">Adopt Shayla</a></button>
                </div>
            </div>


        </div>

        <div class="about">
            <h1>About Shayla</h1>
            <div class="facts">
                <div class="thing">
                    <p><i class="fas fa-paw"></i>Friendly With Other Cats</p>
                </div>
                <div class="thing">
                    <p><i class="fas fa-paw"></i>Bubbly</p>
                </div>
                <div class="thing">
                    <p><i class="fas fa-paw"></i>Friendly with humans</p>
                </div>
                <div class="thing">
                    <p><i class="fas fa-paw"></i>Energetic</p>
                </div>
                <div class="thing">
                    <p><i class="fas fa-paw"></i>Affectionate</p>
                </div>
            </div>
            <div class="story">
                <p>Shayla came to us a little unsure of the world,
                    but with time and love, she has become a calm and loving cat.
                    Now, she enjoys her quiet time, relaxing and being around those she trusts.
                    Shayla is a sweet and gentle companion, perfect for a family looking for
                    a relaxed and affectionate pet. If you think Shayla could be the one for you,
                    adopt her today!
                </p>
            </div>

            <div class="do">
                <div class="take">
                    <button><a href="{{ route('adoptform') }}">Adopt Shayla</a></button>
                </div>
                <div class="give">
                    <button><a href="{{ route('donateform') }}">Donate</a></button>
                </div>
            </div>

            <div class="reach">
                <p>For more information and to clear your doubts, <a href="{{ route('contact') }}">contact us.</a></p>
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
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 4000, // 4 seconds
                disableOnInteraction: false
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            }
        });
    </script>

</body>

</html>