-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jul-2022 às 21:14
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meusite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`CategoriaID`, `Nome`) VALUES
(1, 'Pão'),
(2, 'Bolo'),
(3, 'Salgado'),
(4, 'Doces'),
(5, 'Bebida'),
(6, 'Sorvete');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ProdutoID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Imagem` varchar(200) NOT NULL,
  `Preco` float NOT NULL,
  `Descricao` longtext NOT NULL,
  `CategoriaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ProdutoID`, `Nome`, `Imagem`, `Preco`, `Descricao`, `CategoriaID`) VALUES
(1, 'Brigadeiro', 'brigadeiro.jpg', 1.3, 'Descrição do Brigadeiro', 1),
(2, 'Carolinas', 'carolinas.jpg', 1.3, 'Descrição do carolinas', 1),
(3, 'Beijinho', 'beijinho.jpg', 1.3, 'Descrição do beijinho', 1),
(4, 'Cajuzinho', 'cajuzinho.jpg', 1.3, 'Descrição do cajuzinho', 1),
(5, 'Bomba', 'carolinas.jpg', 1.3, 'Descrição do carolinas', 1),
(6, 'Branquinho de Churros', 'carolinas.jpg', 1.3, 'Descrição do carolinas', 1),
(7, 'Branquinho de Paçoquinha', 'carolinas.jpg', 1.3, 'Descrição do carolinas', 1),
(8, 'Brownies', 'carolinas.jpg', 1.3, 'Descrição do carolinas', 1),
(9, 'Churros', 'carolinas.jpg', 1.3, 'Descrição do carolinas', 1),
(10, 'Lua de Mel', 'carolinas.jpg', 1.3, 'Descrição do carolinas', 1),
(11, 'Carolinas', 'carolinas.jpg', 1.3, 'Descrição do carolinas', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ProdutoID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ProdutoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
