-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jan-2017 às 08:17
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `najmasafi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE `administradores` (
  `codigoAdministrador` int(10) UNSIGNED NOT NULL,
  `loginAdministrador` varchar(200) DEFAULT NULL,
  `senhaAdministrador` varchar(1000) DEFAULT NULL,
  `emailAministrador` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `backgrounds`
--

CREATE TABLE `backgrounds` (
  `codigoBackground` int(10) UNSIGNED NOT NULL,
  `backgroundNoticias` varchar(200) DEFAULT NULL,
  `backgroundQuemSomos` varchar(200) DEFAULT NULL,
  `backgroundHome` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `backgrounds`
--

INSERT INTO `backgrounds` (`codigoBackground`, `backgroundNoticias`, `backgroundQuemSomos`, `backgroundHome`) VALUES
(1, '../imagens/backgrounds/noticias/background.jpg', 'asd', '../imagens/backgrounds/contato/background.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `codigoContato` int(10) UNSIGNED NOT NULL,
  `telefoneContato` varchar(20) NOT NULL,
  `emailContato` varchar(200) NOT NULL,
  `linkYoutubeContato` varchar(70) DEFAULT NULL,
  `textoYoutubeContato` varchar(100) DEFAULT NULL,
  `linkFacebookContato` varchar(100) DEFAULT NULL,
  `textoFacebookContato` varchar(100) DEFAULT NULL,
  `whatsappContato` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`codigoContato`, `telefoneContato`, `emailContato`, `linkYoutubeContato`, `textoYoutubeContato`, `linkFacebookContato`, `textoFacebookContato`, `whatsappContato`) VALUES
(1, '(51) 3333-1122', '', 'https://www.youtube.com/user/jaquelinequintana', 'Escola Najma Safi', 'https://www.facebook.com/escolanajmasafi/', 'Escola de danças Najma Safi - Canoas/RS', '(51) 8180 5007');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `codigoEndereco` int(10) UNSIGNED NOT NULL,
  `latitudeReferenciaMapaEndereco` int(10) UNSIGNED NOT NULL,
  `longitudeReferenciaMapaEndereco` int(10) UNSIGNED NOT NULL,
  `nomeEndereco` varchar(80) DEFAULT NULL,
  `linkEndereco` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `codigoImagem` int(10) UNSIGNED NOT NULL,
  `codigoTipoImagem` int(10) UNSIGNED NOT NULL,
  `enderecoImagem` varchar(20000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `membros`
--

CREATE TABLE `membros` (
  `codigoMembro` int(10) UNSIGNED NOT NULL,
  `nomeMembro` varchar(100) DEFAULT NULL,
  `sobreMembro` varchar(2000) DEFAULT NULL,
  `enderecoImagemMembro` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `membros`
--

INSERT INTO `membros` (`codigoMembro`, `nomeMembro`, `sobreMembro`, `enderecoImagemMembro`) VALUES
(3, 'asda', 'asdasdasdasd', '../imagens/membros/membro-asda.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

CREATE TABLE `postagens` (
  `codigoPostagem` int(10) UNSIGNED NOT NULL,
  `codigoImagem` int(10) UNSIGNED NOT NULL,
  `conteudoPostagem` longtext NOT NULL,
  `facebookPostagem` varchar(3000) DEFAULT NULL,
  `youtubePostagem` varchar(200) DEFAULT NULL,
  `dataPostagem` datetime NOT NULL,
  `tituloPostagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagens`
--

INSERT INTO `postagens` (`codigoPostagem`, `codigoImagem`, `conteudoPostagem`, `facebookPostagem`, `youtubePostagem`, `dataPostagem`, `tituloPostagem`) VALUES
(1, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla suscipit lectus a sodales faucibus. Cras ut massa libero. Integer et hendrerit ex. Sed efficitur ullamcorper ex, et auctor est. Curabitur in odio urna. Etiam dignissim orci nibh, a placerat eros hendrerit sed. Morbi sit amet augue nec lectus ullamcorper malesuada. Fusce auctor leo nulla, id aliquet turpis vehicula sit amet. Suspendisse tincidunt laoreet turpis, quis imperdiet ligula sagittis ac. Duis vitae dolor eu dui iaculis varius. Aenean lobortis erat eget bibendum eleifend. Phasellus erat magna, pharetra nec odio a, sagittis aliquam eros. Mauris vitae nisl massa.\r\n\r\nPraesent nunc urna, mollis fermentum est non, pharetra semper arcu. Mauris consectetur lobortis interdum. In congue scelerisque massa ut rutrum. Sed varius iaculis finibus. Nulla id dictum augue. Morbi luctus venenatis orci vel tincidunt. Maecenas vel dictum odio, id faucibus felis. Curabitur eget velit lectus. Donec laoreet nisl lorem, eu fermentum eros vehicula nec. Pellentesque quis iaculis est. Aenean sed congue mi. Etiam et sem a leo porta lobortis.\r\n\r\nFusce libero libero, malesuada a augue eu, dapibus faucibus felis. Donec tempor cursus risus a fringilla. Vestibulum malesuada sed augue non pharetra. Phasellus porta elit sit amet lectus convallis, nec facilisis orci pellentesque. Suspendisse gravida sem metus, quis mattis risus iaculis nec. Quisque imperdiet quam nibh, nec blandit ante faucibus nec. Integer eleifend velit turpis, quis mattis urna pellentesque vitae.', 'https://www.facebook.com/escolanajmasafi/?fref=ts', 'https://www.youtube.com/user/jaquelinequintana', '2016-09-25 21:57:00', 'Postagem 1'),
(4, 0, '\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla suscipit lectus a sodales faucibus. Cras ut massa libero. Integer et hendrerit ex. Sed efficitur ullamcorper ex, et auctor est. Curabitur in odio urna. Etiam dignissim orci nibh, a placerat eros hendrerit sed. Morbi sit amet augue nec lectus ullamcorper malesuada. Fusce auctor leo nulla, id aliquet turpis vehicula sit amet. Suspendisse tincidunt laoreet turpis, quis imperdiet ligula sagittis ac. Duis vitae dolor eu dui iaculis varius. Aenean lobortis erat eget bibendum eleifend. Phasellus erat magna, pharetra nec odio a, sagittis aliquam eros. Mauris vitae nisl massa.\n\nPraesent nunc urna, mollis fermentum est non, pharetra semper arcu. Mauris consectetur lobortis interdum. In congue scelerisque massa ut rutrum. Sed varius iaculis finibus. Nulla id dictum augue. Morbi luctus venenatis orci vel tincidunt. Maecenas vel dictum odio, id faucibus felis. Curabitur eget velit lectus. Donec laoreet nisl lorem, eu fermentum eros vehicula nec. Pellentesque quis iaculis est. Aenean sed congue mi. Etiam et sem a leo porta lobortis.\n\nFusce libero libero, malesuada a augue eu, dapibus faucibus felis. Donec tempor cursus risus a fringilla. Vestibulum malesuada sed augue non pharetra. Phasellus porta elit sit amet lectus convallis, nec facilisis orci pellentesque. Suspendisse gravida sem metus, quis mattis risus iaculis nec. Quisque imperdiet quam nibh, nec blandit ante faucibus nec. Integer eleifend velit turpis, quis mattis urna pellentesque vitae.', '', '', '2016-10-12 22:57:58', 'Postagem 2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sistema`
--

