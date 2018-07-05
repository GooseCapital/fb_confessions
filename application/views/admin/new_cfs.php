<?php $this->load->view('/admin/header') ;?>
<div id="app">
  <div class="main-wrapper">
      <?php $this->load->view('/admin/navbar'); ?>
       <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Confessions mới</div>
          </h1>
         </section>
         <?php foreach ($new_cfs as $key) { ?>
            <div class="card" id="<?php echo $key->id; ?>">
              <div class="card-body">
                <h5 class="card-title">ID: <?php echo $key->id; ?></h5>
                <p class="card-text"><?php echo $key->cfs; ?></p>    
              </div>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="checkbox" value="<?php echo $key->id; ?>"> 
                  </div>
                </div>
                <input type="text" id='<?php echo $key->id; ?>' class="form-control" placeholder="">
              </div>
          </div>
          <?php } ?>
           <button type="button" id='upload' class="btn btn-primary">Upload</button>
            <button type="button" id='delete' class="btn btn-danger">Delete</button>
        </div>




<?php $this->load->view('/admin/footer');?>