<x-userlayout :service="$service"> 
 
      <main>

      <!-- slider-area-start  -->
      <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="{{ asset('assets/img/bg/services.webp') }} ">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="page__title-wrapper mt-100">                  
                     <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="{{ route('users.home') }}">Home</a></li>
                            <li><span>Details</span></li>
                        </ul>
                    </div>
                     <h3 class="page__title mt-20">Services Details</h3>      
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- slider-area-end -->

      <!-- about__area start -->
      <section class="about__area pt-120 pb-155">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6">
                  <div class="about__image about__image-2">
                     <div class="about__image-big">
                        <img src="{{ asset('storage/services/'.$service->image) }}" alt="{{ $service->image_alt_tag }}" style="width: 600px; height: 450px;">
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="about__right-2">
                     <div class="about__info pb-20">
                        <div class="section-2__wrapper mb-30">
                           <h5 class="section__title-sm">{{ $service->name}}</h5>
                        </div>
                        <p>{{ $service->description }}</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about__area end -->

      <!-- sm__nevigation start -->
      <div class="sm__nevigation mb-120">
         <div class="container">
            <div class="nav__sm-area grey-bg-5 pt-20">
               <div class="row align-items-center">
                  <div class="col-xl-5 col-lg-5 col-md-5">
                     @if($previous)
                        <div class="nevigation__info mb-20 pl-30">
                           <img src="{{ asset('storage/services/'.$previous->image) }}" alt="{{ $previous->image_alt_tag }}" class="img-fluid" style="width: 50px; height: 50px;">
                           <div class="nevigation__content">
                              <h6 class="nevigation__title"><a href="{{ route('users.servicedetails', $previous->slug) }}">{{ $previous->name }}</a></h6>
                              <p><a href="{{ route('users.servicedetails', $previous->slug) }}">Prev Service</a></p>
                           </div>
                        </div>
                     @endif
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-2">
                     <div class="nevigation__icon text-center mb-20"><a href="{{ route('users.services') }}"><i class="fas fa-th"></i></a></div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-5">
                     @if($next)
                        <div class="nevigation__info nevigation__info-2 mb-20 pr-30">
                           <div class="nevigation__content">
                              <h6 class="nevigation__title"><a href="{{ route('users.servicedetails', $next->slug) }}">{{ $next->name }}</a></h6>
                              <p><a href="{{ route('users.servicedetails', $next->slug) }}">Next  Service</a></p>
                           </div>
                           <img src="{{ asset('storage/services/'.$next->image) }}" alt="{{ $next->image_alt_tag }}" class="img-fluid" style="width: 50px; height: 50px;">
                        </div>
                     @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- sm__nevigation end -->

     </main>

      <!-- footer start -->
   </x-userlayout> 