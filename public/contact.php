<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,700,900"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/dropzonee2a5.css?asdsd" />
    <link rel="stylesheet" href="css/style9558.css?lksa" />

    <script>
      function submit(){
        let confirm = alert("Are you sure do you want to submit property details");
        if(confirm){
            document.getElementById("upload_btn").click = true;
            return true;
        }else{
          return false;
        }
      }
    </script>

    <title>DoorsTour</title>
  </head>
  <body>
  <div class="pxp-header fixed-top pxp-animate pxp-no-bg">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-5 col-md-2">
            <a href="index.html" class="pxp-logo text-decoration-none"
              ><img src="images/logo.png" height="35" width="175" alt="logo"
            /></a>
          </div>
          <div class="col-2 col-md-8 text-center">
            <ul class="pxp-nav list-inline">
              <!-- <li class="list-inline-item">
                    <a href="#">Home</a>
                    <ul class="pxp-nav-sub rounded-lg">
                      <li><a href="index-2.html">Version 1</a></li>
                      <li><a href="index-3.html">Version 2</a></li>
                      <li><a href="index-4.html">Version 3</a></li>
                    </ul>
                  </li> -->
              <li class="list-inline-item">
                <a href="#">Properties</a>
                <ul class="pxp-nav-sub rounded-lg">
                  <li><a href="properties.html">Buy</a></li>
                  <li><a href="single-property.html">Rent</a></li>
                  <li>
                    <a href="submit-property.html">PG</a>
                  </li>
                </ul>
              </li>
              <li class="list-inline-item">
                <a href="#">Feel 360</a>
                <ul class="pxp-nav-sub rounded-lg">
                  <li><a href="gyms.html">Gyms</a></li>
                  <li><a href="restaurants.html">Restaurants</a></li>
                  <li>
                    <a href="co-working.html">Co-working Spaces</a>
                  </li>
                  <li><a href="hotels.html">Hotels</a></li>
                </ul>
              </li>
              <li class="list-inline-item pxp-is-last">
                <a href="services.html">Services</a>
              </li>
              <li class="list-inline-item">
                <a href="blog.html">Blog</a>
                
              </li>
              <li class="list-inline-item pxp-is-last">
                <a href="about.html">About Us</a>
              </li>

              <li class="list-inline-item pxp-is-last">
                <a href="contact.html">Contact Us</a>
              </li>
              <li class="list-inline-item">
                <div class="pxp-user-btns">
                  <a href="https://property.doorstour.com/"
                    ><button
                      class="pxp-user-btns"
                      style="
                        background-color: #2eca6a;
                        padding: 5px 10px 5px 10px;
                        border: none;
                        color: white;
                        border-radius: 5px;
                      "
                    >
                      Post Property
                    </button></a
                  >
                </div>
              </li>
              <li class="list-inline-item pxp-has-btns">
                <div class="pxp-user-btns">
                  <a href="#" class="pxp-user-btns-signup pxp-signup-trigger"
                    >Sign Up</a
                  >
                  <a href="#" class="pxp-user-btns-login pxp-signin-trigger"
                    >Sign In</a
                  >
                </div>
              </li>
            </ul>
          </div>
          <div class="col-5 col-md-2 text-right">
            <a href="javascript:void(0);" class="pxp-header-nav-trigger"
              ><span class="fa fa-bars"></span
            ></a>
            <a
              href="javascript:void(0);"
              class="pxp-header-user pxp-signin-trigger"
              ><span class="fa fa-user-o"></span
            ></a>
          </div>
        </div>
      </div>
    </div>
<!----------------------------------------end header logic starts--------------------------------------------------->

<?php


$name_enquiry = "";
$email_enquiry = "";
$phone_enquiry = "";
$reg_enquiry = "";
$message_enquiry = "";


$name_details = $_POST["pxp-contact-form-name-name"];
$email_details = $_POST["pxp-contact-form-email-name"];
$reg_details = $_POST["pxp-contact-form-reg-name"];
$phone_details = $_POST["pxp-contact-form-phone-name"];
$message_details = $_POST["pxp-contact-form-message-name"];



//////  connect to database
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "doorstour";

//1.CREATE CONNECTION TO DB
$conn = new mysqli($hostname,$username,$password,$db_name);


if($conn->connect_error){
    die("CANNOT LOAD DATA PROPERLY , INCORRECT FORMAT".$conn->connect_error);
}


//2. CREATING TABLE . UNCOMMENT FOR FIRST TIME CREATION ELSE COMMENT ALWAYS AND DISABLE UNNECESSARY SUCCESSFULL CREATION MSG AND DISPLAY ERROR MSG ONLY

$sql = "CREATE TABLE IF NOT EXISTS contact_information(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name_enquiry VARCHAR(255) NOT NULL,
    email_enquiry VARCHAR(255) NOT NULL,
    phone_enquiry VARCHAR(255) NOT NULL,
    reg_enquiry VARCHAR(255) NOT NULL,
    message_enquiry VARCHAR(255) NOT NULL,
    reg_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($conn->query($sql) === TRUE) {
    echo "";
}else{
    die("Error creating table: " . $conn->error);
}


$stmt = $conn->prepare("INSERT INTO contact_information (name_enquiry,email_enquiry,phone_enquiry,reg_enquiry,message_enquiry) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss",$name_enquiry,$email_enquiry,$phone_enquiry,$reg_enquiry,$message_enquiry);

