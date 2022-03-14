@extends('layouts.main')
@section('content')
<div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->

    <ol class="carousel-indicators">
        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel1" data-slide-to="1"></li>
        <li data-target="#myCarousel1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active"> <img src="assets/images/banner.png" style="width:100%; height: 500px" alt="First slide">
            <div class="carousel-caption">
                <h1>vacayhome<br> spa & Resort</h1>
            </div>
        </div>
        <div class="item"> <img src="assets/images/banner2.png" style="width:100%; height: 500px" alt="Second slide">
            <div class="carousel-caption">
                <h1>vacayhome<br> spa & Resort</h1>
            </div>
        </div>
        <div class="item"> <img src="assets/images/banner3.png" style="width:100%; height: 500px" alt="Third slide">
            <div class="carousel-caption">
                <h1>vacayhome<br> spa & Resort</h1>
            </div>
        </div>

    </div>
    <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="assets/images/icons/left-arrow.png" onmouseover="this.src = 'assets/images/icons/left-arrow-hover.png'" onmouseout="this.src = 'assets/images/icons/left-arrow.png'" alt="left"></a>
    <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="assets/images/icons/right-arrow.png" onmouseover="this.src = 'assets/images/icons/right-arrow-hover.png'" onmouseout="this.src = 'assets/images/icons/right-arrow.png'" alt="left"></a>

</div>
<div class="clearfix"></div>

<!--service block--->
<section class="service-block">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                <div class="service-details text-center">
                    <div class="service-image">
                        <img alt="image" class="img-responsive" src="assets/images/icons/wifi.png">
                    </div>
                    <h4><a>free wifi</a></h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                <div class="service-details text-center">
                    <div class="service-image">
                        <img alt="image" class="img-responsive" src="assets/images/icons/key.png">
                    </div>
                    <h4><a>room service</a></h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                <div class="service-details text-center">
                    <div class="service-image">
                        <img alt="image" class="img-responsive" src="assets/images/icons/car.png">
                    </div>
                    <h4><a>free parking</a></h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                <div class="service-details text-center">
                    <div class="service-image">
                        <img alt="image" class="img-responsive" src="assets/images/icons/user.png">
                    </div>
                    <h4><a>customer support</a></h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!--gallery block--->
<section class="gallery-block gallery-front">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="gallery-image">
                    <img class="img-responsive" src="assets/images/room1.png">
                    <div class="overlay">
                        <a class="info pop example-image-link img-responsive" href="assets/images/room1.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <p><a>delux room</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="gallery-image">
                    <img class="img-responsive" src="assets/images/room2.png">
                    <div class="overlay">
                        <a class="info pop example-image-link img-responsive" href="assets/images/room2.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <p><a>super room</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="gallery-image">
                    <img class="img-responsive" src="assets/images/room3.png">
                    <div class="overlay">
                        <a class="info pop example-image-link img-responsive" href="assets/images/room3.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <p><a>single room</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="gallery-image">
                    <img class="img-responsive" src="assets/images/room4.png">
                    <div class="overlay">
                        <a class="info pop example-image-link img-responsive" href="assets/images/room4.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <p><a>double room</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--offer block-->
<section class="vacation-offer-block">
    <div class="vacation-offer-bgbanner">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="vacation-offer-details">
                        <h1>Your vacation Awaits</h1>
                        <h4>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit.</h4>
                        <button type="button" class="btn btn-default">Choose a package</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End-->

