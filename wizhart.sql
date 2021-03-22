-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 02:59 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wizhart`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `teamwork_images` varchar(40) NOT NULL,
  `teamwork` text NOT NULL,
  `about_short` varchar(100) NOT NULL,
  `about_white` text NOT NULL,
  `about_black` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `teamwork_images`, `teamwork`, `about_short`, `about_white`, `about_black`) VALUES
(1, '4d4465338815ee06a64867e58c862ff7.jpg', '<span>Who we are</span>\r\n                <h2>Get to know about <em>our company</em></h2>\r\n                <p>We are a truly professional visual creative content agency. We\'re talking about the versatility of content as a strategy driver, and much more than just engaging an audience, where thought and expertise are used to build and strengthen a customer base. A content strategy is an essential tool for achieving the alignment needed to present one face to customers - a face that represents the look, feel, and behavior a brand represents.  </p>\r\n                <a href=\"about.php\" class=\"filled-button\">Read More</a>', 'WE HAVE OVER 20 YEARS OF EXPERIENCE', '<div class=\"row\">\r\n                <div class=\"col-md-6 align-self-center\">\r\n                  <div class=\"right-content\">\r\n                    <span>Lorem ipsum dolor sit amet</span>\r\n                    <h2>Get to know about <em>our company</em></h2>\r\n                    <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac dignissim ipsum. Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem. \r\n                    <br><br>Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend, ullamcorper dui nec, luctus quam.</p>\r\n                  </div>\r\n                </div>\r\n                <div class=\"col-md-6\">\r\n                  <div class=\"left-image\">\r\n                    <img src=\"assets/images/about-1-570x350.jpg\" alt=\"\">\r\n                  </div>\r\n                </div>\r\n              </div>', '<div class=\"row\">\r\n          <div class=\"col-md-6\">\r\n            <div class=\"left-content\">\r\n              <span>Lorem ipsum dolor sit amet</span>\r\n              <h2>Modi esse sapiente tenetur <em>impedit laudantium laborum</em></h2>\r\n              <p>Pellentesque ultrices at turpis in vestibulum. Aenean pretium elit nec congue elementum. Nulla luctus laoreet porta. Maecenas at nisi tempus, porta metus vitae, faucibus augue. \r\n              <br><br>Fusce et venenatis ex. Quisque varius, velit quis dictum sagittis, odio velit molestie nunc, ut posuere ante tortor ut neque.</p>\r\n            </div>\r\n          </div>\r\n          <div class=\"col-md-6 align-self-center\">\r\n            <div class=\"row\">\r\n              <div class=\"col-md-6\">\r\n                <div class=\"count-area-content\">\r\n                  <div class=\"count-digit\">1234</div>\r\n                  <div class=\"count-title\">Jobs</div>\r\n                </div>\r\n              </div>\r\n              <div class=\"col-md-6\">\r\n                <div class=\"count-area-content\">\r\n                  <div class=\"count-digit\">2280</div>\r\n                  <div class=\"count-title\">Happy clients</div>\r\n                </div>\r\n              </div>\r\n              <div class=\"col-md-6\">\r\n                <div class=\"count-area-content\">\r\n                  <div class=\"count-digit\">15</div>\r\n                  <div class=\"count-title\">Cities</div>\r\n                </div>\r\n              </div>\r\n              <div class=\"col-md-6\">\r\n                <div class=\"count-area-content\">\r\n                  <div class=\"count-digit\">14</div>\r\n                  <div class=\"count-title\">Offices</div>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `images` varchar(40) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content_preview` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `views` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `images`, `title`, `content_preview`, `content`, `views`, `created_at`) VALUES
(1, 1, '5e8966e5f9fb87d8d39bb39f34b78351.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing.', 'Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna ', '<p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet.</p>\r\n', 0, '2021-03-22 13:18:23'),
(2, 1, 'a4a3b3af391d39dd46b4a22163dcbb31.jpg', 'Mauris lobortis quam id dictum dignissim', 'Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna ', '<p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet</p>\r\n', 0, '2021-03-22 13:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `images` varchar(40) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `content_short` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `images`, `title`, `content`, `content_short`) VALUES
(1, '03a32f309d0e55c666cb6e796bd17143.jpg', 'Branding', '<div class=\"row\">\r\n<div class=\"col-md-8\">\r\n          <div class=\"tabs-content\">\r\n              <h4>Description</h4>\r\n\r\n              We will build and develop your brand into a lasting identity that can enhance your brand reputation and differentiate your brand from competitors. Products that have a brand will be easily recognized and promoted so that they become the attraction of the product. A brand will easily promote its products by showing the value of that identity visually. We will give the best results, from creating identity to visual content as a promotional medium. \r\n              <br>\r\n              <br>\r\n              <br>\r\n              <br>\r\n              <br>\r\n            </div>\r\n          </div> \r\n            <div class=\"col-lg-4\">\r\n            <div class=\"tabs-content\">\r\n              <h4>Contact Details</h4>\r\n\r\n              <p>\r\n                <span>Name</span>\r\n              \r\n                <br>\r\n              \r\n                <strong>Zulmi Rahmawan</strong>\r\n              </p>\r\n              \r\n              <p>\r\n                <span>Phone</span>\r\n              \r\n                <br>\r\n                \r\n                <strong>\r\n                  <a href=\"tel:+628976895144\">+628976895144</a>\r\n                </strong>\r\n              </p>\r\n              \r\n              <p>\r\n                <span>Email</span>\r\n              \r\n                <br>\r\n                \r\n                <strong>\r\n                  <a href=\"mailto:wizhart6@gmail.com\">wizhart6@gmail.com</a>\r\n                </strong>\r\n              </p>\r\n            </div>\r\n          </div>\r\n</div>', 'Will build your brand into an identity system that will enhance your brand reputation and differentiate you from the competition.'),
(2, '04675b08ac1a8f5bc1816cf7a92cf5f8.jpg', 'Lorem ipsum dolor sit amet', '<div class=\"row\">\r\n          <div class=\"col-md-8\">\r\n            <div class=\"tabs-content\" style=\"display: block;\">\r\n              <h4>Description</h4>\r\n\r\n              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae provident quae quidem minima cupiditate tempora aperiam corrupti ducimus quos quisquam ipsam, laborum voluptatibus reiciendis saepe, at, facere cum quo! Nesciunt.</p>\r\n\r\n              <br>\r\n\r\n              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam optio doloribus modi? Odio voluptatibus dolorem itaque illo recusandae quasi unde eaque architecto, repellendus id consequatur vel totam, doloremque distinctio quas explicabo iure quisquam quis rem ipsa, accusantium! Perspiciatis, dicta, recusandae?</p>\r\n\r\n              <br>\r\n\r\n              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum sunt dolore minima commodi laudantium accusamus nemo repellat sapiente, eius error hic, autem. Dicta eveniet at consequatur dolorum placeat in, laborum beatae temporibus, delectus accusantium assumenda corporis, eum animi quaerat minus eos necessitatibus ipsam! Officia ut ab aspernatur, voluptatem blanditiis qui neque repellendus sapiente voluptas tempora exercitationem ipsa vel, dolorum consequatur.</p>\r\n            </div>\r\n\r\n            <br>\r\n          </div>\r\n\r\n          <div class=\"col-md-4\">\r\n            <br>\r\n            <div>\r\n              <img src=\"assets/images/product-1-720x480.jpg\" alt=\"\" class=\"img-fluid wc-image\">\r\n            </div>\r\n            <br>\r\n\r\n            <a href=\"property-details.html\" class=\"filled-button text-center\" style=\"display: block\">Apply for this Job</a>\r\n\r\n            <br>\r\n          </div>\r\n        </div>\r\n\r\n        <br>\r\n\r\n        <div class=\"row\">\r\n          <div class=\"col-lg-9\">\r\n            <div class=\"tabs-content\" style=\"display: block;\">\r\n              <h4>About Employer</h4>\r\n\r\n              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae provident quae quidem minima cupiditate tempora aperiam corrupti ducimus quos quisquam ipsam, laborum voluptatibus reiciendis saepe, at, facere cum quo! Nesciunt.</p>\r\n\r\n              <br>\r\n\r\n              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam optio doloribus modi? Odio voluptatibus dolorem itaque illo recusandae quasi unde eaque architecto, repellendus id consequatur vel totam, doloremque distinctio quas explicabo iure quisquam quis rem ipsa, accusantium! Perspiciatis, dicta, recusandae?</p>\r\n\r\n              <br>\r\n\r\n              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum sunt dolore minima commodi laudantium accusamus nemo repellat sapiente, eius error hic, autem. Dicta eveniet at consequatur dolorum placeat in, laborum beatae temporibus, delectus accusantium assumenda corporis, eum animi quaerat minus eos necessitatibus ipsam! Officia ut ab aspernatur, voluptatem blanditiis qui neque repellendus sapiente voluptas tempora exercitationem ipsa vel, dolorum consequatur.</p>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-3\">\r\n            <div class=\"tabs-content\">\r\n              <h4>Contact Details</h4>\r\n\r\n              <p>\r\n                <span>Name</span>\r\n              \r\n                <br>\r\n              \r\n                <strong>John Smith</strong>\r\n              </p>\r\n              \r\n              <p>\r\n                <span>Phone</span>\r\n              \r\n                <br>\r\n                \r\n                <strong>\r\n                  <a href=\"tel:123-456-789\">123-456-789</a>\r\n                </strong>\r\n              </p>\r\n              \r\n              <p>\r\n                <span>Mobile phone</span>\r\n              \r\n                <br>\r\n                \r\n                <strong>\r\n                  <a href=\"tel:456789123\">456789123</a>\r\n                </strong>\r\n              </p>\r\n              \r\n              <p>\r\n                <span>Email</span>\r\n              \r\n                <br>\r\n                \r\n                <strong>\r\n                  <a href=\"mailto:john@carsales.com\">john@carsales.com</a>\r\n                </strong>\r\n              </p>\r\n            </div>\r\n          </div>\r\n        </div>', 'Medical / Health Jobs');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_text` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `phone_text` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `location_text` varchar(100) NOT NULL,
  `maps` text NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `email`, `email_text`, `phone`, `phone_text`, `location`, `location_text`, `maps`, `facebook`, `instagram`, `linkedin`) VALUES
(1, 'WizhArt', 'WizhArt is Landing page', 'contact@wizhart.com', 'Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.', '+62851234567890', 'Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.', '212 Barrington Court New York str USA', 'Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1978.171905307209!2d110.22864795819761!3d-7.427151698660415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a84294d1ca325%3A0xf28d6f776c471b11!2sKauman%2C%20Payaman%2C%20Kec.%20Secang%2C%20Magelang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1613132851643!5m2!1sid!2sid\" width=\"100%\" height=\"500\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'https://facebook.com/wizhart', 'https://instagram.com/wizhart', 'https://linkedin.com/in/wizhart');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `link_button` varchar(100) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `title`, `subtitle`, `description`, `link_button`, `images`) VALUES
(1, 'creative agency', '', 'We are a truly professional visual creative content agency. We’re talking about content’s versatility as a strategy driver, and for far more than just attracting audiences.', 'jobs.php', 'slider-image-1-1920x900.jpg'),
(2, 'for all sectors and platforms.', 'We create inspiring visual image of content', 'We will focus your brand on gaining trust, interaction and purpose through a truly professional visual creative content strategy. We are ready to be your partner to compete in the digital world. We provide the solutions and expertise used to build and strengthen a customer base.', 'about.php', 'slider-image-2-1920x900.jpg'),
(3, 'Increase your Visual Content <br> Skill with our B', '', 'Visuals are a powerful marketing tool today, because well-optimized visual content is better than hundreds-word articles.', 'blog.php', 'slider-image-2-1920x900.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `linkedin` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `description`, `linkedin`, `photo`) VALUES
(1, 'William Smith', 'Co-Founder', 'In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.', 'https://linkedin.com/in/william', '5e99af512b95d67431de2b81865e2079.jpg'),
(2, 'Mary Houston', 'Chief Marketing Officer', 'In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.', 'https://linkedin.com/in/marry', 'c6e0f5bc14f8e5dba0d3c5f1b22c53b6.jpg'),
(3, 'John Doe', 'Financial Analyst', 'In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.', 'https://linkedin.com/in/joe', 'a38db87a59dd2e969c5b15d9e7201a8f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `terms_short` varchar(100) NOT NULL,
  `terms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `terms_short`, `terms`) VALUES
