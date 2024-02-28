DROP DATABASE IF EXISTS `damnsblog`;
CREATE DATABASE IF NOT EXISTS `damnsblog` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `damnsblog`;



-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela rblog.bloginfo
CREATE TABLE IF NOT EXISTS `bloginfo` (
  `bloginfo_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `bloginfo_titulo` varchar(250) NOT NULL,
  `bloginfo_corpo` longtext NOT NULL,
  `bloginfo_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`bloginfo_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela rblog.blogimg
CREATE TABLE IF NOT EXISTS `blogimg` (
  `blogimg_codigo` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `blogimg_nome` varchar(250) DEFAULT NULL,
  `blogimg_nomerandom` varchar(250) DEFAULT NULL,
	fk_codigo_img INT,
	FOREIGN KEY(fk_codigo_img) REFERENCES bloginfo(bloginfo_codigo) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela rblog.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_nome` varchar(250) DEFAULT NULL,
  `usuario_email` varchar(250) DEFAULT NULL,
  `usuario_senha` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`usuario_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=LATIN1;

-- Copiando estrutura para tabela rblog.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `blog_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `blog_bloginfo_codigo` int(11) NOT NULL DEFAULT '0',
  `blog_blogimg_codigo` int(11) NOT NULL DEFAULT '0',
  `blog_usuario_codigo` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`blog_codigo`),
  KEY `blog_bloginfo_codigo` (`blog_bloginfo_codigo`),
  KEY `blog_blogimg_codigo` (`blog_blogimg_codigo`),
  KEY `blog_usuario_codigo` (`blog_usuario_codigo`),
  CONSTRAINT `FK_blog_blogimg` FOREIGN KEY (`blog_blogimg_codigo`) REFERENCES `blogimg` (`blogimg_codigo`),
  CONSTRAINT `FK_blog_bloginfo` FOREIGN KEY (`blog_bloginfo_codigo`) REFERENCES `bloginfo` (`bloginfo_codigo`),
  CONSTRAINT `FK_blog_usuario` FOREIGN KEY (`blog_usuario_codigo`) REFERENCES `usuario` (`usuario_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=LATIN1;