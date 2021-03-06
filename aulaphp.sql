CREATE DATABASE `aulaphp` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE aulaphp
-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Maio-2016 às 23:22
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aulaphp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tipo` int NOT NULL COMMENT '1- admin, 2 - padrão',
  `descricao` text NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `dataNasc` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `usuario`, `senha`, `email`, `tipo`, `descricao`, `foto`, `dataNasc`) VALUES
(1, 'Bruno Martins', 'bruno', '1234', 'brunobms1987@gmail.com', '1', 'Usuário do Bruno', 'semfoto.png', '1987-01-16'),
(2, 'Carlos Brigo', 'brigo', '5678', 'brigo.d@gmail.com', '1', 'Brigo User', 'semfoto.png', '1950-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
