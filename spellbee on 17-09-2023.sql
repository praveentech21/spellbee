-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 02:57 AM
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
-- Database: `spellbee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `team_name` varchar(10) NOT NULL,
  `category` varchar(20) DEFAULT 'general',
  `admin_name` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `stall_area` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`team_name`, `category`, `admin_name`, `mobile`, `stall_area`, `password`) VALUES
('Omega', 'stall', 'Veera Raghava', '8008567115', 'Girls Hostel Stall', 'hosgava#715'),
('Gaama', 'stall', 'Nikhal', '8639290852', 'EEE Opposite', 'gamakil@392'),
('Beta', 'stall', 'Manasa', '8639557638', 'Campus Online Stall', 'campstall!763'),
('alpha', 'stall', 'laxman', '8712131582', 'Technology Center', 'beeman$213'),
('spellbee', 'superadmin', 'Suresh M', '9052727402', 'SRKR CAMPUS', 'shibha%100'),
('accounts', 'stall', 'karthik', '9398954816', 'Lab', 'accthik&548'),
('delta', 'stall', 'Nikitha', '9855677345', 'S Block', 'delspell*345'),
('admin', 'superadmin', 'Suresh Mudunuri', '9866600002', 'Tech Centre', '8080'),
('srkr', 'view', 'general', 'Spellbee#csd', 'SRKR CAMPUS', 'spell#csd');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `regno` varchar(15) NOT NULL,
  `feedback` varchar(200) NOT NULL DEFAULT 'Very wonder full and exciting event.',
  `rating` int(5) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replay`
--

CREATE TABLE `replay` (
  `pid` varchar(15) NOT NULL,
  `replay` int(5) NOT NULL,
  `confby` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `sid` varchar(10) NOT NULL,
  `qid` int(11) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `marks` int(11) NOT NULL DEFAULT 0,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `pid` varchar(10) NOT NULL,
  `pin` varchar(4) DEFAULT '0000',
  `player_name` varchar(100) DEFAULT NULL,
  `place` varchar(200) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `points` int(5) DEFAULT NULL,
  `lastseen` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `regno` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(10) NOT NULL,
  `section` varchar(2) NOT NULL,
  `payment_status` int(3) NOT NULL DEFAULT 0,
  `pconfprby` varchar(15) DEFAULT NULL,
  `gameconfby` varchar(15) DEFAULT NULL,
  `admin` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `qid` int(11) NOT NULL,
  `word` varchar(1000) NOT NULL,
  `meaning` text DEFAULT NULL,
  `level` int(11) NOT NULL,
  `option1` varchar(100) DEFAULT NULL,
  `option2` varchar(100) DEFAULT NULL,
  `option3` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`qid`, `word`, `meaning`, `level`, `option1`, `option2`, `option3`) VALUES
