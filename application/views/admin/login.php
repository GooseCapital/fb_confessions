<?php $this->load->view('/admin/header'); ?>
<?php if(!$this->facebook->is_authenticated()){ ?>
	<a href="<?php echo $this->facebook->login_url(); ?>">
		<div class="centered">
			<img src="<?php echo public_helper('image');?>/facebook-login.png">
		</div>
	</a>
<?php } else {redirect(base_url('admin/trang_chu'),'refresh');} ?> 
