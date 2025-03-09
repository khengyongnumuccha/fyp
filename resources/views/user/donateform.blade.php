<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
    <link rel="stylesheet" href="{{ asset('css/donateform.css') }}">
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
            <h1>Donation Form</h1>
        </div>
        <div class="scan">
            <div class="container">
                <div class="numbers">
                </div>
                <form action="">
                    <div class="form-group">
                        <label for="first-name">First Name </label>
                        <input type="text" id="first-name" required>

                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name </label>
                        <input type="text" id="last-name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone </label>
                        <input type="tel" id="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" id="email" required>
                        <input type="checkbox" id="anonymous" name="home" value="Yes">
                        <label for="anonymous">Want to keep your donation anonymous.</label>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount </label>
                        <input type="text" id="amount" required>
                    </div>
                    <div class="form-group">
                        <label for="qsn">Any confusion and questions? Ask below.</label>
                        <input type="text" id="qsn" >
                    </div>
                    <button type="submit" class="btn">Submit Form</button>

                </form>
            </div>
            <div class="scanner">
                <!-- <div class="img1">
                    <img src="image/cat&dog.png" alt="">
                </div> -->

                <div class="img2">
                    <p>Scan below QR & Donate via Khalti app</p>
                    <img src="image/scan.png" alt="">
                    <p>Khalti ID: PawFectMatch</p>
                    <img src="image/khalti1.png" alt="">
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
    <script>
        // Get the checkbox and the email input field
        const anonymousCheckbox = document.getElementById('anonymous');
        const emailInput = document.getElementById('email');

        // Add event listener to the checkbox
        anonymousCheckbox.addEventListener('change', function () {
            if (this.checked) {
                // Remove the "required" attribute if checkbox is checked
                emailInput.removeAttribute('required');
            } else {
                // Add the "required" attribute back if checkbox is unchecked
                emailInput.setAttribute('required', 'true');
            }
        });
    </script>

</body>

</html>