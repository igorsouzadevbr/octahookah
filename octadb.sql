-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para octa
CREATE DATABASE IF NOT EXISTS `octa` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `octa`;

-- Copiando estrutura para tabela octa.options_box
CREATE TABLE IF NOT EXISTS `options_box` (
  `user` varchar(50) DEFAULT NULL,
  `payment` int(11) DEFAULT NULL,
  `sabores` varchar(50) DEFAULT NULL,
  `tamanho` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela octa.options_box: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `options_box` DISABLE KEYS */;
/*!40000 ALTER TABLE `options_box` ENABLE KEYS */;

-- Copiando estrutura para tabela octa.options_hookah
CREATE TABLE IF NOT EXISTS `options_hookah` (
  `user` varchar(50) DEFAULT NULL,
  `paymentid` int(11) DEFAULT NULL,
  `stem` varchar(50) DEFAULT NULL,
  `vaso` varchar(50) DEFAULT NULL,
  `rosh` varchar(50) DEFAULT NULL,
  `prato` varchar(50) DEFAULT NULL,
  `mangueira` varchar(50) DEFAULT NULL,
  `piteira` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela octa.options_hookah: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `options_hookah` DISABLE KEYS */;
/*!40000 ALTER TABLE `options_hookah` ENABLE KEYS */;

-- Copiando estrutura para tabela octa.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(50) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `valor` varchar(50) DEFAULT NULL,
  `frete` varchar(50) DEFAULT NULL,
  `formapagto` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela octa.pedidos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;

-- Copiando estrutura para tabela octa.wirecard_payments
CREATE TABLE IF NOT EXISTS `wirecard_payments` (
  `id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela octa.wirecard_payments: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `wirecard_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `wirecard_payments` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
