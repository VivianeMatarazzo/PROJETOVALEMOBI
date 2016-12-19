-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Dez-2016 às 03:16
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `mercadoria` varchar(250) NOT NULL,
  `negocio` varchar(250) NOT NULL,
  `preco` double NOT NULL,
  `quantidade` int(11) NOT NULL,
  `tpmercadoria` varchar(250) NOT NULL,
  `idmercadoria` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idmercadoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`mercadoria`, `negocio`, `preco`, `quantidade`, `tpmercadoria`, `idmercadoria`) VALUES
('Celular Samsung J5', 'Compra', 1700, 20, 'Celular', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
