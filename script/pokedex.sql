-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 05:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokedex`
--

-- --------------------------------------------------------

--
-- Table structure for table `pokemon`
--

CREATE TABLE `pokemon` (
  `id_pokemon` int(11) NOT NULL,
  `numero_pokemon` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pokemon`
--

INSERT INTO `pokemon` (`id_pokemon`, `numero_pokemon`, `image`, `nombre`, `tipo`, `descripcion`) VALUES
(1, 10, 'imgs/Squirtle.png', 'Squirtle ', 1, ' Venusaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Ivysaur y , a partir de la sexta generación, puede megaevolucionar en Mega-Venusaur. '),
(2, 40, 'imgs/Wartortle.png', 'Wartortle', 1, ' Charmander es un Pokémon de tipo fuego introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Bulbasaur y Squirtle, excepto en Pokémon Amarillo y Pokémon: Let \' s Go, Pikachu! y Pokémon: Let \' s Go, Eevee! '),
(3, 35, 'imgs/Blastoise.png', 'Blastoise', 1, ' Bulbasaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Squirtle y Charmander (excepto en Pokémon Amarillo). Destaca por ser el primer Pokémon de la Pokédex Nacional. '),
(4, 30, 'imgs/Charmander.png', 'Charmander', 2, ' Charmander es un Pokémon de tipo fuego introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Bulbasaur y Squirtle, excepto en Pokémon Amarillo y Pokémon: Let \' s Go, Pikachu! y Pokémon: Let \' s Go, Eevee! '),
(5, 15, 'imgs/Charmeleon.png', 'Charmeleon', 2, ' Bulbasaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Squirtle y Charmander (excepto en Pokémon Amarillo). Destaca por ser el primer Pokémon de la Pokédex Nacional. '),
(6, 25, 'imgs/Charizard.png', 'Charizard', 2, ' Ivysaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es la evolución de Bulbasaur, uno de los Pokémon iniciales de Kanto. '),
(7, 20, 'imgs/Pikachu.png', 'Pikachu', 3, 'Pikachu, el Pokémon ratón. Puede generar ataques eléctricos desde los coloretes eléctricos localizados en sus mejillas.'),
(8, 5, 'imgs/Raichu.png', 'Raichu', 3, 'Raichu, Un ratón Pokémon del elemento eléctrico. Raichu es la forma evolucionada de Pikachu. Puede hacer descargas de más de 100 mil voltios suficientes para dejar inconsciente a un Dragonite.'),
(9, 45, 'imgs/Magneton.png', 'Magneton', 3, 'Magneton, Pokémon imán. La forma evolucionada de Magnemite. Su fuerza antigravitatoria le permite flotar y es capaz de generar potentes campos electromagnéticos.'),
(10, 50, 'imgs/Mewtwo.png', 'Mewto', 4, 'Pokémon desconocido, no hay datos disponibles.'),
(11, 65, 'imgs/Hypno.png', 'Hypno', 4, ' Hypno, Pokémon hipnosis. Lleva un péndulo como arma y desarrolla ataques hipnóticos.'),
(12, 70, 'imgs/Drowzee.png', 'Drowzee', 4, 'Drowzee, el Pokémon hipnótico. Se dice que se alimenta de los sueños de sus oponentes y es conocido por su poderoso ataque psíquico.'),
(13, 75, 'imgs/Rhyhorn.png', 'Rhyhorn', 5, 'Rhyhorn, Pokémon clavo. El Rhyhorn es conocido por su fuerza física y su gran habilidad para el combate tanto ofensivo como defensivo.'),
(14, 60, 'imgs/Sandshrew.png', 'Sandshrew', 5, 'Sandshrew, el Pokémon ratón. Sandshrew odia la humedad y vive en agujeros que excava en sitios secos. Se protege a sí mismo enrollándose en una bola.'),
(15, 55, 'imgs/Dugtrio.png', 'Dugtrio', 5, 'Dugtrio. Este Pokémon que se forma cuando se combinan tres Diglett, es capaz de hacer túneles muy profundos bajo la superficie de la tierra.');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_pokemon`
--

CREATE TABLE `tipo_pokemon` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipo_pokemon`
--

INSERT INTO `tipo_pokemon` (`id`, `descripcion`) VALUES
(1, 'Agua'),
(2, 'Fuego'),
(3, 'Electrico'),
(4, 'Psiquico'),
(5, 'Tierra');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contrasenia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contrasenia`) VALUES
(1, 'admin1', 'admin1'),
(2, 'admin2', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id_pokemon`,`numero_pokemon`),
  ADD KEY `fk_tipo` (`tipo`);

--
-- Indexes for table `tipo_pokemon`
--
ALTER TABLE `tipo_pokemon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id_pokemon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tipo_pokemon`
--
ALTER TABLE `tipo_pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pokemon`
--
ALTER TABLE `pokemon`
  ADD CONSTRAINT `fk_tipo` FOREIGN KEY (`tipo`) REFERENCES `tipo_pokemon` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
