<x-userlayout :project="$project"> 
 
      <main>

      <!-- slider-area-start  -->
      <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background=" {{ asset('assets/img/bg/project.webp') }}">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="page__title-wrapper mt-100">                  
                     <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="{{ route('users.home') }}">Home</a></li>
                            <li><span>Project Deatils</span></li>
                        </ul>
                    </div>
                     <h3 class="page__title mt-20">{{ $project->name }}</h3>      
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- slider-area-end -->

      <!-- portfoilo__area start -->
      <div class="portfoilo__area pt-110 pb-30">
   <div class="container">
      <div class="row justify-content-center">

         <div class="col-md-12>

            <div class="portfolio__details mb-50 text-center">

               <h4 class="portfolio__details-title">
                  {{ $project->description }}
               </h4>

               <!-- Project Details Horizontal -->
               <div class="project__meta mb-30 justify-content-center">

                  <div class="project__meta-item">
                     <span>Category</span>
                     <h6>{{ $project->category->name }}</h6>
                  </div>

                  <div class="project__meta-item">
                     <span>Client</span>
                     <h6>Alonso Dicosa</h6>
                  </div>

                  <div class="project__meta-item">
                     <span>Value</span>
                     <h6>$20,000</h6>
                  </div>

               </div>

               <!-- Image -->
               <div class="pt-d-image w-img mb-35">
                  <img src="{{ asset('storage/projects/' . $project->image) }}" alt="{{ $project->image_alt_tag }}" style="width: 940px; height: 500px;">
               </div>

            </div>

         </div>

      </div>
   </div>
</div>
      <!-- portfoilo__area end -->

      
         </div>
      </div>
      <!-- related__services end -->

     </main>

      <!-- footer start -->
   </x-userlayout > 