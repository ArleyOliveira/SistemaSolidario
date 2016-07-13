-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 13/07/2016 às 17:02
-- Versão do servidor: 5.5.47-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `sistemasolidario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `doadores`
--

CREATE TABLE IF NOT EXISTS `doadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `doadores`
--

INSERT INTO `doadores` (`id`, `nome`, `endereco`, `email`, `senha`, `dataNascimento`, `telefone`) VALUES
(1, 'Fulano', 'rua 2', 'fulano@gmail.com', '202cb962ac59075b964b07152d234b70', '2016-07-13', '93948');

-- --------------------------------------------------------

--
-- Estrutura para tabela `instituicoes`
--

CREATE TABLE IF NOT EXISTS `instituicoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `cnpj` varchar(30) NOT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `isDisponivel` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `cnpj` (`cnpj`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `instituicoes`
--

INSERT INTO `instituicoes` (`id`, `nome`, `cnpj`, `telefone`, `email`, `endereco`, `descricao`, `isDisponivel`) VALUES
(1, 'IFNMG', '123456', '252582', 'ifnmg.edu@hotmail.com', 'rua i', 'dkajs', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `necessidades`
--

CREATE TABLE IF NOT EXISTS `necessidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_validade` date NOT NULL,
  `id_instituicao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_doacoes`
--

CREATE TABLE IF NOT EXISTS `tipo_doacoes` (
  `id_doadores` int(11) NOT NULL,
  `roupas` tinyint(1) NOT NULL DEFAULT '0',
  `alimentos` tinyint(1) NOT NULL DEFAULT '0',
  `outros` tinyint(1) NOT NULL DEFAULT '0',
  `tempo` tinyint(1) NOT NULL DEFAULT '0',
  `moveis` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_doadores`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `dataNascimento` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `isModerador` tinyint(1) NOT NULL,
  `isAdministrador` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `dataNascimento`, `email`, `senha`, `isModerador`, `isAdministrador`) VALUES
(1, 'Arley Oliveira', '2016-07-15', 'arley.msn@yahoo.com', '202cb962ac59075b964b07152d234b70', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
