<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawFect Match</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/kk.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

    <nav class="navbar">
        <div class="logo"><i class="fas fa-paw"></i><br>PawFect Match</div>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>

        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/aboutus') }}">About Us</a></li>
            <li><a href="{{ url('/adopt') }}">Pet Adoption</a></li>
            <li><a href="{{ url('/donate') }}">Donate</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>

            @auth
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" style="border:none;background:none;color:#fff;cursor:pointer;">Logout</button>
                    </form>
                </li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endauth
        </ul>
    </nav>

    <div class="content">
        <div class="first">
            <div class="main">
                <h1>Adopt A Furry <br> Friend</h1>
                <p>"Open your heart and home to a friend who will love you unconditionally. Adopt a pet and begin a
                    journey filled with joy and companionship."</p>
                <div class="search-container">
                    <input type="text" placeholder="Search breed type" class="search-input">
                    <button class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="car">
                <img src="{{ asset('image/car.png') }}" alt="">
            </div>
        </div>

        <div class="heading">
            <h2>Animals available for adoption</h2>
        </div>

        <section class="container">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="image/car1.png" alt="">
                        <div class="name">Shayla</div>
                        <div class="age">1 year old</div>
                        <div class="gender">Female</div>
                        <button class="button"><a href="{{ route('profileinfo') }}">Learn More</a></button>

                    </div>
                    <div class="swiper-slide">
                        <img src="image/dog5.png" alt="Rockey">
                        <div class="name">Rocky</div>
                        <div class="age">5 year old</div>
                        <div class="gender">Male</div>
                        <button class="button">Learn More</button>
                    </div>
                    <div class="swiper-slide">
                        <img src="image/cat1.png" alt="">
                        <div class="name">Yumi</div>
                        <div class="age">3 year old</div>
                        <div class="gender">Female</div>
                        <button class="button">Learn More</button>
                    </div>
                    <div class="swiper-slide">
                        <img src="image/dog2.png" alt="Yumi">
                        <div class="name">Kiwi</div>
                        <div class="age">2 year old</div>
                        <div class="gender">Female</div>
                        <button class="button">Learn More</button>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <div class="change">
            <div class="image">
                <div class="pic">
                    <img src="image/Pet With Owner.png" alt="">
                </div>
            </div>
            <div class="text">
                <h3>Adopt a Pet, <br> Change a Life</h3>
                <p class="des">
                    Why buy when so many deserving animals are waiting for a loving home?
                    By adopting from shelters, you give them hope and create a meaningful bond that lasts forever."
                </p>
                <button class="contact">
                    <a href="{{ route('contact') }}">Contact Us</a>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <div class="achievements">
            <div class="lines">
                <h1>Our Achievements</h1>
                <p>In just a short time, our team has helped
                    over 500 <br> animals find their forever homes. We're
                    dedicated to <br> giving every pet a second chance at happiness and making <br>
                    the world a kinder place for animals in need.</p>
            </div>

            <div class="list">
                <div class="achieve">
                    <div class="image">
                        <img src="image/member.png" alt="">
                    </div>
                    <div class="type">
                        <h1>2000</h1>
                        <p>Memberships</p>
                    </div>
                </div>
                <div class="achieve">
                    <div class="image">
                        <img src="image/pet.png" alt="">
                    </div>
                    <div class="type">
                        <h1>300</h1>
                        <p>Happy Pets</p>
                    </div>
                </div>
                <div class="achieve">
                    <div class="image">
                        <img src="image/customer.png" alt="">
                    </div>
                    <div class="type">
                        <h1>300</h1>
                        <p>Happy Customers</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="success">
            <div class="happy">
                <h1><span>About Adopted Pets</span><br>
                    Success Strories
                </h1>

            </div>
        </div>

        <section class="container1">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="image/girl.png" alt="Shayla">
                        <div class="gender">Buddy has filled my life with love and excitement! Thank you, Animal
                            Shelter, for bringing this amazing companion into my world and making every day so much
                            happier!</div>
                        <div class="details">
                            <span class="name">Buddy</span>
                            <span class="story">and Luna</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="image/girl3.png" alt="">
                        <div class="gender">Buddy has filled my life with love and excitement! Thank you, Animal
                            Shelter, for bringing this amazing companion into my world and making every day so much
                            happier!</div>
                        <div class="details">
                            <span class="name">Buddy</span>
                            <span class="story">and Luna</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="image/girl4.png" alt="Yumi">
                        <div class="gender">Buddy has filled my life with love and excitement! Thank you, Animal
                            Shelter, for bringing this amazing companion into my world and making every day so much
                            happier!</div>
                        <div class="details">
                            <span class="name">Buddy</span>
                            <span class="story">and Luna</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="image/boy1.png" alt="Yumi">
                        <div class="gender">Buddy has filled my life with love and excitement! Thank you, Animal
                            Shelter, for bringing this amazing companion into my world and making every day so much
                            happier!</div>
                        <div class="details">
                            <span class="name">Buddy</span>
                            <span class="story">and Luna</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
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
