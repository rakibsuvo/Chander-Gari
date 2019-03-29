-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 11:06 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourist`
--

-- --------------------------------------------------------

--
-- Table structure for table `bandarban`
--

CREATE TABLE `bandarban` (
  `id` int(11) NOT NULL,
  `info` text NOT NULL,
  `nafakhum` text NOT NULL,
  `bogalake` text NOT NULL,
  `nilgiri` text NOT NULL,
  `nilachol` text NOT NULL,
  `golden temple` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bandarban`
--

INSERT INTO `bandarban` (`id`, `info`, `nafakhum`, `bogalake`, `nilgiri`, `nilachol`, `golden temple`) VALUES
(1, 'Bandarban is in Chittagong division and located in southeastern Bangladesh. It is one the most attractive travel destination in Bangladesh for its adventurous characteristics and heavenly scenic beauty. This eventually gets really hard to leave if anyone visits Bandarban. The scenic beauty will undoubtedly captivate your soul. Bandarban includes the three highest peak of Bangladesh â€” Tahjindong (or Bijoy), Mowdok Mual (or Saka Haphong) and Keokradong. Anyone can easily hike through the jungle and hilly rivers to win any of these three godâ€™s creations. There are so many waterfalls hidden through the hills of Bandarban would appear in your hiking. The exotic offerings such as foods, tribal handicrafts etc from the tribal people will delight your heart. Meanwhile you can easily experience the tribal culture very closely.', 'Nafakhum is one of the most beautiful waterfalls in Bangladesh. Nafakhum is situated on the wild hilly Sangu River at a remote area called Remakri of Thanchi upazilla under Bandarban Hill District in Bangladesh. Nafakhum is also known as Remakri waterfall.Every traveler should have a tour plan to visit this beautiful tourism spot of Bandarban at least once and then they will feel to visit that travel spot again and again.', 'Boga Lake is the most beautiful natural lake in Bangladesh. It is also known as Bagakain Lake or Baga Lake. Boga lake is 18 kilometer away from Ruma Sadar Upozilla in Bandarban. The area of this lake is about 15 acres. It is about 3000 feet above sea level. The color of water of this lake is blue and very nice. There are many mythological stories behind the creation of this lake. There are many tourists make their way to Boga lake every year, specially in the winter season. Small tribe community like Bawm, Khumi have localities besides the Boga lake.', 'Nilgiri or Nil Giri is one of the tallest peaks and beautiful tourist spot in Bangladesh. It is about 3500 feet high and situated at Thanci Thana. It is about 46 km south of Bandarban on the Bandarban-Chimbuk-Thanchi road. Beside this spot you can see Mro villages. Their colorful culture and living style are surely an unexplored experience for the visitors. In rainy season here creates a spectacular scenery, the whole spot is covered with the blanket of clouds. You can enjoy a cloudy experience. Winter is waiting for you with itâ€™s foggy gesture on the height. ', 'here is another beautiful place to see near Meghla is called Nilachal also maintained by district administration. it is known as tiger hill. The view of Nilachal is so spectacular for snapping Nilachal is the nearest tourist spot from Bandarban. It is situated at Tigerpara. It is near about 2000 feet above of sea level and 5 kilometer away from the Bandarban town. From here visitor can see the total glance of Bandarban town and a vast landscape. In the rainy season visitor can be thrilled walking through the clouds. Visitor can watch a golden twilight in the evening and also enjoy an evergreen moonlight in the moonlit night.', 'The Buddha Dhatu Jadi is a Theravada Buddhist temple also known as the Bandarban Golden Temple. The Buddha Dhatu Jadi is located at Pulpara 4 kilometer from Balaghata town and 10 kilometer from in the remote Bandarban hill district, in Bangladesh. The Bandarban Golden Temple is the largest Theravada Buddhist Temple with the second largest Buddha statue in Bangladesh.The Buddhist temple is known in local language as kyang. The Buddha Dhatu Jadi is regarded as one of the holy site for Theravada Buddhism followers and Buddhist pilgrims. This religion is practiced by the Marma or Mogh tribal group of the Chittagong Hill Tracts, a dominant ethnic group in Bandarban. They are of Arakan descent and Buddhists by religion.');

-- --------------------------------------------------------

--
-- Table structure for table `bandarban-hotel`
--

