<x-userlayout :services="$services"> 
 
      <main>
         <style>
         /* Make grid cards equal height */
         .services__item-grid{
            height: 360px;                /* adjust as needed */
            display: flex;
            flex-direction: column;
         }

         /* Make content fill and keep bottom link aligned */
         .services__item-grid .services__item-content{
            height: 100%;
            display: flex;
            flex-direction: column;
         }

         /* Keep description area controlled */
         .services__item-grid p{
            flex: 1;                      /* takes remaining space */
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;        /* number of lines */
         }

         /* Always keep button at bottom */
         .services__item-grid .ser__more-option{
            margin-top: auto;
         }
         /* Center and size icons */
         .services__item-grid .ser__icon{
            width: 100%;
            height: 120px;      /* adjust if needed */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
         }

         .services__item-grid .ser__icon img{
            width: 150px;        /* icon size */
            height: 150px;
            object-fit: contain;
         }
         </style>
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