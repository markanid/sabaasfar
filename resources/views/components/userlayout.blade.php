<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      @php
      use Illuminate\Support\Str;
      if (!empty($metadata)) {   
        $isHome                 = request()->routeIs('users.home');
        $isAbout                = request()->routeIs('users.aboutus');
        $isServices             = request()->routeIs('users.services');
        $isServiceDetails       = request()->routeIs('users.servicedetails');
        $isProjects             = request()->routeIs('users.projects');
        $isProjectDetails       = request()->routeIs('users.projectdetails');
        $isContact              = request()->routeIs('users.contactus');
        $firstPart              = Str::of($metadata->title)->before('|')->trim();
        $logoUrl                = asset('storage/meta_datas/' . $metadata->og_image);
        $item = $isServiceDetails && isset($service) ? $service : ($isProjectDetails && isset($project) ? $project : null);
        if ($item) {
          // Determine title
          $title = $item->meta_title ?? 
          ($item->heading ?? 
          ($item->name ?? ''));
          // Determine description
          $description = $item->description ?? 
          ($item->meta_description ?? 
          ($item->heading ?? ''));
          // Determine keywords
          $keyword = $item->keyword ?? '';
          // Determine image path
          $folder          = $isServiceDetails ? 'services' : ($isProjectDetails ? 'projects' : null);
          $imagePath       = $item->image ?? null;
          $pageImage       = $imagePath ? asset("storage/{$folder}/{$imagePath}") : $logoUrl;
          $pageTitle       = trim($firstPart . ' | ' . $title);
          $pageDescription = $description;
          $pageKeyword     = $keyword;
        } else {
          $pageTitle      = $metadata->title;
          $pageDescription= $metadata->desciption; 
          $pageKeyword    = $metadata->keyword; 
          $pageImage      = $logoUrl;
        }
        // Final fallback in case title or description is empty
        $pageTitle      = $pageTitle ?: $metadata->title;
        $pageDescription= $pageDescription ?: $metadata->desciption;
        $pageKeyword    = $pageKeyword ?: $metadata->keyword;
        // Append route-specific title suffix
        if ($isHome) {
          $pageTitle = $firstPart . ' | Home';
        } elseif ($isAbout) {
          $pageTitle = $firstPart . ' | About Us';
        } elseif ($isServices) {
          $pageTitle = $firstPart . ' | Services';
        } elseif ($isProjects) {
          $pageTitle = $firstPart . ' | Projects';
        } elseif ($isContact) {
          $pageTitle = $firstPart . ' | Contact Us';
        }
      } else {
        // Provide sensible defaults in case $metadata is null
        $pageTitle      = 'SABAA ASFAR FOR CONTRACTING Est.';
        $pageDescription= 'Default Description';
        $pageKeyword    = 'Default Keyword';
        $pageImage      = asset('default-image.jpg'); // Replace with a real fallback image path
      }
      @endphp 

      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>{{ $pageTitle }}</title>
      <meta name="description" content="{{ $pageDescription }}">
      <meta name="keywords" content="{{ $pageKeyword }}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="index, follow">
      <link rel="canonical" href="{{ url()->current() }}" />
      <meta property="og:title" content="{{ $pageTitle }}" />
      <meta property="og:description" content="{{ $pageDescription }}" />
      <meta property="og:image" content="{{ $pageImage }}" alt="OG Image" />
      <meta property="og:url" content="{{ url()->current() }}" />
      <meta property="og:type" content="website" />
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
      <!-- CSS here -->
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/backtotop.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
      <style>
         .main-menu ul li a.active {
            color: #24acbd; /* your theme color */
            font-weight: 600;
         }
      </style>
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
      <!-- Preloader -->
      <!-- pre loader area end -->
      <!-- back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->
      <!-- header-area-start -->
      <header id="header-sticky" class="header-area">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                  <div class="logo-area">
                     <div class="logo">
                        <a href="{{ route('users.home') }}"><img src="{{ asset('assets/img/logo/logo-white.png') }}" alt=""></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                  <div class="menu-area menu-padding">
                     <div class="main-menu">
                        <nav id="mobile-menu">
                           <ul>
                              <li><a href="{{ route('users.home') }}" class="{{ request()->routeIs('users.home') ? 'active' : '' }}">Home</a></li>
                              <li><a href="{{ route('users.aboutus') }}" class="{{ request()->routeIs('users.aboutus') ? 'active' : '' }}">About Us</a></li>
                              <li><a href="{{ route('users.services') }}" class="{{ request()->routeIs('users.services') || request()->routeIs('users.servicedetails') ? 'active' : '' }}">Services</a></li>
                              <li><a href="{{ route('users.projects') }}" class="{{ request()->routeIs('users.projects') || request()->routeIs('users.projectdetails') ? 'active' : '' }}">Projects</a></li>
                              <li><a href="{{ route('users.contactus') }}" class="{{ request()->routeIs('users.contactus') ? 'active' : '' }}">Contact</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="side-menu-icon d-lg-none text-end">
                     <a href="javascript:void(0)" class="info-toggle-btn f-right sidebar-toggle-btn"><i class="fal fa-bars"></i></a>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                  <div class="header-info f-right">
                     <div class="info-item info-item-right">
                        <span>Phone Number</span>
                        <h5><a href="tel:{{ $contact->phones[0] ?? '#' }}">{{ $contact->phones[0] ?? '#' }}</a></h5>
                     </div>
                     <div class="info-item">
                        <span>Free Consultancy</span>
                        <h5><a href="mailto:{{ $contact->emails[0] ?? '#' }}">{{ $contact->emails[0] ?? '#' }}</a></h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header-area-end -->
      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
               <i class="fal fa-times"></i>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="sidebar__logo mb-40">
                  <a href="{{ route('users.home') }}">
                  <img src="{{ asset('assets/img/logo/logo-black.png') }}" alt="logo">
                  </a>
               </div>
               <div class="sidebar__search mb-25">
                  <form action="#">
                     <input type="text" placeholder="What are you searching for?">
                     <button type="submit" ><i class="far fa-search"></i></button>
                  </form>
               </div>
               <div class="mobile-menu fix"></div>
               <div class="sidebar__contact mt-30 mb-20">
                  <h4>Contact Info</h4>
                  <ul>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a target="_blank" href="{{ $contact->location ?? '#' }}">{{ $contact->address ?? '#' }}</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a href="tel:{{ $contact->phones[0] ?? '#' }}">{{ $contact->phones[0] ?? '-' }}</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a href="mailto:{{ $contact->emails[0] ?? '#' }}">{{ $contact->emails[0] ?? '-' }}</a>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="sidebar__social">
                  <ul>
                     <li><a href="{{ $contact->facebook ?? '#' }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="{{ $contact->twitter ?? '#' }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="{{ $contact->instagram ?? '#' }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                     <li><a href="{{ $contact->youtube ?? '#' }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                     <li><a href="{{ $contact->linkedin ?? '#' }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->     
      <div class="body-overlay"></div>
      <!-- sidebar area end --> 
      {{ $slot }}
      <footer>
         <div class="footer-area black-bg-2 pt-100 fix">
            <div class="container">
               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-3 col-sm-4">
                     <div class="footer__widget mb-40">
                        <div class="footer__logo">
                           <a href="index.html">
                           <img src="{{ asset('assets/img/logo/footer-logo.png') }} " alt="SABAA ASFAR Logo">
                           </a>
                        </div>
                        <!-- New Paragraph Section -->
                        <div class="footer__text mt-20">
                           <p>
                              SABAA ASFAR For Contracting Est. provides professional 
                              compound and building maintenance services across Saudi Arabia, 
                              ensuring quality, safety, and long-term reliability.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                     <div class="footer__widget mb-40">
                        <h5 class="footer__widget-title">Main Links</h5>
                        <div class="footer__widget-content">
                           <div class="footer__links">
                              <ul>
                                 <li><a href="{{ route('users.home') }}" class="{{ request()->routeIs('users.home') ? 'active' : '' }}">Home</a></li>
                                 <li><a href="{{ route('users.aboutus') }}" class="{{ request()->routeIs('users.aboutus') ? 'active' : '' }}">About Us</a></li>
                                 <li><a href="{{ route('users.services') }}" class="{{ request()->routeIs('users.services') || request()->routeIs('users.servicedetails') ? 'active' : '' }}">Services</a></li>
                                 <li><a href="{{ route('users.projects') }}" class="{{ request()->routeIs('users.projects') || request()->routeIs('users.projectdetails') ? 'active' : '' }}">Projects</a></li>
                                 <li><a href="{{ route('users.contactus') }}" class="{{ request()->routeIs('users.contactus') ? 'active' : '' }}">Contact</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                     <div class="footer__widget mb-40">
                        <h5 class="footer__widget-title">Our Services</h5>
                        <div class="footer__widget-content">
                           <div class="footer__links">
                              <ul>
                                 @foreach ($f_services as $service)
                                    <li><a href="{{ route('users.servicedetails', ['slug' => $service->slug]) }}">{{ $service->name }}</a></li>
                                 @endforeach
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-8 col-sm-8">
                     <div class="footer__widget mb-40">
                        <h5 class="footer__widget-title">Connect with us</h5>
                        <div class="footer__widget-content">
                           <!-- Contact Details -->
                           <div class="footer__contact-info mb-25">
                              <div class="footer__contact-item">
                                 <i class="fas fa-map-marker-alt"></i>
                                 <span>{{ $contact->address ?? '#' }}</span>
                              </div>
                              <div class="footer__contact-item">
                                 <i class="fas fa-envelope"></i>
                                 <span>Email : 
                                 <a href="mailto:{{ $contact->emails[0] ?? 'info@sabaasfar-sa.com' }}">
                                 {{ $contact->emails[0] ?? 'info@sabaasfar-sa.com' }}
                                 </a>
                                 </span>
                              </div>
                              <div class="footer__contact-item">
                                 <i class="fas fa-phone-alt"></i>
                                 <span>Phone : {{ $contact->phones[0] ?? '059 415 4007' }}</span>
                              </div>
                           </div>
                           <!-- Social -->
                           <div class="footer__social">
                              <div class="footer__social-info">
                                 <span>Social Network:</span>
                                 <div class="footer__social-icon">
                                    <a href="{{ $contact->facebook ?? '#' }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ $contact->twitter ?? '#' }}" target="_blank"><i class="fab fa-x-twitter"></i></a>
                                    <a href="{{ $contact->instagram ?? '#' }}" target="_blank"><i class="fab fa-instagram"></i></a> 
                                    <a href="{{ $contact->youtube ?? '#' }}" target="_blank"><i class="fab fa-youtube"></i></a>
                                    <a href="{{ $contact->linkedin ?? '#' }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="footer__copyright white-bg mt-60">
                  <div class="footer__copyright-text" align="center">
                     <p>
                        &COPY; Copyright <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> by <a href="https://sabaasfar-sa.com" class="text-decoration-line-bottom text-dark-gray text-dark-gray-hover fw-500" target="_blank">SABAA ASFAR</a>
                     </p>
                  </div>
               </div>
            </div>
            <div class="footer__shape-1">
               <img src="{{ asset('assets/img/footer/footer-shape-1.png') }}" alt="">
            </div>
            <div class="footer__shape-2">
               <img src="{{ asset('assets/img/footer/footer-shape-2.png') }}" alt="">
            </div>
         </div>
      </footer>
      <!-- footer end -->
      <!-- JS here -->
      <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
      <script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
      <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
      <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
      <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
      <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
      <script src="{{ asset('assets/js/parallax.js') }}"></script>
      <script src="{{ asset('assets/js/backtotop.js') }}"></script>
      <script src="{{ asset('assets/js/nice-select.js') }}"></script>
      <script src="{{ asset('assets/js/counterup.js') }}"></script>
      <script src="{{ asset('assets/js/wow.js') }}"></script>
      <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
      <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
      <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
   </body>
</html>