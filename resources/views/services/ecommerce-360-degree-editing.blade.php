@extends('layouts.frontend.app')

@section('content')
    <!-- Dedicated to exceeding expectation-->
    <section class=" highlights image-right">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="/front-assets/images/home/Home1.png" class="fit-image" alt="Jewelry Retouch">
                </div>
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt" style="opacity: 0.7; font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="text-secondary">@lang('Experienced e-commerce ') <span class="text-primary">Photo Editing Services</span></h2>
                            <p>@lang('Simplify the Shopping Experience for Your Customers.')</p>
                            <a href="#" target="_blank" class="btn primary-button d-inline-block me-2">FREE TRAIL <i class="icon-arrow-right"></i></a>
                            <a href="#" target="_blank" class="btn btn-outline-primary border-1 d-inline-block">GET STARTED <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Features -->
    <section id="featured" class="section-1 bg-white  white offers">
        <div class="container">
            <div class="row items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon icon-calendar"></i>
                        <h5>@lang('5000k/Day')</h5>
                        <p>@lang('Transform your images with high-volume, lifelike shadow making services.')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon icon-clock"></i>
                        <h5>12 Hours</h5>
                        <p>@lang('Save your time - receive stunning images in just 12 hours!"
                            ')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        
                        <i class="icon lab la-uniregistry"></i>
                        <h5>Unlimited</h5>
                        <p>@lang('Limitless revisions, lightning-fast delivery, and devoted support – guaranteed.')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- why pix cliping --}}
    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center gx-5">
                
                <div class="col-lg-4">
                    <button class="subHeading">@lang('Why pixclipping?') </button>
                    <h4 class="text-secondary ">@lang('Boost Your Brand\'s Credibility')</h4>
                    <p class="paragraph">
                        @lang('Compelling images drive clicks and sales. But the story doesn\'t end there. Mismatched products lead to customer dissatisfaction, negative reviews, and various challenges.') </p>
                        <p class="paragraph">
                        @lang('Partner with us to craft a professional website that captivates your audience with expertly enhanced images. Elevate your brand, increase conversions, and thrive in the online business arena.')
                        
                    </p>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/ghost/icon/gallary.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Fast Turn-around')</h5>
                                    <p class="justify-content-center">@lang('PixClipping: Your Swift Solution for Web-Ready Images, with Lightning-Fast Rush-Hour Delivery.')</p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3" >
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/ghost/icon/target.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Legal Agreement ')</h5>
                                    <p >@lang('Before commencing the project, both parties (client and PixClipping) will sign a confidential contract.')</p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/ghost/icon/output.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Enterprise-grade Policy')</h5>
                                    <p>@lang('We tailor our image editing services to meet the unique requirements of various photography niches, ensuring top-notch quality.')</p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/ghost/icon/chart.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Professional Service  ')</h5>
                                    <p>@lang('Our seasoned DTP experts are passionately delivering professional photo editing.
                                        ')</p>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
    </section>


    <!-- Sophisticated -->
    <section class=" offers sophisticated" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <style>
                        h1{
                            font-size: 3rem;
                        }
                    </style>
                    <h1>@lang('Comprehensive Editing Solutions, All in One Place')</h1>
                </div>
                <div class="col-12 col-md-6 gx-5">
                    <div class="row intro">

                        <div class="col-12 p-0">
                            <h4 class="featured alt text-secondary">@lang('Meet your e-commerce editing needs.')</h4>
                            <div class="paragraph">
                                <p>@lang('Unlock top-tier e-commerce image editing services for your website or e-commerce needs. Affordable rates, lightning-fast delivery, and unwavering quality guaranteed.')</p>
                                <u></u>
                            </div>
                           
                            <ol class="services-list">
                            
                                <div class="row">
                                    <div class="col-lg-6">
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Add shadows & reflection')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Reshape, Liquefy')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Camera raw correction')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Make symmetrical')</li>
                                    </div>
                                    <div class="col-lg-6">
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Image format as you need')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Adjustable layer file</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Rush hour delivery</li>
                                    </div>
                                </div>
  
                            <p>Obtain high-quality product images quickly and affordably.</p>
                                    
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-1">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro ">
                    <div class="col-lg-12 heading">
                        <h3 class="mb-0">@lang('E-commerce Photo Editing Services: Basic Editing')</h3>
                        <p class="mt-2 ">@lang('Our expertise lies in showcasing product features, logos, and names while adhering to precise e-commerce standards.  ')</p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                
                    <div class="col-lg-4">
                        <img src="{{asset('front-assets/images/ecommerce/basic_edit.png')}}" alt="">
                    </div>
    
                    <div class="col-lg-8 col-md-8">
                        <div class="">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="benefit-card">
                                        <img src="{{asset('front-assets/images/ghost/icon/gallary.gif')}}" alt="">
                                        <h5 class="text-secondary mt-0">@lang('Background Remove')</h5>
                                        <p class="paragraph">@lang('Elevate your product imagery to perfection, showcasing a flawless, lifelike representation while effortlessly eliminating imperfections.')</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3" >
                                    <div class="benefit-card">
                                        <img src="{{asset('front-assets/images/ghost/icon/target.gif')}}" alt="">
                                        <h5 class="text-secondary mt-0">@lang('Shadow Making')</h5>
                                        <p class="paragraph">@lang('Enhance your product photos with lifelike natural shadows that captivate viewers and drive conversions.')</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="benefit-card">
                                        <img src="{{asset('front-assets/images/ghost/icon/output.gif')}}" alt="">
                                        <h5 class="text-secondary mt-0">@lang('Color Correction
                                            ')</h5>
                                        <p class="paragraph">@lang('Expertly correct color problems for natural, vibrant image enhancement.')</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="benefit-card">
                                        <img src="{{asset('front-assets/images/ghost/icon/chart.gif')}}" alt="">
                                        <h5 class="text-secondary mt-0">@lang('Product Recolor ')</h5>
                                        <p class="paragraph">@lang('Re- colour Product Images to Save You Time, Effort, and Money, Eliminating the Need for Repeated Photography.')</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="benefit-card">
                                        <img src="{{asset('front-assets/images/ghost/icon/output.gif')}}" alt="">
                                        <h5 class="text-secondary mt-0">@lang('Basic Retouch
                                            ')</h5>
                                        <p class="paragraph">@lang('Professional Photo Editing: Expertly remove dust, mask furs/model hairs, and perform ghost mannequin editing.
                                            ')</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="benefit-card">
                                        <img src="{{asset('front-assets/images/ghost/icon/chart.gif')}}" alt="">
                                        <h5 class="text-secondary mt-0">@lang('Add Magnifier')</h5>
                                        <p class="paragraph">@lang('Enhance your product\'s presentation by incorporating a magnifier tool for a pristine, undistorted view.')</p>
                                    </div>
                                </div>
    
                                
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 360-->
    <section class="section-2 bg-light ">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro ">
                    <div class="col-lg-12 heading">
                        <h3 class="mb-0">@lang('360° Product Image Editing')</h3>
                        <p class="mt-2 ">@lang('Capture attention with precise 360° product images, showcasing every detail from every angle')</p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-sm-12 col-md-6">
                        <img src="/front-assets/images/background_remove/masking.png" class="fit-image" alt="Masking">
                    </div>
                    <div class="col-sm-12 col-md-6">
                    
                        <p class="paragraph">
                            @lang('Unlock the power of 360° product presentation with our expert image editing services. Just send us a minimum of 24 product images from various angles, and we\'ll work our magic:')</p>
                        <ol class="services-list">
                    
                            <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Create a seamless 360° rotation view.')</li>
                            <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Precise clipping paths for clean edges.')</li>
                            <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Expert shadow/reflection enhancement.')</li>
                            <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Basic retouching for perfection.')</li>
                            <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Crop images for optimal presentation.')</li>
                            <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Adjust color tones for consistency.')</li>
                            <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Sharpen product details.')</li>
                            
                        </ol>
                        <p class="paragraph">@lang('Trust our seasoned designers to ensure your images flow seamlessly in a captivating 360° product rotation.')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- amazon --}}
    <section class="section-2 ">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro ">
                    <div class="col-lg-12 heading">
                        <h3 class="mb-0">@lang('Amazon, eBay & Shopify Ready Image')</h3>
                        <p class="mt-2 ">@lang('Get instant e-commerce-ready images, ready for global platforms.')</p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-sm-12 col-md-8">
                    
                        <p class="paragraph">
                            @lang('Optimize Your Product Images for Different Platforms')</p>
                        <ul class="paragraph">
                    
                            <li><strong>@lang('Amazon:') </strong> @lang('We meticulously adhere to Amazon\'s image guidelines. We create a pristine white background (RGB 255,255,255) with a tight product shot occupying at least 85% of the frame. Aim for image dimensions of 1000 pixels or larger in either height or width, in a 1:1 ratio, using sRGB or CMYK color mode.')</li>
                            <li><strong>@lang('eBay:') </strong> @lang('Our service ensures your product stands out. We provide a square or rectangular image against a neutral backdrop, with a minimum dimension of 500 pixels on the longest side.')</li>
                            <li><strong>@lang('Shopify:') </strong> @lang('Elevate your store\'s visual appeal with high-res images. Upload 2048 x 2048 pixel square product photos. For an even more professional look, consider uploading images up to 4472 x 4472 pixels, with a file size of up to 20 MB, enabling excellent zoom capabilities.')</li>
                            <li><strong>@lang('Etsy:') </strong> @lang('For captivating product zoom, provide images at 1000 x 1000 pixels.
                                ')</li>
                          
                        </ul>
                        <p class="paragraph">@lang('Get platform-perfect product images effortlessly!')</p>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <img src="/front-assets/images/background_remove/masking.png" class="fit-image" alt="Masking">
                    </div>
                   
                </div>
            </div>
        </div>
    </section>

    {{-- image optimization --}}
    <section class="section-2 bg-light ">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Image Optimization')
                        </h3>
                        <p class="mt-2 ">@lang('Transforming your images into web-ready perfection, we offer expert photo editing tailored to your needs.')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-sm-12 col-md-6">
                        <img src="/front-assets/images/home/services/jewelry-retouch-service/jewelry-retouch2.png" class="fit-image" alt="Jewelry Retouch">
                    </div>
                    <div class="col-12 col-md-6">
                        
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="benefit-card">
                                        <img src="{{asset('front-assets/images/home/icon/alart.gif')}}" alt="">
                                        <h5 class="text-secondary mt-0">@lang('Crop and Resize')</h5>
                                        <p class="text-center">@lang('Resize your images effortlessly while preserving their original proportions with our customizable presets. ')</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3" >
                                    <div class="benefit-card">
                                        <img src="{{asset('front-assets/images/home/icon/idea.gif')}}" alt="">
                                        <h5 class="text-secondary mt-0">@lang('Web Format Image ')</h5>
                                        <p >@lang('We deliver images in JPEG, GIF, and PNG formats according to your preferences.')</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="benefit-card">
                                        <img src="{{asset('front-assets/images/photo_recolor/icon/coin.gif')}}" alt="">
                                        <h5 class="text-secondary mt-0">@lang('Add/Remove Meta')</h5>
                                        <p>@lang('We\'ll customize image metadata to meet your copyright needs.')</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="benefit-card">
                                        <img src="{{asset('front-assets/images/home/icon/clock.gif')}}" alt="">
                                        <h5 class="text-secondary mt-0">@lang('DPI/PPI')</h5>
                                        <p>@lang('Enhance your photo clarity and quality with our 96-150 DPI e-commerce photo editing services, ensuring swift and seamless uploads. ')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partners -->
    <section class="section-1 ">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-sm-12 heading">
                        <h3 class="mb-0">@lang('Get High-performing Images')</h3>
                        <p class="mt-2 ">@lang('Unlocking e-commerce success with compelling and competitive image enhancements. View our latest transformations.')</p>
                    </div>
                </div>
                  
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box ">
                            <div class="jewelary-img">
                                <a href="{{asset('front-assets/images/ghost/portfolio/one_1.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/one.png')}}" alt="">
                                </a>
                                
                            </div>
                            <div class="jewelary-btn d-flex align-items-center justify-content-center">
                                <a href="#">Makeapointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box ">
                            <div class="jewelary-img1 ">
                                <a href{{asset('front-assets/images/ghost/portfolio/two_2.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/two.png')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img2">
                                <a href="{{asset('front-assets/images/ghost/portfolio/three_3.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/three.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4   d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img3">
    
                                <a href="{{asset('front-assets/images/ghost/portfolio/four_4.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/four.png')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img4 ">
                                <a href="{{asset('front-assets/images/ghost/portfolio/five_5.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/five.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img5">
                                <a href="{{asset('front-assets/images/ghost/portfolio/six_6.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/six.png')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img6">
                                <a href="{{asset('front-assets/images/ghost/portfolio/one_1.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/one.png')}}" alt="..">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img7">
                                <a href="{{asset('front-assets/images/ghost/portfolio/seven_7.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/seven.png')}}" alt="..">
                                </a>
                            </div>
                            <div class="jewelary-img8">
                                <a href="{{asset('front-assets/images/ghost/portfolio/eight_8.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/eight.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing " class="section-2  plans">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12 heading">
                    <h3>@lang('E-commerce Photo Editing pricing')</h3>
                    <p class="text-max-800 ">@lang('we uphold top-tier quality at competitive rates. Our pricing is transparent and all-inclusive, free from hidden fees')</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/background_remove/price icon/simple.png')}}" class="icon" alt="pricing icon">
                       
                        <h4>@lang('Simple')</h4>
                        <span class="price">@lang('$3.50 - $4.99')</span>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Les design and simple edge')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                       
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Single diamond')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Single gemstone')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Cluster ring')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Long chain')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                           
                        </ul>
                        <a href="#" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>@lang('See Sample')</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/background_remove/price icon/medium.png')}}" class="icon" alt="pricing icon">
                        <h4>@lang('Medium')</h4>
                        <span class="price">@lang('$5.00 - $8.99')</span>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Curvy design')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Multiple edges')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Two colors')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Double diamond')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Double gemstone')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
    
                        </ul>
                        <a href="{{route('login')}}" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>@lang('See Sample')</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/background_remove/price icon/complex.png')}}" class="icon" alt="pricing icon">
                        
                        <h4>@lang('Complex')</h4>
                        <span class="price">@lang('Talk to us')</span>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Complex design</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Group of Jewelry </span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Numerous edge</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Multiple diamonds</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Multiple gemstones')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                        </ul>
                        <a href="{{route('contact')}}" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>@lang('See Sample')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dedicated to exceeding expectation-->
    @include('layouts.include.speciality')

    <section id="services" class="section-1 offers pb-5">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12 heading">
                    <h3>@lang('Other Services You Might Need') </h3>
                    <p class="text-max-800 ">@lang('You might like some other professional editing & retouching services. Click and see our ventures, all services in one place.')</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12 col-md-4 ">
                    <div class="card-box p-0">
                        <img class="card-img-top lazyloaded" src="{{asset('front-assets/images/clipping_path/before_after.webp')}}">
                        <div class="card-body">
                            
                            <h4 class="font-weight-bolder">
                            <a href="{{route('services.slug','photo-retouching')}}" class="text-primary"><b> @lang('Clipping Path') </b></a>
                            </h4>
                          
                            <p class="mb-0">Select flying hairs, product furs and transparent subjects with the shape and edge.</p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 ">
                    <div class="card-box p-0">
                        <img class="card-img-top lazyloaded"  alt="Baby girl image masking with before after"src="{{asset('front-assets/images/clipping_path/shoes.webp')}}">
                        <div class="card-body">
                            
                            <h4>
                            <a href="{{route('services.slug','photo-retouching')}}" class="text-primary"><b>Photo Retouching </b></a>
                            </h4>
                          
                            <p class="mb-0">Select flying hairs, product furs and transparent subjects with the shape and edge.</p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 ">
                    <div class="card-box p-0">
                        <img class="card-img-top lazyloaded"  alt="Baby girl image masking with before after" src="{{asset('front-assets/images/clipping_path/product.webp')}}">
                        <div class="card-body">
                            
                            <h4>
                            <a href="{{route('services.slug','shadow-making')}}" class="text-primary"><b>Shadow Making </b></a>
                            </h4>
                          
                            <p class="mb-0">Select flying hairs, product furs and transparent subjects with the shape and edge.</p>
                        </div>
                    </div>
                </div>
            </div>
                
               
        </div>
    </section>

    @include('action-blog')

@endsection


@push('style')
    <style>
        
.jewelary-box{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

}

.jewelary-box img{
  width: 100%;
  border-radius: 20px;
  padding: 5px;
}
.jewelary-img1 img{
width: 180px;
height: 200px;

}
.jewelary-img2 img{
  width: 180px;
  height: 150px;
}
.jewelary-img5 img{
  height: 230px;
}

.jewelary-img6 img{
  height: 230px;
}
.jewelary-btn{
  width: 100%;
  margin-top: 20px;
}
.jewelary-btn a{
  padding: 10px 20px;
  background-color: orange; 
  border-radius: 10%;
  color: #000;
}

    </style>

@endpush


@section('page-script')
<script>

Fancybox.bind('[data-fancybox="gallery"]', {
  // Your custom options
});


</script>
@endsection
