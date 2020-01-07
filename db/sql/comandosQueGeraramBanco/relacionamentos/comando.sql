ALTER TABLE saida ADD COLUMN barco INT NOT NULL AFTER id;
   ALTER TABLE saida ADD  FOREIGN KEY (barco) REFERENCES embarcacao (id) ;
   ALTER TABLE manutencao ADD COLUMN mecanico INT NOT NULL AFTER id;
   ALTER TABLE manutencao ADD  FOREIGN KEY (mecanico) REFERENCES usuario (id);
   ALTER TABLE manutencao ADD COLUMN barco INT NOT NULL AFTER id;
   ALTER TABLE manutencao ADD  FOREIGN KEY (barco) REFERENCES embarcacao (id);
   ALTER TABLE passageiros ADD  FOREIGN KEY (id_saida) REFERENCES saida (id) ;
   ALTER TABLE embarcacao ADD COLUMN dono INT NOT NULL AFTER id;
   ALTER TABLE embarcacao ADD  FOREIGN KEY (dono) REFERENCES usuario (id) ;
ALTER TABLE usuario_perfil ADD  FOREIGN KEY (usuarioID) REFERENCES usuario (id) ;
   ALTER TABLE usuario_perfil ADD  FOREIGN KEY (perfilID) REFERENCES perfil (id) ;
   