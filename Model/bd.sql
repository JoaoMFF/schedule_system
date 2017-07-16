-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Fev-2017 às 19:14
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tg2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anolectivo`
--

CREATE TABLE `anolectivo` (
  `id` int(11) NOT NULL,
  `ano_lectivo` varchar(120) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `anolectivo`
--

INSERT INTO `anolectivo` (`id`, `ano_lectivo`) VALUES
(1, '2016/2017'),
(2, '2015/2016');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `id_semestre` int(11) DEFAULT NULL,
  `id_ano_lectivo` int(11) DEFAULT NULL,
  `disciplina` varchar(120) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`id`, `id_semestre`, `id_ano_lectivo`, `disciplina`) VALUES
(1, 1, 1, 'BD2'),
(2, 1, 1, 'DAW'),
(3, 1, 1, 'SO'),
(4, 1, 1, 'DGC'),
(5, 1, 1, 'MC'),
(6, 2, 1, 'P2'),
(7, 2, 1, 'TWDM'),
(8, 2, 1, 'FSI'),
(9, 2, 1, 'SI'),
(10, 2, 1, 'PDM'),
(11, 1, 2, 'BD1'),
(12, 1, 2, 'POO'),
(13, 1, 2, 'MA'),
(14, 1, 2, 'MD'),
(15, 1, 2, 'AM'),
(16, 2, 2, 'P2'),
(17, 2, 2, 'FC'),
(18, 2, 2, 'LP'),
(19, 2, 2, 'EDA'),
(20, 2, 2, 'PDM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `pass` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `id_utilizador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `logins`
--

INSERT INTO `logins` (`id`, `username`, `pass`, `id_utilizador`) VALUES
(1, 'aluno', 'aluno1', 1),
(2, 'docente', 'docente1', 2),
(3, 'docente2', 'docente2', 4),
(4, 'coor', 'coor1', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `restricao`
--

CREATE TABLE `restricao` (
  `id_restricao` int(11) NOT NULL,
  `sala` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hora_inicial` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hora_final` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dia_semana` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `descricao` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `id_docente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `restricao`
--

INSERT INTO `restricao` (`id_restricao`, `sala`, `hora_inicial`, `hora_final`, `dia_semana`, `descricao`, `id_docente`) VALUES
(1, 'S10', '9:00', '13:00', '2ºF', 'Hora de reunião de laboratório de investigação', 2),
(2, 'L8', '14:00', '18:00', '5ºF', 'Sala demasiado pequena face ao número de alunos', 4),
(3, 'L9', '8:00', '9:00', '3ºF', '..', 2),
(4, 'L18', '13:00', '17:00', '4ºF', 'Teste', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `semestre`
--

CREATE TABLE `semestre` (
  `id` int(11) NOT NULL,
  `semestre` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `semestre`
--

INSERT INTO `semestre` (`id`, `semestre`) VALUES
(1, '1º Semestre'),
(2, '2º Semestre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_utilizador`
--

CREATE TABLE `tipo_utilizador` (
  `id` int(11) NOT NULL,
  `tipo` varchar(120) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tipo_utilizador`
--

INSERT INTO `tipo_utilizador` (`id`, `tipo`) VALUES
(1, 'Aluno'),
(2, 'Docente'),
(3, 'Coordenador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id` int(11) NOT NULL,
  `id_tipo_utilizador` int(11) DEFAULT NULL,
  `nome` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`id`, `id_tipo_utilizador`, `nome`) VALUES
(1, 1, 'João Filipe'),
(2, 2, 'Luís Bruno'),
(3, 3, 'João Martins'),
(4, 2, 'Rui Pais');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anolectivo`
--
ALTER TABLE `anolectivo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_semestre` (`id_semestre`),
  ADD KEY `id_ano_lectivo` (`id_ano_lectivo`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilizador` (`id_utilizador`);

--
-- Indexes for table `restricao`
--
ALTER TABLE `restricao`
  ADD PRIMARY KEY (`id_restricao`),
  ADD KEY `id_docente` (`id_docente`);

--
-- Indexes for table `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_utilizador`
--
ALTER TABLE `tipo_utilizador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo_utilizador` (`id_tipo_utilizador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `restricao`
--
ALTER TABLE `restricao`
  MODIFY `id_restricao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id`),
  ADD CONSTRAINT `horario_ibfk_2` FOREIGN KEY (`id_ano_lectivo`) REFERENCES `anolectivo` (`id`);

--
-- Limitadores para a tabela `logins`
--
ALTER TABLE `logins`
  ADD CONSTRAINT `logins_ibfk_1` FOREIGN KEY (`id_utilizador`) REFERENCES `utilizadores` (`id`);

--
-- Limitadores para a tabela `restricao`
--
ALTER TABLE `restricao`
  ADD CONSTRAINT `restricao_ibfk_1` FOREIGN KEY (`id_docente`) REFERENCES `utilizadores` (`id`);

--
-- Limitadores para a tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD CONSTRAINT `utilizadores_ibfk_1` FOREIGN KEY (`id_tipo_utilizador`) REFERENCES `tipo_utilizador` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
