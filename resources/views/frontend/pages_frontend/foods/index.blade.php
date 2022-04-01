@extends('frontend.layouts_frontend.master')

@section('title')

@endsection

@section('extra_styles')

@endsection

@section('content')
<!-- content  -->


<!-- Page Title -->
<section class="page-title" style="background-image: url(assets/frontend_assets/assets/images/background/11.jpg)">
    <div class="auto-container">
        <h1>Food Menu</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="/">Home</a></li>
            <li>Our Foods</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Dishes Section -->
<section class="dishes-section">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>Our Food Menu</h2>
        </div>

        <div class="row clearfix">

            <!-- Dishes Column -->
            @foreach($foodmenus as $foodmenu)
            <div class="dishes-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Dish Block -->
                    <div class="dish-block style-three">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset($foodmenu->foodmenu_photo) }}" style="width: 100%; height:100%;">
                            </div>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h4 style="font-size:15px;"><a href="#">{{ $foodmenu->foodmenu_name }}</a></h4>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="price" style="font-size:15px;">{{ $foodmenu->foodmenu_price }} <span style="font-size:10px;">ugx</span></div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="price" style="font-size:15px;">
                                        <a href=""><span>Details<i class="fas fa-angle-right" style="margin-left:5px;"></i></span></a>
                                    </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
							<div class="clearfix">
                            <div class="pull-left text" style="margin-top:0px">{{ \Illuminate\Support\Str::limit($foodmenu->foodmenu_description, 100, $end='....') }}</div>
							</div>

                        </div>
                    </div>



                </div>
                
            </div>
            @endforeach



        </div>

        <!-- Button Box -->
        <!-- <div class="button-box text-center">
					<a href="menu.html" class="theme-btn btn-style-five"><span class="txt">View full menu</span></a>
				</div> -->

    </div>
</section>
<!--End Dishes Page Section-->




@endsection

@section('extra_scripts')

@endsection