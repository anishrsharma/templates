-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 03:53 AM
-- Server version: 8.0.16
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bluecat2`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(5) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_password` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `admin`) VALUES
(2, 'test', 'test@gmail.com', 'test', 0),
(3, 'test', 'test1@gmail.com', '1212', 0),
(11, 'Shivam Sharma', 'shivam@gmail.com', 'sh1234', 0),
(12, 'a', 'a@gmail.com', '1234', 0),
(13, 'b', 'b@gmail.com', 'b', 0),
(14, 'admin', 'admin@gmail.com', 'admin1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `old_price` varchar(10) NOT NULL,
  `new_price` varchar(10) NOT NULL,
  `special_offer` tinyint(1) NOT NULL,
  `popular` tinyint(1) NOT NULL,
  `product_desc` varchar(10000) NOT NULL,
  `img1_ref` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img2_ref` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img3_ref` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img4_ref` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img5_ref` text NOT NULL,
  `img6_ref` text NOT NULL,
  `stock` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `old_price`, `new_price`, `special_offer`, `popular`, `product_desc`, `img1_ref`, `img2_ref`, `img3_ref`, `img4_ref`, `img5_ref`, `img6_ref`, `stock`) VALUES
(1, 'Eyebrow & Upper Lip Hair Remover', '999', '499', 1, 1, '1. High definition, built-in LED lamp, 18 K gold plated head anti allergy.\r\n2. Portable, so you can use it anytime and anywhere.\r\n3. Simple operation, safe and effective, easy to modify eyebrows, painlessly maintain eyebrows.\r\n4. The Beauty Eyebrow Trimmer precision head is to be used on the top and bottom of brows and in between eyebrows, \r\nto instantly and painlessly erase unwanted and stray eyebrow hair, without the pain of plucking!\r\n\r\n\r\nHOW TO USE\r\n\r\nRemove the cap\r\nSlide the switch located on the side of the unit upward into the ON position the light will automatically turn on when the unit is ON\r\nGently press the head of the unit flat against your skin, the unit should not be on an angle, proceed making small circular motions to remove unwanted hair.\r\n', 'img/1a.jpg', 'img/1b.jpg', 'img/1c.jpg', 'img/1d.jpg', 'img/1e.jpg', 'img/1f.jpg', 7),
(2, 'Magic Wooden Toy', '1,598', '799', 1, 1, 'The magical Daruma jumps to avoid hammer, and it moves as if the spectator watches CG animation.Take it and play with your children, or show your friends this amazing treasure at a party!\r\n\r\nFunny and unique magic with Japanese traditional toy.\r\nIt moves as if the spectator watches the animation. The magical Daruma jumps to avoid hammer. Even it is knocked down and collapsed, it magically re-shapes (re-builds).\r\nMade of high-quality material, playing with it to gain more fun.\r\nBest gift and choice for kids and friends.\r\n\r\nProduct Features:\r\n\r\n    No one can beat the small wooden people.\r\n    A fun and unique magic with traditional toys.\r\n    It moves just like a viewer watching a CG animation.\r\n    The magical little wooden man, even if it is knocked down and collapsed, 	will magically reshape (rebuild).\r\n\r\nHow to use:\r\n\r\nIn the instruction manual, there is a teaching video QR code, scan it with your mobile phone and open the teaching video.\r\n\r\nSpecifications:\r\n\r\nUnable to be knocked down, magical wooden magic toy\r\n\r\nPackage Included:\r\n\r\n    1) wooden man\r\n    2) Wooden hammer\r\n    3) Magic line\r\n\r\n', 'img/2a.jpg', 'img/2b.jpg', 'img/2c.jpg', 'img/2d.jpg', 'img/2e.jpg', 'img/2f.jpg', 119),
(3, 'Rapid Drying Hair Towel', '1,998', '999', 0, 1, 'Using a hairdryer can cause a lot of damage to your hair. This dry hair cap can make your hair dry in five minutes. It only takes five minutes. Come and try it during the promotion period.\r\n\r\nSuper water-absorbent, fast-drying, time saver, drying your hair 100% naturally Quick Magic Hair Dry Hat!  Electric hair blower no longer needed!  Reduces the risk of split ends.\r\n\r\n100% superfine composite fiber material with a button to secure your bath towels.  Your Hair will not slip when you take a bath.  Extremely easy to use!\r\n\r\nThe Quick Magic Hair Dry Hat is ideal for everyday use at home, gym, and travel.  Great assistant in facial, bath, makeup, face wash. Fits all hair types and lengths.\r\n\r\nUsing the hairdryer will do great damage to your beautiful hair. The towel will absorb moisture in your hair throughout this time. It is the softest least damaging way to dry long hair. \r\n\r\nHow to use? (2 Method)\r\n\r\n1. Bend to make your hair hang down, put on hair towel on top of head (the end with button)\r\n2. Wrap your hair with the hanging part of the towel\r\n3. Pull up the secure loop across your head and fix it under the secure button.\r\n\r\nSPECIFICATIONS:\r\n\r\nMaterial: Coral Fleece (Microfiber) \r\nMeasure: 27.16\" x 9.85\" (69 x 25 cm) \r\nApplicable People: Women / Men / Teen\r\nWeight: 3.40 Oz (96.38g) \r\nMachine Washable: Yes\r\nSecure Button: Yes\r\nWashing Tip: No softener, bleaching or dry cleaning', 'img/3a.jpg', 'img/3b.jpg', 'img/3c.jpg', 'img/3d.jpg', 'img/3e.jpg', 'img/3f.jpg', 85),
(4, 'Baby Shower Cap - Flexible Size', '1,998', '999', 1, 0, 'Keep water & foam out of your baby\'s eyes & ears. Make washing your baby\'s hair become much Easier & Funny.\r\n\r\nFOR BABY FROM 6 MONTHS - 6 YEARS OLD – The cap has a flexible design with 4 adjustable fasteners....so you can easily adjust to fit your baby\'s head.\r\n\r\nMAKE SHAMPOO TIME FUNNY –  Your baby will giggle when he/she sees the water running down in front of (but never touching) the face. He/she will able to play with toys while showering because no more water & foam running into his/her eyes and mouth!\r\n\r\nCOMFORTABLE TO WEAR – Our shower cap is made of high quality EVA foam material that is soft, flexible and lightweight... It stretches a bit to help the cap stay on securely... And It\'s comfortable for your baby to wear during shampoo time \r\n\r\nPREVENT EAR INFECTION & EYE DISEASES –  Water entering the ear can cause ear infection. Foam flowing into the eye will increase the risk of eye diseases. Wearing our shower cap your baby\'s eyes and ears will be protected completely because it keeps the water & foam out of his/her eyes and ears. \r\n\r\n', 'img/4a.jpg', 'img/4b.jpg', 'img/4c.jpg', 'img/4d.jpg', 'img/4e.jpg', 'img/4f.jpg', 106),
(5, 'Magic Bax Earring Lifters', '1,598', '799', 0, 0, 'DESIGNED TO CORRECT SAGGING EARRINGS \r\n\r\nMagic Bax replace your existing earring backs (as shown in this video below) and forever change the way earrings look on you. Try them at home for 7 days and if you do not like them, return it for your money back. No Questions Asked. Cash on Delivery Available.\r\n\r\nThe Magic Bax Set will include 1 Pair of Sterling Silver Magic Bax, 1 Pair of 18k Gold-Plated Magic Bax, and 1 premium storage box.\r\n\r\nNon-Allergic Sterling Silver and 18K Gold-Plated - No Itching, Perfect For Sensitive Skin\r\nInstant Support For Your Earrings\r\nAdjustable Design - Fits All Earrings, Thin or Thick\r\nHide Earlobe Problems And Unprofessional Piercings\r\n\r\nDO YOU MISS WEARING YOUR FAVOURITE EARRINGS?\r\nFrom heavy studs to oversized chandeliers, now you can wear all types of earrings without any worry about its weight or your sagging earlobe. \r\n\r\nPATENTED TECHNOLOGY, PREMIUM MATERIAL\r\nWe apply excellence in each piece that we make. Made from sterling silver and plating with 18k gold, each Magic Bax is made with patented technology and built to last long. Our patented Ear Stabilizer Technology takes the shape of your ear and provides comfortable and instant support.\r\n', 'img/5a.jpg', 'img/5b.jpg', 'img/5c.jpg', 'img/5d.jpg', 'img/5e.jpg', 'img/5f.jpg', 124),
(6, 'HANDY STITCHING MACHINE - Portable & Handy', '3,096', '1,199', 0, 0, 'No Instructions Needed - Just pick it up and start sewing!\r\n\r\nDurable - Strong enough to sew through hard fabrics, such as denim.\r\n\r\nGentle Sewing - Gentle enough to be used on delicate fabrics such as silk.\r\n\r\nBattery Powered\r\n\r\nFixes rips Easily - Quickly fix a rip or tear with ease!\r\n\r\nOn/Off Switch - Keeps you focused on sewing.\r\n\r\nTension Adjustment - Adjust tension based on different fabrics.\r\n\r\nExtremely Portable - It is a sewing machine in the palm of your hand. Take it with you wherever you go!\r\n\r\n    Dimensions: 22.9 x 5.1 x 15.2 cm\r\n\r\n    Perfect for Quick Repairs: Some repairs that conventional desktop machines cannot handle, like sewing curtains while on the rod, or mending a torn pocket without having to remove your pants.\r\n\r\n    Perfect for Any Material: Great for silks, denim, wool, leather and crafts. You can use it to sew hanging curtains, wall hanging, etc easily.\r\n', 'img/6a.jpg', 'img/6b.jpg', 'img/6c.jpg', 'img/6d.jpg', 'img/6e.jpg', 'img/6f.jpg', 44),
(7, 'Waterproof Stop Leaks Seal Repair FlexTape', '1,599', '799', 0, 1, 'FLEX TAPE ® is a super strong ??, rubberized, waterproof tape that can patch, bond, seal and repair virtually anything! It is specially formulated with a thick, flexible, rubberized backing that conforms to any shape or object. This durable adhesive tape instantly seals out water, air and moisture to create a super strong, flexible, watertight barrier. Unlike other tapes available, Flex Tape’s bond will increase with time and pressure.\r\n\r\nThick, flexible, rubberized adhesive\r\n\r\nConforms to any shape or object\r\n\r\nSeals out water, air and moisture\r\n\r\nGreat for patching large holes, cracks, gaps, and tears\r\n\r\nCan be applied hot or cold, wet or dry…even underwater\r\n\r\nAvailable in three (3) sizes to cover cracks, holes, and gaps of any size\r\n\r\nLength: 1520mm\r\nWidth: 100mm\r\n\r\nCan withstand temperatures from -70ºF to 200ºF and extreme weather conditions\r\n\r\nUV resistant\r\n\r\nEnvironmentally friendly\r\n\r\nVOC-free ', 'img/7a.jpg', 'img/7b.jpg', 'img/7c.jpg', 'img/7d.jpg', 'img/7e.jpg', 'img/7f.jpg', 105),
(8, 'MAGNETIC PULSE PEN ACUPUNCTURE MASSAGER', '2,599', '1,299', 1, 0, 'DO YOU WANT TO RELIEVE PAIN INSTANTLY WITHOUT MEDICINES OR NEEDLES ? THEN THIS PEN IS FOR YOU.\r\n\r\nThis Needle-Free Electronic Acupuncture Pen will give you natural pain relief and more MINUS the painful needles and costly medication!\r\n\r\nTreat body pain and tension instantly!\r\n\r\nA fusion of modern biotechnology, this therapeutic device is a convenient way to self-administer the benefits of time-trusted acupuncture techniques without the use of needles.\r\n\r\nProven to have many health benefits, this kind of therapy is commonly used in Traditional Chinese Medicine (TCM), sometimes in place or in combination with acupuncture.\r\n\r\nIt works to relieve pain by blocking the pain signal as it travels from the nervous system to the brain. The electropulsations also have a relaxing effect on tense muscles that is similar to massage.\r\n\r\nUnlike traditional acupuncture, this modern device uses no needles. Instead, it releases EMS pulses that stimulate the meridian and acupressure points in your body for healing, therapy, and pain relief.\r\n\r\n\r\nDetoxifies the meridians and reduces muscle pain or tension.\r\nHelps relieve and soothe a number of unhealthy conditions: chronic muscle, joint, and back pains; muscle tension; arthritis; rheumatism; osteoporosis; sciatica; migraine; insomnia; etc.\r\n\r\n\r\nAs opposed to using painkillers and other medications, this device is chemical-free and thus it poses no health risk or side effects in the long run. It’s an ideal and cost-efficient alternative treatment.', 'img/8a.jpg', 'img/8b.jpg', 'img/8c.jpg', 'img/8d.jpg', 'img/8e.jpg', 'img/8f.jpg', 79),
(9, 'Turbo Water Saving Faucet', '1,598', '799', 0, 1, 'Does your faucet lack the versatility needed to quickly and effortlessly wash your food and dishes? The Tap Nozzle with Hose features a 360 degrees rotatable tap nozzle and a unique 2-mode spray function, helping you to clean your sink or wash your food effortlessly!\r\n \r\nThe innovative design of our Tap Nozzle with Hose allows you to move it into virtually any position, inside or outside of your sink. The reach of this faucet ranges from <2 to >5 inches. Imported From China. It can even save 30% of water than ordinary tap!\r\n\r\nPRODUCT FEATURES:\r\n\r\n2 spraying modes: jet stream mode and wide spray mode, enabling you to wash dishes, food and sink in different   intensities\r\nSave water: save 30% of water than ordinary tap, which at the same time deters you from costly water bill\r\n360 degree rotatable: allow you to tackle dirt on dishes or foods at all angles in ease\r\nAnti-spillage: made of premium brass and chrome finish to resist corrosion and tarnishes\r\n\r\n', 'img/9a.jpg', 'img/9b.jpg', 'img/9c.jpg', 'img/9d.jpg', 'img/9e.jpg', 'img/9f.jpg', 112),
(10, '360° Baby Food Bowl', '1,198', '599', 0, 0, 'Not only it\'s perfect for keeping your children\'s mess to a minimum, but it also looks like a cool Planet Saturn. Kids will definitely love it! It\'s common for children to be a picky eater, and this bowl will at least attract them to eat. The vibrant color is so eye-catching.\r\n    This bowl is made of 100% food grade PP material, it is FDA approved and BPA free which means high safety for your kids. The Gyro Bowl is durable and simply won\'t break, crack, discolor,warp,melt or flake away. It also doesn\'t change the nature of the food you put in there.\r\n    With such creative design, it\'s surprisingly easy to clean. Just wash it gently in warm water or put it in dishwasher. Save trouble cleaning anytime, anywhere.\r\n\r\nFeatures :\r\n\r\n    SPILL PROOF DESIGN — Great for babies and kids to have fun while they eat but without the mess. Easy grip handles allow kids to hold the bowl without much effort.\r\n    DESIGNED FOR KIDS — Kids love snacking out of this gyro bowl. With its unique gyroscopic design, kids can reach into the bowl for their favorite snack without making a mess.\r\n    PERFECT FOR SNACKS — Anti Spill design, the inner bowl with gyroscopic motion can rotate 360 degrees to keep dry food inside and avoid food spilling.\r\n    EASY TO CLEAN — Made of food grade PP material, safe for your kids to use. Easy to Clean and Dishwasher Safe, just wash it gently in warm water or put it in dishwasher.\r\n', 'img/10a.jpg', 'img/10b.jpg', 'img/10c.jpg', 'img/10d.jpg', 'img/10e.jpg', 'img/10f.jpg', 134),
(11, '5 IN 1 FACE SKIN CARE BRUSH', '2,398', '1,199', 0, 1, '5 in 1 waterproof facial cleansing brush\r\n\r\nfor surface cleaning cleansing\r\ngeneral facial cleansing brush\r\n\r\nlatec sponge head: suitable for around the eyes and cheecks\r\n\r\ncosmetic sponge head: mild properties, cleans pores and oils, suitable for sensetive skin\r\n\r\ncleansing brush: cleanse your face with cleansing lotion for a refreshing face\r\n\r\nscrub massage head: exfoliate and dead skin\r\n\r\nball massage head: massage the face with moisturizer oil to make the skin absorbe', 'img/11a.jpg', 'img/11b.jpg', 'img/11c.jpg', 'img/11d.jpg', 'img/11e.jpg', 'img/11f.jpg', 76),
(12, 'Quick Shoe Closet', '2,598', '1,299', 0, 1, 'UPGRADED 3-LEVEL HEIGHT\r\n\r\nAdjustable Shoe Rack Space Saver – You can adjust the height of shoe slots according to the shoe size in 3 steps. It can be used in various type of shoes for men, women, teen, girl, boy, kids, toddler, baby and small shoes.\r\n\r\nSAVES YOUR SPACE AND TIME\r\n\r\nWith our best plastic shoe organizer you don`t care about your closet organization anymore! This closet shoe organizer helps to keep your shoes in order and it`s easier to find any shoes with shoe organizer.\r\n\r\nPERFECT PROTECTION AND EASY TO USE\r\n\r\nYou can have 3 angles with this easily adjustable shoe organizer, so this men’s & women’s shoe rack organizer fits any heels. Our shoe holders protect shoes from any scratches since this double shoe rack prevents shoes from rubbing.\r\n\r\nSHOE ORGANIZER: Stack your shoes on top of one another to free up more space; the best space saving solution for your shoes at rack, closet, cabinet, and wardrobe.\r\n    PLASTIC MADE: Eco-friendly PP plastic material makes this shoe slots organizer set, has higher load capacity and durable for long-lasting use; it is also super easy to clean with water and soap.\r\n    ANTI-SLIP SURFACE: The shoe slot is designed with great grip for your shoes sole; baffle plates on the shoe slots holder effectively protect your shoes from falling.\r\n    VERSATILITY: Suitable for all foot-ware. Adults & children, outdoor to ballroom, sports to business.\r\n    ADJUSTABLE: Multiple height options allow storage of various type of footwear including high heels.', 'img/12a.jpg', 'img/12b.jpg', 'img/12c.jpg', 'img/12d.jpg', 'img/12e.jpg', 'img/12f.jpg', 89),
(13, 'Advanced Fruit & Vegetable Chopper', '1,598', '799', 0, 0, 'The perfect kitchen helper for quick and healthy meals in an instant!\r\n\r\nNo longer will you have to chop and dice vegetables with all the mess and clean-up. Fruit and Vegetable Dicer Chopper takes the hard work out - simply insert the food, press it and everything is perfectly sliced in SECONDS.\r\n\r\nThe different blade inserts can be combined, cut thick slices, thin slices, cubes, and sixths! Simply insert the food, press it and everything is cut perfectly in seconds. Whether soft or hard foods such as Zucchini, tomato, mushrooms, eggs, lemons and more! The extra-sharp stainless steel blades are reinforced for fast, consistent results - every time. \r\n\r\nWith this Fruit and Vegetable Dicer Chopper, you can cut directly into the pan, bowl or pot: For speed and flexibility without great effort and dirt in the kitchen. Or click the collection container on the handset - for direct cutting in! With the freshness cover, you can keep the remaining airtight.\r\n\r\nFeatures:\r\n\r\n    Nicer Cutter in hand format. The smallest of all can be operated with one hand and thanks to its compact size, it is ideal for on the go.\r\n    Thick slices, thin slices, cubes, pins and sixth!\r\n    Cut directly into the pot, pan or bowl.\r\n    Collection container with a fresh lid for cutting directly into it and storing safely.\r\n    Works up to 10 x faster than using your old knives.\r\n    Snap-on perfect portion container with the fresh-keeping lid.\r\n    Combines five interchangeable slicing options into one handheld slicer, the quick-lock function for safe, compact storage.\r\n    30 dice or 10 slices in one click!\r\n    Quick food prep tool for salad, stir-fries, soups, crudities, stews, and more\r\n\r\nPackage Include:\r\n\r\n    3 x Knife insert\r\n    1 x Blind frame\r\n    1 x Nicer Dicer Quick\r\n    1 x Frischhaltedeckel\r\n    1 x Collecting container (capacity: 200 ml)', 'img/13a.jpg', 'img/13b.jpg', 'img/13c.jpg', 'img/13d.jpg', 'img/13e.jpg', 'img/13f.jpg', 66),
(14, 'Magic Cosmetics Bag - Portable & Waterproof', '1,598', '799', 0, 0, 'Carry all your make up around easily with our Lazy Cosmetics Bag! \r\n\r\nGet 50% Off Today: LIMITED Quantity Available!\r\nPull the drawstring cord and the bag cinches completely closed to stow or travel.\r\nPack the bag in your suitcase, tuck it in your overnight bag.\r\nThe bag conveniently fits anywhere!\r\nA smart and easy 4-in-1 solution, clean surface, quick cleanup, carryall, and storage.\r\nTwo Zips inside for valuables.\r\n\r\n\r\nFEATURES:\r\n\r\n    See all your cosmetics at once.\r\n    Clean up in seconds.\r\n    No more digging and dumping in a traditional black hole make up bag\r\n    Raised lip keeps makeup and brushes from rolling off the counter\r\n    Machine Washable. Waterproof. Broken eyeshadow? Spilled foundation? No problem!\r\n    Opens flat for full access; cinch the drawstring closure to seal and convert to a clutch\r\n    100% brand new and high quality\r\n    Material: High-Quality polyester\r\n    Size: 47*47cm', 'img/14a.jpg', 'img/14b.jpg', 'img/14c.jpg', 'img/14d.jpg', 'img/14e.jpg', 'img/14f.jpg', 78),
(15, 'WALK HERO - THE ADJUSTABLE ELASTIC ANKLE BRACE', '1,949', '999', 0, 0, 'If you have ever experienced an ankle injury, you know how painful and physically restricting it can be. But now with the Ankle Support Strap, you can heal current ankle injuries and prevent future ankle related issues!\r\n\r\nThe strap helps to warm your joints while keeping them compact even during high intensity workouts. It allows for comfortable compression and targeted ankle brace support, which gives your heels and toes openings for better blood circulation and air flow.\r\n\r\nStop risking injuries to your ankle and limiting your physical activities! Simply slip on the Adjustable Ankle Support Strap under a sock or right into your shoes and provide support and relief for your ankles all day long!\r\n\r\nFEATURES:\r\n\r\n    Prevents Injuries - Provides strength and stabilization for ankles. Through compression and all-round support, limits unwanted movement and supports weak tendons, preventing injury and re-injury.\r\n    Helps with Recovery - Wearing this strap reduces swelling, pain and recovery time following minor sprains and strains. Relieves stiffness, soreness and muscle fatigue.\r\n    Adjustable and Comfortable All Day - Meaning you can comfortably tailor the fit to your needs and sizing, while the breathable neoprene material fits under most footwear\r\n    Suitable For - Everyday use in regular activities or sports that have an effect on your joints over time, including Basketball, Football, Baseball, Soccer, Golf, Tennis, Running, Weightlifting, Horse Riding, Climbing, etc.', 'img/15a.jpg', 'img/15b.jpg', 'img/15c.jpg', 'img/15d.jpg', 'img/15e.jpg', 'img/15f.jpg', 56);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
