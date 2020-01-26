<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<span class="m-portlet__head-icon m--hide">
					<i class="la la-gear"></i>
				</span>
				<h3 class="m-portlet__head-text">
					Edit Inventory Material
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<!-- <form method="POST" action="{{{ 'ProjectController@create' }}}" accept-charset="UTF-8"> -->
	<form class="m-form">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-lg-4 col-form-label">
					IM Name:
				</label>
				<div class="col-lg-8">
					<input id="imNameEdit" type="text" name="imName" class="form-control m-input" placeholder="Enter Inventory material name">
					<input id="idHidden" type="hidden">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-lg-4 col-form-label">
					IM Category:
				</label>
				<div class="col-lg-8">
					<select id="imCategoryEdit" class="form-control m-input" name="imCategory">
					    @foreach ($listCategory as $item)
					    	<option selected value="{{ $item->catMatID }}">{{ $item->catMatTitle }}</option>
					    @endforeach
					</select>
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-lg-4 col-form-label">
					IM Unit:
				</label>
				<div class="col-lg-8">
					<input id="imUnitEdit" type="text" name="imUnit" class="form-control m-input" placeholder="Enter Inventory material unit">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-lg-4 col-form-label">
					IM Price:
				</label>
				<div class="col-lg-8">
					<input id="imPriceEdit" type="text" name="imPrice" class="form-control m-input" placeholder="Enter Inventory material price">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-lg-4 col-form-label">
					IM Amount:
				</label>
				<div class="col-lg-8">
					<input id="imAmountEdit" type="text" name="imAmount" class="form-control m-input" placeholder="Enter Inventory material amount">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label class="col-lg-4 col-form-label">
					Vendor:
				</label>
				<div class="col-lg-8">
					<select id="imvendorIDEdit" class="form-control m-input" name="imvendorID">
					    @foreach ($vendor as $item)
					    	<option selected value="{{ $item->vendorID }}">{{ $item->vendorName }}</option>
					    @endforeach
					</select>
				</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-4"></div>
					<div class="col-lg-8">
						<button type="button" class="btn btn-success" id="updateRecord">
							Update
						</button>
						<button type="reset" class="btn btn-secondary" data-dismiss="modal">
							Cancel
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>