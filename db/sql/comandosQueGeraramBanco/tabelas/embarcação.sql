CREATE TABLE embarcacao (
id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(120) ,
modelo VARCHAR(75) NOT NULL,
tipo ENUM('Lancha','Veleiro','Escuna','Pesqueiro','Trawler','Catamarã','Iate','Jet-Ski','Jet Boat','Caiaque','Caiaque','Prancha de surf/windsurf','outro') NOT NULL DEFAULT 'outro',
tamanho int(3) NOT NULL,
observacao VARCHAR(500),
PRIMARY KEY (id)
);