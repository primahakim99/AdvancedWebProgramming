@extends('layouts.main')
@section('content')
<style>
    .grid {
        background: rgba(0,0,0,0);
    }
    /* clear fix */
    .grid:after {
        content: '';
        display: block;
        clear: both;
    }
    /* ---- .grid-item ---- */
    .grid-sizer,
    .grid-item {
        width: 33.34%;
    }
    .grid-item {
        float: left;
    }
    .grid-item img {
        display: block;
        max-width: 100%;
    }
</style>
<section class="image-head-wrapper">
    <div class="inner-wrapper">
        <h1>Gallery</h1>
    </div>
</section>
<div class="clearfix"></div>

<section class="gallery-block">
    <div class="container">
        <div class="row">
            <div class="grid hover-effect">
                <div class="grid-sizer"></div>
                <div class="grid-item percent37 gallery-image">
                    <a class="example-image-link img-responsive" href="assets/images/gallery1-1.jpg" data-lightbox="example-1"><img src="assets/images/gallery1.png" class="img-responsive" alt="gallery1"></a>
                </div>
                <div class="grid-item percent25 gallery-image">
                    <a class="example-image-link img-responsive" href="assets/images/gallery2-2.jpg" data-lightbox="example-1"><img src="assets/images/gallery2.png" class="img-responsive" alt="gallery1"></a>
                </div>
                <div class="grid-item percent37 gallery-image">
                    <a class="example-image-link img-responsive" href="assets/images/gallery3-3.jpg" data-lightbox="example-1"><img src="assets/images/gallery3.png" class="img-responsive" alt="gallery1"></a>
                </div>
                <div class="grid-item percent25 gallery-image">
                    <a class="example-image-link img-responsive" href="assets/images/gallery4-4.jpg" data-lightbox="example-1"><img src="assets/images/gallery4.png" class="img-responsive" alt="gallery1"></a>
                </div>
                <div class="grid-item percent37 gallery-image">
                    <a class="example-image-link img-responsive" href="assets/images/gallery5-5.jpg" data-lightbox="example-1"><img src="assets/images/gallery5.png" class="img-responsive" alt="gallery1"></a>
                </div>
                <div class="grid-item percent20 gallery-image">
                    <a class="example-image-link img-responsive" href="assets/images/gallery6-6.jpg" data-lightbox="example-1"><img src="assets/images/gallery6.png" class="img-responsive" alt="gallery1"></a>
                </div>
                <div class="grid-item percent20 gallery-image">
                    <a class="example-image-link img-responsive" href="assets/images/gallery7-7.jpg" data-lightbox="example-1"><img src="assets/images/gallery7.png" class="img-responsive" alt="gallery1"></a>
                </div>
                <div class="grid-item percent20 gallery-image">
                    <a class="example-image-link img-responsive" href="assets/images/gallery8-8.jpg" data-lightbox="example-1"><img src="assets/images/gallery8.png" class="img-responsive" alt="gallery1"></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script>
    var grid = document.querySelector('.grid');

    var msnry = new Masonry(grid, {
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true
    });

    imagesLoaded(grid).on('progress', function () {
        // layout Masonry after each image loads
        msnry.layout();
    });
</script>
