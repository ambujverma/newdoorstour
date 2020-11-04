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

    <title>Data Submitted - DoorsTour</title>
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
                  <li><a href="properties.html">Rent</a></li>
                  <li>
                    <a href="properties.html">PG</a>
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
                  <a href="submit-property.html"
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
<?php

$name_owner="";
$email_owner="";
$number_owner="";
$title = "";
$overview = "";
$type = "";
$status = "";
$year_built = "";
$stories = "";
$room_count = "";
$parking = "";
$internet = "";
$garage = "";
$air_conditioning = "";
$dishwasher = "";
$disposal = "";
$balcony = "";
$gym = "";
$playroom = "";
$bar = "";
$price = "";
$price_label = "";
$beds = "";
$baths = "";
$size = "";
$address = "";
$photo_gallery = "";
$name_file = "";
$type_file = "";
$data_file = "";
$name_of_file_uploaded = "";
$file_type_uploaded = "";
$file_data_uploaded = "";

$owner_name_details = $_POST['pxp-submit-property-owner-name-name'];
$owner_number_details = $_POST['pxp-submit-property-owner-number-name'];
$owner_email_details = $_POST['pxp-submit-property-owner-email-name'];


$basic_info_title = $_POST['pxp-submit-property-title-name'];
$basic_info_overview = $_POST['pxp-submit-property-overview-name'];

// echo($basic_info_title."\n");
// echo($basic_info_overview."\n");


$key_details_type = $_POST['pxp-submit-property-type-name'];
$key_details_status = $_POST['pxp-submit-property-status-name'];
$key_details_year_built = $_POST['pxp-submit-property-built-name'];
$key_details_stories = $_POST['pxp-submit-property-stories-name'];
$key_details_room_count = $_POST['pxp-submit-property-rooms-name'];
$key_details_parking_space = $_POST['pxp-submit-property-parking-name'];   

// echo($key_details_type."\n");
// echo($key_details_status."\n");
// echo($key_details_year_built."\n");
// echo($key_details_stories."\n");
// echo($key_details_room_count."\n");
// echo($key_details_parking_space."\n");

                   




if(isset($_POST['pxp-submit-property-internet-name'])){
    $amenities_internet ='yes';
}else{
    $amenities_internet = 'no';
}

if(isset($_POST['pxp-submit-property-garage-name'])){
    $amenities_garage ='yes'; 
}else{
    $amenities_garage = 'no';
}

if(isset($_POST['pxp-submit-property-air-conditioning-name'])){
    $amenities_air_conditioning = 'yes';
}else{
    $amenities_air_conditioning = 'no';
}

if(isset($_POST['pxp-submit-property-dishwasher-name'])){
    $amenities_dishwasher = 'yes';
}else{
    $amenities_dishwasher = 'no';
}

if(isset($_POST['pxp-submit-property-disposal-name'])){
    $amenities_disposal = 'yes';    
}else{
    $amenities_disposal = 'no';
}

if(isset($_POST['pxp-submit-property-balcony-name'])){
    $amenities_balcony = 'yes'; 
}else{
    $amenities_balcony = 'no';
}

if(isset($_POST['pxp-submit-property-gym-name'])){
    $amenities_gym = 'yes';
}else{
    $amenities_gym = 'no';
}

if(isset($_POST['pxp-submit-property-playroom-name'])){
    $amenities_playroom = 'yes'; 
}else{
    $amenities_playroom = 'no';
}

if(isset($_POST['pxp-submit-property-bar-name'])){
    $amenities_bar = 'yes';
}else{
    $amenities_bar = 'no';
}

// echo($amenities_internet."\n");
// echo($amenities_garage."\n");
// echo($amenities_air_conditioning."\n");
// echo($amenities_dishwasher."\n");
// echo($amenities_disposal."\n");
// echo($amenities_balcony."\n");
// echo($amenities_gym."\n");
// echo($amenities_playroom."\n");
// echo($amenities_bar."\n");


//                 if(isset($_POST['upload_name'])){

//                     echo("hi open");
//                     $name_file = $_FILES['pxp-submit-property-file-upload-name']['name'];
//                     $type_file = $_FILES['pxp-submit-property-file-upload-name']['type'];
//                     if($_FILES['pxp-submit-property-file-upload-name']['error']==0){
//                         echo("no error");
//                         // $da = array($_FILES['pxp-submit-property-file-upload-name']);
                        
