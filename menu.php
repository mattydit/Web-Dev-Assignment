<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Sergio's Pizza
  </title>
  <link rel = "stylesheet" href = "style.css" />
</head>
<body>
  <div id="titleheader">
    Sergio's Pizza
    <img src="images/logo.png" alt="logo" height="110" width="110" align="absmiddle"/>
  </div>
    <?php if (isset($_SESSION['email'])) : ?>
  <nav>
    <ul id="navbar">
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="locations.html">Locations</a></li>
      <li><a href="about.html">About us</a></li>
        <li style="float:right"><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
    
    <form method="post" id="menu_form_container" action="menu.php">
    <div class="menu_section">
        <div id="menu_title">Main Course</div>
        <div class="menu_body">
            <div class="menu_item">
                <div class="menu_item_name">
                    Pizza Margherita
                </div>
                <div class="menu_item_price">
                    $7
                </div>
                <div class="menu_item_desc">
                    Made with tomato, sliced mozzarella, basil, and extra virgin olive oil.
                </div>
                <img src="images/JustCheese.jpg" alt="margherita">
                <label for="margherita"><b>Add to order</b></label>
                <input type="checkbox" name="margherita" value="margherita">
            </div>
            <div class="menu_item">
                <div class="menu_item_name">
                    Pepperoni Pizza
                </div>
                <div class="menu_item_price">
                    $10
                </div>
                <div class="menu_item_desc">
                    Regular Base, Regular Sauce, Double Pepperoni & Extra Cheese
                </div>
                <img src="images/pepperoni.jpg" alt="pep">
                <label for="pepperoni"><b>Add to order</b></label>
                <input type="checkbox" name="pepperoni" value="pepperoni">
            </div>
            <div class="menu_item">
                <div class="menu_item_name">
                    Hawaiian Pizza
                </div>
                <div class="menu_item_price">
                    $10
                </div>
                <div class="menu_item_desc">
                    Regular Base, Regular Sauce, Ham, Mushrooms & Pineapple
                </div>
                <img src="images/hawaii.jpg" alt="pep">
                <label for="hawaiian"><b>Add to order</b></label>
                <input type="checkbox" name="hawaiian" value="hawaiian">
            </div>
        </div>
    </div>
    <div class="menu_section">
    <div id="menu_title">Sides</div>
        <div class="menu_body">
         <div class="menu_item">
                <div class="menu_item_name">
                    Fried Chicken
                </div>
                <div class="menu_item_price">
                    $4
                </div>
                <div class="menu_item_desc">
                    Succulent chicken marinated to give flavour to the bones.
                </div>
                <img src="images/chicken.jpeg" alt="chicken">
             <label for="chicken_side"><b>Add to order</b></label>
                <input type="checkbox" name="chicken_side" value="chicken_side">
            </div>
            <div class="menu_item">
                <div class="menu_item_name">
                    Chips
                </div>
                <div class="menu_item_price">
                    $3
                </div>
                <div class="menu_item_desc">
                    Salted French Fries golden on the outside and fluffy on the inside.
                </div>
                <img src="images/chips.jpeg" alt="chips">
                <label for="chips"><b>Add to order</b></label>
                <input type="checkbox" name="chips" value="chips">
            </div>
            <div class="menu_item">
                <div class="menu_item_name">
                    Garlic Bread
                </div>
                <div class="menu_item_price">
                    $4
                </div>
                <div class="menu_item_desc">
                    Salted French Fries golden on the outside and fluffy on the inside.
                </div>
                <img src="images/garlic.jpg" alt="garlic">
                <label for="garlic"><b>Add to order</b></label>
                <input type="checkbox" name="garlic" value="garlic_bread">
            </div>
        </div>
    </div>
    
    <div class="menu_section">
    <div id="menu_title">Desserts</div>
        <div class="menu_body">
         <div class="menu_item">
                <div class="menu_item_name">
                    Cookies
                </div>
                <div class="menu_item_price">
                    $3
                </div>
                <div class="menu_item_desc">
                    Our large, warm, gooey chocolate chunk cookies are baked fresh every day in each Restaurant.
                </div>
                <img src="images/menu_cookies.jpg" alt="cookies">
             <label for="cookies"><b>Add to order</b></label>
                <input type="checkbox" name="cookies" value="cookies">
            </div>
            <div class="menu_item">
                <div class="menu_item_name">
                    Brownie
                </div>
                <div class="menu_item_price">
                    $4
                </div>
                <div class="menu_item_desc">
                    Made with lots of dark chocolate giving this brownie a rich, gooey texture. Chocoholics will love this!
                </div>
                <img src="images/brownie.jpeg" alt="brownie">
                <label for="brownie"><b>Add to order</b></label>
                <input type="checkbox" name="brownie" value="brownie">
            </div>
            <div class="menu_item">
                <div class="menu_item_name">
                    Ice Cream
                </div>
                <div class="menu_item_price">
                    $3
                </div>
                <div class="menu_item_desc">
                    Chocolate ice cream with gooey marshmallow, caramel swirls & fudge.
                </div>
                <img src="images/ice.jpg" alt="ice-cream">
                <label for="ice"><b>Add to order</b></label>
                <input type="checkbox" name="ice" value="ice_cream">
            </div>
        </div>
    </div>
        <button type="submit" id="submit_order_btn" name="user_order">Submit Order</button>
    </form>
    <?php else  : ?>
    <nav>
    <ul id="navbar">
      <li><a href="index.php">Home</a></li>
      <li><a class="active" href="menu.html">Menu</a></li>
      <li><a href="locations.html">Locations</a></li>
      <li><a href="about.html">About us</a></li>
      <li style="float:right"><a href="login.php">Log in</a></li>
        <li style="float:right"><a href="register.php">Register</a></li>
    </ul>
  </nav>
    <form>
     <div class="menu_section">
        <div id="menu_title">Main Course</div>
        <div class="menu_body">
            <div class="menu_item">
                <div class="menu_item_name">
                    Pizza Margherita
                </div>
                <div class="menu_item_price">
                    $7
                </div>
                <div class="menu_item_desc">
                    Made with tomato, sliced mozzarella, basil, and extra virgin olive oil.
                </div>
                <img src="images/JustCheese.jpg" alt="margherita">
                
            </div>
            <div class="menu_item">
                <div class="menu_item_name">
                    Pepperoni Pizza
                </div>
                <div class="menu_item_price">
                    $10
                </div>
                <div class="menu_item_desc">
                    Regular Base, Regular Sauce, Double Pepperoni & Extra Cheese
                </div>
                <img src="images/pepperoni.jpg" alt="pep">
               
            </div>
            <div class="menu_item">
                <div class="menu_item_name">
                    Hawaiian Pizza
                </div>
                <div class="menu_item_price">
                    $10
                </div>
                <div class="menu_item_desc">
                    Regular Base, Regular Sauce, Ham, Mushrooms & Pineapple
                </div>
                <img src="images/hawaii.jpg" alt="pep">
              
            </div>
        </div>
    </div>
    <div class="menu_section">
    <div id="menu_title">Sides</div>
        <div class="menu_body">
         <div class="menu_item">
                <div class="menu_item_name">
                    Fried Chicken
                </div>
                <div class="menu_item_price">
                    $4
                </div>
                <div class="menu_item_desc">
                    Succulent chicken marinated to give flavour to the bones.
                </div>
                <img src="images/chicken.jpeg" alt="chicken">
            
            </div>
            <div class="menu_item">
                <div class="menu_item_name">
                    Chips
                </div>
                <div class="menu_item_price">
                    $3
                </div>
                <div class="menu_item_desc">
                    Salted French Fries golden on the outside and fluffy on the inside.
                </div>
                <img src="images/chips.jpeg" alt="chips">
                
            </div>
            <div class="menu_item">
                <div class="menu_item_name">
                    Garlic Bread
                </div>
                <div class="menu_item_price">
                    $4
                </div>
                <div class="menu_item_desc">
                    Salted French Fries golden on the outside and fluffy on the inside.
                </div>
                <img src="images/garlic.jpg" alt="garlic">
                
            </div>
        </div>
    </div>
    
    <div class="menu_section">
    <div id="menu_title">Desserts</div>
        <div class="menu_body">
         <div class="menu_item">
                <div class="menu_item_name">
                    Cookies
                </div>
                <div class="menu_item_price">
                    $3
                </div>
                <div class="menu_item_desc">
                    Our large, warm, gooey chocolate chunk cookies are baked fresh every day in each Restaurant.
                </div>
                <img src="images/menu_cookies.jpg" alt="cookies">
           
            </div>
            <div class="menu_item">
                <div class="menu_item_name">
                    Brownie
                </div>
                <div class="menu_item_price">
                    $4
                </div>
                <div class="menu_item_desc">
                    Made with lots of dark chocolate giving this brownie a rich, gooey texture. Chocoholics will love this!
                </div>
                <img src="images/brownie.jpeg" alt="brownie">
                
            </div>
            <div class="menu_item">
                <div class="menu_item_name">
                    Ice Cream
                </div>
                <div class="menu_item_price">
                    $3
                </div>
                <div class="menu_item_desc">
                    Chocolate ice cream with gooey marshmallow, caramel swirls & fudge.
                </div>
                <img src="images/ice.jpg" alt="ice-cream">
                
            </div>
        </div>
    </div>
    </form>
    <?php endif ?>
</body>
</html>