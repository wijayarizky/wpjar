<div class="row">
	<h1 align="center"><b>TUGAS 3</b></h1>
	<br>
	<h2 align="center">Routing Static</h2>
	<br>
	<h2>Tujuan</h2>
	<ul>
		<li>Memahami cara routing.</li>
		<li>Dapat memecahkan masalah routing dari topologi yang diberikan.</li>
	</ul>
	<br>
	<h2>Dasar Teori</h2>
	<p align="justify">
		Routing adalah sebuah alat yang mengirimkan paket data melalui se-buah jaringan atau Internet menuju tujuannya, melalui 
		sebuah proses yang dikenal sebagai rout-ing. Proses routing terjadi pada lapisan 3 (Lapisan jaringan seperti Internet 
		Protocol) dari protokol tumpukan (stack protocol) tujuh-lapis OSI.
	</p>
	<br>
	<h2>Konsep Dasar Routing</h2>
	<p align="justify">
		Dalam jaringan WAN kita sering mengenal yang namanya TCP/IP (Transmission Control Protocol/ Internet Protocol) sebagai 
		alamat sehingga pengiriman paket data dapat sampai ke ala-mat yang dituju (host tujuan). TCP/IP membagi tugas 
		masing-masingmulai dari penerimaan paket data sampai pengiriman paket data dalam sistem sehingga jika terjadi permasalahan 
		dalam pengi-riman paket data dapat dipecahkan dengan baik. Berdasarkan pengiriman paket data routing dibedakan menjadi 
		routing lansung dan routing tidak langsung.
	</p>
	<br>
	<h2>Jenis Konfigurasi Routing</h2>
	<ul align="justify">
		<li>
			<b>Static Routing</b>, dibangun pada jaringan yang memiliki banyak gateway. jenis ini hanya memungkinkan untuk jaringan 
			kecil dan stabil.
		</li>
		<li>
			<b>Dinamic Routing</b>, biasanya digunakan pada jaringan yang memiliki lebih dari satu rute. Dinamic routing memerlukan 
			routing protocol untuk membuat tabel routing yang dapat memakan resource komputer.
		</li>
	</ul>
	<br>
	<h2>Subnetting</h2>
	<p align="justify">
		Subnetting adalah teknik memecah suatu jaringan besar menjadi jaringan yang lebih kecil dengan cara mengorbankan bit Host 
		ID pada subnet mask untuk dijadikan Network ID baru. Subnetting merupakan teknik memecah network menjadi beberapa subnetwork 
		yang lebih kecil. Subnetting hanya dapat dilakukan pada IP addres kelas A, IP Address kelas B dan IP Address kelas C. Dengan 
		subnetting akan menciptakan beberapa network tambahan, tetapi mengurangi jumlah maksimum host yang ada dalam tiap network 
		tersebut.
	</p>
	<br>
	<h2>Tujuan Subnetting</h2>
	<p align="justify">
		Mengalokasikan IP address yang terbatas supaya lebih efisien. Jika internet terbatas oleh alamat-alamat di kelas A, B, dan C, 
		tiap network akan memliki 254, 65.000, atau 16 juta IP ad-dress untuk host devicenya. Walaupun terdapat banyak network dengan 
		jumlah host lebih dari 254, namun hanya sedikit network (kalau tidak mau dibilang ada) yang memiliki host sebanyak 65.000 
		atau 16 juta. Dan network yang memiliki lebih dari 254 device akan membutuhkan alokasi kelas B dan mungkin akan menghamburkan 
		percuma sekitar 10 ribuan IP address.
	</p>
	<p align="justify">
		Alasan kedua adalah, walaupun sebuah organisasi memiliki ribuan host device, men-goperasikan semua device tersebut di dalam 
		network ID yang sama akan memperlambat network. Cara TCP/IP bekerja mengatur agar semua komputer dengan network ID yang sama 
		harus berada di physical network yang sama juga. Physical network memiliki domain broadcast yang sama, yang berarti sebuah 
		medium network harus membawa semua traffic untuk network. Karena alasan kinerja, network biasanya disegmentasikan ke dalam 
		domain broadcast yang lebih kecil – bahkan lebih kecil – dari Class C address.
	</p>
	<br>
	<h2>Manfaat Subnetting</h2>
	<p>Manfaat dari subnetting adalah sebagai berikut :</p>
	<ul align="justify">
		<li>
			Untuk mengefisienkan pengalamatan (misal untuk jaringan yang hanya mempunyai 10 host, kalau kita menggunakan kelas C 
			saja terdapat 254 – 10 =244 alamat yang tidak terpakai).
		</li>
		<li>
			Membagi satu kelas network atas sejumlah subnetwork dengan arti membagi suatu kelas jaringan menjadi bagian-bagian 
			yang lebih kecil.
		</li>
		<li>
			Menempatkan suatu host, apakah berada dalam satu jaringan atau tidak. Menempatkan sua-tu host, apakah berada dalam 
			satu jaringan atau tidak.
		</li>
		<li>
			Untuk mengatasi masalah perbedaaan hardware dengan topologi fisik jaringan.
		</li>
		<li>
			Untuk mengefisienkan alokasi IP Address dalam sebuah jaringan supaya bisa memaksimal-kan penggunaan IP Address.
		</li>
		<li>
			Mengatasi masalah perbedaan hardware dan media fisik yang digunakan daam suatu net-work, karena Router IP hanya 
			dapat mengintegrasikan berbagai network dengan media fisik yang berbeda jika setiap network memiliki address network 
			yang unik.
		</li>
		<li>
			Meningkatkan security dan mengurangi terjadinya kongesti akibat terlalu banyaknya host dalam suatu network.
		</li>
	</ul>
	<br>
	<h2>Langkah Kerja</h2>
	<p>Berikut ini langkah kerja yang perlu dilakukan dalam menyelesaikan percobaan routing ini :</p>
	<ul align="justify">
		<li>
			Buat Topologi jaringan pada Packet Tracer.
		</li>
		<li>
			Memasukkan IP dari perangkat PC, Server dan Router.
		</li>
		<li>
			Menentukkan IP dari perangkat yang di subnet.
		</li>
		<li>
			Routing jaringan dari topologi pada percobaan beserta metricnya (Jenis Router dibebaskan).
		</li>
		<li>
			Lakukan PING untuk mengecek apakah PC Client tersambung pada jaringan.
		</li>
	</ul>
	<br>
	<!-- Topologi -->
	<h2>Gambar Topologi</h2>
	<img src="assets/img/course/tugas_3/topologi.png" alt="topologi 1" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
	<br>
	<h2>Routing Table</h2>
	<ul>
		<h3><li>Router Ft Worth</li></h3>
		<img src="assets/img/course/tugas_3/topologi_rtr1.png" alt="R. Table R1">
		<h3><li>Router Houston</li></h3>
		<img src="assets/img/course/tugas_3/topologi_rtr2.png" alt="R. Table R2">
		<h3><li>Router ISP</li></h3>
		<img src="assets/img/course/tugas_3/topologi_rtr3.png" alt="R. Table R3">
	</ul>
	<br>
	<h2>Hasil Ping</h2>
	<ul>
		<h3><li>Ping PC1 ke Server2</li></h3>
		<img src="assets/img/course/tugas_3/topologi_ping_pc1s2.png" alt="Ping PC1S2">
		<h3><li>Ping PC1 ke PC3</li></h3>
		<img src="assets/img/course/tugas_3/topologi_ping_pc1pc3.png" alt="Ping PC1PC3">
		<h3><li>Ping PC1 ke Ext. Web Server</li></h3>
		<img src="assets/img/course/tugas_3/topologi_ping_pc1ext.png" alt="Ping PC1EXT">
		<h3><li>Ping PC4 ke Ext. Web Server</li></h3>
		<img src="assets/img/course/tugas_3/topologi_ping_pc4ext.png" alt="Ping PC4EXT">
		<h3><li>Ping PC4 ke Server1</li></h3>
		<img src="assets/img/course/tugas_3/topologi_ping_pc4s1.png" alt="Ping PC4S1">
		<h3><li>Ping Ext. Web Server ke Server3</li></h3>
		<img src="assets/img/course/tugas_3/topologi_ping_exts3.png" alt="Ping EXTS3">
	</ul>
</div>