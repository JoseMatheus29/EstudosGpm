-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/03/2024 às 21:56
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
(10, 'Blusa Vinho', 'P', 29.99, 'Blusa Vinho', 20, 'image-0.png\r\n', 0),
(11, 'Blusa Rosa', 'M', 29.99, 'Blusa rosa de algodão tamanho M', 15, 'image-1.png', 0),
(12, 'Blusa Marrom', 'G', 29.99, 'Blusa marrom de algodão tamanho G', 25, 'image-2.png', 0),
(13, 'Blusa Azul Claro', 'GG', 29.99, 'Blusa azul claro de algodão tamanho GG', 30, 'image-3.png', 0),
(14, 'Blusa Azul Escuro', 'P', 29.99, 'Blusa azul escuro de algodão tamanho P', 10, 'image-4.png', 0),
(15, 'Blusa Cinza Claro', 'M', 30.99, 'Blusa Cinza ', 12, 'image-8.png', 0),
(16, 'Blusa Bege', 'G', 30.99, 'Blusa Cinza ', 12, 'image-01.png', 0),
(17, 'Blusa Verde', 'GG', 29.99, 'Blusa verde de algodão tamanho GG', 17, 'image-7.png', 0),
(18, 'Blusa vermelha', 'P', 30.99, 'Blusa vermelha', 12, 'image-6.png', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `user_id` int(255) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `telefone` int(11) NOT NULL,
  `carrinho` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`carrinho`)),
  `favoritos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`favoritos`)),
  `tipo` varchar(10) NOT NULL DEFAULT 'cliente',
  `logado` tinyint(1) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `nome`, `email`, `telefone`, `carrinho`, `favoritos`, `tipo`, `logado`, `senha`) VALUES
(10, 'João Silva', 'joao.silva@example.com', 123456789, '{\"nome\":\"Blusa Rosa\",\"valor\":\"29.99\"}', NULL, 'adm', 0, ''),
(11, 'Maria Santos', 'maria.santos@example.com', 987654321, NULL, NULL, 'estoquista', 0, ''),
(12, 'Pedro Oliveira', 'pedro.oliveira@example.com', 111111111, NULL, NULL, 'cliente', 0, ''),
(13, 'Ana Souza', 'ana.souza@example.com', 222222222, NULL, NULL, 'cliente', 0, ''),
(14, 'Luiz Pereira', 'luiz.pereira@example.com', 333333333, NULL, NULL, 'cliente', 0, ''),
(15, 'Carla Costa', 'carla.costa@example.com', 444444444, NULL, NULL, 'cliente', 0, ''),
(16, 'Fernanda Almeida', 'fernanda.almeida@example.com', 555555555, NULL, NULL, 'cliente', 0, ''),
(17, 'Ricardo Martins', 'ricardo.martins@example.com', 666666666, NULL, NULL, 'cliente', 0, ''),
(18, 'Camila Lima', 'camila.lima@example.com', 777777777, NULL, NULL, 'cliente', 0, ''),
(30, 'José Matheus', 'mateus.alvino.101@gmail.com', 2147483647, NULL, NULL, 'cliente', 0, '4c44e8208e8976f1c2d6a82a4e84f75c'),
(31, 'José Matheus', 'mateus.alvino.101@gmail.com', 2147483647, NULL, NULL, 'cliente', 0, '732002cec7aeb7987bde842b9e00ee3b');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
