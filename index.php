<!DOCTYPE html>
<html>
<title>Social Donors</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link id="favicon" rel="shortcut icon" href="img/images.jfif">
<link rel="stylesheet" href="style2 (2).css">

<style>
    body,
    html {
        height: 100%;
        font-family: "Inconsolata", sans-serif;
    }



    .menu {
        display: none;
    }

    p {
        text-align: center;
        text-align: justify;
        padding-left: 0 2px;
    }



    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
    }

    /* The popup form - hidden by default */


    /* Add styles to the form container */
    .form-container {
        max-width: 300px;
        padding: 10px;
        background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text],
    .form-container input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus,
    .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
        background-color: #d60505;
        color: white;
        padding: 5px 15px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom: 10px;
        opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
        background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover,
    .open-button:hover {
        opacity: 1;
    }

    h1 {
        color: red;
    }
</style>

<body>
    
    <!-- Links (sit on top) -->
    <div class="navbar">
        <div class="navbar-links">



            <ul>
                <a img src="img/images.jfif" width="30px" height="30px" alt="logo">
                    <h2><b>SocialDonors</b></h2>
                </a>


                <li><a href="index2.html">Home</a></li>
                <li><a href="#where">Hosting a Blood drive</a></li>
                <li><a href="#about">Biomedical Services</a></li>
                <li><a href="donate.html"> Donate Blood</a></li>

                </li>

                <li class="loginbtn1">
                    <a href="signupform.php"><b>signUp</b></a>
                </li>
                <li class="piggy">
                    <input type="text" placeholder="Search..">
                </li>
            </ul>
        </div>
    </div>


    <!-- End page content -->
    </div><br>
    
   <center><img src="img/Blood-for-life-facebook-post.png" width="40%" height="10%"></center>
  <br>
    <!-- Footer -->
    <div class="footer">
        <div class="row">
            <div class="column">
                <h4>Quick Links</h4>
                <p>Home</p>
                <p>About Us</p>
                <p>Contacts</p>
                <p>Gallery Features</p><br>
                <h4><b>SocialDonors</b></h4>
            </div>

            <div class="column">
                <h4>More Products</h4>
                <p>Forum PHP Script</p>
                <p>Edu Smart</p>
                <p>Smart Event</p>
                <p>Smart School</p><br>
                <p>©socialdonors2011-2021</p>

            </div>

            <div class="row1">
                <div class="column">
                    <h4>Organization</h4>
                    <p>AABB History</p>
                    <p>Governance&Policies</p>
                    <p>Disaster Response</p><br><br><br>

                </div>

            </div>


            <div class="column2">
                <h6>

                    Terms & Conditions Privacy
                </h6>


                <div class="facebook"><br><br><br>


                    <a href="https://www.instagram.com/MokisBakery/"><img src="img/download (1).jfif" width="25px"
                            height="25px" class="icon" align="right" hspace="13px" vspace="4px"></a>

                    <a href="https://www.facebook.com/MokisBakery/"><img src="img/icons8-facebook-24 (1).png"
                            width="25px" height="25px" class="icon" align="right" hspace="13px" vspace="4px"></a>

                    </a>
                </div>
            </div><br>

        </div>
    </div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
    <script>
        // Tabbed Menu
        function openMenu(evt, menuName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("menu");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
            }
            document.getElementById(menuName).style.display = "block";
            evt.currentTarget.firstElementChild.className += " w3-dark-grey";
        }
        document.getElementById("myLink").click();
    </script>

</body>

</html>