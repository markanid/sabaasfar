<x-userlayout :services="$services"> 
 
      <main>
         
      <!-- slider-area-start  -->
      <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="{{ asset('assets/img/bg/page-bg.jpg')}}">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="page__title-wrapper mt-100">                  
                     <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="{{ route('users.home') }}">Home</a></li>
                            <li><span>Services</span></li>
                        </ul>
                    </div>
                     <h3 class="page__title mt-20">What we do</h3>      
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- slider-area-end -->

      <!-- services__area start -->
      <section class="services__area-2 pt-90 pb-80">
         <div class="container">
            <div class="row mt-30">
               @foreach ($services as $service)
                  <div class="col-xl-3 col-lg-3 col-md-6">
                     <div class="services__item services__item-grid text-center mb-40">
                        <div class="services__item-content">
                           <div class="ser__icon mb-30">
                              <img src="{{ asset('storage/services/' . $service->image) }}" alt="{{ $service->image_alt_tag }}">
                           </div>
                           <h5 class="ser__title mb-10"><a href="{{ route('users.servicedetails', ['slug' => $service->slug]) }}">{{ $service->name }}</a></h5>
                           <p>{{ Str::words(strip_tags($service->description), 20, '...') }}</p>
                           <div class="ser__more-option mt-15">
                              <a href="{{ route('users.servicedetails', ['slug' => $service->slug]) }}">Service Details <i class="fal fa-long-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>
         </div>
      </section>
      <!-- services__area end -->

      

     </main>

      <!-- footer start -->
   </x-userlayout> 