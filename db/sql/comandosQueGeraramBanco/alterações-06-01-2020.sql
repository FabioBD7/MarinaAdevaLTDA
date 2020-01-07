
//campo numero de passageiros na tabela embarcação 
ALTER TABLE embarcacao ADD COLUMN num_passageiros INT(2) AFTER tamanho     ;

//campo volume do tanque  na tabela embarcação
ALTER TABLE embarcacao ADD COLUMN capacidade_tanque INT(4) AFTER num_passageiros;
 
//nivel do combustivel na tabela saida 
ALTER TABLE saida ADD COLUMN nivel_combustivel int(4) AFTER retorno ;

//criar tabela passageiros com chave estrangeira da tabela saida
CREATE TABLE passageiros(
id INT AUTO_INCREMENT PRIMARY KEY,
id_saida int,
 nome VARCHAR(120) NOT NULL,
rg VARCHAR(12) NOT NULL  
 );
 
 ALTER TABLE passageiros ADD  FOREIGN KEY (id_saida) REFERENCES saida (id) ON UPDATE CASCADE ON DELETE RESTRICT;