//                     }else{
//                         echo("error");
//                     }
//                     $data_file = $_FILES['pxp-submit-property-file-upload-name']['tmp_data'];
//                     $file_store = "C:/xampp/htdocs/login_signup/doorstour/".$name_file;
//                     $var = move_uploaded_file($data_file,$file_store);
//                     echo($var."true");
//                     if($var){
//                         print_r("true");
//                     }else{
//                         print_r("false");
//                     }
//                     $varr = move_uploaded_file($name_file,$file_store);
//                     echo($varr."true");
//                     // $_SESSION['name_of_file_uploaded_by_user'] = $name_file;
//                     // $_SESSION['type_of_file_uploaded_by_user'] = $type_file;
//                     // $_SESSION['data_of_file_uploaded_by_user'] = $data_file;

//                     // echo($_FILES['pxp-submit-property-file-upload-name']);
//                     // echo($_SESSION['name_of_file_uploaded_by_user']);
//                     // echo($_SESSION['type_of_file_uploaded_by_user']);
//                     // echo($_SESSION['data_of_file_uploaded_by_user']);
                
//                 }else{
//                   echo("closed");
//                     $name_file = "empty";
//                     $type_file = "";
//                     $data_file = "";
                     
//                 }

// echo("<br>");
echo("<br><br><br><br><br>");
echo("<h1>Your House has been Submitted Successfully.<br>We will contact you shortly!</h1>");
// echo "<pre>"; 
// // print_r($_FILES); 
// echo "</pre>";


// Check if the form was submitted 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
	// Check if file was uploaded without errors 
	if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) { 
		
		$file_name	 = $_FILES["photo"]["name"]; 
		$file_type	 = $_FILES["photo"]["type"]; 
		$file_size	 = $_FILES["photo"]["size"]; 
		$file_tmp_name = $_FILES["photo"]["tmp_name"]; 
		$file_error = $_FILES["photo"]["error"]; 
		
		
		
		// echo "<div style='text-align: center; background: #4CB974; 
		// padding: 30px 0 10px 0; font-size: 20px; color: #fff'> 
		// File Name: " . $file_name . "</div>"; 
		
		// echo "<div style='text-align: center; background: #4CB974; 
		// padding: 10px; font-size: 20px; color: #fff'> 
		// File Type: " . $file_type . "</div>"; 
		
		// echo "<div style='text-align: center; background: #4CB974; 
		// padding: 10px; font-size: 20px; color: #fff'> 
		// File Size: " . $file_size . "</div>"; 
		
		// echo "<div style='text-align: center; background: #4CB974; 
		// padding: 10px; font-size: 20px; color: #fff'> 
		// File Error: " . $file_error . "</div>"; 
		
		// echo "<div style='text-align: center; background: #4CB974; 
		// padding: 10px; font-size: 20px; color: #fff'> 
		// File Temporary Name: " . $file_tmp_name . "</div>"; 
		
	} 
} 
 

// $photo_gallery = $_POST['pxp-submit-property-file-upload-name'];  
//////////////////////////////////////////
// $name_file = $_SESSION['name_of_file_uploaded_by_user'];
// $type_file = $_SESSION['type_of_file_uploaded_by_user'];
// $data_file = $_SESSION['data_of_file_uploaded_by_user'];


// if(isset($_POST['upload_name'])){
//     $photo_gallery = "property set by user";
//     $name_file = $_FILES['pxp-submit-property-file-upload-name']['name'];
//     $type_file = $_FILES['pxp-submit-property-file-upload-name']['type'];
//     $data_file = $_FILES['pxp-submit-property-file-upload-name']['tmp_data'];
    

// }else{
//     $photo_gallery = "no property set by user";
//     $name_file = "empty";
//     $type_file = "";
//     $data_file = "";
    
// }





//////////////////////////////////////////



$main_details_price = $_POST['pxp-submit-property-price-name'];
$main_details_price_label = $_POST['pxp-submit-property-plabel-name'];
$main_details_beds = $_POST['pxp-submit-property-beds-name'];
$main_details_baths = $_POST['pxp-submit-property-baths-name'];
$main_details_size = $_POST['pxp-submit-property-size-name'];


