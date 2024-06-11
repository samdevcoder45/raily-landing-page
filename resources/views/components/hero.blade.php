@php
$image_links = [
['id'=> 1, 'src' =>'assets/imgs/avatar-1.webp'],
['id'=> 2, 'src' =>'assets/imgs/avatar-2.webp'],
['id'=> 3, 'src' =>'assets/imgs/avatar-3.webp'],
['id'=> 4, 'src' =>'assets/imgs/avatar-4.webp'],
['id'=> 5, 'src' =>'assets/imgs/avatar-5.webp'],
['id'=> 6, 'src' =>'assets/imgs/avatar-6.webp'],
['id'=> 7, 'src' =>'assets/imgs/avatar-7.webp'],
['id'=> 8, 'src' =>'assets/imgs/avatar-8.webp'],
['id'=> 9, 'src' =>'assets/imgs/avatar-9.webp'],
['id'=> 10, 'src' =>'assets/imgs/avatar-10.webp'],
['id'=> 11, 'src' =>'assets/imgs/avatar-11.webp'],
['id'=> 12, 'src' =>'assets/imgs/avatar-12.webp'],
['id'=> 13, 'src' =>'assets/imgs/avatar-13.webp'],
['id'=> 14, 'src' =>'assets/imgs/avatar-14.webp'],
['id'=> 15, 'src' =>'assets/imgs/avatar-15.webp'],
['id'=> 16, 'src' =>'assets/imgs/avatar-16.webp'],
['id'=> 17, 'src' =>'assets/imgs/avatar-17.webp'],
['id'=> 18, 'src' =>'assets/imgs/avatar-18.webp']
];

$phone_imgs = [
["id"=>"1a96d08e-5873-b9f1-f1f5-68ea1f0a45b4","src"=>"assets/imgs/phone-1.webp"],
["id"=>"8c49d045-780c-7c01-c5ef-03214d6ab319",'src'=>"assets/imgs/phone-2.webp"],
["id"=>"6b483e82-083c-0d98-733b-42797312bdf5",'src'=>"assets/imgs/phone-3.webp"]
];

