<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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

    <div class="all">
        <div class="heading">
            <div class="name">
                <h1> Contact Us</h1>
                <p>If you'd like to support our cause with a donation or
                    if you come across a stray animal in need, please don't
                    hesitate to contact our help center. Our team is available
                    24/7 to assist you and ensure the well-being of animals in need.</p>
            </div>
            <div class="contact">
                <img src="image/contact1.png" alt="">
            </div>
        </div>

        <div class="info">
            <div class="medium">
                <div class="type">
                    <div class="icon1">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <p>pawfectmatch@gmail.com</p>
                </div>
                <div class="type">
                    <div class="icon2"><i class="fas fa-phone"></i></div>
                    <p>+977 9876543271</p>
                </div>
                <div class="type">
                    <div class="icon3"><i class="fab fa-facebook"></i></div>
                    <p>PawFectMatch Foundation</p>
                </div>
                <div class="type">
                    <div class="icon4"><i class="fab fa-instagram"></i></div>
                    <p>PawFectMatchFoundation</p>
                </div>

                <div class="type">
                    <div class="icon5"><i class="fas fa-map-marker-alt"></i></div>
                    <p>Damak 7, Jhapa, Nepal</p>
                </div>
            </div>

            <div class="data">
                <div class="container">
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="text">
                            <h1>Contact Form</h1>
                        </div>
                        <div class="form-group">
                            <label for="first-name">First Name </label>
                            <input type="text" id="first-name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name </label>
                            <input type="text" id="last-name" name="last_name" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address </label>
                            <input type="text" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="sub">Subject </label>
                            <input type="text" id="sub" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message </label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Submit Form</button>
                    </form>


                </div>
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
</body>

</html>