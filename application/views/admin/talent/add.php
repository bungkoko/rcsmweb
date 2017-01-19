<section>
  <div class="page-header">
		<h1>Tambah Talent</h1>
	</div>

  <ul id="crumbs">
    <li><a href="<?php echo site_url('dashboard')?>">Dashboard</a></li>
    <li><a href="<?php echo site_url('dashboard/talent')?>">Talent</a></li>
    <li>Tambah Talent</li>
  </ul>
  <div class="row-fluid">
    <form method="post" action="" enctype="multipart/form-data">
      <div class="col-md-3">
        <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
        <div class="kv-avatar center-block" style="width:200px">
          <input id="avatar" name="anggota_avatar" type="file" class="file-loading">
        </div>
      </div>
      <div class="col-md-6">
        <table border="0">
          <tr>
            <td><label>Nama</label></td>
            <td> : </td>
            <td><input name="talent_name" placeholder="Masukan Nama Talent"></td>
          </tr>
          <tr>
            <td><label>Jam Mulai</label></td>
            <td> : </td>
            <td>
              <div id="mulai_kerja" class="input-append date">
                <input data-format="hh:mm:ss" name="talent_hours_start" type="text" placeholder="Masukkan Jam Mulai Kerja"></input>
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
                <input data-format="hh:mm:ss" name="talent_hours_finish" type="text" placeholder="Masukan Jam Selesai Kerja"></input>
                <span class="add-on">
                  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                  </i>
                </span>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align:top"><label style="">Profile</label></td>
            <td> : </td>
            <td>
              <textarea name="talent_profile" rows="8" cols="120"></textarea>
            </td>
          </tr>
        </table>
        <input type="submit" class="btn btn-info" value="SIMPAN" />
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
