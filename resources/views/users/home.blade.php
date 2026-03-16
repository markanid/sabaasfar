<x-userlayout :services="$services" :about="$about" :contact="$contact"> 
      <main>

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
                                 <h2 class="slider-title" data-animation="fadeInUp" data-delay=".9s">{{ $slider->header }}</h2> 
                                 <span data-animation="fadeInUp" data-delay=".8s">{{ $slider->description }}</span>
                                 {{-- <div class="slider-button" data-animation="fadeInUp" data-delay=".9s">
                                    <a href="{{ route('users.services') }}" class="tp-btn mr-30">Our Services <i class="fal fa-angle-right"></i></a>
                                    <a href="{{ route('users.aboutus') }}" class="tp-btn-2">Learn More</a>
                                 </div> --}}
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
                           <h4>Experienced Workforce</h4>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="sm-button">
                        <div class="sm-services__icon">
                           <i class="flaticon-industrial"></i>
                        </div>
                        <div class="sm-services__text">
                           <h4>Quality & Safety Standards</h4>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="sm-button">
                        <div class="sm-services__icon">
                           <i class="flaticon-manufacturing"></i>
                        </div>
                        <div class="sm-services__text">
                           <h4>Reliable Project Delivery</h4>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="sm-button">
                        <div class="sm-services__icon">
                           <i class="flaticon-helmet"></i>
                        </div>
                        <div class="sm-services__text">
                           <h4>Modern Equipment & Technology</h4>
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
                     <p class="sm-text mb-15">{{ $about->glimbse ?? '' }}</p>
                     <p class="abd-text">{!! $about->our_journey ?? '' !!}</p>
                     <div class="ab-button mb-10">
                        <a href="{{ route('users.aboutus') }}" class="tp-btn-d">More Details</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about__area end -->

      <!-- services-area start -->
      <section class="services-area grey-bg-5 pt-50 pb-20 fix">
         <div class="container">
            <div class="row">
               <div class="col-xl-6">
                  <div class="ab-left-content">
                     <div class="section__wrapper mb-30">
                        <h4 class="section__title">Delivering Reliable Contracting & Industrial Solutions</h4>
                        <div class="r-text">
                           <span>services</span>
                        </div>
                     </div>
                     <p class="sm-text mb-45">We provide reliable contracting, industrial, and maintenance services across Saudi Arabia with a focus on quality, safety, and efficiency.</p>
                     <div class="ab-button mb-30">
                        <a href="{{ route('users.services') }}" class="tp-btn-d">More Services <i class="fal fa-angle-right"></i></a>
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
                     <span>Happy Clients</span>
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
                        <h4 class="section__title">Your Trusted Partner in Contracting Solutions</h4>
                        <div class="r-text" style="margin-left: -10px;">
                           <span>Specialities</span>
                        </div>
                     </div>
                     <div class="feature__list">
                        <ul>
                           <li><a href="#">Industry Expertise</a></li>
                           <li><a href="#">Customized Project Solutions</a></li>
                           <li><a href="#">Strong Resource Network</a></li>
                           <li><a href="#">Client-Focused Approach</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="feature__images w-img mb-40">
                     <img src="assets/img/feature/why.webp" alt="Construction engineers discussing project plans at site in Saudi Arabia">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- feature__area end -->

      <!-- testimonial__area start -->
      <section class="testimonial__area grey-bg-5 pt-120 pb-120 fix">
         <div class="testimonial__right-bg">
            <img src="{{ asset('assets/img/testimonial/testimonial-bg-1.jpg') }}" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-6">
                  <div class="section__wrapper mb-45">
                     <h4 class="section__title">What Our Clients Say</h4>
                     <div class="r-text" style="margin-left: -10px;">
                        <span>Testimonials</span>
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
                              <img src="{{ asset('assets/img/process/process1.webp') }}" alt="Construction planning tools and blueprints representing project planning process">
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                           <div class="image-2 w-img">
                              <img src="{{ asset('assets/img/process/process-2.jpg') }}" alt="Engineering tools and project checklist representing construction workflow process">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6">
                  <div class="process__right">
                     <div class="section__wrapper mb-55">
                        <h4 class="section__title">Our Simple Process For Successful Project Delivery</h4>
                        <div class="r-text">
                           <span>Process</span>
                        </div>
                     </div>
                     <div class="proceess__list">
                        <div class="process__list-item mb-30">
                           <div class="process__list-info">
                              <div class="process__list-icon">
                                 <img src="{{ asset('assets/img/icon/picon-1.png') }}" alt="Project consultation icon representing project analysis and requirement discussion">
                              </div>
                              <div class="process__list-content">
                                 <h5><a href="#">Project Consultation</a></h5>
                                 <span>We discuss your project requirements, objectives, and expectations to understand the scope and deliver the best possible solution.</span>
                              </div>
                           </div>
                        </div>
                        <div class="process__list-item mb-30">
                           <div class="process__list-info">
                              <div class="process__list-icon">
                                 <img src="{{ asset('assets/img/icon/picon-2.png') }}" alt="Project planning icon representing project design and development">
                              </div>
                              <div class="process__list-content">
                                 <h5><a href="#">Planning & Execution</a></h5>
                                 <span>Our team prepares detailed plans, allocates resources, and executes the project efficiently while maintaining safety and quality.</span>
                              </div>
                           </div>
                        </div>
                        <div class="process__list-item mb-30">
                           <div class="process__list-info">
                              <div class="process__list-icon">
                                 <img src="{{ asset('assets/img/icon/picon-3.png') }}" alt="Quality inspection icon representing project monitoring and final delivery process">
                              </div>
                              <div class="process__list-content">
                                 <h5><a href="#">Quality Inspection & Delivery</a></h5>
                                 <span>We perform thorough inspections to ensure quality standards are met before successfully delivering the completed project.</span>
                              </div>
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
