@extends('fontend.layouts.layout')
@section('content')

<?php 
$carts = Cart::content();
$collections = collect($carts);
?>


<div class="slider-with-banner">

    <div class="container">
        <div class="row">
            <!-- Begin Slider Area -->
            <div class="col-lg-8 col-md-8">
                <div class="slider-area">
                    <div class="slider-active owl-carousel">
                        <!-- Begin Single Slide Area -->
                        @foreach ($sliders as $slide)
                            <div class="single-slide align-center-left  animation-style-01" style="
                            background-repeat: no-repeat;
                            background-position: center center;
                            background-size: cover;
                            min-height: 475px;
                            width: 100%;
                            background-image: url('{{asset($slide->image)}}');">
                                <div class="slider-progress"></div>
                                <div class="slider-content">
                                    {{-- <h5>Sale Offer <span>-20% Off</span> This Week</h5> --}}
                                    <h2>{{$slide->title}}</h2>
                                    <div class="default-btn slide-btn">
                                        <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Slider Area End Here -->
            <!-- Begin Li Banner Area -->
            <div class="col-lg-4 col-md-4 text-center pt-xs-30 mb-4">
                <div class="li-banner">
                    <a href="#">
                        <img src="{{asset('fontend/image/banner/1_1.jpg')}}" alt="">
                    </a>
                </div>
                <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
                    <a href="#">
                        <img src="{{asset('fontend/image/banner/1_2.jpg')}}" alt="">
                    </a>
                </div>
            </div>
            <!-- Li Banner Area End Here -->
        </div>
    </div>
</div>



