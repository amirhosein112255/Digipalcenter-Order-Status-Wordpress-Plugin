<?php wp_head();
get_header();
?>
    <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) ;?>css/owl.carousel.min.css">
<!--    <link rel="stylesheet" href="--><?php //echo plugin_dir_url( __FILE__ ); ?><!--/css/bootstrap.rtl.min.css">-->
    <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) ;?>style.css">
<?php
// Not available
$na = __( 'N/A', 'woocommerce' );

// For logged in users only
if ( ! is_user_logged_in() ) return $na;

// The current user ID
$user_id = get_current_user_id();

// Get the WC_Customer instance Object for the current user
$customer = new WC_Customer( $user_id );

// Get the last WC_Order Object instance from current customer
$last_order = $customer->get_last_order();

// When empty
//                        if ( empty ( $last_order ) ) return $na;
if ( empty ( $last_order ) ) echo '<h3 class="text-center mt-4">هنوز سفارشی ثبت نکرده اید</h3>' ;
if ( empty ( $last_order ) )return $na;
// Get order date
$order_status = $last_order->get_status();
$chek_icon = '<div class="checked"> <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 96 96" version="1.1"><path d="M 55.260 43.230 L 42.030 56.461 36.497 50.997 C 31.992 46.548, 30.655 45.728, 29.299 46.583 C 24.738 49.460, 25.152 50.637, 33.754 59.239 L 41.996 67.481 57.998 51.502 C 66.799 42.714, 74 35.025, 74 34.417 C 74 33.121, 70.762 30, 69.417 30 C 68.907 30, 62.537 35.954, 55.260 43.230" stroke="none" fill="#e1f2fc" fill-rule="evenodd"/><path d="M 43.240 8.702 L 39.271 13.403 33.151 11.702 C 29.784 10.766, 26.656 10, 26.199 10 C 25.741 10, 24.794 12.884, 24.093 16.409 L 22.819 22.819 16.331 24.109 C 9.125 25.541, 9.431 24.802, 12.102 34.326 L 13.455 39.152 8.478 43.576 L 3.500 48 8.478 52.424 L 13.455 56.848 12.102 61.674 C 9.431 71.198, 9.125 70.459, 16.331 71.891 L 22.819 73.181 24.093 79.591 C 24.794 83.116, 25.741 86, 26.199 86 C 26.656 86, 29.771 85.238, 33.121 84.307 L 39.212 82.613 43.606 87.557 L 48 92.500 52.424 87.522 L 56.848 82.545 61.674 83.898 C 71.198 86.569, 70.459 86.875, 71.891 79.669 L 73.181 73.181 79.669 71.891 C 86.875 70.459, 86.569 71.198, 83.898 61.674 L 82.545 56.848 87.522 52.424 L 92.500 48 87.522 43.576 L 82.545 39.152 83.898 34.326 C 86.569 24.802, 86.875 25.541, 79.669 24.109 L 73.181 22.819 71.891 16.331 C 70.459 9.123, 71.204 9.430, 61.643 12.110 L 56.787 13.472 52.789 8.736 C 50.591 6.131, 48.436 4, 48 4 C 47.564 4, 45.422 6.116, 43.240 8.702 M 55.260 43.230 L 42.030 56.461 36.497 50.997 C 31.992 46.548, 30.655 45.728, 29.299 46.583 C 24.738 49.460, 25.152 50.637, 33.754 59.239 L 41.996 67.481 57.998 51.502 C 66.799 42.714, 74 35.025, 74 34.417 C 74 33.121, 70.762 30, 69.417 30 C 68.907 30, 62.537 35.954, 55.260 43.230" stroke="none" fill="#44a4f4" fill-rule="evenodd"/></svg></div>'
?>
    <div class="container">
        <div class="step-slider-section">
            <div class="row">
                <section class="step-slider-header col-12">
                    <span class="current-status">وضعیت فعلی: <b><?php if ($order_status == 'processing') { echo "مرحله ۱ از ۵"; }elseif ($order_status == 'completed'){ echo "مرحله ۱ از ۵"; }elseif ($order_status == 'custom-status2'){ echo "مرحله ۲ از ۵"; }elseif ($order_status == 'custom-status3'){ echo "مرحله ۳ از ۵"; }elseif ($order_status == 'custom-status4'){ echo "مرحله ۴ از ۵"; }elseif ($order_status == 'custom-status5'){ echo "مرحله ۵ از ۵"; }?></b></span>
                </section>

