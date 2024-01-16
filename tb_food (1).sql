-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2023 às 03:37
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `myfood`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_food`
--

CREATE TABLE `tb_food` (
  `cd_food` int(11) NOT NULL,
  `img_food` longtext NOT NULL,
  `nm_food` varchar(50) NOT NULL,
  `desc_food` varchar(200) NOT NULL,
  `nm_cidade` varchar(50) NOT NULL,
  `link` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_food`
--

INSERT INTO `tb_food` (`cd_food`, `img_food`, `nm_food`, `desc_food`, `nm_cidade`, `link`) VALUES
(1, 'https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/6841a2a0-7785-4123-bb75-0e8a81177c20/202103251954_BJvq_.jpeg', 'Big Pizzas', 'Restaurante Renomado de Pízzas', '', ''),
(2, 'https://upload.wikimedia.org/wikipedia/pt/b/b1/Novo-logo.png', 'Habib\'s', 'Restaurantes de Esfihas', '', ''),
(3, 'data:image/png;base64,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', 'McDonald\'s', 'Amo muito tudo isso', '', ''),
(4, 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Burger_King_logo_%281999%29.svg/2024px-Burger_King_logo_%281999%29.svg.png', 'Burguer King', 'Não passe vontade, passe no BK!!!\r\n', '', ''),
(5, 'https://static.wixstatic.com/media/01c432_6518d6567dd1460a8b27702c730a9531~mv2.jpg/v1/fill/w_1000,h_1000,al_c,q_85/LOGO%20OUTBACK.jpg', 'Outback', 'STEAK HOUSE', '', ''),
(6, 'https://pbs.twimg.com/profile_images/982347691953762306/0L2YDllN_400x400.jpg', 'Ragazzo', 'Vem pro Ragazzo!!!', '', ''),
(7, 'https://static.ifood-static.com.br/image/upload/t_high/logosgde/12f6ec30-77b6-49b9-9b8b-82923d99fe49/202101041707_XqO0_i.jpg', 'China in Box', 'Comida Japonesa', '', ''),
(8, 'https://upload.wikimedia.org/wikipedia/en/thumb/b/bf/KFC_logo.svg/1200px-KFC_logo.svg.png', 'KFC', 'Para levar!!!', '', ''),
(9, 'data:image/png;base64,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', 'Seu Coxinha', 'Quem experimenta não esquece!!', '', 'https://www.ifood.com.br/delivery/praia-grande-sp/seu-coxinha---canto-do-forte-canto-do-forte/9ad4bcfe-4c17-48fa-bf19-dab452713b86'),
(10, 'https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/8adf268a-29f7-4b0f-9952-db64720acd56/202209171219_dnPo_i.jpg', 'Number One Chicken', 'Frangos', 'São paulo', ''),
(11, 'https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/202004281615_3c2791c3-5246-492a-adc9-7aa6fb29ad5c.jpg', 'La Fruta Açaí - São Vicente', 'Comprou Ganhou', 'Natal', ''),
(12, 'https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/57206606-e7a3-4539-ad5a-ef4e62bff936/202110131532_dv4o_i.png', 'Kohala Pokes & Bowls - Santos', 'Saudavel', 'Guarulhos', ''),
(13, 'https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/3e1aaa95-bfbb-414c-a7c4-2cd6675e2c9f/202212161345_rixl_i.jpg', 'Donut - The Good Cop - Miramar', 'Doces & Bolos', 'Salvador', ''),
(14, 'https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/5b82dd2b-d60e-490d-a010-f0d932e106a9/202209231454_rIAr_i.jpg', 'Gringo Burgers & Asinhas', 'Frangos', 'Santos', ''),
(15, 'https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/188c0c49-7882-4d51-8a37-ab03c71bf956/202209051834_eUx9_i.jpg', 'Montini Pizzaria Santos', 'Pizza', 'Porto Alegre', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_food`
--
ALTER TABLE `tb_food`
  ADD PRIMARY KEY (`cd_food`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_food`
--
ALTER TABLE `tb_food`
  MODIFY `cd_food` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;