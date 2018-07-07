# Confessions
<h2>Thêm 2 key vào /application/config/facebook.php<br></h2>
<code>$config['facebook_app_id']</code><code>$config['facebook_app_secret']<br></code>
<h2>Thêm đường link của web vào /application/config/config.php<br></h2>
<code>$config['base_url']<br></code>
<h2> Thêm id fanpage vào /application/config/page.php<br></h2>
<code>$config['page_id']</code>
<h2>Thay đổi thông tin database vào /application/config/database.php<br></h2>
<code>
  'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'cfs',
</code>
<h2>Sửa lỗi mkdir(): invalid path  </h2>
Vào application/config/config.php
<code> $config['sess_save_path'] = NULL;</code>
Thay bằng <code>$config['sess_save_path'] = sys_get_temp_dir();</code>
