<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
       <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->script('jquery-func.js') ?>
    <?= $this->Html->script('jquery-1.4.1.min.js') ?>
    <?= $this->Html->script('jquery.slide.js') ?>
    <?= $this->Html->script('jquery.jcarousel.pack.js') ?>
   <style>
      h1#logo a{ display:block; height:61px; text-indent: -4000px; background:url(img/logo.gif); }
      #slider-nav a.prev{ background:url(img/prev.gif); left:0;}
      #slider-nav a.next{ background:url(img/next.gif); right:0;}
      #main { width:100%; background:url(img/main.gif) repeat-x 0 0;}
      .options .search{ float:left; padding:6px 0 0 0; background:url(img/border.gif) repeat-y right 0; height:33px; margin-right:12px;}
      .options .search .field{ float:left; width:191px; height:21px; background:url(img/field.gif); padding:6px 5px 0 5px;}
      .options .search .field input{ width:191px; border:0; background:transparent; color:#fff; font-weight: bold;}
      .search-submit{ float:left; font-size:0; line-height:0; width:24px; height:27px; background:url(img/search.gif); text-indent: -4000px; border:0; margin-left:9px; cursor:pointer; position:relative; top:1px; margin-right:13px;}
      .cart strong{ float:left; width:95px; height:36px; background:url(img/cart-price.gif); text-align: right; font-size:20px; color:#701616; line-height:36px; padding:0 7px 0 5px;}
      .cart-ico{ float:left; width:47px; height:36px; background:url(img/cart.gif) no-repeat 0 0; font-size:0; line-height:0; text-indent: -4000px;}
       .tabs ul li a span { float:left; height:36px; background:url(img/tab.gif) no-repeat 0 -37px; padding:0 0 0 20px;}
       #container { background:#fff url(img/container-t.gif) no-repeat 0 0; padding:30px 20px; }

   </style>
</head>
<body class="home">
 <header>

<!-- Top -->
<div id="top">
    <div class="shell">
        <!-- Header -->
        <div id="header">
            <h1 id="logo"><a href="#">Urgan Gear</a></h1>
            <div id="navigation">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">The Store</a></li>
                    <li class=""><a href="#">Contact</a></li>
                    <li class=""><a href="login">Login</a></li>

                </ul>
            </div>
        </div>
        <!-- End Header -->

        <!-- Slider -->
        <div id="slider">
            <div id="slider-holder">
                <ul>
                    <li><a href="#"><img src="img/slide1.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="img/slide2.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="img/slide1.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="img/slide2.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="img/slide1.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="img/slide2.jpg" alt="" /></a></li>
                </ul>
            </div>
            <div id="slider-nav"> <a href="#" class="prev">Previous</a> <a href="#" class="next">Next</a> </div>
        </div>
        <!-- End Slider -->
    </div>
</div>
<!-- Top -->
  </header>
    <div id="content">
<div id="main">
    <div class="shell">
        <!-- Search, etc -->
        <div class="options">
            <div class="search">
                <form action="#" method="post">
          <span class="field">
          <input type="text" class="blink" value="SEARCH" title="SEARCH" />
          </span>
                    <input type="text" class="search-submit" value="GO" />
                </form>
            </div>
            <span class="left"><a href="#">Advanced Search</a></span>
            <div class="right"> <span class="cart"> <a href="#" class="cart-ico">&nbsp;</a> <strong>$0.00</strong> </span> <span class="left more-links"> <a href="#">Checkout</a> <a href="#">Details</a> </span> </div>
        </div>
        <!-- End Search, etc -->
        <!-- Content -->
        <div id="content">
            <!-- Tabs -->
            <div class="tabs">
                <ul>
                    <li><a href="#" class="active"><span>Safety Shoes</span></a></li>
                    <li><a href="#"><span>Sport Shoes</span></a></li>
                    <li><a href="#" class="red"><span>More Shoes</span></a></li>
                </ul>
            </div>
            <!-- Tabs -->
            <!-- Container -->
            <div id="container">
                <div class="tabbed">
                    <!-- First Tab Content -->
                    <div class="tab-content" style="display:block;">
                        <div class="items">
                            <div class="cl">&nbsp;</div>
                            <ul>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image1.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image2.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image3.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image4.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image4.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image3.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image2.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image1.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                            </ul>
                            <div class="cl">&nbsp;</div>
                        </div>
                    </div>
                    <!-- End First Tab Content -->
                    <!-- Second Tab Content -->
                    <div class="tab-content">
                        <div class="items">
                            <div class="cl">&nbsp;</div>
                            <ul>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image2.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image2.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image2.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image2.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image1.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image1.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image1.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image1.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                            </ul>
                            <div class="cl">&nbsp;</div>
                        </div>
                    </div>
                    <!-- End Second Tab Content -->
                    <!-- Third Tab Content -->
                    <div class="tab-content">
                        <div class="items">
                            <div class="cl">&nbsp;</div>
                            <ul>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image3.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image3.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image3.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image3.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image4.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image4.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image4.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image4.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image2.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image2.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image2.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image2.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image1.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image1.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image1.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                                <li>
                                    <div class="image"> <a href="#"><img src="img/image1.jpg" alt="" /></a> </div>
                                    <p> Item Number: <span>125515</span><br />
                                        Size List : <span>8/8.5/9.5/10/11</span><br />
                                        Brand Name: <a href="#">Adidas Shoes</a> </p>
                                    <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                </li>
                            </ul>
                            <div class="cl">&nbsp;</div>
                        </div>
                    </div>
                    <!-- End Third Tab Content -->
                </div>
                <!-- Brands -->
                <div class="brands">
                    <h3>Brands</h3>
                    <div class="logos"> <a href="#"><img src="img/logo1.gif" alt="" /></a> <a href="#"><img src="img/logo2.gif" alt="" /></a> <a href="#"><img src="img/logo3.gif" alt="" /></a> <a href="#"><img src="img/logo4.gif" alt="" /></a> <a href="#"><img src="img/logo5.gif" alt="" /></a> </div>
                </div>
                <!-- End Brands -->
     </div>
    </div>
     </div>
                <!-- End Container -->
            </div>
            <!-- End Content -->
        </div>
    </div>
    <!-- End Main -->
</body>
</html>
