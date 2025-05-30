<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		<?php if(!empty($site_name)){ echo $site_name; } ?>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo site_url(); ?>/manager"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Tribute</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
             “Terima kasih kepada seluruh pendidik, pengembang, dan pengguna yang telah menjadi bagian penting dalam terwujudnya aplikasi ujian online ini. Semangat dan dedikasi kalian adalah inspirasi utama di balik karya ini.”
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    <div class="box box-primary collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Perjanjian Penggunaan</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <dl>
                <dd>
                    Dengan menggunakan aplikasi ujian online ini, maka anda setuju untuk :
                    <ol>
                        <li>pengguna berkewajiban menggunakan aplikasi secara jujur dan bertanggung jawab,serta tidak melakukan tindakan yang merugikan sistem atau pengguna lain.</li>
                        <li>pengguna wajib menjaga kerahasiaan data akun dan tidak membagikan informasi tersebut pada pihak lain.</li>
                        <li>menggunakan aplikasi hanya untuk tujuan dan sesuai degan ketentuan yang telah di tetapkan</li>
                    </ol>
                    Semoga Aplikasi Ujian Online ini dapat bermanfaat untuk kita semua.
                </dd>
            </dl>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
	<div class="callout callout-info">
    	<h4>Informasi</h4>
        <p>Ini adalah area administratif, yang memiliki platform dan bahasa user-friendly untuk membuat, mengelola dan melaksanakan ujian online.</p>
    </div>
    <div class="box">
        <div class="box-header with-border">
            <div class="box-title">Konfigurasi System</div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <b><u>Waktu Server</u></b>
                    <br />
                    <b><?php if(!empty($waktu_server)){ echo $waktu_server; } ?></b>
                    <br />
                    Pastikan waktu server sesuai dengan waktu saat ini. Jika ada perbedaan, cek timezone server dan timezone di konfigurasi PHP.
                </div>
                <div class="col-md-4">
                    <b><u>Informasi Konfigurasi Upload PHP</u></b>
                    <br />
                    POST_MAX_SIZE = <?php if(!empty($post_max_size)){ echo $post_max_size; } ?>
                    <br />
                    UPLOAD_MAX_FILESIZE = <?php if(!empty($upload_max_filesize)){ echo $upload_max_filesize; } ?>
                </div>
                <div class="col-md-4">
                    <b><u>Folder Upload</u></b>
                    <br />
                    Folder "uploads" = <?php if(!empty($dir_public_uploads)){ echo $dir_public_uploads; } ?>
                    <br />
                    Folder "public/uploads" = <?php if(!empty($dir_uploads)){ echo $dir_uploads; } ?>
                    <br />
                    Pastikan kedua folder diatas memiliki nilai Writeable.
                </div>
            </div>
            <p>
            </p>
        </div>
    </div>
    </div><!-- /.box -->
</section><!-- /.content -->