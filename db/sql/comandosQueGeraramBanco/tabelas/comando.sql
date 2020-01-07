CREATE TABLE embarcacao (
id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(120) ,
modelo VARCHAR(75) NOT NULL,
tipo ENUM('Lancha','Veleiro','Escuna','Pesqueiro','Trawler','Catamarã','Iate','Jet-Ski','Jet Boat','Caiaque','Caiaque','Prancha de surf/windsurf','outro') NOT NULL DEFAULT 'outro',
tamanho int(3) NOT NULL,
observacao VARCHAR(500),
PRIMARY KEY (id)
);
CREATE TABLE manutencao (
id INT NOT NULL AUTO_INCREMENT,
tipo ENUM('de saida','rotina','avaria'),
data DATE NOT NULL,
obs VARCHAR(500),
pecas DECIMAL(7,2) ,
maodeobra DECIMAL(7,2) NOT NULL,
PRIMARY KEY (id)
);
CREATE TABLE passageiros(
id INT AUTO_INCREMENT PRIMARY KEY,
id_saida int,
 nome VARCHAR(120) NOT NULL,
rg VARCHAR(12) NOT NULL  
 );
 CREATE TABLE perfil (
id INT NOT NULL AUTO_INCREMENT,
perfil VARCHAR(20)  NOT NULL,
PRIMARY KEY (id)
);
CREATE TABLE saida (
id INT NOT NULL AUTO_INCREMENT,
saida DATETIME NOT NULL,
retorno DATETIME,
obs VARCHAR(500),
preco DECIMAL(7,2) NOT NULL,
PRIMARY KEY (id)
);
CREATE TABLE usuario (
id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(120) NOT NULL,
email VARCHAR(75) NOT NULL,
status ENUM('A','I') NOT NULL DEFAULT 'A',
PRIMARY KEY (id)
)CREATE TABLE usuario_perfil (
  `usuarioID` int(11) NOT NULL  ,
  `perfilID` int(11) NOT NULL  ,
  PRIMARY KEY (usuarioID,perfilID)
   );