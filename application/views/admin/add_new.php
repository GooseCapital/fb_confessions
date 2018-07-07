<?php $this->load->view('/admin/header') ;?>
<div id="app">
  <div class="main-wrapper">
      <?php $this->load->view('/admin/navbar'); ?>
       <div class="main-content">
	    <section class="section">
	        <h1 class="section-header">
	            <div>Thêm admin</div>
	          </h1>
	    </section>
	    <!-- Multiple inputs -->
	    <div class="row">
	        <div class="col-sm-8">
	            <div class="input-group mb-3">
	                <div class="input-group-prepend">
	                    <span class="input-group-text"><li class="ion ion-person"></li></span>
	                </div>
	                <input type="text" class="form-control" id='ten' placeholder="Họ Tên">
	            </div>
	            <div class="input-group mb-3">
	            	 <div class="input-group-prepend">
	                    <span class="input-group-text"><li class="ion ion-at"></li></span>
	                </div>
	                <input type="text" class="form-control" placeholder="Email" id="email" name="email">

	                <input type="text" class="form-control" placeholder="Biệt danh" id="nickname">
	                
	            </div>
	           	<p><label></label></p>
	           	<button type="button" id="add_admin" class="btn btn-primary" disabled>Chấp nhận</button>
	     		<p id="result"></p>
	        </div>

	    </div>
	   
	</div>

	        




<?php $this->load->view('/admin/footer');?>