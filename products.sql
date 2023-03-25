-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/03/2023 às 21:19
-- Versão do servidor: 10.4.27-MariaDB
-- Versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `product_list`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `products`
--

CREATE TABLE `products` (
  `SKU` varchar(30) NOT NULL,
  `Name` varchar(65) DEFAULT NULL,
  `Price` decimal(10,0) DEFAULT NULL,
  `productType` enum('Book','Furniture','DVD') DEFAULT NULL,
  `productAttribute` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `products`
--

INSERT INTO `products` (`SKU`, `Name`, `Price`, `productType`, `productAttribute`) VALUES
('1236-898', 'chair', '12', 'Furniture', '12x12x23'),
('155-852', 'Game of Thrones Pt1', '12', 'Book', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`SKU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
