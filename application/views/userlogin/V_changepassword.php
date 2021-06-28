<?php foreach ($_datauser as $data):
	$id   = $data->id;
	$nama = $data->Nama;
	$pw   = $data->password;
endforeach; ?>
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
	<div>
		<?php if($this->session->flashdata('message'))
		{?>
		<div class="kt-alert kt-alert--outline alert alert-success alert-dismissible" role="alert">
			<?php echo $this->session->flashdata('message');?>
		</div>
		<?php }?>
	</div>
	<!-- begin:: Content Head -->
	<div class="kt-subheader   kt-grid__item" id="kt_subheader">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">
				Edit User
			</h3>
			<span class="kt-subheader__separator kt-subheader__separator--v"></span>
			<div class="kt-subheader__group" id="kt_subheader_search">
				<span class="kt-subheader__desc" id="kt_subheader_total">
					<?php echo $nama;?> </span>
			</div>
		</div>
		<div class="kt-subheader__toolbar">
			<a href="<?php echo site_url('Page/welcome')?>" class="btn btn-label-primary btn-pill">
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
							<a class="nav-link active" data-toggle="tab" href="#kt_apps_user_edit_tab_3" role="tab">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect id="bound" x="0" y="0" width="24" height="24" />
										<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3" />
										<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" id="Mask" fill="#000000" opacity="0.3" />
										<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" id="Mask-Copy" fill="#000000" opacity="0.3" />
									</g>
								</svg> Change Password
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="kt-portlet__body">
				<form action="<?php echo site_url()?>C_user/updatepassword/<?php echo $id;?>" method="post">
					<div class="tab-content">
						<div class="tab-pane active" id="kt_apps_user_edit_tab_3" role="tabpanel">
							<div class="kt-form kt-form--label-right">
								<div class="kt-form__body">
									<div class="kt-section kt-section--first">
										<div class="kt-section__body">
											<div class="row">
												<label class="col-xl-3"></label>
												<div class="col-lg-9 col-xl-6">
													<h3 class="kt-section__title kt-section__title-sm">Change Or Recover Your Password:</h3>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 col-form-label">Current Password</label>
												<div class="col-lg-9 col-xl-6">
													<input type="password" class="form-control" placeholder="Current password" name="pwold" value="<?php echo $pw;?>">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
												<div class="col-lg-9 col-xl-6">
													<input type="password" class="form-control" placeholder="New password" name="pwnew">
												</div>
											</div>
											<div class="form-group form-group-last row">
												<label class="col-xl-3 col-lg-3 col-form-label">Verify Password</label>
												<div class="col-lg-9 col-xl-6">
													<input type="password" class="form-control" placeholder="Verify password" name="pwnew2">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
								<div class="kt-form__actions">
									<div class="row">
										<div class="col-xl-3"></div>
										<div class="col-lg-9 col-xl-6">
											<button type="submit" class="btn btn-label-brand btn-bold">Save changes</button>
											<a href="<?php echo site_url('Page/welcome')?>" class="btn btn-clean btn-bold">Cancel</a>
										</div>
									</div>
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