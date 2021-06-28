<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
	<!-- begin:: Content Head -->
	<div class="kt-subheader   kt-grid__item" id="kt_subheader">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">
				Users
			</h3>
			<span class="kt-subheader__separator kt-subheader__separator--v"></span>
			<div class="kt-subheader__group" id="kt_subheader_search">
				<span class="kt-subheader__desc" id="kt_subheader_total">
					<?php echo $_hslcount;?> </span>
			</div>
		</div>
		<div class="kt-subheader__toolbar">
			<div class="kt-subheader__wrapper">
				<a href="<?php echo base_url();?>C_user/newuser" class="btn btn-label-primary btn-pill">
				Add User </a>
			</div>
		</div>
	</div>

	<!-- end:: Content Head -->

	<!-- begin:: Content -->
	<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

		<!--begin::Portlet-->
		<div class="kt-portlet kt-portlet--mobile">
			<div>
				<?php if($this->session->flashdata('message'))
				{?>
				<div class="kt-alert kt-alert--outline alert alert-success alert-dismissible" role="alert">
					<?php echo $this->session->flashdata('message');?>
				</div>
				<?php }?>
			</div>
			<!--begin: Datatable -->
			<div class="kt-portlet__body">
				<div class="dataTables_wrapper dt-bootstrap4 no-footer">
					<div class="row">
						<div class="col-sm-12">
							<table id="list_user" class="table table-striped- table-bordered table-hover table-checkable" width="100%">
								<thead style="text-align: center;">
									<tr class="font">
										<th>No</th>
										<th>Nama</th>
										<th>Jabatan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($_listuser as $key):?>
									<tr class="font">
										<td><center><?php echo $no;?></center></td>
										<td><center><?php echo $key->username;?></center></td>
										<td><center><?php echo $key->password;?></center></td>
										<td><center>
											<span class="btn btn-label-primary btn-pill"><a href="<?php echo site_url()?>C_user/edituser/<?php echo $key->id;?>" title="Edit"><i class="la la-edit"></i>Edit</a></span>
											<span class="btn btn-label-primary btn-pill"><a href="<?php echo site_url()?>C_user/edituser/<?php echo $key->id;?>" title="Delete"><i class="la la-edit"></i>Delete</a></span>
										</center></td>
									</tr>
									<?php $no++; endforeach;?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<!--end: Datatable -->
		</div>

		<!--end::Portlet-->
	</div>

	<!-- end:: Content -->
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#list_user').DataTable();
	})
</script>