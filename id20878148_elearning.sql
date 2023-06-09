-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2023 at 12:45 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20878148_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `PlaceOfBirth` varchar(255) NOT NULL,
  `Sex` tinyint(1) NOT NULL,
  `Jmbg` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `LastName`, `DateOfBirth`, `PlaceOfBirth`, `Sex`, `Jmbg`, `Country`, `Password`, `UserName`, `Mobile`, `Image`, `Email`) VALUES
(3, 'Aladin', 'Lakota', '1999-05-15', 'Novi Pazar', 1, '0077777777', 'Srbija', 'Admin3214.', 'aladin99', '064666666', 'IMG-646b53f45c35a3.95563476.jpg', 'aladin.dunp@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `PlaceOfBirth` varchar(255) NOT NULL,
  `Sex` tinyint(1) NOT NULL,
  `Jmbg` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Verified` tinyint(1) DEFAULT 0,
  `Mobile` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `Accepted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`Id`, `Name`, `LastName`, `DateOfBirth`, `PlaceOfBirth`, `Sex`, `Jmbg`, `Country`, `Email`, `Password`, `UserName`, `Verified`, `Mobile`, `Image`, `Code`, `Accepted`) VALUES
(12, 'Muhamed', 'Sadovic', '2000-12-22', 'Novi Pazar', 1, '7000005407', 'Srbija', 'muhamedsadovic12@gmail.com', '$2y$10$Db3hZXq1TAW/2UrIlgtPO.JrFJXjykIj3XBhaZzQG1N0sPdLKYufi', 'MuhamedSadovic0', 1, '1231231231', 'IMG-646b53f45c35a3.95563476.jpg', '9a4d7eb977', 0),
(13, 'Vahidoglu', 'Uglic', '2000-11-22', 'Novi Pazar', 1, '1234865891', 'Srbija', 'vakson12@gmail.com', '$2y$10$l2g5hVb35O3FuGLlOj3pNOAp16XFZe7u7VMuM0bSho0P/kr9OKhWK', 'VahidogluUglic0', 1, '1231231231', 'IMG-646b575b701ef0.94736194.jpg', 'a3f0447405', 1),
(14, 'Bosko', 'Amanovic', '2000-05-13', 'Raska', 1, '1235567891', 'Srbija', 'bosko.boki@gmail.com', '$2y$10$X/JyJjLbGsgBBjYnQYE/tuYGi1Gg3XKdtZP2ULMQLWt3TmgGAWM9K', 'BoskoAmanovic0', 1, '1231231231', 'IMG-646b618574af23.49092119.jpg', 'f94c7ed8ba', 1),
(15, 'Nedim', 'Semsovic', '1999-11-16', 'Novi Pazar', 1, '1234566891', 'Srbija', 'nedim200@gmail.com', '$2y$10$p68uIDYUnVQuTroUuPmlPuZnjqYozj5dhy6ZTnHm.XSBdlWHjaWmi', 'NedimNedim0', 1, '1231231231', 'IMG-647200cb31e982.00757491.jpg', '5a19609b0d', 0),
(16, 'Dzenis', 'Hadzifejzovic', '2000-08-23', 'Sjenica', 1, '7033300000', 'Srbija', 'dzenis2000@gmail.com', '$2y$10$W5XARoNd5uBLfVnHPuk4tOfzmmDM2FcHwFoa5eIs5UVdT7B7WU.J.', 'DzenisHadzifejzovic0', 1, '1231231231', 'IMG-6472067a5e0517.15317607.jpg', 'e2044c814f', 1),
(17, 'Dzenis', 'Alickovic', '1995-06-07', 'Novi Pazar', 1, '1234447891', 'Srbija', 'dzenisalickovic321@gmail.com', '$2y$10$BdNU5O7PuuWf4kI2muLT6uBt3y64krNqKkXNPaAy.5quv7po2f4xe', 'DzenisAlickovic0', 1, '1231231231', 'IMG-64720da6d9c1f5.44462397.jpg', '99206b2f52', 0),
(20, 'Nedim', 'Semsovic', '1999-01-11', 'Novi Pazar', 1, '0125485263', 'Srbija', 'alltrailers198@gmail.com', '$2y$10$8pPlCBcDh0D140xIGplZueOau7TI0nMNGZF7TmFEbpg3S14Zkl.AW', 'NedimSemsovic0', 1, '1231231231', 'IMG-64807f0196f779.46424375.jpg', '3020410635', 1);

-- --------------------------------------------------------

--
-- Table structure for table `korisnikodgovor`
--

