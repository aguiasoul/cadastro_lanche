-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Ago-2024 às 18:05
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastrolanches`
--
CREATE DATABASE IF NOT EXISTS `cadastrolanches` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cadastrolanches`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_cliente`
--

DROP TABLE IF EXISTS `cadastro_cliente`;
CREATE TABLE IF NOT EXISTS `cadastro_cliente` (
  `id_pessoas` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `cpf` varchar(300) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pessoas`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_de_bebida`
--

DROP TABLE IF EXISTS `cadastro_de_bebida`;
CREATE TABLE IF NOT EXISTS `cadastro_de_bebida` (
  `id_bebida` int(11) NOT NULL AUTO_INCREMENT,
  `bebida` varchar(300) NOT NULL,
  `ingr` varchar(300) NOT NULL,
  `preco` varchar(300) NOT NULL,
  PRIMARY KEY (`id_bebida`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_de_lanches`
--

DROP TABLE IF EXISTS `cadastro_de_lanches`;
CREATE TABLE IF NOT EXISTS `cadastro_de_lanches` (
  `id_lanches` int(11) NOT NULL AUTO_INCREMENT,
  `lanche` varchar(50) NOT NULL,
  `ingr` varchar(300) NOT NULL,
  `preco` varchar(300) NOT NULL,
  PRIMARY KEY (`id_lanches`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
