<?php 
include_once 'header.php';
include_once 'connect.php';

// Include configuration file
include_once 'config.php';
 
// Include database connection file 
include_once 'dbConnect.php'; 
?>

<!--This page serves as the default challenges page accessible when users visit or log in to the website.
 It displays a limited selection of challenges, currently restricted to six. 
 Access to detailed information for each challenge is enabled only for logged-in users.
-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>EcoRise Quest</title>
    <link rel="stylesheet" media="all" href="stylesheets/challenges.css"/> <!--attaching the challenges.css for challenges page styling-->

</head>
<body>

    <!--challenges heading-->
    <div class="challenge_heading">
        <h1>Challenges</h1>
    </div>

    <!--first 6 challenges container-->
    <div class="ch_container">
        <div class="box details"><img src="images/challenges/challenge_one.png"><button class="detail_btn" onclick="toggleAction(1)">Details</button></div>
        <div class="box details"><img src="images/challenges/challengetwo.png"><button class="detail_btn" onclick="toggleAction(2)">Details</button></div>
        <div class="box details"><img src="images/challenges/challengethree.png"><button class="detail_btn" onclick="toggleAction(3)">Details</button></div>
        <div class="box details"><img src="images/challenges/challengefour.png"><button class="detail_btn" onclick="toggleAction(4)">Details</button></div>
        <div class="box details"><img src="images/challenges/challengefive.png"><button class="detail_btn" onclick="toggleAction(5)">Details</button></div>
        <div class="box details"><img src="images/challenges/challengesix.png"><button class="detail_btn" onclick="toggleAction(6)">Details</button></div>
    </div>


    <!------------Pop-up containers of first 6 challenges--------------->

    <!--sign in pop up incase the user is not logged in-->
    <div class="popup-container" id="popup">
        <button class="close-btn" onclick="closePopup()">&#10006;</button><br>
        <h2>Sign in to your Account</h2>
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

    <!--Challenges 7-12 container-->

    <div class="ch_container">
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
    </div>

    <!--pop up for users to subscribe first for exclusive challenges-->
    <div class="popup-container" id="subscribePopup">
        <button class="close-btn" onclick="closeSubscribePopup()">&#10006;</button>
        <h2><i class="fa-sharp fa-solid fa-crown"></i> Subscribe to Access Exclusive Challenges!</h2>
        <p>Subscribe now to unlock all the challenges and live a more sustainable life.</p>
    </div>
    

    <!--Challenges 13-18 container-->
    <div class="ch_container">
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
    </div>

    <!--Challenges 19-24 container-->
    <div class="ch_container">
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
    </div>

    <!--Challenges 25-30 container-->
    <div class="ch_container">
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
        <div class="box" onclick="openSubscribePopup()"><img src="images/ch_blank.png"></div>
    </div>

    <!--adding the div for the blur background in case of user clicks the detail button-->
    <div class="blur-background" id="blur-background"></div>


    <!--js functions that defines the functionality of the detail button based on user's login status-->
    <script>
        function toggleAction(challengeNumber) {
            <?php if (isset($_SESSION['email']) || isset($_SESSION['google_loggedin'])) { ?>
                showChallengeImage(challengeNumber); // User is logged in, show challenge image
            <?php } else { ?>
                openPopup(); // User is not logged in, show sign up popup
            <?php } ?>
        }
    </script>

    <!--attaching the js-->
    <script src="javascripts/challenges.js"></script>

</body>
</html>