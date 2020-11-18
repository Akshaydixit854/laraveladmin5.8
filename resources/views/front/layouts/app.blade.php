<!DOCTYPE html>
<!--  Last Published: Mon Oct 28 2019 07:24:21 GMT+0000 (UTC)  -->
<html data-wf-page="5d9593c58362143a47e5635f" data-wf-site="5d9593c583621400eae5635e">
<head>
  <meta charset="utf-8">
  <title>Rylee — Premium eCommerce template for your online shop</title>
  <meta content="Rylee —  Premium eCommerce template for your online shop" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="{{asset('front/css/normalize.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('front/css/components.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('front/css/rylee-template.css')}}" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Gothic A1:100,200,300,regular,500,600,700,800,900"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="https://via.placeholder.com/1000x600.png?text=IMAGE" rel="shortcut icon" type="image/x-icon">
  <link href="https://via.placeholder.com/1000x600.png?text=IMAGE" rel="apple-touch-icon">
</head>
<body>
    @yield('main_content')
    
    @include('front.layouts.footer')
  <div class="c-overlay">
    <div class="c-overlay__modal">
      <div class="container">
        <div class="col no-margin-bottom lg-5 sm-12 sm-margin-bottom">
          <div data-animation="slide" data-duration="500" data-infinite="1" class="c-slider w-slider">
            <div class="w-slider-mask">
              <div class="w-slide"><img src="https://via.placeholder.com/1000x600.png?text=IMAGE 1000w" sizes="100vw" alt=""></div>
              <div class="w-slide"><img src="https://via.placeholder.com/1000x600.png?text=IMAGE" alt=""></div>
              <div class="w-slide"><img src="https://via.placeholder.com/1000x600.png?text=IMAGE" alt=""></div>
              <div class="w-slide"><img src="https://via.placeholder.com/1000x600.png?text=IMAGE" alt=""></div>
              <div class="w-slide"><img src="https://via.placeholder.com/1000x600.png?text=IMAGE 1000w" sizes="100vw" alt=""></div>
            </div>
            <div class="c-slider__left-arrow w-slider-arrow-left">
              <div class="w-icon-slider-left"></div>
            </div>
            <div class="c-slider__right-arrow w-slider-arrow-right">
              <div class="w-icon-slider-right"></div>
            </div>
            <div class="c-slider__nav w-slider-nav w-slider-nav-invert w-round"></div>
          </div>
        </div>
        <div class="col lg-1"></div>
        <div class="col no-margin-bottom lg-6 sm-12">
          <div class="size-h3 margin-bottom-small">Albert Armchair, Nubuck White</div>
          <div class="c-product__rating margin-bottom">
            <div class="fa is-filled"></div>
            <div class="fa is-filled"></div>
            <div class="fa is-filled"></div>
            <div class="fa is-filled"></div>
            <div class="fa is-blank"></div>
          </div>
          <div class="size-h2 margin-bottom">$120</div>
          <p>Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur acidisping vestibulum at eros. Duis mollis, est non sepulaids</p>
          <div class="w-form">
            <form id="email-form" name="email-form" data-name="Email Form">
              <div class="flexh-align-center">
                <div class="flexh-align-center margin-right"><a href="#" class="quantity-button is-minus">–</a><input type="text" maxlength="256" name="field" data-name="Field" required="" class="quantity-input w-input"><a href="#" class="quantity-button is-plus">+</a></div><input type="submit" value="Add to cart" data-wait="Please wait..." class="button-primary is-small w-button"></div>
            </form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
      </div>
      <a data-w-id="202df1b2-468b-88dd-04a0-44fffda14bc3" href="#" class="c-close-btn w-inline-block">
        <div class="iconfont"><em class="iconfont__no-italize"></em></div>
      </a>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="{{asset('front/js/rylee-template.js')}}" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script>
	$(document).ready(function(){
		//set default value of '1'
      	$(".quantity-input").val("1");
		incrementVar = 0;
		$('.quantity-button.is-plus').click(function(){
		    var $this = $(this),
		        $input = $this.prev('input'),
		        $parent = $input.closest('div'),
		        newValue = parseInt($input.val())+1;
		    $parent.find('.inc').addClass('a'+newValue);
		    $input.val(newValue);
		    incrementVar += newValue;
		});
		$('.quantity-button.is-minus').click(function(){
		    var $this = $(this),
		        $input = $this.next('input'),
		        $parent = $input.closest('div'),
		        newValue = parseInt($input.val())-1;
		    console.log($parent);
		    $parent.find('.inc').addClass('a'+newValue);
		    $input.val(newValue);
		    incrementVar += newValue;
		});	  
	 });
</script>
</body>
</html>