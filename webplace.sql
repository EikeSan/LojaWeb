-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Dez-2015 às 02:02
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webplace`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_cliente`
--

CREATE TABLE IF NOT EXISTS `t_cliente` (
  `NOME` varchar(30) COLLATE latin1_bin NOT NULL,
  `EMAIL` varchar(30) COLLATE latin1_bin NOT NULL,
  `TELEFONE` int(10) NOT NULL,
  `SEXO` char(1) COLLATE latin1_bin NOT NULL,
  `DATA_NASCIMENTO` date NOT NULL,
  `CPF` int(15) NOT NULL,
  `SENHA` varchar(80) COLLATE latin1_bin NOT NULL,
  `IDENTIFICACAO` varchar(30) COLLATE latin1_bin NOT NULL,
  `ENDERECO` varchar(40) COLLATE latin1_bin NOT NULL,
  `BAIRRO` varchar(30) COLLATE latin1_bin NOT NULL,
  `NUMERO` int(5) NOT NULL,
  `CIDADE` varchar(20) COLLATE latin1_bin NOT NULL,
  `ESTADO` varchar(20) COLLATE latin1_bin NOT NULL,
  `CEP` int(10) NOT NULL,
  `COMPLEMENTO` varchar(50) COLLATE latin1_bin NOT NULL,
  `LOGIN` varchar(25) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Extraindo dados da tabela `t_cliente`
--

INSERT INTO `t_cliente` (`NOME`, `EMAIL`, `TELEFONE`, `SEXO`, `DATA_NASCIMENTO`, `CPF`, `SENHA`, `IDENTIFICACAO`, `ENDERECO`, `BAIRRO`, `NUMERO`, `CIDADE`, `ESTADO`, `CEP`, `COMPLEMENTO`, `LOGIN`) VALUES
('dsdsa', 'sdasda@dfasdas.com', 655645, 'm', '1993-12-17', 5151545, '6028362', 'dasdas', 'dsdas', 'dsadasd', 55, 'dsadasd', 'sdsadsa', 57035400, 'dsdasdas', 'diogofb92'),
('dsda', 'diogofb93@hotmail.com', 564456, 'm', '2565-07-01', 156651231, '6028362', 'dsda', 'dsdas', 'sadad', 546, 'dasdasdajh', 'dahuidhaius', 55454, 'dasda', 'diogo'),
('dsdadas', 'diogofb93@hotmail.com', 2147483647, 'm', '1993-12-17', 2147483647, '6028362', 'teste', 'csadasda', 'dasdad', 85, 'dsadsa', 'dsada cas', 57035400, 'scsadas', 'diogofb93');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_funcionario`
--

CREATE TABLE IF NOT EXISTS `t_funcionario` (
  `NOME` varchar(30) COLLATE latin1_bin NOT NULL,
  `EMAIL` varchar(30) COLLATE latin1_bin NOT NULL,
  `TELEFONE` int(10) NOT NULL,
  `SEXO` char(1) COLLATE latin1_bin NOT NULL,
  `CARGO` varchar(20) COLLATE latin1_bin NOT NULL,
  `DATA_NASCIMENTO` date NOT NULL,
  `CPF` int(15) NOT NULL,
  `SENHA` varchar(15) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_nf`
--

CREATE TABLE IF NOT EXISTS `t_nf` (
`COD_NF` int(9) NOT NULL,
  `VALOR_UNITARIO` float DEFAULT NULL,
  `QTDE` int(4) DEFAULT NULL,
  `DATA_EMISSAO` date DEFAULT NULL,
  `COD_PRODUTO` int(11) NOT NULL,
  `login` varchar(25) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Extraindo dados da tabela `t_nf`
--

INSERT INTO `t_nf` (`COD_NF`, `VALOR_UNITARIO`, `QTDE`, `DATA_EMISSAO`, `COD_PRODUTO`, `login`) VALUES
(87, 1700, 1, '2015-12-15', 8, 'diogofb93'),
(88, 1700, 1, '2015-12-15', 8, 'diogofb93'),
(90, 1700, 1, '2015-12-16', 8, 'diogofb93'),
(91, 1700, 1, '2015-12-16', 8, 'diogofb93'),
(92, 5654.59, 1, '2015-12-16', 14, 'diogofb93');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_produto`
--

CREATE TABLE IF NOT EXISTS `t_produto` (
  `COD_PRODUTO` int(5) NOT NULL DEFAULT '0',
  `QTDE_ESTOQUE` int(5) DEFAULT NULL,
  `VALOR_UNITARIO` float(10,2) DEFAULT NULL,
  `NOME_PRODUTO` varchar(30) COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Extraindo dados da tabela `t_produto`
--

INSERT INTO `t_produto` (`COD_PRODUTO`, `QTDE_ESTOQUE`, `VALOR_UNITARIO`, `NOME_PRODUTO`) VALUES
(1, 5, 999.99, 'Strike'),
(2, 5, 999.99, 'Phantom'),
(3, 5, 200.00, 'Processador :I3'),
(4, 5, 350.00, 'Memoria ram: 8GB HYPERX'),
(5, 5, 600.00, 'Placa de video :gtx150000'),
(6, 5, 350.00, 'Fonte: corsair 650W'),
(7, 6, 200.00, 'Gabinete: Strike'),
(8, 5, 1700.00, 'Computador STRIKE'),
(9, 5, 2000.00, 'Processador: I10 1212'),
(10, 5, 954.59, 'Placa de video: GTX 150000TI'),
(11, 5, 1600.00, 'Memoria RAM: 35GB Corsair DDR8'),
(12, 5, 700.00, 'Fonte: Corsair 750W'),
(13, 5, 400.00, 'Gabinete: Phantom'),
(14, 5, 5654.59, 'PC: Phantom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_cliente`
--
ALTER TABLE `t_cliente`
 ADD PRIMARY KEY (`CPF`);

--
-- Indexes for table `t_funcionario`
--
ALTER TABLE `t_funcionario`
 ADD PRIMARY KEY (`CPF`);

--
-- Indexes for table `t_nf`
--
ALTER TABLE `t_nf`
 ADD PRIMARY KEY (`COD_NF`), ADD KEY `FK_COD_PRODUTO` (`COD_PRODUTO`);

--
-- Indexes for table `t_produto`
--
ALTER TABLE `t_produto`
 ADD PRIMARY KEY (`COD_PRODUTO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_nf`
--
ALTER TABLE `t_nf`
MODIFY `COD_NF` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `t_nf`
--
ALTER TABLE `t_nf`
ADD CONSTRAINT `FK_COD_PRODUTO` FOREIGN KEY (`COD_PRODUTO`) REFERENCES `t_produto` (`COD_PRODUTO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
