-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 09-Jun-2021 às 09:47
-- Versão do servidor: 5.7.34
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `medcon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin`
--

CREATE TABLE `tb_admin` (
  `codAdmin` int(11) NOT NULL,
  `nome` varchar(99) NOT NULL,
  `sobrenome` varchar(99) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_analise`
--

CREATE TABLE `tb_analise` (
  `codAnalise` int(11) NOT NULL,
  `codPac` int(11) NOT NULL,
  `codExame` int(11) NOT NULL,
  `codMed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_consulta`
--

CREATE TABLE `tb_consulta` (
  `codcon` int(11) NOT NULL,
  `especialidade` int(11) NOT NULL,
  `codPac` int(11) NOT NULL,
  `codMed` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_especialidade`
--

CREATE TABLE `tb_especialidade` (
  `codEspecialidade` int(11) NOT NULL,
  `Tipo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_exame`
--

CREATE TABLE `tb_exame` (
  `codEx` int(11) NOT NULL,
  `Tipo` varchar(200) NOT NULL,
  `codEspecialidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_infPac`
--

CREATE TABLE `tb_infPac` (
  `codInf` int(11) NOT NULL,
  `info` varchar(5000) NOT NULL,
  `codPac` int(11) NOT NULL,
  `codMed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_medico`
--

CREATE TABLE `tb_medico` (
  `codMed` int(11) NOT NULL,
  `nomeMed` varchar(99) NOT NULL,
  `sobreMed` varchar(99) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `experiencia` date NOT NULL,
  `codEsp` int(11) NOT NULL,
  `centroReg` varchar(200) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_paciente`
--

CREATE TABLE `tb_paciente` (
  `codPac` int(11) NOT NULL,
  `nomePac` varchar(99) NOT NULL,
  `sobrePac` varchar(99) NOT NULL,
  `dataNasc` date NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `endereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`codAdmin`);

--
-- Índices para tabela `tb_analise`
--
ALTER TABLE `tb_analise`
  ADD PRIMARY KEY (`codAnalise`),
  ADD KEY `codPac` (`codPac`,`codExame`,`codMed`),
  ADD KEY `codMed` (`codMed`),
  ADD KEY `codExame` (`codExame`);

--
-- Índices para tabela `tb_consulta`
--
ALTER TABLE `tb_consulta`
  ADD PRIMARY KEY (`codcon`),
  ADD KEY `codPac` (`codPac`,`codMed`),
  ADD KEY `codMed` (`codMed`),
  ADD KEY `especialidade` (`especialidade`);

--
-- Índices para tabela `tb_especialidade`
--
ALTER TABLE `tb_especialidade`
  ADD PRIMARY KEY (`codEspecialidade`);

--
-- Índices para tabela `tb_exame`
--
ALTER TABLE `tb_exame`
  ADD PRIMARY KEY (`codEx`),
  ADD KEY `codEspecialidade` (`codEspecialidade`);

--
-- Índices para tabela `tb_infPac`
--
ALTER TABLE `tb_infPac`
  ADD PRIMARY KEY (`codInf`),
  ADD KEY `codPac` (`codPac`,`codMed`),
  ADD KEY `codMed` (`codMed`);

--
-- Índices para tabela `tb_medico`
--
ALTER TABLE `tb_medico`
  ADD PRIMARY KEY (`codMed`),
  ADD KEY `codEsp` (`codEsp`);

--
-- Índices para tabela `tb_paciente`
--
ALTER TABLE `tb_paciente`
  ADD PRIMARY KEY (`codPac`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `codAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_analise`
--
ALTER TABLE `tb_analise`
  MODIFY `codAnalise` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_consulta`
--
ALTER TABLE `tb_consulta`
  MODIFY `codcon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_especialidade`
--
ALTER TABLE `tb_especialidade`
  MODIFY `codEspecialidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_exame`
--
ALTER TABLE `tb_exame`
  MODIFY `codEx` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_infPac`
--
ALTER TABLE `tb_infPac`
  MODIFY `codInf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_medico`
--
ALTER TABLE `tb_medico`
  MODIFY `codMed` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_paciente`
--
ALTER TABLE `tb_paciente`
  MODIFY `codPac` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_analise`
--
ALTER TABLE `tb_analise`
  ADD CONSTRAINT `tb_analise_ibfk_1` FOREIGN KEY (`codMed`) REFERENCES `tb_medico` (`codMed`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_analise_ibfk_2` FOREIGN KEY (`codPac`) REFERENCES `tb_paciente` (`codPac`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_analise_ibfk_3` FOREIGN KEY (`codExame`) REFERENCES `tb_exame` (`codEx`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_consulta`
--
ALTER TABLE `tb_consulta`
  ADD CONSTRAINT `tb_consulta_ibfk_1` FOREIGN KEY (`codPac`) REFERENCES `tb_paciente` (`codPac`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_consulta_ibfk_2` FOREIGN KEY (`codMed`) REFERENCES `tb_medico` (`codMed`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_consulta_ibfk_3` FOREIGN KEY (`especialidade`) REFERENCES `tb_especialidade` (`codEspecialidade`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_exame`
--
ALTER TABLE `tb_exame`
  ADD CONSTRAINT `tb_exame_ibfk_1` FOREIGN KEY (`codEspecialidade`) REFERENCES `tb_especialidade` (`codEspecialidade`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_infPac`
--
ALTER TABLE `tb_infPac`
  ADD CONSTRAINT `tb_infpac_ibfk_1` FOREIGN KEY (`codMed`) REFERENCES `tb_medico` (`codMed`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_infpac_ibfk_2` FOREIGN KEY (`codPac`) REFERENCES `tb_paciente` (`codPac`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tb_medico`
--
ALTER TABLE `tb_medico`
  ADD CONSTRAINT `tb_medico_ibfk_1` FOREIGN KEY (`codEsp`) REFERENCES `tb_especialidade` (`codEspecialidade`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
