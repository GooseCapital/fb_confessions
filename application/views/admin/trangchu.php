<?php $this->load->view('/admin/header') ;?>
<div id="app">
    <div class="main-wrapper">
      <?php $this->load->view('/admin/navbar'); ?>
      
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Dashboard</div>
          </h1>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-primary">
                  <i class="ion ion-person"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_admin; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-danger">
                  <i class="ion ion-ios-paper-outline"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>News</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_new_cfs; ?> / <?php echo $total_cfs ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-warning">
                  <i class="ion ion-thumbsup"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>User like page</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $fan_count; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="card card-sm-3">
                <div class="card-icon bg-success">
                  <i class="ion ion-record"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Online Users</h4>
                  </div>
                  <div class="card-body">
                    NULL
                  </div>
                </div>
              </div>
            </div>    
          </div>


                <div class="card">
                  <div class="card-header">
                   
                    <h4>Danh sach admin</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>Tên</th>
                          <th>Email</th>
                          
                          <th>Biệt danh</th>
                         
                          <th>Số cfs đã đăng</th>
                        </tr>
                       	<?php foreach($members as $m): ?>
                        <tr>
                          <td><?php echo $m->name; ?></td>
                          <td><?php echo $m->email; ?></td>
                         
                          <td><?php echo $m->nickname; ?></td>
                        
                          <td><?php echo $m->so_cfs; ?></td>
                        </tr>
                        <?php endforeach; ?>
                      </table>
                    </div>
                  </div>
 
            </div>
          </div>
        </section>
      </div>

<?php $this->load->view('/admin/footer');