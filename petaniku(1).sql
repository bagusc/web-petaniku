-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Sep 2022 pada 15.23
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petaniku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa`
--

CREATE TABLE `jasa` (
  `id_jasa` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nama_kelompok` varchar(255) NOT NULL,
  `jumlah_kelompok` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `category_jasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jasa`
--

INSERT INTO `jasa` (`id_jasa`, `id_users`, `nama_kelompok`, `jumlah_kelompok`, `keterangan`, `category_jasa`) VALUES
(37, 2, 'buruh desa lowong', 8, ' pemesanan jasa buruh tani pada anggota kami bisa di pesan secara satuan (jumlah buruh sesuai yang di inginkan)', '1'),
(52, 2, 'pak wawan traktor', 0, 'Quick G-1000, Kapasitas Lahan Sawah : 10.24 jam/ha\r\nKapasitas Lahan Kering :\r\n10.58 jam/ha\r\nDimensi : 2730 x 860 x 1250 mm', '2'),
(63, 2, 'buruh pilangsari', 9, 'jasa buruh tani pada kelompok kami berpengalaman, dan cepat dalam pengerjaannya.', '1'),
(64, 12, 'buruh ngering', 7, 'jasa kelompok buruh tani kami sangatlah berpengalaman dalam berbagai bidang pertanian', '1'),
(65, 12, 'traktor henry', 0, 'Quick G-3000 ZEVA, Kapasitas Lahan Sawah : 10.13 jam/ha Kapasitas Lahan Kering : 9.78 jam/ha Dimensi : 2730 x 860 x 1250 mm	\r\n', '2'),
(66, 14, 'buruh cangkringmalang', 10, 'kelompok buruh tani kami sangat ulet dan cepat dalam pengerjaannya.', '1'),
(67, 14, 'traktor beni', 0, 'Quick Impala, Kapasitas Lahan Sawah : 13.44 jam/ha\r\nKapasitas Lahan Kering :\r\n13.68 jam/ha\r\nDimensi : 2230 x 720 x 1125 mm', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif`
--

CREATE TABLE `notif` (
  `id_notif` int(11) NOT NULL,
  `id_buyer` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `date` date NOT NULL,
  `namebuyer` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `locpic` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `notif`
--

INSERT INTO `notif` (`id_notif`, `id_buyer`, `id_seller`, `id_pesan`, `date`, `namebuyer`, `telp`, `location`, `locpic`, `job`, `status`, `total`) VALUES
(27, 3, 2, 63, '2022-12-30', 'wawan', '085670892321', 'jl. imam bonjol, dusun kedungringin selatan', '524175640_g1.jpg', 'menanam', 'pending', 1280000),
(28, 3, 12, 65, '2021-06-30', 'dian', '081615501535', 'kedung', '539586398_g1.jpg', 'membajak', 'Disetujui', 195000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `sumber` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id_post`, `id_users`, `judul`, `keterangan`, `isi`, `gambar`, `sumber`) VALUES
(31, 1, 'RI Kembangkan Pertanian Robot, Petani Bisa Tahu Curah Hujan-Tanah', '', 'Jakarta - Kementerian Komunikasi dan Informatika melalui Direktorat Ekonomi Digital, Direktorat Jenderal Aplikasi Informatika (APTIKA) merealisasikan program Digitalisasi Sektor Strategis Pertanian di Kabupaten Kutai Timur.\r\nProgram ini meningkatkan adopsi teknologi digital khususnya bagi petani dengan menghadirkan nilai tambah berupa efisiensi penggunaan sumber daya dan peningkatan produktivitas hasil pertanian melalui penerapan teknologi sensor tanah dan cuaca.\r\n\r\nKetua Tim Transformasi Digital Pertanian, Maritim, dan Logistik, Wijayanto mengatakan program ini direalisasikan sejak Mei lalu untuk lima kelompok tani di Desa Miau Baru, Kecamatan Kongbeng.\r\n\r\n\r\n\"Saat ini memasuki musim panen pertama. Penerapan teknologi ini untuk memberikan nilai tambah bagi petani,\" kata Wijayanto dalam keterangannya, Jumat (26/8/2022).\r\n\r\nBaca juga:\r\nJokowi Minta Pengusaha RI Manfaatkan Peluang saat Krisis Pangan\r\nTeknologi ini menurut Wijayanto sejalan dengan keinginan Presiden Joko Widodo (Jokowi) yang mendorong agar pertanian berkontribusi terhadap ketersediaan ketahanan pangan nasional.\r\n\r\nAds by\r\n\"Dalam era industri 4.0, segala sektor tak lepas dari kemajuan teknologi. Teknologi mendorong peningkatan produktivitas dan memudahkan petani dalam mengembangkan budi daya pertanian dan usaha taninya di segala sektor,\" ucap Wijayanto.\r\n\r\nMelalui pemanfaatan teknologi digital sensor tanah dan cuaca, maka petani bisa mendapatkan banyak manfaat, seperti informasi lingkungan pertanian secara real time seperti suhu udara, curah hujan, arah angin, kelembapan tanah, suhu tanah, PH tanah, hingga electrical conductivity.\r\n\r\n\"Parameter-parameter tersebut dibutuhkan untuk mengetahui kebutuhan tanaman secara lebih presisi, sehingga mampu meningkatkan efisiensi dan produktivitas hasil panen,\" kata Wijayanto.\r\n\r\nBaca juga:\r\nNasib Petani Miris Kala Berhasil Swasembada Beras, RI Harus Apa?\r\nDalam kegiatan ini, petani diberikan pendampingan dalam hal penggunaan teknologi digital. Petani juga mendapatkan pendampingan dalam hal pengambilan baseline data pertanian setempat untuk bisa membantu memberikan rekomendasi tindakan yang diperlukan seperti jumlah air yang diperlukan tanaman, jenis pupuk yang dibutuhkan, hingga rekomendasi waktu pemupukan (Good Agriculture Practice).\r\n\r\n\"Program ini dimulai sejak pemasangan alat Internet of Things (IoT) sensor tanah dan cuaca. Selanjutnya, petani mendapatkan pendampingan agar dapat dengan mudah memanfaatkan teknologi digital ini,\" papar Wijayanto.\r\n\r\nIa berharap Kementerian Kominfo sebagai fasilitator dalam penerapan sinergi integrasi pemanfaatan teknologi digital dengan berbagai pemangku kepentingan seperti Kementerian Pertanian dan startup digital sektor pertanian mampu meningkatkan pertumbuhan ekonomi dan kesejahteraan para petani di Indonesia.', '540949205_petani.jpeg', 'Achmad Dwi Afriyadi / detikFinance / Jumat, 26 Agutus 2022 / 21:30 WIB'),
(32, 1, 'Gara-gara Ini, Hasil Panen Petani Bisa Naik Hingga 40%', '', 'Jakarta - Pandawa Agri Indonesia (PAI), perusahaan agrikultur yang menciptakan inovasi reduktan pestisida mengembangkan ekosistem pertanian end-to-end yang berkelanjutan di Mbay, Kabupaten Nagekeo, Nusa Tenggara Timur. Inisiatif Pengembangan Ekosistem Beras Natural Mbay ini merupakan satu di antara beberapa inisiasi lainnya yang dikembangkan oleh PAI bagi petani swadaya di Indonesia.\r\nBerdasarkan Laporan Dampak yang dirilis pada Rabu (10/8), tercatat sejumlah dampak positif yang dihasilkan dari inisiatif tersebut, termasuk di antaranya peningkatan produktivitas hasil panen hingga 40 persen, peningkatan pendapatan petani, dan kesuburan tanah yang berangsur meningkat.\r\n\r\nChief Executive Officer (CEO) dan Co-founder PAI, Kukuh Roxa mengatakan bahwa pihaknya selalu berusaha untuk menghasilkan produk dan layanan yang dapat membantu mewujudkan visi perusahaan untuk menciptakan pertanian yang berkelanjutan.\r\n\r\n\r\n\"Kami melihat pengembangan ekosistem smallholders ini merupakan cara yang efektif dan efisien dalam mentransformasi sistem produksi pangan menjadi lebih ramah lingkungan dan berkelanjutan,\" ujar Kukuh dalam acara Setahun Berkolaborasi dengan Petani Swadaya Nagakeo, Rabu (9/8).\r\n\r\nPerusahaan yang berasal dari Kabupaten Banyuwangi ini didirikan pada tahun 2014 dan memulai inovasinya dengan menciptakan produk reduktan pestisida. Produk ini dapat digunakan oleh petani untuk mengurangi dosis pestisida demi menghalau serangan hama pada tanaman.\r\n\r\n\r\nDi tahun 2021 lalu, PAI mulai mengembangkan ekosistem bagi petani swadaya dengan turut menghadirkan teknologi PPAI (Pendampingan Pandawa Agri Indonesia) untuk mendukung inisiatif tersebut. Teknologi PPAI secara khusus dirancang untuk memenuhi kebutuhan masyarakat pertanian di wilayah geografis dan untuk komoditas tertentu.\r\n\r\n\"Kami berharap inisiasi ini dapat mengurangi residu input sintetis secara bertahap, sehingga dapat turut memperbaiki kualitas lingkungan pertanian di Nagekeo. Selain itu, Kami berharap teknologi PPAI dapat mendukung para petani di Mbay untuk mencapai potensi maksimalnya serta meningkatkan produktivitas pertanian dan pendapatan petani,\" imbuh Kukuh.\r\n\r\nPada Pengembangan Ekosistem Beras Natural Mbay di Nusa Tenggara Timur, teknologi PPAI yang diterapkan meliputi Tujuh Intervensi berupa benih bersertifikat, pupuk mikro lengkap, mikoriza, pupuk silika, mikroba pengurai jerami untuk meningkatkan unsur organik dalam tanah, serta reduktan herbisida dan insektisida.\r\n\r\nBupati Nagekeo Johanes Don Bosco Do ikut mengapresiasi dampak positif yang telah diberikan oleh PAI. Sebab, Mbay memiliki potensi yang besar untuk dapat menjadi lumbung padi di Provinsi Nusa Tenggara Timur (NTT).\r\n\r\n\"Kami memiliki 5.000 hektar sawah, dan beras asal Mbay sudah terkenal unggul sejak dulu. Namun, beberapa tahun terakhir ini produktivitasnya cenderung stagnan dan kian menurun,\" ungkap Johanes.\r\n\r\nMenurutnya, pendampingan yang dilakukan PAI ini terbukti mampu meningkatkan kualitas dan kuantitas hasil panen, sehingga pendapatan petani meningkat dan pasokan pangan di daerah tetap terjaga', '1154324253_7bac3c4b-513e-4902-8fdf-903c94c2b5c7_169.jpg', 'Ignacio Geordi Oswaldo / Rabu, 10 Agutus 2022 / 18:29 WIB'),
(33, 1, 'Kelompok Tani di Sumedang Dapat Bantuan Mesin Pemanen Kombinasi', '', 'Jakarta - Kelompok Tani Sri Mekar Jaya Blok Dukuh Kaler Desa Keboncau Kecamatan Ujungjaya menerima bantuan mesin pemanen kombinasi (combine harvester). Bantuan ini menjadi jawaban terhadap permasalahan kekurangan tenaga dalam menggarap sawah, khususnya saat panen.\r\nPenyerahan mesin secara simbolis dilakukan Bupati Sumedang Dony Ahmad Munir usai meletakkan batu pertama pembangunan Rice Milling di Desa Sukamulya Kecamatan Ujungjaya, Selasa (12/7).\r\n\r\nKetua Kelompok Tani Sri Mekar Jaya Cawin menyebutkan regenerasi petani semakin menurun karena pelaku utamanya rata-rata sudah manula. Sementara anak mudanya lebih tertarik ke sektor perindustrian.\r\n\r\n\r\n\r\n\"Saat panen dan tanam padi menjadi masalah. Mencari pekerja susah, di mana satu hektare sawah membutuhkan 20 orang pekerja. Begitu pun pascapanen, kalau tidak ada 20 orang, susah Pak Bupati,\" ujarnya di hadapan Bupati Sumedang.\r\n\r\nBaca juga:\r\nCommand Center Pemkab Sumedang Dipuji Rektor Unpad\r\nOleh karena itu, dengan bantuan mesin combine harvester tersebut pihaknya merasa sangat terbantu karena dalam satu hari bisa menggarap 3 hektare.\r\n\r\n\"Hasilnya pun sangat maksimal. Dapat mengurangi waktu dan mutunya sangat bagus, kotoran pun bersih, tidak ada,\" ucapnya.\r\n\r\nDari segi harga jual pun, padi hasil panen dengan combine harvester lebih menjanjikan dari pada menggunakan manual.\r\n\r\n\"Kalau menggunakan combine harga jual gabah basah mencapai Rp 4.500, tapi kalau pakai manual hanya Rp 4.200. Ditambah biayanya menggunakan combine lebih hemat, efektif dan menguntungkan,\" ungkapnya.\r\n\r\nBaca juga:\r\nJadi Sentra Tembakau, Segini Dana Bagi Hasil Cukai yang Diterima Sumedang\r\nTerakhir ia mengucapkan terima kasih pasalnya untuk panen tahun sekarang lebih menguntungkan bagi para petani di wilayahnya.\r\n\r\n\"Alhamdulillah hama tidak ada, air pun stabil sehingga hasil panen menggembirakan, cukup untuk panen raya se-Kabupaten Sumedang. Saya berani jamin Pak Bupati,\" katanya.\r\n\r\nSementara itu, Dony Ahmad Munir mengatakan, pemerintah daerah membantu pengadaan mesin untuk panen berupa combine harvest untuk merontokkan padi sekaligus bisa mengeringkan.\r\n\r\n\"Ini sangat dirasakan sekali manfaatnya karena bisa cepat melakukan perontokan padi dan hasilnya padi cepat menjadi kering. Jadi lebih efektif dan efisien,\" kata Dony.\r\n\r\nBaca juga:\r\nPemkab Sumedang Kebut Program Pencegahan Stunting\r\nMenurutnya, mekanisasi di sektor pertanian sangat membantu aktivitas para petani di lapangan sekaligus meningkatkan produksi pertanian.\r\n\r\n\"Dengan cara panen seperti ini, akan meningkatkan produksi pertaniannya demi kesejahteraan petani. Untuk penangkal hamanya di sini pun ditangani secara alami yakni dengan Burung Koreak yang suka memangsa hama-hama di sawah,\" tuturnya.\r\n\r\nIa pun berjanji akan terus memperhatikan para petani dimulai dari hulu sampai hilirnya mulai dari penyediaan irigasi, penanaman, pengolahan pascapanen, bahkan off-takernya.\r\n\r\n\"Ada nilai lebih bagi para petani, terutama untuk mewujudkan ketahanan pangan dan kedaulatan negara kita, terkhusus di Kabupaten Sumedang yang selama ini surplus hasil pertaniannya,\" ucapnya.\r\n', '1886608119_kelompok-tani-di-sumedang-dapat-bantuan-mesin-pemanen-kombinasi.jpeg', 'Nur Azis - detikJabar Rabu, 13 Jul 2022 14:16 WIB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `telp` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `born` date NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `name`, `username`, `password`, `address`, `telp`, `gender`, `born`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', '', '', '', '0000-00-00', 'admin'),
(2, 'Seller', 'seller1', 'seller1', 'jatimpark', '0889888887272', 'Laki - Laki', '2000-08-23', 'seller'),
(3, 'Buyer1', 'buyer1', 'buyer1', 'buyer1buyer1', '102028812821', 'pr', '2022-08-09', 'buyer'),
(10, 'aAA', 'qa', '21213wqsaas', 'sasasa', 'saas', 'Pria', '2019-06-29', 'buyer'),
(11, 'sajasashhja`', 'ashjash', 'asq213212212112', 'asas', '+6282257367240', 'Wanita', '2022-12-31', 'seller'),
(12, 'seller dua', 'seller2', 'seller2', 'seller2', '2233232323232', 'Pria', '1997-12-31', 'seller'),
(13, 'aaa', 'adi', 'adi', 'sad', '+6282257367240', 'Pria', '2022-12-30', 'seller'),
(14, 'seller3', 'seller3', 'seller3', 'asd', '896544', 'Pria', '2022-12-31', 'seller');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indeks untuk tabel `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `notif`
--
ALTER TABLE `notif`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
