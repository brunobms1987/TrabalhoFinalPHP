-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Jun-2016 às 00:05
-- Versão do servidor: 5.6.26-log
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aulaphp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `idAutor` int(11) NOT NULL,
  `noticia` varchar(255) NOT NULL,
  `imagem` varchar(40) NOT NULL,
  `dataCadastro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `idAutor`, `noticia`, `imagem`, `dataCadastro`) VALUES
(5, 'Paranauês Acontecendo Agora', 8, '                                                                                                                        Notícia dos paranauês que aconteceram.                                        AGORAAAA                                                 ', 'Noticia de 2016.06.15.22.09.02.png', '2016-06-15'),
(6, 'Paranauês Acontecendo', 18, 'Teste', 'Noticia de 2016.06.27.23.23.21.jpg', '2016-06-27'),
(7, 'Teste do Teobaldo @@@', 8, 'tedsadas                Teste de notícia.                                ', 'Noticia de 2016.06.27.23.41.03.png', '2016-06-27'),
(8, 'Apresentando EDITADO', 18, '                                                    Apresentando a notícia.                        ', 'Noticia de 2016.06.29.19.02.31.jpg', '2016-06-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `dataNasc` date NOT NULL,
  `dataCadastro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `usuario`, `senha`, `email`, `tipo`, `descricao`, `foto`, `dataNasc`, `dataCadastro`) VALUES
(1, 'Bruno Martins', 'bruno', '1234', 'brunobms1987@gmail.com', 1, '              Usuário de testes.      ', '2016.06.15.11.53.52.png', '1987-01-16', '2016-06-01'),
(6, 'Paciente teste EDITADO', 'admin123', 'zGkX9', 'edersonbastiani@gmail.com', 1, '                                                                                                123123123                                                                                ', '2016.06.15.22.06.34.jpg', '2016-05-25', '2016-03-20'),
(7, 'Carlos Brigo', 'brigo', 'brigo01', 'brigo@brigo.iff.brigo', 1, ' Teste brigo ', '2016.05.26.02.36.29.jpg', '0000-00-00', '2016-02-20'),
(8, 'Teobaldo José', 'teobaldo', 'teo01', 'teobaldo@teo.teo.br', 2, '                 teste      \r\n                    ', '2016.05.26.02.40.01.png', '1987-01-16', '2016-05-15'),
(15, 'Ederson', 'ederson', '12345', 'ede@ede.ede', 1, '                 daiosjdsuioajda  ', '2016.06.08.20.43.53.png', '1999-01-01', '2016-06-08'),
(18, 'Carinha', 'carinha', '1234', 'carinha@carinha.rasadsdas', 2, '                    Carinha escreveu!', '2016.06.15.22.07.25.png', '2000-01-16', '2016-06-15'),
(19, 'Tião Carrero', 'tiao', '1234', 'tiao@tiao.tiao.tiao', 2, 'Usuário do Tião.            ', '2016.06.27.23.13.19.png', '1956-03-12', '2016-06-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
