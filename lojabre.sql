-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2022 às 13:21
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojabre`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `titulo_banner` varchar(200) NOT NULL,
  `alt` varchar(200) NOT NULL,
  `url_banner` varchar(200) NOT NULL,
  `activo_banner` varchar(45) NOT NULL DEFAULT 'S',
  `imagem_banner` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(150) NOT NULL,
  `ordem_categoria` int(11) NOT NULL,
  `activo_categoria` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`, `ordem_categoria`, `activo_categoria`) VALUES
(1, 'Computadores', 1, 'S'),
(2, 'Componentes', 2, 'S'),
(3, 'Perifericos', 3, 'S'),
(4, 'Armazenamento', 4, 'S'),
(5, 'Gaming', 5, 'S'),
(6, 'Redes/Comunicação', 6, 'S'),
(7, 'Software', 7, 'S'),
(8, 'Consumiveis', 8, 'S'),
(9, 'Acessórios', 9, 'S'),
(10, 'Consolas', 10, 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consolas`
--

CREATE TABLE `consolas` (
  `id_consolas` int(11) NOT NULL,
  `ordem_consolas` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `activo_consolas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `consolas`
--

INSERT INTO `consolas` (`id_consolas`, `ordem_consolas`, `nome`, `activo_consolas`) VALUES
(1, 1, 'PS4 Pro', 'S'),
(2, 2, 'PS4 Slim', 'S'),
(3, 3, 'PS5', 'S'),
(4, 4, 'Consolas Retrogaming', 'N'),
(5, 5, 'Switch', 'S'),
(6, 6, 'Switch Lite', 'S'),
(7, 7, 'Xbox Series S', 'S'),
(8, 8, 'Xbox Series X', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `género`
--

CREATE TABLE `género` (
  `id_genero` int(11) NOT NULL,
  `generos` varchar(45) NOT NULL,
  `ordem_genero` int(11) NOT NULL,
  `generos_activos` varchar(45) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `género`
--

INSERT INTO `género` (`id_genero`, `generos`, `ordem_genero`, `generos_activos`) VALUES
(1, 'Ação', 1, 'S'),
(2, 'Aventura', 2, 'S'),
(3, 'RPG (Role-Playing Games)', 3, 'S'),
(4, 'Simulação', 4, 'S'),
(5, 'Puzzle e Party Games', 5, 'S'),
(6, 'Desporto', 6, 'S'),
(7, 'Estratégia', 7, 'S'),
(8, 'Terrror', 8, 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` decimal(7,2) NOT NULL,
  `imagem_url` varchar(200) NOT NULL,
  `idcategoriaFK` varchar(11) NOT NULL,
  `idsubcategoriaFK` varchar(45) NOT NULL,
  `idconsolasFK` varchar(45) NOT NULL,
  `idgéneroFK` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `preco`, `imagem_url`, `idcategoriaFK`, `idsubcategoriaFK`, `idconsolasFK`, `idgéneroFK`) VALUES
(1, 'Playstation 4', '249.99', 'imagens/playstation4.png', '9', '74', '1', ''),
(2, 'Memória RAM Kingston Fury Beast RGB 8GB', '42.90', 'imagens/Kingston-8GB.png', '1', '7', '', ''),
(3, 'Caixa ATX Nox Hummer Fusion RGB', '70.90', 'imagens/Caixa_PC.png', '1', '3', '', ''),
(4, 'Portatil Lenovo ThinkPad L15', '1202.29', 'imagens/Lenovo-Portátil_L.png', '0', '1', '', ''),
(5, 'Portatil Asus ExpertBook B1 14\" FHD', '798.15', 'imagens/Portatil_Asus.png', '0', '1', '', ''),
(6, 'Processador AMD Ryzen 9 5900X 3.7GHz 12-Core AM4', '445.90', 'imagens/Processador_AMD.png', '1', '4', '', ''),
(7, 'GIGABYTE - VGA AMD RX 6600 EAGLE 8G', '419.90', 'imagens/Placa Gráfica.png', '0', '', '', ''),
(8, 'NOX - Kit Gaming KROM Kritic RGB Rainbow', '35.99', 'imagens/NOX Kit Gaming.png', '4', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategorias`
--

CREATE TABLE `subcategorias` (
  `id_subcategorias` int(11) NOT NULL,
  `subcategoria` varchar(100) NOT NULL,
  `ordem_subcategoria` int(11) NOT NULL,
  `activo_subcategoria` varchar(45) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `subcategorias`
--

INSERT INTO `subcategorias` (`id_subcategorias`, `subcategoria`, `ordem_subcategoria`, `activo_subcategoria`) VALUES
(1, 'Desktops', 1, 'S'),
(2, 'Notebooks', 2, 'S'),
(3, 'Workstations', 3, 'S'),
(4, 'Caixas', 4, 'S'),
(5, 'Processadores', 5, 'S'),
(6, 'Motherboards', 6, 'S'),
(7, 'Placas Gráficas', 7, 'S'),
(8, 'Memórias RAM', 8, 'S'),
(9, 'Discos HDD', 9, 'S'),
(10, 'Discos SSD', 10, 'S'),
(11, 'Drives', 11, 'S'),
(12, 'Fontes de Alimentação', 12, 'S'),
(13, 'Refrigeração', 13, 'S'),
(14, 'Placas TV & Video', 14, 'S'),
(15, 'Placas de Som', 15, 'S'),
(16, 'Acessórios de Componentes', 16, 'S'),
(17, 'Monitores', 17, 'S'),
(18, 'Impressoras', 18, 'S'),
(19, 'Scanners', 19, 'S'),
(20, 'Teclados/Ratos & Apontadores', 20, 'S'),
(21, 'Áudio', 21, 'S'),
(22, 'Webcams', 22, 'S'),
(23, 'Cadeiras', 23, 'S'),
(24, 'Mesas & Secretárias', 24, 'S'),
(25, 'Ups & Energia', 25, 'S'),
(26, 'Videoconferência', 0, 'S'),
(27, 'Quadro Interactivo', 0, 'S'),
(28, 'Mesas de Desenho', 0, 'S'),
(29, 'Hubs e Leitores', 0, 'S'),
(30, 'PenDrives', 0, 'S'),
(31, 'Discos externos', 0, 'S'),
(32, 'Cartões de Memória', 0, 'S'),
(33, 'NAS', 0, 'S'),
(34, 'Caixas p Disco', 0, 'S'),
(35, 'Teclados e Ratos Gaming', 0, 'S'),
(36, 'Auscultadores Gaming', 0, 'S'),
(37, 'Cadeiras e Mesas Gaming', 0, 'S'),
(38, 'Controladores Gaming/Simulação', 0, 'S'),
(39, 'Consolas', 0, 'S'),
(40, 'Router', 0, 'S'),
(41, 'Pontos de Acesso / Repetidores', 0, 'S'),
(42, 'Cabos de Rede', 0, 'S'),
(43, 'Placas de Rede', 0, 'S'),
(44, 'Switch', 0, 'S'),
(45, 'Powerline', 0, 'S'),
(46, 'Injectores/Transceivers/Media Converters', 0, 'S'),
(47, 'Antenas', 0, 'S'),
(48, 'Firewall/Segurança', 0, 'S'),
(49, 'KVM', 0, 'S'),
(50, 'Redes Acessórios', 0, 'S'),
(51, 'Sistemas Operativos', 0, 'S'),
(52, 'Office', 0, 'S'),
(53, 'Servidores', 0, 'S'),
(54, 'Segurança/Anti-Virus', 0, 'S'),
(55, 'Software Gestão', 0, 'S'),
(56, 'Software Diverso', 0, 'S'),
(57, 'Tinteiros Compatíveis', 0, 'S'),
(58, 'Toners Compatíveis', 0, 'S'),
(59, 'Tinteiros Originais', 0, 'S'),
(60, 'Toners Originais', 0, 'S'),
(61, 'Tambores / Drums', 0, 'S'),
(62, 'Fusores / Belt', 0, 'S'),
(63, 'Consumíveis Diversos', 0, 'S'),
(64, 'Filamentos impressão 3D', 0, 'S'),
(65, 'Fitas', 0, 'S'),
(66, 'Papel', 0, 'S'),
(67, 'CDs | DVDs | BLU-RAYs | Caixas Arquivo', 0, 'S'),
(68, 'Pilhas', 0, 'S'),
(69, 'Cabos/Adaptadores', 0, 'S'),
(70, 'Eletricidade', 0, 'S'),
(71, 'Ferramentas', 0, 'S'),
(72, 'Limpeza / Segurança', 0, 'S'),
(73, 'Medidores/Testadores', 0, 'S'),
(74, 'Segurança', 0, 'S'),
(75, 'Consolas', 0, 'S'),
(76, 'Jogos', 0, 'S'),
(77, 'Acessórios de Consolas', 0, 'S'),
(78, 'Gamepads', 0, 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id_utilizador` int(11) NOT NULL,
  `nome_utilizador` varchar(200) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`id_utilizador`, `nome_utilizador`, `email`, `login`, `password`, `create_time`) VALUES
(1, 'Paulo Breda', 'paulobreda31@hotmail.com', 'paulobreda', 'ad9d8ba3c9b7e123ccbd3443fba458ce', '2022-05-31 10:12:54');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `consolas`
--
ALTER TABLE `consolas`
  ADD PRIMARY KEY (`id_consolas`);

--
-- Índices para tabela `género`
--
ALTER TABLE `género`
  ADD PRIMARY KEY (`id_genero`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_pai` (`id_produto`);

--
-- Índices para tabela `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`id_subcategorias`);

--
-- Índices para tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id_utilizador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `consolas`
--
ALTER TABLE `consolas`
  MODIFY `id_consolas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `género`
--
ALTER TABLE `género`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `id_subcategorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id_utilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
