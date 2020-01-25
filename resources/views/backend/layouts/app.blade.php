<!DOCTYPE html><!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 5.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			CMMS - @yield('title')
		</title>
  		<meta name="csrf-token" content="{{ csrf_token() }}" >
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
		<!--begin::Base Styles -->

        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

		<link rel="stylesheet" href="{{ url('backend/css/vendors.bundle.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ url('backend/css/style.bundle.css') }}" type="text/css">
		<!--end::Base Styles -->
		{{-- <link rel="shortcut icon" href="http://keenthemes.com/metronic/preview/demo2/html/assets/demo/demo2/media/img/logo/favicon.ico" /> --}}


		<!-- START Global Include -->
		<link href="{{ url('backend/assets/global/plugins/typeahead/typeahead.css') }}" rel="stylesheet" type="text/css" />
		<script src="{{ url('backend/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>

		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<script src="{{ url('backend/assets/global/plugins/typeahead/handlebars.min.js') }}" type="text/javascript"></script>
		<script src="{{ url('backend/assets/global/plugins/typeahead/typeahead.bundle.min.js') }}" type="text/javascript"></script>
		<!-- END PAGE LEVEL PLUGINS -->

		<!-- BEGIN THEME GLOBAL SCRIPTS -->
		<script src="{{ url('backend/assets/global/scripts/app.js') }}" type="text/javascript"></script>
		<!-- END THEME GLOBAL SCRIPTS -->
		<!-- END Global Include -->


