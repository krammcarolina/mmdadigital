-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `mmdadigital_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `responsavel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `responsavel`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatosimoveis`
--

CREATE TABLE IF NOT EXISTS `contatosimoveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contato` int(11) NOT NULL,
  `imovel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sigla` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `descricao` varchar(30) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=55 ;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `sigla`, `descricao`) VALUES
(1, 'AC', 'Acre'),
(2, 'AL', 'Alagoas'),
(3, 'AP', 'Amapá'),
(4, 'AM', 'Amazonas'),
(5, 'BA', 'Bahia'),
(6, 'CE', 'Ceará'),
(7, 'DF', 'Distrito Federal'),
(8, 'ES', 'Espírito Santo'),
(9, 'GO', 'Goiás'),
(10, 'MA', 'Maranhão'),
(11, 'MT', 'Mato Grosso'),
(12, 'MS', 'Mato Grosso do Sul'),
(13, 'MG', 'Minas Gerais'),
(14, 'PA', 'Pará'),
(15, 'PB', 'Paraíba'),
(16, 'PR', 'Paraná'),
(17, 'PE', 'Pernambuco'),
(18, 'PI', 'Piauí'),
(19, 'RJ', 'Rio de Janeiro'),
(20, 'RN', 'Rio Grande do Norte'),
(21, 'RS', 'Rio Grande do Sul'),
(22, 'RO', 'Rondônia'),
(23, 'RR', 'Roraima'),
(24, 'SC', 'Santa Catarina'),
(25, 'SP', 'São Paulo'),
(26, 'SE', 'Sergipe'),
(27, 'TO', 'Tocantins'),
(28, 'AC', 'AC'),
(29, 'AL', 'AL'),
(30, 'AP', 'AP'),
(31, 'AM', 'AM'),
(32, 'BA', 'BA'),
(33, 'CE', 'CE'),
(34, 'DF', 'DF'),
(35, 'ES', 'ES'),
(36, 'GO', 'GO'),
(37, 'MA', 'MA'),
(38, 'MT', 'MG'),
(39, 'MS', 'MS'),
(40, 'MG', 'MG'),
(41, 'PA', 'PA'),
(42, 'PB', 'PB'),
(43, 'PR', 'PR'),
(44, 'PE', 'PE'),
(45, 'PI', 'PI'),
(46, 'RJ', 'RJ'),
(47, 'RN', 'RN'),
(48, 'RS', 'RS'),
(49, 'RO', 'RO'),
(50, 'RR', 'RR'),
(51, 'SC', 'SC'),
(52, 'SP', 'SP'),
(53, 'SE', 'SE'),
(54, 'TO', 'TO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formascontatos`
--

CREATE TABLE IF NOT EXISTS `formascontatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contatoid` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `contato` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE IF NOT EXISTS `imagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imovel` int(11) NOT NULL,
  `imagem` varchar(300) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `imovel`, `imagem`) VALUES
(1, 1, '1432010846_calculator-128.png'),
(2, 1, '1432010846_calculator-128.png'),
(3, 1, '1432010846_calculator-128.png'),
(4, 1, '1432010846_calculator-128.png'),
(5, 1, '1432010846_calculator-128.png'),
(6, 1, '1432010846_calculator-128.png'),
(7, 1, '1432010846_calculator-128.png'),
(8, 1, '1432010846_calculator-128.png'),
(9, 1, ''),
(10, 1, ''),
(11, 1, ''),
(12, 1, '9a587626a116a13099daa7ec538fb073.png'),
(13, 1, '8cafb0a0f27bbf4c5328c668b0d3e508.png'),
(14, 1, 'a54b9a868ebbdff0c3fe0f79e5a249e4.png'),
(15, 1, 'aa38740de8c2a6340f872bbdec037b87.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE IF NOT EXISTS `imoveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipoimovel` int(11) NOT NULL,
  `rua` varchar(300) COLLATE latin1_general_ci NOT NULL,
  `numero` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `cidade` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `bairro` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `descricao` text COLLATE latin1_general_ci NOT NULL,
  `tipoanuncio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=32 ;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id`, `tipoimovel`, `rua`, `numero`, `cidade`, `bairro`, `estado`, `descricao`, `tipoanuncio`) VALUES
