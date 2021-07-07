@extends ('application.base')

@section('content')

    <div class="intro-video" style="display: none;">
        <div class="close-video">
            <i class="fa fa-times-circle fa-lg"></i>
        </div>
        <iframe src="https://www.youtube.com/embed/mrKdx7mDsPw?autoplay=0&amp;showinfo=0&amp;enablejsapi=1"
                id="video-iframe" allowfullscreen style="border: none;"></iframe>
    </div>

    <div class="hero-video video-background">
        <div class="video-container video-foreground">

            <div class="hero-text">
                <img src="{{ asset('images/official-logo.png') }}" class="aod-logo" alt="AOD Clan Logo"/>
                <h1>Game with purpose<br/>inspired by community</h1>
                <h2 class="subtitle">What are you waiting for?</h2>
                <div class="play-button">PLAY VIDEO</div>
            </div>

            <div class="grid"></div>

            <iframe id="video" frameborder="0" width="100%"
                    src="https://www.youtube.com/embed/mrKdx7mDsPw?loop=1&autoplay=1&controls=0&showinfo=0&autohide=1&playlist=KN6yvG9aJsg&mute=1">
            </iframe>
        </div>
    </div>

    <section class="supported-games with-shadow">
        <div class="section-content-container section--centered ">
            <h1>Engaged in <strong>18</strong> major titles <br>with more than <strong>2500</strong> active members </h1>
            <div class="section-blurb">
                <p>From first-person shooters and survival games to the most well known massive-multiplayer games, you’ll always have something to play. And there’s no shortage of AOD members playing around the clock from Brisbane, Australia and Osaka, Japan crossing the likes of Norway, France, and Brazil, and dominating the time zones of North and South America.</p>

            </div>
        </div>
    </section>

    <section class="founded-info with-shadow">
        <div class="section-content-container  ">
            <div class="section--short-width">
                <div class="section-blurb">
                    <h1>Founded in <strong>1999</strong><br>and still growing! </h1>
                    <p>The Angels of Death is a time-tested organization, supporting over 56 major gaming titles in the past 15 years including classics like Medal of Honor: Allied Assault, and Swat 3.</p>
                    <p>We’ve lasted this long because of the tireless efforts of people who love gaming, and our community is as diverse as the games we play. AOD is truly a family, and we’ve never stopped growing.</p>
                    <p><a href="/history/">Read the history of AOD</a></p>

                </div>
                <div class="section-image">
                    <img width="700" height="700" src="https://www.clanaod.net/wp-content/uploads/2016/10/dude.png" class="attachment-full size-full" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="section with-shadow" style="background: url(https://www.clanaod.net/wp-content/uploads/2016/10/belong-section-bg.jpg) #050505 no-repeat center 0">
        <div class="section-content-container section--centered ">
            <h1>Belong to something <strong>unique</strong> and<br>worldwide that <strong>endures</strong> through time </h1>
            <div class="section-blurb">
                <p>Maniacal adolescent leaders with cosmic delusional powers, leaders that suddenly vanish, councils that focus more on forum flair than decisions. Like you, we’ve experienced them all and learned a lot in the process.</p>
                <p>We made sure AOD was different. We intentionally cultivated a community focused on less drama, and more gaming. Here your relationships and investments in the community continue beyond a single game.</p>
                <p>At AOD, your legacy can last for years.</p>

            </div>
        </div>
    </section>

    <section class="honor-info ">
        <div class="section-content-container  ">
            <h1>We aspire to win the right way </h1>
            <div class="section-blurb">
                <p>Chief among our priorities is maintaining a gaming atmosphere free of drama that all can enjoy. While winning is important to us, so is fair play, respect among members, and courtesy to our volunteer staff.</p>
                <p><a href="https://www.clanaod.net/forums/showthread.php?t=3327">Read our Code of Conduct</a></p>

            </div>
        </div>
    </section>

    <section class="social-media with-shadow">
        <div class="section-content-container section--centered ">
            <h1>Catch up with us on social media </h1>
            <div class="section-blurb">
                <p>Grab one of the hundreds of seats in our hosted VOIP amphitheater while working your WASD and, when you have to leave your mechanical keys, keep up to date by following our social feeds.</p>
                <ul class="social-media-sites">
                    <li class="twitch" data-link="https://www.twitch.tv/clanaodstream">Twitch</li>
                    <li class="twitter" data-link="https://twitter.com/officialclanaod">Twitter</li>
                    <li class="steam" data-link="http://steamcommunity.com/groups/clanaod">Steam</li>
                    <li class="youtube" data-link="http://bit.ly/2dKbL9I">Youtube</li>
                </ul>
                <p>

                </p></div>
        </div>
    </section>

    <section class="apply-info ">
        <div class="section-content-container section--centered ">
            <h1>So what are you waiting for? </h1>
            <div class="section-blurb">
                <p>Complete a clan application with one of our divisions to start the process and see if we’re a good fit for each other.</p>
                <p><a class="apply-button call-to-action-button" href="#">Apply</a></p>

            </div>
        </div>
    </section>

@endsection