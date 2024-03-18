-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/03/2024 às 21:51
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tamanho` varchar(5) NOT NULL,
  `valor` float NOT NULL,
  `descricao` text NOT NULL,
  `quantidade` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `tamanho`, `valor`, `descricao`, `quantidade`, `foto`, `status`) VALUES
(1, 'teste', 'G', 12, 'teste', 12, 'teste', 0),
(2, 'teste', 'G', 12, 'teste', 12, 'teste', 0),
(3, 'teste', 'G', 12, 'teste', 12, 'teste', 0),
(4, 'teste', 'g', 12, 'teste', 12, 'teste', 0),
(5, 'teste', 'G', 12, 'teste', 12, 'Captura de tela 2024-03-04 093906.png', 0),
(6, 'teste', 'G', 12, 'teste', 12, 'Captura de tela 2024-03-04 093859.png', 0),
(7, 'teste', 'G', 12, 'teste', 12, 'Captura de tela 2024-03-04 093859.png', 0),
(8, 'teste', 'g', 12, 'teste', 12, '', 0),
(9, 'teste', 'g', 12, 'teste', 12, '', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
