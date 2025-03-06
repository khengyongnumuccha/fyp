<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <link rel="stylesheet" href="{{ asset('css/donate.css') }}">
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
        <div class="donate">
            <div class="why">
                <h1>Donate</h1>
                <p>Extend a paw of kindness to animals in need through
                    your generous donation. Your support can make a world of difference!
                </p>
                <button><a href="{{ route('donateform') }}">Donate Now</a> <i class="fas fa-arrow-right"></i></button>
            </div>
            <div class="cat">
                <img src="image/ginger1.png" alt="">
            </div>
        </div>
        <div class="reason">
            <div class="image">
                <img src="image/cat&dog1.png" alt="">
            </div>
            <div class="desc">
                <h1>How Will Your Donate Help?</h1>
                <ul>
                    <li><i class="far fa-hand-point-right"></i>Your donation will provide essential medical care for
                        sick and injured animals, helping them heal and recover.</li>
                    <li><i class="far fa-hand-point-right"></i>It will supply food and shelter to animals in need,
                        ensuring they are nourished and safe.</li>
                    <li><i class="far fa-hand-point-right"></i>Your support will aid in rehabilitation efforts, giving
                        these animals a second chance at life.</li>
                    <li><i class="far fa-hand-point-right"></i>It will create a loving and secure environment for
                        animals waiting for adoption.</li>
                    <li><i class="far fa-hand-point-right"></i>Every contribution helps bring hope and a brighter future
                        to these animals in need!</li>
                </ul>
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
</body>

</html>