@extends('backend.layouts.app')

@section('title', 'โปรไฟล์')

@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					โปรไฟล์แอดมิน
				</h3>
			</div>
		</div>
	</div>
	<!-- END: Subheader -->
	<div class="m-content">
		<div class="row">
			<div class="col-lg-12">
				<div class="m-portlet m-portlet--full-height m-portlet--tabs">
					<div class="tab-content">
						<div class="tab-pane active" id="m_user_profile_tab_1" aria-expanded="true">
							<form class="m-form m-form--fit m-form--label-align-right" id="profileForm" action="{{ url('b/admin/profile/update/'.$userData->adm_id) }}" method="post" enctype="multipart/form-data">
								<div class="m-portlet__body">
									<div class="m-card-profile">
										<div class="m-card-profile__pic">

											<div class="image-preview" id="image-preview" @if($userData->adm_thumbnail != NULL) style="background-image: url('{{ env('URL_BUCKET').'admin/profile/'.$userData->adm_thumbnail }}');background-size: cover; background-position: center center;" @endif>
							                	<label for="image-upload" class="image-label" id="image-label">อัพโหลดรูปภาพ</label>
							                	<input type="file" name="adm_thumbnail" class="image-upload" id="image-upload" />
							              	</div>
										</div>
										<div class="m-card-profile__details">
											<span class="m-card-profile__name">
												{{ $userData->adm_name }}
											</span>
											<a href="" class="m-card-profile__email m-link">
												{{ $userData->adm_email }}
											</a>
										</div>
									</div>
									<div class="form-group m-form__group row">
										<div class="col-10 ml-auto">
											<h3 class="m-form__section">
												ข้อมูลส่วนตัว
											</h3>
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label for="example-text-input" class="col-2 col-form-label">
											ชื่อ นามสกุล
										</label>
										<div class="col-7">
											<input class="form-control m-input" type="text" placeholder="Mark Andre" name="fullname" value="{{ $userData->adm_name }}">
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label for="example-text-input" class="col-2 col-form-label">
											ประวัติ
										</label>
										<div class="col-7">
											<input class="form-control m-input" type="text" placeholder="Mark Andre" name="bio" value="{{ $userData->adm_bio }}">
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label for="example-text-input" class="col-2 col-form-label">
											อีเมล
										</label>
										<div class="col-7">
											<input class="form-control m-input" type="text" placeholder="mark.andre@gmail.com" name="email" value="{{ $userData->adm_email }}">
										</div>
									</div>
								</div>

								<div class="row">
		                            @if ($errors->any())
		                            	<div class="col-2"></div>
		                                <div class="alert alert-error alert-danger col-7">
		                                    <i class="icon-remove-sign"></i>
		                                    {{ head($errors->all(':message')) }}
		                                </div>
		                            @endif

		                            @if ( Session::get('notice') )
		                            	<div class="col-2"></div>
		                                <div class="alert alert-info col-7">
		                                    <i class="icon-exclamation-sign"></i>
		                                    {{ Session::get('notice') }}
		                                </div>
		                            @endif

		                            @if ( Session::get('success') )
		                            	<div class="col-2"></div>
		                                <div class="alert alert-success col-7">
		                                    <i class="icon-ok-sign"></i>
		                                    {{ Session::get('success') }}
		                                </div>
		                            @endif
	                        	</div>

								<div class="m-portlet__foot m-portlet__foot--fit">
									<div class="m-form__actions">
										<div class="row">
											<div class="col-2"></div>
											<div class="col-7">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<input type="hidden" name="userType" value="{{ $userType }}">
												<button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">
													Save changes
												</button>
												&nbsp;&nbsp;
												<button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
													Cancel
												</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="m_user_profile_tab_2" aria-expanded="false"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('javascript')

<script type="text/javascript" src="http://opoloo.github.io/jquery_upload_preview/assets/js/jquery.uploadPreview.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $.uploadPreview({
    input_field: "#image-upload",
    preview_box: "#image-preview",
    label_field: "#image-label",
    label_default: "อัพโหลดรูปภาพ",   // Default: Choose File
    label_selected: "แก้ไขรูปภาพ",
  });
});
</script>

@endsection