CREATE TABLE `korisnikodgovor` (
  `Id` int(255) NOT NULL,
  `KorisnikId` int(255) NOT NULL,
  `OdgovorId` int(255) NOT NULL,
  `Odgovor` varchar(255) NOT NULL,
  `TestId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kurs`
--

CREATE TABLE `kurs` (
  `Id` int(255) NOT NULL,
  `Naziv` varchar(255) DEFAULT NULL,
  `Opis` varchar(255) NOT NULL,
  `Created` tinyint(1) NOT NULL,
  `Kreator` varchar(255) NOT NULL,
  `file_name` varchar(55) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kurs`
--

INSERT INTO `kurs` (`Id`, `Naziv`, `Opis`, `Created`, `Kreator`, `file_name`, `file_path`) VALUES
(27, 'Kulinarstvo širom sveta', 'Ovaj test će testirati vaše znanje o različitim kuhinjama i jelima širom svijeta. Pripremite se za uzbudljivo putovanje kroz kulinarske tradicije različitih zemalja. Spremni ste za izazov?', 1, 'AlmirAsotic0', 'WEBPROG TEST TEST.docx', 'uploads/6471f5a51ee704.55569344.docx'),
(28, 'Slatke poslastice širom svijeta', 'Ovaj test će testirati vaše znanje o raznovrsnim slatkim poslasticama iz različitih dijelova svijeta. Budite spremni za slatko putovanje kroz kulinarske tradicije i uživajte u slatkim zalogajima koje ove kulture nude.', 1, 'TalidaJusufovic0', 'resenja testa Talida.txt', 'uploads/6471fbf04dc068.04331431.txt'),
(29, 'Kuhinje svijeta: Jela, začini i tradicije', 'Ovaj test će testirati vaše znanje o različitim kuhinjama, karakterističnim jelima, začinima i tradicijama koje ih čine posebnim. Prikupite svoje kulinarsko znanje i spremite se za ukusno putovanje kroz različite kulture i okuse', 1, 'TalidaJusufovic0', 'resenja testa Talida.txt', 'uploads/6472077a72dd35.01122354.txt');

-- --------------------------------------------------------

--
-- Table structure for table `odgovor`
--

CREATE TABLE `odgovor` (
  `Id` int(255) NOT NULL,
  `Odgovor` varchar(255) DEFAULT NULL,
  `KursId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pitanje`
--

CREATE TABLE `pitanje` (
  `Id` int(255) NOT NULL,
  `Text` varchar(255) NOT NULL,
  `Tezina` int(255) NOT NULL,
  `KursId` int(255) NOT NULL,
  `Odgovor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pitanje`
--

INSERT INTO `pitanje` (`Id`, `Text`, `Tezina`, `KursId`, `Odgovor`) VALUES
(72, 'Koji je tradicionalni talijanski sirevi, nazvan po gradu u kojem je nastao?', 1, 27, 'Parmezan'),
(73, 'Koje je glavno začinsko bilje koje se koristi u meksičkoj kuhinji', 2, 27, 'Koriander'),
(74, 'Koji je naziv tradicionalnog japanskog rižinog vina', 3, 27, 'Sake'),
(75, 'Koje je poznato indijsko jelo od raženog kruha punjeno začinjenim krumpirom', 3, 27, 'Naan'),
(76, 'Koji je naziv tradicionalne španjolske juhe od hladnih rajčica, paprike i krastavaca', 3, 27, 'Gazpacho'),
(77, 'Koji je popularni začin u marokanskoj kuhinji, poznat po svojoj aromatičnoj i pikantnoj prirodi', 1, 27, 'Kumin'),
(78, 'Koje je tradicionalno jelo iz Grčke koje se sastoji od slojeva patlidžana, mljevenog mesa i bešamel umaka', 3, 27, 'Moussaka'),
(79, 'Koji je naziv tradicionalne brazilske slastice napravljene od kondenziranog mlijeka i čokolade', 3, 27, 'Brigadeiro'),
(80, 'Koje je tradicionalno škotsko jelo koje se sastoji od usitnjenog jagnjetine, zobenih pahuljica, luka i začina', 3, 27, 'Haggis'),
(81, 'Koje je poznato švicarsko jelo koje se sastoji od rastopljenog sira, bijelog vina i češnjaka', 1, 27, 'Fondi'),
(82, 'Koji je naziv tradicionalne talijanske slastice od kave, piškota i kremastog sira mascarponea', 2, 28, 'Tiramisu'),
(83, 'Koje je poznato austrijsko jelo od tankih slojeva tijesta punjenog orasima, bademima ili makom', 2, 28, 'Strudla'),
(84, 'Koje je poznato tursko pecivo s medom, orašastim plodovima i filom od slatkog sira', 1, 28, 'Baklava'),
(85, 'Koji je naziv tradicionalne britanske slastice od svježeg sira, slatkog vrhnja, šećera i biskvita', 3, 28, 'Cheesecake'),
(86, 'Koje je poznato američko slatko pecivo od čokolade i lješnjaka, često s dodatkom nugata ili karamela', 3, 28, 'Brownie'),
(87, 'Koji je naziv tradicionalnog japanskog slatkog desertnog jela od riže, šećera i začina', 3, 28, 'Mochi'),
(88, 'Koje je poznato francusko slatko pecivo u obliku malog kolača, obično s koricom od badema', 3, 28, 'Macaron'),
(89, 'Koji je naziv tradicionalne indonezijske slastice od lješnjaka i šećera, oblikovane u male kuglice', 3, 28, 'Kue Cubit'),
(90, 'Koje je tradicionalno francusko pecivo, izduženog oblika, punjeno čokoladom', 3, 28, 'Pain au chocolat'),
(91, 'Koji je naziv tradicionalnog indijskog slatkog jela od mlijeka, šećera i začina poput kardamoma i ružine vode', 3, 28, 'Gulab Jamun'),
(92, 'Koji je naziv tradicionalnog tajlandskog jela od piletine, riže, jaja i povrća, začinjenog s ribljim umakom i čilijem', 3, 29, 'Pad Thai'),
(93, 'Koje je poznato indijsko začinsko jelo od piletine marinirane u jogurtu i začinima, pečene u glinenom peću', 3, 29, 'Tandoori Chicken'),
(94, 'Koje je tradicionalno jelo iz Maroka koje se sastoji od kus-kusa, povrća i mesa, začinjeno raznim začinima', 2, 29, 'Tajine'),
(95, 'Koji je naziv tradicionalne grčke salate s rajčicama, krastavcima, crvenim lukom, maslinama i feta sirom', 2, 29, 'Grčka salata'),
(96, 'Koje je poznato jelo iz Kine koje se sastoji od kuhanih rezanaca s povrćem, mesom i umakom od soje', 3, 29, 'Chop Suey'),
(97, 'Koji je naziv tradicionalnog talijanskog jela od riže, bijelog vina, luka i temeljca, obično s dodatkom sira ili povrća', 3, 29, 'Rižoto'),
(98, 'Koje je poznato meksičko jelo od kukuruza, mesa, graha i začina, omotano u tortilju', 2, 29, 'Burrito'),
(99, 'Koji je naziv tradicionalne japanske suši rolice s sirom, povrćem i sirovim ribama', 3, 29, 'Maki Sushi'),
(100, 'Koje je tradicionalno jelo iz Tajlanda koje se sastoji od zelenog curry umaka s mesom ili povrćem, kokosovim mlijekom i aromatičnim začinima', 3, 29, 'Zeleni curry'),
(101, 'Koji je naziv tradicionalne indonezijske slastice od lješnjaka i riže, oblikovane u kuglice i umotane u lišće banana', 2, 29, 'Lemper');

-- --------------------------------------------------------

--
-- Table structure for table `pitanjetest`
--

CREATE TABLE `pitanjetest` (
  `Id` int(255) NOT NULL,
  `TestId` int(255) NOT NULL,
  `PitanjaId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pitanjetest`
--

INSERT INTO `pitanjetest` (`Id`, `TestId`, `PitanjaId`) VALUES
(147, 60, 80),
(148, 60, 72),
(149, 60, 78),
(150, 60, 81),
(151, 60, 76),
(152, 61, 79),
(153, 61, 77),
(154, 61, 72),
(155, 61, 81),
(156, 61, 75),
(157, 62, 85),
(158, 62, 91),
(159, 62, 84),
(160, 62, 83),
(161, 62, 82),
(162, 63, 73),
(163, 63, 79),
(164, 63, 77),
(165, 63, 74),
(166, 63, 80),
(167, 64, 81),
(168, 64, 80),
(169, 64, 73),
(170, 64, 74),
(171, 64, 76),
(172, 65, 85),
(173, 65, 87),
(174, 65, 84),
(175, 65, 82),
(176, 65, 91),
(177, 66, 94),
(178, 66, 101),
(179, 66, 100),
(180, 66, 96),
(181, 66, 98),
(182, 67, 81),
(183, 67, 74),
(184, 67, 80),
(185, 67, 72),
(186, 67, 79),
(187, 68, 77),
(188, 68, 78),
(189, 68, 73),
(190, 68, 79),
(191, 68, 72);

-- --------------------------------------------------------

--
-- Table structure for table `predavac`
--

CREATE TABLE `predavac` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `PlaceOfBirth` varchar(255) NOT NULL,
  `Sex` tinyint(1) NOT NULL,
  `Jmbg` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Accepted` tinyint(1) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `Verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `predavac`
--

INSERT INTO `predavac` (`Id`, `Name`, `LastName`, `DateOfBirth`, `PlaceOfBirth`, `Sex`, `Jmbg`, `Country`, `Email`, `Password`, `UserName`, `Mobile`, `Image`, `Accepted`, `Code`, `Verified`) VALUES
(12, 'Almir', 'Asotic', '2001-07-12', 'Sjenica', 1, '7000000007', 'Srbija', 'asotica505@gmail.com', '$2y$10$3gODcu7takIKghUUR.XDQuTiAekHIr.ECPiOGSdixNwfe0MX8tq2u', 'AlmirAsotic0', '1231231231', 'IMG-64677f186c7269.97775446.jpg', 1, '47b9717d94', 1),
(14, 'Talida', 'Jusufovic', '2003-12-11', 'Novi Pazar', 1, '1233367891', 'Srbija', 'talidalida03@gmail.com', '$2y$10$c7/LGs15nbJBg3rLCqKSUe0yM8CToJSqBcPB7m.bZPwPKs6NegV5O', 'TalidaJusufovic0', '1231231231', 'IMG-6471fad0eb4973.36284233.jpg', 1, '859d523b54', 1),
(15, 'Ermin', 'Bronja', '2000-06-30', 'Novi Pazar', 1, '1234447891', 'Srbija', 'ermin500@gmail.com', '$2y$10$rWiKQ9gv3IyqIwtGVxulee/9xzg4w9uL7IUtkd9fZ7SSr.3LiWcMC', 'ErminBronja0', '1231231231', 'IMG-647204e14204e1.42743481.jpg', 0, '475ee50c8b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Id` int(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `KursId` int(255) NOT NULL,
  `Completed` tinyint(1) NOT NULL DEFAULT 0,
  `Points` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Id`, `UserName`, `KursId`, `Completed`, `Points`) VALUES
(60, 'aladin99', 27, 1, 5),
(61, 'BoskoAmanovic0', 27, 1, 3),
(62, 'VahidogluUglic0', 28, 0, 0),
(63, 'VahidogluUglic0', 27, 0, 0),
(64, 'TalidaJusufovic0', 27, 0, 0),
(65, 'AlmirAsotic0', 28, 0, 0),
(66, 'DzenisHadzifejzovic0', 29, 0, 0),
(67, 'DzenisHadzifejzovic0', 27, 0, 0),
(68, 'NedimSemsovic0', 27, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userkurs`
--

CREATE TABLE `userkurs` (
  `Id` int(11) NOT NULL,
  `KursId` int(255) NOT NULL,
  `Completed` tinyint(1) NOT NULL,
  `KorisnikId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userkurs`
--

INSERT INTO `userkurs` (`Id`, `KursId`, `Completed`, `KorisnikId`) VALUES
(86, 27, 1, 'BoskoAmanovic0'),
(87, 27, 0, 'VahidogluUglic0'),
(88, 28, 0, 'VahidogluUglic0'),
(89, 29, 0, 'DzenisHadzifejzovic0'),
(90, 27, 0, 'DzenisHadzifejzovic0'),
(91, 27, 0, 'NedimSemsovic0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `korisnikodgovor`
--
ALTER TABLE `korisnikodgovor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Opis` (`Id`);

--
-- Indexes for table `odgovor`
--
ALTER TABLE `odgovor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pitanje`
--
ALTER TABLE `pitanje`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pitanjetest`
--
ALTER TABLE `pitanjetest`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `predavac`
--
ALTER TABLE `predavac`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `userkurs`
--
ALTER TABLE `userkurs`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `korisnikodgovor`
--
ALTER TABLE `korisnikodgovor`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kurs`
--
ALTER TABLE `kurs`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `odgovor`
--
ALTER TABLE `odgovor`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pitanje`
--
ALTER TABLE `pitanje`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `pitanjetest`
--
ALTER TABLE `pitanjetest`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `predavac`
--
ALTER TABLE `predavac`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `userkurs`
--
ALTER TABLE `userkurs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
