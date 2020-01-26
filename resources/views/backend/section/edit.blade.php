<div class="m-portlet">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<span class="m-portlet__head-icon m--hide">
					<i class="la la-gear"></i>
				</span>
				<h3 class="m-portlet__head-text">
					Edit Section
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<!-- <form method="POST" action="{{{ 'ProjectController@create' }}}" accept-charset="UTF-8"> -->
	<form class="m-form">
		<div class="m-portlet__body">
			<div class="m-form__section m-form__section--first">
				<div class="form-group m-form__group row">
					<label class="col-lg-4 col-form-label">
						Section EN:
					</label>
					<div class="col-lg-8">
						<input id="sectionEnEdit" type="text" name="sectionEnEdit" class="form-control m-input" placeholder="Edit Section EN name">
						<input id="idHidden" type="hidden">
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-lg-4 col-form-label">
						Section TH:
					</label>
					<div class="col-lg-8">
						<input id="sectionThEdit" type="text" name="sectionThEdit" class="form-control m-input" placeholder="Edit Section TH name">
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label class="col-lg-4 col-form-label">
						Department Name:
					</label>
					<div class="col-lg-8">
						<div class="input-group">
							<select id="deptIdEdit" class="form-control m-input" name="deptIdEdit">
							    @foreach ($department as $item)
							    	<option selected value="{{ $item->deptId }}">{{ $item->deptName }}</option>
							    @endforeach
							</select>
						</div>
					</div>
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