-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Maio-2023 às 00:41
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `datecaio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrocaio`
--

CREATE TABLE `carrocaio` (
  `idcarrocaio` int(11) NOT NULL,
  `anocarrocaio` int(4) NOT NULL,
  `valorcarrocaio` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cestacaio`
--

CREATE TABLE `cestacaio` (
  `idcestacaio` int(11) NOT NULL,
  `anocestacaio` int(4) NOT NULL,
  `valorcestacaio` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dolarcaio`
--

CREATE TABLE `dolarcaio` (
  `iddolarcaio` int(11) NOT NULL,
  `anodolarcaio` int(4) NOT NULL,
  `valordolarcaio` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gasolinacaio`
--

CREATE TABLE `gasolinacaio` (
  `idgasolinacaio` int(11) NOT NULL,
  `anogasolinacaio` int(4) NOT NULL,
  `valorgasolinacaio` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pibcaio`
--

CREATE TABLE `pibcaio` (
  `idpibcaio` int(11) NOT NULL,
  `anopibcaio` int(4) NOT NULL,
  `valorpibcaio` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `processadorcaio`
--

CREATE TABLE `processadorcaio` (
  `idprocessadorcaio` int(11) NOT NULL,
  `anoprocessadorcaio` int(4) NOT NULL,
  `valorprocessadorcaio` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrocaio`
--
ALTER TABLE `carrocaio`
  ADD PRIMARY KEY (`idcarrocaio`);

--
-- Índices para tabela `cestacaio`
--
ALTER TABLE `cestacaio`
  ADD PRIMARY KEY (`idcestacaio`);

--
-- Índices para tabela `dolarcaio`
--
ALTER TABLE `dolarcaio`
  ADD PRIMARY KEY (`iddolarcaio`);

--
-- Índices para tabela `gasolinacaio`
--
ALTER TABLE `gasolinacaio`
  ADD PRIMARY KEY (`idgasolinacaio`);

--
-- Índices para tabela `pibcaio`
--
ALTER TABLE `pibcaio`
  ADD PRIMARY KEY (`idpibcaio`);

--
-- Índices para tabela `processadorcaio`
--
ALTER TABLE `processadorcaio`
  ADD PRIMARY KEY (`idprocessadorcaio`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrocaio`
--
ALTER TABLE `carrocaio`
  MODIFY `idcarrocaio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cestacaio`
--
ALTER TABLE `cestacaio`
  MODIFY `idcestacaio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `dolarcaio`
--
ALTER TABLE `dolarcaio`
  MODIFY `iddolarcaio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `gasolinacaio`
--
ALTER TABLE `gasolinacaio`
  MODIFY `idgasolinacaio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `pibcaio`
--
ALTER TABLE `pibcaio`
  MODIFY `idpibcaio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `processadorcaio`
--
ALTER TABLE `processadorcaio`
  MODIFY `idprocessadorcaio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
