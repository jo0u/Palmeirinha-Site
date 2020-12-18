-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2019 às 19:31
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cz1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cz_receita`
--

CREATE TABLE `cz_receita` (
  `id` int(4) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `sexo` varchar(11) DEFAULT NULL,
  `prof` tinyint(1) NOT NULL,
  `receita` varchar(20) DEFAULT NULL,
  `ig` text NOT NULL,
  `prep` text NOT NULL,
  `contato` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cz_receita`
--

INSERT INTO `cz_receita` (`id`, `nome`, `pais`, `estado`, `sexo`, `prof`, `receita`, `ig`, `prep`, `contato`) VALUES
(29, 'Ãtalo dos Santos Hohenfeld', 'Brasil', 'BA', 'M', 1, 'cuscuz', '1 pacote de farinha de milho\r\n2 cebolas\r\n1 tomate\r\n1 pitada de sal\r\n1 pitada de aÃ§Ãºcar', 'primeiro hidrate a massa do cuscuz em seguida coloque na panela \r\n\r\ncorte a cebola e o tomate e jogue tudo dentro e pronto esta feito seu cuscuz', 86235383);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cz_receita`
--
ALTER TABLE `cz_receita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cz_receita`
--
ALTER TABLE `cz_receita`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
