@extends('layout.app')
@section('content')
<main class="page-content">
        <section class="section-60 section-md-110">
          <div class="shell">
            <h2>Contact Information</h2>
            <div class="range range-xs-center font-accent link-secondary">
              <div class="cell-sm-5 cell-lg-4">
                <div class="unit-spacing-44 unit-middle unit unit-xs-horizontal unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
                  <div class="unit-left"><span class="icon icon-primary icon-lg fa-map-marker"></span></div>
                  <div class="text-xs-left unit-body">
                    <p class="offset-bottom-0"><a href="#" class="text-dark">9870 St Vincent Place, <br class='veil reveal-md-block'>Glasgow, DC 45 Fr 45.</a></p>
                  </div>
                </div>
              </div>
              <div class="cell-sm-7 cell-md-5 cell-lg-4">
                <div class="unit-spacing-44 unit unit-xs-horizontal unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
                  <div class="unit-left"><span class="icon icon-primary icon-lg fa-phone"></span></div>
                  <div class="text-xs-left unit-body">
                    <dl class="contact-info">
                      <dt>Freephone:</dt>
                      <dd><a href="callto:#">+1 800 559 6580</a></dd>
                    </dl>
                    <dl class="contact-info">
                      <dt>Telephone:</dt>
                      <dd><a href="callto:#">+1 800 603 6035</a></dd>
                    </dl>
                    <dl class="contact-info">
                      <dt>FAX:</dt>
                      <dd><a href="callto:#">+1 800 889 9898</a></dd>
                    </dl>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-lg-4 offset-top-45 offset-lg-top-0">
                <div class="unit-spacing-44 unit-middle unit unit-xs-horizontal unit-sm-horizontal unit-md-horizontal unit-lg-horizontal">
                  <div class="unit-left"><span class="icon icon-primary icon-lg fa-desktop"></span></div>
                  <div class="unit-body text-xs-left">
                    <p class="offset-bottom-0">E-mail: <a href="mailto:#" class="text-dark reveal-inline-block">mail@demolink.org</a><a href="#" class="text-dark">www.demolink.org</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="bg-wood section-60 section-md-110">
          <div class="shell">
            <h2>Feedback</h2>
            <!-- RD Mailform-->
            <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform range">
              <div class="cell-md-4 form-group offset-top-0">
                <label for="contact-name" class="form-label">Name:</label>
                <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
              </div>
              <div class="cell-md-4 form-group offset-top-0">
                <label for="contact-email" class="form-label">E-mail:</label>
                <input id="contact-email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
              </div>
              <div class="cell-md-4 form-group offset-top-0">
                <label for="contact-phone" class="form-label">Phone:</label>
                <input id="contact-phone" type="text" name="phone" data-constraints="@Required @Integer" class="form-control">
              </div>
              <div class="cell-md-12 form-group offset-top-0">
                <label for="contact-message" class="form-label">Message:</label>
                <textarea id="contact-message" name="message" data-constraints="@Required" class="form-control"></textarea>
              </div>
              <div class="cell-md-12 offset-top-30">
                <button type="submit" class="link link-primary">SEND MESSAGE</button>
              </div>
            </form>
          </div>
        </section>
      </main>
@endsection