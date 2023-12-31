<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <style>
  *{
            font-family: Arial;
            margin: 0px;
            padding: 0px;
        }
        ul{
            list-style: none;
        
        }
        a{
            text-decoration: solid;
        }
        body{
            margin: 0px;
            padding: 0px;
            font-family: Arial;
        }
        .navigation{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 35px;
            max-width: 1070px;
            width: 100%;
            margin: auto;
        }
        .menu{
            display: flex;

        }
        .menu li a {
            padding: 3px 10px;
            margin: 0px 3px;
            color: darkgray;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all ease 0.3s;

        }
        .logo{
            font-size: 1.4rem;
            font-weight: 600;
            letter-spacing: 5px;
            color: darkgrey;
        }
        .logo span{
            color:black;
        }
        .right-nav{
            display: grid;
            grid-template-columns: auto;
            grid-gap: 25px;


        }

        .login{
            
            color: #000000;
        }
        .signup{
            background: "cart.jpg";
            
            color: #000000;
            
        }
        .right-nav a span {
            position: absolute;
            top: -7px;
            right: -7px;
            width: 20;
            height: 20 ;
            display:flex ;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: #b4b4b4;
            font-size: 0.6rem;
            font-weight: 500;
            background-color: black;


        }
        .menu li a:hover,
        .menu .active {
            color: rgb(0, 0, 0);
            transition: all ease 0.3s;

        }
        footer{
            background-color: #ffffff;
            padding: 50px 20px;
            border-top: 5px solid;

    
         }
         .footer-container{
            max-width: 1100px;
            margin: auto;
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
         }
         .footer-logo a{
            color: #000000;
            font-size: 1.4rem;
            font-weight: 600;
            letter-spacing: 5px;
         }
         .footer-logo a span{
            font-size: 1.4rem;
            font-weight: 600;
            letter-spacing: 5px;
            color: rgb(166, 166, 166);
         }
         .footer-links strong{
            color: #000000;
            font-size: 1.4rem;
            font-weight: 600;

         }
        .footer-links ul{
           margin-top: 10px;

        }
        .footer-links ul li a{
            color: #000000;
            opacity: 0.5;
            margin: 4px 0px;
            font-size: 0.9rem;
            letter-spacing: 1.5px;
        }
        .container{
          max-width: 1000px;
            height: 600px;
            
            background-color: #fff0ee;
            margin: 10px auto;
            position: relative;
            overflow: hidden;
            
            padding: 20px;
            display: flex;
        }
        .image-container{
          display: flex;
          width: 100%;
          animation: slide 16s infinite;

        }
        img{
          width: 100%;

        }
        
        .heading{
        font-size: 1rem;
        font-weight: 700;
        color: #000000;
        letter-spacing: 0.5px;
        display: flex;
        margin-bottom: 10px;
       }
        .p1,
        .p2{
          font-size: 0.9rem;
          color: #b4b4b4;
          letter-spacing: 0.8px;
          font-style: normal;
          font-family: Verdana, Geneva, Tahoma, sans-serif;
          margin-bottom: 20px;
        }

        

         
      </style>
</head>
<body>
<nav class="navigation">
        
        <a href="#" class="logo"> <span>Morning</span> Basket</a>
        <ul class="menu">
            <li><a href="#"class="active"> Home</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Our packages </a></li>
            <li><a href="#">Our App</a></li>
        </ul>

        <div class="right-nav"></div>
        <a href="login.html" class="login">
            Login
                
                      
        </a>
        <a href="Signup.php" class="signup" > Signup</a> 
        
        

    </nav>
    <div class="container">
      <div class="image-container">
        <img src="project.jpg">
        
      </div>
      
    </div>
    <div class= "heading">
    <h1>Welcome to Morning Basket</h1>
    
    </div>
    <div class="p1">
    <p1>Did you ever imagine that the freshest of fruits and vegetables, top quality pulses and food grains, dairy products and hundreds of branded items could be handpicked and delivered to your home, all at the click of a button? India’s first comprehensive online megastore, bigbasket.com, brings a whopping 20000+ products with more than 1000 brands, to over 4 million happy customers. From household cleaning products to beauty and makeup, bigbasket has everything you need for your daily needs. bigbasket.com is convenience personified We’ve taken away all the stress associated with shopping for daily essentials, and you can now order all your household products and even buy groceries online without travelling long distances or standing in serpentine queues. Add to this the convenience of finding all your requirements at one single source, along with great savings, and you will realize that bigbasket- India’s largest online supermarket, has revolutionized the way India shops for groceries. Online grocery shopping has never been easier. Need things fresh? Whether it’s fruits and vegetables or dairy and meat, we have this covered as well! Get fresh eggs, meat, fish and more online at your convenience. Hassle-free Home Delivery options

We deliver to 25 cities across India and maintain excellent delivery times, ensuring that all your products from groceries to snacks branded foods reach you in time.
Slotted Delivery: Pick the most convenient delivery slot to have your grocery delivered. From early morning delivery for early birds, to late-night delivery for people who work the late shift, bigbasket caters to every schedule.
Express Delivery: This super useful service can be availed by customers in cities like Bangalore, Mumbai, Pune, Chennai, Kolkata, Hyderabad and Delhi-NCR in which we deliver your orders to your doorstep in 90 Minutes.
BB Specialty stores: Missed out on buying that essential item from your favorite neighborhood store for tonight’s party? We’ll deliver it for you! From bakery, sweets and meat to flowers and chocolates, we deliver your order in 90 minutes, through a special arrangement with a nearby specialty store, verified by us.</p1>   
   <br> 
  

  </div>
  <h2>
  India’s biggest Online Supermarket
  </h2>
  <div class="p2">
  <p1>
  Morning basket.com believes in providing the highest level of customer service and is continuously innovating to meet customer expectations. Our On-time Guarantee is one such assurance where we refund 10% of the bill value if the delivery is delayed. For all your order values above Rs. 1000, we provide free delivery. A wide range of imported and gourmet products are available through our express delivery and slotted delivery service. If you ever find an item missing on delivery or want to return a product, you can report it to us within 48 hours for a ‘no-questions-asked’ refund.

Best quality products for our quality-conscious customers.

bigbasket.com is synonymous with superior quality and continues to strive for higher levels of customer trust and confidence, by taking feedback and giving our customers what they want. We have added the convenience of pre-cut fruits in our Fresho range. If it’s a product category you’re looking to shop from, we’ve made it convenient for you to access all products in a section easily. For instance, if you’re looking for beverages, you can order from a long list of beverages that include cool drinks, hot teas, fruit juices and more.

We are proud to be associated closely with the farmers from whom we source our fresh products. Most of our farm-fresh products are sourced directly from farmers, which not only ensures the best prices and freshest products for our customers but also helps the farmers get better prices. With more than 80 Organic Fruits and Vegetables and a wide range of organic staples, bigbasket has the largest range in the organic products category.

When it comes to payment, we have made it easy for our customers can pay through multiple payment channels like Credit and Debit cards, Internet Banking, e-wallets and Sodexo passes or simply pay Cash on Delivery (COD).The convenience of shopping for home and daily needs, while not compromising on quality, has made bigbasket.com the online supermarket of choice for thousands of happy customers across India.
  </p1>
  </div>
    
<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <a href="#">Morning <span>Basket</span> </a>
            
        </div>


<div class="footer-links">
    <strong>
        Help
    </strong>
    <ul>
        <li><a href="About Us.html" >About us </a></li>
        <li>  <a href="FAQs.html" >FAQs</a></li>
        <li>  <a href="Privacy Policy.html" >Privacy Policy</a></li>
        <li><a href="Terms and Conditions.html" >Terms and condition</a></li>
     </ul>
</div>
<div class="footer-links">
    <strong>
        Contact Us
    </strong>
    <ul>
        <li><a>morningbasket@gmail.com</a></li>
        <li>  <a>1800 454 888</a></li>
       
     </ul>
</div>
    </div>

</footer>
  
</body>
</html>