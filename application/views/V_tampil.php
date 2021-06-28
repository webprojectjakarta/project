
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
	<div class="kt-subheader   kt-grid__item" id="kt_subheader">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title"><i class="la la-user">
				List Pengunjung</i>
			</h3> 
		</div>
		<div class="kt-subheader__toolbar">
			<div class="kt-subheader__toolbar">
			<div class="kt-subheader__wrapper">
				<a href="<?php echo base_url();?>C_tampil/pengunjungbaru" class="btn btn-label-primary btn-pill">
				Tambah Pengunjung </a>
			</div>
		</div>
		</div> 
	</div>
	<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
		<div>
			<?php if($this->session->flashdata('message'))
			{?>
			<div class="kt-alert kt-alert--outline alert alert-success alert-dismissible" role="alert">
				<?php echo $this->session->flashdata('message');?>
			</div>
			<?php }?>
		</div>
		<table class="table table-striped- table-bordered table-hover table-checkable" id="listPengunjung">
			<thead style="text-align: center;">
				<tr class="font">
					<th>No</th>
					<th>No. ID</th>
					<th>Nama</th>
					<th>Jenis Kendaraan</th>
					<th>Plat Nomor</th>
					<th>Jurusan</th>
					<!-- <th>Saldo</th> -->
					<th>Action</th>
				</tr>
			</thead>
			<tbody style="text-align: center;">
				<?php $no = 1; foreach($detail as $det): ?>
				<tr class="font">
					<td><?php echo $no;?></td>
					<td><?php echo $det->idcard;?></td>
					<td><?php echo $det->nama;?></td>
					<td><?php echo $det->Jeniskendaraan;?></td>
					<td><?php echo $det->nomorkendaraan;?></td>
					<td><?php echo $det->jurusan;?></td>
					<!-- <td><?php echo $det->Saldo;?></td> -->
					<td><center>
						<span class="btn btn-label-primary btn-pill"><a href="<?php echo site_url()?>C_tampil/editpengunjung/<?php echo $det->HeaderID;?>" title="Edit"><i class="la la-edit"></i>Edit</a></span>
						<span class="btn btn-label-primary btn-pill"><a href="<?php echo site_url()?>C_tampil/tambahsaldo/<?php echo $det->HeaderID;?>" title="Delete"><i class="la la-edit"></i>Delete</a></span>
					</center></td>
				</tr>
				<?php $no++; endforeach;?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
	$('#listPengunjung').DataTable();
</script>