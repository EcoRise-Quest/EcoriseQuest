<?php
// Include database connection file 
include_once 'connect.php';
include 'header.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "You must be logged in to view this page.";
    exit(); // Exit the script if user is not logged in
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>EcoRise Quest</title>
    <link rel="stylesheet" media="all" href="stylesheets/challenges.css"/> <!--attaching the challenges.css for challenges page styling-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    <!--challenges heading-->
    <div class="challenge_heading">
        <h1>Challenges</h1>
    </div>

    <!-----------first 6 challenges container-------------------->

    <div class="ch_container">
        <div class="box details"><img src="images/challenges/challenge_one.png"><button class="detail_btn" onclick="toggleAction(1)">Details</button> </div>
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

    <!---------------Challenges 7-12 container--------------------->

    <div class="ch_container">
        <div class="box details"><img src="images/challenges/challenge_7.png"><button class="detail_btn" onclick="toggleAction(7)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_8.png"><button class="detail_btn" onclick="toggleAction(8)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_9.png"><button class="detail_btn" onclick="toggleAction(9)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_10.png"><button class="detail_btn" onclick="toggleAction(10)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_11.png"><button class="detail_btn" onclick="toggleAction(11)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_12.png"><button class="detail_btn" onclick="toggleAction(12)">Details</button></div>
    </div>


 <!------------Pop-up containers of challenges 7-12--------------->

    <!--ch 7 pop up container-->
    <div class="ch_img" id="ch_img_7"> 
        <img src="images/ch_details/ch7_details.png">
        <button class="close_btn" onclick="closeChallengeImage(7)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/notebook.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Rocketbook Core Reusable Smart Notebook | Innovative, Eco-Friendly, Digitally Connected Notebook with Cloud Sharing Capabilities | Lined, 6" x 8.8", 36 Pg, Infinity Black</h2>
            </div>
            <div class="pro">
                <p>Experience the timeless feel of pen to paper writing with the digital connectedness of a tablet.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/44x2jQY" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 8 pop up container-->
    <div class="ch_img" id="ch_img_8"> 
        <img src="images/ch_details/ch8_details.png">
        <button class="close_btn" onclick="closeChallengeImage(8)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/shower.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>SparkPod Shower Head - High Pressure Rain - Premium Quality Luxury Design - 1-Min Install - Easy Clean Adjustable Replacement for Your Bathroom Shower Heads (Luxury Polished Chrome, 6 Inch Round)</h2>
            </div>
            <div class="pro">
                <p> Each SparkPod Rain Shower Head has a maximum outflow of 1.8 gallons per minute (GPM) so you can save on your water heater bill or enjoy longer hot showers</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/44y3kby" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
 
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/barrel.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>RTS Companies Inc Home Accents 50-Gallon ECO Rain Water Collection Barrel Made with 100% Recycled Plastic Spigot, Black</h2>
            </div>
            <div class="pro">
                <p>Embrace nature's solution to our emerging water shortage-collect rainwater! When drought sets in and rain is short, rain barrels can provide that precious water you need for your lawn and garden</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3Wz065O" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 9 pop up container-->
    <div class="ch_img" id="ch_img_9"> 
        <img src="images/ch_details/ch9_details.png">
        <button class="close_btn" onclick="closeChallengeImage(9)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/composter.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>VIVOSUN Outdoor Tumbling Composter Dual Rotating Batch Compost Bin, 43 Gallon Black Door</h2>
            </div>
            <div class="pro">
                <p>Constant alternation of the two sides will create an uninterrupted stream of nutritious compost</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3UTv33q" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/plants.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Indoor Garden Hydroponics Growing System: 12 Pods Plant Germination Kit Garden Kit Growth Lamp Countertop with LED Grow Light Hydrophonic Planter Grower Harvest Vegetable Lettuce</h2>
            </div>
            <div class="pro">
                <p>Hydroponics growing system with light offers 12 grow stations,allowing you to cultivate a variety of , vegetables, fruits or flowers - perfect for any plant enthusiast! Our customized panels are compatible with most grow baskets and make it easy to harvest your indoor garden. Also it comes with a see-through water level window, allowing one to know how much water in the tank and add water in time with a simple glance.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3UAkbGb" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 10 pop up container-->
    <div class="ch_img" id="ch_img_10"> 
        <img src="images/ch_details/ch10_details.png">
        <button class="close_btn" onclick="closeChallengeImage(10)">&#10006;</button>
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
                <a href="https://amzn.to/4dxoWJ0" class="check-price">CHECK PRICE</a>            
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
                <a href="https://amzn.to/3UPwsHT" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 11 pop up container-->
    <div class="ch_img" id="ch_img_11"> 
        <img src="images/ch_details/ch11_details.png">
        <button class="close_btn" onclick="closeChallengeImage(11)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/grill.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Coleman Triton 2-Burner Propane Camping Stove, Portable Camping Grill/Stove with Adjustable Burners, Wind Guards, Heavy-Duty Latch & Handle, 22,000 Total BTUs of Power for Camping, Tailgating, BBQ</h2>
            </div>
            <div class="pro">
                <p>Easy addition to the campsite, picnic, roadside, and more</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3yi24x2" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/oven.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Energy Wise Premium Solar Oven, Portable Outdoor Solar Cooker & Camping Oven, Reinforced & Foldable with Support Rods, Carry Bag & Full Guide on Outdoor Cooking with Beginner Solar Camping Recipes</h2>
            </div>
            <div class="pro">
                <p>Affordable, Reliable, Durable</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3UOprat" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 12 pop up container-->
    <div class="ch_img" id="ch_img_12"> 
        <img src="images/ch_details/ch12_details.png">
        <button class="close_btn" onclick="closeChallengeImage(12)">&#10006;</button>
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
                <a href="https://amzn.to/3URtGlM" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/spoon.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Mooues 9 Piece Natural Teak Wooden Kitchen Utensil Set with Spoon Rest - Comfort Grip Cooking Spoons and Utensils Holder</h2>
            </div>
            <div class="pro">
                <p>Wooden cutlery set is perfect for display as souvenir or kitchen decoration, so it is also an ideal gift choice for anyone who likes to cook.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3UQu2sQ" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--Challenges 13-18 container-->
    <div class="ch_container">
        <div class="box details"><img src="images/challenges/challenge_13.png"><button class="detail_btn" onclick="toggleAction(13)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_14.png"><button class="detail_btn" onclick="toggleAction(14)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_15.png"><button class="detail_btn" onclick="toggleAction(15)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_16.png"><button class="detail_btn" onclick="toggleAction(16)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_17.png"><button class="detail_btn" onclick="toggleAction(17)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_18.png"><button class="detail_btn" onclick="toggleAction(18)">Details</button></div>
    </div>

 <!------------Pop-up containers of challenges 13-19--------------->

    <!--ch 13 pop up container-->
    <div class="ch_img" id="ch_img_13"> 
        <img src="images/ch_details/ch13_details.png">
        <button class="close_btn" onclick="closeChallengeImage(13)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/tool.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>643Pcs Grommet Tool Kit 1/2 Inch(Inside Hole Size) Eyelet Kit with 320Pcs Eyelets Grommets, 320Pcs Washers, and Grommet Eyelet Pliers for Leather/Belt/Shoes/Crafts</h2>
            </div>
            <div class="pro">
                <p>Practical Grommet Eyelet Plier Kit - 643pcs grommet tool kit 12mm 1/2 inch(inside hole size) included 320pcs 1/2 inch metal eyelets in silver and gold color, 320pcs matching metal washers in silver and gold color, 1* handhold eyelet punch pliers, 1 * hole punch, 1 * user manual.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3y2gYr9" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/reuse.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Rescue, Restore, Redecorate: Amy Howard's Guide to Refinishing Furniture and Accessories</h2>
            </div>
            <div class="pro">
                <p>Welcome to Amy Howard’s Rescue Restore Redecorate lifestyle! Whether you dream of restoring an heirloom to its former beauty or just want to modernize a flea market treasure, Howard has the design and refinishing secrets you need.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3JSVpMm" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 14 pop up container-->
    <div class="ch_img" id="ch_img_14"> 
        <img src="images/ch_details/ch14_details.png">
        <button class="close_btn" onclick="closeChallengeImage(14)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/bird.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Birdream 2 Pack Bird Feeders for Outdoor Hanging, Retro Pagoda Design Fun Installation Bird Feeder, Attracting Wild Birds Chickadees Goldfinches Cardinals Finches and Sparrows</h2>
            </div>
            <div class="pro">
                <p>This bird feeder features a traditional oriental architectural style with a retro pagoda design.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3QDi6rL" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/guide.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>The Northeast Native Plant Primer: 235 Plants for an Earth-Friendly Garden</h2>
            </div>
            <div class="pro">
                <p>Do you want a garden that makes a real difference? Choose plants native to our Northeast region. The rewards will benefit you, your yard, and the environment—from reducing maintenance tasks to attracting earth-friendly pollinators such as native birds, butterflies, and bees.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3JPy2Ub" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 15 pop up container-->
    <div class="ch_img" id="ch_img_15"> 
        <img src="images/ch_details/ch15_details.png">
        <button class="close_btn" onclick="closeChallengeImage(15)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/shirt.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>American Apparel Unisex Organic Fine Jersey Classic T-Shirt</h2>
            </div>
            <div class="pro">
                <p> 100% combed organic ring-spun cotton. 1” double-needle sleeve and bottom hem. Shoulder-to-shoulder tape and 7/8” seamed collar. 100% cotton thread on color White. Unisex style. Side seam. Classic fit.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3UzPzog" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
   
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/wool.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>ALLINCOZY Wool Dryer Balls Laundry Reusable, Natural Eco-Friendly Fabric Softener Reduce Clothing Wrinkles, New Zealand Wool Laundry Balls for Dryer</h2>
            </div>
            <div class="pro">
                <p>Crafted from 100% pure natural wool, ALLINCOZY wool dryer balls offer exceptional quality and reliable performance. These dryer balls laundry reusable are soft, comfortable, non-toxic, and non-irritating, making them an ideal choice to protect your garments and home goods.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/44uPbfl" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 16 pop up container-->
    <div class="ch_img" id="ch_img_16"> 
        <img src="images/ch_details/ch16_details.png">
        <button class="close_btn" onclick="closeChallengeImage(16)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/composter.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>VIVOSUN Outdoor Tumbling Composter Dual Rotating Batch Compost Bin, 43 Gallon Black Door</h2>
            </div>
            <div class="pro">
                <p>Constant alternation of the two sides will create an uninterrupted stream of nutritious compost</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3QD5O2x" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/bag.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>UNNI Compostable Liner Bags, 2.6 Gallon, 9.84 Liter, 100 Count, Extra Thick 0.71 Mil, Samll Kitchen Food Scrap Waste Bags, ASTM D6400, US BPI, CMA & Europe OK Compost Home Certified</h2>
            </div>
            <div class="pro">
                <p>Certified by the Biodegradable Products Institute (BPI) under US standard ASTM D6400. Certified OK Compost Home under European standard EN 13432 by Vinçotte and Tüv Austria.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3ye9KRe" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 17 pop up container-->
    <div class="ch_img" id="ch_img_17"> 
        <img src="images/ch_details/ch17_details.png">
        <button class="close_btn" onclick="closeChallengeImage(17)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/toolkit.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Grenebo Gardening Tools 9-Piece Heavy Duty Gardening Hand Tools with Fashion and Durable Garden Tools Organizer Handbag,Rust-Proof Garden Tool Set, Ideal Gardening Gifts</h2>
            </div>
            <div class="pro">
                <p>Made of high-strength SK-5 carbon steel, this stainless steel gardening tools is durable and rust-proof. Moreover, with highly qualified material like this, these gardening tools are hardly deformed.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/44BXbuT" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
  
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/planter.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Vego garden Tomato Planter Box with Trellis Self-Watering Rolling Raised Garden Bed for Climbing Vegetables Plants Cage - Fog Gray</h2>
            </div>
            <div class="pro">
                <p>A reliable and efficient solution for delivering water to your plants without having to worry about overflow.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/44A8lAf" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 18 pop up container-->
    <div class="ch_img" id="ch_img_18"> 
        <img src="images/ch_details/ch18_details.png">
        <button class="close_btn" onclick="closeChallengeImage(18)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/spoon.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Mooues 9 Piece Natural Teak Wooden Kitchen Utensil Set with Spoon Rest - Comfort Grip Cooking Spoons and Utensils Holder</h2>
            </div>
            <div class="pro">
                <p>Wooden cutlery set is perfect for display as souvenir or kitchen decoration, so it is also an ideal gift choice for anyone who likes to cook.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3QA4DkD" class="check-price">CHECK PRICE</a>            
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
                <a href="https://amzn.to/3Qw14vt" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!------------------Challenges 19-24 container--------------->

    <div class="ch_container">
        <div class="box details"><img src="images/challenges/challenge_19.png"><button class="detail_btn" onclick="toggleAction(19)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_20.png"><button class="detail_btn" onclick="toggleAction(20)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_21.png"><button class="detail_btn" onclick="toggleAction(21)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_22.png"><button class="detail_btn" onclick="toggleAction(22)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_23.png"><button class="detail_btn" onclick="toggleAction(23)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_24.png"><button class="detail_btn" onclick="toggleAction(24)">Details</button></div>
    </div>

    <!------------Pop-up containers of challenges 19-14--------------->

    <!--ch 19 pop up container-->
    <div class="ch_img" id="ch_img_19"> 
        <img src="images/ch_details/ch19_details.png">
        <button class="close_btn" onclick="closeChallengeImage(19)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/bino.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Occer 12x25 Compact Binoculars for Adults and Kids - Large Eyepiece Waterproof Binoculars for Bird Watching - High Powered Easy Focus Binoculars with Low Light Vision for Outdoor Hunting Travel</h2>
            </div>
            <div class="pro">
                <p> This binoculars for adults has 12x magnification, 25mm objective lens and wide field of view, 273ft/1000yds, letting you look farther and see wider. Coating with FMC Broadband coating and premium BAK4 prism, it ensure imaging verisimilar.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3UzPu3W" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/picnic.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>ZAZE Extra Large Picnic Outdoor Blanket, 80''x80'' Waterproof Foldable Blankets Gingham Picnic Mat for Beach, Camping Grass Lawn Park Accessories</h2>
            </div>
            <div class="pro">
                <p>ZAZE Picnic blankets unfolded size is 80''x 80'', it’s large enough to fit for 6-8 adults for siting or 4 adults of lying, giving your children and pets a large area to play.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/4bsmZvF" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 20 pop up container-->
    <div class="ch_img" id="ch_img_20"> 
        <img src="images/ch_details/ch20_details.png">
        <button class="close_btn" onclick="closeChallengeImage(20)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/journal.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Lined Spiral Journal Notebook</h2>
            </div>
            <div class="pro">
                <p>Crafted from 100 GSM thick, ink-friendly paper, our notebook prevents ink bleed-through and ghosting. It accommodates various pens, including ballpoint, gel, and fountain pens. Each page features a day header for effortless date tracking.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/4dpj8l3" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
  
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/sorry.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Hasbro Gaming Sorry! Game</h2>
            </div>
            <div class="pro">
                <p>Hasbro gaming imagines and produces games that are perfect for every age, taste, and event</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/4bnRGSE" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 21 pop up container-->
    <div class="ch_img" id="ch_img_21"> 
        <img src="images/ch_details/ch21_details.png">
        <button class="close_btn" onclick="closeChallengeImage(21)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/brush.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>VIVAGO Biodegradable Bamboo Toothbrushes 10 Pack - BPA Free Soft Bristles Toothbrushes, Eco-Friendly, Compostable Natural Wooden Toothbrush.</h2>
            </div>
            <div class="pro">
                <p>Soft bristles that will clean your teeth without hurting the gums and yet crafted in a way that the bristles will never shed away.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/4adHnQh" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/bar.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>The Earthling Co. Conditioner Bar - Promote Hair Growth, Strengthen & Moisturize All Hair Types - Paraben & Sulfate Free formula with Natural Ingredients</h2>
            </div>
            <div class="pro">
                <p>A quick-building slip detangles and softens hair like bottled conditioner to condition your strands from root to tip, improving your hair's natural moisture; leaving you with strengthened locks that are soft, shiny, & frizz free.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3WPxtBx" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 22 pop up container-->
    <div class="ch_img" id="ch_img_22"> 
        <img src="images/ch_details/ch22_details.png">
        <button class="close_btn" onclick="closeChallengeImage(22)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/storage.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Amazon Basics Collapsible Fabric Storage Cubes Organizer with Handles.</h2>
            </div>
            <div class="pro">
                <p>6 collapsible storage cubes in Beige for storing, organizing, and reducing clutter.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/4dunE1C" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/desktop.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>QIYVLOS Desk Organizer with 3 Drawer, Multi-Functional Pencil Pen Holder for Desk, Desk Organizers and Storage with 5 Compartments, Desktop Organizer for Office Home Art Supplies</h2>
            </div>
            <div class="pro">
                <p>The desk organizer offers ample storage space with 2 pen holders, 1 top tray, 1 notebook holder, 1 note slot, 2 drawers, and 1 large drawer.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3WDTiUa" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 23 pop up container-->
    <div class="ch_img" id="ch_img_23"> 
        <img src="images/ch_details/ch23_details.png">
        <button class="close_btn" onclick="closeChallengeImage(23)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/straws.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Softy Straws Premium Reusable Stainless Steel Drinking Straws With Silicone Tips + Patented Straw Cleaners and Carrying Case</h2>
            </div>
            <div class="pro">
                <p>Premium 9” Metal Straws Made from 18-8 Stainless Steel and Food Grade Silicone.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3URty5M" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/spoon.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Mooues 9 Piece Natural Teak Wooden Kitchen Utensil Set with Spoon Rest - Comfort Grip Cooking Spoons and Utensils Holder</h2>
            </div>
            <div class="pro">
                <p>Wooden cutlery set is perfect for display as souvenir or kitchen decoration, so it is also an ideal gift choice for anyone who likes to cook.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3QCvInc" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 24 pop up container-->
    <div class="ch_img" id="ch_img_24"> 
        <img src="images/ch_details/ch24_details.png">
        <button class="close_btn" onclick="closeChallengeImage(24)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/lens.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>High-Power 420-1600mm f/8.3 HD Manual Telephoto Zoom Lens for Canon EOS 80D, EOS 90D, Rebel T3, T3i, T5, T5i, T6i, T6s, T7, T7I, T8I, SL3, EOS 70D, EOS 5D, EOS5D IV, EOS 6D II, EOS 7D II SLR Cameras</h2>
            </div>
            <div class="pro">
                <p>This 420mm-1600mm lens, a must-have Canon long range lens, is designed for capturing clear long-distance camera shots, providing enhanced photographic flexibility. </p>
            </div>
            <div class="button">
                <a href="https://amzn.to/44vHZiQ" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/tripod.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>CAMBOFOTO 74"-Camera-Tripod, Porfessional Aluminum Heavy Duty Vlog/Video Recording Tripod Stand with Travel Bag for Mirrorless/DSLR/Phone/Camcorder/Spotting Scopes</h2>
            </div>
            <div class="pro">
                <p>This is a lightweight tripod that can be adjusted in height from 20 to 74 inches, suitable for cameras and cell phones. </p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3UPvZp7" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--Challenges 25-30 container-->
    <div class="ch_container">
        <div class="box details"><img src="images/challenges/challenge_25.png"><button class="detail_btn" onclick="toggleAction(25)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_26.png"><button class="detail_btn" onclick="toggleAction(26)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_27.png"><button class="detail_btn" onclick="toggleAction(27)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_28.png"><button class="detail_btn" onclick="toggleAction(28)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_29.png"><button class="detail_btn" onclick="toggleAction(29)">Details</button></div>
        <div class="box details"><img src="images/challenges/challenge_30.png"><button class="detail_btn" onclick="toggleAction(30)">Details</button></div>
    </div>

    <!------------Pop-up containers of challenges 25-30--------------->

    <!--ch 25 pop up container-->
    <div class="ch_img" id="ch_img_25"> 
        <img src="images/ch_details/ch25_details.png">
        <button class="close_btn" onclick="closeChallengeImage(25)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/light.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Gritin 19 LED Rechargeable Book Light for Reading in Bed with Memory Function- Eye Caring 3 Color Temperatures,Stepless Dimming Brightness,80 Hrs Runtime Lightweight Clip On Light </h2>
            </div>
            <div class="pro">
                <p>The reading light adopts a horizontal head design, which has a wider irradiation range. </p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3UNcBsW" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
 
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/glass.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Clic Magnetic Reading Glasses (Long Temples), Computer Readers, Replaceable Lens, Original Long, (M-L, Black, 2.50 Magnification)</h2>
            </div>
            <div class="pro">
                <p>All CliC glasses have adjustable temples that can be fully closed or extended to fit a range of sizes. This style provides an additional 1/2" in length and 35° stem for a bit wider feel. Your size is determined by measuring the full circumference of your head to account for both the frame and permanent rigid headband...see our size chart for more details.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/4dt3y7X" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 26 pop up container-->
    <div class="ch_img" id="ch_img_26"> 
        <img src="images/ch_details/ch26_details.png">
        <button class="close_btn" onclick="closeChallengeImage(26)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/solar.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Jackery SolarSaga 100W Portable Solar Panel for Explorer 240/300/500/1000/1500 Power Station, Foldable US Solar Cell Solar Charger with USB Outputs for Phones (Can't Charge Explorer 440/ PowerPro)</h2>
            </div>
            <div class="pro">
                <p>The Solar Saga 100 features 2 kickstands that can be placed firmly on any surface ground. With just a few seconds of setup, you can start soaking energy from the sun for your Jackery power station. The TPE rubber handle allows you to carry around easily when taking off-grid adventures.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3UQXCOT" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/oven.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Energy Wise Premium Solar Oven, Portable Outdoor Solar Cooker & Camping Oven, Reinforced & Foldable with Support Rods, Carry Bag & Full Guide on Outdoor Cooking with Beginner Solar Camping Recipes</h2>
            </div>
            <div class="pro">
                <p>Affordable, Reliable, Durable</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3JWDvIw" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 27 pop up container-->
    <div class="ch_img" id="ch_img_27"> 
        <img src="images/ch_details/ch27_details.png">
        <button class="close_btn" onclick="closeChallengeImage(27)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/gloves.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Elgood Reusable Dishwashing Cleaning Gloves with Latex free, Cotton lining,Kitchen Gloves 2 Pairs</h2>
            </div>
            <div class="pro">
                <p>These gloves are made from a latex free, PVC material.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/4aYBAPL" class="check-price">CHECK PRICE</a>            
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
                <a href="https://amzn.to/3JRDyWb" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 28 pop up container-->
    <div class="ch_img" id="ch_img_28"> 
        <img src="images/ch_details/ch28_details.png">
        <button class="close_btn" onclick="closeChallengeImage(28)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/oil.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Essential Oils Set - Top 6 Blends for Diffusers, Home Care, Candle Making Scents, Fragrance, Aromatherapy, Humidifiers, Gifts - Peppermint, Tea Tree, Lavender, Eucalyptus, Lemongrass, Orange</h2>
            </div>
            <div class="pro">
                <p>We create our essential oils using rigorously tested ingredients. Top blends, make pampering a luxurious experience with our set of 6 10ml oils.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/44wSKkZ" class="check-price">CHECK PRICE</a>            
            </div>
        </div>

        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/butter.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Better Shea Butter Raw Cocoa Butter - Unrefined, 100% Pure, Food Grade - Use for Cocoa Lip Balm, Stretch Marks Cream, Cacao Butter Cream, Scars Oil, Whipped Lotion - Skin & Hair Moisturizer 1LB Block</h2>
            </div>
            <div class="pro">
                <p>COCOA BUTTER FOR SOAP MAKING, DIY Whipped Body Butter, Lip Balm, DIY Salves, Cocoa Butter Stretch Mark Cream and more. Each product has an insert with links to all our homemade skincare tutorials.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/4b6hcfL" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 29 pop up container-->
    <div class="ch_img" id="ch_img_29"> 
        <img src="images/ch_details/ch29_details.png">
        <button class="close_btn" onclick="closeChallengeImage(29)">&#10006;</button>
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/lint.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Chom Chom Roller Pet Hair Remover and Reusable Lint Roller</h2>
            </div>
            <div class="pro">
                <p>This reusable lint roller requires no adhesives or sticky tape, and can be used again and again.</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/4bombbc" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
 
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/garment.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Zero Waste Patterns: 20 Projects to Sew Your Own Wardrobe</h2>
            </div>
            <div class="pro">
                <p>Zero Waste Patterns offers a modern approach to sustainable sewing. Using natural fabrics and core sewing techniques, learn how to stitch without waste and make a scandi-style collection of 20 garments. </p>
            </div>
            <div class="button">
                <a href="https://amzn.to/4buu2UC" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--ch 30 pop up container-->
    <div class="ch_img" id="ch_img_30"> 
        <img src="images/ch_details/ch30_details.png">
        <button class="close_btn" onclick="closeChallengeImage(30)">&#10006;</button>
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
                <a href="https://amzn.to/3wr8JEC" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
  
        <div class="content-section">
            <div class="image-section">
                <img class="imge" src="images/amazon/grill.png" alt="Product Image">
            </div>
            <div class="product">
                <h2>Coleman Triton 2-Burner Propane Camping Stove, Portable Camping Grill/Stove with Adjustable Burners, Wind Guards, Heavy-Duty Latch & Handle, 22,000 Total BTUs of Power for Camping, Tailgating, BBQ</h2>
            </div>
            <div class="pro">
                <p>Easy addition to the campsite, picnic, roadside, and more</p>
            </div>
            <div class="button">
                <a href="https://amzn.to/3wxgKrC" class="check-price">CHECK PRICE</a>            
            </div>
        </div>
    </div>

    <!--blurring the background-->
    <div class="blur-background" id="blur-background"></div>


    <!--condition for the detail button to work only if the user is logged in-->
    <!--displaying sign-in pop up if the user is not logged in-->


    <script>

        function toggleAction(challengeNumber) {
            <?php if (isset($_SESSION['email']) || isset($_SESSION['google_loggedin'])) { ?>
                showChallengeImage(challengeNumber); // User is logged in, show challenge image
            <?php } else { ?>
                openPopup(); // User is not logged in, show sign up popup
            <?php } ?>
        }
    </script>

    <!--attachiing the external js-->
    <script src="javascripts/challenges.js"></script>
</body>
</html>