@endphp
<section id="Home" data-w-id="55cfadf7-0a41-17ba-4c48-856c093a6722" class="section-home-header">
    <div class="box-h1">
        <h1 class="h1">MEETS ON THE MOVE</h1>
        <img src="{{asset('assets/imgs/meets-male.webp')}}" alt="" class="im-h1 ps" />
        <img src="{{asset('assets/imgs/meets-female.webp')}}" alt="" class="im-h1 mob" />
    </div>
    <div class="container pl-no-pading">
        <div class="box-m-d-55">
            <div class="text-32 central mob-non">AI-Driven + Gamify</div>
        </div>
        <div class="wrapper-hiro-phon">
            <div class="block-phone-hiro">
                @foreach ($phone_imgs as $img)
                <img src="{{ asset($img['src']) }}" alt="" style="opacity:100;-webkit-transform:translate3d(null, 15em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, 15em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, 15em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, 15em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" data-w-id="{{$img['id']}}" class="im-hiro-phon" />
                @endforeach
            </div>
        </div>
        <div class="wrapper-form-hiro">
            <div class="box-h-form">
                <div class="form-block-3 w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" action="https://getlaunchlist.com/s/S9IPAB" method="post" class="form-3" data-wf-page-id="64e30c9fd1d1b88ce6ef39a8" data-wf-element-id="57ee8a38-81c6-86e4-9cb0-f3685c2bcb80">
                        <input class="text-field-3 w-input" maxlength="256" name="email" data-name="email" placeholder="Enter your email" type="email" id="email-16" required="" />
                        <input type="submit" data-wait="Please wait..." class="form-button-3 w-button" value="Ask for Early Access" />
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
        <div class="wrapper-planet">
            {{-- <div style="opacity:0" class="block-planet"> --}}
            <div style="" class="block-planet">
                <div class="box-im-planet">
                    <img src="{{ asset('assets/imgs/globe.webp') }}" alt="" class="im-planet _1" style="" />
                    <img src="{{ asset('assets/imgs/globe-2.webp') }}" alt="" class="im-planet _2" style="" />
                    <img src="{{ asset('assets/imgs/globe-3.webp') }}" alt="" class="im-planet _3" style="" />
                    <img src="{{ asset('assets/imgs/globe-4.webp') }}" alt="" class="im-planet _4" style="" />
                    <img src="{{ asset('assets/imgs/globe-5.webp') }}" alt="" class="im-planet _5" style="" />
                    <img src="{{ asset('assets/imgs/globe-6.webp') }}" alt="" class="im-planet _6" style="" />
                    <img src="{{ asset('assets/imgs/globe-7.webp') }}" alt="" class="im-planet _7" style="" />
                    <img src="{{ asset('assets/imgs/globe-8.webp') }}" alt="" class="im-planet _8" style="" />
                </div>
                <div class="wraapper-h2">
                    <div class="box-h2">
                        <h2 class="h2-hiro">TRAVEL. CONNECT. </h2>
                    </div>
                    <div class="box-h2">
                        <h2 class="h2-hiro">EXPLORE.</h2>
                    </div>
                </div>
                <div class="box-logo-hiro">
                    <div class="text-16 pl-s-14">
                        Trusted by <br />
                        industry <br />leaders
                    </div>
                    <img src="{{asset('assets/imgs/frame.svg')}}" loading="lazy" alt="" class="im-logo-compani" />
                    <img src="{{asset('assets/imgs/frame-eye.svg')}}" loading="lazy" alt="" class="im-logo-compani" />
                    <img src="{{('assets/imgs/amazon.svg')}}" loading="lazy" alt="" class="im-logo-compani" />
                    <img src="{{asset('assets/imgs/google.svg')}}" loading="lazy" alt="" class="im-logo-compani" />
                    <div class="div-block-303">
                        <img src="{{asset('assets/imgs/leap.webp')}}" loading="lazy" alt="" class="im-logo-compani smol" />
                        <div class="text-11">
                            RocketFuel Semi-<br />Finalist 2024
                        </div>
                    </div>
                    <img src="{{asset('assets/imgs/beta-startup.webp')}}" loading="lazy" alt="" class="im-logo-compani" />
                </div>
            </div>
        </div>
        <div class="wrapper-lovedloved non">
            <div class="div-block-239 div-block-240 div-block-241 div-block-242 box-loved">
                <h2 class="heading-5">Loved by</h2>
                <div class="blok-star">
                    <a href="https://wall.raily.app/" target="_blank" class="w-inline-block">
                        <img src="{{asset('assets/imgs/img-star.svg')}}" loading="lazy" alt="" class="image-star" />
                    </a>
                    <div class="text-20 w500 planset-14">5.0</div>
                </div>
                <a data-show-review-button="" href="#" class="btn-reviews visibol w-inline-block">
                    <div class="text-16 planset-14 w300 mob-1-2">Spill Your Thoughts</div>
                </a>
            </div>
            <div class="div-block-244">
                <div class="html-embed-13 rly-app-senja w-embed">
                    <div class="senja-embed is-show-desktop rly-app-senja" data-id="f9f143c4-042f-4251-a0a2-e613a4f5c2e1" data-lazyload="false" data-built="true" data-session="a3b36037-62f8-4125-9a80-f07154b48cd2">
                        <div class="senja-spinner-container">
                            <div class="senja-spinner">
                            </div>
                        </div>
                        <div class=" sj-responsive" style="">
                            <div class="sj-avatars-pro w-full" style="--clr-primary: #ffffff; --clr-border: #ffffff; --clr-text: #374151; --font: DM Sans, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; --clr-highlight: #ffcd3640; font-family: var(--font); opacity: 1">
                                <div class="flex w-full flex-col items-center">
                                    <div class="flex flex-col">
                                        <div class="flex w-full items-center">
                                            @foreach ($image_links as $link)
                                            <div style="margin-left: -10px;display: block;" class="relative z-0 flex-none rounded-full hover:z-10">
                                                <div class="relative">
                                                    <button class="cutout-border group relative overflow-hidden rounded-full duration-200 hover:scale-125" style="border: 4px solid var(--clr-border);">
                                                        <div class="sj-avatar-container  svelte-1dfnct6">
                                                            <img src="{{ asset($link['src']) }}" alt="Mayar Imbruglia avatar" class="sj-interactive-floating-avatar svelte-1dfnct6" loading="lazy" referrerpolicy="no-referrer" style="width: 40px; height: 40px; opacity: 1;">
                                                        </div>
                                                        <div class="absolute inset-0 opacity-0 duration-200 group-hover:opacity-50" style="background-color: var(--clr-primary);"></div>
                                                    </button>
                                                </div>
                                            </div>
                                            @endforeach
                                            {{-- <div style="margin-left: -10px; display: block;" class="relative z-0 flex-none rounded-full hover:z-10"> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('hero-scripts')
<script type="text/javascript">
{{-- $(document).ready(function() {
        console.log('hello world')
        const $planetImages = $('.im-planet');
        const $gradientImage = $('.im-planet._7');
        const $wrapperH2 = $('.wraapper-h2');

        const fadeStart = 100; 
        const fadeEnd = 100; 

        $(window).on('scroll', function() {
            let scrollTop = $(this).scrollTop();

           
            let opacity = 1;

            if (scrollTop > fadeStart) {
                if (scrollTop < fadeEnd) {
                    opacity = 1 - (scrollTop - fadeStart) / (fadeEnd - fadeStart);
                     
                } else {
                    opacity = 0;
                }
            }
     
            let gradientOpacity = 1 - opacity;
            $gradientImage.css('opacity', gradientOpacity);
            if (scrollTop >= fadeEnd) {
                console.log('hi')
                $wrapperH2.show();
            } else {
                $wrapperH2.hide();
            }
        });

        $(window).trigger('scroll');
    }); --}}




$(document).ready(function() {

const $planetImages = $('.im-planet');
{{-- const $wrapperH2 = $('.wraapper-h2'); --}}
const totalImages = $planetImages.length;
const fadeStart = 100;
const fadeDuration = 100;
var aDiv = document.querySelector(".wraapper-h2");



$(window).on('scroll', function() {
let scrollTop = $(this).scrollTop();

$planetImages.each(function(index) {
let $image = $(this);

let imageFadeStart = fadeStart + (index * fadeDuration);
let imageFadeEnd = imageFadeStart + fadeDuration;

if (scrollTop > imageFadeStart) {
if (scrollTop < imageFadeEnd) { 
    let opacity=(scrollTop - imageFadeStart) / fadeDuration; $image.css('opacity', opacity); 

    } else { 
        $image.css('opacity', 1);
         } 
    } else { 
        $image.css('opacity', 0);
        
         } 
         
         }); 
         
         let textShowPoint=fadeStart + (totalImages * fadeDuration); 
         if (scrollTop>= textShowPoint) {
function changeWidth()
{
var scrollVal = window.pageYOffset;
var scrollSlow = (scrollVal / 4);

//Changing CSS Width
aDiv.style.width = Math.min(Math.max(scrollSlow, 20), 100) + "%";
}


requestAnimationFrame(changeWidth);


    } else {



    }
    });


    $(window).trigger('scroll');
    })
</script>
@endpush
