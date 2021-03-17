<div class="carousel carousel-slider center slider" data-indicators="true" id="slider">
  <div class="carousel-fixed-item hide-on-small-only fixed-carousel">
    <div class="space-between">
      <button id="carousel-prev-button" class="btn-floating waves-effect btn-medium">
        <i class="material-icons">arrow_back</i>
      </button>
      <button id="carousel-next-button" class="btn-floating waves-effect btn-medium">
        <i class="material-icons">arrow_forward</i>
      </button>
    </div>
  </div>
  <div class="carousel-item white-text">
    <img src="/assets/img/slider/internal_structure.webp" alt="Matriculas Abertas">
  </div>
  <div class="carousel-item white-text">
    <img src="/assets/img/slider/practical_class.webp" alt="EEEPJAA">
  </div>
</div>

<style>
  .slider {
    margin: 0 auto;
    position: relative;
    max-height: 396px;
  }

  .slider img {
    margin: 0 auto;
    position: relative;
    object-fit: contain;
  }

  .carousel-item {
    height: 100%;
  }

  @media (orientation: portrait) {
    .slider img {
      max-width: 100%;
    }
  }

  @media (orientation: landscape) {
    .slider img {
      max-height: 100%;
    }
  }

  #carousel-prev-button {
    color: #fff;
    font-size: 2em !important;
    margin: 20px;
    background-color: rgba(165, 165, 165, 0.133);
    pointer-events: all;
  }

  #carousel-next-button {
    margin: 20px;
    color: #fff;
    font-size: 2em !important;
    background-color: #fff2;
    pointer-events: all;
  }

  .fixed-carousel {
    display: block;
    margin: 0 auto;
    position: relative;
    top: 0;
    height: 100%;
    width: 100%;
    max-width: 920px;
    pointer-events: none;
  }

  .space-between {
    display: flex;
    max-width: 100%;
    width: 100%;
    height: 100% !important;
    justify-content: space-between;
    align-items: center;
  }

  .titulo {
    font-size: 20px !important;
  }
</style>