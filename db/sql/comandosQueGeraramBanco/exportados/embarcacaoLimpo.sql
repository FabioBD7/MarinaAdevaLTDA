CREATE TABLE `embarcacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `dono` int(11) NOT NULL,
  `nome` varchar(120) DEFAULT NULL,
  `modelo` varchar(75) NOT NULL,
  `tipo` enum('Lancha','Veleiro','Escuna','Pesqueiro','Trawler','CatamarÔö£├║','Iate','Jet-Ski','Jet Boat','Caiaque','Caiaque','Prancha de surf/windsurf','outro') NOT NULL DEFAULT 'outro',
  `tamanho` int(3) NOT NULL,
  `observacao` varchar(500) DEFAULT NULL,
       CONSTRAINT `embarcacao_ibfk_1` FOREIGN KEY (`dono`) REFERENCES `usuario` (`id`) 
       ON UPDATE CASCADE
          on delete restrict
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;