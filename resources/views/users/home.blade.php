<x-userlayout :services="$services" :about="$about" :contact="$contact"> 
      <main>
         <style>
         /* make all slides same height */
         .services__wrapper .single-services{
            height: 320px;               /* adjust as needed */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 25px;
         }

         /* limit description area */
         .services__wrapper .single-services .services-list{
            overflow: hidden;
            flex: 1;
         }

         /* clamp to fixed lines (optional better look) */
         .services__wrapper .single-services .services-list p{
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;       /* change lines based on height */
            overflow: hidden;
         }

         /* keep button at bottom */
         .services__wrapper .single-services .sr-button{
            margin-top: auto;
         }
         </style>
      <!-- slider-area-start  -->
      <section class="slider-area fix">
         <div class="swiper main-slider swiper-container swiper-container-fade">
            <div class="swiper-wrapper p-relative">
               @foreach ($sliders as $slider)
                  <div class="item-slider sliderm-height p-relative swiper-slide">
                     <div class="slide-bg" data-background="{{ asset('storage/sliders/' . $slider->slider) }}"></div>
                     <div class="container">
                        <div class="row ">
                           <div class="col-lg-12">
                              <div class="slider-contant mt-25">
                                 <span data-animation="fadeInUp" data-delay=".3s">{{ $slider->header }}</span>
                                 <h2 class="slider-title" data-animation="fadeInUp" data-delay=".6s">{!! $slider->slider_label !!}</h2> 
                                 <div class="slider-button" data-animation="fadeInUp" data-delay=".9s">
                                    <a href="{{ route('users.services') }}" class="tp-btn mr-30">Our Services <i class="fal fa-angle-right"></i></a>
                                    <a href="{{ route('users.aboutus') }}" class="tp-btn-2">Learn More</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev ms-button"><i class="fas fa-long-arrow-left"></i></div>
            <div class="swiper-button-next ms-button"><i class="fas fa-long-arrow-right"></i></div>
         </div>
      </section>
      <!-- slider-area-end -->

      <!-- Swiper Dot start -->
      <section class="main-slider-dot">
         <div class="container">
            <div class="swiper main-slider-nav">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="sm-button">
                        <div class="sm-services__icon">
                           <i class="flaticon-industrial-robot"></i>
                        </div>
                        <div class="sm-services__text">
                           <span>Service 01</span>
                           <h4>Industrial Business</h4>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="sm-button">
                        <div class="sm-services__icon">
                           <i class="flaticon-industrial"></i>
                        </div>
                        <div class="sm-services__text">
                              <span>Service 02</span>
                           <h4>Manufacture Factory</h4>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="sm-button">
                        <div class="sm-services__icon">
                           <i class="flaticon-manufacturing"></i>
                        </div>
                        <div class="sm-services__text">
                              <span>Service 03</span>
                           <h4>Scientific Laboratories</h4>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="sm-button">
                        <div class="sm-services__icon">
                           <i class="flaticon-helmet"></i>
                        </div>
                        <div class="sm-services__text">
                              <span>Service 04</span>
                           <h4>Financial Corporates</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Swiper Dot end -->

      <!-- about__area start -->
      <section class="about__area pt-50 pb-50">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-6">
                  <div class="ab-tab-info mb-30">
                     <div class="ab-image w-img">
                        <img src="{{ asset('storage/abouts/'. $about->image) }}" alt="About Image">
                     </div>
                     <div class="absp-text absp-text-1">
                        <i class="flaticon-windmill"></i>
                        <div class="absp-info">
                           <h5><span class="counter">5000</span>+</h5>
                           <span class="absm-title">Projects Done</span>
                        </div>
                     </div>
                     <div class="absp-text absp-text-2">
                        <i class="flaticon-container-1"></i>
                        <div class="absp-info">
                           <h5><span class="counter">3300</span>+</h5>
                           <span class="absm-title">Happy Customer</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="ab-left-content">
                     <div class="section__wrapper mb-30">
                        <h4 class="section__title">{{ $about->welcome ?? '' }}</h4>
                        <div class="r-text">
                           <span>about us</span>
                        </div>
                     </div>
                     <p class="sm-text mb-15">{{ $about->mission ?? '' }}</p>
                     <p class="abd-text">{!! $about->our_journey ?? '' !!}</p>
                     <div class="ab-button mb-10">
                        <a href="{{ route('users.aboutus') }}" class="tp-btn-d">Learn More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about__area end -->

      <!-- services-area start -->
      <section class="services-area grey-bg-5 pt-120 pb-115 fix">
         <div class="container">
            <div class="row">
               <div class="col-xl-6">
                  <div class="ab-left-content">
                     <div class="section__wrapper mb-30">
                        <h4 class="section__title">Don't need to look very far to get a better perspective</h4>
                        <div class="r-text">
                           <span>services</span>
                        </div>
                     </div>
                     <p class="sm-text mb-45">Our mission is to provide quality English language instruction a
                        variety of courses to international and local students in a
                        professional and supportive atmosphere .</p>
                     <div class="ab-button mb-30">
                        <a href="about.html" class="tp-btn-ts">Get In Touch <i class="fal fa-angle-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6">
                  <div class="services__slider swiper-container">
                     <div class="services__wrapper swiper-wrapper">
                        @foreach ($f_services as $fservice)
                           <div class="single-services swiper-slide">
                              <h5>{{ $fservice->name }}</h5>
                              <div class="services-list pb-10">
                                 @php
                                    $desc = Str::words(strip_tags($fservice->description), 20, '...');
                                 @endphp
                                 <p>{{ $desc }}</p>
                              </div>
                              <div class="sr-button">
                                 <a href="{{ route('users.servicedetails', $fservice->slug) }}">Read More</a>
                              </div>
                           </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- services-area end -->

      <!-- sd-banner-area start -->
      <section class="sd-banner-area pb-110">
         <div class="banner__slider swiper-container">
            <div class="banner__wrapper swiper-wrapper">
               @foreach ($projects as $project)
                  <div class="sd-banner__item swiper-slide" data-background="{{ asset('storage/projects/' . $project->image) }}" style="background-size: cover; background-position: center;">
                  <div class="container-0">
                     <div class="row g-0">
                        <div class="col-xl-3 banner-slide-height d-none d-xl-block">
                           <div class="slide-border"></div>
                        </div>
                        <div class="col-xl-3 banner-slide-height">
                           <div class="slide-border"></div>
                           <div class="sd-content">
                              <span class="sd-meta">{{ $project->category->name }}</span>
                              <h5><a href="{{ route('users.projectdetails', $project->slug) }}">{{ $project->name }}</a></h5>
                              <div class="project-info"> 
                                 <a href="{{ route('users.projectdetails', $project->slug) }}"><i class="fal fa-plus"></i></a>
                                 <span><a href="{{ route('users.projectdetails', $project->slug) }}">Project Details</a></span>
                              </div>
                              <div class="sd-bg-icon">
                                 <i class="flaticon-industrial"></i>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 banner-slide-height d-none d-xl-block">
                           <div class="slide-border"></div>
                        </div>
                        <div class="col-xl-3 banner-slide-height d-none d-xl-block">
                           <div class="slide-border"></div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </section> 
      <!-- sd-banner-area end -->

      <!-- brand__area start -->
      <section class="brand__area pb-120">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="brand__title text-center">
                     <span>Happy Sponsor</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="brand__slider swiper-container">
                     <div class="swiper-wrapper">
                        @forelse ($clients as $client)
                           <div class="brand__slider-item swiper-slide">
                              <a href="#"><img src="{{ $client->image ? asset('storage/clients/' . $client->image) : asset('uploads/avatar.png') }}" alt="{{ $client->name }}"></a>
                           </div>
                        @empty
                           
                        @endforelse
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- brand__area end -->

      <!-- feature__area start -->
      <section class="feature__area pb-80">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-6">
                  <div class="feature__left mb-40">
                     <div class="section__wrapper mb-45">
                        <h4 class="section__title">Commercial Ministry to Hike Import Duty on Aluminium</h4>
                        <div class="r-text">
                           <span>features</span>
                        </div>
                     </div>
                     <div class="feature__list">
                        <ul>
                           <li><a href="services-details.html">Banking & finance solutions <i class="fa-light fa-arrow-right-long"></i></a></li>
                           <li><a href="services-details.html">Ecommend resources relevant <i class="fa-light fa-arrow-right-long"></i></a></li>
                           <li><a href="services-details.html">Speed up the wireframing process <i class="fa-light fa-arrow-right-long"></i></a></li>
                           <li><a href="services-details.html">Loved by people across <i class="fa-light fa-arrow-right-long"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="feature__images w-img mb-40">
                     <img src="assets/img/feature/fet-01.jpg" alt="">
                     <div class="vide-button">
                        <a href="https://www.youtube.com/watch?v=o4GuSJYSzrY" class="popup-video"><i class="fa-solid fa-play"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- feature__area end -->

      <!-- testimonial__area start -->
      <section class="testimonial__area grey-bg-5 pt-120 pb-120 fix">
         <div class="testimonial__right-bg">
            <img src="assets/img/testimonial/testimonial-bg-1.jpg" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-6">
                  <div class="section__wrapper mb-45">
                     <h4 class="section__title">Best innovations in the metallurgy today</h4>
                     <div class="r-text">
                        <span>feedback</span>
                     </div>
                  </div>
               </div>
               <div class="col-xl-12">
                  <div class="testimonial__slider swiper-container">
                     <div class="testimonial__wrapper swiper-wrapper">
                        @forelse ($testimonials as $testimonial)
                           <div class="testimonial__item swiper-slide">
                              <p class="review__text">“ {{ $testimonial->message }} ”</p>
                              <div class="review__info mt-30">
                                 <a href="#"><img src="{{ asset('storage/testimonials/' . $testimonial->image) }}" alt="" style="width: 60px; height: 60px; border-radius: 50%;"></a>
                                 <div class="client__content">
                                    <h5 class="client__name"><a href="#">{{ $testimonial->client_name }}</a></h5>
                                    <div class="client__designation"><p>{{ $testimonial->position }}, <a href="#">{{ $testimonial->company }}</a></p></div>
                                 </div>
                              </div>
                           </div>
                        @empty
                            <p>No testimonials available.</p>
                        @endforelse
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- testimonial__area end -->

      <!-- process__area start -->
      <section class="process__area pb-100">
         <div class="container">
            <div class="row">
               <div class="col-xl-6">
                  <div class="process__images">
                     <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                           <div class="image-1 w-img">
                              <img src="assets/img/process/process-1.jpg" alt="">
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                           <div class="image-2 w-img">
                              <img src="assets/img/process/process-2.jpg" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6">
                  <div class="process__right">
                     <div class="section__wrapper mb-55">
                        <h4 class="section__title">Commercial Ministry Hike Import Duty on Aluminium</h4>
                        <div class="r-text">
                           <span>Process</span>
                        </div>
                     </div>
                     <div class="proceess__list">
                        <div class="process__list-item mb-30">
                           <div class="process__list-info">
                              <div class="process__list-icon">
                                 <img src="assets/img/icon/picon-1.png" alt="">
                              </div>
                              <div class="process__list-content">
                                 <span>Process 01</span>
                                 <h5><a href="services-details.html">Discuss About Project</a></h5>
                              </div>
                           </div>
                           <div class="process__list-sp-icon">
                              <a href="services-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                        <div class="process__list-item mb-30">
                           <div class="process__list-info">
                              <div class="process__list-icon">
                                 <img src="assets/img/icon/picon-2.png" alt="">
                              </div>
                              <div class="process__list-content">
                                 <span>Process 02</span>
                                 <h5><a href="services-details.html">Find Easy Solution</a></h5>
                              </div>
                           </div>
                           <div class="process__list-sp-icon">
                             <a href="services-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                        <div class="process__list-item mb-30">
                           <div class="process__list-info">
                              <div class="process__list-icon">
                                 <img src="assets/img/icon/picon-3.png" alt="">
                              </div>
                              <div class="process__list-content">
                                 <span>Process 03</span>
                                 <h5><a href="services-details.html">Troubleshooting</a></h5>
                              </div>
                           </div>
                           <div class="process__list-sp-icon">
                              <a href="services-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- process__area end -->

      

     </main>

      <!-- footer start -->
   </x-userlayout>
