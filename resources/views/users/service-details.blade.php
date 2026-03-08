<x-userlayout > 
 
      <main>

      <!-- slider-area-start  -->
      <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="{{ asset('assets/img/bg/page-bg.jpg') }} ">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="page__title-wrapper mt-100">                  
                     <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
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
                        <img src="{{ asset('storage/services/'.$service->image) }}" alt="{{ $service->image_alt_tag }}" style="width: 490px; height: 500px;">
                     </div>
                     <div class="about__image-small about__image-small-2">
                        <img src="{{ asset('storage/services/'.$service->image) }}" alt="{{ $service->image_alt_tag }}" style="width: 360px; height: 360px;">
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
                     <div class="proceess__list pt-30">
                        <div class="process__list-item mb-30">
                           <div class="process__list-info">
                              <div class="process__list-icon">
                                 <i class="flaticon-pencil"></i>
                              </div>
                              <div class="process__list-content">
                                 <h5 class="process__list-item-title">Looking For A First Class For Business <br> Plan Consultant?</h5>
                              </div>
                           </div>
                           <div class="process__list-sp-icon">
                              <a href="services-details.html"><i class="fa-light fa-arrow-right-long"></i></a>
                           </div>
                        </div>
                     </div>
                     <p class="process__text">We help our clients succeed by creating brand clients identities,  digital IT and experiences IT and print materials.</p>
                     <div class="about__button mt-35">
                        <a href="about.html" class="tp-touch-btn">Learn More <i class="fa-light fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about__area end -->

      <!-- sm-services__area start -->
      <div class="sm-services__area grey-bg-5 pt-120 pb-190">
         <div class="container">
            <div class="sm-services__lists-2">
               <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="sm-services__item mb-30">
                        <div class="flip-card">
                           <div class="flip-card-inner flip-card-inner-2">
                           <div class="flip-card-front flip-card-front-2">
                                 <div class="flip-card-icon flip-card-icon-2 mb-20">
                                    <i class="flaticon-container-1"></i>
                                 </div>
                                 <h5 class="flip-card-title flip-card-title-2">Industry Tool #01</h5>
                                 <div class="flip-card-omore">
                                    <p>We work to understand your issues and are driven</p>
                                 </div>
                           </div>
                           <div class="flip-card-back flip-card-back-2">
                                 <div class="flip-card-icon mb-20">
                                    <i class="flaticon-container-1"></i>
                                 </div>
                                 <h5 class="flip-card-title"><a href="services-details.html">Industry Tool #01</a></h5>
                                 <div class="flip-card-omore">
                                    <p>We work to understand your issues and are driven</p>
                                 </div>
                           </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="sm-services__item mb-30">
                        <div class="flip-card">
                           <div class="flip-card-inner flip-card-inner-2">
                           <div class="flip-card-front flip-card-front-2">
                                 <div class="flip-card-icon flip-card-icon-2 mb-20">
                                    <i class="flaticon-lever"></i>
                                 </div>
                                 <h5 class="flip-card-title flip-card-title-2">Industry Tool #02</h5>
                                 <div class="flip-card-omore">
                                    <p>We work to understand your issues and are driven</p>
                                 </div>
                           </div>
                           <div class="flip-card-back flip-card-back-2">
                                 <div class="flip-card-icon mb-20">
                                    <i class="flaticon-lever"></i>
                                 </div>
                                 <h5 class="flip-card-title"><a href="services-details.html">Industry Tool #02</a></h5>
                                 <div class="flip-card-omore">
                                    <p>We work to understand your issues and are driven</p>
                                 </div>
                           </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="sm-services__item mb-30">
                        <div class="flip-card">
                           <div class="flip-card-inner flip-card-inner-2">
                           <div class="flip-card-front flip-card-front-2">
                                 <div class="flip-card-icon flip-card-icon-2 mb-20">
                                    <i class="flaticon-pumpjack"></i>
                                 </div>
                                 <h5 class="flip-card-title flip-card-title-2">Industry Tool #03</h5>
                                 <div class="flip-card-omore">
                                    <p>We work to understand your issues and are driven</p>
                                 </div>
                           </div>
                           <div class="flip-card-back flip-card-back-2">
                                 <div class="flip-card-icon mb-20">
                                    <i class="flaticon-pumpjack"></i>
                                 </div>
                                 <h5 class="flip-card-title"><a href="services-details.html">Industry Tool #03</a></h5>
                                 <div class="flip-card-omore">
                                    <p>We work to understand your issues and are driven</p>
                                 </div>
                           </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="sm-services__item mb-30">
                        <div class="flip-card">
                           <div class="flip-card-inner flip-card-inner-2">
                           <div class="flip-card-front flip-card-front-2">
                                 <div class="flip-card-icon flip-card-icon-2 mb-20">
                                    <i class="flaticon-conveyor-belt"></i>
                                 </div>
                                 <h5 class="flip-card-title flip-card-title-2">Industry Tool #04</h5>
                                 <div class="flip-card-omore">
                                    <p>We work to understand your issues and are driven</p>
                                 </div>
                           </div>
                           <div class="flip-card-back flip-card-back-2">
                                 <div class="flip-card-icon mb-20">
                                    <i class="flaticon-conveyor-belt"></i>
                                 </div>
                                 <h5 class="flip-card-title"><a href="services-details.html">Industry Tool #04</a></h5>
                                 <div class="flip-card-omore">
                                    <p>We work to understand your issues and are driven</p>
                                 </div>
                           </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- sm-services__area end -->

      <!-- testimonial__area start -->
      <div class="testimonial__area">
         <div class="container">
            <div class="testimonial__slider-3 swiper-container white-bg pt-100 pb-110">
               <div class="swiper-wrapper">
                  <div class="swiper-slide testimonial__slider-3-item">
                     <div class="testimonial__item-box text-center">
                        <div class="testimonail__quote-img mb-30">
                           <img src="{{ asset('assets/img/testimonial/quote-img-4.png') }}" alt="">
                        </div>
                        <p class="quote__text mb-30">“ The completely synergize resource taxing
                           relationships via premier niche markets.
                           Professionally cultivate one-to-one customer
                           service with robust ideas. ”</p>
                        <div class="author__info">
                           <div class="author__image">
                              <a href="#"><img src="{{ asset('assets/img/author/author-7.jpg') }}" alt="author"></a>
                           </div>
                           <div class="author__content">
                              <h5>Miranda H. Halim</h5>
                              <span>Head of Idea</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide testimonial__slider-3-item">
                     <div class="testimonial__item-box text-center">
                        <div class="testimonail__quote-img mb-30">
                           <img src="{{ asset('assets/img/testimonial/quote-img-4.png') }}" alt="">
                        </div>
                        <p class="quote__text mb-30">“ Professionally cultivate one-to-one customer service with robust ideas. The completely synergize resource taxing relati in the patnership uou join
                            via premier niche markets.”</p>
                        <div class="author__info">
                           <div class="author__image">
                              <a href="#"><img src="{{ asset('assets/img/author/author-6.jpg') }}" alt="author"></a>
                           </div>
                           <div class="author__content">
                              <h5>Iqbal Hossain</h5>
                              <span>Head of Idea</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide testimonial__slider-3-item">
                     <div class="testimonial__item-box text-center">
                        <div class="testimonail__quote-img mb-30">
                           <img src="{{ asset('assets/img/testimonial/quote-img-4.png') }}" alt="">
                        </div>
                        <p class="quote__text mb-30">“ The completely synergize resource taxing
                           relationships via premier niche markets.
                           Professionally cultivate one-to-one customer
                           service with robust ideas. ”</p>
                        <div class="author__info">
                           <div class="author__image">
                              <a href="#"><img src="{{ asset('assets/img/author/author-5.jpg') }}" alt="author"></a>
                           </div>
                           <div class="author__content">
                              <h5>Nico Robin</h5>
                              <span>Head of Idea</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- testimonial__area end -->

      <!-- services__description start -->
      <div class="services__description mb-40">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <p class="ser__text">A recognizable and loved brand is one of the most valuable assets a company owns. In fact, 59% of customers prefer to buy products from brands they know. How do you become a sought-after brand with endless sales and raving fans? By identifying your promise to a customer or client. The challenge is communicating a clear and cohesive message. Also known as an IT managed services provider, an IT support company is comprised of professional IT specialists who make up the company's core IT team. The team provides your. business with expert guidance and management for a variety of information technology needs. <br></p>
                  <p class="ser__text"><a href="#">Industry</a> team is a diverse network of consultants and industry professionals with a global mindset and a collaborative culture. We work to understand your issues and are driven to ask better questions in the pursuit.</p>
               </div>
            </div>
         </div>
      </div>
      <!-- services__description end -->

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