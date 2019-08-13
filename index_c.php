<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>PHP Login Script</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="fontawesome-free/css/all.min.css"/>
        <link rel="stylesheet" href="fontawesome-free/js/all.min.css"/>
        <link rel="stylesheet" href="mycss/mycss.css"/>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    </head>
    <body>
     
        <?php require_once './include/nav.php'; ?>
        <?php include_once 'dbconnect.php'; ?>
        <?php include 'usersontxt.php'; ?>
        <style type="text/css">
            #home{
                background-color: goldenrod;
            }
            #content{
                width: 50%;
                margin: 20px auto;
                border: 1px solid #cbcbcb;
            }
            form{
                width: 50%;
                margin: 20px auto;
            }
            form div{
                margin-top: 5px;
            }
            #img_div{
                width: 80%;
                padding: 5px;
                margin: 15px auto;
                border: 1px solid #cbcbcb;
            }
            #img_div:after{
                content: "";
                display: block;
                clear: both;
            }
            img{
                float: left;
                margin: 5px;
                width: 300px;
                height: 140px;
            }
        </style>
        <style>
.fa {
  padding: 2px;
  font-size: 12px;
  width: 5px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}


<!-- button of delete -->

.btn {
  background-color: goldenrod; /* Blue background */
  border: none; /* Remove borders */
  color: goldenrod; /* White text */
  padding: 0 0; /* Some padding */
  font-size: 8px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: goldenrod;
}




</style>
</head>
<div class="row">
    <div class="col-lg-1">
<h4>SOCIAL NETWORKS</h4>

<!-- Add font awesome icons -->
<a href="https://web.facebook.com/" class="fa fa-facebook"></a>
<a href="https://twitter.com/login" class="fa fa-twitter">Twitter</a>
<a href="https://www.google.com" class="fa fa-google"></a>
<a href="https://www.youtube.com/channel/UC2ugoHF-ue5mElxOH1SKs-Q?view_as=subscribe" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/?hl=en" class="fa fa-instagram"></a>
<a href="#" class="fa fa-skype"></a>
<a href="https://www.yahoo.com/" class="fa fa-yahoo"></a>
</div>
</div>
        
        <?php
        // put your code here
        ?>
        <div class="container-fluid">
                <div class="col-auto"><div class="h3"> welcome</div>
                    <div class="container pull-right-8">
                        <div class="row">
                        <div class="iframe">
                           <!-- <iframe src="http://www.youtube.com/embed/?listType=user_uploads&list=Elimu na Sayansi"frameborder="5" width="480" height="400" scrollig="auto">-->
                                <p>Your browser does not support iframes.</p>
                            </iframe>   
                        
                        </div>
                        </div>
                            
                    <?php
                    // Create database connection
                    $con = mysqli_connect("localhost", "root", "", "image_upload");

                    // Initialize message variable
                    $msg = "";

                    // If upload button is clicked ...
                    if(isset($_POST['upload'])) {
                        // Get image name
                        
                        $image0 = $_FILES['image0']['name'];
                        $image1 = $_FILES['image1']['name'];
                        $image2 = $_FILES['image2']['name'];
                        $image3 = $_FILES['image3']['name'];
                        
                        //temp name of images
                        $temp_name0 = $_FILES['image0']['tmp_name'];
                        $temp_name1 = $_FILES['image1']['tmp_name'];
                        $temp_name2 = $_FILES['image2']['tmp_name'];
                        $temp_name3 = $_FILES['image3']['tmp_name'];
                        
                        
                        // Get text
                        
                         $image_text = mysqli_real_escape_string($con, $_POST['image_text']);
                        // image file directory
                         $target = "uploads/banners/" . basename($image0);
                         $target = "uploads/banners/" . basename($image1);
                         $target = "uploads/banners/" . basename($image2);
                         $target = "uploads/banners/" . basename($image3);
                         
                        $category = mysqli_real_escape_string($con,$_POST['category']);
                        $image_price = mysqli_real_escape_string($con,$_POST['image_price']);
                        $quantity= mysqli_real_escape_string($con,$_POST['quantity']);
                        $image_status = mysqli_real_escape_string($con,$_POST['image_status']);
                        $location = mysqli_real_escape_string($con,$_POST['location']);
                        $contact = mysqli_real_escape_string($con, $_POST['contact']);
                        
                       
                        
                        if($image0 == '' OR $image_text == '' OR $image_price == '' OR $image_status == '' OR $contact == ''){
                         echo "
                      <script>alert('Please fill all the fields!')</script>
                     exit();
                              ";
                         }else{
                        move_uploaded_file($temp_name0,"uploads/banners/$image0");
                        move_uploaded_file($temp_name1,"uploads/banners/$image1");
                        move_uploaded_file($temp_name2,"uploads/banners/$image2");
                        move_uploaded_file($temp_name3,"uploads/banners/$image3");
                    
 /**else {$msg = "Failed to upload image";}

                        if (move_uploaded_file($_FILES['image']['tmp_name'],['image1']['temp_name1'],['image2']['temp_name2'],['image3']['temp_name3'],$target)) {
                            $msg = "Image uploaded successfully";
                        } else {
                            $msg = "Failed to upload image";
                        }**/

                         

                    $sql = "INSERT INTO images(category,image0,image1,image2,image3,image_text,image_price,quantity,location,image_status,contact) VALUES ('$category','$image0',$image1','$image2','$image3','$image_text','$image_price','$quantity','$location',$image_status','$contact' )";
                        // execute query
                        $upload_product = mysqli_query($con, $sql);
                        if($upload_product){
            echo "
                <script>alert('Product inserted successfully')</script>
                exit();
                        ";}
                        
                       // var_dump($sql);
                        
                       
                    }
                    }
                    //plz mafuru Check to sort the topcurrent posts to be at the topmost oof the webpage
                    $result = mysqli_query($con, "SELECT * FROM images");
                    ?>
                    <div class="row">
                        <div class="col-sm-6">
                    <div id="content">
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<div id='img_div'>";
                            echo "<p>" . $row['category'] . "</p>";
                            echo "<img src='uploads/banners/" . $row['image0'] . "' >";
                            echo "<img src='uploads/banners/" . $row['image1'] . "' >";
                            echo "<img src='uploads/banners/" . $row['image2'] . "' >";
                            echo "<img src='uploads/banners/" . $row['image3'] . "' >";
                            echo "<p>" . $row['image_text'] . "</p>";
                            echo "<p>TSHS:". $row['image_price'] . "</p>";
                            echo "<p>Quantity:" . $row['quantity'] . "</p>";
                             echo "<p>Location:" . $row['location'] . "</p>";
                            echo "<p>" . $row['image_status'] . "</p>";
                            echo "<p>Contact:" . $row['contact'] . "</p>";
                            echo "<p>POSTED:" . $row['posted_date'] . "</p>";
                           
                           echo "<div class='row'>
                                    <div class='col-lg-2'>
                                   <button class='btn'><i class= 'fa fa-trash'></i> DELETE!</button>
                                     
                                        </div>
                         
                          </div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                    
                      
                        ?>
                    
                    </div>
                        <div class="container">
                            <h3 class="text-center">ITEM REGISTRATION MENU</h3>
                            
                            <form method="POST" action=" " enctype="multipart/form-data">
                                
                                <div class="row">
                                 <div class="col-lg-6 control-label text-primary">
                                        <label>CATEGORY</label>
                                        <select class="form-control" id="text" name="category"  row="1">
                                            <option>Vehicle and Motorcycle</option>
                                            <option>Electronics</option>
                                            <option>Mobile Phones</option>
                                            <option>Home Appliances</option>
                                            <option>Machines</option>
                                            <option>Decorations</option>
                                            <option>Safety and Security</option>
                                            <option>Baby Products</option>
                                            <option>Entertainments</option>
                                            <option>Cloths and Shoes</option>
                                            <option>Educations and Entrepreneurship</option>
                                            <option>Food and Farming</option>
                                            <option>Others</option>
                                            
                                        </select> 
                                    </div>
                            </div>
                                <input type="hidden" name="size" value="1000000">
                                <div>
                                    <label> UPLOAD ITEM IMAGES</label>
                                    <input type="file" name="image0" placeholder="UPLOAD FIRST IMAGE">
                                </div>
                                <div>
                                    <input type="file" name="image1" placeholder="UPLOAD SECOND IMAGE">
                                </div>
                                
                                <div>
                                    <input type="file" name="image2" placeholder="UPLOAD THIRD IMAGE">
                                </div>
                                
                                <div>
                                    <input type="file" name="image3" placeholder="UPLOAD FORTH IMAGE">
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-md-10">
                                        <label> ITEM DESCRIPTIONS</label>
                                        <textarea class="form-control" cols="6" id="text" name="image_text" rows="2" placeholder="Say something about image">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label> ITEM PRICE</label>
                                        <textarea class="form-control" cols="5" id="text" name="image_price" rows="1" placeholder="price">
                                        </textarea>
                                    </div>
                                    <div class="col-lg-4">
                                        <label> QUANTITY</label>
                                        <textarea class="form-control" cols="5" id="text" name="quantity" rows="1" placeholder="price">
                                        </textarea>
                                    </div>
                                    <div class="col-lg-4 control-label text-primary">
                                        <label>LOCATION</label>
                                        <select class="form-control" id="text" name="location"  row="1">
                                            <option>Arusha</option>
                                            <option> Pwani</option>
                                            <option>Dar es Salaam</option>
                                            <option>Dodoma</option>
                                            <option>Geita</option>
                                            <option>Iringa</option>
                                            <option> Kagera</option>
                                            <option>Katavi</option>
                                            <option>Kigoma</option>
                                            <option>Kilimanjaro</option>
                                            <option>Kusini</option>
                                            <option>Unguja</option>
                                            <option>Lindi</option>
                                            <option> Manyara</option>
                                            <option>Mara</option>
                                            <option>Mbeya</option>
                                            <option>Mjini Magharibi</option>
                                            <option>Morogoro</option>
                                            <option>Mtwara</option>
                                            <option>Mwanza</option>
                                            <option>Njombe</option>
                                            <option>Kaskazini Pemba</option>
                                            <option>Kusini Pemba</option>
                                            <option>Rukwa</option>
                                            <option>Ruvuma</option>
                                            <option>Shinyanga</option>
                                            <option>Singida</option>
                                            <option>Tabora</option>
                                            <option>Tanga</option>
                                            <option>Unguja</option>
                                            <option>Japan</option>
                                            <option>China</option>
                                            <option>USA</option>
                                            <option>United Kingdom</option>
                                            <option>Malaysia</option>
                                            <option>Dubai</option>
                                            <option>Egypt</option>
                                            <option>South Africa</option>
                                            <option>Kenya</option>
                                            <option>Uganda</option>
                                            <option>Other</option>
                                        </select> 
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    
                                    <div class="col-lg-4 control-label text-primary">
                                        <label> STOCK STATUS</label>
                                        <select class="form-control" id="text" name="image_status"  row="1">
                                            <option>AVAILABLE</option>
                                            <option>SOLD</option>
                                        </select> 
                                    </div>
                                    <div class="col-lg-4">
                                        <label> Contact</label>
                                        <textarea class="form-control" cols="2" id="text" name="contact" rows="1">
                                        </textarea>
                                    </div>
                                    
                                </div>
                                <div class="buton">
                                    <button type="submit" name="upload">POST</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                        
                        
                        <script type="text/javascript" src="usersontxt.php?uvon=showon"></script>
                    
            </div>
                    </div>
                </div>
        </div>
  
            <script src="http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&up_channel=Elimu na Sayansi&synd=open&w=320&h=390&title=&border=%23ffffff%7C3px%2C1px+solid+%23999999&output=js"></script>
            <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js"/>
            <link rel="stylesheet" href="bootstrap/js/jquery-1.10.2.js"/>
    </body>

</html>