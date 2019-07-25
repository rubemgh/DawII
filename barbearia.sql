-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Jul-2019 às 03:42
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbearia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'Barbas'),
(2, 'Cortes'),
(3, 'Sobrancelha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`) VALUES
(1, 'Felipe'),
(2, 'Natalia'),
(4, 'Lucelia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id`, `nome`, `preco`, `descricao`, `imagem`) VALUES
(1, 'Degrade', 25, 'com linha', 'degrade1.jpg'),
(2, 'Degrade', 25, 'com desenho', 'degrade2.jpg'),
(3, 'Degrade', 25, 'sem lavagem', 'degrade3.jpg'),
(4, 'Maquina', 15, 'com lavagem', 'maquinaetesoura.jpg'),
(5, 'barba', 10, 'so as pontas', 'barba.jpg'),
(6, 'sombrancelha', 10, 'bem fina', 'sombrancelha.jpg'),
(7, 'barba', 10, 'cavanhaque estilizado', 'barba2.jpg'),
(8, 'degrade', 15, 'com desenho', 'degradedesenho.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `celular`, `telefone`, `datanasc`, `tipo`, `senha`) VALUES
(5, 'Rubem', 'rubemgh23@gmail.com', '988558582', '46234093', '1994-06-10', 'Administrador', '13908fe4d3eb986b2465acdb50398d4c1622836a5a1632257ff065c13156c052'),
(6, 'raul', 'Raul23@gmail.com', '985587755', '3245685', '1999-05-12', 'Usuario', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(7, 'Charles', 'Cha565@gmail.com', '9858866898', '3245685', '1999-05-12', 'Usuario', 'c1b4f8de804cb1ac668a0e56b5b67b0a8b7c96d3fb0c7828691b941b0e553583'),
(8, 'Brucely', 'Bruce24@gmail.com', '985588658', '46232586', '1995-04-05', 'Usuario', 'd0c9e369bee256f4b0182a503babb685ee7b00419c985fb423a47bfb0eb89f56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `quantidade` varchar(255) DEFAULT NULL,
  `data_venda` date DEFAULT NULL,
  `maneira_pagar` varchar(255) DEFAULT NULL,
  `valor_total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `quantidade`, `data_venda`, `maneira_pagar`, `valor_total`) VALUES
(1, '1', '2004-04-04', 'dinheiro', 25),
(2, '2', '2005-05-05', 'dinheiro', 25),
(3, '1', '2005-05-07', 'cartao', 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_func_serv`
--

CREATE TABLE `venda_func_serv` (
  `id` int(11) NOT NULL,
  `quantidade` varchar(255) DEFAULT NULL,
  `id_vendas` int(11) DEFAULT NULL,
  `id_funcionario` int(11) DEFAULT NULL,
  `id_serv` int(11) DEFAULT NULL,
  `valor` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda_func_serv`
--

INSERT INTO `venda_func_serv` (`id`, `quantidade`, `id_vendas`, `id_funcionario`, `id_serv`, `valor`) VALUES
(5, '1', 1, 1, 1, 60),
(6, '2', 2, 2, 2, 45.55),
(7, '2', 1, 1, 1, 52.85),
(9, '1', 2, 2, 3, 75.55),
(11, '1', 2, 2, 2, 65);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venda_func_serv`
--
ALTER TABLE `venda_func_serv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_vendas` (`id_vendas`),
  ADD KEY `id_funcionario` (`id_funcionario`),
  ADD KEY `id_serv` (`id_serv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `venda_func_serv`
--
ALTER TABLE `venda_func_serv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `venda_func_serv`
--
ALTER TABLE `venda_func_serv`
  ADD CONSTRAINT `venda_func_serv_ibfk_1` FOREIGN KEY (`id_vendas`) REFERENCES `vendas` (`id`),
  ADD CONSTRAINT `venda_func_serv_ibfk_2` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionario` (`id`),
  ADD CONSTRAINT `venda_func_serv_ibfk_3` FOREIGN KEY (`id_serv`) REFERENCES `servico` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