<!--                --><?php //if ($order_status === 'processing' && $order_status === 'completed' && $order_status === 'custom-status2' && $order_status === 'custom-status3' && $order_status === 'custom-status4' && $order_status === 'custom-status5') { echo "is-active"; } ?>
                <section class="step-slider-stage col-12 owl-carousel">
                    <div class="step-slider-item text-center <?php if ($order_status == 'processing') { echo "is-active"; }elseif ($order_status == 'completed'){ echo "is-active"; }elseif ($order_status == 'custom-status2'){ echo "is-active"; }elseif ($order_status == 'custom-status3'){ echo "is-active"; }elseif ($order_status == 'custom-status4'){ echo "is-active"; }elseif ($order_status == 'custom-status5'){ echo "is-active"; }?>">
                        <img src="<?php echo plugin_dir_url( __FILE__ ) ;?>svg/payment-accept.svg" alt="پردازش سفارش" srcset="">
                        <span class="text-status">پردازش سفارش</span>
                        <?php if ($order_status == 'processing') { echo $chek_icon; }elseif ($order_status == 'completed'){ echo $chek_icon; }elseif ($order_status == 'custom-status2'){ echo $chek_icon; }elseif ($order_status == 'custom-status3'){ echo $chek_icon; }elseif ($order_status == 'custom-status4'){ echo $chek_icon; }elseif ($order_status == 'custom-status5'){ echo $chek_icon; }?>



                    </div>
                    <div class="step-slider-item text-center  <?php if ($order_status == 'custom-status2'){ echo "is-active"; }elseif ($order_status == 'custom-status3'){ echo "is-active"; }elseif ($order_status == 'custom-status4'){ echo "is-active"; }elseif ($order_status == 'custom-status5'){ echo "is-active"; }?>">
                        <img src="<?php echo plugin_dir_url( __FILE__ ) ;?>svg/preparation.svg" alt="آماده سازی مرسوله" srcset="">
                        <span class="text-status">آماده سازی مرسوله</span>
                        <?php if ($order_status == 'custom-status2'){ echo $chek_icon; }elseif ($order_status == 'custom-status3'){ echo $chek_icon; }elseif ($order_status == 'custom-status4'){ echo $chek_icon; }elseif ($order_status == 'custom-status5'){ echo $chek_icon; }?>


                    </div>
                    <div class="step-slider-item text-center  <?php if ($order_status == 'custom-status3'){ echo "is-active"; }elseif ($order_status == 'custom-status4'){ echo "is-active"; }elseif ($order_status == 'custom-status5'){ echo "is-active"; }?>">
                        <img src="<?php echo plugin_dir_url( __FILE__ ) ;?>svg/ready to send.svg" alt="آماده ارسال" srcset="">
                        <span class="text-status">آماده ارسال</span>
                        <?php if ($order_status == 'custom-status3'){ echo $chek_icon; }elseif ($order_status == 'custom-status4'){ echo $chek_icon; }elseif ($order_status == 'custom-status5'){ echo $chek_icon; }?>


                    </div>
                    <div class="step-slider-item text-center <?php if ($order_status == 'custom-status4'){ echo "is-active"; }elseif ($order_status == 'custom-status5'){ echo "is-active"; }?>">
                        <img src="<?php echo plugin_dir_url( __FILE__ ) ;?>svg/Delivered by the postman.svg" alt="تحویل مأمور پست" srcset="">
                        <span class="text-status">تحویل مأمور پست</span>
                        <?php if ($order_status == 'custom-status4'){ echo $chek_icon; }elseif ($order_status == 'custom-status5'){ echo $chek_icon; }?>


                    </div>
                    <div class="step-slider-item text-center <?php if ($order_status == 'custom-status5'){ echo "is-active"; }?>">
                        <img src="<?php echo plugin_dir_url( __FILE__ ) ;?>svg/sending.svg" alt="ارسال شده" srcset="">
                        <span class="text-status">ارسال شده</span>
                        <?php if ($order_status == 'custom-status5'){ echo $chek_icon; }?>


                    </div>
                </section>
            </div>
        </div>
    </div>


    <script src="<?php echo plugin_dir_url( __FILE__ ) ;?>js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo plugin_dir_url( __FILE__ ) ;?>js/owl.carousel.min.js"></script>
<!--    <script src="--><?php //plugin_dir_path(__FILE__) ?><!--/js/bootstrap.min.js"></script>-->
    <script src="<?php echo plugin_dir_url( __FILE__ ) ;?>script.js"></script>