-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 04/06/2018 às 23h34min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `look`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agropecuaria`
--

CREATE TABLE IF NOT EXISTS `agropecuaria` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `qnt_voto` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agropecuaria`
--

INSERT INTO `agropecuaria` (`id`, `nome`, `imagem`, `qnt_voto`) VALUES
(1, 'Modelo 1', 'camisetas.jpg', 14),
(2, 'Modelo 2', 'camisetas.jpg', 8),
(3, 'Modelo 3', 'camisetas.jpg', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `informatica`
--

CREATE TABLE IF NOT EXISTS `informatica` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `qnt_voto` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `informatica`
--

INSERT INTO `informatica` (`id`, `nome`, `imagem`, `qnt_voto`) VALUES
(1, 'Modelo 1', 'camisetas.jpg', 14),
(2, 'Modelo 2', 'camisetas.jpg', 8),
(3, 'Modelo 3', 'camisetas.jpg', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `quimica`
--

CREATE TABLE IF NOT EXISTS `quimica` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `qnt_voto` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `quimica`
--

INSERT INTO `quimica` (`id`, `nome`, `imagem`, `qnt_voto`) VALUES
(1, 'Modelo 1', 'camisetas.jpg', 14),
(2, 'Modelo 2', 'camisetas.jpg', 8),
(3, 'Modelo 3', 'camisetas.jpg', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(10) unsigned NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nome`, `email`, `senha`) VALUES
(1, 'Administrador', 'admin@admin.com', 'MQ==');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
