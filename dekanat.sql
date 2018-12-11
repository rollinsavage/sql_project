-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 16 2016 г., 01:11
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `dekanat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dekanat`
--

CREATE TABLE IF NOT EXISTS `dekanat` (
  `cod_d` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naz_d` varchar(20) NOT NULL,
  `telefon_d` varchar(20) NOT NULL,
  `fio_d` varchar(40) NOT NULL,
  PRIMARY KEY (`cod_d`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `dekanat`
--

INSERT INTO `dekanat` (`cod_d`, `naz_d`, `telefon_d`, `fio_d`) VALUES
(1, 'ИНЭК', '238-65', 'Дегтярева И.В'),
(2, 'ФИРТ', '543-87', 'Романова А.Р');

-- --------------------------------------------------------

--
-- Структура таблицы `gruppa`
--

CREATE TABLE IF NOT EXISTS `gruppa` (
  `cod_gr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nazvanie` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_gr`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `gruppa`
--

INSERT INTO `gruppa` (`cod_gr`, `nazvanie`) VALUES
(1, 'ЭК-305'),
(2, 'БИ-405'),
(3, 'ФиК-203'),
(4, 'ФиК-304'),
(5, 'ГМУ-106'),
(6, 'ГМУ-109');

-- --------------------------------------------------------

--
-- Структура таблицы `peresdachi`
--

CREATE TABLE IF NOT EXISTS `peresdachi` (
  `cod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naim_pr` varchar(30) NOT NULL,
  `v_kon` varchar(20) NOT NULL,
  `data_per` date NOT NULL,
  `cod_gr` int(10) unsigned NOT NULL,
  `cod_pr` int(10) unsigned NOT NULL,
  `cod_d` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `peresdachi`
--

INSERT INTO `peresdachi` (`cod`, `naim_pr`, `v_kon`, `data_per`, `cod_gr`, `cod_pr`, `cod_d`) VALUES
(1, 'Анализ данных', 'Экзамен', '2016-10-24', 2, 3, 1),
(2, 'ИТ в обучении', 'Экзамен', '2016-10-25', 2, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `prepodavatel`
--

CREATE TABLE IF NOT EXISTS `prepodavatel` (
  `cod_pr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fio_pr` varchar(40) NOT NULL,
  `telefon_pr` varchar(20) NOT NULL,
  `stepen_pr` varchar(30) NOT NULL,
  `kafedra_pr` varchar(40) NOT NULL,
  PRIMARY KEY (`cod_pr`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `prepodavatel`
--

INSERT INTO `prepodavatel` (`cod_pr`, `fio_pr`, `telefon_pr`, `stepen_pr`, `kafedra_pr`) VALUES
(1, 'Смирнова Алина Викторовна', '8-987-346-57-44', 'Доцент', 'Экономической информатики'),
(2, 'Трофимова Анна Эдуардовна', '8-905-746-45-99', 'Доцент', 'Менеджмента и маркетинга'),
(3, 'Лавров Николай Валерьевич', '8-987-374-88-12', 'Профессор', 'Финансов и экономичесокго анализа'),
(4, 'Хрусталева Екатерина Петровна', '8-967-345-12-98', 'Доцент', 'Экономики предпринимательства'),
(5, 'Соловьева Людмила Дмитриевна', '8-917-432-87-46', 'Доцент', 'Управления инновациями');

-- --------------------------------------------------------

--
-- Структура таблицы `ras_se`
--

CREATE TABLE IF NOT EXISTS `ras_se` (
  `cod_ras` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod_d` int(10) unsigned NOT NULL,
  `predmet` varchar(30) NOT NULL,
  `vid_kon` varchar(20) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`cod_ras`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `ras_se`
--

INSERT INTO `ras_se` (`cod_ras`, `cod_d`, `predmet`, `vid_kon`, `data`) VALUES
(1, 1, 'Математический анализ', 'зачет', '2016-12-27'),
(2, 2, 'Дискретная математика', 'экзамен', '2017-01-18'),
(3, 1, 'Анализз и менеджмент', 'Экзамен', '2017-01-26'),
(4, 1, 'Эконометрика', 'Зачет', '2016-12-28');

-- --------------------------------------------------------

--
-- Структура таблицы `rezultat`
--

CREATE TABLE IF NOT EXISTS `rezultat` (
  `cod_rez` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod_st` int(10) unsigned NOT NULL,
  `cod_gr` int(10) unsigned NOT NULL,
  `cod_pr` int(10) unsigned NOT NULL,
  `ocenka` int(11) NOT NULL,
  `predmet` varchar(30) NOT NULL,
  `yavka` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_rez`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `rezultat`
--

INSERT INTO `rezultat` (`cod_rez`, `cod_st`, `cod_gr`, `cod_pr`, `ocenka`, `predmet`, `yavka`) VALUES
(1, 1, 2, 1, 5, 'Стандартизация и сертификация', 'Нет'),
(2, 2, 1, 2, 4, 'Дискретная математика', 'Да'),
(3, 3, 2, 1, 4, 'Стандартизация и сертификация', 'Да'),
(4, 4, 2, 1, 0, 'Стандартизация и сертификация', 'Нет'),
(5, 5, 1, 4, 5, 'Эконометрика', 'Да'),
(6, 6, 1, 4, 0, 'Эконометрика', 'Нет');

-- --------------------------------------------------------

--
-- Структура таблицы `spisok`
--

CREATE TABLE IF NOT EXISTS `spisok` (
  `cod_sp` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod_d` int(10) unsigned NOT NULL,
  `cod_gr` int(10) unsigned NOT NULL,
  `predmet` varchar(30) NOT NULL,
  `data_e` date NOT NULL,
  `auditori` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_sp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `spisok`
--

INSERT INTO `spisok` (`cod_sp`, `cod_d`, `cod_gr`, `predmet`, `data_e`, `auditori`) VALUES
(1, 1, 1, 'Менеджмент', '2017-01-24', '3-401'),
(2, 2, 2, 'Стандартизация и сертификация', '2017-01-24', '4-102'),
(3, 1, 3, 'Инженерия знаний', '2017-01-29', '3-402'),
(4, 1, 4, 'БЖД', '2017-01-30', '4-103');

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `cod_st` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod_gr` int(10) unsigned NOT NULL,
  `fio_st` varchar(40) NOT NULL,
  `telefon_st` varchar(20) NOT NULL,
  `adres_st` varchar(50) NOT NULL,
  `nom_zach` int(11) NOT NULL,
  PRIMARY KEY (`cod_st`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`cod_st`, `cod_gr`, `fio_st`, `telefon_st`, `adres_st`, `nom_zach`) VALUES
(1, 2, 'Ахметзянова Алия Наилевна', '8-987-73-29-768', 'г.Благовещенск,ул.Ленина 150', 209483),
(2, 2, 'Орлова Екатерина Григорьевна', '8-905-74-73-888', 'г.Уфа,ул.Генерала Горбатова 90', 796945),
(3, 2, 'Дроздов Александр Олегович', '8-905-836-76-11', 'г.Уфа,ул.Мушникова 13/2', 347612),
(4, 4, 'Громова Алена Станиславовна', '8-917-675-47-22', 'г.Уфа,ул.Софьи Перовской180/1', 826731),
(5, 1, 'Жданов Иван Петрович', '8-967-548-38-67', 'г.Благовещенск, ул.Пушкина 120', 648822),
(6, 1, 'Юнусова Дарина Валерьевна', '8-987-443-12-67', 'г.Уфа,ул.Революционная 140/5', 547211);

-- --------------------------------------------------------

--
-- Структура таблицы `vedomost`
--

CREATE TABLE IF NOT EXISTS `vedomost` (
  `cod_v` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod_d` int(10) unsigned NOT NULL,
  `naz` varchar(30) NOT NULL,
  `data_v` date NOT NULL,
  `cod_pr` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cod_v`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `vedomost`
--

INSERT INTO `vedomost` (`cod_v`, `cod_d`, `naz`, `data_v`, `cod_pr`) VALUES
(1, 1, 'Зачетная ведомость', '2016-12-18', 1),
(2, 2, 'Экзаемнационная ведомость', '2017-01-15', 2),
(3, 1, 'Зачетная ведомость', '2016-12-20', 3),
(4, 1, 'Экзаменационная ведомость', '2017-01-23', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
