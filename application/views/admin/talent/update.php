<section>
  <div class="page-header">
		<h1>Edit Talent</h1>
	</div>

  <ul id="crumbs">
    <li><a href="<?php echo site_url('dashboard')?>">Dashboard</a></li>
    <li><a href="<?php echo site_url('talent/daftar')?>">Talent</a></li>
    <li>Tambah Talent</li>
  </ul>
  <div class="row-fluid">
    <form class="form-horizontal" method="post" action="<?php echo current_url()?>" enctype="multipart/form-data">
      <div class="col-md-6">
        <table border="0">
          <tr>
            <td><label>Nama</label></td>
            <td> : </td>
            <td><input name="talent_name" value="<?php echo $dt_read->talent_name;?>"></td>
          </tr>
          <tr>
            <td><label>Jam Mulai</label></td>
            <td style="vertical-align:top"> : </td>
            <td>
              <div id="mulai_kerja" class="input-append date">
                <input data-format="hh:mm:ss" name="talent_hours_start" type="text" value="<?php echo $dt_read->talent_hours_start;?>"></input>
                <span class="add-on">
                  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                  </i>
                </span>
              </div>
            </td>
          </tr>
          <tr>
            <td><label>Jam Selesai</label></td>
            <td> : </td>
            <td>
              <div id="selesai_kerja" class="input-append date">
                <input data-format="hh:mm:ss" name="talent_hours_finish" type="text" value="<?php echo $dt_read->talent_hours_finish;?>"></input>
                <span class="add-on">
                  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                  </i>
                </span>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align:top"><label>Profile</label></td>
            <td style="vertical-align:top"> : </td>
            <td>
              <textarea name="talent_profile" rows="8" cols="120"><?php echo $dt_read->talent_profile;?></textarea>
            </td>
          </tr>
        </table>
        <input type="submit" class="btn btn-info" value="Edit" name="submit" />
      </div>
    </form>
  </div>


</section>

      <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/fileinput.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/bootstrap-datetimepicker.min.js"></script>
      <script type="text/javascript">
      $("#avatar").fileinput({
        overwriteInitial: true,
        maxFileSize: 2000,
        showClose: false,
        showCaption: false,
        showBrowse: false,
        browseOnZoneClick:true,
        removeLabel: '',
        removeIcon: '<i class="icon icon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-2',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: '<center><img src="<?php echo base_url()?>assets/admin/images/default_avatar_male.jpg" alt="Your Avatar" style="width:160px;"></center><h6 class="text-muted" style="text-align:center">Pilih Gambar Max 2 MB</h6>',
        layoutTemplates: {main2: '{preview} ' + '<div style="text-align:center">' + ' {remove} {browse}'+'</div>'},
        allowedFileExtensions: ["jpg", "png", "gif"]
      });
      </script>
      <script type="text/javascript">
      $(function() {
        $('#mulai_kerja').datetimepicker({
          pickDate: false
        });
        $('#selesai_kerja').datetimepicker({
          pickDate: false
        });
      });
      </script>
