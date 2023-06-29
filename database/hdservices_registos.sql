INSERT INTO services (nome, referencia, precoHora, iva_id)
VALUES
  ('Book 15 fotos', 'HDSBOOK30FOTS', 30.00, 1),
  ('Book 30 fotos', 'HDSBOOK30FTS', 60.00, 1),
  ('Video promocional - 1 min', 'HDSPROMOVID1', 50.00, 2),
  ('Video de longa duração - até 20 min', 'HDSVIDLD20', 70.00, 2),
  ('Edição de Video', 'EDITVID008', 25.00, 3),
  ('Edição de foto', 'EDITFT0003', 19.00, 3),
  ('Pós-Produção', 'POSPROD12', 15.00, 4);
  
  INSERT INTO ivas (valor, descricao, estado)
VALUES
  (23, 'Taxa Normal', 'Ativo'),
  (13, 'Taxa Intermédia', 'Ativo'),
  (6, 'Taxa Reduzida', 'Ativo'),
  (3, 'Taxa COVID', 'Ativo');
  
INSERT INTO users (nome, username, password, email, telefone, nif, morada, localidade, codpostal, role)
VALUES
  ('Renato Silva', 'renatosilva', 'passw0rd', 'dadomingues2003@gmail.com', 912345678, 123456789, 'Rua Principal', 'Leiria', '2400-001', 2),
  ('Isabel Gonçalves', 'isagonca', 'passw0rd', 'dadomingues2003@gmail.com', 923456789, 987654321, 'Avenida 22 de Maio', 'Leiria', '2400-002', 2),
  ('Ricardo Esteves', 'resteves', 'passw0rd', 'dadomingues2003@gmail.com', 934567890, 654321987, 'Rua Alto do Vieiro', 'Leiria', '2400-003', 3),
  ('Pedro Dias', 'pedrodias', 'passw0rd', 'dadomingues2003@gmail.com', 945678901, 789456123, 'Avenda Marquês de Pombal', 'Leiria', '2400-004', 3),
  ('João Duarte', 'jduarte', 'passw0rd', 'dadomingues2003@gmail.com', 956789012, 321654987, 'Rua das Almoinhas', 'Leiria', '2400-005', 3);