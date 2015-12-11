-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/12/2015 às 18:08
-- Versão do servidor: 10.0.17-MariaDB
-- Versão do PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `webplace`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `t_cliente`
--

CREATE TABLE `t_cliente` (
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
-- Fazendo dump de dados para tabela `t_cliente`
--

INSERT INTO `t_cliente` (`NOME`, `EMAIL`, `TELEFONE`, `SEXO`, `DATA_NASCIMENTO`, `CPF`, `SENHA`, `IDENTIFICACAO`, `ENDERECO`, `BAIRRO`, `NUMERO`, `CIDADE`, `ESTADO`, `CEP`, `COMPLEMENTO`, `LOGIN`) VALUES
('dsdsa', 'sdasda@dfasdas.com', 655645, 'm', '1993-12-17', 5151545, '6028362', 'dasdas', 'dsdas', 'dsadasd', 55, 'dsadasd', 'sdsadsa', 57035400, 'dsdasdas', 'diogofb92'),
('dsdadas', 'diogofb93@hotmail.com', 2147483647, 'm', '1993-12-17', 2147483647, '6028362', 'teste', 'csadasda', 'dasdad', 85, 'dsadsa', 'dsada cas', 57035400, 'scsadas', 'diogofb93');

-- --------------------------------------------------------

--
-- Estrutura para tabela `t_funcionario`
--

CREATE TABLE `t_funcionario` (
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
-- Estrutura para tabela `t_movimentacao`
--

CREATE TABLE `t_movimentacao` (
  `DATA_MOVIMENTACAO` date DEFAULT NULL,
  `COD_MOVIMENTACAO` int(5) NOT NULL DEFAULT '0',
  `QTDE` int(4) DEFAULT NULL,
  `COD_PRODUTO` int(5) DEFAULT NULL,
  `TIPO_MOVIMENTACAO` char(1) COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

-- --------------------------------------------------------

--
-- Estrutura para tabela `t_nf`
--

CREATE TABLE `t_nf` (
  `COD_PRODUTO` int(5) DEFAULT NULL,
  `VALOR_UNITARIO` float DEFAULT NULL,
  `COD_NF` int(5) NOT NULL DEFAULT '0',
  `QTDE` int(4) DEFAULT NULL,
  `DATA_EMISSAO` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

-- --------------------------------------------------------

--
-- Estrutura para tabela `t_produto`
--

CREATE TABLE `t_produto` (
  `COD_PRODUTO` int(5) NOT NULL DEFAULT '0',
  `QTDE_ESTOQUE` int(5) DEFAULT NULL,
  `VALOR_UNITARIO` float(5,2) DEFAULT NULL,
  `QTDE` int(3) DEFAULT NULL,
  `NOME_PRODUTO` varchar(30) COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `t_cliente`
--
ALTER TABLE `t_cliente`
  ADD PRIMARY KEY (`CPF`);

--
-- Índices de tabela `t_funcionario`
--
ALTER TABLE `t_funcionario`
  ADD PRIMARY KEY (`CPF`);

--
-- Índices de tabela `t_movimentacao`
--
ALTER TABLE `t_movimentacao`
  ADD PRIMARY KEY (`COD_MOVIMENTACAO`),
  ADD KEY `FK_COD_PRODUTO` (`COD_PRODUTO`);

--
-- Índices de tabela `t_nf`
--
ALTER TABLE `t_nf`
  ADD PRIMARY KEY (`COD_NF`),
  ADD KEY `FK_PRODUTO` (`COD_PRODUTO`);

--
-- Índices de tabela `t_produto`
--
ALTER TABLE `t_produto`
  ADD PRIMARY KEY (`COD_PRODUTO`);

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `t_movimentacao`
--
ALTER TABLE `t_movimentacao`
  ADD CONSTRAINT `FK_COD_PRODUTO` FOREIGN KEY (`COD_PRODUTO`) REFERENCES `t_produto` (`COD_PRODUTO`);

--
-- Restrições para tabelas `t_nf`
--
ALTER TABLE `t_nf`
  ADD CONSTRAINT `FK_PRODUTO` FOREIGN KEY (`COD_PRODUTO`) REFERENCES `t_produto` (`COD_PRODUTO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
