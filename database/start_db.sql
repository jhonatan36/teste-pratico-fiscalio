CREATE DATABASE IF NOT EXISTS `teste_pratico_fiscalio`;
USE `teste_pratico_fiscalio`;

CREATE TABLE IF NOT EXISTS `item` (
  `idItem` int(11) NOT NULL,
  `idNota` int(11) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `valor` decimal(15,3) NOT NULL,
  PRIMARY KEY (`idItem`,`idNota`),
  KEY `item_produto_index` (`produto`)
);

CREATE TABLE IF NOT EXISTS `notafiscal` (
  `idNota` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emissor` varchar(150) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`idNota`),
  KEY `notafiscal_data_index` (`data`)
);
