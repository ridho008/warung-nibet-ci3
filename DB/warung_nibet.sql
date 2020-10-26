-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2020 at 07:01 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warung_nibet`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kate` varchar(50) NOT NULL,
  `slug_kate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kate`, `slug_kate`) VALUES
(1, 'Ciki', 'ciki'),
(2, 'Biskuit', 'biskuit'),
(4, 'Teka Teki', 'teka-teki'),
(5, 'Minuman', 'minuman'),
(6, 'Kue Kering', 'kue-kering'),
(7, 'Jus', 'jus'),
(8, 'Pop Ice', 'pop-ice');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `kategori_id`, `nama_produk`, `slug`, `harga`, `deskripsi`, `foto_produk`, `status`, `created_at`) VALUES
(1, 2, 'Taro Net', 'taro-net', 5000, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'c2fd73a96ff563167217f88f400c1785.jpeg', 1, '2020-10-24 14:15:36'),
(3, 2, 'Roma Kelapa', 'roma-kelapa', 5000, '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '-1_93151301-b325-4902-91cd-9664684f37eb.jpg', 1, '2020-10-26 01:47:13'),
(4, 1, 'Beng Beng', 'beng-beng', 2000, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '835fd891901ceaa8d2579805100fa55c.jpeg', 1, '2020-10-26 02:16:28'),
(5, 1, 'Chitato Sapi Panggang', 'chitato-sapi-panggang', 8000, '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'a3bf1c3098df4427b7537a167c3beed8.jpeg', 1, '2020-10-26 02:17:22'),
(6, 2, 'Slay Olay', 'slay-olay', 1000, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquam facilisis tellus tincidunt tincidunt. Quisque rutrum nisi vel ex euismod dignissim. Phasellus nulla ligula, iaculis vel tellus sed, interdum feugiat arcu. Aliquam nec est urna. Cras dictum nisi pretium vulputate luctus. Nam sit amet ex sed nibh interdum congue. Pellentesque viverra cursus feugiat. Morbi hendrerit dignissim maximus. Cras dapibus tempus lorem eget mollis. Praesent eu hendrerit magna, sit amet pulvinar risus. Proin quis pretium eros. Integer sed semper ipsum. Nam a consequat nulla, at congue est. Morbi condimentum et erat non congue. Proin diam arcu, consectetur tempus suscipit vitae, pellentesque hendrerit quam. Aenean sollicitudin quis sapien non fringilla.</p>\r\n\r\n<p>Aenean eu dui dolor. Fusce ut dui sit amet felis tempor egestas. Sed nisi nisl, efficitur et egestas ac, tincidunt vel tortor. Phasellus feugiat vitae orci nec suscipit. Maecenas justo arcu, euismod ornare feugiat vitae, finibus vitae urna. Mauris in ullamcorper nisi, et pellentesque velit. Aliquam erat volutpat. Proin tempus eu nulla ac mollis. Etiam volutpat mauris a metus tristique laoreet. Etiam convallis elit in convallis volutpat. Vestibulum eget erat vel justo malesuada pulvinar. Donec tempus ultricies tortor feugiat interdum. Nullam purus nisi, volutpat vel nisi id, hendrerit mollis neque.</p>\r\n\r\n<p>Donec consequat, tortor eu volutpat malesuada, augue sapien lacinia erat, sit amet faucibus ex odio nec leo. Phasellus quis turpis purus. Vestibulum consectetur condimentum quam, vitae euismod felis ullamcorper et. Morbi et molestie leo, nec interdum nisl. Morbi ut elit scelerisque, pellentesque elit sed, consectetur massa. Aliquam gravida purus in vehicula sollicitudin. Ut non magna felis. Duis metus elit, suscipit at odio sit amet, maximus lacinia lacus. Nunc elementum, nisi nec sollicitudin tincidunt, justo elit ultrices purus, sed scelerisque dolor libero eget sapien. Praesent purus libero, sagittis eu mi sed, dapibus ullamcorper leo.</p>\r\n\r\n<p>Etiam elementum eget nisl non gravida. Morbi imperdiet augue vitae laoreet bibendum. Sed cursus, lorem eget efficitur pulvinar, urna lectus commodo neque, fermentum ullamcorper orci est ut purus. Sed sed turpis consectetur, commodo eros non, auctor arcu. Vivamus sit amet tortor sit amet urna gravida efficitur. Etiam id tempor odio. Mauris nec nibh sodales, maximus justo ac, lobortis nunc. Donec viverra, sem vel elementum varius, nisl eros sagittis dui, a luctus metus lacus sed lacus. Ut vel dui sed leo tristique laoreet. Proin semper hendrerit nibh, in elementum risus dictum sed. Nunc quis posuere tellus, eget varius ex. Donec interdum lobortis feugiat. Duis placerat lectus orci, eget tempus odio condimentum ac. Donec ac lacinia dui, ac blandit mi. Quisque est eros, aliquam ac facilisis quis, auctor nec augue.</p>\r\n\r\n<p>Curabitur sit amet finibus sem, quis tristique sapien. Morbi consequat tincidunt molestie. Aliquam id odio ultrices, sagittis libero vitae, ultricies eros. Mauris scelerisque porttitor ipsum, in dapibus justo tempor et. Suspendisse potenti. Donec finibus in erat eget commodo. Cras ac tellus ipsum. Integer ut tincidunt purus, ac vulputate lorem. Mauris non purus dictum, sodales tellus et, ultrices massa. Aliquam erat volutpat. Duis eget purus eu massa mollis lacinia. Aenean euismod lorem a nunc suscipit, mollis cursus felis porta. Integer id ipsum sit amet tellus fermentum ullamcorper vel condimentum urna. Mauris consectetur euismod porttitor. Aliquam non aliquam ipsum, a finibus augue.</p>', '879757086d0918de78b9dbc75d484a19.jpeg', 1, '2020-10-26 02:18:56'),
(7, 1, 'Ketburi Coklat', 'ketburi-coklat', 10000, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum mi nisl, vel molestie nunc luctus sit amet. In id volutpat neque. Cras augue risus, venenatis id molestie eu, rhoncus in nulla. Sed sed leo quis diam auctor pellentesque eu nec lorem. Suspendisse aliquam eros libero, eget tincidunt orci eleifend pellentesque. Cras a placerat ex, non auctor neque. Sed aliquam, mauris et pulvinar eleifend, tellus nibh luctus dui, ac ultrices nulla nulla in mi. Aenean nec est id risus fermentum congue. Nunc venenatis dui augue, ut fringilla sapien lacinia eget. Morbi sapien eros, suscipit ut tortor vel, scelerisque ultricies dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Donec mattis fermentum justo, eu rhoncus purus convallis in. Aliquam ac consectetur enim. Morbi semper mi vel lorem placerat feugiat. Mauris rhoncus erat diam, nec pharetra purus mattis ac. Praesent id feugiat ante, in porta metus. Donec fringilla lacus magna, in finibus nulla euismod at. Suspendisse imperdiet justo eget massa lobortis, sed accumsan orci placerat. Suspendisse vestibulum libero aliquet diam imperdiet rhoncus sed ac eros. Etiam luctus feugiat aliquam. Quisque iaculis sodales felis, sed dapibus elit vehicula ut. Morbi posuere, ante in rhoncus feugiat, dolor enim ullamcorper sapien, ac blandit purus mauris in augue. Nulla facilisi. Nullam accumsan blandit malesuada. Nullam in laoreet lacus. Cras non mauris sit amet sapien bibendum commodo. Maecenas ut egestas nisi, quis convallis ex.</p>\r\n\r\n<p>In hac habitasse platea dictumst. Vestibulum efficitur arcu a dui viverra commodo. Vestibulum euismod ipsum eu augue tincidunt, a mollis dolor eleifend. Sed sagittis libero quis lectus blandit, sit amet lobortis tellus venenatis. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hac habitasse platea dictumst. Ut quis hendrerit risus. Proin ac eros ut ex porttitor luctus id tincidunt libero. Ut blandit accumsan mi, quis sagittis velit viverra vitae. Etiam fermentum velit eget libero interdum sodales.</p>', '934667794f5e02e2db2b08974eec00c4.jpeg', 1, '2020-10-26 02:25:26'),
(8, 2, 'Oreo Putih Susus', 'Oreo-Putih-Susus', 15000, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores necessitatibus, exercitationem earum optio veniam sit quasi culpa in quidem id dolores aperiam. Dolorum excepturi ratione exercitationem porro perferendis, nobis vero, voluptas, ut animi praesentium quae iste, debitis veniam corrupti ex? Hic magnam, accusamus, repellat rem autem incidunt modi. Mollitia illo sed minus earum facilis ex necessitatibus ab a iure maiores ut vero fugit quisquam ratione, consequuntur facere inventore fugiat optio at praesentium dolorum laborum excepturi, tenetur accusantium. Eos tempore eveniet dignissimos, pariatur sed rerum aut, ipsam minima nostrum, ipsum voluptates, deserunt corrupti. Dignissimos esse est laudantium minus, neque libero magnam, quos impedit, eius modi numquam. Repellat, pariatur. Porro, quidem necessitatibus iusto, animi beatae est asperiores provident sapiente minus architecto dolor.</p>', 'b8fb8598218627a57c12d134627e0f1e.jpeg', 1, '2020-10-26 04:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `telp` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `nama_user`, `username`, `password`, `telp`, `email`, `alamat`) VALUES
(1, 'Ridho Surya', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 87645361, 'ridho@gmail.com', 'Jl.lintas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
