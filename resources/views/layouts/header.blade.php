<?php
$talentCat = \App\TalentCategory::get();
?>

<section class="page_toplogo table_section ds">

    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center text-sm-left">
                <span class="logo-meta">
                    <strong class="grey">+234-915-559-5318</strong>
                    <span>
                        admin@fopeogundero.com
                    </span>
                </span>
            </div>

            <div class="col-sm-4 text-center">
                <a href="index.html" class="logo top_logo">
                    <img  src="{{ asset('img/logo6.png') }}" alt="Logo">
                </a>
            </div>

            <div class="col-sm-4 text-center text-sm-right">
                <a href="header4.html#" class="social-icon color-icon border-icon rounded-icon soc-twitter"></a>
                <a href="header4.html#" class="social-icon color-icon border-icon rounded-icon soc-facebook"></a>
                <a href="header4.html#" class="social-icon color-icon border-icon rounded-icon soc-google"></a>

            </div>


            <!-- header toggler -->
            <span class="toggle_menu">
                <span></span>
            </span>

        </div>
    </div>

</section>

<header class="page_header header_gradient bordered_items">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
							<!-- main nav start -->
							<nav class="mainmenu_wrapper">
								<ul class="mainmenu nav sf-menu">
									<li class="active">
										<a href="{{ url('/') }}">Home</a>
									</li>

									<li>
										<a href="{{ url('talents/') }}">Talents</a>
                                        <ul>
                                            @foreach ($talentCat as $gCat)

                                            <li><a href="{{ url('candidate-category') }}/{{$gCat->id}}">{{$gCat->talentcategory_name}} </a></li>

                                        @endforeach

                                            <!-- <li><a href="{{ url('/talents') }}">More</a></li> -->
                                        </ul>
									</li>
									<!-- eof pages -->

									<li>
										<a href="{{ url('candidate/') }}">Candidtate</a>
									</li>
									<!-- eof features -->


									<!-- gallery -->
									<li>
										<a href="{{ url('activity/') }}">Portfolio</a>
									</li>
									<!-- eof Portfolio -->

									<li>
                                        <a href="{{ url('partners/') }}">Investors</a>
                                    </li>
                                        <li class="has-submenu">
                                            <a href="{{ url('about/') }}">About Us</a>
                                            <ul>
                                                <li><a href="{{ url('partners/') }}">Partners</a></li>
                                            </ul>
                                        </li>

								</ul>
							</nav>
							<!-- eof main nav -->
						</div>
					</div>
                </div>
			</header
