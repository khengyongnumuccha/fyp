<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption</title>
    <link rel="stylesheet" href="{{ asset('css/adopt.css') }}">
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
        <div class="intro">
            <div class="adopt">
                <h1>Adopt a Pet</h1>
                <p>At Pawfect Match, we are committed to creating a brighter future for
                    animals in need. Our team works tirelessly to connect loving homes with pets in search
                    of a second chance.</p>
            </div>
            <div class="image">
                <img src="image/dd33.png" alt="">
            </div>
        </div>

        <div class="pet">
            <div class="search">
                <h1>Pet Profile</h1>
                <div class="search-container">
                    <input type="text" placeholder="Search breed type" class="search-input">
                    <button class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <div class="options">
                <div class="profiles">
                    <div class="image">
                        <img src="image/car1.png" alt="">
                    </div>

                    <div class="details">
                        <h1>Shayla</h1>
                        <p>Age: 1 year 15 months old</p>
                        <p>Breed: Persian</p>
                        <p>Personality : introverted, shy</p>
                        <p>Hobby: Napping, Solo Play</p>
                        <p>Gender: Female</p>
                        <a href="{{ route('profileinfo') }}"><button>Adopt</button></a>
                    </div>
                </div>

                <div class="profiles">
                    <div class="image">
                        <img src="image/dog5.png" alt="">
                    </div>

                    <div class="details">
                        <h1>Rockey</h1>
                        <p>Age: 5 year old</p>
                        <p>Breed: Persian</p>
                        <p>Personality : introverted, shy</p>
                        <p>Hobby: Napping, Solo Play</p>
                        <p>Gender: Male</p>
                        <a href="#"><button>Adopt</button></a>
                    </div>
                </div>

                <div class="profiles">
                    <div class="image">
                        <img src="image/cat1.png" alt="">
                    </div>

                    <div class="details">
                        <h1>Yumi</h1>
                        <p>Age: 3 year old</p>
                        <p>Breed: Persian</p>
                        <p>Personality : introverted, shy</p>
                        <p>Hobby: Napping, Solo Play</p>
                        <p>Gender: Female</p>
                        <a href="#"><button>Adopt</button></a>
                    </div>
                </div>
            </div>
            <div class="options">
                <div class="profiles">
                    <div class="image">
                        <img src="image/car1.png" alt="">
                    </div>

                    <div class="details">
                        <h1>Kiwi</h1>
                        <p>Age: 2 year old</p>
                        <p>Breed: Persian</p>
                        <p>Personality : introverted, shy</p>
                        <p>Hobby: Napping, Solo Play</p>
                        <p>Gender: Female</p>
                        <a href="#"><button>Adopt</button></a>
                    </div>
                </div>

                <div class="profiles">
                    <div class="image">
                        <img src="image/dog5.png" alt="">
                    </div>

                    <div class="details">
                        <h1>Shayla</h1>
                        <p>Age: 1 year 15 months</p>
                        <p>Breed: Persian</p>
                        <p>Personality : introverted, shy</p>
                        <p>Hobby: Napping, Solo Play</p>
                        <p>Gender: Female</p>
                        <a href="#"><button>Adopt</button></a>
                    </div>
                </div>

                <div class="profiles">
                    <div class="image">
                        <img src="image/cat1.png" alt="">
                    </div>

                    <div class="details">
                        <h1>Shayla</h1>
                        <p>Age: 1 year 15 months</p>
                        <p>Breed: Persian</p>
                        <p>Personality : introverted, shy</p>
                        <p>Hobby: Napping, Solo Play</p>
                        <p>Gender: Female</p>
                        <a href="#"><button>Adopt</button></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="lines">
            <h1>Tips for bringing home a newly adopted pet</h1>
            <div class="points">
                <div class="pets">
                    <img src="image/pets.png" alt="">
                </div>
                <div class="tips">
                    <ul>
                        <li><i class="far fa-hand-point-right"></i>Adopting a pet is a lifelong commitment. As the
                            primary caregiver, it’s important to involve
                            your family in the decision-making process.</li>
                        <li><i class="far fa-hand-point-right"></i>Choose a pet that suits your living situation by
                            considering factors like size, age, and energy
                            level to ensure a good match.</li>
                        <li><i class="far fa-hand-point-right"></i>Bring your pet home when you have time off to help
                            them adjust and feel comfortable in their new
                            environment.</li>
                        <li><i class="far fa-hand-point-right"></i>Ensure regular exercise, mental stimulation, and
                            quality time together. Don’t forget to schedule
                            routine vet check-ups for your pet's health.</li>
                        <li><i class="far fa-hand-point-right"></i>Always keep your pet’s well-being in mind when making
                            big life decisions, such as moving, having
                            children, or traveling.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="guide">
            <h1>How To Adopt A Pet</h1>
            <div class="process">
                <div class="guideline">
                    <img class="sitting" src="image/dog44.png" alt="">
                    <p>Select a pet of your choice</p>
                </div>
                <div class="guideline">
                    <img src="image/form1.png" alt="">
                    <p>Fill Adoption Form</p>
                </div>
                <div class="guideline">
                    <img src="image/right.png" alt="">
                    <p>Confirm Adoption</p>
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

    </script>
</body>

</html>