-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2015 at 10:17 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `symfony`
--
CREATE DATABASE IF NOT EXISTS `symfony` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `symfony`;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `articleId` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `private` tinyint(1) NOT NULL,
  PRIMARY KEY (`articleId`),
  KEY `IDX_CD8737FAA76ED395` (`user_id`),
  KEY `IDX_CD8737FA12469DE2` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`user_id`, `category_id`, `articleId`, `heading`, `content`, `createdAt`, `tags`, `private`) VALUES
(1, 1, 1, 'Naslov', 'sadryaj', '2015-05-17 18:52:50', '', 0),
(1, 6, 2, 'proba', 'asdk', '2015-05-22 11:48:43', '', 0),
(1, 7, 5, 'Color Filters Can Turn Your Gray Skies Blue', 'The following is a guest post by Amelia Bellamy-Royds. I''ve always enjoyed the "duotone" effect in photos. In Photoshop, you can create them by converting an image into \n<pre class="brush: css;">\n.container{\noverflow:hidden;\n}\n</pre>\n\n<pre class="brush: php;">\n public function updatedTimestamps()\n    {\n        if($this->getCreatedAt() == null)\n        {\n            $this->setCreatedAt(new \\DateTime(date(''Y-m-d H:i:s'')));\n        }\n    }\n\n    public function __construct(){\n        $this->setCreatedAt(new \\DateTime(date(''Y-m-d H:i:s'')));\n    }\n</pre>\ngrayscale mode, then into duotone. So the lights are "mapped" to one color, and the darks another. Not only does it look cool, but images with less colors are smaller in file size and thus good for performance. When I saw Amelia playing around with this programatically through SVG on CodePen, I asked if she''d be up for teaching us through a guest post. Lucky for us, here it is!\n\nOnce upon a time, if you wanted artistic images in your web design, you created them in Photoshop. Or maybe GIMP, if you were edgy and open-source inclined. But either way, the end result was a single, static, image file that was uploaded to your server, downloaded to your user''s web browser, and displayed exactly as you created it. If you wanted to turn a graphical effect on and off in response to user interactions, then you exported two different image files, and you swapped them with JavaScript or CSS pseudo classes.\n\nGraphical effects—first in SVG, now in CSS—are changing that. You can apply Photoshop-like filters or blended layers right in the browser. Which means you can use a single image file and present it in multiple ways as the user interacts with it. It also means you can have a lot of fun with a boring-old black and white photo.\n\n\nFilter Effects Basics\n\nThe easiest-to-use graphical effects are the shorthand filter functions. You apply them with the CSS filter property The browser manipulates the appearance of the corresponding element before painting it to the page. Filter functions are supported prefix-free in Firefox since version 35 (stable release in January 2015). They have been supported with the -webkit- prefix in Safari, Chrome, and Blink-based Opera for a few years now.\n\n(We''ll get into alternatives that work in Internet Explorer at the end of the post; for now, you''ll want to use one of those browsers to check out the demos!)\n\nFor a full description of the available filter functions (with examples!), check out the Almanac page on the filter property.\nSome things to note:\n\nYou can apply a series of filters as a white-space separated list.\nFilters create a stacking context.\nA filter is applied to an entire element (including text, background images, and all its child content), after layering them together.\nThere are still a number of buggy edge cases in browsers, like what happens when there are fixed-position child elements or hidden overflow.\nAn easy and useful trick is to take a color image and convert it to black and white, using grayscale(100%) or saturate(0%). The following demo uses that to create monochrome profile pictures for a pair of smart cookies. The filter is removed on hover/focus to reveal the full color image. To compensate for the loss of color contrast and vibrancy, the overall brightness and contrast of the image is increased using the (conveniently named) brightness() and contrast() filter functions. It even adds a short transition to fade the colors in and out.\n\n\nThis is all well and good. Take a color image, tell the browser to make it gray. Selectively reverse for user-delighting interaction.\n\nBut what if you could do the opposite? What if you could start with a grayscale image and tell the browser to give it color?\n\nA grayscale JPEG image is usually between 5-25% smaller in file-size than the equivalent color photo (it depends on the photo and the compression ratio—JPEG compresses color channels much more than the brightness details). For a lossless image format such as PNG, the change in file size can be much greater. When performance matters, those extra kilobytes could count. Imagine if you had a page full of profile pictures. The user is only ever going to see some of them in color, so why use up their data plan sending the color photos? Filters also take CPU to process and memory to store the result. Wouldn''t it be better to only filter the hovered photo, and leave the rest as normal?\n\nFinally, you have to think of the impact on browsers that don''t support CSS filters. Do you want all color or all grayscale as the fallback?\n\nThere is only one shorthand filter function that can add color to a grayscale image: sepia(), which gives whites and grays a yellowish tinge. On a color image, it applies an implicit conversion to a luminance-based grayscale first. It also increases the overall brightness and contrast, although not as much as the previous example did with separate filters. The demo below looks almost identical to the previous one, before you interact with it, but this time the images are actually saved as grayscale JPEGs. A sepia-toned effect is applied to add a little (false) color on hover.', '2015-05-22 11:55:08', 'Css, Design, Stylesheet, Frontend', 0),
(1, 9, 6, 'assadadsasd', 'adsasdasd', '2015-05-22 11:55:30', '', 0),
(1, 10, 7, 'novi clanak sa text editorom', 'aslkdaslkd', '2015-05-22 12:28:29', '', 0),
(1, 8, 8, 'Novak', '<p id="article_lead" style="margin-bottom: 20px; padding: 10px 0px; border-width: 1px 0px; border-top-style: solid; border-bottom-style: solid; border-top-color: rgb(221, 221, 221); border-bottom-color: rgb(221, 221, 221); outline: 0px; font-size: 16px; font-family: Georgia; color: rgb(0, 0, 0); font-stretch: normal; line-height: 24px;">Održan je žreb za predstojeći Rolan Garos, a prvi protivnik Novaka Đokovića biće 86. teniser sveta, Finac Jarko Nieminen.</p><p style="margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15.0015001296997px; font-family: Georgia; color: rgb(17, 17, 17); line-height: 24px;"><img width="470" height="326" m_ext="ff" m_id="614052" src="http://sport.blic.rs/data/images/2015-05-15/614052_20150515reutersstefano-rellandiniromedi007677940_ff.jpg?ver=1432286060" class="img_full" alt="" style="margin-top: 10px; margin-right: 0px; margin-bottom: 10px; padding: 0px; outline: 0px; font-size: 9px; font-family: ''Lucida Sans Unicode'', ''Lucida Grande'', vedrana; font-stretch: normal; line-height: 1.3em; color: rgb(170, 170, 170);">Rodžer Federer, Endi Marej i Tomaš Berdih će igrati protiv kvalifikanata na početku turnira, dok Rafael Nadal može da se sastane sa Novakom Đokovićem u četvrtfinalu. Prvi potivnik "kralja šljake" biće 19-godišnji Francuz Kventin Halis.</p><p style="margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15.0015001296997px; font-family: Georgia; color: rgb(17, 17, 17); line-height: 24px;">&nbsp;</p><p style="margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15.0015001296997px; font-family: Georgia; color: rgb(17, 17, 17); line-height: 24px;"></p><p style="margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15.0015001296997px; font-family: Georgia; color: rgb(17, 17, 17); line-height: 24px;"></p><table width="200" cellspacing="0" cellpadding="0" border="0" align="right" class="antre_r back_c_1" style="margin: 5px 0px 0px 10px; padding: 0px; border-width: 0px 0px 1px; border-bottom-style: solid; border-bottom-color: rgb(221, 221, 221); outline: 0px; font-size: 13px; font-family: ''Trebuchet MS''; border-collapse: separate; font-stretch: normal; line-height: 1.5em; background: rgb(234, 234, 234);"><tbody style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-style: inherit; font-size: 13.0012998580933px; font-family: inherit;"><tr style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-style: inherit; font-size: 13.0025997161865px; font-family: inherit;"><td style="margin: 0px; padding: 10px; border: 0px; outline: 0px; font-style: inherit; font-size: 13.0039005279541px; font-family: inherit; line-height: 22px;"><h2 style="margin-top: 5px; margin-bottom: 5px; padding: 0px; border: 0px; outline: 0px; font-weight: bold; font-size: 16px; font-family: ''Trebuchet MS''; color: rgb(34, 34, 34); font-stretch: normal; line-height: 1.5em;">Pročitajte još</h2><ul style="margin-right: 0px; margin-bottom: 0px; margin-left: 15px; padding: 0px; border: 0px; outline: 0px; font-style: inherit; font-size: 13.0052013397217px; font-family: inherit;"><li style="margin: 0px 0px 5px; padding: 0px; border: 0px; outline: 0px; font-style: inherit; font-size: 13.0065031051636px; font-family: inherit;"><a href="http://sport.blic.rs/Tenis/272805/Ana-protiv-Svedove-na-startu-Jelena-protiv-kvalifikantkinje-Bojana-na-Curenko" target="_blank" style="margin: 0px; padding: 0px; border-width: 0px 0px 1px; border-bottom-style: solid; border-bottom-color: rgb(223, 0, 0); font-style: inherit; font-size: 13.0078039169312px; font-family: inherit; cursor: pointer; text-decoration: none; color: rgb(47, 93, 139);">Ana protiv Švedove na startu, Jelena protiv kvalifikantkinje, Bojana na Curenko</a></li></ul></td></tr></tbody></table><p style="margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15.0015001296997px; font-family: Georgia; color: rgb(17, 17, 17); line-height: 24px;">U projektovanom polufinalu, Đoković bi mogao da se sastane sa Endijem Marejem ili Davidom Fererom, a na drugoj strani mogući su četvrtfinalni dueli Kei Nišikori -&nbsp;Tomaš Berdih i Rodžer Federer - Stan Vavrinka.</p><p style="margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15.0015001296997px; font-family: Georgia; color: rgb(17, 17, 17); line-height: 24px;">&nbsp;</p><p style="margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15.0015001296997px; font-family: Georgia; color: rgb(17, 17, 17); line-height: 24px;">U drugom kolu Novak će igrati protiv Žila Milera ili Paola Lorencija, u trećem protiv Tanasija Kokinakisa ili Bernarda Tomića, dok je Nadalu prva prepreka posle francuskog tinejdžera pobednik meča Nikolas&nbsp;Almagro - Aleksandr Dolgopolov.</p><p style="margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15.0015001296997px; font-family: Georgia; color: rgb(17, 17, 17); line-height: 24px;">&nbsp;</p><p style="margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15.0015001296997px; font-family: Georgia; color: rgb(17, 17, 17); line-height: 24px;">Što se srpskih predstavnika tiče,&nbsp;<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-style: inherit; font-size: 15.0030002593994px; font-family: inherit;">Dušan Lajović&nbsp;</b>će igrati protiv Maksima Gonzalesa,&nbsp;<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-style: inherit; font-size: 15.0030002593994px; font-family: inherit;">Filip Krajinović&nbsp;</b>protiv Davida Gofana, a<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-style: inherit; font-size: 15.0030002593994px; font-family: inherit;">Viktora Troickog&nbsp;</b>čeka Jan-Lenard Štruf.</p>', '2015-05-22 12:51:21', '', 0),
(1, 6, 20, 'nove rute', 'nove rute', '2015-05-23 18:08:13', 'asdsad, asdasd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `name`) VALUES
(1, 'Web design'),
(6, 'Service'),
(7, 'Backend'),
(8, 'Frontend'),
(9, 'Search engine optimization'),
(10, 'Javascript Tutorials');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `user_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `commentId` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  PRIMARY KEY (`commentId`),
  KEY `IDX_5BC96BF0A76ED395` (`user_id`),
  KEY `IDX_5BC96BF07294869C` (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=62 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`user_id`, `article_id`, `commentId`, `text`, `createdAt`) VALUES
(2, 5, 1, 'This is the first comment!', '2015-05-25 09:20:26'),
(1, 5, 2, 'This is comment by article author!', '2015-05-24 09:30:27'),
(3, 5, 61, 'This is another comment. ', '2015-05-27 20:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `departmentId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`departmentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentId`, `name`) VALUES
(32, 'Design'),
(33, 'Frontend'),
(34, 'Backend'),
(35, 'Administration');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `user_id` int(11) DEFAULT NULL,
  `documentId` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`documentId`),
  KEY `IDX_211FE820A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `finishDate` datetime NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `description`, `status`, `createdAt`, `finishDate`, `title`) VALUES
(1, 'Demo task', 50, '2015-05-28 00:00:00', '2015-05-28 00:00:00', 'First Demo task');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`),
  KEY `IDX_2DA17977AE80F5DF` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `department_id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `name`, `position`) VALUES
(1, 35, 'admin', 'admin', 'ugra1992@gmail.com', 'ugra1992@gmail.com', 1, 'tswsilbwmpcsccwgg04scowc0cgw4os', 'nHTH+n7R8ZByVZy8CxquSftUNBwQA617ABrgwgYe74qDagzPaO6ut66MAXGi7U19cJaWXUoNDxZqnetFd/+Jaw==', '2015-05-28 18:57:28', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, 'Administrator', 'System Administrator'),
(2, 33, 'ugra', 'ugra', 'dzony1922@gmail.com', 'dzony1922@gmail.com', 1, '3c1rklr51zeosksgwsw08oo48gsgskw', 'QGc89rf1HxlGFQrzxYChAnG+nE7zvyNYO1mZfs/yUJTtP9iYTmG1TuoU1ODRL8TPBs2cpLXpSLzcIMEiSqWDPA==', '2015-05-17 21:31:08', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Nikola Ugrinovic', 'Frontend Developer'),
(3, 33, 'loske', 'loske', 'pavlelosic@yahoo.com', 'pavlelosic@yahoo.com', 1, 'nmz51qu2ias0ss8kk8c8gw4osog8048', 'Z1qRzs/U6bkinTr63GSh9t5v49g7SycuOTIsNrbJp4eEDsIQwHOXlbGNY2O+W7y8p/8zXDO19JmrOcoZjNMefA==', '2015-05-28 18:56:43', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Pavle Losic', 'Frontend Developer'),
(4, NULL, 'peter', 'peter', 'peter@gmail.com', 'peter@gmail.com', 1, 'sx4sod756f4484ws840w44g8sgks4o8', '9YkQ90rSk2X42xCf0rzvhu7vFAx4sardPaR/v0SkKeLgazW9Dv00IyhBBhNALoEz8ObJNAyV+weJznow3XSYeA==', '2015-05-23 16:33:01', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Peter Thomas', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_tasks`
--

CREATE TABLE IF NOT EXISTS `users_tasks` (
  `user_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`task_id`),
  KEY `IDX_B72FC1DEA76ED395` (`user_id`),
  KEY `IDX_B72FC1DE8DB60186` (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_tasks`
--

INSERT INTO `users_tasks` (`user_id`, `task_id`) VALUES
(1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_CD8737FA12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`categoryId`),
  ADD CONSTRAINT `FK_CD8737FAA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_5BC96BF07294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`articleId`),
  ADD CONSTRAINT `FK_5BC96BF0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `FK_211FE820A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_2DA17977AE80F5DF` FOREIGN KEY (`department_id`) REFERENCES `department` (`departmentId`);

--
-- Constraints for table `users_tasks`
--
ALTER TABLE `users_tasks`
  ADD CONSTRAINT `FK_B72FC1DE8DB60186` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B72FC1DEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