// echo($main_details_baths."\n");
// echo($main_details_price_label."\n");
// echo($main_details_beds."\n");
// echo($main_details_baths."\n");
// echo($main_details_size."\n");



$location_address = $_POST['pxp-submit-property-address-name'];

// echo($location_address."\n");

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//SQL STARTS DATABASE HERE
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "doorstour";

//1.CREATE CONNECTION TO DB
$conn = new mysqli($hostname,$username,$password,$db_name,'3306');


if($conn->connect_error){
    die("CANNOT LOAD DATA PROPERLY , INCORRECT FORMAT".$conn->connect_error);
}


//2. CREATING TABLE . UNCOMMENT FOR FIRST TIME CREATION ELSE COMMENT ALWAYS AND DISABLE UNNECESSARY SUCCESSFULL CREATION MSG AND DISPLAY ERROR MSG ONLY

$sql = "CREATE TABLE IF NOT EXISTS submit_property_information(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name_owner VARCHAR(255) NOT NULL,
    number_owner TEXT(1000) NOT NULL,
    email_owner VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    overview VARCHAR(255) NOT NULL,
    type_detail VARCHAR(255) NOT NULL,
    status_detail VARCHAR(255) NOT NULL,
    year_built INT(10) NOT NULL,
    stories INT(10) NOT NULL,
    room_count INT(10) NOT NULL,
    parking INT(10) NOT NULL,
    internet VARCHAR(255) ,
    garage VARCHAR(255) ,
    air_conditioning VARCHAR(255) ,
    dishwasher VARCHAR(255) ,
    disposal VARCHAR(255) ,
    balcony VARCHAR(255) ,
    gym VARCHAR(255) ,
    playroom VARCHAR(255) ,
    bar VARCHAR(255),
    price INT(10) NOT NULL,
    price_label INT(10) NOT NULL,
    beds INT(10) NOT NULL,
    bath INT(10) NOT NULL,
    size INT(10) NOT NULL,
    address_info TEXT(65535),
    name_file VARCHAR(255),
    file_type VARCHAR(255),
    file_data VARCHAR(255) ,
    reg_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($conn->query($sql) === TRUE) {
    echo "";
}else{
    die("Error creating table: " . $conn->error);
}








// $sql = "CREATE TABLE IF NOT EXISTS basic_information(
//     title VARCHAR(255) NOT NULL,
//     overview VARCHAR(255) NOT NULL,
//     reg_date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === TRUE) {
//     echo "Table basic_information created successfully";
// }else{
//     echo "Error creating table: " . $conn->error;
// }
  

// $sql = "CREATE TABLE IF NOT EXISTS key_information(
//     type_detail VARCHAR(255) NOT NULL,
//     status_detail VARCHAR(255) NOT NULL,
//     year_built INT(10) NOT NULL,
//     stories INT(10) NOT NULL,
//     room_count INT(10) NOT NULL,
//     parking INT(10) NOT NULL
    
// )";

// if($conn->query($sql) === TRUE) {
//     echo "Table key_information created successfully";
// }else{
//     echo "Error creating table: " . $conn->error;
// }


// $sql = "CREATE TABLE IF NOT EXISTS main_information(
//     price INT(10) NOT NULL,
//     price_label INT(10) NOT NULL,
//     beds INT(10) NOT NULL,
//     bath INT(10) NOT NULL,
//     size INT(10) NOT NULL
    
// )";

// if($conn->query($sql) === TRUE) {
//     echo "Table main_information created successfully";
// }else{
//     echo "Error creating table: " . $conn->error;
// }


// $sql = "CREATE TABLE IF NOT EXISTS amenities_information(
//     internet VARCHAR(255) ,
//     garage VARCHAR(255) ,
//     air_conditioning VARCHAR(255) ,
//     dishwasher VARCHAR(255) ,
//     disposal VARCHAR(255) ,
//     balcony VARCHAR(255) ,
//     gym VARCHAR(255) ,
//     playroom VARCHAR(255) ,
//     bar VARCHAR(255)
    
// )";

