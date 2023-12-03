<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Logo_UIT_updated.svg/1200px-Logo_UIT_updated.svg.png">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    {{$carts}}
    <div class="cartier">
        <div class="header">
            <div class="header-notice">
                <p>Enjoy wrap-gift standard shipping. <span class=""><a class="has-link return-link">Click here to learn
                            more about returns and exchanges.</a></span></p>
            </div>

            <div class="main-header">
                <ul class="nav-left">
                    <li class="nav-left--item"><a href="" class="has-link nav-hover">Home</a></li>
                    <li class="nav-left--item"><a href="" class="has-link nav-hover">Contact Us</a></li>
                    <li class="nav-left--item"><a href="" class="has-link nav-hover">Services</a></li>
                </ul>

                <div class="logo">
                    <img class="logo-img" src="{{asset('img/Screenshot_2023-10-16_121457-removebg.png')}}" alt="">
                </div>

                <div class="nav-right">
                    <div class="nav-right--item"><i class="fa fa-heart"></i></div>
                    <div class="nav-right--item"><i class="fa fa-user"></i></div>
                    <div class="nav-right--item"><i class="fa fa-cart-plus"></i></div>
                </div>
            </div>

            <div class="sub-navbar">
                <div class="watch-collection--item">Colect</div>
                <div class="watch-collection--item">Colect</div>
                <div class="watch-collection--item">Colect</div>
                <div class="watch-collection--item">Colect</div>
                <div class="watch-collection--item">Colect</div>
            </div>
        </div>
        <div class="line"></div>
        <!-- header--end -->
        <div class="cart-body">
            <div class="body-left">
                <h3 class="heading-left">
                    SHOPPING BAG
                </h3>
                <span>(count item)</span>
                <div class="space"></div>
                <div class="condition-sale">
                    <p>Complimentary exchange or return within 30 days. Read our <a class="has-link span-link"
                            href="">conditions of sales.</a></p>
                </div>
                <div class="space"></div>
                <!-- product-cart -->

                <div class="cart-container">
                    <div class="cart-item">
                        <img class="cart-item--img" src="{{asset('img/h2.webp')}}" alt="">
                        <div class="cart-item--info">
                            <div class="item-heading-price">
                                <h3>TANK MUST WATCH</h3>
                                <input type="number" readonly value="200" class="price-item"></input>
                                <button class="close"><i class="fa fa-close"></i></button>
                            </div>
                            <p>Small model, high autonomy quartz movement, steel</p>
                            <div class="add-list">
                                <a class="has-link span-link " href="">Add another item</a>
                                <a class="has-link span-link" href="">Add another item</a>
                            </div>

                            <div class="add-options">
                                <a class="has-link" href="">Add gift message</a>
                                <a class="has-link" href="">Add engraving</a>
                                <a class="has-link" href="">Add bracelet adjustment</a>
                            </div>

                            <div class="wrap-gift">
                                <input type="checkbox" name="gift-wrap" id=""> <span>Add Gift Wrapping <i
                                        class="fa fa-angle-down"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-item">
                        <img class="cart-item--img" src="{{asset('img/h2.webp')}}" alt="">
                        <div class="cart-item--info">
                            <div class="item-heading-price">
                                <h3>TANK MUST WATCH</h3>
                                <input type="number" readonly value="200" class="price-item"></input>

                                <button class="close"><i class="fa fa-close"></i></button>
                            </div>
                            <p>Small model, high autonomy quartz movement, steel</p>
                            <div class="add-list">
                                <a class="has-link span-link " href="">Add another item</a>
                                <a class="has-link span-link" href="">Add another item</a>
                            </div>

                            <div class="add-options">
                                <a class="has-link" href="">Add gift message</a>
                                <a class="has-link" href="">Add engraving</a>
                                <a class="has-link" href="">Add bracelet adjustment</a>
                            </div>

                            <div class="wrap-gift">
                                <input type="checkbox" name="gift-wrap" id=""> <span>Add Gift Wrapping <i
                                        class="fa fa-angle-down"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="body-right">
                <div class="total">
                    <div class="subtotal-wrap">
                        <h3>SUBTOTAL</h3>
                        <h3 class="price-result"></h3>
                    </div>
                    <div class="subtotal-wrap">
                        <p>SUBTOTAL</p>
                        <p>$6,700.00</p>
                    </div>
                    <a href="" class=" has-link btn-proceed-checkout">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <ul class="footer-list">
                <li class="footer-list--item">
                    <h3>CUSTOMER CARE</h3>
                </li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <ul class="footer-list">
                <li class="footer-list--item">
                    <h3>CUSTOMER CARE</h3>
                </li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <ul class="footer-list">
                <li class="footer-list--item">
                    <h3>CUSTOMER CARE</h3>
                </li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <div class="footer-list hasnt-flex">
                <h3 class="footer-list--item">FOLLOW US</h3>
                <div class="icon-link">
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-facebook-f"></i></a>
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-youtube-play"></i></a>
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-instagram"></i></a>
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-twitter"></i></a>

                </div>
            </div>
        </div>
        <!-- footer end -->
    </div>
</body>

<script src="../../js/cart.js"></script>


</html>