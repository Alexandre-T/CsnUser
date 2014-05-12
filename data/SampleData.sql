--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`, `abbreviation`) VALUES
(1, 'English', 'en'),
(2, 'Français', 'fr'),
(3, 'Deutsch', 'de'),
(4, 'Español', 'es'),
(5, 'Italiano', 'it'),
(6, 'Български', 'bg');

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `description`) VALUES
(1, 'Guest', 'This is the not logged in user role, should not be applyed to any user.'),
(2, 'User', 'Should get almost view permissions only, and maybe some create/edit permissions'),
(3, 'Manager', 'Manages everithing except deletions'),
(4, 'Admin', 'The super user, he can do anything');

--
-- Dumping data for table `questions`
--

INSERT INTO `question` (`id`, `question`) VALUES
(1, 'What was your childhood phone number?'),
(2, 'In what city did your mother born?'),
(3, 'In what city did your father born?'),
(4, 'In what city or town was your first job?');

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`) VALUES
(1, 'Disabled'),
(2, 'Enabled');

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role_id`, `language_id`, `state_id`, `question_id`, `username`, `first_name`, `last_name`, `email`, `password`, `answer`, `picture`, `registration_date`, `registration_token`, `email_confirmed`) VALUES
(1, 4, 1, 2, 1, 'administrator', 'Admin', 'Istrator', 'admin@istrator.com', '$2y$10$GUKeGz/rLU74nVN85c5OveH02Ymiq7gxxYoNbU6anwbjG/gzW2z8W', 'who knows', NULL, NULL, NULL, 1);