(1, 'LOREM IPSUM DOLOR SIT AMET.', '<div class=\"right-content\">\r\n            <span>A) Lorem ipsum dolor sit amet</span>\r\n            <h5>1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, iure.</h5>\r\n            <br>  \r\n            <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac dignissim ipsum. Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem. Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend, ullamcorper dui nec, luctus quam.</p>\r\n\r\n            <br>\r\n\r\n            <span>A) Lorem ipsum dolor sit amet</span>\r\n            <h5>1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, iure.</h5>\r\n            <br>  \r\n            <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac dignissim ipsum. Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem. Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend, ullamcorper dui nec, luctus quam.</p>\r\n\r\n            <br>\r\n\r\n            <span>A) Lorem ipsum dolor sit amet</span>\r\n            <h5>1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, iure.</h5>\r\n            <br>  \r\n            <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac dignissim ipsum. Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem. Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend, ullamcorper dui nec, luctus quam.</p>\r\n\r\n            <br>\r\n\r\n            <span>A) Lorem ipsum dolor sit amet</span>\r\n            <h5>1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, iure.</h5>\r\n            <br>  \r\n            <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac dignissim ipsum. Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem. Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend, ullamcorper dui nec, luctus quam.</p>\r\n\r\n            <br>  \r\n            <br>  \r\n            <br>  \r\n            <br>  \r\n          </div>');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `jobs` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `jobs`, `message`, `photo`) VALUES
(1, 'George Walker', 'Chief Financial Analyst', 'Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus.', '1ee9108759ed9b7c6b9646909e158d5f.jpg'),
(2, 'John Smith', 'Market Specialist', 'In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi.', '31bd58da2edc5210da09a7ad21f2525c.jpg'),
(3, 'Andrew Boom', 'Marketing Head', 'Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis.', '803d80e0a0a0f41c17d08378a39822fe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
