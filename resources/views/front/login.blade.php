@extends('front.layouts.app')
@section('main_content')
 <div class="c-topbar bg-is-brand-color">
    <div class="container flexh-align-center on-dark">
      <div class="col no-margin-bottom flex-horizontal lg-3">
        <div class="icomoon margin-right-small"></div>
        <div><a href="tel:+181231350601233" class="link on-dark">+1 8123 135060 1233</a></div>
      </div>
      <div class="col no-margin-bottom lg-6">
        <div class="text-align-center">First Time Buyer? Use &#x27;FIRST&#x27; promocode to instantly get 90% OFF!</div>
      </div>
      <div class="col no-margin-bottom lg-3 flexh-justify-end"><img src="images/-asset-clock.svg" width="16" alt="" class="margin-right-small">
        <div class="flex-horizontal md-is-wrapping">
          <div class="weight-is-medium margin-right-small">Today only!</div>
          <div>Free shipping worldwide</div>
        </div>
      </div>
    </div>
  </div>
  <header class="navigation-section">
    <div class="navigation-overlay"></div>
    <div class="navigation-and-offcanvas">
      <div class="col lg-2 md-basis-auto md-order-first no-margin-bottom-lg"><a href="#" class="brand justify-left w-inline-block"><img src="images/-asset-logo-dark.svg" alt=""></a></div>
      <div class="col no-margin-bottom lg-8 md-basis-auto md-order-last">
        <nav class="navigation-menu flexh-justify-center position-relative"><a href="index.html" class="nav-link">Home</a>
          <div data-hover="1" data-delay="0" data-w-id="fc005ed5-8c32-46d8-e974-eceecf05a618" class="nav-dropdown has-megamenu w-dropdown">
            <div class="nav-dropdown-toggle w-dropdown-toggle">
              <a href="financial/services.html" class="nav-link-block w-inline-block">
                <div>Shop</div>
                <div class="dropdown-icon w-icon-dropdown-toggle"></div>
              </a>
            </div>
            <nav class="c-megadropdown w-dropdown-list">
              <div class="container container-nested">
                <div class="col lg-3 md-12 no-margin-bottom-lg">
                  <h4 class="dropdown-title">Categories</h4><a href="#" class="c-megadropdown_link w-dropdown-link">Folding chair</a><a href="#" class="c-megadropdown_link w-dropdown-link">Gaming chair</a><a href="#" class="c-megadropdown_link w-dropdown-link">Ottoman chair</a><a href="#" class="c-megadropdown_link w-dropdown-link">Accent chair</a></div>
                <div class="col lg-3 md-12 no-margin-bottom-lg">
                  <h4 class="dropdown-title">Product layout </h4><a href="single-product.html" class="c-megadropdown_link w-dropdown-link">Standard</a><a href="single-product-with-scrolling-photos.html" class="c-megadropdown_link w-dropdown-link">Big photos</a><a href="single-product-w-left-sidebar.html" class="c-megadropdown_link w-dropdown-link">Left sidebar</a><a href="single-product-w-right-sidebar.html" class="c-megadropdown_link w-dropdown-link">Right sidebar</a></div>
                <div class="col lg-3 md-12 no-margin-bottom-lg">
                  <h4 class="dropdown-title">Shop grid style</h4><a href="shop-2-col.html" class="c-megadropdown_link w-dropdown-link">2 columns</a><a href="shop-3-col.html" class="c-megadropdown_link w-dropdown-link">3 columns</a><a href="shop-4-col.html" class="c-megadropdown_link w-dropdown-link">4 columns</a><a href="shop-5-col-fullwidth.html" class="c-megadropdown_link w-dropdown-link">5 cols &amp; fullwidth</a></div>
                <div class="col lg-3 md-12 no-margin-bottom-lg">
                  <h4 class="dropdown-title">Pages</h4><a href="cart.html" class="c-megadropdown_link w-dropdown-link">Cart</a><a href="checkout.html" class="c-megadropdown_link w-dropdown-link">Checkout</a><a href="order-complete.html" class="c-megadropdown_link w-dropdown-link">Order complete</a><a href="login-registration.html" class="c-megadropdown_link w-dropdown-link w--current">Login / Register</a></div>
              </div>
            </nav>
          </div><a href="about.html" class="nav-link">About</a><a href="blog.html" class="nav-link">Blog</a><a href="contact.html" class="nav-link">Contact</a>
          <div data-hover="1" data-delay="0" data-w-id="fc005ed5-8c32-46d8-e974-eceecf05a65c" class="nav-dropdown w-dropdown">
            <div class="nav-dropdown-toggle w-dropdown-toggle">
              <a href="financial/services.html" class="nav-link-block w-inline-block">
                <div>Pages</div>
                <div class="dropdown-icon w-icon-dropdown-toggle"></div>
              </a>
            </div>
            <nav class="dropdown-list w-dropdown-list"><a href="lookbook.html" class="dropdown-link w-dropdown-link">Lookbook</a><a href="single-post.html" class="dropdown-link w-dropdown-link">Single post</a></nav>
          </div>
        </nav>
      </div>
      <div class="col no-margin-bottom lg-2 lg-text-align-right md-basis-auto">
        <div class="inline-block position-relative"><a data-w-id="fc005ed5-8c32-46d8-e974-eceecf05a66c" href="#" class="c-navbar-icon"></a>
          <div class="c-search-popup w-form">
            <form id="email-form-2" name="email-form-2" data-name="Email Form 2"><input type="text" class="form-input-text w-input" maxlength="256" name="Search-2" data-name="Search 2" placeholder="Search product" id="Search-2"></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
            <a data-w-id="0d9236df-2bb5-5160-afe8-9bcead019112" href="#" class="c-search-popup__close-btn w-inline-block">
              <div><em class="iconfont__no-italize"></em></div>
            </a>
          </div>
        </div><a href="login-registration.html" class="c-navbar-icon is-19px w--current"></a>
        <div data-w-id="11f9c14f-6862-95c1-4399-a7985f01b570" class="c-cart"><a href="#" class="c-navbar-icon"></a>
          <div class="c-cart__dropdown">
            <div class="c-cart__item">
              <a href="#" class="c-cart__remove-btn w-inline-block">
                <div class="iconfont"><em class="iconfont__no-italize"></em></div>
              </a><img src="https://via.placeholder.com/1000x600.png?text=IMAGE" width="64" alt="" class="c-cart__thumbnail">
              <div class="text-align-left text-small flexv-space-between">
                <div class="is-heading-color margin-bottom-xsmall md-text-xsmall">Sorrento Retro Wooden Armchair</div>
                <div class="weight-is-medium low-text-contrast">1 × $120</div>
              </div>
            </div>
            <div class="c-cart__item no-border-bottom">
              <a href="#" class="c-cart__remove-btn w-inline-block">
                <div class="iconfont"><em class="iconfont__no-italize"></em></div>
              </a><img src="https://via.placeholder.com/1000x600.png?text=IMAGE" width="64" alt="" class="c-cart__thumbnail">
              <div class="text-align-left text-small flexv-space-between">
                <div class="is-heading-color margin-bottom-xsmall md-text-xsmall">Loris Contemporary Linen Wingback </div>
                <div class="weight-is-medium low-text-contrast">1 × $120</div>
              </div>
            </div>
            <div class="c-cart__section">
              <div>Subtotal : </div>
              <div>$240</div>
            </div>
            <div class="c-cart__buttons">
              <a href="#" class="button-primary is-small min-width-100px is-ghost md-margin-bottom-small w-inline-block">
                <div class="button-primary-text flexv-justify-center">view Cart</div>
              </a>
              <a href="#" class="button-primary is-small min-width-100px w-inline-block">
                <div class="button-primary-text flexv-justify-center">Checkout</div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <a data-w-id="fc005ed5-8c32-46d8-e974-eceecf05a672" href="#" class="c-nav__close-button w-inline-block">
        <div class="iconfont is-offcanvas-close-button"><em class="iconfont__no-italize"></em></div>
      </a>
    </div>
    <div class="mobile-navigation-bar"><a href="#" class="brand w-inline-block"><img src="images/-asset-logo-dark.svg" alt="" class="logo-image"></a>
      <a data-w-id="fc005ed5-8c32-46d8-e974-eceecf05a67b" href="#" class="burger-button w-inline-block">
        <div class="iconfont is-burger"><em class="iconfont__no-italize"></em></div>
      </a>
    </div>
  </header>
  <div class="section">
    <div class="container flex-horizontal">
      <div class="col lg-5 md-12 md-margin-bottom">
        <h2 class="margin-bottom">Login</h2>
        <div class="w-form">
          <form id="email-form-4" name="email-form-4" data-name="Email Form 4"><input type="text" class="form-input-text w-input" maxlength="256" name="Username" data-name="Username" placeholder="Username or email address" id="Username"><input type="password" class="form-input-text w-input" maxlength="256" name="Password" data-name="Password" placeholder="Password" id="Password" required=""><label class="w-checkbox form-checkbox"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input"><span class="w-form-label">Remember me</span></label><input type="submit" value="Login" data-wait="Please wait..." class="button-primary lg-md-margin-right sm-w100 w-button"><a href="#" class="text-xsmall">Lost your password?</a></form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
      <div class="col lg-2 hidden-md">
        <div class="vertical-divider"></div>
      </div>
      <div class="col lg-5 md-12">
        <h2 class="margin-bottom">Register</h2>
        <div class="w-form">
          <form id="email-form-4" name="email-form-4" data-name="Email Form 4"><input type="text" class="form-input-text w-input" maxlength="256" name="Username-2" data-name="Username 2" placeholder="Username or email address" id="Username-2"><input type="submit" value="Register" data-wait="Please wait..." class="button-primary sm-w100 w-button"></form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section padding-top-bottom-small border-top-light">
    <div class="container">
      <div class="col lg-4 md-12 flexh-align-top no-margin-bottom-lg">
        <div class="fa is-24px is-brand-color margin-right"></div>
        <div>
          <div class="size-h4 margin-bottom-small">Easy return</div>
          <div class="low-text-contrast text-small">30 day return window without any question asked, just peace of mind.</div>
        </div>
      </div>
      <div class="col lg-4 md-12 flexh-align-top no-margin-bottom-lg">
        <div class="fa is-24px is-brand-color margin-right"></div>
        <div>
          <div class="size-h4 margin-bottom-small">Global shipping</div>
          <div class="low-text-contrast text-small">We accept order around the globe and deliver to 120 countries.</div>
        </div>
      </div>
      <div class="col lg-4 md-12 flexh-align-top no-margin-bottom">
        <div class="fa is-24px is-brand-color margin-right"></div>
        <div>
          <div class="size-h4 margin-bottom-small">Secure payment</div>
          <div class="low-text-contrast text-small">Encryption of standard SSL with 128-bit symmetric key</div>
        </div>
      </div>
    </div>
  </div>
@endsection