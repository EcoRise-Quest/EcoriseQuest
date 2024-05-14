<?php
include_once 'header.php';
include_once 'functions.php';
include_once 'config.php';
include_once 'dbConnect.php';
?>

<!DOCTYPE html>
<html5 lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="stylesheets/homes.css"> <!--css for styling the home page-->
    <link rel="stylesheet" href="stylesheets/challenges.css"> <!--css for styling the quick challenges section-->
    
    <!--adding jQuery library to handle the paypal form submission and retrieving data -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <!--Adding the header-->
    <div class="cover">
        <!--cover page section-->
        <div class="quote_btn">
            <!--cover page quote-->
            <div>
                <p>EMBRACE THE ECORISE LIFESTYLE WITH DAILY ECOFRIENDLY CHALLENGES FOR ALL</p>
            </div>
            <!--cover page button "try it now"-->
            <?php
            // Check if the user is logged in and user_id is set in the session
            if (isset($_SESSION['user_id'])) {
                // Check if the user is subscribed to the package
                $is_subscribed = checkSubscriptionStatus($_SESSION['user_id'], $conn);

                // Determine the URL for the Challenges navigation based on subscription status
                $_SESSION['challenges_url'] = $is_subscribed ? "extra_challenges.php" : "default_challenges.php";
            } else {
                // If user is not logged in, set default URL for challenges
                $challenges_url = "default_challenges.php";
            }
            ?>

            <!--try button that directs the user to the challenges page based on their subscription status-->
            <div class="try_btn_container">
                <a class="try_btn" href="<?php echo $challenges_url; ?>">Try it Now</a>                 
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

    <!--intro section-->
    <div class="intro_main">
        <div class="intro_man_text">
            <!--adding the man image-->
            <div class="man"><img src="images/intro/man_watering.png"></div>
            <div class="intro">
                <!--adding the intro info-->
                <h2>ECORISE QUEST</h2>
                <p>
                    Welcome to Eco Rise Quest, where sustainability meets adventure! Are you ready to embark on a journey towards a greener,
                     more eco-conscious lifestyle? Our platform offers daily eco-challenges designed to inspire and motivate you to make 
                     positive changes for the planet. From simple yet impactful tasks like "Meatless Monday" to "Bring Your Own" initiatives,
                     each challenge aligns with sustainability goals and provides educational insights into the environmental impact of 
                     your actions. Join our community, earn Eco Points, and contribute to a more sustainable future. Let's rise together 
                     for a healthier planet!
                </p>
            </div>
        </div>
        <!--adding the design "intro_layer" image-->
        <div class="intro_layer">
            <img src="images/intro/layer.png">
        </div>
        <br><br><br><br><br>
    </div>
    <!--doubts section-->
    <div class="doubts">
        <div class="doubt_left">
            <!--"how it works" section-->
            <div class="doubt_quest">
                <!--adding image for the section "how it works"-->
                <img src = "images/doubts/work.png" alt = "Icon for How it works">
                <!--written content of "how it works" section-->
                <div class="text_content">
                    <h2>HOW DOES IT WORK</h2>
                    <p>EcoRise Quest works by providing users with daily eco-friendly challenges. Simply log in to discover your challenge of the day complete with easy-to-follow instructions, and earn EcoPoints for each task. Track your progress, join the community, and make a positive impact on the environment—one challenge at a time.</p>
                </div> 
            </div>
            <!--"Do i need an account" section-->
            <div class="doubt_quest">
                <!--adding image for the section "do i need an account"-->
                <img src = "images/doubts/account.png" alt = "Icon for Account">
                <!--written content of "do i need an account" section-->
                <div class="text_content">
                    <h2>DO I NEED AN ACCOUNT?</h2>
                    <p>Yes! You can access the first 6 challenges for free just by creating an account. If you want access to all challenges for a month, it’s best to subscribe to our package.</p>   
                </div>          
            </div>
        </div>
        <div class="doubt_right">
            <div class="doubt_lamp">
                <!--inserting the lamp image-->
                <img src="images/doubts/lamp.png">
            </div>
            <div class="doubt_head">
                <!--inserting the doubts heading-->
                <h1>Doubts?</h1>
            </div>
        </div>
    </div>
   
    <!-- pricing section-->
    <?php

    if (isset($_SESSION['email']) || isset($_SESSION['google_loggedin'])) {
        // User is logged in
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : $_SESSION['id'];

        // Check subscription status
        $is_subscribed = checkSubscriptionStatus($user_id, $db);

        if ($is_subscribed) {
            // User is subscribed, display cancel subscription button
            ?>
            <div class="pricing_bg">
                <div class="pricing_heading">
                    <h1>Plans and Pricing</h1>
                </div>
                
                <div class="price_container">
                    <div class="price_box">
                        <!-- Basic Plan -->
                        <h2>Basic</h2>
                        <p>Free (Limited Features)</p>
                        <ul>
                            <li>6 challenge invitations aligning with UN SDG</li>
                            <li>On-platform challenges with external partners</li>
                            <li>Eco scores tracking & insights available</li>
                        </ul>
                        <!--directs user to the login page-->
                        <button onclick="checkLogin()">Sign In</button>
                    </div>

                    <!-- Standard Plan -->
                    <div class="price_box">
                        <h2>Standard</h2>
                        <p>$4.99/month</p>
                        <ul>
                            <li>Everything in the Basic Plan.</li>
                            <li>Access to eco-friendly challenges section.</li>
                            <li>Daily/weekly/monthly challenges.</li>
                            <li>Enhanced community forum features.</li>
                        </ul>
                        <h2>Subscribed</h2>

                        <!--Cancels the package subscription for the user-->
                        <form action="cancelSubscription.php" method="post">
                            <input type="submit" value="Cancel Subscription">
                        </form>
                    </div>

                    <!-- Premium Plan -->
                    <div class="price_box">
                        <h2>Premium</h2>
                        <p>Coming Soon...</p>
                        <ul>
                            <li>Everything in the Standard Plan.</li>
                            <li>Dedicated customer support.</li>
                            <li>Ad free experience.</li>
                        </ul>
                        <button>Coming Soon...</button>

                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br><br>
            </div>
            <?php
        } else {
            // User is not subscribed, display subscribe form
            ?>
            <div class="pricing_bg">
                <div class="pricing_heading">
                <h1>Plans and Pricing</h1>
                </div>
                
                <div class="price_container">
                    <div class="price_box">
                        <!-- Basic Plan -->
                        <h2>Basic</h2>
                        <p>Free (Limited Features)</p>
                        <ul>
                            <li>6 challenge invitations aligning with UN SDG</li>
                            <li>On-platform challenges with external partners</li>
                            <li>Eco scores tracking & insights available</li>
                        </ul>
                        <button onclick="checkLogin()">Sign In</button>
                    </div>

                    <!-- Standard Plan -->
                    <div class="price_box">
                        <h2>Standard</h2>
                        <p>$4.99/month</p>
                        <ul>
                            <li>Everything in the Basic Plan.</li>
                            <li>Access to eco-friendly challenges section.</li>
                            <li>Daily/weekly/monthly challenges.</li>
                            <li>Enhanced community forum features.</li>
                        </ul>
                        <!--paypal form inputs-->
                        <form action="<?php echo PAYPAL_URL; ?>" method="post" id="paypal_form">
                            <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                            <input type="hidden" name="item_name" value="Packages: Standard">
                            <input type="hidden" name="amount" value="4.99">
                            <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                            <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
                            <!--form submit button-->
                            <input class="pck_subscribe_btn" type="submit" name="submit" border="0" value="Subscribe">
                        </form>
                    </div>

                    <!-- Premium Plan -->
                    <div class="price_box">
                        <h2>Premium</h2>
                        <p>Coming Soon...</p>
                        <ul>
                            <li>Everything in the Standard Plan.</li>
                            <li>Dedicated customer support.</li>
                            <li>Ad free experience.</li>
                        </ul>
                        <button>Coming Soon...</button>

                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br><br>
            </div>

            <!--js for paypal submimt form to retrieve data-->
            <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery("#paypal_form").submit(function(){
                    // Get the user_id value from the hidden input field
                    var user_id = jQuery("[name='user_id']").val();
                    // Get the amount value from the hidden input field
                    var amount = jQuery("[name='amount']").val();
                    // Get the item value from the hidden input field
                    var item = jQuery("[name='item_name']").val();
                    // Set data using retrieved values
                    setData(amount, item, user_id);
                });
                // Function to send data to server
                function setData(amount, item, user_id) {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        // Handle response here if needed
                    };
                    // Pass user_id along with amount and item to insertData.php
                    xhttp.open("GET", "insertData.php?amount=" + amount + "&item=" + item + "&user_id=" + user_id, true);
                    xhttp.send();
                }
            });
        </script>
            <?php
        }
    } else {
        // User is not logged in
        ?>
        <div class="pricing_bg">
            <div class="pricing_heading">
                <h1>pricing and plans</h1>
            </div>
            
            <div class="price_container">
                <div class="price_box">
                    <!-- Basic Plan -->
                    <h2>Basic</h2>
                    <p>Free (Limited Features)</p>
                    <ul>
                        <li>6 challenge invitations aligning with UN SDG</li>
                        <li>On-platform challenges with external partners</li>
                        <li>Eco scores tracking & insights available</li>
                    </ul>
                    <button onclick="checkLogin()">log in</button>
                </div>

                <!-- Standard Plan -->
                <div class="price_box">
                    <h2>Standard</h2>
                    <p>$7.99/month</p>
                    <ul>
                        <li>Everything in the Basic Plan.</li>
                        <li>Access to eco-friendly challenges section.</li>
                        <li>Daily/weekly/monthly challenges.</li>
                        <li>Enhanced community forum features.</li>
                    </ul>
                    <div>
                        <!--displaying a popup on button click that directs the user to the login page-->
                        <button class="log_to_sub_msg" onclick="openPopup()">Subscribe</button>

                    </div>
                </div>
                <!-- Premium Plan -->
                <div class="price_box">
                    <h2>Premium</h2>
                    <p>Coming Soon...</p>
                    <ul>
                        <li>Everything in the Standard Plan.</li>
                        <li>Dedicated customer support.</li>
                        <li>Ad free experience.</li>
                    </ul>
                    <button>Coming Soon...</button>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
        </div>
        <?php
    }
    ?>

    <!--pop up container in case user is not logged in and trying to subscribe a package-->
     <div class="popup-container" id="popup">
         <button class="close-btn" onclick="closePopup()">&#10006;</button><br>
         <h2>Sign in to your Account</h2>
         <p>Get access to exclusive Challenges!</p>
          <button class="signup-btn" onclick="redirectToLogin()">Login</button>
     </div>

     <!--BLURRIING THE BG-->
     <div class="blur-background" id="blur-background"></div>

    <script>
        //DIRECTING TO THE LOGIN PAGE
        function checkLogin() {
            window.location.href = "login.php"; // Redirect to login page
        }
    </script>

    <!--quick challenges section-->

    <!--MAIN CONTAINER CONTAING THE BG COLOR-->
    <div class="quick_clg_bg">
        <!--main heading for quick challenges section-->
        <div class="quick_heading">
            <h1>Quick Challenges</h1>
        </div>
            <!--first 6 challenges container-->
        <div class="ch_container">
            <!--box and details classes style each challenge box and their buttons respectively-->
            <!--toggle action outputs either the challenge instruction or the sign in pop up based on the user's login status -->
            <div class="box details"><img src="images/challenges/challenge_one.png"><button class="detail_btn" onclick="toggleAction(1)">Details</button></div>
            <div class="box details"><img src="images/challenges/challengetwo.png"><button class="detail_btn" onclick="toggleAction(2)">Details</button></div>
            <div class="box details"><img src="images/challenges/challengethree.png"><button class="detail_btn" onclick="toggleAction(3)">Details</button></div>
            <div class="box details"><img src="images/challenges/challengefour.png"><button class="detail_btn" onclick="toggleAction(4)">Details</button></div>
            <div class="box details"><img src="images/challenges/challengefive.png"><button class="detail_btn" onclick="toggleAction(5)">Details</button></div>
            <div class="box details"><img src="images/challenges/challengesix.png"><button class="detail_btn" onclick="toggleAction(6)">Details</button></div>
        </div>

        <!--setting condition to check if the user has logged in and has subscribed and directing to different pages based on this condition-->
        <?php
        // Check if the user is logged in and user_id is set in the session
        if (isset($_SESSION['id'])) {
            // Check if the user is subscribed to the package
            $is_subscribed = checkSubscriptionStatus($_SESSION['id'], $conn);

            // Determine the URL for the Challenges navigation based on subscription status
            $challenges_url = $is_subscribed ? "extra_challenges.php" : "default_challenges.php";
            $_SESSION['challenges_url'] = $challenges_url; //Making it a global variable
        } else {
            // If user is not logged in, set default URL for challenges
            $challenges_url = "default_challenges.php";
            $_SESSION['challenges_url'] = $challenges_url; //Added this line
        }
        ?>
                
        <!--more button directing to the challenges page based on the users subscription status-->
        <div class="moree">
            <a class="more_btn" href="<?php echo $challenges_url; ?>">More</a>
        </div>
    </div>
 
    <!------------Pop-up containers of first 6 challenges--------------->

     <!--sign in pop up incase the user is not logged in-->
    <div class="popup-container" id="popup">
        <button class="close-btn" onclick="closePopup()">&#10006;</button><br>
        <h2>Sign Up For an Account</h2>
        <p>Get access to exclusive Challenges!</p>
        <button class="signup-btn" onclick="redirectToLogin()">Login</button>
    </div>

    <!--ch 1 pop up container-->
    <div class="ch_img" id="ch_img_1"> 
        <img src="images/ch_details/ch1_details.png">
        <button class="close_btn" onclick="closeChallengeImage(1)">&#10006;</button>

        <!--adding amazon affiliation link for challenge 1-->
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/book.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>The Meatless Monday Family Cookbook: Kid-Friendly, Plant-Based Recipes [Go Meatless One Day a Week - or Every Day!]</h2>
            </div>
            <div class="pro">
                <p>The Meatless Monday Family Cookbook features more than 100 delicious, plant-based recipes perfect for busy weeknights, or for a meat-free meal. From filling Lentil Bolognese with Spaghetti to Smoky BBQ Burgers, these meals will satisfy even the pickiest of palates. And most can be made in 30 minutes or less!</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3Utnkrj" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/veg.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Brieftons 5-Blade Vegetable Spiralizer: Strongest-Heaviest Spiral Slicer, Best Veggie Pasta Spaghetti Maker for Low Carb/Paleo/Gluten-Free/Vegan Meals, With Extra Blade Caddy, 4 Recipe Ebooks</h2>
            </div>
            <div class="pro">
                <p>The Brieftons 5-blade spiralizer lets you turn fresh veggies into faux-noodles, which can then be used to make healthy and delicious meals in no time! It's the best kitchen gadget for a healthier you and for more creative cooking.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/44BBbk2" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/basket.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Steamer Basket Stainless Steel Vegetable Steamer Basket for Zocy Steaming Cooking (Small (5" to 9"))</h2>
            </div>
            <div class="pro">
                <p>The vegetable steamer can be multi-used as a strainer, fruit basket or serving bowl. </p>
            </div>
            <div class="button">
                <a href="https://amzn.to/44A8O5t" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/pea.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Anthony's Textured Vegetable Protein, TVP, 1.5 lb, Gluten Free, Vegan, Made in USA, Unflavored</h2>
            </div>
            <div class="pro">
                <p>Use to Make Vegetarian & Vegan Versions of Meat Based Dishes like Burgers, Tacos, Chili and more!</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/44A8T9h" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 2 pop up container-->
    <div class="ch_img" id="ch_img_2"> 
        <img src="images/ch_details/ch2_details.png">
        <button class="close_btn" onclick="closeChallengeImage(2)">&#10006;</button>
    
        <!--amazon affiliation link for challenge 2-->
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/fitbit.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Fitbit Charge 4 Fitness and Activity Tracker with Built-in GPS, Heart Rate, Sleep & Swim Tracking, Black/Black, One Size (S &L Bands Included)</h2>
            </div>
            <div class="pro">
                <p>Use built-in GPS to see your pace and distance on screen during outdoor runs, rides, hikes and more and see a workout intensity map in the app that shows your heart rate changes along your route</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/44uPPcL" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/water.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Water Buffalo Hydration Backpack - Lightweight Hydration Pack with 2L Water Bladder - Water Backpack for Hiking, Running, Biking, and Raves - Road Runner 12L Hydropack Backpackd</h2>
            </div>
            <div class="pro">
                <p>The Road Runner water backpack for running is crafted with lightweight materials, ensuring minimal strain during your outdoor activities.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3yl2gvq" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 3 pop up container-->
    <div class="ch_img" id="ch_img_3"> 
        <img src="images/ch_details/ch3_details.png">
        <button class="close_btn" onclick="closeChallengeImage(3)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/bottle.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>SPECIAL MADE Collapsible Water Bottles Cups Leakproof Valve Reusable BPA Free Silicone Foldable Travel Water Bottle Cup for Gym Camping Hiking Travel Sports Lightweight Durable</h2>
            </div>
            <div class="pro">
                <p>The Special Made 600ml collapsible water bottle - your perfect on-the-go companion. Its compact design folds down to just a few inches, making it ideal for travel, camping, and sports.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/4adI5Nr" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/wax.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Bee's Wrap Reusable Beeswax Food Wraps Made in the USA, Eco Friendly Beeswax Wraps for Food, Sustainable Food Storage Containers, Organic Cotton Food Wraps, Assorted 3 Pack (S, M, L), Honeycomb</h2>
            </div>
            <div class="pro">
                <p>ECO FRIENDLY REUSABLE FOOD WRAPS are here to eliminate single-use plastic wrap from your kitchen. The green alternative to plastic food storage.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3y2hohd" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 4 pop up container-->
    <div class="ch_img" id="ch_img_4"> 
        <img src="images/ch_details/ch4_details.png">
        <button class="close_btn" onclick="closeChallengeImage(4)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/thermo.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Ecobee New Smart Thermostat Enhanced - Programmable Wifi Thermostat - Works with Siri, Alexa, Google Assistant - Energy Star Certified - Smart Home</h2>
            </div>
            <div class="pro">
                <p>The all new ecobee's Smart Thermostat Enhanced gives you automatic energy savings and adapts to your lifestyle by adjusting temperature based on occupancy, suggesting schedule changes, and optimizing your energy savings. </p>
            </div>
            <div class="button">
                <a href="https://amzn.to/4a6LHk9" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/led.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Amazon Basics Smart A19 LED Light Bulb, 2.4 GHz Wi-Fi, 7.5W (Equivalent to 60W) 800LM, 2700K, Works with Alexa Only, 4-Pack, Dimmable Soft White</h2>
            </div>
            <div class="pro">
                <p>Save energy by creating custom Alexa Routines for daily and unique events.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/4bLsyWv" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 5 pop up container-->
    <div class="ch_img" id="ch_img_5"> 
        <img src="images/ch_details/ch5_details.png">
        <button class="close_btn" onclick="closeChallengeImage(5)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/tote.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>TOPDesign 24-Pack Economical 16"x15" Cotton Tote Bags, Lightweight Medium Reusable Grocery Shopping Cloth Bag, Suitable for DIY, Advertising, Promotion, Gift, Activity</h2>
            </div>
            <div class="pro">
                <p>Great for painting and decorating projects at home, at school, or in camp, add your own touch with paint and other craft tools for a personalized gift bags to your sweetheart, parents, teacher, student, even yourself.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3yjT2zB" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/wrap.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>SPLF 10 Pack Reusable Sandwich Bags Dishwasher Safe, Reusable Quart Freezer Bags, Leakproof Reusable Storage Bags Silicone and Plastic Free for Marinate Meats, Cereal, Lunch, Veggies</h2>
            </div>
            <div class="pro">
                <p>Choose SPLF brand for TRULY food-grade reusable storage bags. Made of food-grade PEVA material that is PVC, BPA, Chloride and Lead free. Healthy and safe for family and earth.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3WyqxZk" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 6 pop up container-->
    <div class="ch_img" id="ch_img_6"> 
        <img src="images/ch_details/ch6_details.png">
        <button class="close_btn" onclick="closeChallengeImage(6)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/scooter.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Caroma Electric Skateboards with Wireless Remote Control, Max 12.4 MPH and 8 Miles Range, Electric Skateboards for Adults and Beginners, Ideal Skateboard Gifts for Kids Adults</h2>
            </div>
            <div class="pro">
                <p>The electric skateboard is UL 2272 certified and made of 7 layers rock hard maple deck, which can withstand various stamping collisions without deformation, and has better flexibility, stability and durability.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/4acyaaM" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
   
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/bottle.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>SPECIAL MADE Collapsible Water Bottles Cups Leakproof Valve Reusable BPA Free Silicone Foldable Travel Water Bottle Cup for Gym Camping Hiking Travel Sports Lightweight Durable</h2>
            </div>
            <div class="pro">
                <p>The Special Made 600ml collapsible water bottle - your perfect on-the-go companion. Its compact design folds down to just a few inches, making it ideal for travel, camping, and sports.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3UQc8X0" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!------------------adding the blur background---------------------------->
    <div class="blur-background" id="blur-background"></div>

    <!--js to set condition to show the challenge instructin or sign in pop up based on users login status-->
    <script>
        function toggleAction(challengeNumber) {
            <?php if (isset($_SESSION['email']) || isset($_SESSION['google_loggedin'])) { ?>
                showChallengeImage(challengeNumber); // User is logged in, show challenge image
            <?php } else { ?>
                openPopup(); // User is not logged in, show sign up popup
            <?php } ?>
        }
    </script>

    <!--pricing page user alredy logged in trying to log in again-->
    <script>
        function checkLogin() {
            <?php if (isset($_SESSION['email']) || isset($_SESSION['google_loggedin'])) { ?>
            alert("You're already logged in!");
            <?php } else { ?>
            window.location.href = "login.php"; // Redirect to login page
            <?php } ?>
        }
    </script>

    <!--clouds background (ux design)-->
    <div class="clouds">
        <br><br><br><br><br><br><br><br><br>
    </div>


    <!---Footer-->
    <div class="footer">
        <div class="footer_txt">
            <!--adding the website name-->
            <h1>ECORISE QUEST</h1>
            <!--adding the navigation section-->
            <ul class="menu-footer">
                <li><a href="index.php" class="footer-menu-item">Home</a></li>
                <li><a href="about.php" class="footer-menu-item">About Us</a></li>
            </ul>
            <h2>Contact Us</h2>
            <!--adding the social media links-->
            <div class="social-media">
                <a href="https://www.facebook.com/profile.php?id=61559238779671&mibextid=ZbWKwL"><img src="images/footer/facebook.png" alt="Facebook"></a>
                <a href="https://x.com/EcoriseQuest?t=hV9GxcCdgtxlYISriWMP_A&s=09"><img src="images/footer/twitterx.png" alt="X"></a>
                <a href="https://www.instagram.com/ecorisequest/?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D"><img src="images/footer/instagram.png" alt="Instagram"></a>
                <a href="https://youtube.com/@ecorisequest?si=wXj2CAnUTZHpR5y3e"><img src="images/footer/youtube.png" alt="Youtube"></a>
            </div>
        </div>
    </div>

    <!--attaching the javascript-->
    <script src="javascripts/challenges.js"></script>
</body>
</html5>