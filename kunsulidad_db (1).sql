-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2016 at 03:20 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kunsulidad.db`
--

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `channel` varchar(1000) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `user_id`, `channel`, `caption`, `type`, `status`) VALUES
(1, 1, '/uploads/users/captainbuggythefifth/profile/ahMBuoDIC7J4iV0xmZcXEUTnLSyW29.png', '', 1, 1),
(2, 1, '/uploads/users/captainbuggythefifth/profile/hwjVtI1r8o9F6B4gQlGHDbMi7TqzdR.png', '', 2, 1),
(20, 12, './uploads/users/gerrabno/profile/86051a25925125af00d81b0111cbc45b.jpg', '', 1, 1),
(21, 12, './uploads/users/gerrabno/background/5ad2180e3474e62ce942bdb287665d69.jpg', '', 2, 1),
(22, 13, './uploads/users/mawi/profile/2b901add532c19fbbf026c1b75485297.jpg', '', 1, 1),
(23, 13, './uploads/users/mawi/background/a00711ffe06f7f8bb2afc39e3c159464.jpg', '', 2, 1),
(24, 13, './uploads/users/mawi/profile/dabaf7d74c4bf08bf0fd9dcc6a97acf3.jpg', '', 1, 1),
(25, 13, './uploads/users/mawi/background/8271ddcad13ff5dc169fbd12bcebedce.jpg', '', 2, 1),
(26, 14, './uploads/users/ger/profile/6f6f2a712efac9e2b1c6e358ab396879.jpg', '', 1, 1),
(27, 14, './uploads/users/ger/background/80813b60dbd264a0a4a2e87e4315f136.jpg', '', 2, 1),
(28, 30, './uploads/users/YowMama6/profile/685dfbe9218068fca8c4c39305fa9af5.jpg', '', 1, 1),
(29, 30, './uploads/users/YowMama6/background/3ecd4b5a7c4a5fca3fce587401ebe771.jpg', '', 2, 1),
(30, 32, './uploads/users/YowMama8/profile/c3ab89758a2de4fd3a66fbe44ae98356.jpg', '', 1, 1),
(31, 32, './uploads/users/YowMama8/background/c10ef595413c5ef495bb8a5101e1f0a8.jpg', '', 2, 1),
(32, 32, './uploads/users/YowMama8/profile/3f13b810360cc20eab66aa80d75da01e.jpg', '', 1, 1),
(33, 32, './uploads/users/YowMama8/background/184149bdf736a37f9b93cd7e98b593bc.jpg', '', 2, 1),
(34, 33, './uploads/users/YohMama9/profile/99b5486ade952ece5bf4b2ac565f488f.jpg', '', 1, 1),
(35, 33, './uploads/users/YohMama9/background/21ebbf1acbf97a7a4a52ec9c6d7b721d.jpg', '', 2, 1),
(36, 33, './uploads/users/YohMama9/profile/af92591060de8d9bc74646d9bf712698.jpg', '', 1, 1),
(37, 33, './uploads/users/YohMama9/background/954ea77a150bcda9aa8041a8e9f3c8b2.jpg', '', 2, 1),
(38, 33, './uploads/users/YohMama9/profile/acdcf6582e34fae21e6fad7edf515eb0.jpg', '', 1, 1),
(39, 33, './uploads/users/YohMama9/background/abd0a808bbc5eb5eb8d1a116290cdf28.jpg', '', 2, 1),
(40, 34, './uploads/users/YohMama10/profile/c4da5a470749d917724033e82495ce85.jpg', '', 1, 1),
(41, 34, './uploads/users/YohMama10/background/b0275a5ae4184973265190c3cc8c3013.jpg', '', 2, 1),
(42, 35, './uploads/users/YohMama11/profile/e242f714715bbd06e31ab586bc943240.jpg', '', 1, 1),
(43, 35, './uploads/users/YohMama11/background/353d23ffffb79c9e1fa0e1c017afcc5a.jpg', '', 2, 1),
(44, 36, './uploads/users/YohMama12/profile/005a99e38204789cbdcd053ef9679961.jpg', '', 1, 1),
(45, 36, './uploads/users/YohMama12/background/e76994c298a166a494df599f30d583d8.jpg', '', 2, 1),
(46, 38, './uploads/users/YohMama14/profile/44445c85d02071b067b3e77c7c28d8cb.jpg', '', 1, 1),
(47, 38, './uploads/users/YohMama14/background/ed1d8f4cc5f7f749accc4711873cb42f.jpg', '', 2, 1),
(48, 39, './uploads/users/YohMama15/profile/58b7feead4ab1c4f01cfd48da8166def.jpg', '', 1, 1),
(49, 39, './uploads/users/YohMama15/background/03733ab9ea9d239bb5dbdd0992d959f5.jpg', '', 2, 1),
(50, 48, './uploads/users/YohMama26/profile/NPWLezBSAsithkJfUHY1b5wq8cR2CK', '', 1, 1),
(51, 48, './uploads/users/YohMama26/background/CkLF12WPlwSmsn67Gjvhu0iXg9OyZt', '', 1, 1),
(52, 48, './uploads/users/YohMama26/profile/LqS2tRIiCxXkoPGTrBUcDgEhw7vMnF.png', '', 1, 1),
(53, 48, './uploads/users/YohMama26/background/MmLAPZ72GRNYOk8eI3FSjqCngU1rlX.png', '', 1, 1),
(54, 48, './uploads/users/YohMama26/profile/Kzs7GRj9lD8fYaITiEdr5tXmNkhWwO.png', '', 1, 1),
(55, 48, './uploads/users/YohMama26/background/2uAJfkD3pgWNhOdeT0yqXc7PIQSrCl.png', '', 1, 1),
(56, 48, '/uploads/users/YohMama26/profile/LKfqZw9g1YkVCXhNznlOdDEQ6smFoI.png', '', 1, 1),
(57, 48, '/uploads/users/YohMama26/background/SEFQvIZ6yh50zuWjGsUB21NOdCMY7f.png', '', 1, 1),
(58, 48, 'http://codeigniter.kunsulidad.dev//uploads/users/YohMama26/profile/lKZ45VePoEkJ2cD1Oa6MIym3Gz9psB.png', '', 1, 1),
(59, 48, 'http://codeigniter.kunsulidad.dev//uploads/users/YohMama26/background/uaxbcoID8Uj4t3ZFNEdV096KnrzC7H.png', '', 1, 1),
(60, 48, 'http://codeigniter.kunsulidad.dev/uploads/users/YohMama26/profile/VIwmEyqJcshkKX3YH6f0uLjUPb8SM5.png', '', 1, 1),
(61, 48, 'http://codeigniter.kunsulidad.dev/uploads/users/YohMama26/background/SxgiqmkV81sAh5oPzfYaIuB6W3yFX0.png', '', 1, 1),
(62, 48, 'C:/xampp/htdocs/codeigniter.kunsulidad.devuploads/users/YohMama26/profile/GdoSY9LrQkx71fRPbFJBw4c8iVphA2.png', '', 1, 1),
(63, 48, 'C:/xampp/htdocs/codeigniter.kunsulidad.devuploads/users/YohMama26/background/xILrYFh8dj3TCRP1gbEZyUuM2VJXD6.png', '', 1, 1),
(64, 48, 'C:/xampp/htdocs/codeigniter.kunsulidad.dev/uploads/users/YohMama26/profile/E3cFbUo0YM5IpzLNwVrJy2O8fKdv1s.png', '', 1, 1),
(65, 48, 'C:/xampp/htdocs/codeigniter.kunsulidad.dev/uploads/users/YohMama26/background/oJOfGwFEy3XHCrgxUtbLNp9qiQ7auK.png', '', 1, 1),
(66, 48, './uploads/users/YohMama26/profile/u23XB6zpHKoTyVYDURlsFOAPniqIN9.png', '', 1, 1),
(67, 48, './uploads/users/YohMama26/background/JAFXLRel9MiP1cZx3CuOWNB0TIaSVY.png', '', 1, 1),
(68, 48, './uploads/users/YohMama26/profile/hfZzxdMc9FJmLNa1RCXuOyrBEbleYK.png', '', 1, 1),
(69, 48, './uploads/users/YohMama26/background/8VwJ1kWyHjDEAM7lparZIhqOudcSCt.png', '', 1, 1),
(70, 48, './uploads/users/YohMama26/profile/bnApTva97VmZC6tXFLq3roU5y2Dc4I.png', '', 1, 1),
(71, 48, './uploads/users/YohMama26/background/YU0rVdtX5JzRjDM6OTlSNkAhpQPGyW.png', '', 1, 1),
(72, 49, './uploads/users/YohMama30/profile/kg5M6W1NHLom0QUDt42AFPdsCByEbq.png', '', 1, 1),
(73, 49, './uploads/users/YohMama30/background/ybM7lSIRmQUH84Otzf3YjJTcW560A2.png', '', 1, 1),
(74, 50, './uploads/users/YohMama31/profile/S175I3w8dkR6ehE4UCrGncuWmzVfAN.png', '', 1, 1),
(75, 50, './uploads/users/YohMama31/background/mdGVQexPb73Fa0Doj4Wl9tESLJNXMn.png', '', 1, 1),
(76, 51, '/uploads/users/YohMama32/profile/NkgqROC0FHPatvXeb6IJs95KjErQh7.png', '', 1, 1),
(77, 51, '/uploads/users/YohMama32/background/3XUbWVzSKGgkPywh26FpO4tIcQaeAM.png', '', 1, 1),
(78, 52, '/uploads/users/YohMama33/profile/dG1lL2QW4qFu5rNwjZkSA0acPDpYhs.png', '', 1, 1),
(79, 52, '/uploads/users/YohMama33/background/FNYHT13U78Pu2qAobw9atdSMxVsJcL.png', '', 1, 1),
(80, 53, './uploads/users/YohMama34/profile/dwFqLP1328GlxS5KMa6j9WZIJvhofk.png', '', 1, 1),
(81, 53, './uploads/users/YohMama34/background/ZwXcCnvQfxJt4PE0ugjNKder6MUGLb.png', '', 1, 1),
(82, 54, '/uploads/users/YohMama35/profile/qJ1LgtzZSWl9CbTa7eXEwIPomrDyB2.png', '', 1, 1),
(83, 54, '/uploads/users/YohMama35/background/A0pxngu3697DybYdUR5wFKOZT1floM.png', '', 1, 1),
(84, 54, '/uploads/users/YohMama35/profile/HLaMnZIVPzbOqSxmshpCc3w5EgjNRv.png', '', 1, 1),
(85, 54, '/uploads/users/YohMama35/background/Kxri1kqj0URcXo396LPATgMdBlVsmb.png', '', 1, 1),
(86, 54, '/uploads/users/YohMama35/profile/91vPwq6UWuxzbrfGXQk4EnSsFYNhZK.png', '', 1, 1),
(87, 54, '/uploads/users/YohMama35/background/LzC9EuJBFqsHRP5IwvAN7bmZcjKaiM.png', '', 1, 1),
(88, 55, '/uploads/users/YohMama36/profile/ahMBuoDIC7J4iV0xmZcXEUTnLSyW29.png', '', 1, 1),
(89, 55, '/uploads/users/YohMama36/background/hwjVtI1r8o9F6B4gQlGHDbMi7TqzdR.png', '', 1, 1),
(90, 56, '/uploads/users/YohMama37/profile/dWMAkcbXQEKpJDzToRHwVI2uFsxPmq.png', '', 1, 1),
(91, 56, '/uploads/users/YohMama37/background/VNQwpgP7CEsfibB4aAd9tU0D8YSHLx.png', '', 2, 1),
(92, 1, './uploads/users/captainbuggythefifth/adaldkaldkasdb266660989e14a0daaf569fdb22773f4.jpg', '', 1, 1),
(93, 1, './uploads/users/captainbuggythefifth/adaldkaldkasd566f6e148ba9540293338e48263d608f.jpg', '', 1, 1),
(94, 1, './uploads/users/captainbuggythefifth/adaldkaldkasd7cb3c4a7bf3fb64527b5d8053a646b71.jpg', '', 1, 1),
(95, 1, './uploads/users/captainbuggythefifth/adaldkaldkasd46a23967c633892e202e3c592ad398ed.gif', '', 1, 1),
(96, 1, './uploads/users/captainbuggythefifth/adasdasdasdasdasdsad1568aa33d47fdb628ee39238e7fb38d9.jpg', '', 1, 1),
(97, 1, './uploads/users/captainbuggythefifth/adasdasdasdasdasdsadb7820a00cde5cf93fce1d9e90ec9917b.jpg', '', 1, 1),
(98, 1, './uploads/users/captainbuggythefifth/adasdasdasdasdasdsad4b88222eee6db06cdeaa501fbf837834.jpg', '', 1, 1),
(99, 1, './uploads/users/captainbuggythefifth/adasdasdasdasdasdsadff530502bd1e73a5007017f77f3fe583.gif', '', 1, 1),
(100, 1, './uploads/users/captainbuggythefifth/asdasdasdasdasdasdasdasdadsadsad9f3aa4e0591a3683533df6ddc18ebe5b.jpg', '', 1, 1),
(101, 1, './uploads/users/captainbuggythefifth/asdasdasdasdasdasdasdasdadsadsad0bb9ad0c0b637f4c1013c7df4554f3cc.jpg', '', 1, 1),
(102, 1, './uploads/users/captainbuggythefifth/asdasdasdasdasdasdasdasdadsadsad743e9b5db66ab12cd435d069390e11a3.gif', '', 1, 1),
(103, 1, './uploads/users/captainbuggythefifth/asdasdasdasdasdasdasdasdadsadsad95018ee43bff4e6b333e979f34b135b2.jpg', '', 1, 1),
(104, 1, './uploads/users/captainbuggythefifth/jkaksdad61755db84d7e44525e2a4bb9def56c3.jpg', '', 3, 1),
(105, 1, './uploads/users/captainbuggythefifth/jkaksda183653c4a5a7ddc6f53f7ec7ddc86417.jpg', '', 3, 1),
(106, 1, './uploads/users/captainbuggythefifth/jkaksdaa719869c0517b3fd4e1ec6a54b16faf3.jpg', '', 3, 1),
(107, 1, './uploads/users/captainbuggythefifth/jkaksda7f79870af59cfe59666342b3ebe63896.gif', '', 3, 1),
(108, 1, './uploads/users/captainbuggythefifth/asdasdadadadadad771fa5f8c47293cf5c5b4d05264fc95.jpg', '', 3, 1),
(109, 1, './uploads/users/captainbuggythefifth/asdasdadadadadaee128fc54cc38f08efec42c47e776df1.gif', '', 3, 1),
(110, 1, './uploads/users/captainbuggythefifth/asdasdadadadadaed29c6a7491ab64c4428dcd7398e8f86.jpg', '', 3, 1),
(111, 1, './uploads/users/captainbuggythefifth/asdasdadadadada8e3406909403692cab5454d5a14608c5.jpg', '', 3, 1),
(112, 1, './uploads/users/captainbuggythefifth/asdasdasdasdasdasde2ee5525e9a56bcade0a1a8c55049604.jpg', '', 3, 1),
(113, 1, './uploads/users/captainbuggythefifth/asdasdasdasdasdasd292dafb1b06ca0df81815924717e48da.jpg', '', 3, 1),
(114, 1, './uploads/users/captainbuggythefifth/asdasdasdasdasdasdfead577406fda5ef965b89de04475930.jpg', '', 3, 1),
(115, 1, './uploads/users/captainbuggythefifth/asdasdasdasdasdasd47df2f2345258ac376c655a4abf6e5f8.gif', '', 3, 1),
(116, 1, './uploads/users/captainbuggythefifth/JOHN7e11cf3ae3e286d78be3da20a39a8e20.jpg', '', 3, 1),
(117, 1, './uploads/users/captainbuggythefifth/alalah/f937e4e0a4cc4e7ba1adf4015d640ecc.jpg', '', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `twitter` varchar(400) NOT NULL,
  `facebook` varchar(400) NOT NULL,
  `linkedin` varchar(400) NOT NULL,
  `googleplus` varchar(400) NOT NULL,
  `instagram` varchar(400) NOT NULL,
  `github` varchar(400) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `user_id`, `twitter`, `facebook`, `linkedin`, `googleplus`, `instagram`, `github`, `status`) VALUES
(1, 0, 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 1),
(2, 0, 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 1),
(3, 0, 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 1),
(4, 0, 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 'https://www.youtube.com/watch?v=gS9o1FAszdk', 1),
(5, 38, 'https://www.youtube.com/watch?v=mk48xRzuNvA', 'https://www.youtube.com/watch?v=mk48xRzuNvA', 'https://www.youtube.com/watch?v=mk48xRzuNvA', 'https://www.youtube.com/watch?v=mk48xRzuNvA', 'https://www.youtube.com/watch?v=mk48xRzuNvA', 'https://www.youtube.com/watch?v=mk48xRzuNvA', 1),
(6, 39, 'https://www.youtube.com/watch?v=WIm1GgfRz6M', 'https://www.youtube.com/watch?v=WIm1GgfRz6M', 'https://www.youtube.com/watch?v=WIm1GgfRz6M', 'https://www.youtube.com/watch?v=WIm1GgfRz6M', 'https://www.youtube.com/watch?v=WIm1GgfRz6M', 'https://www.youtube.com/watch?v=WIm1GgfRz6M', 1),
(7, 49, '', 'https://www.facebook.com/app_scoped_user_id/10208119428176791/', '', '', '', '', 1),
(8, 50, '', 'https://www.facebook.com/app_scoped_user_id/10208119428176791/', '', '', '', '', 1),
(9, 51, '', 'https://www.facebook.com/app_scoped_user_id/10208119428176791/', '', '', '', '', 1),
(10, 53, '', 'https://www.facebook.com/app_scoped_user_id/10208119428176791/', '', '', '', '', 1),
(11, 54, '', 'https://www.facebook.com/app_scoped_user_id/10208119428176791/', '', '', '', '', 1),
(12, 55, '', 'https://www.facebook.com/app_scoped_user_id/10208119428176791/', '', '', '', '', 1),
(13, 56, '', 'https://www.facebook.com/app_scoped_user_id/10208119428176791/', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `current_photo_profile_id` int(11) NOT NULL,
  `current_photo_background_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `middle_name`, `profession`, `username`, `age`, `address`, `phone`, `email`, `password`, `current_photo_profile_id`, `current_photo_background_id`, `status`) VALUES