CREATE TABLE `sistema` (
  `codigoSistema` int(10) UNSIGNED NOT NULL,
  `backgroundSistema` varchar(200) DEFAULT NULL,
  `fotoInicialSistema` varchar(200) DEFAULT NULL,
  `fotoContatoSistema` varchar(200) DEFAULT NULL,
  `fotoQuemSomosSistema` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `codigoSobre` int(10) UNSIGNED NOT NULL,
  `textoSobre` varchar(20000) NOT NULL,
  `imagemSobre` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`codigoSobre`, `textoSobre`, `imagemSobre`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at tortor ante. Quisque cursus pulvinar neque ac eleifend. Nunc pretium porta scelerisque. Fusce congue metus id eros aliquet, eleifend congue diam auctor. Praesent interdum interdum lorem, eget pharetra arcu tincidunt a. Cras tempus, lectus at euismod feugiat, nisl ipsum malesuada ex, ut egestas velit metus et lorem. Curabitur a fermentum felis. Suspendisse non feugiat enim. Sed at luctus metus. Nulla ornare, ipsum eu sagittis eleifend, ex felis blandit lectus, mattis \n\nluctus et ultrices posuere cubilia Curae; Aliquam quis feugiat ipsum. Aenean tempor id mauris sed vulputate. Praesent porttitor facilisis velit, ut suscipit erat convallis eu. Ut quis quam nec arcu commodo varius. Proin nec auctor nisi. Nulla non mauris lacus. Pellentesque sollicitudin leo nec arcu tempor, ut sodales velit porttitor.', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposimagem`
--

CREATE TABLE `tiposimagem` (
  `codigoTipoImagem` int(10) UNSIGNED NOT NULL,
  `nomeTipoImagem` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codigoUsuario` int(10) UNSIGNED NOT NULL,
  `loginUsuario` varchar(200) DEFAULT NULL,
  `senhaUsuario` varchar(1000) DEFAULT NULL,
  `emailUsuario` varchar(100) DEFAULT NULL,
  `nomeUsuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `codigoUsuario` int(10) UNSIGNED NOT NULL,
  `loginUsuario` varchar(200) DEFAULT NULL,
  `senhaUsuario` varchar(1000) DEFAULT NULL,
  `emailUsuario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codigoUsuario`, `loginUsuario`, `senhaUsuario`, `emailUsuario`) VALUES
(2, 'admin', 'admin', 'admin@najmasafi.com.br');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`codigoAdministrador`);

