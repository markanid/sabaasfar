<x-userlayout> 

 
      <main>

      <!-- slider-area-start  -->
      <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="{{ asset('assets/img/bg/page-bg.jpg') }}">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="page__title-wrapper mt-100">                  
                     <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="{{ route('users.home') }}">Home</a></li>
                            <li><span>Projects</span></li>
                        </ul>
                    </div>
                     <h3 class="page__title mt-20">Projects</h3>      
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- slider-area-end -->

      <!-- portfolio-area start -->
      <section class="portfolio-area pt-110 pb-110">
         <div class="container">
             <div class="row">
                 <!-- START PORTFOLIO FILTER AREA -->
                 <div class="col-12">
                     <div class="text-center">
                         <div class="portfolio-filter mb-40">
                             <button class="active" data-filter="*">All Works</button>
                              @foreach ($categories as $cat)
                                 <button data-filter=".cat-{{ Str::slug($cat->name) }}">
                                       {{ $cat->name }}
                                 </button>
                              @endforeach
                         </div>
                     </div>
                 </div>
                 <!-- END PORTFOLIO FILTER AREA -->
             </div>
             <div id="portfolio-grid" class="row grid">
               @foreach ($projects as $project)
                  @php
                        $catClass = $project->category ? 'cat-'.Str::slug($project->category->name) : 'cat-uncategorized';
                  @endphp
                  <div class="col-lg-4 col-md-6 grid-item {{ $catClass }}">
                     <div class="portfolio-item mb-30">
                        <div class="portfolio-wrapper">
                           <div class="portfolio-image w-img">
                              <img src="{{ asset('storage/projects/' . $project->image) }}"
                             alt="{{ $project->image_alt ?? $project->name }}" style="width: 410px; height: 500px; object-fit: cover;">
                           </div>
                           <div class="portfolio-caption">
                              <p>{{ $project->category->name ?? 'Uncategorized' }}</p>
                              <h6><a href="{{ route('users.projectdetails', $project->slug) }}">
                                 {{ Str::words(strip_tags($project->description), 20, '...') }}</a></h6>
                           </div>
                           <div class="portfolio-caption-top">
                              <p><a href="{{ route('users.projectdetails', $project->slug) }}">{{ $project->category->name ?? 'Uncategorized' }}</a></p>
                              <h6><a href="{{ route('users.projectdetails', $project->slug) }}">{{ Str::words(strip_tags($project->description), 20, '...') }}</a></h6>
                           </div>
                           <div class="portfolio-caption-bottom">
                              <a href="{{ route('users.projectdetails', $project->slug) }}"><i class="fa-light fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>
            <div class="more-pt-button text-center mt-10">
               <a href="portfolio.html" class="tp-btn">Load More <i class="fa-light fa-plus"></i></a>
            </div>
         </div>
     </section>
     <!-- portfolio-area end -->

     </main>

      <!-- footer start -->
   </x-userlayout> 