CREATE TABLE Apresentacao (
  codigoApresentacao INT NOT NULL AUTO_INCREMENT,
  codigoImagem INTEGER UNSIGNED NOT NULL,
  textoApresentacao VARCHAR(1000) NULL,
  PRIMARY KEY(codigoApresentacao),
  INDEX Apresentacao_FKIndex1(codigoImagem)
);

CREATE TABLE Contato (
  codigoContato INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  codigoTipoContato INTEGER UNSIGNED NOT NULL,
  nomeContato VARCHAR(50) NOT NULL,
  PRIMARY KEY(codigoContato),
  INDEX Contato_FKIndex1(codigoTipoContato)
);

CREATE TABLE Contato_has_Membros (
  codigoContato INTEGER UNSIGNED NOT NULL,
  codigoMembro INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(codigoContato, codigoMembro),
  INDEX Contato_has_Membros_FKIndex1(codigoContato),
  INDEX Contato_has_Membros_FKIndex2(codigoMembro)
);

CREATE TABLE Imagens (
  codigoImagem INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  codigoTipoImagem INTEGER UNSIGNED NOT NULL,
  enderecoImagem VARCHAR(20000) NOT NULL,
  PRIMARY KEY(codigoImagem),
  INDEX Imagens_FKIndex1(codigoTipoImagem)
);

CREATE TABLE ImagensPostagens (
  codigoImagem INTEGER UNSIGNED NOT NULL,
  codigoPostagem INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(codigoImagem, codigoPostagem),
  INDEX Imagens_has_Postagens_FKIndex1(codigoImagem),
  INDEX Imagens_has_Postagens_FKIndex2(codigoPostagem)
);

CREATE TABLE Membros (
  codigoMembro INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  codigoImagem INTEGER UNSIGNED NOT NULL,
  nomeMembro VARCHAR(100) NULL,
  sobreMembro VARCHAR(2000) NULL,
  PRIMARY KEY(codigoMembro),
  INDEX Membros_FKIndex1(codigoImagem)
);

CREATE TABLE Permissoes (
  codigoPermissao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  tipoPermissao VARCHAR(15) NOT NULL,
  PRIMARY KEY(codigoPermissao)
);

CREATE TABLE Postagens (
  codigoPostagem INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  conteudoPostagem VARCHAR(1073741824) NOT NULL,
  facebookPostagem VARCHAR(3000) NULL,
  youtubePostagem VARCHAR(200) NULL,
  dataPostagem DATETIME NOT NULL,
  tituloPostagem VARCHAR(100) NOT NULL,
  PRIMARY KEY(codigoPostagem)
);

CREATE TABLE ReferenciaMapa (
  codigoReferenciaMapa INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  latitudeReferenciaMapa INTEGER UNSIGNED NULL,
  longitudeReferenciaMapa INTEGER UNSIGNED NULL,
  PRIMARY KEY(codigoReferenciaMapa)
);

CREATE TABLE TipoContato (
  codigoTipoContato INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descricaoTipoContato INTEGER UNSIGNED NULL,
  PRIMARY KEY(codigoTipoContato)
);

CREATE TABLE TiposImagem (
  codigoTipoImagem INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nomeTipoImagem VARCHAR(50) NOT NULL,
  PRIMARY KEY(codigoTipoImagem)
);

CREATE TABLE Usuarios (
  codigoUsuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Permissoes_codigoPermissao INTEGER UNSIGNED NOT NULL,
  loginUsuario VARCHAR(200) NOT NULL,
  senhaUsuario VARCHAR(1000) NOT NULL,
  emailUsuario VARCHAR(100) NOT NULL,
  PRIMARY KEY(codigoUsuario),
  INDEX Usuarios_FKIndex1(Permissoes_codigoPermissao)
);


