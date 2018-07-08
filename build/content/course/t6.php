<div class="row">
	<h1 align="center"><b>TUGAS 6</b></h1>
	<br>
	<h2 align="center">JAWABAN UAS D4 LJTI 2018</h2>
	<br>
	<br>
	<h3>Jelaskan Tentang Siklus dari Cyber Kill Chain.</h3>
	<p align="justify">
		Berdasarkan paper yang dikeluarkan oleh Lockheed Martin, Intrusion Kill Chain dibagi menjadi 7 tahapan yakni Reconnaissance, 
		Weaponization, Delivery, Exploitation, Installation, Command and Control (C2), dan Actions on Objectives. Masing-masing dari 
		tahapan tersebut akan dijelaskan lebih detail pada penjelasan dibawah
	</p>
	<ul>
		<li><b>Reconnaissance</b></li>
		<p align="justify">
			Reconnaissance merupakan tahap pertama dari intrusi yang paling sering dilakukan. Terdapat berbagai macam teknik 
			untuk melakukan reconnaissance, yang paling umum reconnaissance ini dikelompokkan kedalam 2 tipe yakni Aktif dan Pasif.
		</p>
		<li><b>Weaponization</b></li>
		<p align="justify">
			Tergantung dari jumlah dan kualitas informasi yang berhasil didapatkan dari proses reconnaissance, attacker akan mulai 
			menyusun skenario serangan yang paling cocok terhadap targetnya, dan tahap ini disebut weaponization. Tahapan ini lebih 
			banyak terjadi pada sisi attacker sehingga cukup sulit dideteksi sampai serangan tersebut dijalankan.
		</p>
		<p align="justify">
			Fase ini sangat bergantung pada informasi hasil reconnaissance sehingga untuk mengurangi tingkat keberhasilan dari 
			attacker dapat dilakukan pembatasan informasi apa saja yang mungkin dapat diketahui oleh attacker pada fase 
			reconnaissance. Dan juga memastikan bahwa setiap vulnerability yang terdapat pada jaringan internal dilakukan patch 
			sebelum berhasil dieksploitasi oleh attacker.
		</p>
		<li><b>Delivery</b></li>
		<p align="justify">
			Skenario yang telah disiapkan sebelumnya pada fase weaponization kemudian dijalankan pada fase delivery. Payload 
			ataupun exploit yang telah dipilih sebelumnya akan dikemas sedemikian hingga dan dikirmkan ke target dengan berbagai 
			cara misal saja seperti lewat email, usb flash-drive yang sengaja dijatuhkan didekat lokasi target, atau melalui 
			website yang telah disusupi payload dan mengarahkan target untuk mengunjungi website tersebut. Berbagai teknik 
			delivery ini akan tergantung dari jenis informasi apa yang didapat pada fase reconnaissance dan skenario serangannya. 
			Attacker yang berpengalaman biasanya memiliki lebih dari 1 skenario untuk mengantisipasi jika skenario yang lain gagal.
		</p>
		<li><b>Exploitation</b></li>
		<p align="justify">
			Exploitation adalah tahapan selanjutnya setelah exploit atau payload berhasil dikirimkan, diterima dan dijalankan 
			oleh target. Exploit akan dijalankan dan mengeksploitasi vulnerability yang ada pada target menyebabkan perangkatnya 
			ter-compromise. Exploitini bisa diberikan langsung pada tahap delivery ataupun hanya berupa dropper dimana exploit 
			yang sesungguhnya akan didownload dari internet saat dropper tersebut dijalankan oleh target.
		</p>
		<li><b>Installation</b></li>
		<p align="justify">
			Instalasi dari Remote Access Trojan (RAT) dan backdoor pada target membuat attackermemiliki akses berkelanjutan pada 
			sistem target untuk melancarkan serangan lanjutan ataupun mengincar target lainnya. Attacker yang terlatih dan 
			berpengalaman akan dengan mudah menyembunyikan RAT dan backdoor yang diinstallnya untuk menghindari deteksi, RAT dan 
			backdoor jenis ini biasanya merupakan varian yang telah dimodifikasi.
		</p>
		<p align="justify">
			Sistem deteksi tingkat lanjut dapat diimplementasikan untuk memitigasi serangan pada tahap ini. Salah satu contoh 
			implementasi yang biasa dilakukan adalah dengan melakukan monitoring pada event logs dan registry sistem. Berbagai 
			macam perubahan pada sistem akan dideteksi oleh sistem monitoring. Application whitelisting juga bisa dipakai untuk 
			mencegah RAT dan backdoor dapat diinstall pada system.
		</p>
		<li><b>Command and Control</b></li>
		<p align="justify">
			Command and Control (C2) dipakai oleh attacker untuk mengontrol sistem target yang telah ter-compromise secara penuh. 
			C2 ini bisa diimplementasikan pada berbagai protokol tergantung dari kemampuan attacker, C2 yang umum adalah via 
			protokol yang tidak terenkripsi seperti HTTP, DNS, ICMP, dan IRC. Beberapa attacker yang terlatih akan memakai jalur 
			komunikasi terenkripsi untuk menghindari pendeteksian seperti HTTPS dan SSH.
		</p>
		<li><b>Actions on Objectives</b></li>
		<p align="justify">
			Setiap attacker pasti memiliki tujuan saat melancarkan serangannya, entah itu hanya untuk melatih kemampuan dan 
			untuk pamer atau yang lebih serius lagi seperti pencurian informasi dan cyberterrorism. Ketika attacker telah 
			berhasil mencapai targetnya maka security analyst yang melakukan NSM dan CSM sebagai defender dapat dikatakan gagal 
			dalam menjalankan tugasnya. Oleh karena itu salah satu tugas security analyst adalah untuk mencegah attacker 
			mendapatkan tujuannya, medeteksi serangannya dan memutus serangan tersebut pada fase atau tahap yang tepat sesuai 
			Intrusion Kill Chain.
		</p>
	</ul>
	<br>
	<h3>Jelaskan Dengan Singkat Perbedaan Virus, Worm dan Trojan.</h3>
	<ul>
		<li><b>Virus</b></li>
		<p align="justify">
			Virus adalah program komputer yang dapat menggandakan atau menyalin dirinya sendiri dan menyebar dengan cara menyisipkan 
			salinan dirinya ke dalam program atau dokumen lain. Tujuan pembuatannya adalan untuk merusak (misalnya merusak data pada 
			dokumen), membuat pengguna komputer merasa terganggu, maupun tidak menimbulkan efek sama sekali.
		</p>
		<p align="justify">
			Cara kerja virus adalah dimulai dari beberapa virus mempengaruhi komputer segera setelah kode mereka dijalankan; 
			virus lain tertidur sampai keadaan logis yang telah ditentukan sebelumnya terpenuhi. Pada fase infeksi, virus 
			bereplikasi sendiri dan menempel pada file .exe di dalam sistem.
		</p>
		<p align="justify">
			Contoh virus : <b>Worm, Trojan, Rain, Ohe half, Die hard,XM/Laroux,  Win95/CIH</b>.
		</p>
		<li><b>Worm</b></li>
		<p align="justify">
			Worms adalah jenis virus yang merupakan program jahat yang mereplikasi, mengeksekusi, dan menyebar di seluruh koneksi 
			jaringan secara mandiri tanpa interaksi manusia. Tujuan dibuatnya worm adalah untuk mengubah atau merusak file dan 
			program dengan memanfaatkan fitur transportasi file dan menyebar melalui jaringan.
		</p>
		<p align="justify">
			Cara kerja dimulai dari sebagian besar Worms dibuat hanya untuk mereplikasi dan menyebar di seluruh jaringan, memakan 
			sumber daya komputasi yang tersedia; Namun, beberapa Worms membawa muatan untuk merusak sistem host.
		</p>
		<p align="justify">
			Contoh : <b>I-wrom/Happy99 (Ska), I-wrom/ExploreZ IP, Sobig, Nimda ,Code Red, Siram</b>.
		</p>
		<li><b>Trojan</b></li>
		<p align="justify">
			Trojan adalah Replika atau duplikat virus. Trojan dimasukan sebagai virus karena sifat program yang tidak diinginkan 
			dan bekerja dengan sendirinya pada sebuah computer. Tujuan dibuatnya Trojan adalah untuk mengganggu program yang 
			sedang dijalankan didalam komputer dan membuat program tersebut menjadi kacau.
		</p>
		<p align="justify">
			Cara kerja yaitu penyerang mendapat akses ke password yang tersimpan di komputer. Trojan dan akan dapat membaca dokumen 
			pribadi, menghapus file dan menampilkan gambar, dan / atau menampilkan pesan di layar.
		</p>
		<p align="justify">
			Contoh : <b>WinTrojan/Bac k Orifice, WinTrojan/Eco kys(Korean)</b>.
		</p>
	</ul>
	<br>
	<h3>Sebut dan Jelaskan Tiga Arsitektur Firewall Pada Jaringan.</h3>
	<ul>
		<li><b>Sistem DHG</b></li>
		<p align="justify">
			Sistem DHG menggunakan sebuah komputer dengan (paling sedikit) dua network-interface. Interface pertama dihubungkan 
			dengan jaringan internal dan yang lainnya dengan Internet. Dual-homed host nya sendiri berfungsi sebagai bastion host 
			(front terdepan, bagian terpenting dalam firewall).
		</p>
		<li><b>Screened-host (screened-host gateway/ SHG)</b></li>
		<p align="justify">
			Pada topologi SHG, fungsi firewall dilakukan oleh sebuah screening-router dan bastion host. Router ini dikonfigurasi 
			sedemikian sehingga akan menolak semua trafik kecuali yang ditujukan ke bastion host, sedangkan pada trafik internal 
			tidak dilakukan pembatasan. Dengan cara ini setiap client servis pada jaringan internal dapat menggunakan fasilitas 
			komunikasi standard dengan Internet tanpa harus melalui proxy.
		</p>
		<li><b>Screened-subnet (screened-subnet gateway/SSG)</b></li>
		<p align="justify">
			Firewall dengan arsitektur screened-subnet menggunakan dua screening-router dan jaringan tengah (perimeter network) 
			antara kedua router tersebut, dimana ditempatkan bastion host. Kelebihan susunan ini akan terlihat pada waktu optimasi 
			penempatan server.
		</p>
	</ul>
	<br>
	<h3>Jelaskan Disertai Gambar Apa Yang Dimaksud Dengan Masquerade NAT.</h3>
	<br>
	<img src="assets/img/course/tugas_6/1.png" alt="malware" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
	<br>
	<p align="justify">
		Masquera NAT adalah salah satu bentuk translasi alamat jaringan (NAT), yang memungkinkan bagi komputer-komputer yang terhubung dalam 
		jaringan lokal yang menggunakan alamat IP privat untu berkomunikasi ke internet melalui firewall. Alamat IP yang digunakan 
		untuk menyusun jaringan lokal umumnya menggunakan alamat IP privat. Alamat IP ini tidak diroutingkan oleh jaringan publik, 
		sehingga komputer yang ada pada jaringan lokal tidak dapat langsung berhubungan dengan internet.
	</p>
	<br>
	<h3>Dengan Menggunakan Topologi Dibawah Ini, Tuliskan Script Iptables Yang Tepat Dengan Aturan :</h3>
	<br>
	<img src="assets/img/course/tugas_6/2.jpeg" alt="malware" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
	<br>
	<ul>
		<li><b>Berbagi Koneksi Dengan Menggunakan 1 IP Public.</b></li>
		<br>
		<p>iptables -t nat -A POSTROUTING -o eth1 -j MASQUERADE</p>
		<br>
		<li><b>Melakukan Drop Terhadap Selain Aplikasi SSH dan Aktivitas WEB.</b></li>
		<br>
		<p>iptables -A INPUT – p tcp –dport: 20 -j ACCEPT</p>
		<p>iptables -A INPUT – p tcp –dport: 80 -j ACCEPT</p>
		<p>iptables -A INPUT – p tcp –dport: any -j DROP</p>
	</ul>
</div>