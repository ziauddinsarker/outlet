
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Image Upload
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php echo $error;?>

            <?php echo form_open_multipart('upload/do_upload');?>

            <input type="file" name="userfile" size="20" />

            <br /><br />

            <input type="submit" value="upload" name="upload" />

            </form>

        </section><!-- /.content -->
		

