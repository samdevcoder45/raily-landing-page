@php
$nav_links = [
['id' => 1, 'url' =>'/meetups','text' => 'Meetups'],
['id' => 2, 'url' =>'/Ai','text' => 'AI'],
['id' => 3, 'url' =>'/Gamification','text' => 'Gamification'],
['id' => 4, 'url' =>'/Rewards','text' => 'Rewards'],
['id' => 5, 'url' =>'/Web-3','text' => 'Web 3'],
['id' => 6, 'url' =>'/concierge','text' => 'Concierge'],
['id' => 7, 'url' =>'/charity','text' => 'Charity'],
['id' => 8, 'url' =>'/all-features','text' => 'All Features'],
]
@endphp

<header>
    <div data-animation="default" class="navbar w-nav" data-easing2="ease" data-easing="ease" data-collapse="medium" data-w-id="00dfbd8a-10b2-f50b-769d-e57d76eb66ed" role="banner" data-duration="400" id="w-node-_00dfbd8a-10b2-f50b-769d-e57d76eb66ed-e6ef39a8">
        <nav id="w-node-d215a018-b744-ad0a-7a5f-733e90fb71cd-e6ef39a8" class="naw-container">
            <a href="#Home" class="brand w-nav-brand w--current">
                <img src="{{asset('assets/imgs/logo.svg')}}" loading="eager" alt="Logo" class="image-logo">
            </a>
            <nav role="navigation" id="nav-wrapper" class="nav-menu w-nav-menu">
                <div class="box-menu">
                    @foreach($nav_links as $link)

                    <a href="{{url($link['url'])}}" class="nav-link dtsctop w-nav-link text-[11px] font-lufga">{{$link['text']}}</a>

                    @endforeach
                </div>
            </nav>
            <div class="menu-button w-nav-button" style="-webkit-user-select: text;" aria-label="menu" role="button" tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="false">
                <div class="box-burger">
                    <img src="{{asset('assets/imgs/hamburger.svg')}}" loading="lazy" alt="" class="image-73 w-[2em] h-[2em] md:hidden">
                </div>
            </div>
            <div class="div-block-320">
                <div>
                    <a data-popup-initiator="home" href="/press" class="link-contact-naw w-inline-block">
                        <div>
                            Contact us
                        </div>
                    </a>
                </div>
            </div>
        </nav>
        <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0" style="display:none;">
            <nav role="navigation" id="nav-wrapper" class="nav-menu w-nav-menu" style="transform: translateY(0px) translateX(0px); transition: transform 400ms ease 0s;" data-nav-menu-open="">
                <div class="box-menu"><a href="#meetups" class="nav-link dtsctop w-nav-link w--nav-link-open">Meetups</a><a href="#" class="nav-link non-desctop w-nav-link w--nav-link-open">Date</a><a href="#" class="nav-link dtsctop non w-nav-link w--nav-link-open">AR</a><a href="#Ai" class="nav-link w-nav-link w--nav-link-open">AI</a><a href="#Gamification" class="nav-link w-nav-link w--nav-link-open">Gamification</a><a href="#Rewards" class="nav-link w-nav-link w--nav-link-open">Rewards</a><a href="#web-3" class="nav-link w-nav-link w--nav-link-open">Web 3</a><a href="#" class="nav-link non-desctop non w-nav-link w--nav-link-open">AR</a><a href="#xr" class="nav-link dtsctop non w-nav-link w--nav-link-open">XR</a><a href="#" class="nav-link non-desctop non w-nav-link w--nav-link-open">XR</a><a href="#concierge" class="nav-link w-nav-link w--nav-link-open">Concierge</a><a href="#charity" class="nav-link w-nav-link w--nav-link-open">Charity</a><a href="#all-features" class="nav-link w-nav-link w--nav-link-open">All Features</a></div>
            </nav>
        </div>

    </div>
</header>

@push('header-scripts')
<script type="text/javascript">
    $(document).ready(function() {

        const $navOverlay = $('#w-nav-overlay-0');

        $('.box-burger').on('click', function() {
            if ($navOverlay.is(':visible')) {
                $navOverlay.hide();
            } else {
                $navOverlay.show();
                $navOverlay.css('height', '19206.6px');
            }
        });

    })

</script>
@endpush