// set parameters and execute

$name_enquiry = $name_details;
$email_enquiry = $email_details;
$phone_enquiry = $phone_details;
$reg_enquiry = $reg_details;
$message_enquiry = $message_details;


$stmt->execute();


$conn->close();

echo("<br><br><br><br><br>");
echo("<br><br><h1>FORM SUBMITTED SUCCESSFULLY <br> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; WE WILL SHORTLY CONTACT YOU <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THANK YOU FOR REACHING OUT TO US</h1><br><br>");
echo("<br><br>");

?>


<!-- footer -->
<div class="pxp-footer pt-100 pb-100 mt-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-4">
            <div class="pxp-footer-logo">DoorsTour</div>
            <div class="pxp-footer-address mt-2">
              <p>
                Launched in 2020, DoorsTour is India's fastest growing online
                Property marketplace to buy, sell, and rent residential and
                commercial properties. Experience every property in 360 view,
                DoorsTour is the most preferred real estate portal in India by
                various independent surveys.
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-lg-8">
            <div class="row">
              <div class="col-sm-12 col-md-4">
                <h4 class="pxp-footer-header mt-4 mt-lg-0">Company</h4>
                <ul class="list-unstyled pxp-footer-links mt-2">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="agents.html">Agents</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="#">Sitemap</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-sm-12 col-md-4">
                <h4 class="pxp-footer-header mt-4 mt-lg-0">Actions</h4>
                <ul class="list-unstyled pxp-footer-links mt-2">
                  <li><a href="properties.html">Buy Properties</a></li>
                  <li><a href="properties.html">Rent Properties</a></li>
                  <li><a href="submit-property.html">Sell Properties</a></li>
                </ul>
              </div>
              <div class="col-sm-12 col-md-4">
                <h4 class="pxp-footer-header mt-4 mt-lg-0">Explore</h4>
                <ul class="list-unstyled pxp-footer-links mt-2">
                  <li><a href="properties.html">Homes for Rent</a></li>
                  <li><a href="properties.html">Apartments for Rent</a></li>
                  <li><a href="properties.html">Homes for Sale</a></li>
                  <li><a href="properties.html">Apartments for Sale</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row pxp-footer-social mt-2">
      <div class="col-md-12" style="text-align: center">
        <a href="https://www.instagram.com/doorstourindia/"><span class="fa fa-instagram"></span></a>
        <a href="https://www.facebook.com/doorstourindia/"><span class="fa fa-facebook-square"></span></a>
        <a href="https://twitter.com/doorstour1?s=08"><span class="fa fa-twitter"></span></a>
        <a href="https://www.linkedin.com/company/doorstour/"><span class="fa fa-linkedin"></span></a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12" style="text-align: center">
        <div class="pxp-footer-bottom mt-2">
          <div>
            <a href="termsncond.html">Terms & Conditions</a> and
            <a href="privacypolicy.html">Privacy Policy</a>
          </div>
          <div class="pxp-footer-copyright">
            &copy; DoorsTour All Rights Reserved. 2020
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      id="pxp-signin-modal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="pxpSigninModal"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5 class="modal-title" id="pxpSigninModal">Welcome back!</h5>
            <form class="mt-4">
              <div class="form-group">
                <label for="pxp-signin-email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="pxp-signin-email"
                  placeholder="Enter your email address"
                />
              </div>
              <div class="form-group">
                <label for="pxp-signin-pass">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="pxp-signin-pass"
                  placeholder="Enter your password"
                />
              </div>
              <div class="form-group">
                <a href="#" class="pxp-agent-contact-modal-btn">Sign In</a>
              </div>
              <div class="form-group mt-4 text-center pxp-modal-small">
                <a href="#" class="pxp-modal-link">Forgot password</a>
              </div>
              <div class="text-center pxp-modal-small">
                New to DoorsTour?
                <a
                  href="javascript:void(0);"
                  class="pxp-modal-link pxp-signup-trigger"
                  >Create an account</a
                >
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      id="pxp-signup-modal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="pxpSignupModal"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5 class="modal-title" id="pxpSignupModal">Create an account</h5>
            <form class="mt-4">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="pxp-signup-firstname">First Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="pxp-signup-firstname"
                      placeholder="Enter first name"
                    />
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="pxp-signup-lastname">Last Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="pxp-signup-lastname"
                      placeholder="Enter last name"
                    />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="pxp-signup-email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="pxp-signup-email"
                  placeholder="Enter your email address"
                />
              </div>
              <div class="form-group">
                <label for="pxp-signup-pass">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="pxp-signup-pass"
                  placeholder="Create a password"
                />
              </div>
              <div class="form-group">
                <a href="#" class="pxp-agent-contact-modal-btn">Sign Up</a>
              </div>
              <div class="text-center mt-4 pxp-modal-small">
                Already have an account?
                <a
                  href="javascript:void(0);"
                  class="pxp-modal-link pxp-signin-trigger"
                  >Sign in</a
                >
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYV9SV-9ZfSiFtqnPqd3UjdSgfX8VcQ8M&amp;libraries=geometry&amp;libraries=places"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/submit-property-map.js"></script>
    <script src="js/dropzone.js"></script>
    <script src="js/main1dd4.js?asdsadwe"></script>
  </body>
</html>
