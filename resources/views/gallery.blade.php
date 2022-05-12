@extends('layouts.main')

@section('container')
<section id="gallery">
<div class="jumbotron-gallery">
    <div class="row text-center gallery-caption">
    <h1>OUR GALLERY</h1>
    </div>
</div>
<div class="gallery-body">
    <div data-spy="scroll" data-target="#ss-nav">
        <div class="m-p-g">
            <div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">
                <img src="img/photog/1.jpg" data-full="img/photog/1.jpg" class="m-p-g__thumbs-img" />
                <img src="img/photog/2.jpg" data-full="img/photog/2.jpg" class="m-p-g__thumbs-img" />
                <img src="img/photog/3.jpg" data-full="img/photog/3.jpg" class="m-p-g__thumbs-img" />
                <img src="img/photog/4.jpg" data-full="img/photog/4.jpg" class="m-p-g__thumbs-img" />
                <img src="img/photog/5.jpg" data-full="img/photog/5.jpg" class="m-p-g__thumbs-img" />
                <img src="img/photog/1.jpg" data-full="img/photog/1.jpg" class="m-p-g__thumbs-img" />
                <img src="img/photog/2.jpg" data-full="img/photog/2.jpg" class="m-p-g__thumbs-img" />
                <img src="img/photog/3.jpg" data-full="img/photog/3.jpg" class="m-p-g__thumbs-img" />
                <img src="img/photog/4.jpg" data-full="img/photog/4.jpg" class="m-p-g__thumbs-img" />
                <img src="img/photog/5.jpg" data-full="img/photog/5.jpg" class="m-p-g__thumbs-img" />
                <img src="img/photog/5.jpg" data-full="img/photog/5.jpg" class="m-p-g__thumbs-img" />
                <img src="img/photog/5.jpg" data-full="img/photog/5.jpg" class="m-p-g__thumbs-img" />
                <img src="img/photog/5.jpg" data-full="img/photog/5.jpg" class="m-p-g__thumbs-img" />
                <img src="img/photog/5.jpg" data-full="img/photog/5.jpg" class="m-p-g__thumbs-img" />
                <img src="img/photog/3.jpg" data-full="img/photog/4.jpg" class="m-p-g__thumbs-img" />
            </div>    
            <div class="m-p-g__fullscreen"></div>
        </div>
        <script>
            var elem = document.querySelector('.m-p-g');
        
            document.addEventListener('DOMContentLoaded', function() {
                var gallery = new MaterialPhotoGallery(elem);
            });
        </script>        
    </div>
</div>
</section>    
@endsection

