CREATE TABLE autor (
  id_autor INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_autor VARCHAR(255) NULL,
  filiacao_autor VARCHAR(20) NULL,
  telefone VARCHAR (20) NULL,
  email VARCHAR (30) NULL,
  PRIMARY KEY(id_autor)
);

CREATE TABLE categoria (
  id_categoria INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  categoria VARCHAR(40) NULL,
  PRIMARY KEY(id_categoria)
);

CREATE TABLE livros (
  id_livros INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  autor_id_autor INTEGER UNSIGNED NOT NULL,
  categoria_id_categoria INTEGER UNSIGNED NOT NULL,
  local_entrega VARCHAR(20) NULL,
  data_entrega VARCHAR(15) NULL,
  especificacao VARCHAR(100) NULL,
  quantidade INTEGER NULL, 
  PRIMARY KEY(id_livros),
  INDEX livros_FKIndex1(categoria_id_categoria),
  INDEX livros_FKIndex2(autor_id_autor)
);

