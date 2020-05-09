-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Maio-2020 às 05:48
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fbank`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `deposito` (IN `conta1` VARCHAR(25), IN `valor1` FLOAT)  BEGIN
	UPDATE contas SET valor=valor+valor1 WHERE idconta=conta1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `transferencia` (IN `pagador1` FLOAT, IN `favorecido1` FLOAT, IN `valor1` FLOAT)  BEGIN

UPDATE contas SET valor=valor-valor1 WHERE idconta=pagador1;
UPDATE contas SET valor=valor+valor1 WHERE idconta=favorecido1;

END$$

--
-- Funções
--
CREATE DEFINER=`root`@`localhost` FUNCTION `rendimento` (`saldo` FLOAT(30)) RETURNS VARCHAR(30) CHARSET utf8mb4 BEGIN
 	RETURN saldo*0.1;
 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE `contas` (
  `idconta` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `conta` varchar(15) NOT NULL,
  `valor` float NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contas`
--

INSERT INTO `contas` (`idconta`, `nome`, `conta`, `valor`, `foto`) VALUES
(1, 'Giulliany Lima Bezerra', '0001', 100, 'assets\\images\\Giu.jpg'),
(2, 'Jheymerson Lira Aranha', '0002', 100, 'assets\\images\\Jheymerson.jpg'),
(3, 'Klederson Rocha Soares', '0003', 200, 'assets\\images\\Klederson.jpg'),
(4, 'Stefani Carol Almeida', '0004', 100, 'assets\\images\\Carol.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacoes`
--

CREATE TABLE `transacoes` (
  `idtransacao` int(11) NOT NULL,
  `pagador` int(11) NOT NULL,
  `favorecido` int(11) NOT NULL,
  `valortransferencia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contas`
--
ALTER TABLE `contas`
  ADD PRIMARY KEY (`idconta`);

--
-- Índices para tabela `transacoes`
--
ALTER TABLE `transacoes`
  ADD PRIMARY KEY (`idtransacao`),
  ADD KEY `favorecido` (`favorecido`),
  ADD KEY `pagador` (`pagador`) USING BTREE;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contas`
--
ALTER TABLE `contas`
  MODIFY `idconta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `transacoes`
--
ALTER TABLE `transacoes`
  MODIFY `idtransacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `transacoes`
--
ALTER TABLE `transacoes`
  ADD CONSTRAINT `favorecido` FOREIGN KEY (`favorecido`) REFERENCES `contas` (`idconta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pagador` FOREIGN KEY (`pagador`) REFERENCES `contas` (`idconta`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
