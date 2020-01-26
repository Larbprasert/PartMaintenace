@extends('backend.layouts.app')

@section('title', 'หน้าแรก')

@section('stylesheet')


@endsection

@section('content')

<style type="text/css">

.m-datatable__row>.m-datatable__cell{
	background: #f4f3f8;
}

#example_length {
	margin-top: 10px;
}

.dataTables_wrapper>.dataTables_filter>input {
	margin-left: 0px !important;
	margin-bottom: 10px;
}


</style>

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
<!-- 	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Dashboard
				</h3>
			</div>
		</div>
	</div> -->
	<!-- END: Subheader -->
	<div class="m-content">

		<div class="m-portlet m-portlet--mobile">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Dashboard <small>showing summary from data</small>
						</h3>
					</div>
				</div>
				<div class="m-portlet__head-tools">
					<ul class="m-portlet__nav">
						<li class="m-portlet__nav-item">
							<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
								<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
									<i class="la la-ellipsis-h m--font-brand"></i>
								</a>
								<div class="m-dropdown__wrapper">
									<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
									<div class="m-dropdown__inner">
										<div class="m-dropdown__body">
											<div class="m-dropdown__content">
												<ul class="m-nav">
													<li class="m-nav__section m-nav__section--first">
														<span class="m-nav__section-text">Quick Actions</span>
													</li>
													<li class="m-nav__item">
														<a href="" class="m-nav__link">
															<i class="m-nav__link-icon flaticon-share"></i>
															<span class="m-nav__link-text">Create Post</span>
														</a>
													</li>
													<li class="m-nav__item">
														<a href="" class="m-nav__link">
															<i class="m-nav__link-icon flaticon-chat-1"></i>
															<span class="m-nav__link-text">Send Messages</span>
														</a>
													</li>
													<li class="m-nav__item">
														<a href="" class="m-nav__link">
															<i class="m-nav__link-icon flaticon-multimedia-2"></i>
															<span class="m-nav__link-text">Upload File</span>
														</a>
													</li>
													<li class="m-nav__section">
														<span class="m-nav__section-text">Useful Links</span>
													</li>
													<li class="m-nav__item">
														<a href="" class="m-nav__link">
															<i class="m-nav__link-icon flaticon-info"></i>
															<span class="m-nav__link-text">FAQ</span>
														</a>
													</li>
													<li class="m-nav__item">
														<a href="" class="m-nav__link">
															<i class="m-nav__link-icon flaticon-lifebuoy"></i>
															<span class="m-nav__link-text">Support</span>
														</a>
													</li>
													<li class="m-nav__separator m-nav__separator--fit m--hide">
													</li>
													<li class="m-nav__item m--hide">
														<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="m-portlet__body">
				<div class="m_datatable m-datatable m-datatable--default m-datatable--loaded">

					<table id="example" class="m-datatable__table stripe hover" style="width: 100%">
				        <thead class="m-datatable__head">
				            <tr class="m-datatable__row">
				                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">Name</th>
				                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">Position</th>
				                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">Office</th>
				                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">Extn.</th>
				                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">Start date</th>
				                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">Salary</th>
				            </tr>
				        </thead>
				    </table>
				    
				</div>
			</div>
		</div>




		<!--Begin::Main Portlet-->
		<!--End::Main Portlet-->
		<!--Begin::Main Portlet-->
		<!--End::Main Portlet-->
		<!--Begin::Main Portlet-->
		<!--End::Main Portlet-->
		<!--Begin::Main Portlet-->
		<!--End::Main Portlet-->
		<!--Begin::Main Portlet-->
		<!--End::Main Portlet-->

		<!--begin::Page Resources -->
        <script src="{{ url('backend/js/dashboard.js') }}" type="text/javascript"></script>
        <!-- <script src="{{ url('backend/assets/global/scripts/dataTables.min.js') }}" type="text/javascript"></script> -->
		<!--end::Page Resources -->
	</div>
</div>

@endsection


@section('javascript')
	<link href="{{ url('backend/assets/global/css/dataTables.min.css') }}" rel="stylesheet" type="text/css" />
	<script src="{{ url('backend/assets/global/scripts/dataTables.min.js') }}" type="text/javascript"></script>
	<script type="text/javascript">

		$(document).ready(function() {

		    $('#example').DataTable( {
		        "ajax": "b/getDashboard",
		        "columns": [
		            { "data": "name" , "className" : "m-datatable__cell" },
		            { "data": "position" },
		            { "data": "office" },
		            { "data": "extn" },
		            { "data": "start_date" },
		            { "data": "salary" }
		        ]
		    } );

		    // Use this don't remove
		    $( "#example_filter" ).prepend( $("#example_filter>label>input") );
		    $( "#example_filter>input" ).addClass("form-control m-input m-input--solid");
		    $( "#example_filter>input" ).attr("placeholder", "Search ...");
		    $( "#example_filter>label" ).remove();

		    // $( "#example_length" ).prepend("<div class=\"dropdown\" id=\"dropdown_length\">");
		    // $( "#dropdown_length" ).prepend("<button class=\"btn btn-brand dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> Dropdown button </button>")

			// $( "#searchArea" ).prepend("<div class=\"m-input-icon m-input-icon--left\" id=\"div2\">");
			// $( "#div2" ).prepend("<span class=\"m-input-icon__icon m-input-icon__icon--left\"> <span><i class=\"la la-search\"></i></span> </span>" );
			// $( "#example_filter" ).addClass("form-control m-input m-input--solid");
			// $( "#searchArea" ).append( $("#example_filter") );
			// $( "#div2" ).prepend( $("#example_filter") );
			// $( "#example_filter" ).prepend( $("#example_filter>label>input") );
			// $( "#example_filter" ).prepend("<span class=\"m-input-icon__icon m-input-icon__icon--left\"> <span><i class=\"la la-search\"></i></span> </span>" );
			// $( "#example_filter>input" ).addClass("form-control m-input m-input--solid");
			// $( "#example_length" ).addClass("col-md-4");
			// $( "#example_filter" ).addClass("col-md-4");
			// $( "#example_filter>input" ).attr("placeholder", "Search ...");
		//	$( "#example_filter" ).css("padding-top", "0").css("padding-bottom", "0");
		//	$( "#div2" ).prepend( $("#example_filter>input") )
			// $( "#example_filter>label" ).remove();


			$.ajax({
		        url: "b/getDashboard",
		        type: 'GET',
		        dataType: 'json', // added data type
		        success: function(res) {
		            console.log(res);
		        }
		    });

			// $.get("backend/assets/datatables/docs/api_reference/datatables/demos/orders.php", function(data){
			// 	// alert("Data: " + data);
			// 	console.log('data : ' + var_dump(data, true));
			// });

			// console.log('1');



			// console.log('2');

			

			// console.log('3');

		});
	</script>

@endsection




