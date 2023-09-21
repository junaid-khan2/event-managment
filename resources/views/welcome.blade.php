@extends('layout.app')
@section('content')
<main class="page-content">
        <section class="section-md-110 section-60 text-md-left">
          <div class="shell">
            <div class="range">
              <div class="cell-sm-6 cell-md-3">
                <!-- CountTo-->
                <div data-from="0" data-to="312" class="counter"></div>
                <p class="counter-title text-gray">weddings <br class="veil reveal-md-block">planned</p>
                <hr class="divider divider-md-left">
              </div>
              <div class="cell-sm-6 cell-md-3 offset-top-45 offset-sm-top-0">
                <!-- CountTo-->
                <div data-from="0" data-to="17" class="counter"></div>
                <p class="counter-title text-gray">staff <br class="veil reveal-md-block">members</p>
                <hr class="divider divider-md-left">
              </div>
              <div class="cell-sm-6 cell-md-3 offset-top-45 offset-md-top-0">
                <!-- CountTo-->
                <div data-from="0" data-to="6" class="counter"></div>
                <p class="counter-title text-gray">years <br class="veil reveal-md-block">of experience</p>
                <hr class="divider divider-md-left">
              </div>
              <div class="cell-sm-6 cell-md-3 offset-top-45 offset-md-top-0">
                <!-- CountTo-->
                <div data-from="0" data-to="58237" class="counter"></div>
                <p class="counter-title text-gray">clients <br class="veil reveal-md-block">served</p>
                <hr class="divider divider-md-left">
              </div>
            </div>
          </div>
        </section>
        <section class="bg-wood section-60 section-lg-110">
          <div class="shell">
            <h2>Services</h2>
            <div class="range list-index">
              <div class="cell-sm-6 thumbnail-hover">
                <div class="range">
                  <div class="cell-md-6">
                    <div class="thumbnail"><img src="{{asset('assets/images/index-02.jpg')}}" width="270" height="270" alt="" class="img-responsive">
                      <div class="caption"><a href="#" class="link link-white">more info</a></div>
                    </div>
                  </div>
                  <div class="cell-md-7 cell-lg-6 cell-md-grab-left-2 text-md-right offset-top-10 offset-md-top-0 z-index-2 no-select">
                    <div class="inset-lg-right-32">
                      <h4 class="text-md-nowrap"><span class="list-index-counter">01</span>Wedding Makeup</h4>
                      <hr class="veil reveal-md-block divider divider-md-right">
                    </div>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 thumbnail-hover offset-top-60 offset-sm-top-0 offset-md-top-60">
                <div class="range">
                  <div class="cell-md-6">
                    <div class="thumbnail"><img src="{{asset('assets/images/index-03.jpg')}}" width="270" height="270" alt="" class="img-responsive">
                      <div class="caption"><a href="#" class="link link-white">more info</a></div>
                    </div>
                  </div>
                  <div class="cell-md-6 text-md-left offset-top-10 offset-md-top-0 z-index-2 no-select">
                    <h4 class="text-md-nowrap"><span class="list-index-counter">02</span>Decoration</h4>
                    <hr class="veil reveal-md-block divider divider-md-left">
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 offset-top-60 offset-md-top-72 thumbnail-hover">
                <div class="range">
                  <div class="cell-md-6 cell-md-push-1 cell-md-grab-left-2">
                    <div class="thumbnail"><img src="{{asset('assets/images/index-04.jpg')}}" width="270" height="270" alt="" class="img-responsive">
                      <div class="caption"><a href="#" class="link link-white">more info</a></div>
                    </div>
                  </div>
                  <div class="cell-md-6 text-md-left z-index-2 no-select offset-top-10 offset-md-top-0">
                    <h4 class="text-md-nowrap"><span class="list-index-counter">03</span>Transportation</h4>
                    <hr class="veil reveal-md-block divider divider-md-left">
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 offset-top-60 offset-md-top-132 thumbnail-hover">
                <div class="range">
                  <div class="cell-md-6 cell-md-push-1 cell-md-grab-left-2">
                    <div class="thumbnail"><img src="{{asset('assets/images/index-05.jpg')}}" width="270" height="270" alt="" class="img-responsive">
                      <div class="caption"><a href="#" class="link link-white">more info</a></div>
                    </div>
                  </div>
                  <div class="cell-md-middle cell-md-6 text-md-left z-index-2 no-select offset-top-10 offset-md-top-0">
                    <h4 class="text-md-nowrap"><span class="list-index-counter">04</span>Themed Weddings</h4>
                    <hr class="veil reveal-md-block divider divider-md-left">
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 thumbnail-hover offset-top-60 offset-md-top-72">
                <div class="range">
                  <div class="cell-md-preffix-1 cell-lg-preffix-2 cell-md-6 reveal-md-flex">
                    <div class="thumbnail"><img src="{{asset('assets/images/index-06.jpg')}}" width="270" height="270" alt="" class="img-responsive">
                      <div class="caption"><a href="#" class="link link-white">more info</a></div>
                    </div>
                  </div>
                  <div class="cell-md-bottom cell-md-7 cell-lg-6 cell-md-grab-left-2 text-md-right offset-top-10 offset-md-top-0 z-index-2 no-select">
                    <div class="offset-md-bottom-14">
                      <h4 class="text-md-nowrap"><span class="list-index-counter">05</span>Wedding Catering</h4>
                      <hr class="veil reveal-md-block divider divider-md-right">
                    </div>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 thumbnail-hover offset-top-60 offset-md-top-132">
                <div class="range">
                  <div class="cell-md-6 cell-md-preffix-1 cell-lg-preffix-2">
                    <div class="thumbnail"><img src="{{asset('assets/images/index-07.jpg')}}" width="270" height="270" alt="" class="img-responsive">
                      <div class="caption"><a href="#" class="link link-white">more info</a></div>
                    </div>
                  </div>
                  <div class="cell-md-4 text-md-left offset-top-10 offset-md-top-0 z-index-2 no-select">
                    <h4 class="text-md-nowrap"><span class="list-index-counter">06</span>Live Music</h4>
                    <hr class="veil reveal-md-block divider divider-md-left">
                  </div>
                </div>
              </div>
            </div><a href="services.html" class="offset-top-30 offset-md-top-60 link">view all services</a>
          </div>
        </section>
        <!-- RD Parallax-->
        <section class="rd-parallax context-dark">
          <div data-speed="0.3" data-type="media" data-url="{{asset('assets/images/index-08.jpg')}}" class="rd-parallax-layer"></div>
          <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="shell section-md-110 section-60">
              <div class="range range-xs-center">
                <div class="cell-md-10 cell-lg-8 relative text-sm-left">
                  <div class="border-block border-block-variant-1"><span class="decor"></span>
                    <h2 class="text-ubold">Save time and money <br class="veil reveal-sm-block"> for happy moments, <br class="veil reveal-sm-block">entrust your wedding <br class="veil reveal-sm-block">cares to us!</h2>
                    <div class="text-center"><a href="contacts.html" class="link link-white">Plan my wedding</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-md-110 section-60 bg-wood">
          <div class="shell">
            <h2>Our Team</h2>
            <div class="range">
              <div class="cell-xs-6 cell-lg-4">
                <div class="unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
                  <div class="unit-left"><img src="{{asset('assets/images/index-09.jpg')}}" width="120" height="120" alt="" class="img-responsive center-block"></div>
                  <div class="unit-body text-sm-left">
                    <h4>Stephanie <br class="veil reveal-lg-block">Cook</h4>
                    <p class="text-gray text-uppercase text-bold text-spacing-100">manager</p>
                    <hr class="veil reveal-md-block divider divider-md-left">
                  </div>
                </div>
              </div>
              <div class="cell-xs-6 cell-lg-4">
                <div class="unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
                  <div class="unit-left"><img src="{{asset('assets/images/index-10.jpg')}}" width="120" height="120" alt="" class="img-responsive center-block"></div>
                  <div class="unit-body text-sm-left">
                    <h4>Sandra <br class="veil reveal-lg-block">Grant</h4>
                    <p class="text-gray text-uppercase text-bold text-spacing-100">decorator</p>
                    <hr class="veil reveal-md-block divider divider-md-left">
                  </div>
                </div>
              </div>
              <div class="cell-xs-6 cell-lg-4 offset-top-30 offset-sm-top-72 offset-lg-top-0">
                <div class="unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
                  <div class="unit-left"><img src="{{asset('assets/images/index-11.jpg')}}" width="120" height="120" alt="" class="img-responsive center-block"></div>
                  <div class="unit-body text-sm-left">
                    <h4>Kelly <br class="veil reveal-lg-block">Lucas</h4>
                    <p class="text-gray text-uppercase text-bold text-spacing-100">organizer</p>
                    <hr class="veil reveal-md-block divider divider-md-left">
                  </div>
                </div>
              </div>
              <div class="cell-xs-6 cell-lg-4 offset-top-30 offset-sm-top-72">
                <div class="unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
                  <div class="unit-left"><img src="{{asset('assets/images/index-12.jpg')}}" width="120" height="120" alt="" class="img-responsive center-block"></div>
                  <div class="unit-body text-sm-left">
                    <h4>Bobby <br class="veil reveal-lg-block">Bowman</h4>
                    <p class="text-gray text-uppercase text-bold text-spacing-100">photographer</p>
                    <hr class="veil reveal-md-block divider divider-md-left">
                  </div>
                </div>
              </div>
              <div class="cell-xs-6 cell-lg-4 offset-top-30 offset-sm-top-72">
                <div class="unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
                  <div class="unit-left"><img src="{{asset('assets/images/index-13.jpg')}}" width="120" height="120" alt="" class="img-responsive center-block"></div>
                  <div class="unit-body text-sm-left">
                    <h4>Janet <br class="veil reveal-lg-block">Williams</h4>
                    <p class="text-gray text-uppercase text-bold text-spacing-100">visagiste</p>
                    <hr class="veil reveal-md-block divider divider-md-left">
                  </div>
                </div>
              </div>
              <div class="cell-xs-6 cell-lg-4 offset-top-30 offset-sm-top-72">
                <div class="unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
                  <div class="unit-left"><img src="{{asset('assets/images/index-14.jpg')}}" width="120" height="120" alt="" class="img-responsive center-block"></div>
                  <div class="unit-body text-sm-left">
                    <h4>Emily <br class="veil reveal-lg-block">Guzman</h4>
                    <p class="text-gray text-uppercase text-bold text-spacing-100">hairdresser</p>
                    <hr class="veil reveal-md-block divider divider-md-left">
                  </div>
                </div>
              </div>
            </div><a href="#" class="offset-top-30 offset-md-top-60 link">VIEW ALL team members</a>
          </div>
        </section>
        <section class="section-md-110 section-60">
          <div class="shell">
            <h2>Testimonials</h2>
            <div class="range range-xs-center text-left">
              <div class="cell-sm-6 cell-md-4">
                <div class="unit unit-horizontal">
                  <div class="unit-left"><img src="{{asset('assets/images/index-15.jpg')}}" width="70" height="70" alt="" class="img-responsive"></div>
                  <div class="unit-body">
                    <h4>Olivia & James Fowler</h4>
                  </div>
                </div>
                <p class="offset-top-16 font-accent">So many people have told us that our wedding was the most beautiful wedding that they’ve ever attended. Everything was just stunning, and your flower arrangers were really talented. Thank you!</p>
              </div>
              <div class="cell-sm-6 cell-md-4">
                <div class="unit unit-horizontal">
                  <div class="unit-left"><img src="{{asset('assets/images/index-16.jpg')}}" width="70" height="70" alt="" class="img-responsive"></div>
                  <div class="unit-body">
                    <h4>Hannah & Harry Bates</h4>
                  </div>
                </div>
                <p class="offset-top-16 font-accent">Thank you so much for the fabulous job you did helping our wedding be the best it could be. We had the time of our lives! I enjoyed the day so much more knowing you had our backs. Much love!</p>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-45 offset-md-top-0">
                <div class="unit unit-horizontal">
                  <div class="unit-left"><img src="{{asset('assets/images/index-17.jpg')}}" width="70" height="70" alt="" class="img-responsive"></div>
                  <div class="unit-body">
                    <h4>Emma & Robert Wells</h4>
                  </div>
                </div>
                <p class="offset-top-16 font-accent">Thank you for being such a perfect wedding planner! Everything went so smoothly and we had the most wonderful day. Working with you was a pleasure and it took much of the stress out of the planning process.</p>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection