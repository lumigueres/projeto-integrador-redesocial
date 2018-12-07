-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Dez-2018 às 01:23
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `group_users`
--

CREATE TABLE `group_users` (
  `group_users_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `group_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `group_users_has_tags`
--

CREATE TABLE `group_users_has_tags` (
  `group_users_group_users_id` int(11) NOT NULL,
  `tags_tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `password` longtext NOT NULL,
  `area` varchar(20) DEFAULT NULL,
  `office` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `mini_bio` longtext,
  `email` varchar(45) NOT NULL,
  `position` varchar(60) DEFAULT NULL,
  `remember_token` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `name`, `last_name`, `password`, `area`, `office`, `phone`, `number`, `image`, `mini_bio`, `email`, `position`, `remember_token`) VALUES
(7, 'claudio', NULL, '$2y$10$TYrR/d9J8RCF0zfyOiqeqequhOYQ68r5vYqhqx7zRJh9v4VODJexG', NULL, NULL, NULL, NULL, NULL, NULL, 'claudio@mail.com', NULL, NULL),
(8, 'claudio', NULL, '$2y$10$LV0YKNZjVV7LNdzVhLYfre0ZFKhX.mF67MfKI8jXqeag1UVrwb2AW', NULL, NULL, NULL, NULL, NULL, NULL, 'claudio@email.com', NULL, NULL),
(11, 'teste', NULL, '$2y$10$U0vcfoA6RMRX9hIzW83gde26v5fhLuP8B4Ch3q4my4tPpb9fGbsg6', NULL, NULL, NULL, NULL, NULL, NULL, 'teste@gmail.com', NULL, 'phWfWdWgadNtENmGRpfNjHg8hZDLUCglTCRMlQSDZYS4f3xOoLhiCWlDZXjM'),
(12, 'teste', NULL, '$2y$10$U0vcfoA6RMRX9hIzW83gde26v5fhLuP8B4Ch3q4my4tPpb9fGbsg6', NULL, NULL, NULL, NULL, NULL, NULL, 'teste@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_has_group_users`
--

CREATE TABLE `users_has_group_users` (
  `users_user_id` int(11) NOT NULL,
  `group_users_group_users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_has_tags`
--

CREATE TABLE `users_has_tags` (
  `users_user_id` int(11) NOT NULL,
  `tags_tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group_users`
--
ALTER TABLE `group_users`
  ADD PRIMARY KEY (`group_users_id`);

--
-- Indexes for table `group_users_has_tags`
--
ALTER TABLE `group_users_has_tags`
  ADD PRIMARY KEY (`group_users_group_users_id`,`tags_tag_id`),
  ADD KEY `fk_group_users_has_tags_tags1_idx` (`tags_tag_id`),
  ADD KEY `fk_group_users_has_tags_group_users1_idx` (`group_users_group_users_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_has_group_users`
--
ALTER TABLE `users_has_group_users`
  ADD PRIMARY KEY (`users_user_id`,`group_users_group_users_id`),
  ADD KEY `fk_users_has_group_users_group_users1_idx` (`group_users_group_users_id`),
  ADD KEY `fk_users_has_group_users_users_idx` (`users_user_id`);

--
-- Indexes for table `users_has_tags`
--
ALTER TABLE `users_has_tags`
  ADD PRIMARY KEY (`users_user_id`,`tags_tag_id`),
  ADD KEY `fk_users_has_tags_tags1_idx` (`tags_tag_id`),
  ADD KEY `fk_users_has_tags_users1_idx` (`users_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `group_users`
--
ALTER TABLE `group_users`
  MODIFY `group_users_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `group_users_has_tags`
--
ALTER TABLE `group_users_has_tags`
  ADD CONSTRAINT `fk_group_users_has_tags_group_users1` FOREIGN KEY (`group_users_group_users_id`) REFERENCES `group_users` (`group_users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_group_users_has_tags_tags1` FOREIGN KEY (`tags_tag_id`) REFERENCES `tags` (`tag_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `users_has_group_users`
--
ALTER TABLE `users_has_group_users`
  ADD CONSTRAINT `fk_users_has_group_users_group_users1` FOREIGN KEY (`group_users_group_users_id`) REFERENCES `group_users` (`group_users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_group_users_users` FOREIGN KEY (`users_user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `users_has_tags`
--
ALTER TABLE `users_has_tags`
  ADD CONSTRAINT `fk_users_has_tags_tags1` FOREIGN KEY (`tags_tag_id`) REFERENCES `tags` (`tag_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_tags_users1` FOREIGN KEY (`users_user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
