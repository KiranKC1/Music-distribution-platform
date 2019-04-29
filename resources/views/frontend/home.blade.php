@extends('layouts.frontend')
@section('css')
<link rel="stylesheet" href="{{asset('assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/revolution-slider/revolution/css/settings.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/revolution-slider/revolution/css/layers.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/revolution-slider/revolution/css/navigation.css')}}">
@endsection
@section('body')
<div id="rev_slider_990_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="rockband88" data-source="gallery" style="background-color:transparent;padding:0px;">
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
                   data-volume="mute" 
                   data-videowidth="100%"
                   data-videoheight="100%"
                   data-videomp4="{{asset('slider-assets/video/Slash.m4v')}}"
                   data-videopreload="auto"
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
                    <a href="#!" class="btn btn-lg u-btn-outline-primary text-uppercase u-btn-hover-v2-2 g-mr-10 g-mb-15">Get Album</a>
                </div>      
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
      </div><!-- END REVOLUTION SLIDER -->
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