<x-userlayout :about="$about"> 
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
                            <li><span>About Us</span></li>
                        </ul>
                    </div>
                     <h3 class="page__title mt-20">About Company</h3>      
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- slider-area-end -->

      <!-- about__area start -->
      <section class="about__area-2 pt-50 pb-50">
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
                     <p class="sm-text mb-10">{!! $about->glimbse ?? '' !!}</p>
                     <p class="abd-text">{!! $about->our_journey ?? '' !!}</p>
                        
                     
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about__area end -->

      <!-- company__about start -->
      <section class="company__about">
         <div class="row g-0">
            <div class="col-xl-12">
               <div class="company__about-tab">
                  <ul class="nav nav-tabs about-tabs" id="myTab" role="tablist">
                     <li class="nav-item abst-item abst-item" role="presentation">
                        <button class="nav-link abst-item-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">company vision <i class="fa-light fa-arrow-down-long"></i></button>
                     </li>
                     <li class="nav-item abst-item" role="presentation">
                        <button class="nav-link active abst-item-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">company mission  <i class="fa-light fa-arrow-down-long"></i></button>
                     </li>
                     <li class="nav-item abst-item" role="presentation">
                        <button class="nav-link abst-item-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">safety & health <i class="fa-light fa-arrow-down-long"></i></button>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="tab-content company__about-tabs-content" id="myTabContent">
                  <div class="tab-pane fade pt-90 pb-40" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <div class="row justify-content-center">
                        <div class="col-xl-8">
                           <div class="company__sm-about text-center">
                              <span class="animate"><img src="{{ asset('assets/img/about/icon.png') }}" style="height: 190px; width: 190px; margin-top: -33px; margin-left: -38px;"></span>
                              <p>{{ $about->vision ?? '' }}</p>
                           </div>
                        </div>
                     </div>
                     
                  </div>
                  <div class="tab-pane fade show active pt-90 pb-40" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <div class="row justify-content-center">
                        <div class="col-xl-8">
                           <div class="company__sm-about text-center">
                              <span class="animate"><img src="{{ asset('assets/img/about/icon.png') }}" style="height: 190px; width: 190px; margin-top: -33px; margin-left: -38px;"></span>
                              <p>{{ $about->mission ?? '' }}</p>
                           </div>
                        </div>
                     </div>
                     
                  </div>
                  <div class="tab-pane fade pt-90 pb-40" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                     <div class="row justify-content-center">
                        <div class="col-xl-8">
                           <div class="company__sm-about text-center">
                              <span class="animate"><img src="{{ asset('assets/img/about/icon.png') }}" style="height: 190px; width: 190px; margin-top: -33px; margin-left: -38px;"></span>
                              <p>{{ $about->health_safety ?? '' }}</p>
                           </div>
                        </div>
                     </div>
                     
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- company__about end -->

      <!-- team__area start -->
      <section class="team__area pt-50 pb-50">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-12 col-lg-6">
                  <div class="section__wrapper mb-30">
                     <h4 class="section__title">Our Team</h4>
                     <div class="r-text">
                        <span>Team</span>
                     </div>
                  </div>
               </div>
               
            </div>
            <div class="row mt-25">
               @forelse ($teams as $team)
                  <div class="col-xl-3 col-lg-6 col-md-6">
                     <div class="team__item-grid mb-30">
                        <div class="team__item-grid-thumb w-img">
                           <a href="#"><img src="{{ asset('storage/teams/' . $team->image) }}" alt="team-img" class="team-member-img"></a>
                           <div class="team__info">
                              <span>{{ $team->designation ?? '' }}</span>
                              <h5><a href="#">{{ $team->name ?? '' }}</a></h5>
                           </div>
                           <div class="team__social-3">
                                 <a href="{{ $team->facebook ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                                 <a href="{{ $team->twitter ?? '#' }}"><i class="fab fa-twitter"></i></a>
                                 <a href="{{ $team->instagram ?? '#' }}"><i class="fab fa-instagram"></i></a>
                                 <a href="{{ $team->youtube ?? '#' }}"><i class="fab fa-youtube"></i></a>
                                 <a href="{{ $team->linkedin ?? '#' }}"><i class="fab fa-linkedin"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               @empty
                  <p>No team members found.</p>
               @endforelse
            </div>
         </div>
      </section>
      <!-- team__area end -->
     </main>

      <!-- footer start -->
   </x-userlayout> 