(1, 'Principle', 'rule', 6, 'principal', 'prinecipal', 'princeple'),
(2, 'effect', 'a result or outcome', 6, 'affect', 'effact', 'affact'),
(3, 'compliment', 'a polite expression of praise', 7, 'complement', 'complliment', 'complimant'),
(4, 'desert', 'a dry or sandy area', 4, 'dessert', 'dessart', 'desart'),
(5, 'discreet', 'showing good judgement and careful consideration', 6, 'discrete', 'discreett', 'descreet'),
(6, 'meddle', 'interfere officiously and unwantedly', 5, 'metal', 'mettle', 'medal'),
(7, 'stationery', 'writing materials', 6, 'stationary', 'stationory', 'statioenery'),
(8, 'lie', 'be kept in a specified state', 2, 'lay', 'lye', 'lei'),
(9, 'capital', 'a city that serves as the seat of government', 2, 'capitol', 'capetal', 'capitel'),
(10, 'peace', 'a state of quiet', 3, 'piace', 'piece', 'peice'),
(11, 'cereal', 'breakfast made from grains', 4, 'serials', 'cerreal', 'cireal'),
(12, 'altar', 'a raised platform used for religious ceremonies', 8, 'alter', 'altre', 'alltar'),
(13, 'canvas', 'a heavy,woven fabric used for painting', 2, 'cannvas', 'canvass', 'caanvas'),
(14, 'conscience', 'a persons moral sense of right and wrong', 8, 'conscense', 'conscious', 'consciance'),
(15, 'persistence', 'the act of continuing firmly despite opposition', 6, 'persistance', 'persisstence', 'persestence'),
(16, 'separate', 'to set apart', 6, 'seperate', 'seperete', 'saperate'),
(17, 'occurred', 'happened', 5, 'occured', 'ocurred', 'ocured'),
(18, 'existence', 'the state of being', 4, 'existance', 'exsistence', 'exsistance'),
(19, 'perceive', 'to become aware of through the senses', 7, 'percieve', 'parceive', 'perceve'),
(20, 'bicycle', 'a human powered vehicle with two wheels and pedals', 3, 'bycycle', 'bicicle', 'bicykle'),
(21, 'chocolate', 'a sweet brown treat made from cacao beans', 2, 'choclate', 'chocolat', 'chokolate'),
(22, 'butterfly', 'an insect with colourful wings that undergoes metamorphosis', 1, 'butterflie', 'buterfly', 'buttarfly'),
(23, 'library', 'a place where books and other materials are stored for reading and borrowing', 3, 'librarie', 'librery', 'librare'),
(24, 'dinosaur', 'a prehistoric reptile', 5, 'dinasor', 'dinosor', 'dianosur'),
(25, 'telephone', 'a device used to communicate', 2, 'telefone', 'telephne', 'teliphone'),
(26, 'restaurant', 'a place where meals are prepared and served to customers', 6, 'restaurent', 'restarent', 'restarant'),
(27, 'calendar', 'a chart or system used to organise days,weeks,months', 5, 'calander', 'calender', 'calandar'),
(28, 'television', 'an electronic device that displays moving images and sounds', 2, 'televison', 'telivision', 'telivison'),
(29, 'sunshine', 'the light and heat that comes from the sun', 1, 'sunshyne', 'sunsine', 'sonshine'),
(30, 'rainbow', 'a colorful arc in the sky that appears after the rain', 1, 'renbow', 'rienbow', 'rainbou'),
(31, 'picnic', 'a meal eaten outdoors,often in a park or countryside', 2, 'picknick', 'picnick', 'picknic'),
(32, 'adventure', 'an exciting and often risky experience', 2, 'adventur', 'aventure', 'advanture'),
(33, 'birthday', 'the day on which a person was born,celebrated annually', 1, 'borthday', 'birtday', 'berthday'),
(34, 'Balloon', 'a flexible bag fillled with gas', 4, 'baloon', 'ballun', 'baloon'),
(35, 'telescope', 'an optical instrument used to view distant objects', 2, 'telescop', 'teleskope', 'teliscope'),
(36, 'sandbox', 'a container filled with sand for children to playin', 1, 'sandboks', 'sanndbox', 'sendbox'),
(37, 'pitch', 'the level or tune of sound', 1, 'patch', 'pittch', 'pitchh'),
(38, 'stayed', 'to have been somewhere for a short time', 1, 'stayeed', 'steyed', 'stayid'),
(39, 'doctor', 'a person that treats sick people', 1, 'docter', 'dokter', 'doctar'),
(40, 'gloves', 'handcovers to protect hands', 2, 'glovas', 'glavas', 'glowes'),
(41, 'ocean', 'a large area of water covering earth', 1, 'ocaen', 'occean', 'osean'),
(42, 'cheese', 'a food made from milk curd', 1, 'chesse', 'chease', 'chesee'),
(43, 'coarse', 'having a harsh or rough quality', 7, 'course', 'coaurse', 'cours'),
(44, 'passage', 'a alley or pathway', 2, 'passege', 'pessage', 'pasage'),
(45, 'compartment', 'a section of something large', 2, 'comparment', 'compertment', 'comppartment'),
(46, 'prospector', 'a person who searches for valuable substances such as gold or oil', 5, 'propector', 'perspector', 'prespector'),
(47, 'support', 'to give comfort', 1, 'saport', 'suport', 'sepport'),
(48, 'advance', 'to move forward in a purposeful way', 1, 'edvance', 'advace', 'andvance'),
(49, 'balance', 'an even distribution of weight', 1, 'balence', 'belence', 'baleance'),
(50, 'cancel', 'for a planned event to not take place', 1, 'cancal', 'cencal', 'cancell'),
(51, 'whether', 'showing a choice between alternatives', 4, 'weather', 'whetter', 'whether'),
(52, 'rhythm', 'a strong regular and repeated movement', 7, 'rythm', 'rhytm', 'rithm'),
(53, 'possibilty', 'a chance that something may or maynot happen', 3, 'posibility', 'possibiliity', 'possibiliti'),
(54, 'category', 'a group of people or things that are similar in someway', 4, 'catigory', 'cateegory', 'cattegory'),
(55, 'QUARRELLING', 'arguing angrily', 6, 'querrelling', 'querreling', 'quareling'),
(56, 'orchestra', 'a group of musicians who play many instruments together', 5, 'archestra', 'orchastra', 'orrchastra'),
(57, 'recruit', 'to find people to take part in an event or team', 3, 'reccruit', 'recriut', 'reecruit'),
(58, 'persuade', 'to cause someone to do something or believing something', 5, 'persuate', 'parsuade', 'peruade'),
(59, 'perimeter', 'the outside edge of an area', 1, 'perimetre', 'permeter', 'permetre'),
(60, 'cadet', 'a person training in the armed forces or police', 3, 'cadett', 'cedet', 'kadet'),
(61, 'luminous', 'bright or shining', 4, 'luminuos', 'luminos', 'lumenous'),
(62, 'ABUNDANT', 'HAVING PLENTY OF', 5, 'ABUNDENT', 'ABUNDUNT', 'ABUNNDANT'),
(63, 'ACCOMMODATE', 'FIT IN WITH THE WISHES OR NEEDS OF', 6, 'ACOMMMODATE', 'ACCOMADATE', 'ACCOMMODATTE'),
(64, 'ACQUAINTANCE', 'KNOWLEDGE OR EXPERIENCE OF SOMETHING', 8, 'ACQUAINTTANCE', 'ACQUAINTANCEE', 'ACQUAINTENCE'),
(65, 'BELIEVE', 'HOLD AS AN OPTION', 6, 'BELIVE', 'BELIEVE', 'BELIEVEE'),
(66, 'CAMOUFLAGE', 'THE DISGUISING OF MILITARY PERSONNEL', 7, 'CAMMOUFLAGE', 'CAMOFLAUGE', 'CAMOFLAGE'),
(67, 'ELEPHANT', 'LARGEST LIVING LAND ANIMAL', 1, 'ELEPANT', 'ELEFANT', 'ELEPHANTH'),
(68, 'NEPTUNE', 'PLANENT IN A SOLAR SYSTEM', 2, 'NEPTOON', 'NEPTUN', 'NUPTENE'),
(69, 'TURQUOISE', 'A GREENISH-BLUE COLOUR STONE', 10, 'TUTQUIOSE', 'TUREQUOISE', 'TURQUISE'),
(70, 'TYRANNOSAURUS', 'BIPEDAL CARNIVOROUS DINOSAUR', 10, 'TYRANOSARURUS', 'TYRRANOSARURAS', 'TYRANNOSOROUS'),
(71, 'ASTRONOMER', 'AN EXPERT IN OR STUDENT OF ASTRONOMY', 5, 'ASTRONOMAR', 'ASTRANOMER', 'ASTRONAMER'),
(72, 'SHAKESPEARE', 'A WRITER OF POEMS', 11, 'SHAKESPEAR', 'SHAKESPERE', 'SAKESPEARE'),
(73, 'CENTAUR', 'A CREATURE IN GREEK MYTHOLOGY', 11, 'SENTAUR', 'SENTUAR', 'CENTUAR'),
(74, 'MISSISSIPPI', 'STATE OF SOUTH-EASTERN UNITED-STATE', 9, 'MISISIPPI', 'MISSISIPI', 'MISSISSIIPPI'),
(75, 'PENICILLIN', 'A MEDICATION USED TO MANAGE AND TREAT A WIDE RANGE OF INFECTIONS', 8, 'PENICILIN', 'PENECILLIN', 'PENYCILLIN'),
(76, 'COLUMBUS', 'A NAVIGATOR WHO EXPLORED THE AMERICA', 3, 'COLOMUS', 'COLIMBUS', 'COLUMBUSS'),
(77, 'AFRICA', 'SECOND LARGEST CONTINENT IN WORLD', 1, 'AFREECA', 'AFFRICA', 'AFRIICA'),
(78, 'MAYA', 'ONE OF THE ANCIENT CIVILIZATION IN THE WORLD', 11, 'MAIA', 'MYA', 'MAYYA'),
(79, 'SHAKESPEAREAN', 'RELATING TO OR CHARACTERISTIC OF WILLIAM SHAKESPEARE', 11, 'SHAKESPEREAN', 'SHAKESPEARIAN', 'SHAKEESPEARAN'),
(80, 'KILIMANJARO', 'AFRICA\'S TALLEST MOUNTAIN', 11, 'KILIMANJAROO', 'KILIMUNJARO', 'KILIMANJERO'),
(81, 'ASTRONAUT', 'PERSON WHO TRAINED TO TRAVEL IN A SPACECRAFT', 6, 'ASTRONOUT', 'ASTRONAUGHT', 'ASTROONAUT'),
(82, 'MINOTAUR', 'A CREATURE WITH HALF MAN AND HALF BULL', 11, 'MINOOTAUR', 'MINOTAAR', 'MYNOTAUR'),
(83, 'NILE', 'WORLD\'S LONGEST RIVER', 4, 'NYLE', 'NIEL', 'NYEL'),
(84, 'CHROMIUM', 'THE CHEMICAL ELEMENT OF ATOMIC NO:24', 3, 'CHROMIM', 'CHRROMIUM', 'CRHROMIUM'),
(85, 'VAN GOGH', 'ONE OF THE MOST POPULAR OF THE POST IMPRESSIONIST PAINTER', 11, 'VANN GOGH', 'VANN GOFF', 'VAN GOH'),
(86, 'WASHINGTON', 'CAPTIAL CITY OF UNITED STATES', 3, 'WASHINGTOON', 'WASHINGNTAN', 'WASHINTON'),
(87, 'SPANISH', 'SECOND MOST WIDELY SPOKEN FIRST LANGUAGE IN WORLD', 2, 'SPPANISH', 'SPANNISH', 'SPENNISH'),
(88, 'NEBULA', 'IT IS AN GAINT CLOUD OF DUST AND GASNIN SPACE', 4, 'NEEBULA', 'NEBULLA', 'NUBULA'),
(89, 'COLOSSEUM', 'IT IS AN ELLIPTICAL AMPHITHEATRE IN THE CENTRE OF THE CITY ROME', 11, 'COLLOSEUM', 'COLOSEEUM', 'COLOSIUM'),
(90, 'SAHARA', 'A VERY LARGE DESERT IN NORTH AFRICA', 1, 'SAHARA', 'SAHRA', 'SAHARRA'),
(91, 'MOZART', 'ONE OF THE MOST INFLUENTIAL POPULAR AND PROLIFIC COMPOSERS OF THE CLASSICAL PERIOD', 8, 'MOZZART', 'MOZAART', 'MOZARD'),
(92, 'BELL', 'DEVICE THAT MAKES A RINING SOUND WHEN STRUCK', 1, 'BELIVE', 'BBELL', 'BELB'),
(93, 'ATHENA', 'IT IS THE GREEK GODDNESS OF WISDOM', 11, 'ATENA', 'ATHINA', 'ATHENNA'),
(94, 'ATLANTIC', 'THE SECOND LARGEST OCEAN IN THE WORLD', 3, 'ATLENTIC', 'ATLANTIK', 'ATLANTYC'),
(95, 'PARIS', 'THE CAPITAL AND LARGEST CITY OF FRANCE', 1, 'PARESS', 'PARYS', 'PARISS'),
(96, 'OBTUSE', 'GREATER THAN 90 DEGREE', 6, 'OBTUSEE', 'OBTUISE', 'OBHTUSE'),
(97, 'AXES', 'THE PLURAL FORM OF AXIS', 2, 'AXIS', 'AXISS', 'AXESS'),
(98, 'GRID', 'A NETWORK OF LINES THAT CROSS EACH OTHER TO FORM A SERIES OF SQUARES', 1, 'GRIDH', 'RID', 'RIDH'),
(99, 'ESTIMATE', 'AN APPROXIMATE CALCULATION', 3, 'ESTIMETE', 'ESTIMITE', 'ASTIMATE'),
(100, 'INTERSECTION', 'A POINT WHERE TWO LINES OR STREET CROSS', 2, 'INTERSECTIONN', 'INTERSECITION', 'INTERSECTIION'),
(101, 'HYPOCHONDRIA', 'ABNORMAL CHRONIC ANXIETY ABOUT ONE\'S HEALTH', 11, 'HPYOCOHNDRIA', 'HIGHPOCHONDRIA', 'HIPOCHONDRIA'),
(102, 'ASTROLOGER', 'TELL OTHERS ABOUT THEIR CHARACTER OR TO PERDICT THEIR FUTURE', 2, 'ASTRALOGER', 'ASTROOLOGAR', 'ASTROLAGER'),
(103, 'MISFORTUNE', 'BAD LUCK', 2, 'MISFOURTUNE', 'MISSORTUNE', 'MISSFORTUNEE'),
(104, 'AUTHENTIC', 'OF UNDISPUTED ORIGIN AND NOT A COPY', 3, 'AUTUNHENTIC', 'AUTENTIC', 'AUTHEENTIC'),
(105, 'CHARACTERISTIC', 'TYPICAL OF PARTICULAR PERSON,PLACE,OR THING', 4, 'CHARTERISTIC', 'CHARTERISTIC', 'CHARATERISTIC'),
(106, 'CRUCIAL', 'DECISIVE OR CRITICAL,ESPECIALLY IN THE SUCCESS OR FAILURE OF SOMENTING', 3, 'CRUSIAL', 'CRUCIAL', 'CRUCIEL'),
(107, 'MISCHIEVOUS', 'NOTORIOUS', 6, 'MISCHIEVIOUS', 'MISCHIEVOUS', 'MISCHIEVUES'),
(108, 'LEISURE', 'FREE TIME', 5, 'LESIRE', 'LEESURE', 'LEISIRE'),
(109, 'APPRECIATE', 'RECOGNIZE THE FULL WORTH OF', 4, 'APPERICITE', 'APPERECIATE', 'APPERCIATE'),
(110, 'CRITICISE', 'TO JUDGE(SOMETHING) WITH DISAPPROVAL', 3, 'CRTICISE', 'CRITISISE', 'CRITISIZE'),
(111, 'Engineering', 'The application of science to practical uses such as design of structures and machines', 1, 'engeneering', 'enjineering', 'enginering'),
(112, 'Afraid', 'scared', 1, 'afrayed', 'afreid', 'affraid'),
(113, 'Bought', 'obtain in exchange of payment', 1, 'boght', 'bougt', 'boughht'),
(114, 'PERSONAL', 'belonging to person rather anyone else', 2, 'personel', 'parsonal', 'persanal'),
(115, 'Department', 'a specialised division of a large concern,such as business university', 3, 'departement', 'departmant', 'dipartment'),
(116, 'Reciprocal', 'felt equally both sides', 4, 'receprocal', 'recieprocal', 'reciprocel'),
(117, 'dictionary', 'reference book', 4, 'dictionery', 'dectionary', 'dictonary'),
(118, 'spell bee', 'a competition in which people try to spell words', 1, 'spell bea', 'speel bee', 'spell bie'),
(119, 'vegetables', 'a part of plant used as food', 2, 'vegitables', 'vagetables', 'vegetebles'),
(120, 'fiction', 'imaginary', 1, 'ficton', 'phiction', 'fection'),
(121, 'bakery', 'selling baked goods', 1, 'backery', 'bakary', 'bekary'),
(122, 'sauce', 'relish for food', 2, 'souce', 'sause', 'souse'),
(123, 'teach', 'to cause to acquire knowledge or skill', 1, 'teech', 'tiech', 'taech'),
(124, 'river', 'natural flowing water course', 1, 'rever', 'rivar', 'revar'),
(125, 'story', 'narrative', 1, 'storie', 'stary', 'store'),
(126, 'mammal', 'an animal feeds her young from her own body', 1, 'mamal', 'mammel', 'mamel'),
(127, 'fact', 'truth', 1, 'fat', 'factt', 'faact'),
(128, 'guard', 'watch over inorder to protect', 1, 'gard', 'gord', 'guaard'),
(129, 'stethoscope', 'a piece of equipment that a doctor uses', 4, 'setescope', 'sethescope', 'stethscope'),
(130, 'sustain', 'to keep somebody/something alive or healthy', 2, 'sustane', 'sustaine', 'sustayne'),
(131, 'center', 'the middle point or part of something', 1, 'centre', 'senter', 'centaur'),
(132, 'February', 'The second month of the year', 2, 'febrary', 'feburary', 'feburury'),
(133, 'yacht', 'a boat with sails used for pleasure', 4, 'yatch', 'yachth', 'yaatch'),
(134, 'indonesia', 'country in asia', 2, 'asia', 'indonasia', 'indenoasia'),
(135, 'Thiruvanathapuram', 'captial of kerala', 2, 'Thiruvunthapuarm', 'Thirunantapurm', 'Thrivunanthpuram'),
(136, 'Statistics', 'a branch pf applied physics', 2, 'statistiks', 'statustics', 'statistiics'),
(137, 'Ferrari', 'An italian luxury sports car', 3, 'farrari', 'fererri', 'fererre'),
(138, 'Aadhaar', 'an Identity for an Indian', 2, 'adhaar', 'adhar', 'aadhar'),
(139, 'knight', 'The supreme Warrior', 2, 'night', 'nighyt', 'knnight'),
(140, 'penguin', 'Flightless Brids', 3, 'pengugen', 'penguign', 'penguen'),
(141, 'departure', 'A act of leaving somwhere', 1, 'departere', 'deparchure', 'deperture'),
(142, 'encyclopedia', 'A book that gives information about many things', 3, 'Ancyclopedea', 'Ancyclopedia', 'enncyclopedia'),
(143, 'corpses', 'dead body', 4, 'corpus', 'corpurse', 'corps'),
(144, 'orchestra', 'A large group of musicians who play many different instruments', 4, 'orkestra', 'orchastra', 'orcheestra'),
(145, 'thermometer', 'A device used to measure human body temperature', 2, 'Thermometre', 'thermomtor', 'thermameter'),
(146, 'recruit', 'To find new people to take part in an event or join a group or team', 3, 'recurit', 'recurte', 'recroot'),
(147, 'quarrel', 'an angry argument', 4, 'quarril', 'quarral', 'qaurral'),
(148, 'mussels', 'a type of small sea animal', 5, 'muscels', 'musels', 'musceles'),
(149, 'Foreign', 'loacated outside a place or country', 4, 'Foreing', 'Foriegn', 'Forieng'),
(150, 'Antiseptic', 'a liquid or cream that prevents a cut', 3, 'Anteseptic', 'Antesiptic', 'Antisiptic'),
(151, 'Poster', 'a notice in a public place', 1, 'postter', 'Posster', 'Posterr'),
(152, 'Knife', 'Used for cutting things', 2, 'Knif', 'Knfe', 'Nife'),
(153, 'Ragging', 'Harrashments of new entrants', 2, 'Raging', 'Ragiing', 'Raging'),
(154, 'Campus', 'Area of building of college', 1, 'Canpus', 'Kampus', 'Campuss'),
(155, 'empty', 'having nothing', 2, 'mmpty', 'empity', 'empte'),
(156, 'Prestigious', 'Having highly reputation', 4, 'Pristgious', 'Prestigeous', 'Prestigus'),
(157, 'HINDU', 'relating to or supporting to a religion', 2, 'HINDHU', 'INDU', 'HIENDU'),
(158, 'Technology', 'Sceintific knowledge', 4, 'technilogy', 'technelogy', 'techniology'),
(159, 'Virus', 'Causes diseases in animals and plants', 2, 'yrus', 'vyrus', 'vyris'),
(160, 'cinema', 'technology making motion pictures', 3, 'cinima', 'cenima', 'ciniema'),
(161, 'precipitate', 'a solid formed by change in solution', 5, 'precepitate', 'pricipitate', 'presipatate'),
(162, 'Argue', 'to say something angrily', 4, 'arguae', 'argaue', 'arge'),
(163, 'implement', 'start using a plan or a system', 3, 'emplemnt', 'impliment', 'empliment'),
(164, 'tsunami', 'a natural disaster', 5, 'sunami', 'tsunaami', 'sunima'),
(165, 'castle', 'a set of buildings to defend invasion', 4, 'casttle', 'casle', 'castlle'),
(166, 'wrap', 'to put paper around something', 3, 'rap', 'wraap', 'raap'),
(167, 'wrong', 'not correct', 1, 'rong', 'wronag', 'wring'),
(168, 'psychology', 'study of mind', 6, 'sycology', 'pshycology', 'sycilogy'),
(169, 'delivery', 'to take goods to peoples homes', 4, 'delhivery', 'delevary', 'delevary'),
(170, 'grammar', 'the rules of language', 4, 'grammer', 'gramar', 'gramer'),
(171, 'magazine', 'a periodical book containing articles and pictures', 5, 'maxine', 'magzine', 'maggzne'),
(172, 'chamber', 'a closed space in the body', 3, 'charmber', 'champber', 'khamber'),
(173, 'sweat', 'the liquid produced by body during hot', 2, 'swet', 'sweet', 'swaet'),
(174, 'alternative', 'one or more possibilities', 3, 'alternetive', 'altarnative', 'altarnateve'),
(175, 'possibility', 'thing that may happen', 4, 'posibility', 'possibilite', 'posssibility'),
(176, 'excite', 'give rise to feeling or reaction', 3, 'xcite', 'exsite', 'excyte'),
(177, 'spelling', 'the process of writing', 3, 'speling', 'spillling', 'spelleng'),
(178, 'english', 'language', 1, 'englesh', 'englihs', 'enjlish'),
(179, 'language', 'method of human communication', 2, 'lenguage', 'langauge', 'languege'),
(180, 'communication', 'exchanging of information by speaking', 3, 'comunicatin', 'coommnicaution', 'communiction'),
(181, 'probability', 'event which is lickly to occur', 4, 'probablite', 'propabaility', 'probabilite'),
(182, 'professor', 'the holder of university chair', 6, 'profesor', 'proffsor', 'profassor'),
(183, 'university', 'high level edudcational institute', 3, 'uneversity', 'univecity', 'univercity'),
(184, 'education', 'receiving or giving instructions', 2, 'edecation', 'educaution', 'eduction'),
(185, 'instruction', 'a order', 3, 'instructaion', 'instrukation', 'instrusition'),
(186, 'direction', 'a coures along which someone moves', 2, 'direcation', 'direcsion', 'direkation'),
(187, 'course', 'complete series of lessons', 2, 'coursee', 'coarse', 'corse'),
(188, 'holder', 'a device for holding something', 1, 'holdar', 'holdur', 'holdr'),
(189, 'device', 'a tool made for a particular purpose', 2, 'devise', 'devace', 'divice'),
(190, 'method', 'procedure for approaching something', 1, 'mathad', 'methad', 'methode'),
(191, 'procedure', 'an official way of doing something', 3, 'prosedure', 'procetduru', 'proseger'),
(192, 'office', 'a place for commercial work', 1, 'ofice', 'offece', 'offiece'),
(193, 'commercial', 'making or intended to make a profit', 3, 'comercian', 'commerecial', 'commerician'),
(194, 'profession', 'a paid occupation', 5, 'priofesion', 'profection', 'profassion'),
(195, 'profit', 'financial gain or benifit', 1, 'profeit', 'proffit', 'profite'),
(196, 'occupation', 'a job', 6, 'ocupation', 'occupaction', 'occupasion'),
(197, 'passenger', 'traveller', 3, 'pasenger', 'passengre', 'passengar'),
(198, 'information', 'facts provided to learn about something', 2, 'informasion', 'infurmation', 'informetion'),
(199, 'offer', 'accept or reject as desired', 1, 'oferr', 'offerr', 'ofer'),
(200, 'investigation', 'formal enquiry', 4, 'investagation', 'invastigation', 'investigasion'),
(201, 'examination', 'a detailed inspection of study', 3, 'examnasion', 'examnation', 'examinateion'),
(202, 'exemption', 'a state of being free', 6, 'excumption', 'execemption', 'exempsion'),
(203, 'inspection', 'carefull examination of scrutny', 4, 'inception', 'inspecsion', 'inspecton'),
(204, 'fossil', 'impression of historical animal or plants', 5, 'fosil', 'fossel', 'fossle'),
(205, 'ancient', 'belonging to distant past', 5, 'ansient', 'anscient', 'anciant'),
(206, 'weather', 'climate at certain place and time', 5, 'wether', 'wheather', 'whether'),
(207, 'absence', 'The lack or unavailability of something or someone', 6, 'absense', 'abcance', 'absance'),
(208, 'queue', 'A line or sequence of people or vehicles', 4, 'Q', 'quque', 'queuee'),
(209, 'cease', 'to eventually stop existing.', 6, 'cheese', 'keys', 'ceeze'),
(210, 'sequence', 'a particular order in which related things follow eachother', 3, 'sequense', 'seqeense', 'cequence'),
(211, 'cheque', 'a document you can issue to your bank', 6, 'chek', 'chequ', 'check'),
(212, 'feat', 'an activity that requires great strength,skill and courage', 3, 'faet', 'fett', 'feet'),
(213, 'rhyme', 'correspondence of sound between words', 4, 'rime', 'rhime', 'ryme'),
(214, 'online', 'by means of the internet or other computer network', 1, 'onlane', 'onlyne', 'onliine'),
(215, 'library', 'a collection of books and periodicals held in a library', 2, 'libreri', 'lybrery', 'liebrary'),
(216, 'industry', 'economic activity concerned with the processing of raw materials and manufacturing of goods', 3, 'industree', 'indestry', 'endustry'),
(217, 'server', 'computer program which manages access to a centralised resource or service in a network', 2, 'servar', 'sirver', 'sarver'),
(218, 'contest', 'an event in which people compete for supremacy in a sport or other activity', 1, 'kontest', 'corntest', 'context'),
(219, 'practical', 'lesson in which theories and procedures learned are applied to the actual making', 3, 'pratical', 'prectikal', 'praktical'),
(220, 'font', 'a set of printable or displayable typography', 1, 'foont', 'fant', 'front'),
(221, 'crop', 'to remove or adjust the outside edges of an image', 1, 'croop', 'crope', 'krop'),
(222, 'unique', 'being the only existing one of its kind', 3, 'unikque', 'uniq', 'unike'),
(223, 'innovation', 'implementing a new idea', 3, 'inovasion', 'inovation', 'ennovation'),
(224, 'pixel', 'unit of a digital image or graphic that can be displayed', 4, 'picsel', 'pixsel', 'pixcel'),
(225, 'dogma', 'the doctrine of belief in a religion', 6, 'dokma', 'dogmaa', 'docma'),
(226, 'miser', 'a person who hoards wealth and spends as little money as possible', 6, 'misser', 'mysar', 'myser'),
(227, 'series', 'a set or sequence of related television or radio programme', 2, 'siries', 'seeries', 'serees'),
(228, 'review', 'to view or see again', 3, 'reeview', 'rewiew', 'revivew'),
(229, 'beautiful', 'having qualities of beauty', 4, 'beautyful', 'beautifull', 'bootiful'),
(230, 'elegant', 'graceful and stylish in appearance', 4, 'alegant', 'elegent', 'eleghant'),
(231, 'delightful', 'very pleasant ,attractive and enjoyable', 4, 'dilightful', 'diliteful', 'deliteful'),
(232, 'alluring', 'powerful and mysterious', 6, 'elluring', 'aaluring', 'aluring'),
(233, 'promoter', 'a supporter of a cause or aim', 3, 'pramoter', 'promater', 'promotar'),
(234, 'merge', 'cause to combine to form a single entity', 2, 'meerge', 'marege', 'merje'),
(235, 'wrap', 'cover or enclose in paper', 2, 'raap', 'wrape', 'rap'),
(236, 'layout', 'the way in which text or pictures', 1, 'layut', 'layote', 'laout'),
(237, 'reign', 'the period of rule of a monarch', 7, 'raign', 'rein', 'rain'),
(238, 'semester', 'a half year term in a school or university', 4, 'semister', 'simister', 'cemister'),
(239, 'allopathy', 'the treatment of disease by drugs', 4, 'ellopathy', 'allopathi', 'aelopathy'),
(240, 'squad', 'a small group of people having a particular task', 3, 'scuad', 'squaad', 'sqaud'),
(241, 'petition', 'a formal written request appealing to authority in request of the particular cause', 5, 'petion', 'petision', 'pitition'),
(242, 'despite', 'without being prevented by something', 4, 'desite', 'despiti', 'dispite'),
(243, 'formula', 'mathematical relation or rule expressed in symbols', 2, 'formulae', 'formala', 'farmula'),
(244, 'vindictive', 'having or showing a strong or unreasoning desire for revenge', 5, 'vendictive', 'vinductive', 'windictive'),
(245, 'prevail', 'prove more powerful or superior', 5, 'prewall', 'prewale', 'prewail'),
(246, 'abbreviation', 'a shortened form of word or phrase', 6, 'abreviation', 'abbreviasion', 'abbrevation'),
(247, 'Consanguineous', 'Of the same blood or origin (descended from the same ancestor)', 10, 'consenguineous', 'consangiuneous', 'consengiuneous'),
(248, 'Inchoate', 'Only partly in existence; imperfectly formed', 10, 'inchoat', 'enchoate', 'inchaote'),
(249, 'overcame', 'succeed in dealing with a problem or dificulty', 4, 'ovarcame', 'ovarcome', 'overkome'),
(250, 'fuel', 'material that is burned to produce heat or power', 3, 'phuel', 'fual', 'fueal'),
(251, 'bankrupt ', 'not having enough money to pay your debs', 4, 'bankcrupt', 'bancrupt', 'bankarupt'),
(252, 'neurology', 'a plant of the buttercup family which typically has brightly coloured flowers', 5, 'newrology', 'newrologie', 'neurologey'),
(253, 'satellite', 'something visible in restricted light against a brighter background.', 5, 'satalight', 'satellight', 'sattilite'),
(254, 'yolk', 'of long ago or former times (used in nostalgic or mock-nostalgic recollection)', 3, 'yook', 'yoak', 'youk'),
(255, 'chrysanthemum.', 'a widely cultivated plant with brightly-colored showy flower heads. ...', 9, 'chrysanthanum', 'chrysenthanam', 'chrysenthemum'),
(256, 'caffeine', 'the physical or social setting in which something occurs or develops : environment.', 5, 'caffiine', 'kafeen', 'caffene'),
(257, 'cafeteria', 'a restaurant in which customers serve themselves', 5, 'cafatirea', 'cafiteria', 'cafeteira'),
(258, 'realize', 'understand clearly.', 4, 'rialise', 'realeze', 'realise'),
(259, 'tolet', 'permission', 3, 'toolet', 'tolat', 'tolit'),
(260, 'absent', 'not present in a place', 2, 'absint', 'abcint', 'abcent'),
(261, 'bunk', 'one of two beds attached together', 1, 'berth', 'bunck', 'buck'),
(262, 'silence', 'complete absence of sound', 3, 'silince', 'silience', 'selince'),
(263, 'prohibit', 'to stop something from being done', 4, 'prohebit', 'porhibit', 'prohbit'),
(264, 'Approval', 'Having a positive opinion of something', 3, 'approvel', 'aporval', 'aproval'),
(265, 'opposite', 'radically different in some respect', 4, 'opposite', 'oppozite', 'oposite'),
(266, 'attention', 'Noticing or recognizing something of interest.', 4, 'attension', 'atension', 'atention'),
(267, 'pleasure', 'a feeling of happy satisfaction', 5, 'preasure', 'plesure', 'peassure'),
(268, 'amount', 'A mass or a collection of something', 2, 'amout', 'amountt', 'amont'),
(269, 'borrow', 'To take something with the intention of returning it after a period of time', 4, 'borrou', 'borro', 'borow'),
(270, 'complete', 'finish making or doing', 2, 'compllete', 'completee', 'compelete'),
(271, 'fantasy', 'activity of imagining impossible', 3, 'fanstase', 'fanastic', 'fantesy'),
(272, 'dialogue', 'A conversation between two or more people.', 4, 'dialouge', 'dialonge', 'dilouge'),
(273, 'maximum', 'as great', 2, 'maximom', 'minimum', 'mazimum'),
(274, 'coding', 'tells a machine which actions to perform and how to complete tasks.', 1, 'codeng', 'codng', 'codeing'),
(275, 'quality', 'the degree of excellence of something.', 2, 'qualty', 'qulity', 'qwality'),
(276, 'introduce', 'bringing a person into a group', 3, 'interoduce', 'introdce', 'interduce'),
(277, 'care', 'extra responsibility and attention.', 1, 'caer', 'careh', 'kare'),
(278, 'ban', 'An act prohibited by social pressure or law.', 1, 'baan', 'bann', 'bin'),
(279, 'edible', 'something suitable to be eaten', 3, 'edibe', 'adibe', 'adible'),
(280, 'eloquent', 'an individual who expresses themselves effectively and clearly.', 6, 'eloquant', 'eloqunt', 'aloquent'),
(281, 'cake', 'an item of savoury food formed into a flat round shape', 1, 'cakee', 'caek', 'kake'),
(282, 'fitness', 'the condition of being physically fit and healthy.', 2, 'fitnes', 'featness', 'fittness'),
(283, 'award', 'order the giving of (something) as an official payment', 2, 'awad', 'awarad', 'avard'),
(284, 'scholarship', 'academic study or achievement', 2, 'schloarship', 'scholraship', 'scolarship'),
(285, 'wifi', 'a facility allowing computers', 1, 'vifi', 'wifee', 'wify'),
(286, 'college', 'an educational institution', 2, 'colege', 'colage', 'collage'),
(287, 'Abrogate', 'To revoke', 9, 'aborgate', 'ebrogate', 'abogate'),
(288, 'yoghurt', 'A dairy product', 3, 'yogurt', 'yoguhrt', 'yoogurht'),
(289, 'Asperity', 'Harsh in tone', 9, 'asperty', 'aspert', 'aspeity'),
(290, 'warrior', 'a brave or experienced soldier or fighter.', 5, 'warior', 'varrier', 'varrior'),
(291, 'expert', 'a person who is very knowledgeable about or skilful in a particular area.', 3, 'expart', 'expect', 'xpart'),
(292, 'listen', 'give one\'s attention to a sound', 2, 'lizen', 'lesten', 'lisen'),
(293, 'capital', 'anything that confers value or benefit to its', 2, 'captial', 'kapital', 'capatal'),
(294, 'Initial', 'existing or occuring at the beginning', 3, 'initiel', 'ential', 'inetial'),
(295, 'Former', 'Having previously been a pativular thing', 4, 'fomer', 'farmer', 'faumer'),
(296, 'Examine', 'Test the knowledge or proficiency', 3, 'Examin', 'Eximine', 'Exaamine'),
(297, 'wander', 'move slowly away from a fixed point or a place', 4, 'vander', 'wunder', 'wounder'),
(298, 'creative', 'a person who\'s job involves special work', 1, 'creatve', 'criative', 'kreative'),
(299, 'spectacular', 'Bueatiful in a gramatic and eye-catching way', 3, 'Spectaacular', 'spectaculer', 'spectaculur'),
(300, 'marvelous', 'causing greate wonder', 2, 'marvelus', 'marvelas', 'marvilous'),
(303, 'FEWER', 'a small number of.', 4, 'fewar', 'feuver', 'fewver'),
(302, 'BORROW', 'something belonging to someone else', 3, 'BORROOW', 'BOWROW', 'BOOROW'),
(301, 'ILLUSION', 'Observing false objects', 3, 'ILLUSON', 'ILLUGION', 'ILUSION'),
(304, 'LIE', 'Worng Statement', 2, 'LYE', 'LIEE', 'LYIE'),
(305, 'RISE', 'an upward movement', 3, 'RIYZE', 'RAISE', 'RIZE'),
(306, 'PERCENTILE', 'a measure used in statistics indicating', 4, 'PERECEENTILE', 'PERECENTILE', 'PERSENTILE'),
(307, 'ABDICATE', 'giving up power', 5, 'ABIDICATE', 'ABEDICATE', 'ABIDECATE'),
(308, 'ABSTRUSE', 'difficult to understand', 6, 'ABTRECE', 'ABSTRESE', 'ABSTRUCE'),
(309, 'ANALOGOUS', 'similar in some respects', 6, 'ANALOGOUES', 'ANALOGOES', 'ANALOGUS'),
(310, 'ARTICULATION', 'manner in which things came together', 8, 'ARTECULATION', 'ARTIICULATION', 'ARTCULETION'),
(311, 'COHERENCE', 'state of being consistent', 6, 'CHOHARENCE', 'COHARENCE', 'CHOHARENCE'),
(312, 'ETHNIC', 'distinctive of the way of living of a group of people', 5, 'ETENIC', 'ETHENIC', 'ETHNEC'),
(313, 'EVIDENT', 'clearly revealed to the mind of the senses', 6, 'EVEDENT', 'EVEEDENT', 'EVIIDENT'),
(314, 'PSYCHOLOGY', 'scientific study of human mind', 7, 'PYSCHOLOGY', 'PSSYCHOLOGY', 'PSYSCHOLOGY'),
(315, 'FACILITATE', 'make easier', 8, 'FACELITETE', 'FACILATE', 'FACILITIE'),
(316, 'HEREDITARY', 'bases on inheritance', 7, 'HERIDITARY', 'HERIDETARY', 'HEREDETIARY'),
(317, 'ORDINARY', 'with no special', 5, 'ODINARY', 'ODDINARY', 'ORDENARY'),
(318, 'NOTORIOUS', 'known widely', 6, 'NOTURIOUS', 'NOTORIEOUS', 'NOTURIEOUS'),
(319, 'PARADIGM', 'a standard or typical example', 8, 'PARADIGIM', 'PARADEGM', 'PARAGIDEM'),
(320, 'PERCEIVE', 'become aware of through the senses', 6, 'PERCEVE', 'PERECEVE', 'PERCIEVE'),
(321, 'PERCEPTION', 'the process of becoming aware through the senses', 7, 'PERCEIPTION', 'PERCEPTION', 'PERCIPTION'),
(322, 'PROMULGATE', 'state or announce', 8, 'PORMOLGATE', 'PROMOLGYTE', 'PORMULGYTE'),
(323, 'RECRIMINATION', 'mutual accusations', 5, 'RECREMINATION', 'RECREMINATION', 'RECRIMENATION'),
(324, 'RELIANT', 'depending on another for support', 7, 'RELEANT', 'RELIENT', 'RELENT'),
(325, 'STAGNANT', 'not growing or changing', 8, 'STAGNENT', 'STAGNAANT', 'STAGNET'),
(326, 'VULNERABLE', 'capable of being wounded or hurt', 7, 'VULNARABLE', 'VULNEREBLE', 'VULNAREBLE'),
(327, 'QUAIL', 'a small brown bird', 9, 'QUEL', 'QUIL', 'QUEIL'),
(328, 'QUIP', 'a funny and clever comment', 5, 'QUEP', 'QUEEP', 'QUAP'),
(329, 'WEIGH', 'to find out how heavy', 5, 'WHEY', 'WAY', 'WEYY'),
(330, 'MIRACLE', 'an extraordinary event taken as a sign of the supernatural power of God', 4, 'MIRAKLE', 'MERAKLE', 'MERACLE'),
(331, 'PIECES', 'a part of something', 5, 'PEACES', 'PECES', 'PEICES'),
(332, 'UNCONSCIOUS', 'without awareness', 6, 'UNCONCIOUS', 'UNCONCICOUS', 'UNCONSICOUS'),
(333, 'PRECOCIOUS', 'usually mature', 5, 'PRESOSIOUS', 'PRECOSIUS', 'PRECOCIOES'),
(334, 'LIAISON', 'person who maintains a connection between people', 9, 'LASON', 'LEISON', 'LAISION'),
(335, 'ACRYLIC', 'is a kind of fabric', 9, 'ARCLIC', 'ARCILIC', 'ARCELIC'),
(336, 'RATCHET', 'is a tool', 10, 'RATCHAT', 'RETCHET', 'RETCHET'),
(337, 'MERRILY', 'in a cheerrful way', 10, 'MERRELY', 'MERELY', 'MERILY'),
(338, 'PEAL', 'a loud ringing of a bell or bells.', 5, 'PEARL', 'PEEL', 'PAEL'),
(339, 'PEARL', 'a stone', 6, 'PERL', 'PAERL', 'PEERL'),
(340, 'RECISION', 'Cancellation of a contract', 6, 'RECESION', 'RECISEON', 'RECISEON'),
(341, 'CHARCOAL', 'a porous black solid, consisting of an amorphous form of carbon', 3, 'CHARCOL', 'CHAARCOAL', 'CHARCOEL'),
(342, 'SOME', 'fewObjects', 2, 'SUM', 'SUN', 'SEM'),
(343, 'RESEMBLE', 'a similar appearance to or qualities in common with someone or something', 3, 'RESEMBEL', 'RECEMBEL', 'RECEMBLE'),
(344, 'COLLEAGUE', 'an associate or coworker typically in a profession', 5, 'COLLEAUGE', 'COLLEGUE', 'COLLAEGUE'),
(345, 'MOUSTACHE', 'strip of hair left to grow above the upper lip.', 6, 'MUSTACH', 'MOSTACHE', 'MUSTACHE'),
(346, 'REINDEER', 'a type of deer', 7, 'RAINDEER', 'RENDEER', 'REINDER'),
(347, 'WITCH', 'a person thought to have magic powers,', 7, 'WETCH', 'VITCH', 'WETCH'),
(348, 'PHENOMENON', 'a remarkable person or thing.', 5, 'PENOMENON', 'PHENOMINON', 'PEHNOMENON'),
(349, 'LIEUTENENT', 'a deputy or substitute acting for a superior.', 7, 'LEFTUTENENT', 'LEFTTENENT', 'LIETUTENT'),
(350, 'DELICACY', 'fineness or intricacy of texture or structure.', 5, 'DELICECY', 'DELECACY', 'DELICECY'),
(351, 'EPITAPH', 'a phrase or form of words written in memory of a person who has died, especially as an inscription on a tombstone.', 8, 'EPITEH', 'EPITPH', 'EPITPAH'),
(352, 'ACCUMULATION', 'he acquisition or gradual gathering of something.', 5, 'ACUMALATION', 'ACCUMMULATION', 'ACUMMULATION'),
(353, 'FRANCHISE', 'the right to vote in public elections.', 5, 'FRANCISE', 'FRANCHAISE', 'FRANCHASE'),
(354, 'SYNCHRONIZE', 'cause to occur or operate at the same time or rate.', 5, 'SYNCRONIZE', 'SYNCRONISE', 'SYNCHORISE'),
(355, 'KALOPSIA', 'The delusion of things being more beautiful than they are.', 9, 'CALOPSIA', 'CALOPSEA', 'KALOPSEA'),
(356, 'LEVERAGE', 'he exertion of force by means of a lever.', 6, 'LEVARAGE', 'LEVAREGE', 'LEVARAGH'),
(357, 'MACROCOSM', 'the great world or universe', 9, 'MACROSM', 'MACROCOSOM', 'MACROCSM'),
(358, 'MANIFESTATION', 'an event, action, or object that clearly shows or embodies something abstract or theoretical.', 7, 'MANIFESTION', 'MANEFESTATION', 'MANAFEATATION'),
(359, 'NEOPHYTE', 'someone who\'s brand new at something', 9, 'NEOFHYTE', 'NEOPYTHE', 'NEOFYTHE'),
(360, 'OMNISCIENT', 'knowing everything.', 9, 'OMINECENT', 'OMENECENT', 'OMNISENT'),
(361, 'PINNACLE', 'the most successful point;', 6, 'PINNACALE', 'PINACLE', 'PINECLE'),
(362, 'PSEUDOPODIA', 'temporary projections of the cytoplasm of a cell.', 7, 'PSUDOPODIA', 'PSEUDPODIA', 'PSEUDOPODEA'),
(363, 'QUARANTINE', 'a term during which a ship arriving in port and suspected of carrying contagious disease', 5, 'QUARTINE', 'QUARTIME', 'QUARATINE'),
(364, 'SARCASM', 'the use of irony to mock or convey contempt.', 8, 'SARCISM', 'SARCESM', 'SARCAISM'),
(365, 'UBIQUITOUS', 'present, appearing, or found everywhere.', 9, 'UBIQUITUS', 'UBIQICTUS', 'UBIQUITUS'),
(366, 'VIGOROUS', 'a way that is very forceful or energetic', 5, 'VEGAROUS', 'VIGAROUES', 'VEGARUS'),
(367, 'CAJOLE', 'persuade (someone) to do something by sustained coaxing or flattery.', 7, 'KAJOLE', 'CAJOULE', 'KAJOULE'),
(368, 'REMUNERATION', 'something that remunerates : recompense, pay.', 4, 'REMUNARATION', 'REMUNARTION', 'REMUNRATION'),
(369, 'PHILOSOPHY', 'the study of the fundamental nature of knowledge, reality, and existence, especially when considered as an academic discipline.', 5, 'PHILOSPHY', 'PHILOSOPHE', 'PILOPSPHY'),
(370, 'FORBEARANCE', 'patient self-control; restraint and tolerance.', 8, 'FOREBARANSE', 'FOEARBARANCE', 'FOREBEARENCE'),
(371, 'ANESTHESIA', 'insensitivity to pain, especially as artificially induced by the administration of gases or the injection of drugs before surgical operations.', 4, 'ENASTHESIA', 'ENESTHESIA', 'ANASTHESIA'),
(372, 'CUISINE', 'a style or method of cooking', 7, 'CUSHINE', 'KUSINE', 'CUSINE'),
(373, 'MACINTOSH', 'the family of computers developed by Apple', 6, 'MACINTOSE', 'MACINTHOSE', 'MACENTOSH'),
(374, 'ABNEGATION', 'the action of renouncing or rejecting something.', 9, 'ABNEGAUTION', 'ABNEGATEN', 'ABNEGATEON'),
(375, 'AESTHETIC', 'relating to the enjoyment or study of beauty, or showing great beauty:', 6, 'AESTHATIC', 'ASTHETIC', 'ASTHATIC'),
(376, 'INDICT', 'accuse formally of a crime', 6, 'INDIKT', 'EINDIKT', 'INDICKT'),
(377, 'INTRANSIGENCE', 'stubborn refusal to compromise', 9, 'INTRANCIGENSE', 'INTRANSIGINCE', 'INTRASIEGENSE'),
(378, 'MAYHEM', 'violent and needless disturbance', 9, 'MAHYME', 'MAYEHME', 'MEHYME'),
(379, 'WROUGHT', 'shaped to fit by altering the contours of a pliable mass', 7, 'WRAGHT', 'WRAUHT', 'WROGHT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`mobile`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`regno`,`feedback`);

--
-- Indexes for table `replay`
--
ALTER TABLE `replay`
  ADD PRIMARY KEY (`pid`,`replay`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`sid`,`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3437;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
