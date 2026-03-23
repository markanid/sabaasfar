<x-userlayout :contact="$contact"> 

 
      <main>

      <!-- slider-area-start  -->
      <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="{{ asset('assets/img/bg/conatct.webp') }}">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="page__title-wrapper mt-100">                  
                     <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="{{ route('users.home') }}">Home</a></li>
                            <li><span>Contact</span></li>
                        </ul>
                    </div>
                     <h3 class="page__title mt-20">Get In Touch</h3>      
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- slider-area-end -->

      <!-- contact__area start -->
      <section class="contact__area pt-120 pb-80" data-background="{{ asset('assets/img/bg/contact-bg.png') }}">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="contact__item text-center mb-30">
                     <div class="contact__icon mb-35">
                        <i class="fal fa-envelope-open-text"></i>
                     </div>
                     <h5 class="contact__title mb-25">Email Address</h5>
                     <div class="contact__text">
                        @if(!empty($contact->emails) && is_array($contact->emails))
                        @php
                           $firstEmail = $contact->emails[0] ?? null;
                        @endphp
                           @foreach($contact->emails as $email)
                              @if(!empty($email))
                                 <p><a href="mailto:{{ $email }}">{{ $email }}</a></p>
                              @endif
                           @endforeach
                        @else
                           <label>-</label>
                        @endif
                     </div>
                     <div class="contact__button mt-30">
                        <a href="mailto:{{ $firstEmail }}" class="tp-btn-d">Email Us <i class="fa-light fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="contact__item text-center mb-30">
                     <div class="contact__icon mb-35">
                        <i class="fa-light fa-phone"></i>
                     </div>
                     <h5 class="contact__title mb-25">Phone Number</h5>
                     <div class="contact__text">
                        @if(!empty($contact->phones) && is_array($contact->phones))
                        @php
                           $firstPhone = $contact->phones[0] ?? null;
                        @endphp
                           @foreach($contact->phones as $phone)
                              @if(!empty($phone))
                                 <p><a href="tel:{{ $phone }}">{{ $phone }}</a></p>
                              @endif
                           @endforeach
                        @else
                           <label>-</label>
                        @endif
                     </div>
                     <div class="contact__button mt-30">
                        <a href="tel:{{ $firstPhone }}" class="tp-btn-d">Call Us <i class="fa-light fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="contact__item text-center mb-30">
                     <div class="contact__icon mb-35">
                        <i class="fa-light fa-map-location-dot"></i>
                     </div>
                     <h5 class="contact__title mb-25">Office Address</h5>
                     <div class="contact__text">
                        <p><a href="{{ $contact->location }}" target="blank">{{ $contact->address }}</a></p>
                     </div>
                     <div class="contact__button mt-30">
                        <a href="{{ $contact->location }}" target="blank" class="tp-btn-d">Direction <i class="fa-light fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="contact__item text-center mb-30">
                     <div class="contact__icon mb-35">
                        <i class="fa-light fa-bullseye-arrow"></i>
                     </div>
                     <h5 class="contact__title mb-25">Social Connect</h5>
                     <div class="contact__social mt-30">
                        <a href="{{ $contact->facebook ?? '#' }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="{{ $contact->twitter ?? '#' }}" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        <a href="{{ $contact->instagram ?? '#' }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="{{ $contact->youtube ?? '#' }}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact__area end -->

      <!-- contact__area-2 start -->
      <section class="contact__area-2">
         <div class="container">
            <div class="contact__form">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="section__wrapper mb-45">
                           <h4 class="section__title">We can take your business to the next level.</h4>
                           <div class="r-text">
                              <span>contact</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-12">
                        <div class="ajax-response mb-3"></div> 
                        <form id="contact-form" action="{{ route('send.email') }}" method="POST">
                           @csrf
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="contact-filed mb-20">
                                    <input type="text" name="name" placeholder="Enter your name here">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="contact-filed contact-icon-mail mb-20">
                                    <input email="text" name="email" placeholder="Enter email address here">
                                </div>
                              </div>
                           </div>
                           <div class="contact-filed contact-icon-message mb-25">
                              <textarea placeholder="Enter message here" name="message"></textarea>
                          </div>
                          <div class="contact__form-agree  d-flex align-items-center mb-20">
                              <input name="checkbox" class="e-check-input" type="checkbox" id="e-agree">
                              <label class="e-check-label" for="e-agree">I agree to the<a href="contact.html">Terms &amp; Conditions</a></label>
                           </div>
                           <div class="form-submit text-center">
                               <button class="tp-btn-d" type="submit">Submit Request</button>
                           </div>
                       </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact__area-2 end -->

      <!-- contact__map start -->
      <section class="contact__map">
         <div class="contact__map-wrap">
             <iframe id="gmap_canvas" src="{{ $contact->location ?? '#' }}"></iframe>
             <div class="contact__map-icon">
                  <i class="fa-solid fa-location-dot"></i>
                  <img src="{{ asset('assets/img/bg/contact-icon-bg.png') }}" alt="">
             </div>
         </div>
      </section>
      <!-- contact__map end -->

     </main>

      <!-- footer start -->
   </x-userlayout> 
   <script>
   $(document).ready(function(){

      $('#contact-form').off('submit').on('submit', function(e){
         e.preventDefault();

         let form = $(this);
         let submitBtn = form.find('button[type="submit"]');
         let url = form.attr('action');

         // disable button
         submitBtn.prop('disabled', true);

         $('.ajax-response').html('');

         $.ajax({
               type: "POST",
               url: url,
               data: form.serialize(),
               dataType: "json",
               success: function(response){
                  if(response.success){
                     $('.ajax-response').html('<div class="alert alert-success">'+response.success+'</div>');
                     form.trigger('reset');
                  } else if(response.error){
                     $('.ajax-response').html('<div class="alert alert-danger">'+response.error+'</div>');
                  }
               },
               error: function(xhr){
                  let errMsg = '⚠ Something went wrong. Please try again.';
                  if(xhr.status === 422){
                     errMsg = '';
                     $.each(xhr.responseJSON.errors, function(key, value){
                           errMsg += '<p>' + value[0] + '</p>';
                     });
                  } else if(xhr.responseJSON && xhr.responseJSON.error){
                     errMsg = xhr.responseJSON.error;
                  }
                  $('.ajax-response').html('<div class="alert alert-danger">' + errMsg + '</div>');
               },
               complete: function(){
                  submitBtn.prop('disabled', false);
               }
         });

      });

   });
   </script>