CREATE TABLE `bandarban-hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` text NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bandarban-hotel`
--

INSERT INTO `bandarban-hotel` (`id`, `name`, `type`, `address`) VALUES
(1, 'Green Peak Resorts', 'Highly Standard', 'Recha, Meghla, Bandarban, Chittagong, Bangladesh.'),
(2, 'Nilgiri Resort', 'Highly Standard', 'Nilgiri Resort, Nilgiri, Bandarban, Chittagong, Bangladesh.'),
(3, 'Parjatan Motel', 'Standard', 'Parjatan Motel, Meghla, Bandarban, Chittagong, Bangladesh.'),
(4, 'Venus Resort', 'Highly Standard', 'Venus Resort, Meghla, Bandarban, Chittagong, Bangladesh.'),
(5, 'Hotel Hill View Bandarban', 'Standard', 'Hotel Hill View Bandarban, Bus Stand, Bandarban Main Road, Chittagong, Bangladesh.');

-- --------------------------------------------------------

--
-- Table structure for table `coxbazar`
--

CREATE TABLE `coxbazar` (
  `id` int(11) NOT NULL,
  `info` text NOT NULL,
  `inani` text NOT NULL,
  `kolatoli` text NOT NULL,
  `laboni` text NOT NULL,
  `himchori` text NOT NULL,
  `saintmartin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coxbazar`
--

INSERT INTO `coxbazar` (`id`, `info`, `inani`, `kolatoli`, `laboni`, `himchori`, `saintmartin`) VALUES
(1, 'Cox\'s Bazar sea beach, the world\'s longest natural sandy sea beach with its incredible 120 km length. It is the most visited tourist destination in Bangladesh. Every year millions of foreigner and local people come here to enjoy their holidays. You will enjoy sunrise and sunset view very much in this beach because the sea changes color in those time. Warm shark free water is best for swimming and sunbathing. You will enjoy surfing, jogging, cycling in this beach too. It is always crowded by tourists. Near the beach you will find there are hundreds of shops selling souvenirs and beach accessories to the tourists.Here you will find many Buddhist Temples and tribes, colorful Pagodas and delightful sea-food which make Cox\'s bazar so special.', 'Ukhia Thana, Cox\'s Bazar, Bangladesh\r\nInani Beach is an 18-kilometre-long sea beach in Ukhia Upazila of Cox\'sBazar District,Bangladesh. It has a nice view having a lot of coral stone. This coral stones look green and live in summer or in rainy season. But if someone want to enjoy to look a lot of coral stone then one should go there in winter.', 'Kolatoli beach is another attractive beach for the tourist. Every year different ages people come here to take the real taste of taking sea-bath. Visitor\'s can taking sea bath, driving sea ski boat, can take fresh and apealing various kind of sea foods. Walking beside the sea shore on moonlit night is always pleasent for all aged tourist. A slow paced life - most work happens in the morning and evening, whereas midday is reserved for drying rice and fish.', 'Laboni Beach is the main beach of Cox\'s Bazar. At here we can easily enjoy the scenic beauty of Bay of Bengal. Its a place for enjoyment, many people come here including the foreigners. The beach is well appreciated during sunsets and sunrise, where people can witness the sea as it changes its colors twice in a day.Visitors can sunbathe, surf, jog, cycle, and swim. It is best for swimming and relaxation.It is a nice place for our tourism. So, come &lets enjoy the beauty of Laboni Beach.', 'There are Many places to visit for the tourists in Cox\'s Bazar. One of them is Himchari. Himchari is famous for warm water waterfall.The wanderfill waterfall of Himchari is a very attractive scene.The waterfall from the green hill is relatively marvelous to look at. Whatever, in the winter it Quails. In the rainy season in it is really marvelous and full waterfall could be enjoyed. Here you get beautiful hilltop resort centre where you can stay for relaxing and can enjoy the shore of the Bay of Bengal.', 'St. Martin Island- The only Coral Island of Bangladesh is located in the Bay of Bengal surrounded by huge black stone.There are also various type of shruips, lobstar, King crab and rare species of giant crab can be found in an ideal habitat. This island is specially attracted the natural scientists to be a safe refuge for hatching of different type of sea turtles like olive ridley turtle, Hocksbill turtle, leatherback turtle and loggerhead turtle.');

-- --------------------------------------------------------

--
-- Table structure for table `kuakata`
--

CREATE TABLE `kuakata` (
  `id` int(11) NOT NULL,
  `info` text NOT NULL,
  `sunrise` text NOT NULL,
  `fatrarchor` text NOT NULL,
  `temple` text NOT NULL,
  `jhaubon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kuakata`
--

INSERT INTO `kuakata` (`id`, `info`, `sunrise`, `fatrarchor`, `temple`, `jhaubon`) VALUES
(1, 'Kuakata (Sagar Kannya / Daughter of the Sea) sea beach is a white sandy beach. It is about 18 km long and 3.5km wide. It is one of the rarest places to see the full view of both sunrise and sunset from the same place or same position. This beach is surrounded by green trees and beside the beach there are many garden forest, like The Foyej Miyar Coconut Garden, Lembur Chor, Jhau bon, Gangamotir Chor etc. These gardens and forests are the most attracting part for the tourist. There are no quick sands in the beach. So you can frequently run, take bath, swim, and pick up cockle from the beach. There are two rivers, named Payra and Bishkhali are West of the beach and river named Agunmukha is East of the beach. It has also some wanderings sites like the Rakhain Polly, Shima Buddhu Bihar, Fatrar Chor,Rash Mela, Shutki Polli that are enjoyable for the tourist.', 'Kuakata is one of the rarest places to see the full view of both sunrise and sunset from the same place or same position. For that reason it makes Kuakata one of the world\'s unique beaches. Kuakata has a wide sandy beach. The Kuakata beach is about 30 kilometer long and 6 kilometer wide sandy beach.Kuakata is the only beach in the world where travelers can enjoy sunrise and sunset view from the same beach. To enjoy the sunrise from the Kuakata beach one should wake up very early in the morning. At the evening of the day traveler will enjoy the attractive sunset.', 'Fatrar chor is the nice tourist place near Kuakata beach. From Kuakata traveler may visit the Fatrar Chor. Fatrar Chor is the part of the Sundarban forest. Fatrar Chor is also known as Fatrar Bon. As the Fatrar Chor is the part of Sundarban so it is mangrove forest. Fatrar Bon is fairly big forest in Kuakata. There are many Timber trees available here. The tree of this forest in very hard and strong. And the wood of this trees are very long lasting and also costly. A wood business is started at that place and these woods are supplied in all over the country. ', 'Kuakata is the Spot of pilgrimage for both Hindu and Buddhist communities. Mistri-para Buddist In kuakata there has a Buddhist temple. It is another attraction of Kuakata.This temples are in the Kuakata Parjatan area and in the Rakhain\'s locality. This Buddhist Temple age is about 100 years old. In this Temple there has a statue of Gautama Buddha. This is the Biggest Buddhiststatue of Bangladesh at Kuakata and there also two wells of 200 years old.You will find hundred yearsâ€™ old ancient tradition and cultural heritage of traditional Rakhain tribal families. ', 'Jhaubon is very beautiful place at Kuakata. Jhau bon is close to the sea beach. Jhau forest is created by Government initiative. Tourist or traveler can visit there by walking.Jhau bon is surrounded by many Jhau trees and coconut trees. This place is better to see the sun rise scenery at Kuakata. There is a nice Eco park at Jhaubon area of Kuakata. This Ecopark will be the excellent place for picnic or junket.Gangamati Reserved Forest is located to the east of Jhau forest. So the traveler will visit both Jhaubon and Gangamati Reserved Forest at a time. While visiting this area traveler will view the nice structure of forests, big jhau trees, sands etc.Jhau bon a beautiful place to sit and relaxation. Jhau bon is very famous and a well-acquainted place for visitors. Tourists come here for recreation. Early in the morning the sun rising scenery can be viewed from this corner. Jhaubon attract all visitors by its unbounded beauty.');

-- --------------------------------------------------------

--
-- Table structure for table `rangamati`
--

CREATE TABLE `rangamati` (
  `id` int(11) NOT NULL,
  `info` text NOT NULL,
  `sajek` text NOT NULL,
  `kaptai` text NOT NULL,
  `shuvolong` text NOT NULL,
  `tribal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rangamati`
--

INSERT INTO `rangamati` (`id`, `info`, `sajek`, `kaptai`, `shuvolong`, `tribal`) VALUES
(1, 'Rangamati, a small town located amongst the green hills, lakes and rivers of the Chittagong Hill Tracts. This is what makes it a prime Bangladesh hill destination. It is known as the Lake City of Bangladesh as this place is located on the bank of the beautiful Kaptai Lake. It is the administrative headquarter of the Rangamati Hill District, the largest district of Bangladesh and located some 77 kilometres away from Chittagong. For long time Rangamati has been a prime Bangladesh tourist destination for its location, scenic beauty, colourful tribal people, tribal homespun textiles and ivory jewellery.\r\nThe rich natural resources, diverse flora and fauna makes Rangamati a Bangladesh Eco-Tourism destination. The road leading to Rangamati circles and winds through hilly terrains covered with lush green forests and creates a memorable experience for years to come. A stay here provides a glimpse into the lifestyle of various tribes living there. The ethnic tribes of Rangamati are the Chakma, Marma, Tonchongya, Tripura, Murong, Bome, Khumi, Kheyang, Chak, Pankhoa, and Lusai. The mix of different races, cultures, religions and customs creates an interesting community at Rangamati. It is said that without visiting Rangamati a tourist will miss a colourful slice of Bangladesh.', 'Sajek is a union at Baghaichari Upazila in Rangamati districts. It is one of the big union in Rangamati districts. Basically it is name of a river which separates Bangladesh from India. The river flows into the Karnafuli River in the Chittagong Hill Tracts. Sajek Valley is situated in the North angle of Rangamati, near the Mizoram border boundary area. The valley is 18000 ft high form sea lavel. Many small rivers flow through the hills among them Kachalon and Machalong are famous. It is one of the biggest union in Bangladesh.', 'Kaptai lake, beautiful blue watery lake was made by man. The size of Lake is approximately 11000 sq km. You will enjoy the natural beauty of this lake as well as boating on the lake. It is a huge lake and it has some tiny islands. Each island has different name such as \"Peda Ting-Ting\", \"Tuk-Tuk Echo Village\", \"Chang-Pang\" etc. \"Peda Ting-Ting\" is a tiny island and here you will find cottages to stay and enjoy moonlight night with fantastic lake surroundings. \"Tuk-Tuk\" is an echo park with varities of trees and plants. It is a great place for boating and cruising.Hanging Bridge is 335 feet long bridge across a portion of the Kaptai lake is an icon of Rangamati. Actually Rangamati is famous for this bridge.It\'s really a very beautiful bridge. Every year thousands of people come here to visit this bridge and lake.', 'Shuvolong a place in Borokol sub district, situated about 25kilometers (11kilometers as the crow flies) away from Rangamati. There are few waterfalls in Shuvolong zone with the largest one falling from as high as 300 feet. In the past more than a few years, this place has twisted into a tourist journeys end due to stunning waterfalls and the neighbouring market. Shuvolong is simply easy to get to by rapidity boat or motor boats from Rangamati.', 'ocated in Rangamati, the Tribal Cultural Museum in the Hill Tracts of Bangladesh offers fascinating insight into the history and cultural traditions, as well as socio-economic aspects of the different tribes in the area. Visitors can view displays of tribal dress, ornaments, musical instruments, coins and handicrafts at the museum. Paintings depicting the many facets of tribal life are also on display, as well as a collection of statues made from various metals and wood.The Chittagong Hill Tracts in south-eastern Bangladesh is divided into the Khagrachari, Rangamati and Bandarban districts and is home to a number of the country\'s tribal groups.');

-- --------------------------------------------------------

--
-- Table structure for table `shundarban`
--

CREATE TABLE `shundarban` (
  `id` int(11) NOT NULL,
  `info` text NOT NULL,
  `kotka` text NOT NULL,
  `park` text NOT NULL,
  `karamjal` text NOT NULL,
  `hironpoint` text NOT NULL,
  `dublarchar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shundarban`
--

INSERT INTO `shundarban` (`id`, `info`, `kotka`, `park`, `karamjal`, `hironpoint`, `dublarchar`) VALUES
(1, 'Sundarban is the world\'s largest mangrove forest. It is famous for the Royal Bengal Tiger, there are about 400 Royal Bengal Tiger in this forest. You can also find beautiful spotted deer in this forest as well as crocodiles, varieties of birds , monkey and many other wild animals. Sundari tree a type of mangrove that is extensively found here. The main place of Sundarban is Harbaria, Katka, Kachikhali, Hiron point. The main attraction of Sundarbans are wildlife photography including photography of the famous Royal Bengal Tiger. Here you will enjoy wildlife viewing, nature study, meeting fishermen, wood-cutters and honey-collectors as well as peace and tranquility in the wilderness. Every year thousands of locals and foreigners come to Bangladesh to visit this unique mangrove forest and they enjoy its dazzling beauty very much.', 'Bangladesh is a wonderful Country in the world. Bangladesh has many tourist spot. All spot are very attractive and well-known. Sundarban is one of them. It is more beautiful place for the Tourist. The largest mangrove forest in the World (140,000 ha). The World famous Royal Bengal Tigerâ€™s homeland and about 400 tigers live in sundarban. About 30,000 wonderful spotted deer live in sundarban. There are many Tourist Spot in Sundarban. Katka is one of Heritage sites in Sunderban. Katka a base for safaris, and well spot to see tigers and for bird-watching. Katka is well known for many rare and majestic wild animals. At Katka, one can see many precious wild animals right from tigers to deer and also varieties of birds and many kinds of monkeys. Here one can hear the naturesâ€™ music mixed with the wild fowls in the mornings and evenings.For those interested in wildlife trekking, the vast expanse of grassy meadows running from Katka to Kachikhali (Tiger Point) is an ideal route. Donâ€™t miss this place if you are an adventurous tourist. ', 'Sundarban National park is one of the heritage site in sundarban.Where the land meets to the sea at the southern tip of West Bengal lies the Indian Sunderbans, a areaof impenetrable mangrove forest of great size and bio-diversity. A UNESCO World Heritage Site, the Sunderbans is a vast area covering 4264 square km in India alone. The Indian Sunderbans forms the largest Tiger Reserve and National Park in India. A paradise for birdwatchers, the list includes such rarities as the Masked Finfoot, Mangrove Pitta and the Mangrove Whistler.', 'Karmajal is one of the wonderful visiting place in sundarban. To appreciate and to view the most precious species of Bangladeshâ€™s wildlife, thousands of visitors make their way to Karamjol, a ranger station deep in the forest that also serves as a deer-breeding center. Bangladesh has some exquisite wildlife species that are unique to the country, and Karamjol is one of the gateways to the majestic wildlife sanctuary, Sundarban. Visitors who are interested in catching a glimpse of the breathtaking wildlife of Bangladesh at Karamjol and Sundarban must first gain permission from the Forest Officer before entering the forest, and vaccines against Cholera must be taken before leaving for Karamjol. Other recommended items for the trip include dressing according to the tropical climate, comfortable walking shoes or boots with rubber soles, sufficient drinking water, insect repellent, a medical kit, anti-diarrhea medication and anit-malarial medication is also suggested.', ' There is number of spot in sundarban. Hiron Point is another tourist spot in Sunderban. It is called the world heritage state. Hiron Point is a graceful spot, great for spotting tigers and other spectacular and rare wildlife animals. Also known as Nilkamal, it is well-known for tiger, deer, monkey, crocodiles and many precious birds. Often they are looking out their.This place attracts many tourists owing to its natural beauty and connate splendor. This is a place to have a look at the rare species of wild animals and birds, to be noted in the diary of bird watchers and wildlife enthusiasts.\r\n', 'The Sundarban is one of the biggest single block of tidal halophytic mangrove forest in the world. It is located in Bangladesh. There are many tour place in there. Dublar Char Island is one of them. Dublar Char, a beautiful island known for its picturesque scenes, is famous for fishing and is a place for fishermen with abundant of fish fauna. One can enjoy the fishing here and have a first hand experience of this fun filled activity.The Island has all the natural beauty of any other places of the world renowned Islands. On the eastern side of this island, River Passur flows, while on the western side River Shibsha. In addition, this island is known for its beautiful views.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bandarban`
--
ALTER TABLE `bandarban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bandarban-hotel`
--
ALTER TABLE `bandarban-hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coxbazar`
--
ALTER TABLE `coxbazar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuakata`
--
ALTER TABLE `kuakata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rangamati`
--
ALTER TABLE `rangamati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shundarban`
--
ALTER TABLE `shundarban`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bandarban`
--
ALTER TABLE `bandarban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bandarban-hotel`
--
ALTER TABLE `bandarban-hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `coxbazar`
--
ALTER TABLE `coxbazar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kuakata`
--
ALTER TABLE `kuakata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rangamati`
--
ALTER TABLE `rangamati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shundarban`
--
ALTER TABLE `shundarban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