<!----resort-overview--->
<section class="resort-overview-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                <div class="side-A">
                    <div class="product-thumb">
                        <div class="image">
                            <a><img src="{{ $ro1->image }}" class="img-responsive" alt="image"></a>
                        </div>
                    </div>
                </div>
                <div class="side-B">
                    <div class="product-desc-side">
                        <h3><a href="/home/resort-overview/{{ $ro1->slug }}">{{ $ro1->title }}</a></h3>
                        {!! $ro1->excerpt !!}
                        <div class="links"><a href="/home/resort-overview/{{ $ro1->slug }}">Read more</a></div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                <div class="side-A">
                    <div class="product-thumb">
                        <div class="image">
                            <a><img alt="image" class="img-responsive" src="{{ $ro2->image }}"></a>
                        </div>
                    </div>
                </div>
                <div class="side-B">
                    <div class="product-desc-side">
                        <h3><a href="home/resort-overview/{{ $ro2->slug }}">{{ $ro2->title }}</a></h3>
                        {!! $ro2->excerpt !!}
                        <div class="links"><a href="home/resort-overview/{{ $ro2->slug }}">Read more</a></div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                <div class="side-A">
                    <div class="product-desc-side">
                        <h3><a href="home/resort-overview/{{ $ro3->slug }}">{{ $ro3->title }}</a></h3>
                        {!! $ro3->excerpt !!}
                        <div class="links"><a href="home/resort-overview/{{ $ro3->slug }}">Read more</a></div>
                    </div>
                </div>

                <div class="side-B">
                    <div class="product-thumb">
                        <div class="image txt-rgt">
                            <a class="arrow-left"><img src="{{ $ro3->image }}" class="img-responsive" alt="imaga"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                <div class="side-A">
                    <div class="product-desc-side">
                        <h3><a href="home/resort-overview/{{ $ro4->slug }}">{{ $ro4->title }}</a></h3>
                        {!! $ro3->excerpt !!}
                        <div class="links"><a href="home/resort-overview/{{ $ro4->slug }}">Read more</a></div>
                    </div>
                </div>

                <div class="side-B">
                    <div class="product-thumb txt-rgt">
                        <div class="image">
                            <a class="arrow-left"><img src="{{ $ro4->image }}" class="img-responsive" alt="imaga"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
</section>

<!-----blog slider----->
<!--blog trainer block-->
<section class="blog-block-slider">
    <div class="blog-block-slider-fix-image">
        <div id="myCarousel2" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Wrapper for slides -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel2" data-slide-to="1"></li>
                    <li data-target="#myCarousel2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="blog-box">
                            {!! $bs1->body !!}
                        </div>
                        <div class="blog-view-box">
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{ $bs1->image }}" class="media-object">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading blog-title">{{ $bs1->title }}</h3>
                                    <h5 class="blog-rev">{{ $bs1->excerpt }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-box">
                            {!! $bs2->body !!}
                        </div>
                        <div class="blog-view-box">
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{ $bs2->image }}" class="media-object">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading blog-title">{{ $bs2->title }}</h3>
                                    <h5 class="blog-rev">{{ $bs2->excerpt }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-box">
                            {!! $bs3->body !!}
                        </div>
                        <div class="blog-view-box">
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{ $bs3->iamge }}" class="media-object">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading blog-title">{{ $bs3->title }}</h3>
                                    <h5 class="blog-rev">{{ $bs3->excerpt }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>

<!---blog block--->
<section class="blog-block">
    <div class="container">
        <div class="row offspace-45">
            <div class="view-set-block">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="event-blog-image">
                        <img alt="image" class="img-responsive" src="{{ $b1->image }}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                    <div class="event-blog-details">
                        <h4><a href="">{{ $b1->title }}</a></h4>
                        <h5>Post By Admin <a><i aria-hidden="true" class="fa fa-heart-o fa-lg"></i>Likes</a><a><i aria-hidden="true" class="fa fa-comment-o fa-lg"></i>comments</a></h5>
                        {!! $b1->excerpt !!}
                        <a class="btn btn-default" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row offspace-45">
            <div class="view-set-block">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="event-blog-image">
                        <img alt="image" class="img-responsive" src="assets/images/blog2.png">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                    <div class="event-blog-details">
                        <h4><a href="single-blog.html">{{ $b2->title }}</a></h4>
                        <h5>Post By Admin <a><i aria-hidden="true" class="fa fa-heart-o fa-lg"></i>Likes</a><a><i aria-hidden="true" class="fa fa-comment-o fa-lg"></i>comments</a></h5>
                        {!! $b2->excerpt !!}
                        <a class="btn btn-default" href="single-blog.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
