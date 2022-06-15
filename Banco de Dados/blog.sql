-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jun-2022 às 12:46
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
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `data` date NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `data`, `image`) VALUES
(1, 'teste02', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac tempus felis, a tristique nulla. Aliquam varius neque leo, vitae pellentesque eros porttitor vitae. Morbi at viverra elit.', '2022-06-07', 'uploads/depositphotos_93376372-stock-photo-sunset-over-sea-pier.jpg'),
(2, 'teste05', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac tempus felis, a tristique nulla. Aliquam varius neque leo, vitae pellentesque eros porttitor vitae. Morbi at viverra elit.', '2022-06-07', 'uploads/0_i1v1In2Tn4Stnwnl.jpg'),
(3, 'Post criado direto do banco', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac tempus felis, a tristique nulla. Aliquam varius neque leo, vitae pellentesque eros porttitor vitae. Morbi at viverra elit.', '2022-06-10', 'uploads/teste-de-liderança.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `login`, `senha`) VALUES
(3, 'robsongerson', 'e5bce2837680b29cc9b66d1bf3407127'),
(4, 'gabifernandes', 'ce4b1f5a6108e210488cb5ddf3da5014'),
(5, 'joaovictorADM', 'ba6a2c8a1f4ae748de9655f16c7936ff');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
