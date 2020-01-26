<div class="m-portlet">
	<div class="m-portlet__body">
		<div class="m-form__section m-form__section--first">
			<div class="form-group m-form__group row">
				<meta name="csrf-token" content="{{ csrf_token() }}">
				<h5 class="col-lg-12" style="text-align: center">
					Do you want to delete this section
				</h5>
				<h5 class="col-lg-12" id="nameDelete" style="text-align: center; color: red;"></h5>
				<input type="hidden" id="deleteHidden" value="">
			</div>
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-12" style="text-align: center">
						<button type="button" class="btn btn-danger" id="deleteButton">
							Yes
						</button>
						<button type="reset" class="btn btn-secondary" data-dismiss="modal">
							No
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>