<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Form</title>
    <link rel="stylesheet" href="{{ asset('css/adoptform.css') }}">
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
        <div class="adopt">
            <h1>Responsible Pet Ownership Checklist</h1>
        </div>

        <div class="meaning">
            <h1>The True Meaning of Rescuing a Pet </h1>
            <p>Bringing a rescue pet into your home is more than just an act of kindness, it’s a promise. A promise to
                care, to love, and to stand by them no matter what.

                Rescue animals are not “broken” or “less than”. They are survivors, full of love, waiting for a second
                chance. When you adopt, you’re not just giving them a home, you're giving them hope.

                They may come with fears, scars, or a past they can’t tell you about. But with patience and love, they
                will trust again. They will look at you with eyes full of gratitude, loyalty, and unconditional love.

                A rescue pet doesn’t just need a home; they need a family. They need someone who understands that their
                journey doesn’t end at adoption but it begins there.

                So, before you decide to rescue, ask yourself:
            </p>
            <li class="question">
                Can I give them the time, patience, and love they need?,
                Am I ready for a lifetime commitment, through the ups and downs?
            </li>
            <p>If your answer is yes, then welcome to a life-changing journey! If you’re ready to make this commitment,
                please fill out this questionnaire.</p>
        </div>
        <div class="all">
            <div class="heading">
                <h1>Pet Adoption Form</h1>
            </div>
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
                    </div>
                    <div class="form-group">
                        <label for="address">Address </label>
                        <input type="text" id="address" required>
                    </div>
                    <div class="form-group">
                        <label for="DOB">Date Of Birth </label>
                        <input type="text" id="DOB">
                    </div>
                    <div class="form-group">
                        <label for="care">Who will be the care taker? </label>
                        <input type="text" id="care" required>
                    </div>
                    <div class="form-group">
                        <label for="state">Accomodation Type </label>
                        <select id="state" required>
                            <option value="state1">Own House</option>
                            <option value="state2">Rented</option>
                            <option value="state3">farm House</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="profession">Profession and Work Hour</label>
                        <input type="text" id="profession" required>
                    </div>
                    <div class="form-group">
                        <label for="pet">How many times a day will you take your pet for a walk?</label>
                        <input type="text" id="pet" required>
                    </div>
                    <div class="form-group">
                        <label for="tie">Will you tie your pet?</label>
                        <input type="text" id="tie" required>
                    </div>
                    <div class="form-group">
                        <label for="space">Is there enough space for pet to run and play inside and outside your
                            house?</label>
                        <input type="text" id="space" required>
                    </div>
                    <div class="form-group">
                        <label for="pet">Do you have permission to keep a pet?</label>
                        <input type="text" id="pet" required>
                    </div>
                    <div class="form-group">
                        <label for="pet">Do you currently have a pet at home?</label><br>
                        <input type="checkbox" id="home-yes" name="home" value="Yes">
                        <label for="home-yes">Yes</label>
                        <input type="checkbox" id="home-no" name="home" value="No">
                        <label for="home-no">No</label>
                    </div>
                    <div class="form-group">
                        <label for="qsn">Any more confusion and questions? Ask below.</label>
                        <input type="text" id="qsn" required>
                    </div>
                    <button type="submit" class="btn">Submit Form</button>

                </form>
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