<style>
    *:not(i){
        font-family: 'Prompt', sans-serif !important;
    }
    .image-preview {
	    width: 200px;
	    height: 200px;
	    position: relative;
	    overflow: hidden;
	    background-color: #292b3c;
	    color: #e9e9ea;
	    border-radius: 100%;
	    margin: auto;
	    margin-bottom: 2rem;

	}
	.image-preview label {
	    position: absolute;
	    z-index: 5;
	    opacity: 0.8;
	    cursor: pointer;
	    background-color: #4e5556;
	    width: 200px;
	    height: 50px;
	    font-size: 20px;
	    line-height: 50px;
	    top: 0;
	    left: 0;
	    right: 0;
	    bottom: 0;
	    margin: auto;
	    text-align: center;
	}
	.image-preview input {
	    line-height: 200px;
	    font-size: 200px;
	    position: absolute;
	    opacity: 0;
	    z-index: 10;
	}

	.section-search-profile{
		height: 100%;
		padding: 0;
		margin: 0;
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.media-body {
	    text-align: left;
	    padding: 0.5rem 1rem;
	}
</style>

	@yield('stylesheets')

	</head>
	<!-- end::Head -->
	<!-- end::Body -->
		<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-stack__item--center m-brand__logo">
									<a href="{{ url('b') }}" class="m-brand__logo-wrapper" style="color: #fff;font-size: 2.0rem;">
										PART
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
									<!-- BEGIN: Responsive Header Menu Toggler -->
									{{-- <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a> --}}
									<!-- END -->
									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<!-- BEGIN: Horizontal Menu -->
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
								<i class="la la-close"></i>
							</button>
							
							<!-- END: Horizontal Menu -->
							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item">
											<div class="section-search-profile">
												<!-- <input type="hidden" id="url_search_profile" value="{{ url('search_profile') }}">
												<input type="hidden" id="url_search_profile_action" value="{{ url('b/actor/profile/another/') }}"> -->
												<!-- <input class="form-control m-input" type="text" id="search-profile" placeholder="ค้นหาสมาชิก หมอ คลีนิค..." name="search-profile" autocomplete="off" style="min-width: 340px;"> -->
												<!-- <a href="wizard" class="btn btn-outline-info" id="newBom"> New Project and BOM </a> -->
												<a href="wizard" class="btn btn-outline-accent m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
													<span>
														<i class="la la-plus-circle"></i>
														<!-- &nbsp;&nbsp; -->
														<span>
															New Project and BOM
														</span>
													</span>
												</a>
											</div>
											
										</li>
										{{-- <li class="m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light" data-dropdown-toggle="click" data-dropdown-persistent="true" id="m_quicksearch" data-search-type="dropdown">

											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon">
													<i class="flaticon-search-1"></i>
												</span>
											</a>
											<div class="m-dropdown__wrapper" style="margin-left: -350px;">
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>

												<div class="m-dropdown__inner ">
													<div class="m-dropdown__header">
														<form  class="m-list-search__form">
															<div class="m-list-search__form-wrapper">
																<span class="m-list-search__form-input-wrapper">
																	<input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="ระบุชื่อ แพทย์ หรือ คลีนิก เพื่อค้นหา...">
																</span>
																<span class="m-list-search__form-icon-close" id="m_quicksearch_close">
																	<i class="la la-remove"></i>
																</span>
															</div>
														</form>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-max-height="300" data-mobile-max-height="200">
															<div class="m-dropdown__content"></div>
														</div>
													</div>
												</div>
											</div>
										</li> --}}
										{{-- <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" data-dropdown-toggle="click" data-dropdown-persistent="true">
											<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
												<span class="m-nav__link-badge m-badge m-badge--accent">
													3
												</span>
												<span class="m-nav__link-icon">
													<i class="flaticon-alert-2"></i>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(http://keenthemes.com/metronic/preview/demo2/html/assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
														<span class="m-dropdown__header-title">
															การแจ้งเตือน
														</span>
														<span class="m-dropdown__header-subtitle">
															สำหรับจัดการ
														</span>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<div class="tab-content">
																<div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
																	<div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
																		<div class="m-list-timeline m-list-timeline--skin-light">
																			<div class="m-list-timeline__items">
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
																					<span class="m-list-timeline__text">
																						ติดต่อจองนัด
																					</span>
																					<span class="m-list-timeline__time">
																						Just now
																					</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">
																						มีข้อความใหม่
																					</span>
																					<span class="m-list-timeline__time">
																						14 mins
																					</span>
																				</div>
																				<div class="m-list-timeline__item">
																					<span class="m-list-timeline__badge"></span>
																					<span class="m-list-timeline__text">
																						มีข้อความใหม่
																					</span>
																					<span class="m-list-timeline__time">
																						20 mins
																					</span>
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
										</li> --}}
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="#" style="background-image: url( "" ); background-size: cover; background-position: center center;width: 40px; height: 40px;" alt=""/>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" >
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
																<img src="#" style="background-image: url( "" }} ); background-size: cover; background-position: center center;width: 40px; height: 40px;" alt=""/>
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	####
																</span>
																<a href="#" class="m-card-user__email m--font-weight-300 m-link">
																	####
																</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
																</li>
																<li class="m-nav__item">
																	<a href="{{ url('#') }}" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-profile"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">
																					โปรไฟล์
																				</span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="{{ url('#') }}" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-layers"></i>
																		<span class="m-nav__link-text">
																			บริการ
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="{{ url('#') }}" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">
																			ข้อความ
																		</span>
																	</a>
																</li>
																{{-- <li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">
																			ช่วยเหลือ
																		</span>
																	</a>
																</li> --}}
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="{{ url('logout') }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																		ออกจากระบบ
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										
									</ul>
								</div>
							</div>
							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>
			<!-- END: Header -->
			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close m-aside-left-close--skin-dark" id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
					<!-- BEGIN: Aside Menu -->
					<div id="m_ver_menu" 
						class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark m-aside-menu--dropdown " 
						data-menu-vertical="true"
						data-menu-dropdown="true" data-menu-scrollable="true" data-menu-dropdown-timeout="500"  
						>
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<!-- <li class="m-menu__item @if($id == 'index') m-menu__item--active @endif" aria-haspopup="true" >
								<a  href="{{ url('b') }}" class="m-menu__link ">
									<span class="m-menu__item-here"></span>
									<i class="m-menu__link-icon flaticon-line-graph"></i>
									<span class="m-menu__link-text">
										Dashboard
									</span>
								</a>
							</li> -->
							<li class="m-menu__item @if($id == 'profile') m-menu__item--active @endif" aria-haspopup="true">
								<a  href="{{ url('b/project') }}" class="m-menu__link m-menu__toggle">
									<span class="m-menu__item-here"></span>
									<i class="m-menu__link-icon flaticon-app"></i>
									<span class="m-menu__link-text">
										Project Management
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
							<li class="m-menu__item @if($id == 'section') m-menu__item--active @endif" aria-haspopup="true">
								<a  href="{{ url('b/section') }}" class="m-menu__link m-menu__toggle">
									<span class="m-menu__item-here"></span>
									<i class="m-menu__link-icon flaticon-placeholder"></i>
									<span class="m-menu__link-text">
										Section Management
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
							<li class="m-menu__item @if($id == 'profile') m-menu__item--active @endif" aria-haspopup="true">
								<a  href="{{ url('b/material') }}" class="m-menu__link m-menu__toggle">
									<span class="m-menu__item-here"></span>
									<i class="m-menu__link-icon flaticon-open-box"></i>
									<span class="m-menu__link-text">
										Material Management
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
							
							<li class="m-menu__item @if($id == 'service') m-menu__item--active @endif" aria-haspopup="true">
								<a  href="{{ url('b/request') }}" class="m-menu__link m-menu__toggle">
									<span class="m-menu__item-here"></span>
									<i class="m-menu__link-icon flaticon-layers"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Material Request Management
											</span>
										</span>
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
							<li class="m-menu__item @if($id == 'schedule') m-menu__item--active @endif" aria-haspopup="true">
								<a  href="{{ url('b/bom') }}" class="m-menu__link m-menu__toggle">
									<span class="m-menu__item-here"></span>
									<i class="m-menu__link-icon flaticon-map"></i>
									<span class="m-menu__link-text">
										Bill Of Material (BOM)
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
							<li class="m-menu__item @if($id == 'message') m-menu__item--active @endif" aria-haspopup="true">
								<a  href="{{ url('b/vendor') }}" class="m-menu__link m-menu__toggle">
									<span class="m-menu__item-here"></span>
									<i class="m-menu__link-icon flaticon-list"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Vendor Management
											</span>
										</span>
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
							<li class="m-menu__item @if($id == 'meeting_room') m-menu__item--active @endif" aria-haspopup="true">
								<a  href="{{ url('b/user') }}" class="m-menu__link m-menu__toggle">
									<span class="m-menu__item-here"></span>
									<i class="m-menu__link-icon flaticon-users"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												User Management
											</span>
										</span>
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>

<!-- Start Admin module -->

<!-- End Admin module -->

							
						</ul>
					</div>
					<!-- END: Aside Menu -->
				</div>
				<!-- END: Left Aside -->
				@yield('content')
				
			</div>
			<!-- end:: Body -->
			<!-- begin::Footer -->
			<footer class="m-grid__item		m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2019 &copy;
								<a href="#" class="m-link">
									CMMS.com
								</a>
							</span>
						</div>
						<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											About us
										</span>
									</a>
								</li>
								<!-- <li class="m-nav__item">
									<a href="#"  class="m-nav__link">
										<span class="m-nav__link-text">
											การรักษาความปลอดภัย
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											ข้อตกลงการใช้งาน
										</span>
									</a>
								</li>
								<li class="m-nav__item m-nav__item">
									<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="ช่วยเหลือ" data-placement="left">
										<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
									</a>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
			</footer>
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->
		
		<!-- begin::Scroll Top -->
		<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->
		<!-- begin::Quick Nav -->
		<!-- begin::Quick Nav -->
		<!--begin::Base Scripts -->
		<script src="{{ url('backend/js/vendors.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ url('backend/js/scripts.bundle.js') }}" type="text/javascript"></script>
		<!-- <script src="{{ url('backend/assets/global/scripts/wizard.js') }}" type="text/javascript"></script> -->
		<!--end::Base Scripts -->
		<!--begin::Page Snippets -->
		<script src="{{ url('backend/js/dashboard.js') }}" type="text/javascript"></script>

<script>
handle_search_profile();

function handle_search_profile(){

	$('.section-search-profile').on('click', '.handle-profile-search', function(){
		var url_search_profile_action = $('#url_search_profile_action').val();
		var url_action = url_search_profile_action.replace("actor", $(this).attr('data-actor').toLowerCase())+'/'+$(this).attr('data-id');
		window.location = url_action;
	});

	var url_get_receiver = $('#url_search_profile').val();

	var custom = new Bloodhound({
	  datumTokenizer: function(d) { return d.tokens; },
	  queryTokenizer: Bloodhound.tokenizers.whitespace,
	  remote: {
	    url: url_get_receiver+'?query=%QUERY',
	    wildcard: '%QUERY'
	  }
	});
	 
	custom.initialize();
	 
	if (App.isRTL()) {
	  $('#search-profile').attr("dir", "rtl");  
	}
	$('#search-profile').typeahead(null, {
	  name: 'data-search-profile',
	  displayKey: 'value',
	  hint: (App.isRTL() ? false : true),
	  source: custom.ttAdapter(),
	  templates: {
	    suggestion: function(data){
	    	var el = '';
	    	el += '<div class="media handle-profile-search" data-id="'+data.id+'" data-actor="'+data.actor+'" data-name="'+data.name+'">';
			el += '<div class="pull-left">';
			el += '<div class="media-object">';
			el += '<img src="'+data.img+'" width="50" height="50"/>';
			el += '</div>';
			el += '</div>';
			el += '<div class="media-body">';
			el += '<h4 class="media-heading">'+data.name+'</h4>';
			el += '<p>'+data.desc+'</p>';
			el += '</div>';
	      	el += '</div>';
	      	return el;
	    }
	  }
	});
}
</script>

		
		@yield('scripts')

		<!--end::Page Snippets -->
		@yield('javascript')

	</body>
	<!-- end::Body -->
</html>
