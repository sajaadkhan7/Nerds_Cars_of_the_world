-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 03:40 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28


CREATE DATABASE carrental;
USE carrental;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'Nerds', '2021-11-10 16:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE `tblbrands` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Ford', '2021-06-18 16:24:34', '2021-11-16 01:49:08'),
(2, 'Tesla', '2021-06-18 16:24:50', '2021-11-16 01:49:08'),
(3, 'Hyundai', '2021-02-27 06:36:52', '2021-11-16 01:49:08'),
(4, 'Genesis', '2021-06-18 16:25:13', '2021-11-16 01:49:08'),
(5, 'Mercedes', '2020-06-18 16:25:24', '2021-11-16 01:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `imgUrl` longtext NOT NULL,
  `designation` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`id`, `name`, `UserEmail`, `Testimonial`, `PostingDate`, `status`, `imgUrl`, `designation`) VALUES
(1, 'Mike Y.', 'miley@gmail.com', 'Highly Recommend!\r\n\r\nHighly recommend! Jon went above and beyond to make everything go smoothly! The car is amazing!\r\n', '2017-06-18 07:44:31', 1, 'https://avataaars.io/?avatarStyle=Circle&topType=ShortHairFrizzle&accessoriesType=Kurt&hairColor=BlondeGolden&facialHairType=MoustacheMagnum&facialHairColor=Auburn&clotheType=ShirtScoopNeck&clotheColor=Blue03&eyeType=Hearts&eyebrowType=SadConcernedNatural&mouthType=Default&skinColor=Pale', 'project manager'),
(2, 'Nathan S.', 'nathans@gmail.com', 'Excellent Service!!\r\n\r\nMy experience purchasing a car from Auto Source was excellent. I worked with Jon through the entire purchase. He was fast to answer all my questions and helped out as much as he could. I would highly recommend working with Jon to purchase your next vehicle.\r\n', '2020-06-14 07:33:32', 1, 'https://avataaars.io/?avatarStyle=Circle&topType=ShortHairDreads01&accessoriesType=Blank&hairColor=Brown&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Close&eyebrowType=RaisedExcitedNatural&mouthType=Default&skinColor=Pale', 'web developer'),
(3, 'Gina M.', 'ginam@gmai.com', 'Our experience renting a car couldn\'t have been better - he is extremely knowledgeable about the market (nationally and locally) and the variety of cars he sells. we can confidently say we will be returning to Abjith for future car purchases and highly recommend him to anyone in the market for a new vehicle. ', '2021-03-14 11:33:21', 1, 'https://avataaars.io/?avatarStyle=Circle&topType=LongHairNotTooLong&accessoriesType=Blank&hairColor=Blonde&facialHairType=Blank&clotheType=Overall&clotheColor=Black&eyeType=Close&eyebrowType=RaisedExcitedNatural&mouthType=Smile&skinColor=Pale', 'tester');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE `tblvehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext DEFAULT NULL,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Engine` varchar(45) DEFAULT NULL,
  `DriveTrain` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `InteriorFeatures` longtext DEFAULT NULL,
  `ExteriorFeatures` longtext DEFAULT NULL,
  `Functionality` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Engine`, `DriveTrain`, `color`, `InteriorFeatures`, `ExteriorFeatures`, `Functionality`) VALUES
(1, '2021 Mustang EcoBoost® Fastback', 1, 'Ford Motor Company, commonly known as Ford, is an American multinational automaker that has its main headquarters in Dearborn, Michigan, a suburb of Detroit. ', 250, 'Petrol', 2021, 4, '2021_Mustang_EcoBoost.jpg', '2021_Mustang_EcoBoost_2.tif', '2021_Mustang_EcoBoost_3.png', '2.3L EcoBoost® Engine', 'Rear-Wheel Drive', 'Oxford White', 'AM/FM<br>MP3 Console<br>W ARMREST<br>FLOOR MATS<br>FRONT ILLUMINATED ENTRY MIRROR<br>AUTODIMMING SEATS', 'LED HEADLAMPS<br>LED TAIL LIGHTS<br>DAYTIME RUNNING LIGHTS<br>EXAUST<br>DUAL BRIGHT TIPS', 'A/C<br>MANUAL ADVANCETRAC CONTROL BRAKES<br>ANTI-LOCK<br>POWER 4-WHL DISC<br>ENGINE BLOCK HEATER'),
(2, '2021 Mustang GT Fastback', 1, 'Ford Motor Company, commonly known as Ford, is an American multinational automaker that has its main headquarters in Dearborn, Michigan, a suburb of Detroit. ', 367, 'Petrol', 2021, 4, '2021_Mustang_GT.jpg', '2021_Mustang_GT_2.tif', '2021_Mustang_GT_3.tif', '5.0L Ti-VCT V8 Engine', 'Rear-Wheel Drive', 'Grabber Yellow', 'AM/FM<br> MP3 CONSOLE<br>W/ARMREST FLOOR MATS<br> FRONT ILLUMINATED ENTRY MIRROR<br>AUTODIMMING SEATS<br> CLOTH BUCKET', 'LED HEADLAMPS<br> LED TAIL LIGHTS <br>DAYTIME RUNNING LIGHTS<br> FOG LAMPS<br> EXHAUST<br> DUAL BRIGHT TIPS MIRRORS<br> DUAL POWER', 'A/C<br> MANUAL ADVANCETRAC CONTROL BRAKES<br> ANTI-LOCK BRAKES<br> POWER 4-WHL DISC<br> ELEC PWR ASSIST STEERING'),
(3, 'Tesla Model S', 2, 'Tesla, Inc. is an American electric vehicle and clean energy company based in Palo Alto, California, United States.', 400, 'Electric', 2020, 4, 'Tesla_Model_S.jpg ', 'Tesla_Model_S_2.jpg', 'Tesla_Model_S_3.jpg', '405miles (EPA est.)', 'AWDDual Motor', 'Pearl White Multi-Coat', 'Three Displays With 2200x1300 resolution<br>ultra-bright colors and exceptional responsiveness', 'Tesla designed Model S from the ground-up as an electric vehicle — <br>each component, including batteries<br> motors and exterior aerodynamics are optimized to benefit from one another and create one of the most efficient<br> yet unbelievably powerful vehicles ever built.', 'Navigate on Autopilot<br>Auto Lane Change<br>Autopark Summon <br>Full Self-Driving Computer <br>Traffic Light and Stop Sign Control'),
(4, '2022 ELANTRA HYBRID', 3, '<p><strong>Hyundai</strong> Motor Company was founded in 1967. Currently, the company owns 33.88 percent of Kia Corporation, and also fully owns two marque including its luxury <strong>cars</strong> subsidiary, Genesis Motor, and electric vehicle sub-brand, Ioniq. Those three brands altogether comprise the <strong>Hyundai</strong> Motor Group.</p>\r\n', 350, 'Petrol', 2020, 4, '2022_ELANTRA_HYBRID.jpg ', '2022_ELANTRA_HYBRID_2.jpg', '2022_ELANTRA_HYBRID_3.jpg', '1.6L GDI engine', '4-wheel disc brakes', 'Space Black', '8.0\" touch-screen display with wireless Apple CarPlay™? <br>Android Auto™? <br> AM/FM/MP3/HD audio system with 6 speakers <br> Bluetooth® hands-free phone system with voice recognition <br>Bluelink® connected vehicle system? <br>Premium cloth seating surfaces <br>Heated front seats', '16\" alloy wheels <br> Projection headlights with LED daytime running lights <br> Automatic headlights <br> LED tail lights <br> Body-coloured side mirrors and door handles <br> Heated power-adjustable side mirrors', 'Standard wireless Apple CarPlay™? <br> Android Auto™? smartphone connectivity<br>Android apps connectivity-Music, maps, messages and more — seamlessly and safely through voice commands<br>standard 8.0\" touch-screen display.'),
(5, 'Genesis G80', 4, 'Genesis is a new luxury brand that was created in 2015 as Hyundai\'s upscale spinoff. It ambitiously aims to battle the likes of BMW, Lexus, and Mercedes-Benz. The larger G80 and G90 sedans are too anonymous to truly enter the big leagues, but they do offer good value compared with those German luxury sedans.', 345, 'Petrol', 2020, 4, 'Genesis_G80.jpg', 'Genesis_G80_2.jpg', 'Genesis_G80_3.jpg', '2.5L turbocharged inline 4-cylinder engine (3', 'All-Wheel Drive', 'Porto red', 'Heated Front Bucket Seats<br>8-Way Driver Seat<br>Power Rear Windows<br>Front Cupholder<br>Rear Cupholder<br>Compass<br>Proximity keys for doors', '19” aluminum alloy wheels<br>Power trunk lid with proximity-activated opening<br>Wheels: 18\" x 8.0J Alloy -inc: Medium metallic gray machined finish<br>Tires: P245/50R18 All-Season Aluminum Spare Wheel Compact Spare Tire <br>Mounted Inside Under Cargo Clearcoat Paint', 'Forward Collision Avoidance-Assist w/Pedestrian & Cyclist detection<br>Smart Cruise Control<br>Machine Learning Lane Follow Assist  Lane Keep Assist <br>Highway Driving Assist II<br> Parking Distance Warning (Front & Rear)<br>Genesis Connected Services'),
(6, 'Mercedes-AMG E53', 5, '<p>Mercedes-Benz , commonly referred to as Mercedes, is a<strong> German luxury automotive brand.</strong> Mercedes-Benz and subsidiary Mercedes-Benz AG &ndash; of Daimler AG &ndash; are headquartered in Stuttgart, Baden-W&uuml;rttemberg, Germany. Mercedes-Benz produces consumer luxury vehicles and commercial vehicles</p>\r\n\r\n<p>&nbsp;</p>\r\n', 390, 'Petrol', 2021, 4, 'Mercedes-AMG_E53.jpg', 'Mercedes-AMG_E53_2.jpg', 'Mercedes-AMG_E53_3.jpg', '3.0 L/183, Intercooled Turbo Gas/Electric I-6', 'All Wheel Drive', 'Black', 'Heated Power Front Seats w/Memory 3-position memory<br>Power Tilt/Telescoping Steering Column<br>Power Rear Windows<br>AMG Sport Leather/Metal-Look Steering Wheel w/Auto Tilt-Away', 'Wheels: 19\" AMG Twin 5-Spoke w/Grey Accents -inc: grey accents<Br>Tires: 245/40ZR19 Front & 275/35ZR19 Rear<br>Express Open/Close Sliding And Tilting Glass 1st Row Sunroof <br>Rocker Panel Extensions<br>Body-Colored Power Heated Side Mirrors w/Driver Auto Dimming', 'ESP w/Crosswind Assist Electronic Stability Control (ESC)<br>ABS And Driveline Traction Control<br>Side Impact Beams<br>Blind Spot Assist Blind Spot<br>Aerial View Camera System '),
(7, '2021 Escape SE', 1, 'Ford Motor Company, commonly known as Ford, is an American multinational automaker that has its main headquarters in Dearborn, Michigan, a suburb of Detroit. ', 189, 'Petrol', 2021, 4, '2021_Escape_SE.jpg', '2021_Escape_SE_2.tif', '2021_Escape_SE_3.png', '1.5L EcoBoost® Engine with Auto Start-Stop Te', 'All-Wheel Drive', 'Oxford White', 'AIR CONDITIONING<br>AM/FM STEREO<br>BENCH REAR 60/40<br>ILLUMINATED ENTRY<br>POWER POINTS, FRT/REAR<br>SEATS, HEATED FRONT<br>', 'ACTIVE GRILLE SHUTTERS<br>AUTO HIGH BEAMS<br>EXHAUST, DUAL TIPS<br>HEADLAMPS, HALOGEN<br>LED TAILLAMPS', 'AUTO START/STOP<br>BLIS W/CROSS TRAFFIC<br>ELEC PWR ASSIST STEERING<br>ENGINE BLOCK HEATER<br>FORDPASS CONNECT<br>INTELLIGENT ACCESS<br>POST-COLLISION BRAKING'),
(8, '2021 F-150 LARIAT', 1, 'Ford Motor Company, commonly known as Ford, is an American multinational automaker that has its main headquarters in Dearborn, Michigan, a suburb of Detroit. ', 476, 'Petrol', 2020, 4, '2021_F-150_LARIAT.jpg', '2021_F-150_LARIAT_2.tif', '2021_F-150_LARIAT_3.tif', 'Acoustically laminated windshield', '4x4', 'Rapid Red', '12\" PRODUCTIVITY SCREEN<br>AMBIENT LIGHTING<br>B&O AUDIO SYSTEM<br>LEATHER TRIMMED SEATS<br>MIRROR, AUTODIMMING<br>PEDALS, PWR ADJS W/MEMORY', 'BOXLINKCARGO MANAGEMENT SYSTEM<br>FULLY BOXED STEEL FRAME<br>LED FOG LAMPS<br>MIRRORS, DUAL POWER HEATED FOLDING W/MEM & SIGNAL<br>PWR SLIDING REAR WINDOW W/ DEFROST & PRIVACY TINT', 'A/C, DUAL ZONE ELECTRONIC<br>BLIS W/CROSS TRAFFIC<br>FORDPASS CONNECT<br>INTELL ACCESS W/PUSH START<br>POST-COLLISION BRAKING<br>REAR VIEW CAMERA<br>REMOTE VEHICLE START'),
(9, 'Model Y', 2, 'Tesla, Inc. is an American electric vehicle and clean energy company based in Palo Alto, California, United States.', 440, 'Electric', 2021, 4, 'Tesla_Model_Y.jpg ', 'Model_Y_2.jpg', 'Model_Y_3.jpg', '330miles (EPA est.)', 'AWDDual Motor', 'Solid Black', 'Glass Roof<br>Infrared and ultraviolet light is effectively blocked before entering the cabin<br>', 'Tesla designed Model Y  from the ground-up as an electric vehicle — <br>each component, including batteries<br> motors and exterior aerodynamics are optimized to benefit from one another and create one of the most efficient<br> yet unbelievably powerful vehicles ever built.', 'Navigate on Autopilot<br>Auto Lane Change<br>Autopark Summon <br>Full Self-Driving Computer <br>Traffic Light and Stop Sign Control'),
(10, 'Model 3', 2, 'Tesla, Inc. is an American electric vehicle and clean energy company based in Palo Alto, California, United States.', 470, 'Electric', 2021, 4, 'Tesla_Model_3.jpg', 'Model_3_2.jpg', 'Model_3_3.jpg', '272miles (EPA est.)', 'RWD', 'Deep Blue Metallic', 'Glass Roof<br>Infrared and ultraviolet light is effectively blocked before entering the cabin<br>', 'Tesla designed Model 3 from the ground-up as an electric vehicle — <br>each component, including batteries<br> motors and exterior aerodynamics are optimized to benefit from one another and create one of the most efficient<br> yet unbelievably powerful vehicles ever built.', 'Navigate on Autopilot<br>Auto Lane Change<br>Autopark Summon <br>Full Self-Driving Computer <br>Traffic Light and Stop Sign Control'),
(11, 'Model X', 2, 'Tesla, Inc. is an American electric vehicle and clean energy company based in Palo Alto, California, United States.', 490, 'Electric', 2021, 4, 'Tesla_Model_X.jpg', 'Model_X_2.jpg', 'Model_X_3.jpg', '333 mi Range (EPA est.)', 'Dual Motor All-Wheel Drive', 'Deep Blue Metallic', 'Panoramic Windshield<br>The largest all glass panoramic windshield in production provides a seamless view of the stars and sky above. <br>Optimized solar tinting and an obstruction-free view creates unlimited visibility for the driver and up to six passengers.', 'Tesla designed Model X from the ground-up as an electric vehicle — <br>each component, including batteries<br> motors and exterior aerodynamics are optimized to benefit from one another and create one of the most efficient<br> yet unbelievably powerful vehicles ever built.', 'Navigate on Autopilot<br>Auto Lane Change<br>Autopark Summon <br>Full Self-Driving Computer <br>Traffic Light and Stop Sign Control'),
(12, '2022 Hyundai KONA', 3, '<p><strong>Hyundai</strong> Motor Company was founded in 1967. Currently, the company owns 33.88 percent of Kia Corporation, and also fully owns two marque including its luxury <strong>cars</strong> subsidiary, Genesis Motor, and electric vehicle sub-brand, Ioniq. Those three brands altogether comprise the <strong>Hyundai</strong> Motor Group.</p>\r\n', 360, 'Petrol', 2021, 4, '2022_Hyundai_KONA.jpg', '2022_Hyundai_KONA_2.jpg', '2022_Hyundai_KONA_3.jpg', '2.0L MPI 4-cylinder engine', '4-wheel disc brakes', 'Red', '8.0\" touch-screen display with wireless<br>Apple CarPlay™? and Android Auto™?<br> 4.2\" LCD multi-information cluster display<br>Bluetooth® hands-free phone system<br>Steering wheel-mounted audio, cruise<br>Air conditioning<br> Rearview camera<br>', '16\" aluminum alloy wheels<br>• LED daytime running lights<br>Automatic headlights<br> Heated side mirrors with turn signal<br>Rear windshield wiper<br>Sharkfin antenna', 'Remote keyless entry with alarm<Br> 6 airbags<br>  Tire Pressure Monitoring System<br>Rear Occupant Alert'),
(13, '2022 Hyundai TUCSON', 3, '<p><strong>Hyundai</strong> Motor Company was founded in 1967. Currently, the company owns 33.88 percent of Kia Corporation, and also fully owns two marque including its luxury <strong>cars</strong> subsidiary, Genesis Motor, and electric vehicle sub-brand, Ioniq. Those three brands altogether comprise the <strong>Hyundai</strong> Motor Group.</p>\r\n', 380, 'Petrol', 2021, 4, '2022_Hyundai_TUCSON.jpg', '2022_Hyundai_TUCSON_2.jpg', '2022_Hyundai_TUCSON_3.jpg', '2.5L Smartstream GDI + MPI 4-cylinder engine', 'Front Wheel Drive ', 'Grey', '8.0\" touch-screen display with wireless<br>Apple CarPlay™? and Android Auto™?<br> 4.2\" LCD multi-information cluster display<br>Bluetooth® hands-free phone system<br>Steering wheel-mounted audio, cruise<br>Air conditioning<br> Rearview camera<br> 4.2\" colour LCD cluster display', '17\" alloy wheels<br>LED headlights<br>LED daytime running lights<br>Automatic headlights<br>Acoustically laminated windshield<br> Solar control front glass', 'Forward Collision-Avoidance Assist with<br>Pedestrian and Cyclist Detection (camera-type system)<br> Lane Following Assist<br>Lane Departure Warning with Lane Keeping Assist<br>High Beam Assist<br> Driver Attention Warning<br> Electronic Parking Brake with automatic vehicle hold<br>Rearview Camera'),
(14, '2022 Hyundai ELANTRA N Line', 3, '<p><strong>Hyundai</strong> Motor Company was founded in 1967. Currently, the company owns 33.88 percent of Kia Corporation, and also fully owns two marque including its luxury <strong>cars</strong> subsidiary, Genesis Motor, and electric vehicle sub-brand, Ioniq. Those three brands altogether comprise the <strong>Hyundai</strong> Motor Group.</p>\r\n', 390, 'Petrol', 2021, 4, '2022_Hyundai_ELANTRA_N_Line.jpg', '2022_Hyundai_ELANTRA_N_Line_2.jpg', '2022_Hyundai_ELANTRA_N_Line_3.jpg', 'Smartstream 1.6L Turbocharged GDI engine', '4-wheel disc brakes', 'cyber Grey', ' USB/auxiliary connectivity<br>8.0\" touch-screen display with wireless<br>Apple CarPlay™? and Android Auto™?<br> 4.2\" LCD multi-information cluster display<br>Bluetooth® hands-free phone system<br>Steering wheel-mounted audio, cruise<br>Air conditioning<br> Rearview camera<br> 4.2\" colour LCD cluster display', '18\" alloy wheel<br>• Solar control front and rear glass<br>LED headlights<br>LED daytime running lights<br>Automatic headlights<br>Acoustically laminated windshield<br> Solar control front glass', 'Airbags (6)<br> Rear Occupant Alert<br>Forward Collision-Avoidance Assist with<br>Pedestrian and Cyclist Detection (camera-type system)<br> Lane Following Assist<br>Lane Departure Warning with Lane Keeping Assist<br>High Beam Assist<br> Driver Attention Warning<br> Electronic Parking Brake with automatic vehicle hold<br>Rearview Camera'),
(15, 'Genesis G70', 4, 'Genesis is a new luxury brand that was created in 2015 as Hyundai\'s upscale spinoff. It ambitiously aims to battle the likes of BMW, Lexus, and Mercedes-Benz. The larger G80 and G90 sedans are too anonymous to truly enter the big leagues, but they do offer good value compared with those German luxury sedans.', 566, 'Petrol', 2021, 4, 'Genesis_G70.jpg', 'Genesis_G70_2.jpg', 'Genesis_G70_3.jpg', '3.3 L/204 Twin Turbo Premium Unleaded V-6', 'Rear Wheel Drive', 'Porto black', ' Heated & Ventilated Multi-Adj Front Bucket Seats -inc: adjustable head restraints, 16-way power driver seat w/4-way power lumbar, power side bolster and cushion extension and 12-way power front passenger seat w/4-way power lumbar Ventilated Front Seats 12-Way Driver Seat 8-Way Passenger Seat Front Passenger Seat Walk-In Device 60-40 Folding Bench Front Facing Fold Forward Seatback Rear Seat Power Tilt/Telescoping Steering Column Gauges -inc: Speedometer, Odometer, Engine Coolant Temp, Tachometer, Trip Odometer and Trip Computer Power Rear Windows Genesis Connected Services Selective Service Internet Access Leather/Metal-Look Steering Wheel Front Cupholder Rear Cupholder Front Cigar Lighter(s) Ashtray Proximity Key For Doors And Push Button Start Valet Function Remote Keyless Entry w/Integrated Key Transmitter, 2 Door Curb/Courtesy, Illuminated Entry, Illuminated Ignition Switch and Panic Button Remote Releases -Inc: Smart Trunk Proximity Cargo Access and Power Fuel HomeLink Garage Door Transmitter Cruise Control w/Steering Wheel Controls Distance Pacing w/Traffic Stop-Go Dual Zone Front Automatic Air Conditioning HVAC -inc: Underseat Ducts and Console Ducts Illuminated Locking Glove Box Driver Foot Rest Interior Trim -inc: Aluminum Instrument Panel Insert, Aluminum Door Panel Insert, Aluminum Console Insert, Metal-Look Interior Accents and Leatherette Upholstered Dashboard Full Cloth Headliner Leatherette Door Trim Insert Leather/Chrome Gear Shifter Material Leather Seating Surfaces Day-Night Auto-Dimming Rearview Mirror Driver And Passenger Visor Vanity Mirrors w/Driver And Passenger Illumination, Driver And Passenger Auxiliary Mirror Full Floor Console w/Covered Storage, Mini Overhead Console w/Storage and 1 12V DC Power Outlet Front And Rear Map Lights Fade-To-Off Interior Lighting Full Carpet Floor Covering -inc: Carpet Front And Rear Floor Mats Carpet Floor Trim, Carpet Trunk Lid/Rear Cargo Door Trim and Carpet Mat Cargo Area Concealed Storage Cargo Net Cargo Space Lights FOB Controls -inc: Cargo Access Smart Device Remote Engine Start Tracker System Integrated Memory System (IMS) -inc: memory for driver seat, outside mirrors and steering column, Driver / Passenger And Rear Door Bins Power 1st Row Windows w/Front And Rear 1-Touch Up/Down Delayed Accessory Power Power Door Locks w/Autolock Feature Systems Monitor Trip Computer Outside Temp Gauge Digital/Analog Appearance Seats w/Leatherette Back Material Manual Anti-Whiplash w/Tilt Front Head Restraints and Manual Adjustable Rear Head Restraints Front Center Armrest and Rear Center Armrest 2 Seatback Storage Pockets Perimeter Alarm Engine Immobilizer 1 12V DC Power Outlet Air Filtration', ' Wheels: 19\" x 8.0J Fr & 19\" x 8.5J Rr Alloy Tires: P225/40R19 Fr & P255/35R19 Rr Summer Aluminum Spare Wheel Compact Spare Tire Mounted Inside Under Cargo Clearcoat Paint Express Open/Close Sliding And Tilting Glass 1st Row Sunroof w/Power Sunshade Body-Colored Front Bumper w/Black Bumper Insert Body-Colored Rear Bumper w/Black Bumper Insert Chrome Side Windows Trim and Black Front Windshield Trim Chrome Door Handles Body-Colored Power w/Tilt Down Heated Auto Dimming Side Mirrors w/Power Folding and Turn Signal Indicator Fixed Rear Window w/Defroster Light Tinted Glass Front Windshield -inc: Sun Visor Strip Speed Sensitive Rain Detecting Variable Intermittent Wipers Galvanized Steel/Aluminum Panels Chrome Grille Trunk Rear Cargo Access LED Brakelights Headlights-Automatic Highbeams Perimeter/Approach Lights Auto On/Off Projector Beam Led Low/High Beam Daytime Running Auto-Leveling Directionally Adaptive Auto High-Beam Headlamps w/Delay-Off Laminated Glass', ' Electronic Stability Control (ESC) ABS And Driveline Traction Control Side Impact Beams Dual Stage Driver And Passenger Seat-Mounted Side Airbags Genesis Connected Services Emergency Sos Blind Spot Detection Blind Spot Forward Collision Mitigation and Rear Cross Traffic Alert Lane Keep Assist Lane Keeping Assist Lane Keep Assist Lane Departure Warning Collision Mitigation-Front '),
(16, 'Genesis G90', 4, 'Genesis is a new luxury brand that was created in 2015 as Hyundai\'s upscale spinoff. It ambitiously aims to battle the likes of BMW, Lexus, and Mercedes-Benz. The larger G80 and G90 sedans are too anonymous to truly enter the big leagues, but they do offer good value compared with those German luxury sedans.', 500, 'petrol', 2021, 4, 'Genesis_G90.jpg', 'Genesis_G90_2.jpg', 'Genesis_G90_3.jpg', '5.0L GDI DOHC 32-Valve V8 D-CVVT ', 'Rear Wheel Drive', NULL, ' Heated & Ventilated Front Bucket Seats -inc: 22-way power driver seat w/power lumbar, shoulder and bolster adjuster, 16-way power front passenger w/power lumbar, shoulder and bolster adjuster, Integrated Memory System (IMS) for front seats, anti-whiplash front head restraints w/power controls and driver seat power cushion extension\r\n14-Way Driver Seat\r\n2-Way Power Passenger Seat -inc: Power Seatback Side Bolster Support\r\nSplit-Bench Front Facing Heated Power Reclining Ventilated, Rear Seat w/Power 4-Way Lumbar, Power Cushion Tilt and Power Side Bolster Support\r\nPower Tilt/Telescoping Steering Column\r\nGauges -inc: Speedometer, Odometer, Engine Coolant Temp, Tachometer, Trip Odometer and Trip Computer\r\nPower Rear Windows and w/Power Sun Blinds\r\nGenesis Connected Services Selective Service Internet Access\r\nHeated Leather Steering Wheel w/Auto Tilt-Away\r\nFront Cupholder\r\nRear Cupholder\r\nCompass\r\nProximity Key For Doors And Push Button Start\r\nValet Function\r\nRemote Keyless Entry w/Integrated Key Transmitter, 4 Door Curb/Courtesy, Illuminated Entry, Illuminated Ignition Switch and Panic Button\r\nRemote Releases -Inc: Smart Trunk Proximity Cargo Access and Power Fuel\r\nHomeLink Garage Door Transmitter\r\nCruise Control w/Steering Wheel Controls\r\nDistance Pacing w/Traffic Stop-Go\r\nDual Zone Front Automatic Air Conditioning\r\nRear HVAC w/Separate Controls\r\nHVAC -inc: Underseat Ducts, Headliner/Pillar Ducts and Console Ducts\r\nIlluminated Locking Glove Box\r\nDriver Foot Rest\r\nInterior Trim -inc: Aluminum/Genuine Wood Instrument Panel Insert, Aluminum/Genuine Wood Door Panel Insert, Aluminum/Genuine Wood Console Insert, Chrome/Metal-Look Interior Accents and Leatherette Upholstered Dashboard\r\nFull Simulated Suede Headliner\r\nLeather Door Trim Insert\r\nLeather/Aluminum Gear Shifter Material\r\nNappa Leather Seating Surfaces -inc: G-Matrix pattern quilting\r\nDay-Night Auto-Dimming Rearview Mirror\r\nDriver And Passenger Visor Vanity Mirrors w/Driver And Passenger Illumination, Driver And Passenger Auxiliary Mirror and Illuminated Rear Visor Mirror\r\nFull Floor Console w/Covered Storage, Mini Overhead Console w/Storage and 5 12V DC Power Outlets\r\nFront And Rear Map Lights\r\nFade-To-Off Interior Lighting\r\nFull Carpet Floor Covering -inc: Carpet Front And Rear Floor Mats\r\nCarpet Floor Trim, Carpet Trunk Lid/Rear Cargo Door Trim and Carpet Mat\r\nTrunk/Hatch Auto-Latch\r\nCargo Net\r\nCargo Features -inc: Spare Tire Mobility Kit\r\nCargo Space Lights\r\nMemory Settings -inc: Door Mirrors, Steering Wheel and Head Restraints\r\nFOB Controls -inc: Cargo Access\r\nSmart Device Remote Engine Start', '\r\nWheels: 19\" x 8.5J Fr & 19\" x 9.5J Rr Chrome Alloy\r\nTires: 245/45R19 Front & 275/40R19 Rear\r\nWheels w/Chrome Accents\r\nSpare Tire Mobility Kit\r\nAluminum Spare Wheel\r\nCompact Spare Tire Mounted Inside Under Cargo\r\nClearcoat Paint\r\nExpress Open/Close Sliding And Tilting Glass 1st Row Sunroof w/Sunshade\r\nBody-Colored Front Bumper w/Chrome Bumper Insert\r\nBody-Colored Rear Bumper w/Chrome Bumper Insert\r\nChrome Bodyside Insert\r\nChrome Side Windows Trim and Black Front Windshield Trim\r\nChrome Door Handles\r\nBody-Colored Power w/Tilt Down Heated Auto Dimming Side Mirrors w/Power Folding and Turn Signal Indicator\r\nFixed Rear Window w/Defroster and Power Blind\r\nLight Tinted Glass\r\nSpeed Sensitive Rain Detecting Variable Intermittent Wipers w/Heated Wiper Park\r\nFully Galvanized Steel Panels\r\nChrome Grille\r\nPower Open And Close Trunk Rear Cargo Access\r\nAuto On/Off Projector Beam Led Low/High Beam Daytime Running Auto-Leveling Directionally Adaptive Auto High-Beam Headlamps w/Delay-Off\r\nPerimeter/Approach Lights\r\nLED Brakelights\r\nHeadlights-Automatic Highbeams\r\nDoor Auto-Latch\r\nLaminated Glass', ' Electronic Stability Control (ESC)\r\nABS And Driveline Traction Control\r\nSide Impact Beams\r\nDual Stage Driver And Passenger Seat-Mounted Side Airbags\r\nGenesis Connected Services Emergency Sos\r\nParking Distance Warning Front And Rear Parking Sensors\r\nBlind-Spot Collision-Avoidance Assist (BCA) Blind Spot\r\nForward Collision-Avoidance Assist\r\nLane Keep Assist (LKA) Lane Keeping Assist\r\nLane Keep Assist (LKA) Lane Departure Warning\r\nAerial View Camera System\r\nCollision Mitigation-Front\r\nDriver Monitoring-Alert\r\nCollision Mitigation-Rear\r\nTire Specific Low Tire Pressure Warning\r\nDual Stage Driver And Passenger Front Airbags '),
(17, 'Genesis GV70', 4, 'Genesis is a new luxury brand that was created in 2015 as Hyundai\'s upscale spinoff. It ambitiously aims to battle the likes of BMW, Lexus, and Mercedes-Benz. The larger G80 and G90 sedans are too anonymous to truly enter the big leagues, but they do offer good value compared with those German luxury sedans.', 450, 'petrol', 2021, 4, 'Genesis_GV70.jpg', 'Genesis_GV70_2.jpg', 'Genesis_GV70_3.jpg', '2.5 L/152 Intercooled Turbo Premium Unleaded ', 'Full-Time All-Wheel', 'black', ' Heated Front Bucket Seats -inc: 12-way power driver seat w/4-way power lumbar, 8-way power front passenger seat and adjustable head restraints\r\nDriver Seat\r\nPassenger Seat\r\n40-20-40 Folding Bench Front Facing Fold Forward Seatback Rear Seat\r\nManual Tilt/Telescoping Steering Column\r\nGauges -inc: Speedometer, Odometer, Engine Coolant Temp, Tachometer, Trip Odometer and Trip Computer\r\nPower Rear Windows\r\nLeather/Metal-Look Steering Wheel\r\nFront Cupholder\r\nRear Cupholder\r\nFront Cigar Lighter(s)\r\nAshtray\r\nProximity Key For Doors And Push Button Start\r\nValet Function\r\nRemote Keyless Entry w/Integrated Key Transmitter, 2 Door Curb/Courtesy, Illuminated Entry, Illuminated Ignition Switch and Panic Button ', ' Wheels: 18\" Real Steel Gray Alloy\r\nTires: P235/60R18 AS\r\nSteel Spare Wheel\r\nCompact Spare Tire Mounted Inside Under Cargo\r\nClearcoat Paint\r\nBody-Colored Front Bumper w/Black Bumper Insert\r\nBody-Colored Rear Bumper w/Black Bumper Insert\r\nChrome Side Windows Trim and Black Front Windshield Trim\r\nBody-Colored Door Handles\r\nBody-Colored Power w/Tilt Down Heated Side Mirrors w/Manual Folding and Turn Signal Indicator\r\nFixed Rear Window w/Defroster\r\nDeep Tinted Glass\r\nSpeed Sensitive Rain Detecting Variable Intermittent Wipers\r\nFront Windshield -inc: Sun Visor Strip\r\nGalvanized Steel/Aluminum Panels ', ' Cruise Control-Steering Assist\r\nElectronic Stability Control (ESC)\r\nABS And Driveline Traction Control\r\nSide Impact Beams\r\nDual Stage Driver And Passenger Seat-Mounted Side Airbags\r\nRear Parking Sensors\r\nBlind-Spot Collision-Avoidance Assist (BCA) Blind Spot\r\nForward Collision-Avoidance Assist\r\nLane Following/Lane Keep Assist (LFA w.LKA) Lane Keeping Assist\r\nLane Following/Lane Keep Assist (LFA w.LKA) Lane Departure Warning '),
(18, 'Mercedes-AMG GT', 5, '<p>Mercedes-Benz , commonly referred to as Mercedes, is a<strong> German luxury automotive brand.</strong> Mercedes-Benz and subsidiary Mercedes-Benz AG &ndash; of Daimler AG &ndash; are headquartered in Stuttgart, Baden-W&uuml;rttemberg, Germany. Mercedes-Benz produces consumer luxury vehicles and commercial vehicles</p>\r\n', 440, 'petrol', 2021, 4, 'Mercedes-AMG_GT.jpg', 'Mercedes-AMG_GT_2.jpg', 'Mercedes-AMG_GT_3.jpg', '4.0 L/243, Twin Turbo Premium Unleaded V-8', 'Rear Wheel Drive', 'black', ' Power Heated AMG Performance Seats w/Memory\r\nFront Seats w/Power 4-Way Driver Lumbar\r\n10-Way Driver Seat -inc: Power 4-Way Lumbar Support\r\nPower Driver Seat & Steering Column w/Memory\r\nPower Passenger Seat w/Memory\r\n10-Way Passenger Seat -inc: Power 4-Way Lumbar Support\r\nPower Tilt/Telescoping Steering Column\r\nGauges -inc: Speedometer, Odometer, Tachometer, Turbo/Supercharger Boost, Oil Level, Oil Temperature, Transmission Fluid Temp, Trip Odometer and Trip Computer\r\nFixed Rear Windows\r\nMercedes me connect Selective Service Internet Access\r\nAMG Sport Nappa Leather Steering Wheel w/Auto Tilt-Away\r\nFront Cupholder\r\nValet Function\r\nPower Fuel Flap Locking Type\r\nRemote Keyless Entry w/Integrated Key Transmitter, Illuminated Entry, Illuminated Ignition Switch and Panic Button\r\nRemote Releases -Inc: Power Cargo Access\r\nHomeLink Garage Door Transmitter\r\nCruise Control\r\nDistance Pacing w/Traffic Stop-Go\r\nVoice Activated Dual Zone Front Automatic Air Conditioning\r\nHVAC -inc: Residual Heat Recirculation\r\nIlluminated Locking Glove Box\r\nDriver Foot Rest', ' Wheels: 19\" AMG Twin 5-Spoke Light Alloy\r\nTires: 255/35R19 Fr & 295/30R19 Rr\r\nSpare Tire Mobility Kit\r\nHigh-Performance Summer Tires\r\nClearcoat Paint\r\nBody-Colored Front Bumper w/Chrome Bumper Insert\r\nBody-Colored Rear Bumper w/Black Rub Strip/Fascia Accent\r\nBlack Side Windows Trim\r\nBody-Colored Door Handles\r\nBody-Colored Power Heated Auto Dimming Side Mirrors w/Power Folding and Turn Signal Indicator\r\nFixed Rear Window w/Defroster\r\nLight Tinted Glass\r\nRain Detecting Variable Intermittent Wipers\r\nGalvanized Steel/Aluminum Panels\r\nPower Spoiler\r\nChrome Grille ', ' Electronic Stability Control (ESC)\r\nABS And Driveline Traction Control\r\nSide Impact Beams\r\nDual Stage Driver And Passenger Seat-Mounted Side Airbags\r\nMercedes me connect Emergency Sos\r\nPARKTRONIC Automated Parking Sensors\r\nPRE-SAFE\r\nCollision Mitigation-Front\r\nDriver Monitoring-Alert\r\nTire Specific Low Tire Pressure Warning\r\nDual Stage Driver And Passenger Front Airbags\r\nCurtain 1st Row Airbags\r\nAirbag Occupancy Sensor\r\nDriver And Passenger Knee Airbag\r\nOutboard Front Lap And Shoulder Safety Belts -inc: Pretensioners\r\nBack-Up Camera '),
(19, 'Mercedes-Maybach S650', 5, '<p>Mercedes-Benz , commonly referred to as Mercedes, is a<strong> German luxury automotive brand.</strong> Mercedes-Benz and subsidiary Mercedes-Benz AG &ndash; of Daimler AG &ndash; are headquartered in Stuttgart, Baden-W&uuml;rttemberg, Germany. Mercedes-Benz produces consumer luxury vehicles and commercial vehicles</p>\r\n', 450, 'petrol', 2021, 4, 'Mercedes-Maybach_S650.jpg', 'Mercedes-Maybach_S650_2.jpg', 'Mercedes-Maybach_S650_3.jpg', '4.0 L/243 Twin Turbo Premium Unleaded V-8', 'All Wheel Drive', 'black', ' Active Multicontour Front Seats -inc: massage function, Front Heated Seats PLUS\r\nActive Ventilated Front Seats\r\n14-Way Driver Seat\r\n14-Way Passenger Seat\r\nSplit-Bench Front Facing Heated Power Reclining Ventilated, Rear Seat w/Massaging Lumbar, Power Fore/Aft, Power Side Bolster Support and 1 Foot/Leg Rest\r\nPower Tilt/Telescoping Steering Column\r\nGauges -inc: Speedometer, Odometer, Engine Coolant Temp, Tachometer, Trip Odometer and Trip Computer\r\nPower Rear Windows and w/Power Sun Blinds\r\nMobile Hotspot Internet Access\r\nHeated Nappa Leather/Metal-Look Steering Wheel w/Auto Tilt-Away\r\nFront Cupholder\r\nRear Cupholder\r\nFront And Rear Cigar Lighter(s)\r\nAshtray\r\n3 12V DC Power Outlets\r\nCompass\r\nProximity Key For Doors And Push Button Start\r\nValet Function\r\nPower Fuel Flap Locking Type\r\nRemote Keyless Entry w/Integrated Key Transmitter, 4 Door Curb/Courtesy, Illuminated Entry, Illuminated Ignition Switch and Panic Button ', ' Wheels: 20\" Multispoke\r\nTires: 245/40R20 Fr & 275/35R20 Rr HP Run Flat\r\nWheels w/Silver Accents\r\nClearcoat Paint\r\nExpress Open/Close Tilting Glass Panorama 1st Row Sunroof w/Power Sunshade\r\nFixed Glass 2nd Row Sunroof w/Power Sunshade\r\nBody-Colored Rear Bumper w/Chrome Bumper Insert\r\nBody-Colored Front Bumper\r\nChrome Bodyside Insert\r\nChrome Side Windows Trim and Black Front Windshield Trim\r\nChrome Door Handles\r\nBody-Colored Power Heated Auto Dimming Side Mirrors w/Power Folding and Turn Signal Indicator\r\nFixed Rear Window w/Defroster and Power Blind\r\nLight Tinted Glass\r\nRain Detecting Variable Intermittent Wipers w/Heated Reservoir\r\nFront Windshield -inc: Electrically Heated Glass\r\nAluminum Panels\r\nChrome Grille\r\nPower Open And Close Trunk Rear Cargo Access\r\nProgrammable Projector Beam Led Low/High Beam Directionally Adaptive Auto High-Beam Daytime Running Lights Preference Setting Headlamps w/Delay-Off\r\nRear Fog Lamps\r\nCornering Lights\r\nPerimeter/Approach Lights ', ' Cruise Control-Steering Assist\r\nElectronic Stability Control (ESC)\r\nABS And Driveline Traction Control\r\nSide Impact Beams\r\nDual Stage Driver And Passenger Seat-Mounted Side Airbags\r\neCall Emergency System Emergency Sos\r\nPARKTRONIC w/Active Parking Assist Automated Parking Sensors\r\nCollision Prevention Assist Plus\r\nActive Lane Keeping Assist Lane Keeping Assist\r\nActive Lane Keeping Assist Lane Departure Warning\r\nCollision Mitigation-Front\r\nDriver Monitoring-Alert\r\nAerial View Camera System\r\nCollision Mitigation-Rear\r\nActive Blind Spot Assist Blind Spot\r\nNight View Assist PLUS Night Vision\r\nTire Specific Low Tire Pressure Warning\r\nDual Stage Driver And Passenger Front Airbags\r\nCurtain 1st And 2nd Row Airbags\r\nAirbag Occupancy Sensor\r\nDriver Knee Airbag and Rear Side-Impact Airbag\r\nChild Seat Sensor and Rear Child Safety Locks '),
(20, 'Mercedes E 450 E 450 RWD Cabriolet', 5, '<p>Mercedes-Benz , commonly referred to as Mercedes, is a<strong> German luxury automotive brand.</strong> Mercedes-Benz and subsidiary Mercedes-Benz AG &ndash; of Daimler AG &ndash; are headquartered in Stuttgart, Baden-W&uuml;rttemberg, Germany. Mercedes-Benz produces consumer luxury vehicles and commercial vehicles</p>\r\n', 454, 'petrol', 2021, 4, 'Mercedes_E_450_RWD_Cabriolet.jpg', 'Mercedes_E_450_RWD_Cabriolet_2.jpg', 'Mercedes_E_450_RWD_Cabriolet_3.jpg', '3.0 L/183 Intercooled Turbo Gas/Electric I-6', 'Rear Wheel Drive', 'red', ' Heated Power Front Seats w/Memory\r\nHeated Front Seats\r\n10-Way Driver Seat\r\n10-Way Passenger Seat\r\n50-50 Folding Split-Bench Front Facing Fold Forward Seatback Rear Seat\r\nPower Tilt/Telescoping Steering Column\r\nGauges -inc: Speedometer, Odometer, Engine Coolant Temp, Tachometer, Power/Regen, Trip Odometer and Trip Computer\r\nPower Rear Windows\r\nLeather/Metal-Look Steering Wheel w/Auto Tilt-Away\r\nFront Cupholder\r\nRear Cupholder\r\nFront Cigar Lighter(s)\r\nAshtray\r\nProximity Key For Doors And Push Button Start\r\nValet Function\r\nPower Fuel Flap Locking Type\r\nRemote Keyless Entry w/Integrated Key Transmitter, 2 Door Curb/Courtesy, Illuminated Entry, Illuminated Ignition Switch and Panic Button\r\nRemote Releases -Inc: Hands-Free Access Proximity Cargo Access\r\nHomeLink Garage Door Transmitter\r\nCruise Control\r\nDual Zone Front Automatic Air Conditioning\r\nHVAC -inc: Underseat Ducts, Residual Heat Recirculation, Console Ducts and Supplemental Heater\r\nIlluminated Locking Glove Box\r\nDriver Foot Rest\r\nFull Cloth Headliner\r\nLeatherette Door Trim Insert\r\nLeather/Metal-Look Gear Shifter Material\r\nInterior Trim -inc: Chrome Interior Accents and Leatherette Upholstered Dashboard\r\nCenter Console in Light Brown Sen Wood\r\nLeather Upholstery\r\nDay-Night Auto-Dimming Rearview Mirror\r\nDriver And Passenger Visor Vanity Mirrors w/Driver And Passenger Illumination\r\nFull Floor Console w/Covered Storage, Mini Overhead Console, Rear Console w/Storage and 3 12V DC Power Outlets\r\nFade-To-Off Interior Lighting\r\nFront Map Lights\r\nFull Carpet Floor Covering -inc: Carpet Front And Rear Floor Mats\r\nCarpet Floor Trim and Carpet Trunk Lid/Rear Cargo Door Trim\r\nTrunk/Hatch Auto-Latch\r\nCargo Space Lights ', '\r\nWheels: 18\" Twin 5-Spoke\r\nTires: 245/45R18 Front & 275/40R18 Rear\r\nBlack Soft Top\r\nHigh-Performance Tires\r\nExtended Mobility Tires\r\nClearcoat Paint\r\nBody-Colored Rear Bumper w/Black Rub Strip/Fascia Accent\r\nBody-Colored Front Bumper w/Metal-Look Bumper Insert\r\nChrome Side Windows Trim and Black Front Windshield Trim\r\nBody-Colored Door Handles\r\nBody-Colored Power Heated Side Mirrors w/Driver Auto Dimming, Power Folding and Turn Signal Indicator\r\nFixed Rear Window w/Defroster\r\nLight Tinted Glass\r\nRain Detecting Variable Intermittent Wipers\r\nGalvanized Steel/Aluminum Panels\r\nChrome Grille\r\nConvertible w/Lining, Glass Rear Window, Automatic Roll-Over Protection and Power Wind Blocker\r\nPower Open And Close Trunk Rear Cargo Access\r\nAuto On/Off Projector Beam Led Low/High Beam Daytime Running Headlamps w/Delay-Off\r\nPerimeter/Approach Lights\r\nLED Brakelights', ' ESP w/Crosswind Assist Electronic Stability Control (ESC)\r\nABS And Driveline Traction Control\r\nSide Impact Beams\r\nDual Stage Driver And Passenger Seat-Mounted Side Airbags\r\nMercedes me connect Emergency Sos\r\nBlind Spot Assist Blind Spot\r\nActive Brake Assist with Autonomous Emergency Braking\r\nCollision Mitigation-Front\r\nDriver Monitoring-Alert\r\nPARKTRONIC w/Active Parking Assist Automated Parking Sensors\r\nAerial View Camera System\r\nTire Specific Low Tire Pressure Warning\r\nDual Stage Driver And Passenger Front Airbags\r\nCurtain 1st And 2nd Row Airbags\r\nAirbag Occupancy Sensor\r\nFirst Aid Kit\r\nOutboard Front Lap And Shoulder Safety Belts -inc: Pretensioners\r\nDriver Knee Airbag and Rear Side-Impact Airbag\r\nSurround View Back-Up Camera\r\nFront Camera\r\nLeft Side Camera ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrands`
--
ALTER TABLE `tblbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblbrands`
--
ALTER TABLE `tblbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
