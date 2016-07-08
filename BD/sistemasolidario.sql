-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 08/07/2016 às 05:08
-- Versão do servidor: 10.1.10-MariaDB
-- Versão do PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemasolidario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `doadores`
--

CREATE TABLE `doadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `doadores`
--

INSERT INTO `doadores` (`id`, `nome`, `endereco`, `email`, `senha`, `dataNascimento`, `telefone`) VALUES
(1, 'Fulano', 'rua 2', 'fulano@gmail.com', '202cb962ac59075b964b07152d234b70', '2016-07-13', '93948');

-- --------------------------------------------------------

--
-- Estrutura para tabela `instituicoes`
--

CREATE TABLE `instituicoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `cnpj` varchar(30) NOT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `isDisponivel` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `instituicoes`
--

INSERT INTO `instituicoes` (`id`, `nome`, `cnpj`, `telefone`, `email`, `endereco`, `descricao`, `isDisponivel`) VALUES
(1, 'IFNMG', '123456', '252582', 'ifnmg.edu@hotmail.com', 'rua i', 'dkajs', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dataNascimento` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `isModerador` tinyint(1) NOT NULL,
  `isAdministrador` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `dataNascimento`, `email`, `senha`, `isModerador`, `isAdministrador`) VALUES
(1, 'Arley Oliveira', '2016-07-15', 'arley.msn@yahoo.com', '202cb962ac59075b964b07152d234b70', 1, 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `doadores`
--
ALTER TABLE `doadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `instituicoes`
--
ALTER TABLE `instituicoes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cnpj` (`cnpj`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `doadores`
--
ALTER TABLE `doadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `instituicoes`
--
ALTER TABLE `instituicoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
