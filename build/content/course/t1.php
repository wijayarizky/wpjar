<div class="row">
	<h1 align="center"><b>TUGAS 1</b></h1>
	<br>
	<h2 align="center">Seputar Debian</h2>
	<br>
	<h2>SUDO</h2>
	<br>
	<p align="justify">
		Merupakan suatu perintah yang berguna untuk memberikan akses root ke suatu pengguna dengan menggunakan password-nya 
		sendiri (bukan password root). Hal ini dikarenakan terkadang beberapa administrator bekerja dalam satu jaringan yang 
		sama dan apabila saling sharing password root maka pada saat kesalahan terjadi kita tidak akan tahu hal itu dibuat oleh 
		siapa dikarenakan akses yang sama yaitu root. Selain itu dalam sudo package program kita juga bisa melakukan konfigurasi 
		sudoers file untuk menambahkan user mana saja yang dapat mengakses sudo dan perintah apa saja yang boleh mereka jalankan 
		sebagai root.
	</p>
	<br>
	<h2>Debian File System</h2>
	<br>
	<p align="justify">
		File sistem Debian merupakan suatu file yang tersimpan di dalam OS Debian yang mendefinisikan bagaimana suatu suatu data 
		atau perangkat dikelola dalam hard disk dan biasanya file ini berisi beberapa baris data yang menunjukkan beberapa field 
		yaitu :
	</p>
	<ul>
		<li>Device to mount</li>
		<p align="justify">
			Field ini bisa berupa partisi lokal (HDD, CD-ROM) maupun file sistem jarak jauh (NFS), da field ini bisanya sering 
			diganti menggunakan UUID (unique ID dari file sistem tersebut).
		</p>
		<li>Mount point</li>
		<p align="justify">
			Menunjukkan lokasi di lokal file sistem dimana suatu perangkat, partisi maupun sistem jarak jauh akan dipasang / di-load.
		</p>
		<li>Type</li>
		<p align="justify">
			Field ini mendefinisikan file sistem apa yang digunakan pada perangkat yang sedang dipasang (ext4, ntfs).
		</p>
		<li>Options</li>
		<p align="justify">
			Mendefinisikan rule dari suatu file sistem yang dimana rule ini berbeda – beda, tergantung dari file sistem 
			apa yang sedang digunakan.
		</p>
	</ul>
	<br>
	<h2>Systemd</h2>
	<br>
	<p align="justify">
		Systemd merupakan system init default dari Debian Jessie yang dimana sebelumnya Debian menggunakan system v yang merupakan 
		init system yang sangan tradisional. Systemd dapat melakukan eksekusi beberapa proses serta mengatur pengaturan dari system 
		seperti keyboard, driver, network dan services.
	</p>
	<br>
	<br>
	<h2>OpenSSH - Server</h2>
	<br>
	<p align="justify">
		SSH (Secure SHell) merupakan protocol yang mengamankan konektivitas mulai dari autentikasi sampai enkripsi data. OpenSSH 
		dibagi menjadi dua paket yaitu OpenSSH – Server dan Open SSH – Client yang dimana OpenSSH – Server merupakan server yang 
		menyediakan protokol SSH sehingga client site dapat terkoneksi ke server tersebut menggunakan koneksi SSH.
	</p>
</div>