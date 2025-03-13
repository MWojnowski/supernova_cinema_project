-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Cze 2022, 13:30
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kino2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `Id_filmu` int(11) NOT NULL,
  `nazwa` varchar(64) NOT NULL,
  `id_miasta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`Id_filmu`, `nazwa`, `id_miasta`) VALUES
(1, 'Detektyw Bruno\n', 1),
(2, 'Doktor Strange', 1),
(3, 'Foki kontra rekiny', 1),
(4, 'Książę', 2),
(5, 'Top Gun Maverick', 2),
(6, 'Jurassic World: Dominion', 2),
(7, 'Pan Wilk i spółka', 3),
(8, ' Sonic 2', 3),
(9, 'Złoto', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miasta`
--

CREATE TABLE `miasta` (
  `id_miasta` int(11) NOT NULL,
  `miasto` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `miasta`
--

INSERT INTO `miasta` (`id_miasta`, `miasto`) VALUES
(1, 'Zabrze'),
(2, 'Gliwice'),
(3, 'Katowice');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miejsca`
--

CREATE TABLE `miejsca` (
  `id_miejsca` int(11) NOT NULL,
  `rzad` char(1) NOT NULL,
  `numer` int(20) NOT NULL,
  `typ` varchar(32) NOT NULL,
  `cena` double NOT NULL,
  `stan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `miejsca`
--

INSERT INTO `miejsca` (`id_miejsca`, `rzad`, `numer`, `typ`, `cena`, `stan`) VALUES
(1, 'A', 1, 'zwykłe', 16.3, 'wolne'),
(2, 'A', 2, 'zwykłe', 16.3, 'wolne'),
(3, 'A', 3, 'zwykłe', 16.3, 'wolne'),
(4, 'A', 4, 'zwykłe', 16.3, 'wolne'),
(5, 'A', 5, 'zwykłe', 16.3, 'wolne'),
(6, 'A', 6, 'zwykłe', 16.3, 'wolne'),
(7, 'A', 7, 'zwykłe', 16.3, 'wolne'),
(8, 'A', 8, 'zwykłe', 16.3, 'wolne'),
(9, 'A', 9, 'zwykłe', 16.3, 'wolne'),
(10, 'A', 10, 'zwykłe', 16.3, 'wolne'),
(11, 'B', 1, 'zwykłe', 16.3, 'wolne'),
(12, 'B', 2, 'zwykłe', 16.3, 'wolne'),
(13, 'B', 3, 'zwykłe', 16.3, 'wolne'),
(14, 'B', 4, 'zwykłe', 16.3, 'wolne'),
(15, 'B', 5, 'zwykłe', 16.3, 'wolne'),
(16, 'B', 6, 'zwykłe', 16.3, 'wolne'),
(17, 'B', 7, 'zwykłe', 16.3, 'wolne'),
(18, 'B', 8, 'zwykłe', 16.3, 'wolne'),
(19, 'B', 9, 'zwykłe', 16.3, 'wolne'),
(20, 'B', 10, 'zwykłe', 16.3, 'wolne'),
(21, 'C', 1, 'VIP', 20.3, 'wolne'),
(22, 'C', 2, 'VIP', 20.3, 'wolne'),
(23, 'C', 3, 'VIP', 20.3, 'wolne'),
(24, 'C', 4, 'VIP', 20.3, 'wolne'),
(25, 'C', 5, 'VIP', 20.3, 'wolne'),
(26, 'C', 6, 'VIP', 20.3, 'wolne'),
(27, 'C', 7, 'VIP', 20.3, 'wolne'),
(28, 'C', 8, 'VIP', 20.3, 'wolne'),
(29, 'C', 9, 'VIP', 20.3, 'wolne'),
(30, 'C', 10, 'VIP', 20.3, 'wolne'),
(31, 'D', 1, 'zwykłe', 16.3, 'wolne'),
(32, 'D', 2, 'zwykłe', 16.3, 'wolne'),
(33, 'D', 3, 'zwykłe', 16.3, 'wolne'),
(34, 'D', 4, 'zwykłe', 16.3, 'wolne'),
(35, 'D', 5, 'zwykłe', 16.3, 'wolne'),
(36, 'D', 6, 'zwykłe', 16.3, 'wolne'),
(37, 'D', 7, 'zwykłe', 16.3, 'wolne'),
(38, 'D', 8, 'zwykłe', 16.3, 'wolne'),
(39, 'D', 9, 'zwykłe', 16.3, 'wolne'),
(40, 'D', 10, 'zwykłe', 16.3, 'wolne'),
(41, 'E', 1, 'zwykłe', 16.3, 'wolne'),
(42, 'E', 2, 'zwykłe', 16.3, 'wolne'),
(43, 'E', 3, 'zwykłe', 16.3, 'wolne'),
(44, 'E', 4, 'zwykłe', 16.3, 'wolne'),
(45, 'E', 5, 'zwykłe', 16.3, 'wolne'),
(46, 'E', 6, 'zwykłe', 16.3, 'wolne'),
(47, 'E', 7, 'zwykłe', 16.3, 'wolne'),
(48, 'E', 8, 'zwykłe', 16.3, 'wolne'),
(49, 'E', 9, 'zwykłe', 16.3, 'wolne'),
(50, 'E', 10, 'zwykłe', 16.3, 'wolne');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sale`
--

CREATE TABLE `sale` (
  `id_sali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `sale`
--

INSERT INTO `sale` (`id_sali`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `seanse`
--

CREATE TABLE `seanse` (
  `id_seansu` int(11) NOT NULL,
  `id_filmu` int(11) NOT NULL,
  `godzina` time NOT NULL,
  `id_sali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `seanse`
--

INSERT INTO `seanse` (`id_seansu`, `id_filmu`, `godzina`, `id_sali`) VALUES
(1, 1, '14:30:00', 1),
(2, 1, '21:30:00', 1),
(3, 2, '11:30:00', 2),
(4, 2, '15:30:00', 2),
(5, 3, '09:50:00', 3),
(6, 3, '04:20:00', 3),
(7, 4, '21:37:00', 4),
(8, 4, '15:21:00', 4),
(9, 5, '13:00:00', 5),
(10, 5, '17:00:00', 5),
(11, 6, '11:05:00', 6),
(12, 6, '09:15:00', 6),
(13, 7, '12:25:00', 7),
(14, 7, '18:20:00', 7),
(15, 8, '16:50:00', 8),
(16, 8, '19:35:00', 8),
(17, 9, '20:00:00', 9),
(18, 9, '21:30:00', 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_ip` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`Id_filmu`),
  ADD KEY `id_miasta` (`id_miasta`);

--
-- Indeksy dla tabeli `miasta`
--
ALTER TABLE `miasta`
  ADD PRIMARY KEY (`id_miasta`);

--
-- Indeksy dla tabeli `miejsca`
--
ALTER TABLE `miejsca`
  ADD PRIMARY KEY (`id_miejsca`);

--
-- Indeksy dla tabeli `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id_sali`);

--
-- Indeksy dla tabeli `seanse`
--
ALTER TABLE `seanse`
  ADD PRIMARY KEY (`id_seansu`),
  ADD KEY `id_filmu` (`id_filmu`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `filmy`
--
ALTER TABLE `filmy`
  MODIFY `Id_filmu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `miasta`
--
ALTER TABLE `miasta`
  MODIFY `id_miasta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `miejsca`
--
ALTER TABLE `miejsca`
  MODIFY `id_miejsca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT dla tabeli `sale`
--
ALTER TABLE `sale`
  MODIFY `id_sali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `seanse`
--
ALTER TABLE `seanse`
  MODIFY `id_seansu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD CONSTRAINT `id_miasta` FOREIGN KEY (`id_miasta`) REFERENCES `miasta` (`id_miasta`);

--
-- Ograniczenia dla tabeli `seanse`
--
ALTER TABLE `seanse`
  ADD CONSTRAINT `id_filmu` FOREIGN KEY (`id_filmu`) REFERENCES `filmy` (`Id_filmu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
