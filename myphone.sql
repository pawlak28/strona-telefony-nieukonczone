-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Lut 2018, 17:46
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `myphone`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `zalogowany` int(10) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `email`, `zalogowany`, `admin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'aaaaa@o2.pl', 0, 1),
(2, 'piotrlech1', '5f89231c26afeaedc512e20d77524152', 'asdasdas@o2.pl', 0, 0),
(3, 'adamszajer123', 'ce34036006e26403bcba92331f2475b8', 'adam.szajer@gmail.com', 0, 0),
(4, 'piotrkowalski321', '03b6de70fc38eee305f242f8695e5249', 'piotrkowalski321@o2.pl', 0, 0),
(6, 'paulaaaa456', '58114e5f6561126544ac6ee47084da82', 'paulinaaaaaaalaska@neostrada.pl', 0, 0),
(7, 'filipkubat54321', '4118c942185ba2b3a4ff21a8617d851c', 'kilipfubat@o2.pl', 0, 0),
(8, 'allah321', '3477dd53da3ab7ecbaa60ded226dbd79', 'pawdawdwa@sad.pl', 0, 0),
(9, 'vrvrvrvrvrv333', '0801d272b58528b63fbf0d92c525fa24', 'adasdasd@dasdasda.pl', 0, 0),
(10, 'sdadasdasdasdas', '3256cadc51d024e6529f756ec60a5e86', 'asdasdasd@sadas.pl', 0, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
