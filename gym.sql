-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 01:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(25) NOT NULL,
  `ClientName` varchar(45) NOT NULL,
  `ClientMobileNumber` text NOT NULL,
  `Groups` varchar(50) NOT NULL,
  `AppoinmentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `ClientName`, `ClientMobileNumber`, `Groups`, `AppoinmentDate`) VALUES
(104, 'Shakibul', '01884251312', 'Group 1', '2022-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `blog_category`) VALUES
(1, 'Category 1'),
(2, 'Category 2'),
(9, 'Category 3'),
(10, 'Category 4');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(20) NOT NULL,
  `ClientName` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Groups` varchar(200) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `ClientName`, `Address`, `Groups`, `Date`) VALUES
(110, 'Ryan Reynolds', 'this is my address', 'dance gym', '2022-02-05'),
(113, 'Draco Malfoy', 'Chamber of secrets', 'Atheletics', '2021-10-11'),
(115, 'Pranto Kumar', 'Seikhpara, Khulna', 'Group 2', '2022-02-22'),
(116, 'Shipon', 'Banorgati', 'Shakibul', '2022-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `fitnessgroup`
--

CREATE TABLE `fitnessgroup` (
  `id` int(25) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fitnessgroup`
--

INSERT INTO `fitnessgroup` (`id`, `group_name`, `type`) VALUES
(112, 'Dancing GYM Team', 'Gymnastics'),
(113, 'AAAA', 'aaaa'),
(116, 'Shakibul Group', 'Shakibul');

-- --------------------------------------------------------

--
-- Table structure for table `helps`
--

CREATE TABLE `helps` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `helps`
--

INSERT INTO `helps` (`id`, `client_email`, `message`) VALUES
(1, 'a@b.com', 'asdaas'),
(2, 'b@c.com', 'sdfcs swf'),
(3, 'a@b.com', 'axdzax asd'),
(4, 'b@c.com', 'dsfcsdf'),
(5, 'b@c.com', 'dsfcsdf'),
(6, 'a@b.com', 'asdasd'),
(7, 'b@c.com', 'adxads'),
(8, 'shakibul@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_name` text NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `client_name`, `details`) VALUES
(1, 'Shakibul Islam', 'He is a very lazy person.'),
(3, 'Nazmus Shakib', '<p>Is he really active?</p>');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(13, 21, 2, 'One day your life will flash before your eyes', '1574520979_image_1.png', '&lt;p&gt;This is a sample post&lt;/p&gt;', 1, '2019-11-23 15:56:19'),
(14, 21, 2, 'You have to believe that things will get better', '1574521288_image_5.png', '&lt;p&gt;Many times I have come across instances where some people scorn the practice of setting New Year Resolutions.&lt;/p&gt;&lt;p&gt;Their reason for this goes something like this:&lt;/p&gt;&lt;p&gt;The very word resolution is an indication of some form of internal conflict springing from an ineffectual self-governance in a person. It means the individual is waging a fight against something undesirable in their life; or is making a conscious decision to pursue certain ideals that before were absent in their life.&lt;/p&gt;&lt;p&gt;Aren&rsquo;t you supposed to be pursuing these ideals every day of your life? Isn&rsquo;t it supposed to be the default state of your life? Why would you wait for a new year before you make a resolution to better your life?&lt;/p&gt;&lt;p&gt;Such people also avoid new year resolutions or scorn the practice thereof because for them, experience has proven it to be ineffective.&lt;/p&gt;&lt;p&gt;I don&rsquo;t entirely agree with such people. I am not advocating the practice of new year resolutions either. But I&rsquo;d sooner advise a person to set new year resolutions they will end up abandoning by the end of January than advise them to sleepwalk through their life the entire year.&lt;/p&gt;&lt;p&gt;At the very least, setting new year resolutions means that you still have an interest in making your life better, and that is a good place to start. You just need a better strategy than new year resolutions, which is what I bring to the table today.&lt;/p&gt;&lt;p&gt;I call it The &lt;i&gt;12 months challenge.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;This challenge is simple: At the end of the year, write and publish an article in which you list 12 of your proudest, most fulfilling accomplishments from each of the 12 months of that year. Be very strict with the rules of the challenge: Pick only one accomplishment per month.&lt;/p&gt;&lt;p&gt;You are free to accomplish as many things in a month as you can but pick only one to be added to the list for any particular month.&lt;/p&gt;&lt;p&gt;Publish this article on your blog (if you have one), on your linkedIn profile, and on any of the social media platforms; share it with your close network of trusted family members, friends, colleagues and mentors.&lt;/p&gt;&lt;p&gt;It is very important that you share the article to as wide an audience as possible if the contents are not too private. Sharing such an article can help you connect with other individuals with shared interests, dreams, and plans for the future. And such connections can open doors for you and a lot of other people that you never knew existed.&lt;/p&gt;&lt;p&gt;Most importantly, if you know you are preparing the article to share it with other people, you are more likely to take it very seriously.&lt;/p&gt;&lt;p&gt;One thing I almost avoided mentioning is the nature of these accomplishments. I&rsquo;m avoiding this aspect of the challenge because I can&rsquo;t really tell you what you should aim at accomplishing in your life in order to feel fulfilled. You are going to have to do that yourself because only you can do it best. It is your purpose. You may think you don&rsquo;t know it yet but at some deeper level you do.&lt;/p&gt;&lt;p&gt;I can only tell you what works for me: I have a few questions I usually ask myself when I feel that I am not living a fulfilling life at any time in my life. At such times I ask myself:&lt;/p&gt;&lt;p&gt;If I were to be diagnosed with terminal cancer and given only 6 months to live, how would I spend that time? What things would I value most? What would I regret not doing?&lt;/p&gt;&lt;p&gt;For me, the answers to such questions immediately and unmistakably stand out clear in my mind:&lt;/p&gt;&lt;p&gt;I would regret not taking better care of my parents than what I am doing. They have toiled and soiled far too much for me to be ordinary.&lt;br&gt;I would grieve in my spirit at all those years I felt timid and settled for far far less than I am worth.&lt;/p&gt;&lt;p&gt;I would regret my passivity in relationships with all those amazing people who have once featured in my life and left because of my apparent disinterest. I could have swallowed my pride and risked exposing my insecurities, my quirks and my shortcomings in general. Hiding them only made me look uninterested.&lt;/p&gt;&lt;p&gt;I would regret all those hours I wasted feeling bored when I could have set up a blog to explore my passion for writing.&lt;/p&gt;&lt;p&gt;I could have read more and more books.&lt;/p&gt;&lt;p&gt;I would regret never having taken any steps towards realizing all those side projects I kept conceiving day after day in my mind.&lt;/p&gt;&lt;p&gt;And many more...&lt;/p&gt;&lt;p&gt;When you ask yourself the above questions, the answers will pop up almost immediately and they will fill you with a new vitality and enthusiasm towards your life goals.&lt;/p&gt;&lt;p&gt;Now assume your time from now on is as limited and valuable as it could be if the above assumption about cancer were real. Then start working on these projects one month at a time. Start living your unlived life one month at a time.&lt;/p&gt;', 1, '2019-11-23 16:01:28'),
(15, 21, 4, 'The spectacle before us was indeed sublime', '1574521317_image_2.png', '&lt;p&gt;Many times I have come across instances where some people scorn the practice of setting New Year Resolutions.&lt;/p&gt;&lt;p&gt;Their reason for this goes something like this:&lt;/p&gt;&lt;p&gt;The very word resolution is an indication of some form of internal conflict springing from an ineffectual self-governance in a person. It means the individual is waging a fight against something undesirable in their life; or is making a conscious decision to pursue certain ideals that before were absent in their life.&lt;/p&gt;&lt;p&gt;Aren&rsquo;t you supposed to be pursuing these ideals every day of your life? Isn&rsquo;t it supposed to be the default state of your life? Why would you wait for a new year before you make a resolution to better your life?&lt;/p&gt;&lt;p&gt;Such people also avoid new year resolutions or scorn the practice thereof because for them, experience has proven it to be ineffective.&lt;/p&gt;&lt;p&gt;I don&rsquo;t entirely agree with such people. I am not advocating the practice of new year resolutions either. But I&rsquo;d sooner advise a person to set new year resolutions they will end up abandoning by the end of January than advise them to sleepwalk through their life the entire year.&lt;/p&gt;&lt;p&gt;At the very least, setting new year resolutions means that you still have an interest in making your life better, and that is a good place to start. You just need a better strategy than new year resolutions, which is what I bring to the table today.&lt;/p&gt;&lt;p&gt;I call it The &lt;i&gt;12 months challenge.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;This challenge is simple: At the end of the year, write and publish an article in which you list 12 of your proudest, most fulfilling accomplishments from each of the 12 months of that year. Be very strict with the rules of the challenge: Pick only one accomplishment per month.&lt;/p&gt;&lt;p&gt;You are free to accomplish as many things in a month as you can but pick only one to be added to the list for any particular month.&lt;/p&gt;&lt;p&gt;Publish this article on your blog (if you have one), on your linkedIn profile, and on any of the social media platforms; share it with your close network of trusted family members, friends, colleagues and mentors.&lt;/p&gt;&lt;p&gt;It is very important that you share the article to as wide an audience as possible if the contents are not too private. Sharing such an article can help you connect with other individuals with shared interests, dreams, and plans for the future. And such connections can open doors for you and a lot of other people that you never knew existed.&lt;/p&gt;&lt;p&gt;Most importantly, if you know you are preparing the article to share it with other people, you are more likely to take it very seriously.&lt;/p&gt;&lt;p&gt;One thing I almost avoided mentioning is the nature of these accomplishments. I&rsquo;m avoiding this aspect of the challenge because I can&rsquo;t really tell you what you should aim at accomplishing in your life in order to feel fulfilled. You are going to have to do that yourself because only you can do it best. It is your purpose. You may think you don&rsquo;t know it yet but at some deeper level you do.&lt;/p&gt;&lt;p&gt;I can only tell you what works for me: I have a few questions I usually ask myself when I feel that I am not living a fulfilling life at any time in my life. At such times I ask myself:&lt;/p&gt;&lt;p&gt;If I were to be diagnosed with terminal cancer and given only 6 months to live, how would I spend that time? What things would I value most? What would I regret not doing?&lt;/p&gt;&lt;p&gt;For me, the answers to such questions immediately and unmistakably stand out clear in my mind:&lt;/p&gt;&lt;p&gt;I would regret not taking better care of my parents than what I am doing. They have toiled and soiled far too much for me to be ordinary.&lt;br&gt;I would grieve in my spirit at all those years I felt timid and settled for far far less than I am worth.&lt;/p&gt;&lt;p&gt;I would regret my passivity in relationships with all those amazing people who have once featured in my life and left because of my apparent disinterest. I could have swallowed my pride and risked exposing my insecurities, my quirks and my shortcomings in general. Hiding them only made me look uninterested.&lt;/p&gt;&lt;p&gt;I would regret all those hours I wasted feeling bored when I could have set up a blog to explore my passion for writing.&lt;/p&gt;&lt;p&gt;I could have read more and more books.&lt;/p&gt;&lt;p&gt;I would regret never having taken any steps towards realizing all those side projects I kept conceiving day after day in my mind.&lt;/p&gt;&lt;p&gt;And many more...&lt;/p&gt;&lt;p&gt;When you ask yourself the above questions, the answers will pop up almost immediately and they will fill you with a new vitality and enthusiasm towards your life goals.&lt;/p&gt;&lt;p&gt;Now assume your time from now on is as limited and valuable as it could be if the above assumption about cancer were real. Then start working on these projects one month at a time. Start living your unlived life one month at a time.&lt;/p&gt;', 1, '2019-11-23 16:01:57'),
(16, 21, 3, 'We love the things we love for what they are', '1574521343_image_3.png', '&lt;p&gt;Many times I have come across instances where some people scorn the practice of setting New Year Resolutions.&lt;/p&gt;&lt;p&gt;Their reason for this goes something like this:&lt;/p&gt;&lt;p&gt;The very word resolution is an indication of some form of internal conflict springing from an ineffectual self-governance in a person. It means the individual is waging a fight against something undesirable in their life; or is making a conscious decision to pursue certain ideals that before were absent in their life.&lt;/p&gt;&lt;p&gt;Aren&rsquo;t you supposed to be pursuing these ideals every day of your life? Isn&rsquo;t it supposed to be the default state of your life? Why would you wait for a new year before you make a resolution to better your life?&lt;/p&gt;&lt;p&gt;Such people also avoid new year resolutions or scorn the practice thereof because for them, experience has proven it to be ineffective.&lt;/p&gt;&lt;p&gt;I don&rsquo;t entirely agree with such people. I am not advocating the practice of new year resolutions either. But I&rsquo;d sooner advise a person to set new year resolutions they will end up abandoning by the end of January than advise them to sleepwalk through their life the entire year.&lt;/p&gt;&lt;p&gt;At the very least, setting new year resolutions means that you still have an interest in making your life better, and that is a good place to start. You just need a better strategy than new year resolutions, which is what I bring to the table today.&lt;/p&gt;&lt;p&gt;I call it The &lt;i&gt;12 months challenge.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;This challenge is simple: At the end of the year, write and publish an article in which you list 12 of your proudest, most fulfilling accomplishments from each of the 12 months of that year. Be very strict with the rules of the challenge: Pick only one accomplishment per month.&lt;/p&gt;&lt;p&gt;You are free to accomplish as many things in a month as you can but pick only one to be added to the list for any particular month.&lt;/p&gt;&lt;p&gt;Publish this article on your blog (if you have one), on your linkedIn profile, and on any of the social media platforms; share it with your close network of trusted family members, friends, colleagues and mentors.&lt;/p&gt;&lt;p&gt;It is very important that you share the article to as wide an audience as possible if the contents are not too private. Sharing such an article can help you connect with other individuals with shared interests, dreams, and plans for the future. And such connections can open doors for you and a lot of other people that you never knew existed.&lt;/p&gt;&lt;p&gt;Most importantly, if you know you are preparing the article to share it with other people, you are more likely to take it very seriously.&lt;/p&gt;&lt;p&gt;One thing I almost avoided mentioning is the nature of these accomplishments. I&rsquo;m avoiding this aspect of the challenge because I can&rsquo;t really tell you what you should aim at accomplishing in your life in order to feel fulfilled. You are going to have to do that yourself because only you can do it best. It is your purpose. You may think you don&rsquo;t know it yet but at some deeper level you do.&lt;/p&gt;&lt;p&gt;I can only tell you what works for me: I have a few questions I usually ask myself when I feel that I am not living a fulfilling life at any time in my life. At such times I ask myself:&lt;/p&gt;&lt;p&gt;If I were to be diagnosed with terminal cancer and given only 6 months to live, how would I spend that time? What things would I value most? What would I regret not doing?&lt;/p&gt;&lt;p&gt;For me, the answers to such questions immediately and unmistakably stand out clear in my mind:&lt;/p&gt;&lt;p&gt;I would regret not taking better care of my parents than what I am doing. They have toiled and soiled far too much for me to be ordinary.&lt;br&gt;I would grieve in my spirit at all those years I felt timid and settled for far far less than I am worth.&lt;/p&gt;&lt;p&gt;I would regret my passivity in relationships with all those amazing people who have once featured in my life and left because of my apparent disinterest. I could have swallowed my pride and risked exposing my insecurities, my quirks and my shortcomings in general. Hiding them only made me look uninterested.&lt;/p&gt;&lt;p&gt;I would regret all those hours I wasted feeling bored when I could have set up a blog to explore my passion for writing.&lt;/p&gt;&lt;p&gt;I could have read more and more books.&lt;/p&gt;&lt;p&gt;I would regret never having taken any steps towards realizing all those side projects I kept conceiving day after day in my mind.&lt;/p&gt;&lt;p&gt;And many more...&lt;/p&gt;&lt;p&gt;When you ask yourself the above questions, the answers will pop up almost immediately and they will fill you with a new vitality and enthusiasm towards your life goals.&lt;/p&gt;&lt;p&gt;Now assume your time from now on is as limited and valuable as it could be if the above assumption about cancer were real. Then start working on these projects one month at a time. Start living your unlived life one month at a time.&lt;/p&gt;', 1, '2019-11-23 16:02:23'),
(17, 21, 3, 'Either give me more wine or leave me alone', '1574521373_image_7.png', '&lt;p&gt;Many times I have come across instances where some people scorn the practice of setting New Year Resolutions.&lt;/p&gt;&lt;p&gt;Their reason for this goes something like this:&lt;/p&gt;&lt;p&gt;The very word resolution is an indication of some form of internal conflict springing from an ineffectual self-governance in a person. It means the individual is waging a fight against something undesirable in their life; or is making a conscious decision to pursue certain ideals that before were absent in their life.&lt;/p&gt;&lt;p&gt;Aren&rsquo;t you supposed to be pursuing these ideals every day of your life? Isn&rsquo;t it supposed to be the default state of your life? Why would you wait for a new year before you make a resolution to better your life?&lt;/p&gt;&lt;p&gt;Such people also avoid new year resolutions or scorn the practice thereof because for them, experience has proven it to be ineffective.&lt;/p&gt;&lt;p&gt;I don&rsquo;t entirely agree with such people. I am not advocating the practice of new year resolutions either. But I&rsquo;d sooner advise a person to set new year resolutions they will end up abandoning by the end of January than advise them to sleepwalk through their life the entire year.&lt;/p&gt;&lt;p&gt;At the very least, setting new year resolutions means that you still have an interest in making your life better, and that is a good place to start. You just need a better strategy than new year resolutions, which is what I bring to the table today.&lt;/p&gt;&lt;p&gt;I call it The &lt;i&gt;12 months challenge.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;This challenge is simple: At the end of the year, write and publish an article in which you list 12 of your proudest, most fulfilling accomplishments from each of the 12 months of that year. Be very strict with the rules of the challenge: Pick only one accomplishment per month.&lt;/p&gt;&lt;p&gt;You are free to accomplish as many things in a month as you can but pick only one to be added to the list for any particular month.&lt;/p&gt;&lt;p&gt;Publish this article on your blog (if you have one), on your linkedIn profile, and on any of the social media platforms; share it with your close network of trusted family members, friends, colleagues and mentors.&lt;/p&gt;&lt;p&gt;It is very important that you share the article to as wide an audience as possible if the contents are not too private. Sharing such an article can help you connect with other individuals with shared interests, dreams, and plans for the future. And such connections can open doors for you and a lot of other people that you never knew existed.&lt;/p&gt;&lt;p&gt;Most importantly, if you know you are preparing the article to share it with other people, you are more likely to take it very seriously.&lt;/p&gt;&lt;p&gt;One thing I almost avoided mentioning is the nature of these accomplishments. I&rsquo;m avoiding this aspect of the challenge because I can&rsquo;t really tell you what you should aim at accomplishing in your life in order to feel fulfilled. You are going to have to do that yourself because only you can do it best. It is your purpose. You may think you don&rsquo;t know it yet but at some deeper level you do.&lt;/p&gt;&lt;p&gt;I can only tell you what works for me: I have a few questions I usually ask myself when I feel that I am not living a fulfilling life at any time in my life. At such times I ask myself:&lt;/p&gt;&lt;p&gt;If I were to be diagnosed with terminal cancer and given only 6 months to live, how would I spend that time? What things would I value most? What would I regret not doing?&lt;/p&gt;&lt;p&gt;For me, the answers to such questions immediately and unmistakably stand out clear in my mind:&lt;/p&gt;&lt;p&gt;I would regret not taking better care of my parents than what I am doing. They have toiled and soiled far too much for me to be ordinary.&lt;br&gt;I would grieve in my spirit at all those years I felt timid and settled for far far less than I am worth.&lt;/p&gt;&lt;p&gt;I would regret my passivity in relationships with all those amazing people who have once featured in my life and left because of my apparent disinterest. I could have swallowed my pride and risked exposing my insecurities, my quirks and my shortcomings in general. Hiding them only made me look uninterested.&lt;/p&gt;&lt;p&gt;I would regret all those hours I wasted feeling bored when I could have set up a blog to explore my passion for writing.&lt;/p&gt;&lt;p&gt;I could have read more and more books.&lt;/p&gt;&lt;p&gt;I would regret never having taken any steps towards realizing all those side projects I kept conceiving day after day in my mind.&lt;/p&gt;&lt;p&gt;And many more...&lt;/p&gt;&lt;p&gt;When you ask yourself the above questions, the answers will pop up almost immediately and they will fill you with a new vitality and enthusiasm towards your life goals.&lt;/p&gt;&lt;p&gt;Now assume your time from now on is as limited and valuable as it could be if the above assumption about cancer were real. Then start working on these projects one month at a time. Start living your unlived life one month at a time.&lt;/p&gt;', 1, '2019-11-23 16:02:53'),
(18, 24, 3, 'Shakibul islam', '1645364307_146576476014657077778-2.jpg', '&lt;p&gt;Khulna&lt;/p&gt;', 1, '2022-02-20 19:38:27'),
(19, 24, 2, 'Test blog', '1645424635_1464420406Pledge Harbor Logo-01(1).png', '&lt;p&gt;Test details&lt;/p&gt;', 1, '2022-02-21 12:23:55'),
(20, 24, 1, 'Test blog 3', '1645426062_1464418663rfl.png', '&lt;p&gt;Test description.&lt;/p&gt;', 1, '2022-02-21 12:47:42'),
(21, 24, 3, 'Test blog 339663', '1645427789_1464421870download (1).jpg', '&lt;p&gt;Test description.&lt;/p&gt;', 1, '2022-02-21 12:56:41'),
(22, 24, 1, 'Edge 2', '1645427481_1464429977lsi-logo-single.png', '&lt;p&gt;Edge&lt;/p&gt;', 1, '2022-02-21 13:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `package_name` text NOT NULL,
  `amount` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `package_name`, `amount`) VALUES
(1, 'Pro Plus(++)', '2500'),
(2, 'Pro(+)', '2000'),
(4, 'Semi Pro', '1800');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(2, 'Life', '<p>test change</p>'),
(3, 'Quotes', ''),
(4, 'Fiction', ''),
(5, 'Biography', ''),
(6, ' Motivation', ''),
(7, 'Inspiration', ''),
(8, 'Test', '<p>test</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(21, 0, 'Melvine', 'melvineawa@gmail.com', '$2y$10$l8cXvXgnbJ2gmYGmv0tZxuMk7xUzKUu1yoIGuNPE0TDD.tEDtlpXW', '2019-11-23 14:23:30'),
(22, 2, 'Awa Melvine', 'melvine@d.com', '$2y$10$f/jCiQ9BuBqc0Aqi68m3dedWhz7vuh0yZz9H2EFd9l3WN65TFUBoa', '2019-11-27 07:08:45'),
(24, 1, 'fitnessweb', 'fitnessweb@gmail.com', '$2y$10$.9hNF0kU3vTqBfvweL6RrexW1RXl9jf.bXD/XQFI/6NuQwSkQS8IC', '2022-02-04 21:06:19'),
(25, 0, 'prantokumarsaha', 'officialprantosaha@gmail.com', '$2y$10$Gbdu0jzvXI27QEerH6KZBOYYBbwAH9LJumE8i6CCW4CtF/8VFZx7u', '2022-02-20 13:19:48'),
(26, 1, 'prantokumar', 'prantosaha@gmail.com', '$2y$10$pd9o7ssjp6tsrghiUfOd.Oegymb0ZTB0EcOWL2a6YkIaDNPdupE7e', '2022-02-20 15:19:03'),
(27, 0, 'mugdho', 'sahamugdha@gmail.com', '$2y$10$5wuRgIxS3ySiCzGwQZ1HD.dwuX6IKJg8e33dFEu3NuDy5VmOK5bIK', '2022-02-20 15:20:43'),
(28, 0, 'prokash', 'prokash@gmail.com', '$2y$10$20uNsqvoZY/FOvZ.vK8uk.ufsZDt8jj4CcSZuyr3UdY.uzo9aC3/6', '2022-02-20 15:21:36'),
(29, 2, 'aaa', 'aaa@gmail.com', '$2y$10$6/UzpBrUwPj.uzeWzTvwU.R.wBoOw9PIy0FovHBeLbpLyOBgd7lyW', '2022-02-20 15:24:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fitnessgroup`
--
ALTER TABLE `fitnessgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `fitnessgroup`
--
ALTER TABLE `fitnessgroup`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `helps`
--
ALTER TABLE `helps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
