CREATE TABLE manutencao (
id INT NOT NULL AUTO_INCREMENT,
tipo ENUM('de saida','rotina','avaria'),
data DATE NOT NULL,
obs VARCHAR(500),
pecas DECIMAL(7,2) ,
maodeobra DECIMAL(7,2) NOT NULL,
PRIMARY KEY (id)
);