<section class="product-area li-laptop-product pt-60 pb-45 mb-5">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>{{ $data->title }}</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach($products as $product)
                        <?php
                            $prodExist = $collections->where('id', $product->id)->first();
                            $disabled = $prodExist ? 'disabled' : '';
                        ?>

                        <div class="col-lg-12">
                            {{-- <input type="hidden" id='product_id' value="{{$product->id}}"> --}}
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="{{route('home.product.show',$product->id)}}">
                                        <img src="{{asset($product->image)}}" alt=" ">
                                    </a>
                                    <span class="sticker">{{$product->badge}}</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <h4><a class="product_name" href="{{route('home.product.show',$product->id)}}">{{$product->name}}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">${{$product->sell_price}}</span>
                                        </div>
                                    </div>

                                    <div class="add-actions">
                                        <ul class="add-actions-lin">
                                            <input id='input' value={{$product->id}} type='hidden'>

                                            <div class="single-add-to-cart cart-quantity">
                                                <a type="button" class="btn btn-warning addtocartButton {{ $disabled }}"  onclick="myFunction({{$product->id}})">Add to cart</a>
                                                {{-- //<button type="button" class="btn btn-warning addtocartButton btn-{{$product->$id}}" id='cartbutton' {{ $disabled }}>Add to cart</button> --}}
                                            </div>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>


<div class="li-static-banner mb-4">
    <div class="container">
        <div class="row">
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center">
                <div class="single-banner">
                    <a href="#">
                        <img src="{{asset('fontend/image/banner/1_3.jpg')}}" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                <div class="single-banner">
                    <a href="#">
                        <img src="{{asset('fontend/image/banner/1_4.jpg')}}"  alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                <div class="single-banner">
                    <a href="#">
                        <img src="{{asset('fontend/image/banner/1_5.jpg')}}" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
        </div>
    </div>
</div>


<!-- Li's Laptop Product Area End Here -->
<!-- Begin Li's TV & Audio Product Area -->
<section class="product-area li-laptop-product li-tv-audio-product pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>{{$tvdata->title}}</span>
                    </h2>
                    {{-- <ul class="li-sub-category-list">
                        <li class="active"><a href="shop-left-sidebar.html">Chamcham</a></li>
                        <li><a href="shop-left-sidebar.html">Sanai</a></li>
                        <li><a href="shop-left-sidebar.html">Meito</a></li>
                    </ul> --}}
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach($tvproducts as $tvproduct)
                        <?php
                        $prodExist = $collections->where('id', $tvproduct->id)->first();
                        $disabled = $prodExist ? 'disabled' : '';
                        ?>
                        
                        
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="{{route('home.product.show',$tvproduct->id)}}">
                                        <img src="{{asset($tvproduct->image)}}" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">{{$tvproduct->badge}}</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <h4><a class="product_name" href="{{route('home.product.show',$tvproduct->id)}}">{{($tvproduct->name)}}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">${{$tvproduct->sell_price}}</span>
                                        </div>
                                    </div>

                                    <div class="add-actions">
                                        <ul class="add-actions-link mt-3">
                                            <input id='input' value={{$tvproduct->id}} type='hidden'>
                                            <div class="single-add-to-cart cart-quantity">
                                                <button type="button" class="btn btn-warning addtocartButton" id='cartbutton' {{$disabled}}>Add to cart</button>
                                           </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
<!-- Li's TV & Audio Product Area End Here -->
<!-- Begin Li's Static Home Area -->
<div class="li-static-home">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Begin Li's Static Home Image Area -->
                <div class="li-static-home-image"></div>
                <!-- Li's Static Home Image Area End Here -->
                <!-- Begin Li's Static Home Content Area -->
                <div class="li-static-home-content">
                    <p>Sale Offer<span>-20% Off</span>This Week</p>
                    <h2>Featured Product</h2>
                    <h2>Meito Accessories 2018</h2>
                    <p class="schedule">
                        Starting at
                        <span> $1209.00</span>
                    </p>
                    <div class="default-btn">
                        <a href="shop-left-sidebar.html" class="links">Shopping Now</a>
                    </div>
                </div>
                <!-- Li's Static Home Content Area End Here -->
            </div>
        </div>
    </div>
</div>
<!-- Li's Static Home Area End Here -->
<!-- Begin Li's Trending Product Area -->
<section class="product-area li-trending-product pt-60 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Tab Menu Area -->
            <div class="col-lg-12">
                <div class="li-product-tab li-trending-product-tab">
                    <h2>
                        <span>Trendding Products</span>
                    </h2>
                    {{-- <ul class="nav li-product-menu li-trending-product-menu">
                       <li><a class="active" data-toggle="tab" href="#home1"><span>Sanai</span></a></li>
                       <li><a data-toggle="tab" href="#home2"><span>Camera Accessories</span></a></li>
                       <li><a data-toggle="tab" href="#home3"><span>XailStation</span></a></li>
                    </ul>                --}}
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
                <div class="tab-content li-tab-content li-trending-product-content">
                    <div id="home1" class="tab-pane show fade in active">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                @foreach($Trenddings as $trandding)
                                <?php
                                $prodExist = $collections->where('id', $trandding->id)->first();
                                $disabled = $prodExist ? 'disabled' : '';
                               ?>
    
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="{{route('home.product.show',$trandding->id)}}">
                                                <img src="{{asset($trandding->image)}}" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">{{$trandding->badge}}</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <h4><a class="product_name" href="{{route('home.product.show',$trandding->id)}}">{{$trandding->name}}</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">${{$trandding->sell_price}}</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link mt-3">
                                                    <input id='input' value={{$trandding->id}} type='hidden'>
                                                    <div class="single-add-to-cart cart-quantity">
                                                        <button type="button" class="btn btn-warning addtocartButton" id='cartbutton' {{$disabled}}>Add to cart</button>
                                                   </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Tab Menu Content Area End Here -->
            </div>
            <!-- Tab Menu Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Trending Product Area End Here -->
<!-- Begin Li's Trendding Products Area -->
<section class="product-area li-trending-product pt-60 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Tab Menu Area -->
            <div class="col-lg-12">
                <div class="li-product-tab li-trending-product-tab">
                    <h2>
                        <span>BestSeller</span>
                    </h2>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
                <div class="tab-content li-tab-content li-trending-product-content">
                    <div id="home1" class="tab-pane show fade in active">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                @foreach($bestsellers as $bestseller)
                                <div class="col-lg-12">
                                    <?php
                                    $prodExist = $collections->where('id', $bestseller->id)->first();
                                    $disabled = $prodExist ? 'disabled' : '';
                                   ?>
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                    
                                        <div class="product-image">
                                            <a href="{{route('home.product.show',$bestseller->id)}}">
                                                <img src="{{asset($bestseller->image)}}" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">{{$bestseller->badge}}</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <h4><a class="product_name" href="{{route('home.product.show',$bestseller->id)}}">{{$bestseller->name}}</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">${{$bestseller->sell_price}}</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link mt-3">
                                                    <input id='input' value={{$bestseller->id}} type='hidden'>
                                                    <div class="single-add-to-cart cart-quantity">
                                                        <button type="button" class="btn btn-warning addtocartButton" id='cartbutton'{{$disabled}}>Add to cart</button>
                                                   </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Tab Menu Content Area End Here -->
            </div>
            <!-- Tab Menu Area End Here -->
        </div>
    </div>
</section>


<script>
    function myFunction(id){
        console.log(id);
        $.ajax({
            type: 'GET',
            url: '/add-to-cart/'+id, 
            dataType:'JSON',
            success:function(response) {
            window.location = "/addtocart/show";
       }
    })
}
</script>
@endsection