(1, 'Gaudencio', 'Teves V', 'Racho', 'Web Developer', 'captainbuggythefifth', 26, 'Liloan', '09238495069', 'captainbuggythefifth@gmail.com', '123456', 117, 0, 1),
(40, 'Ronnel', 'Rabino', '', '', 'ger', 0, '', '', 'ger@gmail.com', '123456', 0, 0, 1),
(41, 'Gaudencio', 'Teves V', '', '', 'YohMama15', 0, '', '', 'YohMama15@gmail.com', 'YohMama15', 0, 0, 1),
(42, 'YohMama20', 'YohMama20', '', '', 'YohMama20', 0, '', '', 'YohMama20@gmail.com', 'YohMama20', 0, 0, 1),
(43, 'YohMama21', 'YohMama21', '', '', 'YohMama21', 0, '', '', 'YohMama21@gmail.com', 'YohMama21', 0, 0, 1),
(44, 'YohMama22', 'YohMama22', '', '', 'YohMama22', 0, '', '', 'YohMama22@gmail.com', 'YohMama22', 0, 0, 1),
(45, 'YohMama23', 'YohMama23', '', '', 'YohMama23', 0, '', '', 'YohMama23@gmail.com', '123456', 0, 0, 1),
(46, 'YohMama24', 'YohMama24', '', '', 'YohMama24', 0, '', '', 'YohMama24@gmail.com', 'YohMama24', 0, 0, 1),
(47, 'YohMama25', 'YohMama25', '', '', 'YohMama25', 0, '', '', 'YohMama25@gmail.com', 'YohMama25', 0, 0, 1),
(48, 'YohMama26', 'YohMama26', '', '', 'YohMama26', 0, '', '', 'YohMama26@gmail.com', 'YohMama26', 0, 0, 1),
(49, 'YohMama30', 'YohMama30', '', '', 'YohMama30', 0, '', '', 'YohMama30@gmail.com', 'YohMama30', 0, 0, 1),
(50, 'YohMama31', 'YohMama31', '', '', 'YohMama31', 0, '', '', 'YohMama31@gmail.com', 'YohMama31', 0, 0, 1),
(51, 'Gaudencio', 'Teves V', '', '', 'YohMama32', 0, '', '', 'YohMama32@gmail.com', 'YohMama32', 0, 0, 1),
(52, 'Gaudencio', 'Teves V', '', '', 'YohMama33', 0, '', '', 'YohMama33@gmail.com', 'YohMama33', 0, 0, 1),
(53, 'Gaudencio', 'Teves V', '', '', 'YohMama34', 0, '', '', 'YohMama34@gmail.com', 'YohMama34', 0, 0, 1),
(54, 'Gaudencio', 'Teves V', '', '', 'YohMama35', 0, '', '', 'YohMama35@gmail.com', 'YohMama35', 0, 0, 1),
(55, 'Gaudencio', 'Teves V', '', '', 'YohMama36', 0, '', '', 'YohMama36@gmail.com', 'YohMama36', 0, 0, 1),
(56, 'Gaudencio', 'Teves V', '', '', 'YohMama37', 0, '', '', 'YohMama37@gmail.com', 'YohMama37', 0, 0, 1),
(57, 'Gaudencio', 'Teves V', '', '', 'asdasdsad', 0, '', '', 'asdasdad@gmail.com', '123456', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