--
-- Indexes for table `backgrounds`
--
ALTER TABLE `backgrounds`
  ADD PRIMARY KEY (`codigoBackground`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`codigoContato`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`codigoEndereco`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`codigoImagem`),
  ADD KEY `Imagens_FKIndex1` (`codigoTipoImagem`);

--
-- Indexes for table `membros`
--
ALTER TABLE `membros`
  ADD PRIMARY KEY (`codigoMembro`);

--
-- Indexes for table `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`codigoPostagem`),
  ADD KEY `Postagens_FKIndex1` (`codigoImagem`);

--
-- Indexes for table `sistema`
--
ALTER TABLE `sistema`
  ADD PRIMARY KEY (`codigoSistema`);

--
-- Indexes for table `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`codigoSobre`);

--
-- Indexes for table `tiposimagem`
--
ALTER TABLE `tiposimagem`
  ADD PRIMARY KEY (`codigoTipoImagem`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigoUsuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigoUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `codigoAdministrador` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `backgrounds`
--
ALTER TABLE `backgrounds`
  MODIFY `codigoBackground` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `codigoContato` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `codigoEndereco` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `codigoImagem` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `membros`
--
ALTER TABLE `membros`
  MODIFY `codigoMembro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `postagens`
--
ALTER TABLE `postagens`
  MODIFY `codigoPostagem` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sistema`
--
ALTER TABLE `sistema`
  MODIFY `codigoSistema` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sobre`
--
ALTER TABLE `sobre`
  MODIFY `codigoSobre` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tiposimagem`
--
ALTER TABLE `tiposimagem`
  MODIFY `codigoTipoImagem` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigoUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codigoUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `imagens_ibfk_1` FOREIGN KEY (`codigoTipoImagem`) REFERENCES `tiposimagem` (`codigoTipoImagem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