(1, 1, '', '', '', '', 0, '', 1),
(2, 1, 'rua', '2323', 'Cidade', '', 0, '', 1),
(3, 1, 'rua', 'sdsd', 'cadda', 'bar', 17, 'adssadasd', 1),
(4, 2, 'rua', '33', 'cidade', 'bairro', 19, 'caaadssssfsfsfsf', 1),
(5, 2, 'rua', '33', 'cidade', 'bairro', 19, 'caaadssssfsfsfsf', 1),
(6, 2, 'rua', '33', 'cidade', 'bairro', 19, 'caaadssssfsfsfsf', 1),
(7, 2, 'rua', '33', 'cidade', 'bairro', 19, 'caaadssssfsfsfsf', 1),
(8, 2, 'rua', '33', 'cidade', 'bairro', 19, 'caaadssssfsfsfsf', 1),
(9, 2, 'rua', '33', 'cidade', 'bairro', 19, 'caaadssssfsfsfsf', 1),
(10, 2, 'rua', '33', 'cidade', 'bairro', 19, 'caaadssssfsfsfsf', 1),
(11, 2, 'rua', '33', 'cidade', 'bairro', 19, 'caaadssssfsfsfsf', 1),
(12, 2, 'rua', '33', 'cidade', 'bairro', 19, 'caaadssssfsfsfsf', 1),
(13, 1, 'rua', 'num', 'Porto Alegre', '22', 18, 'hhkhk', 1),
(14, 1, 'rua', 'num', 'Porto Alegre', '22', 18, 'hhkhk', 1),
(15, 1, 'rua', 'num', 'Porto Alegre', '22', 18, 'hhkhk', 1),
(16, 1, 'rua', 'num', 'Porto Alegre', '22', 18, 'hhkhk', 1),
(17, 1, 'QW', 'QWQ', 'Porto Alegre', '22', 15, 'dfdfd', 1),
(18, 1, 'rua', 'QWQ', 'Porto Alegre', 'briaoo', 15, 'jijij', 1),
(19, 1, 'rua', 'QWQ', 'Porto Alegre', 'briaoo', 15, 'jijij', 1),
(20, 1, 'rua', 'QWQ', 'Porto Alegre', 'briaoo', 15, 'jijij', 1),
(21, 1, 'rua', 'num', 'Porto Alegre', '22', 15, 'dgdgd', 1),
(22, 1, 'rua', '2323', 'cidade', 'bairro', 17, 'descricao', 1),
(23, 1, 'rua', '2323', 'cidade', 'bairro', 17, 'descricao', 1),
(24, 1, 'rua', '2323', 'cidade', 'bairro', 17, 'descricao', 1),
(25, 1, 'rua', '2323', 'cidade', 'bairro', 17, 'descricao', 1),
(26, 1, 'rua', '2323', 'cidade', 'bairro', 17, 'descricao', 1),
(27, 1, 'rua', '9898', 'cidade', 'bairro', 17, 'teste', 1),
(28, 1, 'QW', 'oi9', 'i9i9', '9i9i9', 1, 'okokok', 1),
(29, 1, 'QW', 'oi9', 'i9i9', '9i9i9', 1, 'okokok', 1),
(30, 1, 'QW', 'oi9', 'i9i9', '9i9i9', 1, 'okokok', 1),
(31, 1, 'QW', 'oi9', 'i9i9', '9i9i9', 1, 'okokok', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(300) COLLATE latin1_general_ci NOT NULL,
  `pai` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsaveis`
--

CREATE TABLE IF NOT EXISTS `responsaveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposimoveis`
--

CREATE TABLE IF NOT EXISTS `tiposimoveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tiposimoveis`
--

INSERT INTO `tiposimoveis` (`id`, `tipo`) VALUES
(1, 'Apartamento'),
(2, 'Casa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
