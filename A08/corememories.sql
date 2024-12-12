-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 07:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(800) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'fr.mp4', 'This is a core memory of the start of Lira\'s Friendship Island with her college friends. She remembers clearly the last day of their first year of college, when she and her friends—Coleen, Loreen, Jenna, Chan, Jerome, and Kaye—decided to meet and talk. They shared stories and laughed, reflecting on the year they had spent together. In that moment, Lira realized that this friendship was special. It wasn’t just about being classmates—it was something deeper. She knew that this group would be her support system throughout college, and this memory became the foundation of a bond that continues to grow stronger every day.', '#DB80B8'),
(2, 1, 'f2.png', 'Another core memory Lira has with her friends is celebrating birthdays. From the beginning of their friendship, they started a tradition of giving birthday cakes to the celebrant. This simple gesture reminds each of them that they are valued, loved, and remembered. These celebrations have become a cherished part of their bond, strengthening their connection and creating joyful memories that they carry with them.', '#DB80B8'),
(3, 1, 'f3.png', 'One of the most cherished memories Lira has with her friends is their tradition of eating out together, especially on \"Dormies Day,\" which falls on the 29th of every month. This date holds a special meaning for them, as it marks the start of their friendship. What began as casual hangouts soon turned into an important tradition that everyone looks forward to. Each \"Dormies Day,\" they would meet at their favorite spots, share a meal, and reflect on the moments that have shaped their journey together. The laughter, the stories, and the joy of being surrounded by friends have made these meals much more than just about food; they’ve become a way of celebrating the bond they’ve built over time.', '#DB80B8'),
(4, 2, 'c1.png', 'Cat Island was built when Lira had her first cat. It all began one rainy afternoon when she discovered a small, helpless kitten trapped in a water pipe, meowing for help. Lira couldn’t leave the kitten behind, so she carefully took it in, naming it \"Covid.\" She cared for it with love, nurturing the kitten as it grew into a playful companion. Over time, their bond deepened, and \"Covid\" became a source of comfort and joy, a reminder of the unexpected moments that shape our lives. Sadly, Covid disappeared without a trace. Despite Lira’s efforts to find the kitten, it never returned. Lira holds onto the memory of their time together. ', '#7D8CB4'),
(5, 2, 'c2.png', 'Lira’s love for cats grew even stronger when she found another stray at the gate of their house. This kitten, which seemed abandoned and vulnerable, quickly won her heart, and she named him \'Gate.\' Gate was an energetic, loving cat who brought joy to Lira\'s days. However, after a year, Gate became sick and died. Despite the sadness, this memory became a cherished part of Cat Island. It deepened her appreciation for the time she had with her furry friends.', '#7D8CB4'),
(6, 2, 'c3.png', 'Lira first met Luna when she was just a tiny kitten, not knowing that the little furball would one day become her pet. At first, Lira only agreed to take care of Luna temporarily, as she was asked to cat-sit for a friend. After a few months, Luna was officially given to Lira, and she named her Luna. Though Luna enjoys her independence, she is also affectionate, always seeking attention when she’s in the mood. Every night, she would resist returning to her cage, preferring the freedom to roam and explore outside. Now, Luna has been with Lira for a year, a constant companion who brings happiness to her life.', '#7D8CB4'),
(7, 3, 'fm1.mp4', 'Family Island holds many cherished memories, and one of the most vivid ones is Lira’s 7th birthday celebration. It was a tradition in the family to celebrate every birthday together, and for her 7th, they held the celebration at Jollibee. Close friends and loved ones were invited to join in the party. It was there that Lira truly realized how lucky she was to have such a loving, caring, and supportive family. The warmth of the gathering, the laughter, and the sense of togetherness made it a moment she would forever cherish, marking her understanding of the importance of family bonds.', '#87AE8A'),
(8, 3, 'fm2.png', 'Another core memory tied to Family Island is the tradition of taking family pictures at every significant milestone. Whether it was for recognitions or graduation rites, the entire family would gather for a photo, and that picture would be framed as a lasting memento. These photos, more than just images, served as reminders of the love they shared for each other. For Lira, each photo represented not just a personal achievement but also the outspoken support and encouragement of her family, who were always there to celebrate her successes.', '#87AE8A'),
(9, 3, 'fm3.png', 'One of the longest traditions in Lira’s family is the annual family reunion held in Nueva Ecija every Christmas. It’s a time when the entire family gathers to celebrate the holiday season. The tradition of exchanging gifts, sharing meals, and enjoying each other\'s company has been passed down for generations. Lira looks forward to these reunions, where memories are made, and bonds are strengthened. These celebrations remind her of the importance of family unity and the joy that comes from being surrounded by loved ones, especially during the holidays.', '#87AE8A'),
(10, 4, 'd1.png', 'Lira\'s journey into dance began when she was in grade school. She was always fond of participating in school dance presentations, and this helped her overcome her initial shyness. Joining these events opened up a new way for Lira to express herself, boosting her self-confidence and allowing her to grow both personally and artistically. As she continued to participate in dance, her skills improved, and her love for the dance deepened. Dancing became a way for Lira to connect with herself and others, and it remains a significant part of her life, continuing to help her express her creativity and build confidence.', '#81C1B5'),
(11, 4, 'd2.png', 'Another core memory that shaped Dance Island is Lira’s journey with dance during her high school years. At first, she was unsure if she could continue expressing her passion for dancing in the new environment. The challenges of adapting to high school life and fitting in made her doubt whether she could still pursue dancing. However, Lira pushed herself to overcome her fears and joined a dance competition when she was in 7th grade. To her surprise, their team won first place, marking a significant achievement. This experience not only reaffirmed her love for dance but also helped her realize that with determination, she could overcome any challenges.', '#81C1B5'),
(12, 4, 'd3.png', 'Lira wasn’t sure if it was a coincidence, but an unexpected opportunity came her way during her first year of college, reigniting her passion for dance. As part of a school assignment, she and her classmates were tasked with performing a dance, and despite the challenges that come with college life, Lira couldn’t let go of her love for dancing. She pushed herself to fully embrace the opportunity, even though balancing studies and her passion for dance was no easy feat. This experience reaffirmed her belief that dancing would always have a place in her life.', '#81C1B5');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Friendship Island', 'A bond that started small but grew over time', 'Friendship Island is a special place in Lira’s mind, dedicated to the bond she shares with her college friends. It began in the first year of college when Lira and her friends—Coleen, Loreen, Jenna, Chan, Jerome, and Kaye—decided to meet and talk on the last day of their first year. At that moment, Lira realized that this friendship would grow deeper and last throughout her college journey. Over time, their friendship has strengthened, becoming a reliable and supportive foundation for her life. ', '#8E3A92', 'friendship.png', 'Active'),
(2, 'Cat Island', 'A haven for love of cats', 'Cat Island is a special place in Lira’s mind, dedicated to her love for cats. It all began when she adopted a stray cat she found meowing for help on a pipe outside her home. The little cat needed care, and Lira couldn’t turn away. Since that day, her love and appreciation for these curious and independent animals grew. Cat Island celebrates the warmth, comfort, and joy that cats bring into her life, serving as a reminder of kindness and the special bond between humans and animals. ', '#7D8CB4', 'cat.png', 'Active'),
(3, 'Family Island', 'A tribute to strong family bonds', 'Family Island is one of the oldest and most deeply rooted parts of Lira’s mind. She has always been part of a good family with deep ties, support, and care. This island represents the unconditional love, guidance, and stability her family provides. It stands as a reminder of the values and strength she draws from her family, shaping her into the person she is today. It is a place of comfort and inspiration, reminding Lira of the importance of nurturing meaningful connections and giving back the love she has always received. ', '#9A4D54', 'family.png', 'Active'),
(4, 'Dance Island', 'A celebration of self-expression', 'Dance Island is a vibrant part of Lira’s mind, filled with energy, rhythm, and confidence. It began when she decided to step out of her comfort zone and join dance presentations at school. What started as a simple performance opportunity became a transformative experience. Dancing helped Lira express herself in ways she never thought possible, boosting her confidence and teaching her the value of teamwork and dedication. Over time, Dance Island grew into a place of joy and self-expression, reminding her of the power of movement and the confidence she gained through embracing the art of dance. ', '#81C0B5', 'dance.png', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