// if($conn->query($sql) === TRUE) {
//     echo "Table amenities_information created successfully";
// }else{
//     echo "Error creating table: " . $conn->error;
// }


// $sql = "CREATE TABLE IF NOT EXISTS location_information(
//     address_info TEXT(65535),

// )";

// if($conn->query($sql) === TRUE) {
//     echo "Table basic_information created successfully";
// }else{
//     echo "Error creating table: " . $conn->error;
// }

// $sql = "CREATE TABLE IF NOT EXISTS file_upload_information(
//     title VARCHAR(255) NOT NULL,
//     overview VARCHAR(255) NOT NULL,
    
// )";

// if($conn->query($sql) === TRUE) {
//     echo "Table file_upload_information created successfully";
// }else{
//     echo "Error creating table: " . $conn->error;
// }



//3. INSERT INTO TABLES USING PREPARED STATEMENT SO AS TO AVOID SQL INJECTION ATTACK

$stmt = $conn->prepare("INSERT INTO submit_property_information (name_owner,number_owner,email_owner,title,overview,type_detail,status_detail,year_built,stories,room_count,parking,internet,garage,air_conditioning,dishwasher,disposal,balcony,gym,playroom,bar,price,price_label,beds,bath,size,address_info,name_file,file_type,file_data) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssiiiisssssssssiiiiissss",$name_owner,$number_owner,$email_owner,$title,$overview,$type,$status,$year_built,$stories,$room_count,$parking,$internet,$garage,$air_conditioning,$dishwasher,$disposal,$balcony,$gym,$playroom,$bar,$price,$price_label,$beds,$baths,$size,$address,$name_of_file_uploaded,$file_type_uploaded,$file_data_uploaded);

// set parameters and execute

$name_owner = $owner_name_details;
$number_owner = $owner_number_details;
$email_owner = $owner_email_details;
$title = $basic_info_title;
$overview = $basic_info_overview;
$type = $key_details_type;
$status = $key_details_status;
$year_built = $key_details_year_built;
$stories = $key_details_stories;
$room_count = $key_details_room_count;
$parking = $key_details_parking_space;
$internet = $amenities_internet;
$garage = $amenities_garage;
$air_conditioning = $amenities_air_conditioning;
$dishwasher = $amenities_dishwasher;
$disposal = $amenities_disposal;
$balcony = $amenities_balcony;
$gym = $amenities_gym;
$playroom = $amenities_playroom;
$bar = $amenities_bar;
$price = $main_details_price;
$price_label = $main_details_price_label;
$beds = $main_details_beds;
$baths = $main_details_baths;
$size = $main_details_size;
$address = $location_address;
$name_of_file_uploaded  = $file_name ;
$file_type_uploaded = $file_type ;
$file_data_uploaded = $file_tmp_name ;
$stmt->execute();


// $stmt = $conn->prepare("INSERT INTO basic_informatin () VALUES (?, ?)");
// $stmt->bind_param("ss", $title, $overview);

// // set parameters and execute
// $type = "";
// $status = "";
// $year_built = "";
// $stories = "";
// $room_count = "";
// $parking = "";
// $stmt->execute();




// $stmt = $conn->prepare("INSERT INTO basic_informatin () VALUES (?, ?)");
// $stmt->bind_param("ss", $title, $overview);

// // set parameters and execute
// $internet = "";
// $garage = "";
// $air_conditioning = "";
// $dishwasher = "";
// $disposal = "";
// $balcony = "";
// $gym = "";
// $playroom = "";
// $bar = "";
// $stmt->execute();




// $stmt = $conn->prepare("INSERT INTO basic_informatin () VALUES (?, ?)");
// $stmt->bind_param("ss", $title, $overview);

// // set parameters and execute
// $price = "";
// $price_label = "";
// $beds = "";
// $baths = "";
// $size = "";
// $stmt->execute();




// $stmt = $conn->prepare("INSERT INTO basic_informatin () VALUES (?, ?)");
// $stmt->bind_param("ss", $title, $overview);

// // set parameters and execute
// $address = "";
// $stmt->execute();









//4.SELECT DATA TO DISPLAY ON SCREEN FOR TESTING PURPOSE .COMMENT ALWAYS AND UNCOMMENT DURING TESTING .TO BE DONE BY SIR


$conn->close();

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
