-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 16 2016 г., 23:07
-- Версия сервера: 10.0.17-MariaDB
-- Версия PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_webdev_base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `message_id` mediumint(9) NOT NULL,
  `message_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message_date_repair` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message_text` varchar(10000) NOT NULL,
  `message_author` mediumint(9) NOT NULL,
  `message_parent` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`message_id`, `message_date`, `message_date_repair`, `message_text`, `message_author`, `message_parent`) VALUES
(146, '2016-02-16 21:48:49', '2016-02-16 21:48:49', 'se Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(147, '2016-02-16 21:48:49', '2016-02-16 21:48:49', ' as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 146),
(148, '2016-02-16 21:48:49', '2016-02-16 21:48:49', 'ancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 146),
(149, '2016-02-16 21:48:49', '2016-02-16 21:48:49', 'have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 146),
(150, '2016-02-16 21:48:49', '2016-02-16 21:48:49', 'sions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 147),
(151, '2016-02-16 21:48:49', '2016-02-16 21:48:49', ' and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 150),
(152, '2016-02-16 21:48:49', '2016-02-16 21:48:49', 'many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 146),
(153, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'es on purpose (injected humour and the like)', 1, 151),
(154, '2016-02-16 21:48:50', '2016-02-16 21:48:50', '(injected humour and the like)', 1, 150),
(155, '2016-02-16 21:48:50', '2016-02-16 21:48:50', ' their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 148),
(156, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'any desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 148),
(157, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'ncy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 150),
(158, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'r the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(159, '2016-02-16 21:48:50', '2016-02-16 21:48:50', ' their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 147),
(160, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 's their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 147),
(161, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 147),
(162, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 158),
(163, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'eir default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(164, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'em Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 148),
(165, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 153),
(166, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 159),
(167, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'd the like)', 1, 151),
(168, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'del text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 156),
(169, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'l in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 150),
(170, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'pose (injected humour and the like)', 1, 164),
(171, '2016-02-16 21:48:50', '2016-02-16 21:48:50', ' Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(172, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(173, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'y desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 153),
(174, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'ent, sometimes on purpose (injected humour and the like)', 1, 148),
(175, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(176, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 's by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(177, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'ident, sometimes on purpose (injected humour and the like)', 1, 152),
(178, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 155),
(179, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'y desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 176),
(180, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'r ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 160),
(181, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'ed over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 164),
(182, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'etimes by accident, sometimes on purpose (injected humour and the like)', 1, 154),
(183, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'r infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 176),
(184, '2016-02-16 21:48:50', '2016-02-16 21:48:50', ''' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 155),
(185, '2016-02-16 21:48:50', '2016-02-16 21:48:50', 'and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 164),
(186, '2016-02-16 21:48:50', '2016-02-16 21:48:50', ' by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(187, '2016-02-16 21:48:51', '2016-02-16 21:48:51', ' packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 163),
(188, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'e editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(189, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'ing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(190, '2016-02-16 21:48:51', '2016-02-16 21:48:51', ' in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(191, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'nfancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(192, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'metimes by accident, sometimes on purpose (injected humour and the like)', 1, 152),
(193, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'fault model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 164),
(194, '2016-02-16 21:48:51', '2016-02-16 21:48:51', ' versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 191),
(195, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'n purpose (injected humour and the like)', 1, 154),
(196, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'lved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 147),
(197, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'e like)', 1, 0),
(198, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 170),
(199, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 's their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 149),
(200, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'umour and the like)', 1, 146),
(201, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'd web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 162),
(202, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(203, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'xt, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(204, '2016-02-16 21:48:51', '2016-02-16 21:48:51', '(injected humour and the like)', 1, 146),
(205, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'ir infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 160),
(206, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'and the like)', 1, 0),
(207, '2016-02-16 21:48:51', '2016-02-16 21:48:51', ' and the like)', 1, 0),
(208, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 173),
(209, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'ublishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 174),
(210, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'arch for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 167),
(211, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'y accident, sometimes on purpose (injected humour and the like)', 1, 183),
(212, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'ke)', 1, 165),
(213, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'em Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 190),
(214, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 158),
(215, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'em ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 171),
(216, '2016-02-16 21:48:51', '2016-02-16 21:48:51', ' for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(217, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'l text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 163),
(218, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'es on purpose (injected humour and the like)', 1, 172),
(219, '2016-02-16 21:48:51', '2016-02-16 21:48:51', ' sometimes on purpose (injected humour and the like)', 1, 0),
(220, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'rem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 148),
(221, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'el text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 178),
(222, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'ed humour and the like)', 1, 0),
(223, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'over many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 155),
(224, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'ver many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 170),
(225, '2016-02-16 21:48:51', '2016-02-16 21:48:51', 'lishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 189),
(226, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'ow use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 187),
(227, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'b sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 176),
(228, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'ave evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 164),
(229, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'ill uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 162),
(230, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'nd a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 160),
(231, '2016-02-16 21:48:52', '2016-02-16 21:48:52', '. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 162),
(232, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'e years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 177),
(233, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'se (injected humour and the like)', 1, 0),
(234, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'nfancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(235, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'eir default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 182),
(236, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'ed over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 177),
(237, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'fault model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 182),
(238, '2016-02-16 21:48:52', '2016-02-16 21:48:52', ' their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(239, '2016-02-16 21:48:52', '2016-02-16 21:48:52', ' sometimes on purpose (injected humour and the like)', 1, 175),
(240, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'd web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 168),
(241, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'and the like)', 1, 0),
(242, '2016-02-16 21:48:52', '2016-02-16 21:48:52', ' and the like)', 1, 0),
(243, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 194),
(244, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'y accident, sometimes on purpose (injected humour and the like)', 1, 183),
(245, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'ke)', 1, 165),
(246, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'em Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 153),
(247, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'em ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 171),
(248, '2016-02-16 21:48:52', '2016-02-16 21:48:52', ' for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(249, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'l text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 191),
(250, '2016-02-16 21:48:52', '2016-02-16 21:48:52', ' sometimes on purpose (injected humour and the like)', 1, 0),
(251, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'rem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 156),
(252, '2016-02-16 21:48:52', '2016-02-16 21:48:52', ' packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 156),
(253, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'lishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 153),
(254, '2016-02-16 21:48:52', '2016-02-16 21:48:52', 'b sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 176),
(255, '2016-02-16 21:48:53', '2016-02-16 21:48:53', 'ave evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 164),
(256, '2016-02-16 21:48:53', '2016-02-16 21:48:53', 'ill uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 241),
(257, '2016-02-16 21:48:53', '2016-02-16 21:48:53', '. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 154),
(258, '2016-02-16 21:48:53', '2016-02-16 21:48:53', 'se (injected humour and the like)', 1, 0),
(259, '2016-02-16 21:48:53', '2016-02-16 21:48:53', 'nfancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(260, '2016-02-16 21:48:53', '2016-02-16 21:48:53', 'eir default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 180),
(261, '2016-02-16 21:48:53', '2016-02-16 21:48:53', ' by accident, sometimes on purpose (injected humour and the like)', 1, 0),
(262, '2016-02-16 21:48:53', '2016-02-16 21:48:53', ' packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 1, 184),
(263, '2016-02-16 21:49:17', '2016-02-16 21:49:17', 'injected humour and the like)', 1, 188),
(264, '2016-02-16 23:00:52', '2016-02-16 23:00:52', 'mee the like to )', 2, 241),
(265, '2016-02-17 00:05:41', '2016-02-17 00:05:41', 'mee the like to )', 2, 241),
(266, '2016-02-17 00:06:12', '2016-02-17 00:06:12', 'versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 2, 194),
(267, '2016-02-17 00:06:37', '2016-02-17 00:06:37', 'versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 2, 191);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` mediumint(11) NOT NULL,
  `user_social_id` bigint(20) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_first_name` varchar(150) NOT NULL,
  `user_last_name` varchar(150) NOT NULL,
  `user_link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_social_id`, `user_name`, `user_first_name`, `user_last_name`, `user_link`) VALUES
(1, 1, 'test', '', '', ''),
(2, 225413684467510, 'Artiko Nav', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `message_author` (`message_author`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` mediumint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`message_author`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
