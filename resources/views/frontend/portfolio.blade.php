<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg py-5">
  <div class="container">

    <div class="section-title text-center mb-5">
      <h2>Portfolio</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
    </div>

    <!-- Filter Buttons -->
    <div class="row mb-4">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters" class="list-unstyled d-flex gap-3">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
      </div>
    </div>

    <!-- Portfolio Grid (3 per row) -->
    <div class="row gy-4">

      @foreach (range(1, 9) as $i)
      <div class="col-lg-4 col-md-6 portfolio-item">
        <div class="portfolio-wrap shadow-sm">
          <img src="{{ asset('frontend/asset/img/portfolio/portfolio-' . $i . '.jpg') }}" 
               class="img-fluid" 
               alt="Portfolio Image {{ $i }}">

          <div class="portfolio-info text-center">
            <h4>Project {{ $i }}</h4>
            <p>Category</p>
          </div>

          <div class="portfolio-links d-flex justify-content-center gap-3 pb-3">
            <a href="{{ asset('frontend/asset/img/portfolio/portfolio-' . $i . '.jpg') }}" 
               data-gallery="portfolioGallery" 
               class="portfolio-lightbox" 
               title="Project {{ $i }}">
               <i class="bx bx-plus"></i>
            </a>
            <a href="portfolio-details.html" title="More Details">
              <i class="bx bx-link"></i>
            </a>
          </div>
        </div>
      </div>
      @endforeach

    </div>

  </div>
</section>
<!-- End Portfolio Section -->
