<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food and restaurant</title>
    <link rel="stylesheet" href="style2.css">
  
</head>
<body>
  <header class="sticky">
  
        <ul class="navigation">
            
            <li><a class="active" href="#banner">Home</a></li>
            <li><a class="active" href="#about">About</a></li>
            <li><a class="active" href="#menu">Menu</a></li>
            <li><a class="active" href="#order">Order</a></li>
            <li><a class="active"  href="#feedback">Feedback</a></li>

        </ul>
  </header>
 
   <section class="banner" id="banner">
       <div class="content">
           <h2>Live, love, eat</h2>
                    <p>Lets Satisfy Your Hunger With Our Tasty git  </p>
                  <a href="#menu" class="btn">Our Menu</a><br><br>
                 
       </div>
       
   </section>

   <section class="about" id="about">
       <div class="row">
       <div class="col50">
           <h2 class="titleText"><span>A</span>bout Us</h2>
           <p>People who love to eat are always the best people." "To eat is a necessity, but to eat intelligently is an art." "We all eat, and it would be a sad waste of opportunity to eat badly." "If you really want to make a friend, go to someone's house and eat with him...the people who give you their food give you their heart."</p>
       </div>
<div class="col50">
    <div class="imgBx">
        <img src="style/aboutus.jpg">
    
</div>
</div>
</div>
   </section>
   <br>  <br>
   <br>
   <section class="menu" id="menu">
   <div class="title">
    <h2 class="titleText">Our<span>M</span>enu</h2>
    </div>
   <div class="content">
       <div class="box">
           <div class="text">
               <h3>Special Burgers</h3>
               <h4>Price:129Rs</h>
           </div>
       </div>
       <div class="box">
       
        <div class="text">
            <h3>Special Dosa</h3>
            <h4>Price:299Rs</h>
        </div>
    </div>
    <div class="box">
       
        <div class="text">
            <h3>Special Cakes</h3>
            <h4>Price:149Rs</h>
        </div>
    </div>
    <div class="box">
       
        <div class="text">
            <h3>Special Ice-Cream</h3>
            <h4>Price:99Rs</h>
        </div>
    </div>
    <div class="box">
       
        <div class="text">
            <h3>Special Momos</h3>
            <h4>Price:150Rs</h>
        </div>
    </div>
    <div class="box">
        
        <div class="text">
            <h3>Special Pav Bhaji</h3>
            <h4>Price:  Rs150</h>
        </div>
    </div>
    <div class="box">
       
        <div class="text">
            <h3>Special Pizzas</h3>
            <h4>Price:  399-/onlyRs</h>
        </div>
    </div>
    <div class="box">
        
        <div class="text">
            <h3>Special Full Thali</h3>
             <h4>Price:150Rs</h>
        </div>
       
        
    </div>
   </div>
  <div class="title">
    <a href="menu.html" class="btn">View All</a>
   </div>

   </section>
   <br>   <br>   <br>
      <section  class="order" id="order">
           <h2 class="titleText"><span>O</span>rder now</h2>
           <div class="container">
           <form action="first.php" method="post">
             <input type="text" name="name" placeholder="Your Name" required> 
             <select  id="shruti"name= "choice">
               <option value=" choose">Choose your Meal</option>
                <option value="pizza ">pizza</option>
                <option value="Noodles">Noodles</option>
                <option value="Burger">Burger</option>
                <option value="Dosa">Dosa</option>
                <option value="cake">cake</option>
                <option value="momos">momos</option>
                <option value="pav-bhaji">pav-bhaji</option>
                <option value="full thali">full thali</option>
               </select><br>
             <input type="text" name="phone" placeholder="Your Phone number"required>
             
             <select id="shruti" name="qua"  >
                <option value="1 ">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
             </select><br>
             <input type="email" name="email" placeholder="Your Email" required> 
             <label for="Choice"></label>
             <input type="text" name="add" placeholder="Your Address"required><br>
              <button class="button"name ="insert">Order</button>
             
           </form><br><br>
           <marquee direction="right"><i>Upto 50% off ORDER NOW</i></marquee>
           <p id="demo"></p>

           <script>
           const d = new Date();
           document.getElementById("demo").innerHTML = d;
           window.addEventListener('scroll', function(){
           const header= document.querySelector('header');
           header.classlist.toggle("sticky", window.scrollY > 0);
       });

           </script>
          </div>      
</section>
<br><br><br>
<section  class="feedback" id="feedback">
    <h2 class="titleText"><span>F</span>eedback</h2>
    <div class="container">
        <form action="second.php" method="post">
            <input type="text" name="name" id="name"placeholder="Your Name" required> 
             <label for="Choice"></label>
             <input type="email" name="email" id="email"placeholder="Your Email" required> 
             <label for="Choice"></label>
             <input type="Phone" name="phone" id="name"placeholder="Your Phone number"required>
             <input type="text" name="feed" id="feedback"placeholder="Your Feedback"required><br>
              <button class="button"name ="insert">Submit</button>
            
           </form><br>
        </section>
   <div class="copyrightText"> 
   <p>Copyright 2020<a href="#"> Made by Shara Ahmad & Shruti Chaube</a>.All Right Reserved</p></div>
</body>
</html>