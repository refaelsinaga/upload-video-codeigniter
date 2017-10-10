# upload-video-codeigniter

Upload File Video Dengan Codeigniter
* Kita perlu menambahkan mime untuk file dengan format .flv , .wmv, dan .mp4 agar file-file video tersebut bisa diupload 
  dengan codeigniter. Oleh karena itu buka file mime.php yang ada di application/config/mimes.php.
  Lalu tambahkan list berikut:
  
      'wmv'	=>	array('video/wmv', 'video/x-ms-wmv', 'flv-application/octet-stream', 'application/octet-stream'),
      'mp4'	=>	'video/mp4',
      'flv'	=>	array('video/flv', 'video/x-flv', 'flv-application/octet-stream', 'application/octet-stream')
      
    atau
      
      'mp4' => 'video/mp4',
      '3gp' => 'video/3gpp',
      'flv'   => array('video/x-flv', 'flv-application/octet-stream', 'application/octet-stream')
      
* Karena biasanya format video itu ukuran file nya besar, maka kita perlu menambahkan besar maksimum ukuran file yang 
  bisa di upload dengan php. Untuk itu kita perlu mengubah file php.ini , 
      Setelah kita berhasil menemukan dan membuka file php.ini barulah kita meng-edit file php.ini sebagai berikut:
      Perhatikan potongan kode di bawah:
      Ubah value baris ke 770 dengan nilai yang dikehendaki, sebagai contoh saya ubah menjadi 1000M
      
          post_max_size=1000M
          
      Ubah value baris ke 992 dengan nilai yang dikehendaki, sebagai contoh saya ubah menjadi 1000M
          
          upload_max_filesize = 1000M
          
      Kemudian save hasil edit php.ini, dan jangan lupa untuk restart apache

      Selanjutnya, pastikan parameter yang digunakan dalam menjalankan library file upload telah disetting dengan benar 
      seperti berikut : 
          $config['upload_path'] = './uploads/';
          $config['allowed_types'] = 'mp4|3gp|flv';
          $config['max_size'] = '20000';  
          $this->load->library('upload', $config);
  
