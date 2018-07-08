<div class="row">
	<h1 align="center"><b>TUGAS 5</b></h1>
	<br>
	<h2 align="center">Perbedaan Antara Worm, Virus, Trojan dan Malware serta Penjelasan Mengenai 7 Hacking Step dan RAT (Remote Access Trojan)</h2>
	<br>
	<img src="assets/img/course/tugas_5/1.png" alt="malware" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
	<br>
	<br>
	<h3>Perubahan Paradigma Hacktivism.</h3>
	<p align="justify">
		Dalam Sertifikasi CEH terdapat 5 tahapan hacking yang harus dilakukan oleh seorang hacker. Di bawah ini merupakan 5 tahapan 
		hacking yang ada pada sertifikasi CEH :
	</p>
	<br>
	<ul>
		<li><b>Reconnaissance</b></li>
		<p align="justify">
			Reconnaissance adalah tahap mengumpulkan data, dimana hacker akan mengumpulkan data tentang target sebanyak-banyaknya. 
			Baik nama anggota keluarga, tanggal lahir, tempat kerja beserta informasi didalamnya.
		</p>
		<li><b>Scanning</b></li>
		<p align="justify">
			Mencari berbagai kemungkinan yang bisa digunakan untuk menyerang target. Merupakan tanda dari dimulainya sebuah serangan 
			hacker (pre-attack). Melalui scanning ini, hacker akan mencari berbagai kemungkinan yang bisa digunakan untuk mengambil 
			alih komputer target. Melalui informasi yang didapatkan pada tahapan scanning, hacker bisa mencari jalan masuk untuk 
			menguasai komputer target. Gaining Access.
		</p>
		<p align="justify">
			Ini merupakan tahap penerobosan setelah mengetahui kelemahan pada komputer target. Melalui semua informasi yang 
			didapatkan, hacker akan mulai menyerang komputer korban untuk menguasainya. Tahapan ini merupakan tahapan penerobosan 
			(penetration) setelah hacker berhasil mengatahui kelemahan yang ada pada komputer atau system korban melalui tahapan 
			scanning. Tahapan ini tidak harus selalu sebuah tahapan yang canggih karena hacker bisa saja memanfaatkan kelemahan user.
		</p>
		<li><b>Maintaining Access</b></li>
		<p align="justify">
			Setelah mendapatkan akses ke komputer korban maka biasanya hacker menanamkan backdoor untuk tetap menguasai komputer 
			target, meskipun sudah diperbaiki oleh yang mempunyai komputer. Setelah mendapatkan akses ke komputer korban, hacker 
			biasanya ingin tetap menguasai komputer tersebut.
		</p>
		<p align="justify">
			Ketika korban mengganti passwordnya atau ketika korban memperbaiki kelemahan yang ada, hacker biasanya tidak ingin 
			kehilangan kekuasaannya terhadap komputer tersebut. Untuk itu, biasanya sorang hacker akan berusaha mempertahankan 
			kekuasaanya terhadap komputer korban dengan berbagai cara seperti dengan menanamkan backdoor, rootkit, trojan, dll. 
			Untuk mempertahankan kekuasaanya, hacker bahkan bisa memperbaiki beberapa kelemahan yang ada pada komputer korban agar 
			hacker lain tidak bisa memanfaatkannya untuk mengambil alih komputer yang sama.
		</p>
		<li><b>Covering Tracks</b></li>
		<p align="justify">
			Proses menutupi jejak, misalnya dengan cara menghapus log file serta semua jejak yang mungkin ditinggalkan. 
			Apakah anda berminat merasakan sejuknya tidur dibalik terali besi? Hacker juga tidak ingin merasakan hal-hal 
			semacam ini karena ancaman yang sangat nyata terhadap mereka, apalagi di negara yang sudah mempunyai hukum yang jelas.
		</p>
	</ul>
	<br>
	<p align="justify">
		Selanjutnya paradigma hacktivism berubah dari 5 tahap ke 7 tahap dikarenakan penyerangan yang diakukan berubah total. 
		Penyerangaan dengan metode lama menghabiskan banyak biaya karena menyerang infrastruktur, dari luar ke dalam. Sekarang 
		telah ditemukan metode baru yaitu dengan melakukan penyerangan dari dalam lalu merembet keluar. Dengan metode baru biya 
		yang dihabiskan lebih murah. Penyerangan juga dapat dilakukan dengan mudah. Target yang di tujupun lebih fokus. Paradigma 
		hacktivism baru yang merupakan 7 tahapan biasa disebut Intrusion Kill Chain.
	</p>
	<p align="justify">
		Intrusion Kill Chain dapat didefinisikan sebagai sebuah metodologi deteksi berbasis ntrusi yang memungkinkan seorang 
		security analyst untuk fokus pada berbagai tahap pada sebuah serangan atau intrusi. Sebuah intrusi pada jaringan tidak 
		bisa terjadi begitu saja dan memerlukan beberapa tahap untuk dapat berhasil dan mencapai tujuannya.
	</p>
	<p align="justify">
		Berdasarkan paper yang dikeluarkan oleh Lockheed Martin, Intrusion Kill Chain dibagi menjadi 7 tahapan yakni Reconnaissance, 
		Weaponization, Delivery, Exploitation, Installation, Command and Control (C2), dan Actions on Objectives. Di bawah ini 
		merupakan 7 tahapan Intrusion Kill Chain :
	</p>
	<br>
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
	<br><br>
	<h3>Virus, Worm, Trojan dan Malware berdasarkan CEH.</h3>
	<br>
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
		<li><b>Malware</b></li>
		<p align="justify">
			Malware adalah Program komputer yang diciptakan dengan maksud dan tujuan utama mencari kelemahan software. Umumnya 
			Malware diciptakan untuk membobol atau merusak suatu software atau operating sistem.
		</p>
		<p align="justify">
			Cara kerja malware yaitu mencari sasaran softeare untuk dicari kelemahan software. Kemudian software tersebut 
			dirusak atau dibobol oleh malware tersebut.
		</p>
		<p align="justify">
			Contoh : <b>Virus, Worm, Wabbit, Keylogger, Browser Hijacker, Trojan Horse, Spyware, Backdoor, Dialer, 
			Exploit dan rootkit</b>.
		</p>
	</ul>
	<br><br>
	<h3>RAT (Remote Access Trojan).</h3>
	<p align="justify">
		RAT adalah singkatan dari Remote Access Trojan. Ini adalah sebuah software atau program yang digunakan hacker untuk 
		mengendalikan komputer korban sepenuhnya. Hal ini dapat mengirim kepada komputer korban dalam bentuk gambar, video atau 
		file lainnya. Beberapa jenis RAT tidak dapat di deteksi oleh antivirus apapun. Jadi berhati-hatilah dalam menjalankan 
		internet, hati-hati dengan download atau upload file pada anonim.
	</p>
	<br>
	<h4>Fungsi dari RAT</h4>
	<p align="justify">
		Setelah RAT diinstal di komputer korban oleh setiap hacker, dia dapat melakukan hampir semua hal dengan komputer itu. 
		Beberapa fungsi berbahaya yang dapat snda lakukan dengan RAT tercantum di bawah ini :
	</p>
	<ul>
		<li>Menginfeksi File</li>
		<li>Menginstal Keylogger</li>
		<li>Mengontrol Komputer Jarak jauh mulai webcam ,suara ,film dll</li>
		<li>Menggunakan PC Anda untuk menyerang website ( DDOS )</li>
		<li>Melihat Layar</li>
	</ul>
	<br>
	<h4>Fungsi dari RAT</h4>
	<p align="justify">
		Seperti yang anda lihat diatas, RAT begitu merugikan bagi korbannya. Tetapi anda tidak tahu bahwa ada RAT yang baik 
		mungkin sepeti yang anda lakukan sehari-hari. Kamu pernah mendengar TeamViewer, itu adalah salah satu software RAT yang 
		bisa anda gunakan untuk mengontrol komputer seseorang dengan izin orang tersebut, fungsinya sama halnya yang diatas, tapi 
		dengan izin.
	</p>
	<br>
	<h4>Jenis RAT</h4>
	<ul>
		<li>ProRAT</li>
		<li>CyberGate RAT</li>
		<li>DarkComet RAT</li>
	</ul>
</div>