ALTER TABLE manutencao ADD COLUMN mecanico INT NOT NULL AFTER id;
   ALTER TABLE manutencao ADD  FOREIGN KEY (mecanico) REFERENCES usuario (id);
   ALTER TABLE manutencao ADD COLUMN barco INT NOT NULL AFTER id;
   ALTER TABLE manutencao ADD  FOREIGN KEY (barco) REFERENCES embarcacao (id);