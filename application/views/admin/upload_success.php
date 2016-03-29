
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Image Upload Test
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <h3>Your file was successfully uploaded!</h3>

            <p>The uploaded Image:</p>

            <img alt="uploaded image" src="<?=base_url(). 'uploads/' . $upload_data['raw_name'].$upload_data['file_ext'];?>">

            <p>The Thumbnail Image:</p>

            <img alt="Thumbnail image" src="<?=base_url(). 'uploads/' . $upload_data['raw_name'].'_thumb'.$upload_data['file_ext'];?>">
            <p><?php echo anchor('upload', 'Upload Another File!'); ?></p>
        </section><!-- /.content -->
		

