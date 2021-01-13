<link rel="stylesheet" href="/assets/css/home/slider.css" />
<style>
  .slider-color {
    background-color: #fafafa;
  }

  .slider-video {
    height: 100%;
    object-fit: cover;
    margin: 0 auto;
  }

  .carousel input[type='range']::-moz-range-thumb {
    background-color: #0ff !important;
    color: #f00;
  }

  #carousel-prev-button {
    background-color: #004d40 !important;
  }

  #carousel-next-button {
    background-color: #004d40 !important;
  }

  .indicators li {
    background-color: #004d40 !important;
  }

  .indicators li.active {
    background-color: #00695c !important;
  }

  .slider-link {
    display: block;
    width: 100%;
    height: 100%;
    color: transparent;
    background-color: none;
    cursor: pointer;
    outline: none;
  }
</style>

<div class="carousel carousel-slider center" data-indicators="true">
  <div class="carousel-fixed-item center space-between">
    <button id="carousel-prev-button" class="btn-floating waves-effect btn-medium">
      <i class="material-icons">arrow_back</i>
    </button>
    <button id="carousel-next-button" class="btn-floating waves-effect btn-medium">
      <i class="material-icons">arrow_forward</i>
    </button>
  </div>
  <div class="carousel-item slider-color">
    <a href="#informatica" class="slider-link">
      <video src="./img/info.mp4" loop autoplay class="slider-video"></video>
    </a>
  </div>
  <div class="carousel-item slider-color">
    <a href="#enfermagem" class="slider-link">
      <video src="./img/enf.mp4" loop autoplay class="slider-video"></video>
    </a>
  </div>
  <div class="carousel-item white-text slider-color">
    <a href="#seguranca" class="slider-link">
      <!--<video src="./img/seg.mp4" loop autoplay class="slider-video"></video>-->
    </a>
  </div>
</div>