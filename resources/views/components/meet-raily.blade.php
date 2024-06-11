@php
$img_links = [
['id' => 1,'text' => 'Connect','description'=>'Meet interesting people anywhere with our AI matchmaker.', 'src' => 'assets/imgs/meet-1.webp'],
['id' => 2,'text' => 'Discover','description'=>"See who's at your destination or&nbsp;nearby that shares your interests.", 'src' => 'assets/imgs/meet-2.webp'],
['id' => 3,'text' => 'Bond','description'=>"Moving or relaxing, our AI magically finds your connections.", 'src' => 'assets/imgs/meet-3.webp'],
['id' => 4,'text' => 'Explore','description'=>'Journey together to new places and&nbsp;experiences with Raily AI concierge.', 'src' => 'assets/imgs/meet-4.webp'],
];

@endphp

<section id="meetups" data-w-id="8ceb9fc6-7084-b683-5a7d-4ab2e8272d67" class="section-meet-raily">
    <div class="container">
        <div data-w-id="aba9a469-e014-f68d-0f11-90b7174c9a27" class="box-text-audio-meet" style="transform: translate3d(0px, 0em, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1;">
            <h2 class="h3 central ps">Meet Raily where you can</h2>
            <h2 class="h3 central mob">With Raily you can</h2>
            <div class="block-btn-audio-with">
                <a data-player-control="" href="#" class="btn-play w-inline-block">
                    <img src="{{asset('assets/imgs/play-btn.svg')}}" loading="lazy" alt="" class="image-play-animacia">
                    <img src="https://cdn.prod.website-files.com/64aceaf9cb10fc1c8e4efdbc/64c0c69c3cd3a8d0d1100648_Group%201948757684.svg" loading="lazy" alt="" class="image-play">
                </a>
                <div class="html-embed-5 w-embed">
                    <audio controls="" preload="none" data-name="Meet Raily">
                        <source src="https://azure.raily.app/voices/Meet_Raily.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>
        <div class="w-layout-grid wrapper-meet">
            <div id="w-node-cd9d25c8-3306-5886-feb2-e15afec3a7cb-e6ef39a8" class="block-cart-meet">
                @foreach ($img_links as $link)
                <div class="box-im-fon" style="scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <img src="{{asset('assets/imgs/bg-pink-overlay.webp')}}" loading="lazy" alt="" class="im-bg-slide">
                </div>
                <div id="w-node-_73efce49-0e08-e800-c908-a88c49399e9e-e6ef39a8" class="wrapper-cart-meet">
                    <div id="w-node-c4cd6c7f-a25f-91db-3f81-e7b942b2d46d-e6ef39a8" class="block-text-meet pl">
                        <div class="text-40-mit">{{$link['text']}}</div>
                        <div class="text-20-col-w50">{{$link['description']}}</div>
                    </div>
                    <div data-w-id="1d764b4a-4cff-a390-c0cf-d2cbaaa73cb5" class="cart-bg-meet" style="opacity: 1; transform: translate3d(0px, 0em, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <div class="bg-black-meet-phone"></div>
                        <img src="{{ asset($link['src']) }}" loading="lazy" data-w-id="061330ac-a08d-4b26-72b6-7b07478b831f" alt="" class="image-meet" style="opacity: 1; transform: translate3d(0px, 0em, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <div data-w-id="a12fb146-e539-261e-8a3a-e5bd734906f4" class="zatemenie" style="background-color: rgba(0, 0, 0, 0.08);">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="block-slid-bar">
                <div class="wrapper-slid-bar"><img src="{{asset('assets/imgs/block-slide-bar.svg')}}" loading="lazy" alt="" class="image-16" style="transform: translate3d(16.0435em, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">

                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="circul _1" style="background-color: rgb(0, 0, 0);">
                        <div class="line-circul"></div>
                        <div class="div-block-128"></div>
                    </div>
                    <div class="circul _2" style="background-color: rgb(0, 0, 0);">
                        <div class="line-circul"></div>
                    </div>
                    <div class="circul _3" style="background-color: rgb(0, 0, 0);">
                        <div class="line-circul"></div>
                    </div>
                    <div class="circul _4" style="background-color: rgb(0, 0, 0);">
                        <div class="line-circul"></div>
                        <div class="div-block-128-copy"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-layout-grid wrapper-meet-2">
            <div class="block-cart-meet mar178">
            @foreach ($img_links as $link)
             <div id="w-node-d94f97af-5b52-8fb0-d64a-e9a4e21e26a3-e6ef39a8" class="block-text-meet">
                 <div class="text-40-mit">{{$link['text']}}</div>
                 <div class="text-20-col-w50">{{$link['description']}}</div>
             </div>   
            @endforeach
            </div>
        </div>
        <div class="box-embet-meet">
            <div class="box-h-form">
                <div class="form-block-3 w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" action="https://getlaunchlist.com/s/S9IPAB" method="post" class="form-3" data-wf-page-id="64e30c9fd1d1b88ce6ef39a8" data-wf-element-id="03616a81-5bce-bd57-5f0e-eb109197945b" aria-label="Email Form"><input class="text-field-3 w-input" maxlength="256" name="email" data-name="email" placeholder="Enter your email" type="email" id="email-11" required=""><input type="submit" data-wait="Please wait..." class="form-button-3 w-button" value="Ask for Early Access"></form>
                    <div class="w-form-done" tabindex="-1" role="region" aria-label="Email Form success">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail" tabindex="-1" role="region" aria-label="Email Form failure">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
 <script type="text/javascript">
     $(document).ready(function() {
         const phoneContainer = $('.wrapper-meet');
         const phoneCount = phoneContainer.find('.box-im-fon').length;
         const blueBar = $('.wrapper-slid-bar .image-16');
         const pinkBg = $('.im-bg-slide');

         const phoneWidth = phoneContainer.width() / phoneCount;

         // Set the initial position of blueBar to align with the first phone on page load
         function setInitialPosition() {
            // Position for the first phone
             const initialPosition = 0; 
             blueBar.css({
                 transform: `translateX(${initialPosition}px)`
                 , transition: 'transform 0.4s ease' 
             });
             pinkBg.css({
                 transform: `translateX(${initialPosition}px)`, 
                 transition: 'transform 0.8s ease' 
             });
         }

         // Call setInitialPosition on page load
         setInitialPosition();

         // Update position on mouse move
         phoneContainer.on('mousemove', function(e) {
             const offset = phoneContainer.offset();
             const relativeX = e.pageX - offset.left;
             const index = Math.floor(relativeX / phoneWidth);
             const position = index * phoneWidth;

             blueBar.css({
                 transform: `translateX(${position}px)`
                 , transition: 'transform 0.4s ease'
             });

             pinkBg.css({
                 transform: `translateX(${position}px)`,
                 transition: 'transform 0.8s ease'
             });

             $('.circul').css('background-color', 'black');
             $('.circul').eq(index).css('background-color', 'white');
         });

         phoneContainer.on('mouseout', function() {
             setInitialPosition(); 

             $('.circul').css('background-color', 'black');
         });
     });
 </script>
 @endpush
