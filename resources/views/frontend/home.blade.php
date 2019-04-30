@extends('layouts.frontend')
@section('css')
<link rel="stylesheet" href="{{asset('assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/revolution-slider/revolution/css/settings.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/revolution-slider/revolution/css/layers.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/revolution-slider/revolution/css/navigation.css')}}">
<style>
  section {
    height:100vh;
}
  </style>
@endsection
@section('body')
<div id="home" class="rev_slider_wrapper fullscreen-container" data-alias="rockband88" data-source="gallery" style="background-color:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_990_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
          <ul>  <!-- SLIDE  -->
            <li data-index="rs-2760" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="assets/img/Slash-1024x576-1024x576.jpg" alt="Image description" data-bgposition="center center" data-bgfit="cover" data-bgparallax="5" class="rev-slidebg">
              <!-- LAYERS -->

              <!-- BACKGROUND VIDEO LAYER -->
              <div class="rs-background-video-layer"
                data-forcerewind="on" 
                   data-videoloop="loop"
                   data-forceCover="1"
                   data-aspectratio="16:9"
                   data-autoplay="true"
                   data-autoplayonlyfirsttime="true"
                   data-videoposter="{{asset('slider-assets/video/background.gif')}}"
              ></div>
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper "
                   id="slide-2760-layer-1"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                   data-width="full"
                   data-height="full"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-basealign="slide"
                   data-responsive_offset="off"
                   data-responsive="off"
                   data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 5;text-transform:left;background-color:rgba(51, 51, 51, 0.50);border-color:rgba(0, 0, 0, 0.50);border-width:0px;"></div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption text-center g-pt-40 tp-resizeme"
                   id="slide-2760-layer-14"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','-1','0']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-270','-189']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 6;text-transform:left;border-width:0px;font-size:120px; color:white;">
                   विचित्र
                    <h3 class="text-uppercase">Album out now</h3>
                    <a href="#album" class="btn btn-lg u-btn-outline-primary text-uppercase u-btn-hover-v2-2 g-mr-10 g-mb-15">Get Album</a>
                </div>      
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
      </div><!-- END REVOLUTION SLIDER -->
      <section id="album" class="text-center g-py-120" style="background:#070E18;">
          <div class="container g-width-780">
            <div class="u-heading-v2-2--bottom g-brd-primary g-mb-30">
              <h2 class="text-uppercase u-heading-v2__title g-line-height-1 g-font-weight-700 g-font-size-30 g-font-size-40--md g-mb-0 g-color-white">Download Album</h2>
            </div>
  
            <p class="g-mb-65 g-color-white">Use the code you purchased to get the link to download the album. Please provide correct email address to get the download link.</p>
            <form action="{{route('check.code')}}" method="POST">
              {{csrf_field()}}
                <div class="row">
                  <div class="col-md-12 form-group g-mb-30">
                    <input id="album_code" name="code" class="form-control g-font-size-default g-color-gray-dark-v4 g-placeholder-inherit g-bg-gray-light-v5 g-bg-gray-light-v5--focus g-brd-gray-light-v5 g-rounded-1 g-py-13 g-px-12" type="text" placeholder="Album Code" required>
                  </div>
    
                  <div class="col-md-12 form-group g-mb-40">
                      <input id="email_id" name="email" class="form-control g-font-size-default g-color-gray-dark-v4 g-placeholder-inherit g-bg-gray-light-v5 g-bg-gray-light-v5--focus g-brd-gray-light-v5 g-rounded-1 g-py-13 g-px-12" type="text" placeholder="Email Address" required>
                  </div>
                </div>
    
                <div class="text-center">
                    <button type="submit" class="btn btn-lg u-btn-outline-primary text-uppercase u-btn-hover-v2-2 g-mr-10 g-mb-15">Get Album Download Link</button>
                </div>
              </form>
  
          </div>
        </section>
        <section id="merch" class="g-flex-centered g-color-white u-bg-overlay g-bg-black-opacity-0_6--after g-py-20 g-overflow-y-hidden" style="background-image: url({{asset('assets/logo/logo.png')}});">
          <div class="container u-bg-overlay__inner">
            <div class="row">
              <div class="col-md-6 align-self-center g-py-20">
                <h2 class="h4 text-uppercase g-letter-spacing-1 g-mb-20">Get The Offical Merch</h2>
                <a href="https://butta.us/products/pahenlo-batti-muni?fbclid=IwAR1WD-hKUWqf4BLVkvIfrSgkCAD1Vz6XtuSJnA64zsZUnVyxBn2P7LGIXTw" class="btn btn-lg u-btn-outline-primary text-uppercase u-btn-hover-v2-2 g-mr-10 g-mb-15" target="_blank">Link to Merch</a>
              </div>
        
              <div class="col-md-6 align-self-center g-py-20">
              <img class="w-100" src="{{asset('assets/logo/PBM-Shirt.jpg')}}" alt="Pahenlo Batti Muni Merch">
              </div>
            </div>
          </div>
        </section>
        <section id="about" class="u-bg-overlay g-bg-black-opacity-0_5--after g-bg-img-hero g-py-200--md g-py-120" style="background-image: url({{asset('assets/logo/pbm_cover.png')}});">
          <div class="container u-bg-overlay__inner text-center g-color-white">
            <div class="row">
              <div class="col-md-10 ml-md-auto mr-md-auto">
                <h2 class="display-4 text-uppercase g-font-weight-600 g-mb-20" style="font-size:100px;">
                  <span class="g-color-yellow">पहेँलो बत्ती मुनि</span>
                </h2>
        
                <p class="lead g-mb-40">Donec eleifend mauris eu leo varius consectetur. Aliquam luctus a lorem ac rutrum. Cras in nulla id mi ornare vestibulum. Donec et magna nulla. Pellentesque ut ipsum id nibh pretium blandit quis ac erat.</p>
        
              </div>
            </div>
          </div>
        </section>
      <section id="contact" class="text-center g-py-120" style="background:#070E18;">
          <div class="container g-width-780">
            <div class="u-heading-v2-2--bottom g-brd-primary g-mb-30">
              <h2 class="text-uppercase u-heading-v2__title g-line-height-1 g-font-weight-700 g-font-size-30 g-font-size-40--md g-mb-0 g-color-white">Contact us</h2>
            </div>
  
            <p class="g-mb-65 g-color-white">If you have any queries feel free to contact us. If you had trouble with your download please send us the code you purchased along with the message.</p>
  
            <form>
              <div class="row">
                <div class="col-md-6 form-group g-mb-30">
                  <input id="inputGroup1_1" class="form-control g-font-size-default g-color-gray-dark-v4 g-placeholder-inherit g-bg-gray-light-v5 g-bg-gray-light-v5--focus g-brd-gray-light-v5 g-rounded-1 g-py-13 g-px-12" type="text" placeholder="Your name">
                </div>
  
                <div class="col-md-6 form-group g-mb-30">
                  <input id="inputGroup1_2" class="form-control g-font-size-default g-color-gray-dark-v4 g-placeholder-inherit g-bg-gray-light-v5 g-bg-gray-light-v5--focus g-brd-gray-light-v5 g-rounded-1 g-py-13 g-px-12" type="tel" placeholder="Your phone">
                </div>
  
                <div class="col-md-12 form-group g-mb-30">
                  <input id="inputGroup1_3" class="form-control g-font-size-default g-color-gray-dark-v4 g-placeholder-inherit g-bg-gray-light-v5 g-bg-gray-light-v5--focus g-brd-gray-light-v5 g-rounded-1 g-py-13 g-px-12" type="text" placeholder="Subject">
                </div>
  
                <div class="col-md-12 form-group g-mb-40">
                  <textarea id="inputGroup1_4" class="form-control g-resize-none g-font-size-default g-color-gray-dark-v4 g-placeholder-inherit g-bg-gray-light-v5 g-bg-gray-light-v5--focus g-brd-gray-light-v5 g-rounded-1 g-py-6 g-px-12" rows="6" placeholder="Message"></textarea>
                </div>
              </div>
  
              <div class="text-center">
                  <a href="#!" class="btn btn-lg u-btn-outline-primary text-uppercase u-btn-hover-v2-2 g-mr-10 g-mb-15">Send Message</a>
              </div>
            </form>
          </div>
        </section>
        
@endsection
@section('js')
<script src="{{asset('assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
  <script src="{{asset('assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

  <script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
  <script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
  <script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
  <script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
  <script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
  <script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
  <script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
  <script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
  <script>
        var tpj = jQuery;
    
        var revapi990;
        tpj(document).ready(function () {
          if (tpj("#rev_slider_990_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_990_1");
          } else {
            revapi990 = tpj("#rev_slider_990_1").show().revolution({
              sliderType: "hero",
              jsFileLocation: "revolution/js/",
              sliderLayout: "fullscreen",
              dottedOverlay: "none",
              delay: 9000,
              navigation: {},
              responsiveLevels: [1240, 1024, 778, 480],
              visibilityLevels: [1240, 1024, 778, 480],
              gridwidth: [1240, 1024, 778, 480],
              gridheight: [868, 768, 960, 720],
              lazyType: "none",
              parallax: {
                type: "scroll",
                origo: "slidercenter",
                speed: 400,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                type: "scroll",
              },
              shadow: 0,
              spinner: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              disableProgressBar: "on",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                simplifyAll: "off",
                disableFocusListener: false,
              }
            });
          }
        });
      </script>
@endsection