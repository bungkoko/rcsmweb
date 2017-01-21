<section>
	<div class="page-header">
		<h1>Talent</h1>
	</div>
	<ul id="crumbs">
    <li><a href="">Dashboard</a></li>
    <li>Talent</li>
  </ul>

  <table class='table table-striped table-condensed'>
	  <thead>
		  <tr>
			  <th>No.</th>
			  <th>Nama</th>
				<th>Jam Mulai</th>
				<th>Jam Selesai</th>
				<th>Deskripsi Profil</th>
				<th>Status</th>
				<th>
          <a href='<?php echo site_url('salon/tambah')?>' class='btn btn'><i class='icon-plus'></i> Tambah</a>
        </th>
			</tr>
		</thead>
      <tr>
        <?php
        if($gt_salon->num_rows()>0):
          foreach($gt_salon->result() as $salon):
          ?>

					<td><?php echo ++$offset;?></td>
					<td><?php echo $salon->services_name;?></td>
					<td><?php echo word_limiter(strip_tags($salon->services_description),20);?>
					<td>
            <a href='#' class='btn btn-small'><i class='icon-ok'></i></a>
            <a href='<?php echo site_url('salon/edit').'/'.$talent->talent_id;?>' class='btn btn-small'><i class='icon-edit'></i></a>
            <a href='<?php echo site_url('salon/hapus').'/'.$talent->talent_id;?>' onClick="return confirm('Anda yakin?');" class='btn btn-small'><i class='icon-trash'></i></a>
          </td>
			</tr>
      <?php
          endforeach;
        else:
          echo "<tr><td colspan=\"7\"> <center> no data </center></td></tr>";
        endif;
      ?>
    </table>
    <div class="cleaner_h20"></div>&nbsp;<strong><div class="pagingpage-nomor">1</div></strong>&nbsp;<div class="pagingpage-nomor"><a href="http://localhost/dinas-pendidikan/superadmin/pengumuman/index/5">2</a></div>&nbsp;<div class="pagingpage"><a href="http://localhost/dinas-pendidikan/superadmin/pengumuman/index/5">Next</a></div>&nbsp;			</section>
