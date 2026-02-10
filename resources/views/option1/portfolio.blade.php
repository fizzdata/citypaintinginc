<div class="section section-lg text-center" style="background-color: rgba(245,250,254, 0.8);" id="work">
  <h2>Recent Projects</h2>
    <div class="container-fluid ps-0 pe-0" style="padding: 0px 5% !important;">
      <p>Take a look at some of our recent jobs finished this year!</p>
      <div class="row row-12 hoverdir justify-content-center">

@foreach($portfolios as $portfolio)
        <div class="col-sm-6 col-md-4" data-lightgallery="group">
          <!-- Thumbnail Modern-->
          <a class="thumbnail thumbnail-modern context-dark hoverdir-item wow {{$portfolio['slide']}}"
             href="images/portfolio/{{$portfolio['folder_name']}}/{{ $portfolio['inside_images'][0] ?? '' }}"
             data-lightgallery="item"
             data-hoverdir-target=".thumbnail-modern-caption">
            <div class="thumbnail-modern-figure"><img src="images/portfolio/{{$portfolio['folder_name']}}/{{$portfolio['outside_img']}}" alt=""  height="340px"/>
            </div>
            <div class="thumbnail-modern-caption">
              <p class="thumbnail-modern-text">{{$portfolio['text1']}}</p>
              <p class="thumbnail-modern-author">{{$portfolio['text2']}}</p>
            </div>
          </a>

          @if(!empty($portfolio['inside_images']) && is_array($portfolio['inside_images']))
            @foreach($portfolio['inside_images'] as $i => $img)
              @if($i > 0)
                <a href="images/portfolio/{{$portfolio['folder_name']}}/{{ $img }}" data-lightgallery="item" class="d-none"></a>
              @endif
            @endforeach
          @endif

        </div>
        @endforeach

      </div>
    </div>
  </div>