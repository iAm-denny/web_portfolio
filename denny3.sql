-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 10:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `denny3`
--

-- --------------------------------------------------------

--
-- Table structure for table `animes`
--

CREATE TABLE `animes` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `episode` varchar(255) DEFAULT NULL,
  `released_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `review` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animes`
--

INSERT INTO `animes` (`id`, `image`, `name`, `type`, `episode`, `released_date`, `end_date`, `rating`, `review`, `time`) VALUES
(5, 'sao1.jpg', 'Sword Art Online (Season 1)', 'Adventure, science fiction', '25', 'Jul 8, 2012', 'Dec 23, 2012', '7.39 /10', '>>In the year 2022, virtual reality has progressed by leaps and bounds, and a massive online role-playing game called Sword Art Online (SAO) is launched. With the aid of \"NerveGear\" technology, players can control their avatars within the game using nothing but their own thoughts.\r\n\r\nKazuto Kirigaya, nicknamed \"Kirito,\" is among the lucky few enthusiasts who get their hands on the first shipment of the game. He logs in to find himself, with ten-thousand others, in the scenic and elaborate world of Aincrad, one full of fantastic medieval weapons and gruesome monsters. However, in a cruel turn of events, the players soon realize they cannot log out; the game\'s creator has trapped them in his new world until they complete all one hundred levels of the game.\r\n\r\nIn order to escape Aincrad, Kirito will now have to interact and cooperate with his fellow players. Some are allies, while others are foes, like Asuna Yuuki, who commands the leading group attempting to escape from the ruthless game. To make matters worse, Sword Art Online is not all fun and games: if they die in Aincrad, they die in real life. Kirito must adapt to his new reality, fight for his survival, and hopefully break free from his virtual hell.\r\n\r\n[Written by MAL Rewrite]', '2020-04-29 05:23:42'),
(6, 'sao2.jpg', 'Sword Art Online (Season 2)', 'Adventure, science fiction', '24', ' Jul 5, 2014', 'Dec 20, 2014 ', '6.97', 'A year after escaping Sword Art Online, Kazuto Kirigaya has been settling back into the real world. However, his peace is short-lived as a new incident occurs in a game called Gun Gale Online, where a player by the name of Death Gun appears to be killing people in the real world by shooting them in-game. Approached by officials to assist in investigating the murders, Kazuto assumes his persona of Kirito once again and logs into Gun Gale Online, intent on stopping the killer.\r\n\r\nOnce inside, Kirito meets Sinon, a highly skilled sniper afflicted by a traumatic past. She is soon dragged in his chase after Death Gun, and together they enter the Bullet of Bullets, a tournament where their target is sure to appear. Uncertain of Death Gun\'s real powers, Kirito and Sinon race to stop him before he has the chance to claim another life. Not everything goes smoothly, however, as scars from the past impede their progress. In a high-stakes game where the next victim could easily be one of them, Kirito puts his life on the line in the virtual world once more.\r\n\r\n[Written by MAL Rewrite]', '2020-04-29 05:27:14'),
(8, 'another.jpg', 'Another (Completed Season)', 'Horror, mystery, thriller', '12', ' Jan 10, 2012', 'Mar 27, 2012', '7.62', 'In 1972, a popular student in Yomiyama North Middle School\'s class 3-3 named Misaki passed away during the school year. Since then, the town of Yomiyama has been shrouded by a fearful atmosphere, from the dark secrets hidden deep within.\r\n\r\nTwenty-six years later, 15-year-old Kouichi Sakakibara transfers into class 3-3 of Yomiyama North and soon after discovers that a strange, gloomy mood seems to hang over all the students. He also finds himself drawn to the mysterious, eyepatch-wearing student Mei Misaki; however, the rest of the class and the teachers seem to treat her like she doesn\'t exist. Paying no heed to warnings from everyone including Mei herself, Kouichi begins to get closer not only to her, but also to the truth behind the gruesome phenomenon plaguing class 3-3 of Yomiyama North.\r\n\r\nAnother follows Kouichi, Mei, and their classmates as they are pulled into the enigma surrounding a series of inevitable, tragic events—but unraveling the horror of Yomiyama may just cost them the ultimate price.\r\n\r\n[Written by MAL Rewrite]', '2020-04-30 05:09:46'),
(10, 'umaru.jpg', 'Himouto! Umaru-chan (Season 1)', ' Comedy, School, Seinen, Slice of Life', ' 12 ', 'Jul 9, 2015', 'Sep 24, 2015 ', '7.25', 'People are not always who they appear to be, as is the case with Umaru Doma, the perfect high school girl—that is, until she gets home! Once the front door closes, the real fun begins. When she dons her hamster hoodie, she transforms from a refined, over-achieving student into a lazy, junk food-eating otaku, leaving all the housework to her responsible older brother Taihei. Whether she\'s hanging out with her friends Nana Ebina and Kirie Motoba, or competing with her self-proclaimed \"rival\" Sylphinford Tachibana, Umaru knows how to kick back and have some fun!\r\n\r\nHimouto! Umaru-chan is a cute story that follows the daily adventures of Umaru and Taihei, as they take care of—and put up with—each other the best they can, as well as the unbreakable bonds between friends and siblings.\r\n\r\n[Written by MAL Rewrite]', '2020-05-01 05:52:24'),
(11, 'umaru2.jpg', 'Himouto! Umaru-chan R', 'Comedy, School, Seinen, Slice of Life', '12', 'Oct 8, 2017', 'Dec 24, 2017 ', '7.41', 'Umaru Doma is a model student who has a hidden side: when she gets home each day, she puts on her hamster hoodie and turns into a sluggish otaku fond of junk food. As Umaru continues these daily antics, the friendship between her and her classmates—Nana Ebina, Kirie Motoba, and Sylphinford Tachibana—deepens, and more and more interesting events begin to unfold.\r\n\r\nOf course, these events give rise to numerous questions. What did Nana ask of Umaru\'s brother Taihei? Who is the mysterious girl with the diamond hairpin? And most important of all: why does this girl seem to know Umaru? These questions and more will be answered in Himouto! Umaru-chan R!\r\n\r\n[Written by MAL Rewrite]', '2020-05-01 05:54:16'),
(12, 'umaru3.jpg', 'Himouto! Umaru-chanS', 'Comedy, Seinen, Slice of Life', '12', 'Sep 16, 2015', 'Feb 17, 2016', '6.97', 'These shorts, included in the Blu-ray and DVD releases, take place in a timeline with multiple Umaru-chans. ', '2020-05-01 05:55:32'),
(13, 'sao.jpg', 'Sword Art Online Movie: Ordinal Scale', 'Action, Game, Adventure, Romance, Fantasy', '1( Movie)', ' Feb 18, 2017 ', '-', '7.80', 'In 2026, four years after the infamous Sword Art Online incident, a revolutionary new form of technology has emerged: the Augma, a device that utilizes an Augmented Reality system. Unlike the Virtual Reality of the NerveGear and the Amusphere, it is perfectly safe and allows players to use it while they are conscious, creating an instant hit on the market. The most popular application for the Augma is the game Ordinal Scale, which immerses players in a fantasy role-playing game with player rankings and rewards.\r\n\r\nFollowing the new craze, Kirito\'s friends dive into the game, and despite his reservations about the system, Kirito eventually joins them. While at first it appears to be just fun and games, they soon find out that the game is not all that it seems...\r\n\r\n[Written by MAL Rewrite]', '2020-05-01 05:57:01'),
(14, 'ggo.jpg', 'Sword Art Online Alternative: Gun Gale Online', 'Action, Fantasy, Game, Military, Sci-Fi', '12', ' Apr 8, 2018', ' Jul 1, 2018 ', '7.19', 'Clad in desert pink and the size of a mere child, the infamous \"Pink Devil\" mercilessly hunts down other players in the firearm-centered world of the virtual reality game Gun Gale Online. But in real life, this feared player killer is not quite who anyone would expect.\r\n\r\nA shy university student in Tokyo, Karen Kohiruimaki stands in stark contrast to her in-game avatar—in fact, she happens to stand above everyone else too, much to her dismay. Towering above all the people around her, Karen\'s insecurities over her height reach the point where she turns to the virtual world for an escape. Starting game after game in hopes of manifesting as a cute, short character, she finally obtains her ideal self in the world of Gun Gale Online. Overjoyed by her new persona, she pours her time into the game as LLENN, garnering her reputation as the legendary player killer.\r\n\r\nHowever, when one of LLENN\'s targets gets the best of her, she ends up meeting Pitohui, a skilled yet eccentric woman. Quickly becoming friends with Karen, Pitohui insists that LLENN participates in Squad Jam, a battle royale that pits teams against one another, fighting until only one remains. Thrust into the heated competition, LLENN must fight with all her wit and will if she hopes to shoot her way to the top.\r\n\r\n[Written by MAL Rewrite]', '2020-05-01 06:00:15'),
(15, 'hsd.jpg', 'High School DxD', 'Comedy, Demons, Ecchi, Harem, Romance, School', '12', 'Jan 6, 2012', ' Mar 23, 2012 ', '7.46', 'High school student Issei Hyoudou is your run-of-the-mill pervert who does nothing productive with his life, peeping on women and dreaming of having his own harem one day. Things seem to be looking up for Issei when a beautiful girl asks him out on a date, although she turns out to be a fallen angel who brutally kills him! However, he gets a second chance at life when beautiful senior student Rias Gremory, who is a top-class devil, revives him as her servant, recruiting Issei into the ranks of the school\'s Occult Research club.\r\n\r\nSlowly adjusting to his new life, Issei must train and fight in order to survive in the violent world of angels and devils. Each new adventure leads to many hilarious (and risqué) moments with his new comrades, all the while keeping his new life a secret from his friends and family in High School DxD!\r\n\r\n[Written by MAL Rewrite]', '2020-05-01 06:02:11'),
(16, 'onep.jpg', 'One Punch Man', ' Action, Sci-Fi, Comedy, Parody, Super Power, Supernatural', '12', 'Oct 5, 2015', ' Dec 21, 2015', '8.66', 'The seemingly ordinary and unimpressive Saitama has a rather unique hobby: being a hero. In order to pursue his childhood dream, he trained relentlessly for three years—and lost all of his hair in the process. Now, Saitama is incredibly powerful, so much so that no enemy is able to defeat him in battle. In fact, all it takes to defeat evildoers with just one punch has led to an unexpected problem—he is no longer able to enjoy the thrill of battling and has become quite bored.\r\n\r\nThis all changes with the arrival of Genos, a 19-year-old cyborg, who wishes to be Saitama\'s disciple after seeing what he is capable of. Genos proposes that the two join the Hero Association in order to become certified heroes that will be recognized for their positive contributions to society, and Saitama, shocked that no one knows who he is, quickly agrees. And thus begins the story of One Punch Man, an action-comedy that follows an eccentric individual who longs to fight strong enemies that can hopefully give him the excitement he once felt and just maybe, he\'ll become popular in the process.\r\n\r\n[Written by MAL Rewrite]', '2020-05-01 06:04:05'),
(17, '99571.jpg', 'One Punch Man ( 2nd Season )', 'Action, Sci-Fi, Comedy, Parody, Super Power, Supernatural', '12', 'Apr 10, 2019', ' Jul 3, 2019 ', '7.44', 'In the wake of defeating Boros and his mighty army, Saitama has returned to his unremarkable everyday life in Z-City. However, unbeknownst to him, the number of monsters appearing is still continuously on the rise, putting a strain on the Hero Association’s resources. Their top executives decide on the bold move of recruiting hoodlums in order to help in their battle. But during the first meeting with these potential newcomers, a mysterious man calling himself Garou makes his appearance. Claiming to be a monster, he starts mercilessly attacking the crowd.\r\n\r\nThe mysterious Garou continues his rampage against the Hero Association, crushing every hero he encounters. He turns out to be the legendary martial artist Silverfang’s best former disciple and seems driven by unknown motives. Regardless, this beast of a man seems unstoppable. Intrigued by this puzzling new foe and with an insatiable thirst for money, Saitama decides to seize the opportunity and joins the interesting martial arts competition.\r\n\r\nAs the tournament commences and Garou continues his rampage, a new great menace reveals itself, threatening the entire human world. Could this finally be the earth shattering catastrophe predicted by the great seer Madame Shibabawa?\r\n\r\n[Written by MAL Rewrite]', '2020-05-01 06:05:29'),
(18, '97840.jpg', 'One Punch Man Specials', 'Action, Sci-Fi, Comedy, Parody, Super Power, Supernatural', '6', 'Dec 24, 2015', ' May 27, 2016', '7.79', 'Specials included in the Blu-ray and DVD releases of One Punch Man.', '2020-05-01 06:07:41'),
(19, '96674.jpg', 'One Punch Man: Road to Hero', 'Action, Sci-Fi, Comedy, Parody, Super Power, Supernatural', '1 (OVA)', ' Dec 4, 2015 ', '.', '7.78', 'Before Saitama became the man he is today, he trained and fought endlessly to become a hero. While every scuffle leaves his tracksuit uniform in tatters, he always has it mended for free thanks to his local tailor. One day, however, the tailor informs him that he must close up shop due to pressure from a local gang. Saitama decides to help him out—and gains something irreplaceable in the process.\r\n\r\n[Written by MAL Rewrite]', '2020-05-01 06:08:44'),
(20, '33257.jpg', 'Daily Lives of High School Boys', ' Slice of Life, Comedy, School', '12', ' Jan 10, 2012', ' Mar 27, 2012 ', '8.30', 'Roaming the halls of the all-boys Sanada North High School are three close comrades: the eccentric ringleader with a hyperactive imagination Hidenori, the passionate Yoshitake, and the rational and prudent Tadakuni. Their lives are filled with giant robots, true love, and intense drama... in their colorful imaginations, at least. In reality, they are just an everyday trio of ordinary guys trying to pass the time, but who said everyday life couldn\'t be interesting? Whether it\'s an intricate RPG reenactment or an unexpected romantic encounter on the riverbank at sunset, Danshi Koukousei no Nichijou is rife with bizarre yet hilariously relatable situations that are anything but mundane.\r\n\r\n[Written by MAL Rewrite]', '2020-05-01 06:10:39'),
(21, '38527.jpg', 'Daily Lives of High School Boys Specials', ' Comedy, School, Shounen, Slice of Life', '6', ' Apr 3, 2012', 'Sep 4, 2012 ', '7.89', 'The original gag comedy manga follows the humorous yet \"realistic\" everyday life of Tadakuni, Hidenori, Yoshitake, and other students at a boys\' high school.\r\n\r\nThis entry refers to the unaired episodes released on the DVDs and BDs. The pre-air specials were all included in the TV series and are not listed separately on MAL. ', '2020-05-01 06:11:43'),
(22, '76222.jpg', 'Gate: Jieitai Kanochi nite, Kaku Tatakaeri', ': Action, Adventure, Fantasy, Military', '12', ' Jul 4, 2015', 'Sep 19, 2015 ', '7.80', 'Off-duty Japan Self-Defense Forces (JSDF) officer and otaku, Youji Itami, is on his way to attend a doujin convention in Ginza, Tokyo when a mysterious portal in the shape of a large gate suddenly appears. From this gate, supernatural creatures and warriors clad in medieval armor emerge, charging through the city, killing and destroying everything in their path. With swift actions, Youji saves as many lives as he can while the rest of the JSDF direct their efforts towards stopping the invasion.\r\n\r\nThree months after the attack, Youji has been tasked with leading a special recon team, as part of a JSDF task force, that will be sent to the world beyond the gate—now being referred to as the \"Special Region.\" They must travel into this unknown world in order to learn more about what they are dealing with and attempt to befriend the locals in hopes of creating peaceful ties with the ruling empire. But if they fail, they face the consequence of participating in a devastating war that will engulf both sides of the gate.\r\n\r\n[Written by MAL Rewrite]', '2020-05-01 06:12:56'),
(23, '77382.jpg', 'Gate: Jieitai Kanochi nite, Kaku Tatakaeri (2nd Season)', ' Action, Military, Adventure, Fantasy', ' 12 ', 'Jan 9, 2016', 'Mar 26, 2016 ', '7.83', 'Several months have passed since the infamous Ginza Incident, with tensions between the Empire and JSDF escalating in the vast and mysterious \"Special Region\" over peace negotiations. The greed and curiosity of the global powers have also begun to grow, as reports about the technological limitations of the magical realm\'s archaic civilizations come to light.\r\n\r\nMeanwhile, Lieutenant Youji Itami and his merry band of female admirers struggle to navigate the complex political intrigue that plagues the Empire\'s court. Despite her best efforts, Princess Piña Co Lada faces difficulties attempting to convince her father that the JSDF has no intention of conquering their kingdom. Pressured from both sides of the Gate, Itami must consider even more drastic measures to fulfill his mission.\r\n\r\n[Written by MAL Rewrite] ', '2020-05-01 06:13:55'),
(24, '78811.jpg', 'Corpse Party: Missing Footage', 'Mystery, Horror, Supernatural', '4', ' Jul 24, 2013 ', '.', '6.74', 'Nine students gather in their high school at night to bid farewell to a friend. As is customary among many high school students, they perform a sort of ritual for them to remain friends forever, using small paper charms shaped like dolls.\r\n\r\nHowever, the students do not realize that these charms are connected to Heavenly Host Academy—an elementary school that was destroyed years ago after a series of gruesome murders took place, a school that rests under the foundation of their very own Kisaragi Academy. Now, trapped in an alternate dimension with vengeful ghosts of the past, the students must work together to escape—or join the spirits of the damned forever.\r\n\r\nA feast for mystery fanatics, gore-hounds, and horror fans alike, Corpse Party: Tortured Souls - Bougyakusareta Tamashii no Jukyou shows a sobering look at redemption, sacrifice, and how the past is always right behind, sometimes a little too close for comfort.\r\n\r\n[Written by MAL Rewrite]', '2020-05-01 06:15:44'),
(32, '808037.jpeg', 'asdfsadf', 'sdaf', 'sdaf', 'sdf', 'sdfa', 'sdaf', 'hello', '2020-05-02 16:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `messages` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `email`, `messages`, `time`) VALUES
(1, 'min@gmail.com', 'Hello NIce', '2020-04-30 05:40:22'),
(2, 'hello@gamil.com', 'HelloSSSSS', '2020-05-05 04:55:17'),
(3, 'u', 'min GOOODSDSDSD', '2020-05-05 04:56:12'),
(4, 'u', 'Fail?', '2020-05-05 04:56:52'),
(5, 'u', 'asdf', '2020-05-05 04:57:23'),
(6, 'minlapyae2@gmail.com', 'minadsfasdfsdafsda1515515', '2020-05-05 04:59:38'),
(7, 'asdf@gamil.com', 'asdf', '2020-05-05 05:09:23'),
(8, 'sfg@gamil.com', 'sfg', '2020-05-05 05:10:47'),
(9, 'minlapyae999999@gmail.com', '99999', '2020-05-05 05:18:01'),
(10, 'sadf@gmail.com', 'hello', '2020-05-06 09:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `newanime`
--

CREATE TABLE `newanime` (
  `id` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `episode` varchar(255) DEFAULT NULL,
  `released_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newanime`
--

INSERT INTO `newanime` (`id`, `images`, `name`, `type`, `episode`, `released_date`, `end_date`, `rating`, `review`, `time`) VALUES
(1, 'saounder.jpg', 'Sword Art Online: Alicization Season 3', ' Anime, Animation, Science Fiction, Thriller, Adventure, Action fiction, Action/Adventure', '-', 'Not Released', '-', '-', '-', '2020-04-29 05:53:39'),
(3, '33257.jpg', 'Daily Lives of High School Boys', 'Slice of Life, Comedy, School', '12', 'Jan 10, 2012', ' Mar 27, 2012 ', '8.30', '>>Roaming the halls of the all-boys Sanada North High School are three close comrades: the eccentric ringleader with a hyperactive imagination Hidenori, the passionate Yoshitake, and the rational and prudent Tadakuni. Their lives are filled with giant robots, true love, and intense drama... in their colorful imaginations, at least. In reality, they are just an everyday trio of ordinary guys trying to pass the time, but who said everyday life couldn\'t be interesting? Whether it\'s an intricate RPG reenactment or an unexpected romantic encounter on the riverbank at sunset, Danshi Koukousei no Nichijou is rife with bizarre yet hilariously relatable situations that are anything but mundane. [Written by MAL Rewrit', '2020-05-03 05:33:50'),
(4, '38527.jpg', 'Daily Lives of High School Boys Specials', ' Comedy, School, Shounen, Slice of Life', '6', 'Apr 3, 2012', 'Sep 4, 2012', '7.89 ', 'The original gag comedy manga follows the humorous yet \"realistic\" everyday life of Tadakuni, Hidenori, Yoshitake, and other students at a boys\' high school. This entry refers to the unaired episodes released on the DVDs and BDs. The pre-air specials were all included in the TV series and are not listed separately on MAL. ', '2020-05-03 05:34:49'),
(5, '76222.jpg', 'Gate: Jieitai Kanochi nite, Kaku Tatakaeri', 'Action, Adventure, Fantasy, Military', '12', 'Jul 4, 2015', 'Sep 19, 2015 ', ' 7.80', 'Off-duty Japan Self-Defense Forces (JSDF) officer and otaku, Youji Itami, is on his way to attend a doujin convention in Ginza, Tokyo when a mysterious portal in the shape of a large gate suddenly appears. From this gate, supernatural creatures and warriors clad in medieval armor emerge, charging through the city, killing and destroying everything in their path. With swift actions, Youji saves as many lives as he can while the rest of the JSDF direct their efforts towards stopping the invasion. Three months after the attack, Youji has been tasked with leading a special recon team, as part of a JSDF task force, that will be sent to the world beyond the gate—now being referred to as the \"Special Region.\" They must travel into this unknown world in order to learn more about what they are dealing with and attempt to befriend the locals in hopes of creating peaceful ties with the ruling empire. But if they fail, they face the consequence of participating in a devastating war that will engulf both sides of the gate. [Written by MAL Rewrite]', '2020-05-03 05:36:04'),
(6, '77382.jpg', 'Gate: Jieitai Kanochi nite, Kaku Tatakaeri (2nd Season)', 'Action, Military, Adventure, Fantasy', ' 12 ', 'Jan 9, 2016', ' Mar 26, 2016 ', '7.83', 'Several months have passed since the infamous Ginza Incident, with tensions between the Empire and JSDF escalating in the vast and mysterious \"Special Region\" over peace negotiations. The greed and curiosity of the global powers have also begun to grow, as reports about the technological limitations of the magical realm\'s archaic civilizations come to light. Meanwhile, Lieutenant Youji Itami and his merry band of female admirers struggle to navigate the complex political intrigue that plagues the Empire\'s court. Despite her best efforts, Princess Piña Co Lada faces difficulties attempting to convince her father that the JSDF has no intention of conquering their kingdom. Pressured from both sides of the Gate, Itami must consider even more drastic measures to fulfill his mission. [Written by MAL Rewrite] ', '2020-05-03 05:36:58'),
(7, '78811.jpg', 'Corpse Party: Missing Footage', 'Mystery, Horror, Supernatural', '4', 'Jul 24, 2013 ', '-', '6.74', 'Nine students gather in their high school at night to bid farewell to a friend. As is customary among many high school students, they perform a sort of ritual for them to remain friends forever, using small paper charms shaped like dolls. However, the students do not realize that these charms are connected to Heavenly Host Academy—an elementary school that was destroyed years ago after a series of gruesome murders took place, a school that rests under the foundation of their very own Kisaragi Academy. Now, trapped in an alternate dimension with vengeful ghosts of the past, the students must work together to escape—or join the spirits of the damned forever. A feast for mystery fanatics, gore-hounds, and horror fans alike, Corpse Party: Tortured Souls - Bougyakusareta Tamashii no Jukyou shows a sobering look at redemption, sacrifice, and how the past is always right behind, sometimes a little too close for comfort. [Written by MAL Rewrite]', '2020-05-03 05:37:44'),
(8, '96674.jpg', 'One Punch Man: Road to Hero', 'Action, Sci-Fi, Comedy, Parody, Super Power, Supernatural', '1 (OVA)', 'Dec 4, 2015 ', '-', '7.78', 'Before Saitama became the man he is today, he trained and fought endlessly to become a hero. While every scuffle leaves his tracksuit uniform in tatters, he always has it mended for free thanks to his local tailor. One day, however, the tailor informs him that he must close up shop due to pressure from a local gang. Saitama decides to help him out—and gains something irreplaceable in the process. [Written by MAL Rewrite]', '2020-05-03 05:38:31'),
(9, 'ggo.jpg', 'Sword Art Online Alternative: Gun Gale Online', 'Action, Fantasy, Game, Military, Sci-Fi', '12', 'Apr 8, 2018', 'Jul 1, 2018 ', '7.19', 'Clad in desert pink and the size of a mere child, the infamous \"Pink Devil\" mercilessly hunts down other players in the firearm-centered world of the virtual reality game Gun Gale Online. But in real life, this feared player killer is not quite who anyone would expect. A shy university student in Tokyo, Karen Kohiruimaki stands in stark contrast to her in-game avatar—in fact, she happens to stand above everyone else too, much to her dismay. Towering above all the people around her, Karen\'s insecurities over her height reach the point where she turns to the virtual world for an escape. Starting game after game in hopes of manifesting as a cute, short character, she finally obtains her ideal self in the world of Gun Gale Online. Overjoyed by her new persona, she pours her time into the game as LLENN, garnering her reputation as the legendary player killer. However, when one of LLENN\'s targets gets the best of her, she ends up meeting Pitohui, a skilled yet eccentric woman. Quickly becoming friends with Karen, Pitohui insists that LLENN participates in Squad Jam, a battle royale that pits teams against one another, fighting until only one remains. Thrust into the heated competition, LLENN must fight with all her wit and will if she hopes to shoot her way to the top. [Written by MAL Rewrite]', '2020-05-03 05:39:40'),
(10, '97840.jpg', 'One Punch Man Specials', 'Action, Sci-Fi, Comedy, Parody, Super Power, Supernatural', '6', 'Dec 24, 2015', 'May 27, 2016', ' 7.79', 'Specials included in the Blu-ray and DVD releases of One Punch Man.', '2020-05-03 05:40:37'),
(11, 'hsd.jpg', 'High School DxD', 'Comedy, Demons, Ecchi, Harem, Romance, School', '12', 'Jan 6, 2012', 'Mar 23, 2012 ', '7.46', 'High school student Issei Hyoudou is your run-of-the-mill pervert who does nothing productive with his life, peeping on women and dreaming of having his own harem one day. Things seem to be looking up for Issei when a beautiful girl asks him out on a date, although she turns out to be a fallen angel who brutally kills him! However, he gets a second chance at life when beautiful senior student Rias Gremory, who is a top-class devil, revives him as her servant, recruiting Issei into the ranks of the school\'s Occult Research club. Slowly adjusting to his new life, Issei must train and fight in order to survive in the violent world of angels and devils. Each new adventure leads to many hilarious (and risqué) moments with his new comrades, all the while keeping his new life a secret from his friends and family in High School DxD! [Written by MAL Rewrite]', '2020-05-03 05:50:37'),
(12, 'umaru3.jpg', 'Himouto! Umaru-chan (Season 1)', ' Comedy, School, Seinen, Slice of Life', '12', 'Jul 9, 2015', 'Sep 24, 2015', '7.25 ', 'People are not always who they appear to be, as is the case with Umaru Doma, the perfect high school girl—that is, until she gets home! Once the front door closes, the real fun begins. When she dons her hamster hoodie, she transforms from a refined, over-achieving student into a lazy, junk food-eating otaku, leaving all the housework to her responsible older brother Taihei. Whether she\'s hanging out with her friends Nana Ebina and Kirie Motoba, or competing with her self-proclaimed \"rival\" Sylphinford Tachibana, Umaru knows how to kick back and have some fun! Himouto! Umaru-chan is a cute story that follows the daily adventures of Umaru and Taihei, as they take care of—and put up with—each other the best they can, as well as the unbreakable bonds between friends and siblings. [Written by MAL Rewrite]', '2020-05-03 05:51:56'),
(13, 'another.jpg', 'Another (Completed Season)', 'Horror, mystery, thriller', '12', 'Jan 10, 2012', 'Mar 27, 2012', ' 7.62', 'In 1972, a popular student in Yomiyama North Middle School\'s class 3-3 named Misaki passed away during the school year. Since then, the town of Yomiyama has been shrouded by a fearful atmosphere, from the dark secrets hidden deep within. Twenty-six years later, 15-year-old Kouichi Sakakibara transfers into class 3-3 of Yomiyama North and soon after discovers that a strange, gloomy mood seems to hang over all the students. He also finds himself drawn to the mysterious, eyepatch-wearing student Mei Misaki; however, the rest of the class and the teachers seem to treat her like she doesn\'t exist. Paying no heed to warnings from everyone including Mei herself, Kouichi begins to get closer not only to her, but also to the truth behind the gruesome phenomenon plaguing class 3-3 of Yomiyama North. Another follows Kouichi, Mei, and their classmates as they are pulled into the enigma surrounding a series of inevitable, tragic events—but unraveling the horror of Yomiyama may just cost them the ultimate price. [Written by MAL Rewrite]', '2020-05-03 05:52:52'),
(14, 'sao.jpg', 'Sword Art Online Movie: Ordinal Scale', 'Action, Game, Adventure, Romance, Fantasy', '1( Movie)', 'Feb 18, 2017 ', '-', '7.80', 'In 2026, four years after the infamous Sword Art Online incident, a revolutionary new form of technology has emerged: the Augma, a device that utilizes an Augmented Reality system. Unlike the Virtual Reality of the NerveGear and the Amusphere, it is perfectly safe and allows players to use it while they are conscious, creating an instant hit on the market. The most popular application for the Augma is the game Ordinal Scale, which immerses players in a fantasy role-playing game with player rankings and rewards. Following the new craze, Kirito\'s friends dive into the game, and despite his reservations about the system, Kirito eventually joins them. While at first it appears to be just fun and games, they soon find out that the game is not all that it seems... [Written by MAL Rewrite]', '2020-05-03 05:53:39'),
(15, 'umaru2.jpg', 'Himouto! Umaru-chan R', 'Comedy, School, Seinen, Slice of Life', '12', 'Oct 8, 2017', ' Dec 24, 2017 ', '7.41', 'Umaru Doma is a model student who has a hidden side: when she gets home each day, she puts on her hamster hoodie and turns into a sluggish otaku fond of junk food. As Umaru continues these daily antics, the friendship between her and her classmates—Nana Ebina, Kirie Motoba, and Sylphinford Tachibana—deepens, and more and more interesting events begin to unfold. Of course, these events give rise to numerous questions. What did Nana ask of Umaru\'s brother Taihei? Who is the mysterious girl with the diamond hairpin? And most important of all: why does this girl seem to know Umaru? These questions and more will be answered in Himouto! Umaru-chan R! [Written by MAL Rewrite]', '2020-05-03 05:54:16'),
(16, 'umaru.jpg', 'Himouto! Umaru-chanS', 'Comedy, Seinen, Slice of Life', '12', 'Sep 16, 2015', 'Feb 17, 2016', '6.97', 'These shorts, included in the Blu-ray and DVD releases, take place in a timeline with multiple Umaru-chans. ', '2020-05-03 05:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `topanim`
--

CREATE TABLE `topanim` (
  `id` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `episode` varchar(255) DEFAULT NULL,
  `released_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topanim`
--

INSERT INTO `topanim` (`id`, `images`, `name`, `type`, `episode`, `released_date`, `end_date`, `rating`, `review`, `time`) VALUES
(4, '9453.jpg', 'Death Note', ' Mystery, Police, Psychological, Supernatural, Thriller, Shounen', '37', 'Oct 4, 2006', 'Jun 27, 2007 ', '8.63', '>>A shinigami, as a god of death, can kill any person—provided they see their victim\'s face and write their victim\'s name in a notebook called a Death Note. One day, Ryuk, bored by the shinigami lifestyle and interested in seeing how a human would use a Death Note, drops one into the human realm.\r\n\r\nHigh school student and prodigy Light Yagami stumbles upon the Death Note and—since he deplores the state of the world—tests the deadly notebook by writing a criminal\'s name in it. When the criminal dies immediately following his experiment with the Death Note, Light is greatly surprised and quickly recognizes how devastating the power that has fallen into his hands could be.\r\n\r\nWith this divine capability, Light decides to extinguish all criminals in order to build a new world where crime does not exist and people worship him as a god. Police, however, quickly discover that a serial killer is targeting criminals and, consequently, try to apprehend the culprit. To do this, the Japanese investigators count on the assistance of the best detective in the world: a young and eccentric man known only by the name of L.\r\n\r\n[Written by MAL Rewrite]', '2020-05-04 06:53:26'),
(5, '17405.jpg', 'Naruto', 'Action, Adventure, Comedy, Super Power, Martial Arts, Shounen', '220 ', 'Oct 3, 2002', 'Feb 8, 2007', '7.88', 'Moments prior to Naruto Uzumaki\'s birth, a huge demon known as the Kyuubi, the Nine-Tailed Fox, attacked Konohagakure, the Hidden Leaf Village, and wreaked havoc. In order to put an end to the Kyuubi\'s rampage, the leader of the village, the Fourth Hokage, sacrificed his life and sealed the monstrous beast inside the newborn Naruto.\r\n\r\nNow, Naruto is a hyperactive and knuckle-headed ninja still living in Konohagakure. Shunned because of the Kyuubi inside him, Naruto struggles to find his place in the village, while his burning desire to become the Hokage of Konohagakure leads him not only to some great new friends, but also some deadly foes.\r\n\r\n[Written by MAL Rewrite]', '2020-05-04 06:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `time`) VALUES
(3, 'minlapyae88', 'minlapyae88@gmail.com', '26beb030d08e7fc821149783d7fbccf9', '2020-04-23 07:09:16'),
(4, 'minlapyae1', 'minlapyae123@gmail.com', '93f235fa352103eb24e651415949a1cb', '2020-04-23 07:10:12'),
(5, 'minlapyae2', 'minlapyae2@gmail.com', '26beb030d08e7fc821149783d7fbccf9', '2020-04-23 07:11:19'),
(6, 'minlapyae3', 'minlapyae3@gamil.com', '26beb030d08e7fc821149783d7fbccf9', '2020-04-23 07:12:38'),
(7, 'minlapyae4', 'minlapyae4@gmail.com', '26beb030d08e7fc821149783d7fbccf9', '2020-04-24 10:13:54'),
(16, 'denny3', 'denny3@gmail.com', '8155c048b943686d02b446b1f476f52d', '2020-04-24 14:31:02'),
(17, 'minlapyae', 'minlapyae@gmail.com', 'c767c551803168444029553b5bf8958a', '2020-04-25 12:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `viewer`
--

CREATE TABLE `viewer` (
  `id` int(11) NOT NULL,
  `viewer` text DEFAULT NULL,
  `last_viewer` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `viewer`
--

INSERT INTO `viewer` (`id`, `viewer`, `last_viewer`) VALUES
(1, '20', '2020-05-07 04:54:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newanime`
--
ALTER TABLE `newanime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topanim`
--
ALTER TABLE `topanim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewer`
--
ALTER TABLE `viewer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animes`
--
ALTER TABLE `animes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `newanime`
--
ALTER TABLE `newanime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `topanim`
--
ALTER TABLE `topanim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `viewer`
--
ALTER TABLE `viewer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
