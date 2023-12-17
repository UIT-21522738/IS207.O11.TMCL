<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product detail</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Logo_UIT_updated.svg/1200px-Logo_UIT_updated.svg.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('css/product-detail.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('/icon/fontawesome-free-6.4.2-web/css/regular.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/home.css')); ?>">
</head>
<body>
    <div class="cartier">
         <!-- header start -->
         <div class="header">
            <div class="header-notice">
                <p>Enjoy wrap-gift standard shipping. <span class=""><a class="has-link return-link">Click here to learn more about returns and exchanges.</a></span></p>
            </div>

            <div class="main-header">
                <ul class="nav-left">
                    <li class="nav-left--item"><a href="" class="has-link nav-hover">Home</a></li>
                    <li class="nav-left--item"><a href="" class="has-link nav-hover">Contact Us</a></li>
                    <li class="nav-left--item"><a href="" class="has-link nav-hover">Services</a></li>
                </ul>

                <div class="logo">
                    <img class="logo-img" src="<?php echo e(asset('img/Screenshot_2023-10-16_121457-removebg.png')); ?>" alt="">
                </div>

                <div class="nav-right">
                    <div class="nav-right--item"><i class="fa fa-heart"></i></div>
                    <div class="nav-right--item"><i class="fa fa-user"></i></div>
                    <div class="nav-right--item"><i class="fa fa-cart-plus"></i></div>
                </div>
            </div>

            <div class="sub-navbar">
                <div class="dropdown">
                    <button class="dropbtn">Brand</button>
                    <div class="dropdown-content">
                        <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="/collection?brand=<?php echo e($data->id); ?>"><?php echo e($data->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">Category</button>
                    <div class="dropdown-content">
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="/collection?brand=<?php echo e($data->id); ?>"><?php echo e($data->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">Gender</button>
                    <div class="dropdown-content">
                    <a href="/collection?gender=male">Male</a>
                    <a href="/collection?gender=female">Female</a>
                    </div>
                </div>
            </div> 
        </div>
        <!-- header end -->

        <div class="product-body">
            <div class="product-img-collect">
                <img class="product-img" src="<?php echo e(asset($watch->img1)); ?>" alt="">
                <!-- <div class="grid-img">
                    <img class="grid-img-item" src="<?php echo e(asset($watch->img2)); ?>" alt="">
                </div> -->
            </div>
            <div class="product-information">
                <h2 class="heading-text"><?php echo e($watch->name); ?></h2>
                <div class="texting">
                   <p class="text-box">
                        <?php echo e($watch->description); ?>

                   </p>
                  <!-- <span class="show less">Show more</span> -->

                </div>
                <h4 class="price"><?php echo e(number_format($watch->price * (1 - $watch->discount), 0, ',', '.')); ?> đ</h4>

                <div class="btn-selection">
                    <a class="add-cart">Add to cart</a>
                    <a href="/order/buy?watch_id[]=<?php echo e($watch->id); ?>&quantity[]=1" class="buy_now">Mua ngay</a>
                </div>
                <div class="space-small"></div>
                <ul class="list-contact">
                    <li class="contact-item">
                        <a href=""><i class="fa fa-phone"></i> ORDER BY PHONE 1-800-227-8437</a>
                    </li>
                    <li class="contact-item">
                        <a href=""><i class="fa fa-building-o"></i> ORDER BY PHONE 1-800-227-8437</a>
                    </li>
                    <li class="contact-item">
                        <a href=""><i class="fa fa-headphones"></i> ORDER BY PHONE 1-800-227-8437</a>
                    </li>
                    <li class="contact-item">
                        <a href=""><i class="fa fa-book"></i> ORDER BY PHONE 1-800-227-8437</a>
                    </li>
                </ul>
            </div>
        </div>

        <?php echo $__env->make('products.comment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
        <div class="space"></div>

        <div class="care">
            <div class="care-left">
                <h4>UITERs CARE</h4>
                <p>Please enjoy an extension of the International Limited Warranty for up to 8 years and take advantage of a wide range of exclusive services.</p>
                <a href="" class="has-link discover-more">Discover More</a>
            </div>
            <div class="care-right">
                <img class="display-img" src="<?php echo e(asset('img/care.webp')); ?>" alt="">
            </div>
        </div>

        <div class="space"></div>
        <div class="delivery-section">
            <div class="delivery-gift">
               
                <img class="gift-img" src="<?php echo e(asset('img/w750.jpeg')); ?>" alt="">
                
                <div class="gift-infor">
                    <h4>GIFT WRAPPING</h4>
                    <p>Send your presents in our signature packaging with a personalised greetings card included.</p>
                    <a href="" class="has-link read-more">Read More</a>
                </div>
            </div>

            <div class="delivery-shipping">
                <div class="delivery-detail">
                    <h4>SHIPPING/RETURN</h4>
                    <p>We offer different delivery options. Choose the one you prefer at the checkout. You may return or exchange your Cartier creation within 30 days.</p>
                    <div class="view-more">
                        <a class="read-more view-more-btn view-shipping-modal">View shipping</a>
                        <a class="read-more view-more-btn view-return-modal">View return</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="space"></div>
        <div class="recommend-list">
            <div class="list-grid">
                <?php $__currentLoopData = $watches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product-object">
                    <img class="object-img" src="<?php echo e(asset($w->img1)); ?>" alt="">
                    <div class="object-section">
                        <div class= "object-section-info">
                            <a href="" class=" has-link object-info  info-name"> <?php echo e($w->name); ?></a>
                        </div>
                        <div class="object-section-info">
                            <a href="" class=" has-link object-info"><?php echo e($w->description); ?></a>
                            <h3><?php echo e(number_format($w->price * (1 - $w->discount), 0, ',', '.')); ?> đ</h3>
                        </div>
                    </div>
                    <div class="buy-btn">
                        <a class="discover has-link">Add to cart</a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="pagination-image-product">
            <img class="pagination-img" src="<?php echo e(asset('img/leather.png')); ?>" alt="">
        </div>

        <div class="space"></div>
        <div class="extra-information">
            <div class="complimentary">
                <div class="complimentary-img-container">
                    <img class="complimentary-img " src="<?php echo e(asset('img/Screenshot_2023-10-16_211957-removebg-preview.png')); ?>" alt="">
                </div>
                <a href="" class="has-link complimentary-text">COMPLIMENTARY DELIVERY</a>
            </div>
            <div class="complimentary">
                <div class="complimentary-img-container">
                    <img class="complimentary-img " src="<?php echo e(asset('img/return.png')); ?>" alt="">
                </div>
                <a href="" class="has-link complimentary-text">EASY RETURN OR EXCHANGE</a>
            </div>
            <div class="complimentary">
                <div class="complimentary-img-container">
                    <img class="complimentary-img " src="<?php echo e(asset('img/wrap.png')); ?>" alt="">
                </div>
                <a href="" class="has-link complimentary-text">FREE GIFT WRAPPING</a>
            </div>
        </div>
        <?php echo $__env->make('chatbox.chatbox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
        <!-- extra infomation start -->
        <div class="space"></div>
        <!-- footer start -->
        <div class="footer">
            <ul class="footer-list">
                <li class="footer-list--item"><h3>CUSTOMER CARE</h3></li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <ul class="footer-list">
                <li class="footer-list--item"><h3>CUSTOMER CARE</h3></li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <ul class="footer-list">
                <li class="footer-list--item"><h3>CUSTOMER CARE</h3></li>
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
</body>/
<script src="../../js/product_detail.js"></script>
</html><?php /**PATH D:\UIT\WEB\IS207.O11.TMCL\resources\views/products/watch.blade.php ENDPATH**/ ?>