Drop database if exists hdservices;
CREATE DATABASE hdservices;
--
-- Table structure for table `empresas`
--

use hdservices;



CREATE TABLE `empresas` (
  `name` varchar(15) NOT NULL,
  `designacao` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int NOT NULL,
  `nif` int NOT NULL,
  `morada` varchar(45) NOT NULL,
  `localidade` varchar(15) NOT NULL,
  `codPostal` varchar(8) NOT NULL,
  `capSocial` decimal(10,2) NOT NULL,
  `id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int NOT NULL UNIQUE,
  `nif` int NOT NULL UNIQUE,
  `morada` varchar(45) NOT NULL,
  `localidade` varchar(15) NOT NULL,
  `codpostal` varchar(8) NOT NULL,
  `role` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `ivas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `valor` int NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `estado` enum('Ativo','Inativo') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `referencia` varchar(20) NOT NULL,
  `precoHora` decimal(8,2) NOT NULL,
  `iva_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `iva_servico_idx` (`iva_id`),
  CONSTRAINT `iva_id` FOREIGN KEY (`iva_id`) REFERENCES `ivas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `folhaobras` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `ivatotal` decimal(8,2) NOT NULL,
  `estado` enum('Em lançamento','Emitida','Paga','Anulada') NOT NULL,
  `id_cliente` int NOT NULL,
  `id_funcionario` int NOT NULL,
  `id_empresa` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `id_cliente_idx` (`id_cliente`),
  KEY `d_empresa_idx` (`id_empresa`),
  CONSTRAINT `id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `users` (`id`),
  CONSTRAINT `id_emp` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id`),
  CONSTRAINT `id_funcionario` FOREIGN KEY (`id_cliente`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `linhaobras` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quantidade` int NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `valiva` decimal(8,2) NOT NULL,
  `id_folhaobra` int NOT NULL,
  `id_service` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `id_folhaobra_idx_idx` (`id_folhaobra`),
  KEY `id_service_idx` (`id_service`),
  CONSTRAINT `id_folhaobra` FOREIGN KEY (`id_folhaobra`) REFERENCES `folhaobras` (`id`),
  CONSTRAINT `id_service` FOREIGN KEY (`id_service`) REFERENCES `services` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `empresas` VALUES ('HD Services','Serviços Audiovisuais','noreply@hdservices.botelho.eu.org',244509508,520123123,'Rua Alto do Vieiro','Leiria','2400-900',5392178.00,1);

INSERT INTO `users` VALUES (1,'Administrador','admin','passw0rd','dadomingues2003@gmail.com',915556443,209087065,'Rua Principal','Leiria','2423-009','1');