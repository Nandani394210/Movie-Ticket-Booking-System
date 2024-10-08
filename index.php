<?php 
    session_start(); // Start the session at the top of index.php

    // Check if there's a success message in the session
    if (isset($_SESSION['message'])) {
        echo "<div id='success-message' style='color: green;'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']); // Clear the message after displaying it
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Book</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
        
        <div id="log-in">
            <div class="box">
                <div class="lheading">
                    <h1>Log In</h1>
                </div>
                <form action="action.php" method="post" role="form" id="login-form" name="login-form">
                    <div class="inputs">
                        <input type="email" name="email" placeholder="Email Id"><br><br>
                        <input type="password" name="pass" placeholder="password"><br>
                    </div>
                    <div class="btns">
                        <!-- <button id="loginbtn" value="login" name="login">Log In</button> -->
                        <button id="loginbtn" name="login">Log In</button>
                    </div>
                    <span>Do not Have An Account? Then</span><a id="register-btn"> Register Here!</a>
                </form>
            </div>
        </div>

        <div id="register">
            <div class="box">
                <div class="rheading">
                    <h1>Register</h1>
                </div>
                <form action="action.php" method="post" role="form" id="register-form" name="register-form">
                    <div class="inputs">
                        <input type="text" placeholder="Name" name="name"><br><br>
                        <input type="tel" placeholder="Mobile Number" name="mo_no"><br><br>
                        <input type="email" placeholder="Email Id" name="email"><br><br>
                        <input type="password" placeholder="password" name="pass"><br><br>
                    </div>
                    <div class="btns">
                        <!-- <a href="action.php" id="btnprocess" value="register" name="register">Register</button> -->
                        <button id="btnprocess" name="register" value="register">Register</button>
                        <!-- <button id="btncancel">cancel</button> -->
                        
                        <button type="none" id="btncancel" name="cancel">cancel</button>
                </form>
                    </div>
            </div>
        </div>

        <div id="ticket-section"> 
            <div class="box">
                    <div class="heading">
                        <h1>Buy tickets</h1>
                    </div>
                    <div class="inputs">
                        <input type="text" placeholder="Name"></h3><br><br>
                        <input type="Mobile number" placeholder="Mobile Number"><br><br>
                        <input type="email" placeholder="Email Id"></h3><br><br>
                    </div>
                    <div class="btns">
                        <button id="btnp">Proceed</button>
                        <!-- <button id="btncancel">cancel</button> -->
                        <button id="book-cancel">cancel</button>
                    </div>
            </div>
        </div>
        
        <div id="navigation">
            <div class="nav-1">
                <h1>Movies</h1>
                <input type="search" class="searchbtn"><i class="ri-search-line"></i>
            </div>
            <div class="nav-2">    
                <select name="city" id="city" class="selectopt">
                    <option value="city">City</option>
                    <option value="city">Surat</option>
                    <option value="city">Ahmedabad</option>
                    <option value="city">Mumbai</option>
                    <option value="city">Pune</option>
                </select>
                <button id="log-btn">Log in</button>
                <h3 id="menu-btn"><i class="fa-solid fa-bars"></i></h3>
            </div>
        </div>

        <div id="main">
            
            <div id="slider">
                <div class="slide-container">
                    <div class="slide">
                        <div class="item" id="item-1">
                            <div class="content">
                                <div class="name">The Avengers</div>
                                <!-- <div class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora quam magni sequi pariatur architecto, itaque officia, accusantium sunt velit cum porro in animi est facere mollitia a inventore nulla aliquam.</div> -->
                                <button>See more</button>
                            </div>
                        </div>
                        
                        <div class="item" id="item-2">
                            <div class="content">
                                <div class="name">Avengers Infinity war</div>
                                <!-- <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis fugiat doloribus repellendus quas nostrum explicabo similique officiis fuga, asperiores esse, rem eligendi! Ex aliquid provident quos, ipsum id perferendis optio.</div> -->
                                <button>See more</button>
                            </div>
                        </div>

                        <div class="item" id="item-3">
                            <div class="content">
                                <div class="name"></div>
                                <div class="desc"></div>
                                <button>See more</button>
                            </div>
                        </div>

                        <div class="item" id="item-4">
                            <div class="content">
                                <div class="name"></div>
                                <div class="desc"></div>
                                <button>See more</button>
                            </div>
                        </div>

                        <div class="item" id="item-5">
                            <div class="content">
                                <div class="name"></div>
                                <div class="desc"></div>
                                <button>See more</button>
                            </div>
                        </div>

                        <div class="item" id="item-1">
                            <div class="content">
                                <div class="name"></div>
                                <div class="desc"></div>
                                <button>See more</button>
                            </div>
                        </div>

                        <div class="item" id="item-2">
                            <div class="content">
                                <div class="name"></div>
                                <div class="desc"></div>
                                <button>See more</button>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
                        <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="navigation-2">
                <div class="nav-3">
                    <a href="#">Now Showing</a>
                    <a href="#">Coming soon</a>
                    <a class="book-btn">Buy Tickets</a>
                </div>
                <div class="nav-4">
                    <select name="language" id="language" class="selectopt">
                        <option value="language">Langauge</option>
                        <option value="language">hindi</option>
                        <option value="language">english</option>
                        <option value="language">gujrati</option>
                        <option value="language">marathi</option>
                    </select>
                    <select name="geners" id="geners" class="selectopt">
                        <option value="geners">Generes</option>
                        <option value="geners">Action</option>
                        <option value="geners">romance</option>
                        <option value="geners">thriller</option>
                        <option value="geners">sci-fi</option>
                        <option value="geners">fantasy</option>
                        <option value="geners">comedy</option>
                    </select>
                </div>
            </div>
    
            <div id="movie-section-1">
                <div class="nowshow">
                    <h1 class="ms1heading">Now Showing</h1>
                    <div class="card-container">
                        <div class="mbox">
                            <div class="card" id="card-1-1">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>
                        </div>

                        <div class="mbox">
                            <div class="card" id="card-1-2">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>
                        </div>

                        <div class="mbox">
                            <div class="card" id="card-1-3">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>
                        </div>

                        <div class="mbox">
                            <div class="card" id="card-1-4">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>    
                        </div>
                    </div>

                    <div class="card-container">
                        <div class="mbox">
                            <div class="card" id="card-2-1">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>
                        </div>

                        <div class="mbox">
                            <div class="card" id="card-2-2">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>
                        </div>

                        <div class="mbox">
                            <div class="card" id="card-2-3">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>
                        </div>

                        <div class="mbox">
                            <div class="card" id="card-2-4">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>
                        </div>
                    </div>

                </div>    
            </div>

            <div id="movie-section-2">
                <div class="cmgsoon">
                    <h1 class="ms1heading">Upcoming Movies</h1>
                    <div class="card-container">
                        <div class="mbox">
                            <div class="card" id="card-3-1">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>
                        </div>

                        <div class="mbox">
                            <div class="card" id="card-3-2">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>
                        </div>

                        <div class="mbox">
                            <div class="card" id="card-3-3">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>
                        </div>

                        <div class="mbox">
                            <div class="card" id="card-3-4">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>                            
                        </div>
                    </div>

                    <div class="card-container">
                        <div class="mbox">
                            <div class="card" id="card-4-1">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div> 
                        </div>

                        <div class="mbox">
                            <div class="card" id="card-4-2">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>
                        </div>

                        <div class="mbox">
                            <div class="card" id="card-4-3">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>
                        </div>

                        <div class="mbox">
                            <div class="card" id="card-4-4">
                                <div class="overlay">
                                    <h5>Release Date</h5>
                                    <h4>27 Sep 24</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h1 class="mname">Avengers Infinity War</h1>
                                <h2 class="lang">Hindi</h2>
                                <h3 class="general">Action</h3>
                                <button class="book-btn">Buy Ticket</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="fhead">
                    <div class="line"></div>
                    <h1 class="fheading">movies</h1>
                    <div class="line"></div>
                </div>
                <div class="icons">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-x-twitter"></i>
                    <p><i class="fa-brands fa-instagram"></i></p>
                    <p><i class="fa-brands fa-youtube"></i></p>
                    <p><i class="fa-brands fa-pinterest-p"></i></p>
                    <p><i class="fa-brands fa-linkedin-in"></i></p>
                </div>
                <h4>Copyright 2023 &copy; Movie pvt. ltd. all rights reserved.</h4>
            </div>

        </div>

        <script src="script.js"></script>
</body>
</html>