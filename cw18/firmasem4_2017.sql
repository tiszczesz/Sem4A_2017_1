-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Mar 2017, 15:50
-- Wersja serwera: 10.1.9-MariaDB
-- Wersja PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `firmasem4_2017`
--
CREATE DATABASE IF NOT EXISTS `firmasem4_2017` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `firmasem4_2017`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

DROP TABLE IF EXISTS `pracownicy`;
CREATE TABLE `pracownicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `pensja` int(11) NOT NULL,
  `stanowiskoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `imie`, `nazwisko`, `pensja`, `stanowiskoid`) VALUES
(1, 'Adam', 'Nowak', 3400, 1),
(2, 'Maria', 'Gruszka', 5200, 2),
(3, 'Tomasz', 'Hajduk', 4500, 3),
(4, 'Karolina', 'Urban', 3300, 3),
(5, 'Urszula', 'Porębska', 4500, 4),
(6, 'Henryk', 'Ruszaj', 3500, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stanowiska`
--

DROP TABLE IF EXISTS `stanowiska`;
CREATE TABLE `stanowiska` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `stanowiska`
--

INSERT INTO `stanowiska` (`id`, `nazwa`) VALUES
(1, 'kierowca'),
(2, 'kierownik'),
(3, 'sprzedawca'),
(4, 'pracownik fizyczny'),
(5, 'asystent');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stanowiska`
--
ALTER TABLE `stanowiska`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `stanowiska`
--
ALTER TABLE `stanowiska`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
