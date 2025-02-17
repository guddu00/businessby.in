<section class="header-fixed">
     <div class="pb-3 header-top-bg w-100 d-block pb-md-0">
          <div class="container">
               <div class="pb-1 row hdr-menu">
                    <div class="col-md-2 col-sm-2 pl-md-0">
                         <div class="logo">
                             <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                         </div>                             
                    </div>
                    
                    <div class="px-0 col-md-5 col-sm-5 position-relative">
                          <nav class="navbar navbar-expand-md navbar-light sticky-top">
                                 <div id="navcontainer">
                                      <div id="hamburger-wrapper">
                                           <div id="button-wrapper" class="d-flex szelesseg justify-content-left">
                                                 <button class="navbar-toggler" type="button"
                                                     data-toggle="collapse" data-target="#navcollapse" aria-controls="navcollapse"
                                                     aria-expanded="false" aria-label="Toggle Navigation">
                                                     <span class="navbar-toggler-icon"></span>
                                                 </button>
                                           </div>
                                           <div class="collapse navbar-collapse" id="navcollapse">
                                                 <ul class="nav navbar-nav pl-md-3">
                                                     <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                                                     <li class="nav-item"><a class="nav-link" href="{{ url('/buy-business') }}">Buy Business</a></li>
                                                     <li class="nav-item"><a class="nav-link" href="{{ url('/about-us') }}">About Us</a></li>
                                                     <li class="nav-item"><a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a></li>
                                                 </ul>
                                           </div>
                                       </div>
                                 </div>
                          </nav>
                    </div>
                    <div class="pr-0 text-center col-md-5 col-sm-5 pt-md-3">
                          <ul class="pl-0 mb-0 login">
                               <li><a href="{{ route('login') }}"><span>Login</span></a></li>
                               <li><a href="{{ route('register') }}"><dd>Signup</dd></a></li>
                          </ul>
                          <a href="{{ url('/list-your-business') }}" class="lst-busi mr-md-3">List Your Business</a>
                    </div>
               </div>
          </div>
     </div>
   </section>
   