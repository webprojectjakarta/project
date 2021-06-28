<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
	<!-- begin:: Content Head -->
	<div class="kt-subheader   kt-grid__item" id="kt_subheader">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">
				New User
			</h3>
			<span class="kt-subheader__separator kt-subheader__separator--v"></span>
			<div class="kt-subheader__group" id="kt_subheader_search">
				<span class="kt-subheader__desc" id="kt_subheader_total">
					Enter detail user and submit </span>
			</div>
		</div>
		<div class="kt-subheader__toolbar">
			<a href="<?php echo site_url('C_user/listUser')?>" class="btn btn-label-primary btn-pill">
				Back </a>
		</div>
	</div>

	<!-- end:: Content Head -->

	<!-- begin:: Content -->
	<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
		<div class="kt-portlet kt-portlet--tabs">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-toolbar">
					<ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_2" role="tab">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
										<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero" />
									</g>
								</svg> Account
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="kt-portlet__body">
				<form action="<?php echo site_url()?>C_user/simpan" method="post">
					<div class="tab-content">
						<div class="tab-pane active" id="kt_apps_user_edit_tab_2" role="tabpanel">
							<div class="kt-form kt-form--label-right">
								<div class="kt-form__body">
									<div class="kt-section kt-section--first">
										<div class="kt-section__body">
											<div class="row">
												<label class="col-xl-3"></label>
												<div class="col-lg-9 col-xl-6">
													<h3 class="kt-section__title kt-section__title-sm">Account:</h3>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 col-form-label">UserID</label>
												<div class="col-lg-9 col-xl-6">
													<input class="form-control" type="text" name="userid" required>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 col-form-label">Username</label>
												<div class="col-lg-9 col-xl-6">
													<input class="form-control" type="text" name="username" required>
												</div>
											</div>
											<div class="form-group row"> 
												<label class="col-xl-3 col-lg-3 col-form-label">Password</label>
												<div class="col-lg-9 col-xl-6">
													<input class="form-control" type="password" name="password" required>
												</div>
											</div>
											<div class="btn-group pull-right">
												<button type="submit" class="btn btn-brand btn-bold kt-nav__link-icon flaticon2-writing">&nbsp;
													Submit </button>
											</div>
										</div>
									</div>
									<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- end:: Content -->
</div>