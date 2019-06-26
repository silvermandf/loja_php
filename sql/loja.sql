-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jun-2019 às 02:56
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'esporte'),
(2, 'escolar'),
(3, 'mobilidade'),
(4, 'guloseimas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `descricao` text,
  `categoria_id` int(11) DEFAULT NULL,
  `usado` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `categoria_id`, `usado`) VALUES
(4, 'LÃ¡pis', '2.00', 'LÃ¡pis melhorado, com borracha.', 2, 0),
(8, 'Ps4', '1205.00', 'PS4 FAT com dois controles e 1 jogo em mÃ­dia fÃ­sica.', 1, 1),
(11, 'Carro', '40000.00', 'Descrição do produto...', 3, 0),
(14, 'Spider-man', '199.00', 'Descrição do produto...', 3, 0),
(15, 'Anthem', '199.00', 'Jogo totalmente futurÃ­stico, ultramente foda e diferenciado!', 3, 0),
(18, 'Doce de amendoim', '20.00', 'Caixa de 1kg contendo doces de amendoim AMENDUPAN', 4, 0),
(19, 'Caneta EsferogrÃ¡fica Preta', '2.00', 'Caneta esferogrÃ¡fica preta da marca Bic. Excelente para provas de concursos e confecÃ§Ã£o de documentos.', 2, 0),
(20, 'Kimono Atama', '350.00', 'Kimono da Marca Atama de fibra tranÃ§ada. Super resistente e lavÃ¡vel.', 1, 0),
(21, 'Astra GS 2005', '11000.00', 'Astra GS bem conservado de cor azul. Rodas aro 17 ano 2005 com documentaÃ§Ã£o em dia.', 3, 1),
(22, 'Fusca verde', '2000.00', 'Fusca verde oliva, bem conservado, com sabor de limÃ£o.', 3, 1),
(23, 'Bola de Futebol', '180.00', 'Bola de Futebol Jabulani. Excelente investimento. Esta bola foi usada na copa 2010 - Ãfrica', 1, 1),
(24, 'Audi a4', '20000.00', 'Audi a4 bem batido', 3, 1),
(25, 'pudim de chocolate', '6.00', 'Pudim de chocolate branco e preto, delicioso.', 4, 0),
(26, 'Monitor Gamer AOC', '2230.00', 'Monitor Gamer com taxa de atualizaÃ§Ã£o 144hz.', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`) VALUES
(1, 'wendel2099@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Wendel Silva'),
(2, 'max2099@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Max AmÃ¢ncio Silva'),
(3, 'max2099@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Max AmÃ¢ncio Silva'),
(4, 'malu2099@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Maria LuÃ­za');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
