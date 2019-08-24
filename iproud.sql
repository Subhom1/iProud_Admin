-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2019 at 10:29 AM
-- Server version: 8.0.16
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iproud`
--

-- --------------------------------------------------------

--
-- Table structure for table `activityimages`
--

CREATE TABLE `activityimages` (
  `idactivityimages` int(11) NOT NULL,
  `activityidfk` int(11) DEFAULT NULL,
  `imageurl` longtext,
  `uploadedby` int(11) DEFAULT NULL,
  `uploadedon` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `idchat` int(11) NOT NULL,
  `threadidfk` int(11) DEFAULT NULL,
  `localid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senderid` int(11) DEFAULT NULL,
  `receiverid` int(11) DEFAULT NULL,
  `chattype` enum('text','image','sticker') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `isdelivered` int(11) NOT NULL DEFAULT '0',
  `iscoachread` int(11) NOT NULL DEFAULT '0',
  `timestamp` double DEFAULT NULL,
  `addedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`idchat`, `threadidfk`, `localid`, `senderid`, `receiverid`, `chattype`, `message`, `isdelivered`, `iscoachread`, `timestamp`) VALUES
(625, 1, '1556468279697.788267100001', 17, 42, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1556468279696),
(626, 1, '1556468279699.512493100001', 17, 42, 'sticker', 'way-to-go', 1, 1, 1556468279699),
(627, 1, '1556468279700.792591100001', 17, 42, 'text', 'Ask me anything you would like', 1, 1, 1556468279700),
(628, 1, '1556468293420.790087', 42, 17, 'text', 'Hello.', 1, 1, 1556468293420),
(629, 1, '1556520188041.464717', 42, 17, 'text', 'Test', 1, 1, 1556520188042),
(630, 1, '1556521184524.913099', 17, 42, 'text', 'Hey Hussain', 1, 1, 1556521184524),
(631, 1, '1556521290274.795833', 17, 42, 'sticker', 'well-done', 1, 1, 1556521290275),
(632, 1, '1556521295908.559783', 17, 42, 'sticker', 'work-for-it', 1, 1, 1556521295909),
(633, 3, '1556524647740.755656100001', 17, 39, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1556524647739),
(634, 3, '1556524647741.862685100001', 17, 39, 'sticker', 'way-to-go', 1, 1, 1556524647741),
(635, 3, '1556524647742.222870100001', 17, 39, 'text', 'Ask me anything you would like', 1, 1, 1556524647742),
(636, 3, '1556524696829.490531', 39, 17, 'text', 'What should i do?', 1, 0, 1556524696829),
(637, 4, '1556719592382.33678100001', 17, 40, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1556719592373),
(638, 4, '1556719592389.19131100001', 17, 40, 'sticker', 'way-to-go', 1, 1, 1556719592388),
(639, 4, '1556719592390.949708100001', 17, 40, 'text', 'Ask me anything you would like', 1, 1, 1556719592390),
(640, 5, '1556876263670.192234100001', 17, 51, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1556876263669),
(641, 5, '1556876263674.457399100001', 17, 51, 'sticker', 'way-to-go', 1, 1, 1556876263674),
(642, 5, '1556876263675.977887100001', 17, 51, 'text', 'Ask me anything you would like', 1, 1, 1556876263675),
(643, 6, '1556964483210.207640100001', 17, 50, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1556964483204),
(644, 6, '1556964483220.950798100001', 17, 50, 'sticker', 'way-to-go', 1, 1, 1556964483220),
(645, 6, '1556964483224.127146100001', 17, 50, 'text', 'Ask me anything you would like', 1, 1, 1556964483223),
(646, 6, '1556964521069.164956', 50, 17, 'text', 'Da er jeg klar! ????', 1, 1, 1556964521069),
(647, 7, '1557051510934.410993100001', 17, 46, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1557051510933),
(648, 7, '1557051510935.743461100001', 17, 46, 'sticker', 'way-to-go', 1, 1, 1557051510935),
(649, 7, '1557051510936.953852100001', 17, 46, 'text', 'Ask me anything you would like', 1, 1, 1557051510936),
(650, 7, '1557051547057.225218', 46, 17, 'text', 'Hei :-) Da har jeg lastet opp og er klar :-) Øyvind', 1, 1, 1557051547057),
(651, 8, '1557055772635.484082100001', 17, 48, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1557055772634),
(652, 8, '1557055772635.803662100001', 17, 48, 'sticker', 'way-to-go', 1, 1, 1557055772635),
(653, 8, '1557055772635.345888100001', 17, 48, 'text', 'Ask me anything you would like', 1, 1, 1557055772635),
(654, 8, '1557055802022.248500', 48, 17, 'text', 'Hyggelig å være. Litt usikker på hva jeg gjør videre', 1, 1, 1557055802022),
(655, 6, '1557087159941.395298', 50, 17, 'text', 'Hei , nå har jeg installert appen. ????hvordan etablerer jeg profilen min ?', 1, 1, 1557087159942),
(656, 8, '1557131232430.865060', 48, 17, 'text', 'Spilte fotball igår, men får ikke lagt inn aktiviteten', 1, 1, 1557131232430),
(657, 5, '1557136125727.439462', 17, 51, 'sticker', 'bravo', 1, 1, 1557136125727),
(658, 5, '1557136189038.564422', 17, 51, 'text', 'For last week activities performace. Keep up the good work!', 1, 1, 1557136189038),
(659, 5, '1557136377709.211267', 17, 51, 'text', 'I am here for you do not hesitate to ask anything within Wellness and positive Lifestyle', 1, 1, 1557136377709),
(660, 7, '1557136453400.539008', 17, 46, 'sticker', 'cool', 1, 1, 1557136453400),
(661, 7, '1557136553707.803816', 17, 46, 'text', 'Fint Øyvind! Ser frem til å svar3 på spørsmål du måtte ha og anerkjenne din innsats????????????', 1, 1, 1557136553707),
(662, 8, '1557150650293.1091334', 17, 48, 'text', 'Hei, moro å se at du er i gang. Har du noe spørsmål eller ting du lurer på angående trening og positiv livsstil så vit at jeg er her for deg.', 1, 1, 1557150650293),
(663, 8, '1557150739678.225603', 17, 48, 'text', 'Å legge inn historiske treninger/ aktiviteter er ikke mulig i dagens løsning men vi takker for innspill og sørger for at det blir mulig i neste versjon????????', 1, 1, 1557150739678),
(664, 8, '1557150763927.1076990', 17, 48, 'text', 'Hva er målet ditt for uken om jeg kan spørre?', 1, 1, 1557150763927),
(665, 1, '1557150949284.353552', 17, 42, 'text', 'Hi Hussain, I can see that you started your journey to become more healthier but last week it was only 1 small activity? What is your main goal?', 0, 1, 1557150949285),
(666, 6, '1557151066110.266449', 17, 50, 'text', 'Hei, du etablerte din profil når du svarte på spørsmål på vei inn. Jeg kan hjelpe deg å sette mål, svare på spørsmål på ting du lurer på rundt trening og fysisk aktivitet????????', 1, 1, 1557151066111),
(667, 6, '1557151326388.1041110', 17, 50, 'text', 'Du setter igang aktiviteter/treninger ved å trykke på + tegnet, velg fra nedtrekksmenyen, lag deg et navn på aktiviteten, start stoppeklokka og stopp når økta er ferdig. Du sparer poeng og får anerkjennelse og råd/tips min din coach????', 1, 1, 1557151326389),
(668, 6, '1557173073286.191959', 50, 17, 'text', 'Ja', 1, 1, 1557173073287),
(669, 9, '1557174020929.433429100001', 17, 43, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1557174020928),
(670, 9, '1557174020931.323401100001', 17, 43, 'sticker', 'way-to-go', 1, 1, 1557174020931),
(671, 9, '1557174020932.667906100001', 17, 43, 'text', 'Ask me anything you would like', 1, 1, 1557174020932),
(672, 9, '1557174041072.761585', 43, 17, 'text', 'Hei', 1, 1, 1557174041072),
(673, 9, '1557174528059.660188', 43, 17, 'text', 'Skulle ta noen Pushups, hvorfor kan jeg ikke bare ta et minutt?', 1, 1, 1557174528059),
(674, 9, '1557176604400.639211', 17, 43, 'text', 'Hei, sett igang klokka og minimum tid er 5 min total aktivitet for å oppnå poeng????', 1, 1, 1557176604400),
(675, 7, '1557176809808.668453', 17, 46, 'text', 'Gratulerer med første registrerte aktivitet????????. Det er bare mandag og mange gode treningsdager i vente denne uke..Stå på!', 1, 1, 1557176809808),
(676, 7, '1557208282396.613613', 46, 17, 'text', 'Jeg synes det er en veldig fin layout på siden Tom.', 1, 1, 1557208282396),
(677, 7, '1557209508430.377332', 17, 46, 'sticker', 'awesome', 1, 1, 1557209508431),
(678, 9, '1557209532823.799656', 43, 17, 'text', '5 minutter! Ok skal kjøre på. Takk for hjelpen', 1, 1, 1557209532823),
(679, 7, '1557209696235.1018224', 17, 46, 'text', 'Dette er kun første versjon????. Det vil skje mye både på design og funksjonalitet i de neste versjoner. Er du klar for å legge inn aktiviteter som fysisk aktivitetspartner( hverdagstreneren) i neste versjon?', 1, 1, 1557209696235),
(680, 9, '1557209739138.733407', 17, 43, 'sticker', 'bravo', 1, 1, 1557209739138),
(681, 6, '1557242346268.308470', 17, 50, 'sticker', 'good-work', 1, 1, 1557242346269),
(682, 6, '1557242461108.270464', 17, 50, 'text', 'Hei! Du har vært aktiv 2 dager på rad. Stå på videre denne uken. Ikke nøl med å spørre meg om ting. Hilsen din iProud Coach', 1, 1, 1557242461108),
(683, 8, '1557253553179.147742', 48, 17, 'text', 'Minst 2 løpeturer pluss styrke', 1, 1, 1557253553179),
(684, 9, '1557254196389.336587', 43, 17, 'text', 'Bør det være en mulighet for Edit fullførte aktiviteter? Hilsen Arne', 1, 1, 1557254196389),
(685, 10, '1557256272717.803240100001', 17, 44, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1557256272717),
(686, 10, '1557256272719.31090100001', 17, 44, 'sticker', 'way-to-go', 1, 1, 1557256272719),
(687, 10, '1557256272719.22643100001', 17, 44, 'text', 'Ask me anything you would like', 1, 1, 1557256272719),
(688, 10, '1557256378733.1047100', 44, 17, 'text', 'Hei Tom! I undersøkelsen kunne man kanskje fått en mulighet til p endre på svarene sine? Var et par ganger jeg kom borti feil svar. Fikk ikke endra. Maria :)', 1, 1, 1557256378733),
(689, 10, '1557257429924.987559', 17, 44, 'text', 'Takk Maria for tilbakemelding. Neste versjon så vil du kunne endre på profilen din når du måtte ønske. Lykke til med testing av Appen????. Bare å spørre om det er noe.????????', 1, 1, 1557257429924),
(690, 9, '1557257582955.970975', 17, 43, 'text', 'Det kommer i neste versjon. Nå er det kun realtid trening', 1, 1, 1557257582955),
(691, 8, '1557257649843.257746', 17, 48, 'text', 'Bra jobba. Fortjener mere poeng????????????', 1, 1, 1557257649843),
(692, 10, '1557258705231.1097777', 44, 17, 'text', ':)', 1, 1, 1557258705231),
(693, 7, '1557261949396.642551', 46, 17, 'text', 'Ja det kunnet vært veldig gøy ! Den er enkel og god å bruke', 1, 1, 1557261949396),
(694, 7, '1557316579431.233705', 17, 46, 'sticker', 'keep-sailing', 1, 1, 1557316579432),
(695, 7, '1557316613671.815439', 17, 46, 'text', 'Vi gleder oss til å teste samarbeid????', 1, 1, 1557316613671),
(696, 8, '1557328513791.266834', 48, 17, 'text', 'Jepp', 1, 1, 1557328513791),
(697, 8, '1557339718863.1089230', 17, 48, 'sticker', 'keep-sailing', 1, 1, 1557339718863),
(698, 8, '1557339802136.539933', 17, 48, 'text', '3 treninger på de 3 første dagene er supert????????. Husk å ta en dag hvile også slik at kroppen får restituert seg', 1, 1, 1557339802136),
(699, 9, '1557343316111.140809', 43, 17, 'text', 'Glemte å klokke inn 9 hull golf i kveld med Lasse ????????‍♂️????', 1, 1, 1557343316111),
(700, 9, '1557346052942.583934', 17, 43, 'text', 'Du kan klokke inn nå da????????. Trening kl 1930 Stamina? Hilsen iProud Coach', 1, 1, 1557346052942),
(701, 6, '1557346182590.552881', 17, 50, 'text', 'God kveld????. Du står på. 3 dager på rad med fysisk aktivitet. Fint om du varierer tempo og type aktivitet også????', 1, 1, 1557346182590),
(702, 6, '1557346430689.182492', 50, 17, 'text', 'Har gjort det, men ikke skjønt helt hvordan jeg legger inn de forskjellige aktivitetene. Skal prøve igjen neste runde..', 1, 1, 1557346430690),
(703, 6, '1557382815623.970570', 50, 17, 'text', 'Hei . Hvis en feks glemmer å registrere en aktivitet , er det mulig i denne versjon å registrerer den i ettertid ?', 1, 1, 1557382815624),
(704, 6, '1557389739555.844101', 17, 50, 'text', 'Hei, velg type aktivitet og der er det mange ulike valg, ca 15. Etter registrering går først i neste versjon. Alternativt er at du setter igang stoppeklokka etter aktiviteten og husk å stoppe når tiden er inne.????????????❤', 1, 1, 1557389739555),
(705, 12, '1557408518617.693640100001', 17, 47, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1557408518616),
(706, 12, '1557408518619.34645100001', 17, 47, 'sticker', 'way-to-go', 1, 1, 1557408518619),
(707, 12, '1557408518620.669055100001', 17, 47, 'text', 'Ask me anything you would like', 1, 1, 1557408518620),
(708, 6, '1557434097353.163725', 17, 50, 'sticker', 'outstanding', 1, 1, 1557434097354),
(709, 6, '1557503999013.167276', 17, 50, 'text', 'Fantastisk aktivitetsuke????????. Hilsen stolt Coach', 1, 1, 1557503999013),
(710, 8, '1557509348655.595020', 48, 17, 'text', 'Will do. God helg', 1, 1, 1557509348655),
(711, 6, '1557510659174.1015612', 50, 17, 'text', '????????????', 1, 1, 1557510659174),
(712, 6, '1557510728828.730363', 50, 17, 'text', 'På moderat nivå enda, men er i gang med treningen på Stamina 2 g i uken! Det føles fantastisk å være i gang!', 1, 1, 1557510728828),
(713, 13, '1557759628148.1318100001', 17, 41, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1557759628147),
(714, 13, '1557759628150.557087100001', 17, 41, 'sticker', 'way-to-go', 1, 1, 1557759628150),
(715, 13, '1557759628151.855291100001', 17, 41, 'text', 'Ask me anything you would like', 1, 1, 1557759628151),
(716, 13, '1557760063059.817743', 17, 41, 'text', 'Herlig! Nå har du skaffet deg en profil. Da er det å komme igang med aktivitet????????????. Jeg er her du deg så bare spørre om du lurer på noe. Mvh iProud Coach', 1, 1, 1557760063059),
(717, 13, '1557770932311.725982', 41, 17, 'text', 'Var deilig å komme seg ut en tur igjen. Lenge siden sist;)', 1, 1, 1557770932311),
(718, 13, '1557770996736.780028', 17, 41, 'sticker', 'bravo', 1, 1, 1557770996736),
(719, 13, '1557771086301.838921', 17, 41, 'text', 'Da er du igang Lars Helge. Poengene og energien vil strømme på????????. Hvor mye kalorier brente du på turen din?', 1, 1, 1557771086301),
(720, 6, '1557771145396.985121', 17, 50, 'sticker', 'bravo', 1, 1, 1557771145396),
(721, 6, '1557771226975.560212', 17, 50, 'text', 'Du starter uken som sist med å være aktiv. Veldig bra????. Hilsen iProud Coach', 1, 1, 1557771226976),
(722, 7, '1557771304587.348494', 17, 46, 'text', 'Har du glemt å registrer aktivitet i det siste eller ikke fått gjennomført aktivitet?????????', 1, 1, 1557771304588),
(723, 10, '1557771407172.147205', 17, 44, 'text', 'Hei Maria, ser frem til å gi deg skryt for treningen du gjennomfører. Har du planlagt trening denne uken?', 1, 1, 1557771407172),
(724, 5, '1557771843628.964790', 17, 51, 'text', 'Hei, du hadde en god start med mye aktivitet men så har det vært stille eller at du har glemt å registrere aktivitetene. Husk å gjøre det så du mottar velfortjente poeng og skryt????????????', 1, 1, 1557771843628),
(725, 6, '1557772418559.261017', 50, 17, 'text', 'Takk, takk... Misset litt på registreringen. Men det blir nok bedre.', 1, 1, 1557772418559),
(726, 6, '1557774135388.326883', 17, 50, 'text', 'Ja, og neste versjon så hjelper vi deg med påminnelse og kalender????????', 1, 1, 1557774135388),
(727, 13, '1557774449069.460383', 41, 17, 'text', '448 kalorier borte????', 1, 1, 1557774449069),
(728, 6, '1557776567029.310501', 50, 17, 'text', 'Det blir bra!', 1, 1, 1557776567029),
(729, 13, '1557779746983.503206', 17, 41, 'text', '????', 1, 1, 1557779746983),
(730, 9, '1557897821262.994948', 17, 43, 'text', 'Bra start på uka Arne. Fortsatt slik så kommer de gode resultatene????????????. Det er også langhelg denne uken så ekstra tid til trening og lek ute????. Ha en strålende dag. Hilsen iProud Coach', 1, 1, 1557897821263),
(731, 13, '1557897929156.213608', 17, 41, 'text', 'God morgen Lars Helge????. Har du lagt plan for neste trening eller aktivitet? Ha en strålende dag☀️????', 1, 1, 1557897929156),
(732, 6, '1557898133644.611770', 17, 50, 'text', 'Hei, god start på uken med aktiviteter. Du merker sikkert hvor godt det gjør først og fremst for hode men også kropp????????????. Ha en strålende dag. Hilsen iProud Caoch', 1, 1, 1557898133644),
(733, 6, '1557912692304.174647', 50, 17, 'text', 'Ja det merker jeg ????og jeg blir også ekstra motivert av å registrere det iiProud. ????????????????????', 1, 1, 1557912692304),
(734, 6, '1557938818960.240791', 17, 50, 'text', 'Wow hvilken aktivitetsdag????????????. Lyst å fortelle hvilken aktivitet du har gjennomført?', 1, 1, 1557938818960),
(735, 6, '1557940444108.735082', 50, 17, 'text', 'Gikk i høyt tempo / løp noe på mølle totalt 5 km. Deretter sirkeltrening. 40 sek på / 10 sek pause i 45 min. Gikk til skansen fra treningen etterpå for å heie frem Ulrik i Terrengløp ???? ????????????', 1, 1, 1557940444109),
(736, 6, '1557940550131.496954', 50, 17, 'text', 'Utfall frem og tilbake med 7kg vekter i hendene, hoppe tau, boksing på sandsekk,  Tautrekking, planke , slynke(bryst) og mageøvelse.', 1, 1, 1557940550131),
(737, 13, '1557941566052.959850', 41, 17, 'text', 'Vært på tur nå:)', 1, 1, 1557941566052),
(738, 13, '1557942985622.666002', 17, 41, 'text', 'Konge????????. Hvordan er motivasjonen?????', 1, 1, 1557942985622),
(739, 6, '1557943735070.592125', 17, 50, 'text', 'Jeg er imponert Tone:-). Fantastisk jobba. Husk å nyt 17.Mai selv om du er inni en god treningsflyt. Moro å følge deg videre????????', 1, 1, 1557943735070),
(740, 13, '1557950991678.265670', 41, 17, 'text', 'Den er bra. Klar som en kartong egg;)', 1, 1, 1557950991678),
(741, 13, '1557951105059.683259', 17, 41, 'sticker', 'super', 1, 1, 1557951105059),
(742, 6, '1557983997782.575726', 50, 17, 'text', 'Takk! Og det samme til dere. Det er deilig å være i gang! Takk for motivasjon????????', 1, 1, 1557983997783),
(743, 6, '1558023257857.337432', 17, 50, 'text', 'Flott innsats. Kun 790 poeng til neste nivå☺????????.', 1, 1, 1558023257858),
(744, 13, '1558283688923.582291', 41, 17, 'text', 'Traff frua di i skogen Tom. Bra tempo på den dama:)', 1, 1, 1558283688923),
(745, 13, '1558300263578.131480', 17, 41, 'text', 'Så kjekt. Ja fruen er sprek vettu.  Bra jobba, din 3dje økt for uken. Fortsatt slik????????????', 1, 1, 1558300263579),
(746, 9, '1558454763748.138040', 43, 17, 'text', '????', 1, 1, 1558454763749),
(747, 9, '1558467452082.509808', 17, 43, 'text', 'Bra økt i dag????????????', 1, 1, 1558467452083),
(748, 10, '1558676713101.1066911', 44, 17, 'text', 'Hei Tom! Jeg har helt glemt å bruke den appen????Jeg har trent opptil flere ganger og til og med spilt to fotballkamper den siste uka! Kan jeg få litt mer tid på meg? Jeg la bare inn i stad  for morro skyld en kamp. Jeg må bare få komme inn i en rutine hvor jeg husker å bruke den.', 1, 1, 1558676713101),
(749, 10, '1558676858707.277041', 44, 17, 'text', 'Vet ikke om det er noen notifications på den appen het ift påminnelse for å bruke appen, eller her når du /jeg sender mld her inn. Når man sender mld her inne kunne det kanskje fått sånn varsel på Mail/SMS «det ligger en mld til deg fra iproud inne på din profil»', 1, 1, 1558676858707),
(750, 10, '1558773302291.658572', 17, 44, 'text', 'Supert Maria. Veldig gode innspill. Gi meg tilbakemelding i den mailen som er sendt ut så får utviklingsteamet sørge for å utvikle disse funksjonene i neste versjoner. Meningen er nå å stoppe testingen, få tilbakemelding fra alle som har testet, prioritere neste sprint for utvikling og teste ny versjon. Du og resten av test gruppa får mulighet å teste neste versjon også', 1, 1, 1558773302291),
(751, 15, '1559846586719.802884100001', 17, 53, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1559846586712),
(752, 15, '1559846586732.95546100001', 17, 53, 'sticker', 'way-to-go', 1, 1, 1559846586732),
(753, 15, '1559846586735.919524100001', 17, 53, 'text', 'Ask me anything you would like', 1, 1, 1559846586734),
(754, 5, '1561292998908.273213', 17, 51, 'text', 'Hi', 1, 1, 1561292998908),
(755, 5, '1561293012806.938642', 17, 51, 'text', 'Hi', 1, 1, 1561293012806),
(756, 5, '1561293109506.254786', 17, 51, 'text', 'Hi', 1, 1, 1561293109506),
(757, 5, '1561293205382.349217', 17, 51, 'text', '1', 1, 1, 1561293205382),
(758, 5, '1561293255614.547212', 17, 51, 'text', '2', 1, 1, 1561293255614),
(759, 5, '1561293315893.401932', 17, 51, 'text', '3', 1, 1, 1561293315893),
(760, 5, '1561293379030.560136', 17, 51, 'text', '4', 1, 1, 1561293379030),
(761, 5, '1561293546115.688081', 17, 51, 'text', '5', 1, 1, 1561293546115),
(762, 5, '1561293631530.829361', 17, 51, 'text', '6', 1, 1, 1561293631530),
(763, 5, '1561294067829.636874', 17, 51, 'text', '7', 1, 1, 1561294067829),
(764, 5, '1561294130124.1088969', 17, 51, 'text', '8', 1, 1, 1561294130124),
(765, 5, '1561294210112.500743', 17, 51, 'text', '9', 1, 1, 1561294210112),
(766, 5, '1561294288398.595407', 17, 51, 'text', '10', 1, 1, 1561294288398),
(767, 5, '1561294392761.798399', 17, 51, 'text', '11', 1, 1, 1561294392761),
(768, 5, '1561294451829.890533', 17, 51, 'text', '12', 1, 1, 1561294451829),
(769, 5, '1561294491279.626577', 17, 51, 'text', '13', 1, 1, 1561294491279),
(770, 16, '1561304963072.146738100001', 59, 57, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1561304963071),
(771, 16, '1561304963073.811792100001', 59, 57, 'sticker', 'way-to-go', 1, 1, 1561304963073),
(772, 16, '1561304963073.220638100001', 59, 57, 'text', 'Ask me anything you would like', 1, 1, 1561304963073),
(773, 16, '1561310988778.692522', 57, 59, 'text', 'Hey', 1, 1, 1561310988778),
(774, 16, '1561313593588.262526', 59, 57, 'text', 'Hi', 1, 1, 1561313593588),
(775, 16, '1561315205511.174158', 57, 59, 'text', 'How are you?????????????????', 1, 1, 1561315205511),
(776, 16, '1561355108715.382586', 57, 59, 'text', '😄😄😊😔', 1, 1, 1561355108716),
(777, 16, '1561355128301.817440', 57, 59, 'text', '😏😉😭🤣🤣😒😳😩👌🙈', 1, 1, 1561355128301),
(778, 16, '1561355175637.770086', 57, 59, 'text', '😁😊😁😔😃😁🥳🤩😟🙁😫🧐🤪🤣😛🧐😨🤔🤯🤢🤢😴🤒🤕😵🤧🤑🤠😵👽👹😾🤝😻😽💀👎🏾👉🏻', 1, 1, 1561355175637),
(779, 16, '1561361648513.811735', 57, 59, 'text', 'Ask me anything you would like', 1, 1, 1561361648513),
(780, 16, '1561361695287.912756', 57, 59, 'text', 'Hi coach', 1, 1, 1561361695287),
(781, 16, '1561361708639.943540', 59, 57, 'text', 'Hi', 1, 1, 1561361708639),
(782, 16, '1561361713523.589110', 59, 57, 'text', 'Ho', 1, 1, 1561361713523),
(783, 16, '1561361715691.404208', 59, 57, 'text', 'Hi', 1, 1, 1561361715692),
(784, 16, '1561361777389.244568', 59, 57, 'text', 'Hh', 1, 1, 1561361777390),
(785, 16, '1561362053794.501994', 57, 59, 'text', '😉✌🏻😊❤️☺️💕😏😭😭😄😀😐😨😭🤬🤬😠😑😐😳😟😣🤔😐😶😮🤥😓😠☹️😺🎃🎃😽😿👽🤡👺🤕👿', 1, 1, 1561362053794),
(786, 16, '1561362076190.1079345', 57, 59, 'text', 'Hiiii 👋', 1, 1, 1561362076190),
(787, 16, '1561362092615.572024', 57, 59, 'text', ':)', 1, 1, 1561362092615),
(788, 16, '1561377337181.173788', 59, 57, 'text', 'Hi', 1, 1, 1561377337182),
(789, 16, '1561377516757.275618', 59, 57, 'text', 'Hi', 1, 1, 1561377516757),
(790, 16, '1561377546612.342009', 59, 57, 'text', 'Hi', 1, 1, 1561377546613),
(791, 16, '1561378259152.916369', 59, 57, 'text', 'Hi', 1, 1, 1561378259152),
(792, 16, '1561378291587.141913', 59, 57, 'text', 'Hi', 1, 1, 1561378291587),
(793, 16, '1561378332219.154831', 59, 57, 'text', 'Hi', 1, 1, 1561378332219),
(794, 16, '1561378355589.715254', 59, 57, 'text', '1', 1, 1, 1561378355589),
(795, 16, '1561378587074.699788', 59, 57, 'text', '2', 1, 1, 1561378587074),
(796, 16, '1561379285593.1054121', 59, 57, 'text', '3', 1, 1, 1561379285594),
(797, 16, '1561379516478.991267', 59, 57, 'text', '4', 1, 1, 1561379516478),
(798, 16, '1561379688379.1025506', 59, 57, 'text', '5', 1, 1, 1561379688379),
(799, 16, '1561380851503.1026600', 59, 57, 'text', '6', 1, 1, 1561380851503),
(800, 16, '1561380867299.698977', 59, 57, 'sticker', 'amazing', 1, 1, 1561380867299),
(801, 16, '1561381165682.1045391', 59, 57, 'sticker', 'awesome', 1, 1, 1561381165683),
(802, 16, '1561383256066.630755', 59, 57, 'text', '7', 1, 1, 1561383256066),
(803, 16, '1561383298741.704708', 59, 57, 'text', '8', 1, 1, 1561383298741),
(804, 16, '1561383341222.575423', 59, 57, 'text', '9', 1, 1, 1561383341222),
(805, 16, '1561383879853.953477', 59, 57, 'text', '10', 1, 1, 1561383879853),
(806, 16, '1561383896714.875089', 59, 57, 'text', '11', 1, 1, 1561383896715),
(807, 16, '1561384656115.832402', 57, 59, 'text', '12', 1, 1, 1561384656115),
(808, 16, '1561385787873.141470', 57, 59, 'text', '13', 1, 1, 1561385787873),
(809, 16, '1561386150926.768219', 57, 59, 'text', '14', 1, 1, 1561386150926),
(810, 16, '1561386235572.637874', 57, 59, 'text', '15', 1, 1, 1561386235572),
(811, 16, '1561386296899.919136', 57, 59, 'text', '16', 1, 1, 1561386296899),
(812, 16, '1561386376811.336977', 57, 59, 'text', '17', 1, 1, 1561386376811),
(813, 16, '1561386406752.391061', 57, 59, 'text', '18', 1, 1, 1561386406752),
(814, 17, '1561447289784.882487100001', 59, 56, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1561447289782),
(815, 17, '1561447289788.874792100001', 59, 56, 'sticker', 'way-to-go', 1, 1, 1561447289788),
(816, 17, '1561447289789.111342100001', 59, 56, 'text', 'Ask me anything you would like', 1, 1, 1561447289788),
(817, 17, '1561447520936.1030888', 59, 56, 'sticker', 'cool', 1, 1, 1561447520937),
(818, 17, '1561447535840.371821', 59, 56, 'sticker', 'good-vibes', 1, 1, 1561447535840),
(819, 17, '1561447552699.306096', 59, 56, 'text', 'Hi', 1, 1, 1561447552699),
(821, 16, '1561447821215.824462', 57, 59, 'text', '16', 1, 1, 1561447821215),
(823, 16, '1561447904040.124730', 57, 59, 'text', '16a', 1, 1, 1561447904040),
(824, 17, '1561447954210.1012729', 56, 59, 'text', '15b', 1, 1, 1561447954210),
(825, 16, '1561447959298.120068', 57, 59, 'text', '16b', 1, 1, 1561447959299),
(826, 18, '1561568594086.521400100001', 60, 61, 'text', 'Hi there!\nWelcome to iProud.', 1, 1, 1561568594084),
(827, 18, '1561568594091.607773100001', 60, 61, 'sticker', 'way-to-go', 1, 1, 1561568594090),
(828, 18, '1561568594092.258068100001', 60, 61, 'text', 'Ask me anything you would like', 1, 1, 1561568594092);

-- --------------------------------------------------------

--
-- Table structure for table `magiclink`
--

CREATE TABLE `magiclink` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL DEFAULT '-',
  `validuntil` varchar(255) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `magiclink`
--

INSERT INTO `magiclink` (`id`, `email`, `code`, `validuntil`) VALUES
(24, 'coach@iproud.com', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `masterbadge`
--

CREATE TABLE `masterbadge` (
  `idmasterbadge` int(11) NOT NULL,
  `badgename` varchar(255) NOT NULL,
  `thresholdpoint` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `badgeicon` longtext NOT NULL,
  `activity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `masterconstants`
--

CREATE TABLE `masterconstants` (
  `idmastercontants` int(11) NOT NULL,
  `constkey` varchar(255) DEFAULT NULL,
  `constvalueJSON` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `masterlevel`
--

CREATE TABLE `masterlevel` (
  `idmasterlevel` int(11) NOT NULL,
  `levelname` varchar(255) DEFAULT NULL,
  `thresholdpoint` int(11) DEFAULT NULL,
  `levelicon` longtext NOT NULL,
  `textcolor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `idthread` int(11) NOT NULL,
  `senderid` int(11) DEFAULT NULL,
  `receiverid` int(11) DEFAULT NULL,
  `createdon` datetime DEFAULT NULL,
  `updatedon` datetime DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`idthread`, `senderid`, `receiverid`, `createdon`, `updatedon`, `createdby`) VALUES
(1, 42, 17, '2019-04-28 16:17:59', NULL, 42),
(2, 17, NULL, NULL, NULL, 17),
(3, 39, 17, '2019-04-29 07:57:27', NULL, 39),
(4, 40, 17, '2019-05-01 14:06:32', NULL, 40),
(5, 51, 17, '2019-05-03 09:37:45', NULL, 51),
(6, 50, 17, '2019-05-04 10:08:03', NULL, 50),
(7, 46, 17, '2019-05-05 10:18:30', NULL, 46),
(8, 48, 17, '2019-05-05 11:29:32', NULL, 48),
(9, 43, 17, '2019-05-06 20:20:20', NULL, 43),
(10, 44, 17, '2019-05-07 19:11:12', NULL, 44),
(12, 47, 17, '2019-05-09 13:28:38', NULL, 47),
(13, 41, 17, '2019-05-13 15:00:27', NULL, 41),
(15, 53, 17, '2019-06-06 18:43:07', NULL, 53),
(16, 57, 59, '2019-06-23 15:49:22', NULL, 57),
(17, 56, 59, '2019-06-25 07:21:29', NULL, 56),
(18, 61, 60, '2019-06-26 17:03:14', NULL, 61);

-- --------------------------------------------------------

--
-- Table structure for table `useractivity`
--

CREATE TABLE `useractivity` (
  `activityid` int(11) NOT NULL,
  `activityname` varchar(255) DEFAULT NULL,
  `activitydate` varchar(255) DEFAULT NULL,
  `activitytype` varchar(255) DEFAULT NULL,
  `starttime` varchar(255) DEFAULT NULL,
  `endtime` datetime DEFAULT NULL,
  `totalduration` double DEFAULT NULL,
  `activityintensity` int(11) DEFAULT NULL,
  `notes` longtext,
  `createdbyuserid` int(11) DEFAULT NULL,
  `pointsearned` int(11) DEFAULT NULL,
  `steps` int(11) NOT NULL DEFAULT '0',
  `imagecount` int(11) NOT NULL DEFAULT '0',
  `isactive` int(11) DEFAULT '1',
  `createdon` datetime DEFAULT CURRENT_TIMESTAMP,
  `updatedon` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `useractivity`
--

INSERT INTO `useractivity` (`activityid`, `activityname`, `activitydate`, `activitytype`, `starttime`, `endtime`, `totalduration`, `activityintensity`, `notes`, `createdbyuserid`, `pointsearned`, `steps`, `imagecount`, `isactive`, `updatedon`) VALUES
(1, 'Monday Afternoon Walk', '29-04-2019', 'Walking', '2019-04-29 12:25:53', NULL, 732, 4, 'Good', 42, 73, 2580, 0, 1, NULL),
(2, 'Wednesday Evening Run', '01-05-2019', 'Running', '2019-05-01 20:18:42', NULL, 4102, 3, 'Good', 40, 448, 0, 0, 1, NULL),
(4, 'Friday Afternoon Circuit Training', '03-05-2019', 'Circuit Training', '2019-05-03 16:10:50', NULL, 25, 3, 'Awesome', 51, 933, 0, 0, 1, NULL),
(5, 'Friday Afternoon Golf', '03-05-2019', 'Golf', '2019-05-03 16:11:53', NULL, 18, 5, 'Awesome', 51, 378, 0, 0, 1, NULL),
(6, 'Friday Afternoon Golf', '03-05-2019', 'Golf', '2019-05-03 16:12:37', NULL, 24, 5, 'Awesome', 51, 504, 0, 0, 1, NULL),
(7, 'Friday Afternoon Aerobics', '03-05-2019', 'Aerobics', '2019-05-03 17:29:00', NULL, 357, 5, 'Awesome', 51, 69, 0, 1, 1, NULL),
(8, 'Monday Afternoon Walk', '06-05-2019', 'Walking', '2019-05-06 13:37:18', NULL, 1430, 3, 'Good', 48, 109, 0, 1, 1, NULL),
(9, 'Monday lunch Run', '06-05-2019', 'Running', '2019-05-06 14:46:24', NULL, 3979, 3, 'Awesome', 48, 521, 0, 1, 1, NULL),
(10, 'Monday Afternoon Walk', '06-05-2019', 'Walking', '2019-05-06 15:00:47', NULL, 1333, 3, 'Awesome', 50, 114, 0, 1, 1, NULL),
(11, 'Monday Afternoon Cycling', '06-05-2019', 'Cycling', '2019-05-06 17:54:08', NULL, 5177, 2, 'Awesome', 46, 227, 0, 1, 1, NULL),
(12, 'Monday Evening Walk', '06-05-2019', 'Walking', '2019-05-06 21:10:52', NULL, 1763, 2, 'Awesome', 50, 100, 0, 0, 1, NULL),
(13, 'Tuesday Morning Walk', '07-05-2019', 'Walking', '2019-05-07 11:31:32', NULL, 825, 2, 'Good', 50, 47, 0, 0, 1, NULL),
(14, 'Tuesday Afternoon Walk', '07-05-2019', 'Walking', '2019-05-07 15:26:59', NULL, 1597, 3, 'Good', 50, 136, 0, 0, 1, NULL),
(15, 'Tuesday Afternoon Cycling', '07-05-2019', 'Cycling', '2019-05-07 19:07:44', NULL, 6340, 3, 'Awesome', 46, 417, 0, 0, 1, NULL),
(16, 'Tuesday Evening Weight Lifting', '07-05-2019', 'Weight Lifting', '2019-05-07 20:24:59', NULL, 5349, 2, 'Awesome', 48, 272, 0, 1, 1, NULL),
(17, 'Tuesday Evening Walk', '07-05-2019', 'Walking', '2019-05-07 20:31:24', NULL, 1022, 1, 'Good', 43, 26, 0, 1, 1, NULL),
(18, 'Wednesday Morning Walk', '08-05-2019', 'Walking', '2019-05-08 08:56:16', NULL, 1305, 3, 'Good', 50, 111, 0, 0, 1, NULL),
(19, 'Wednesday Morning Walk', '08-05-2019', 'Walking', '2019-05-08 11:17:44', NULL, 656, 2, 'Good', 50, 37, 0, 0, 1, NULL),
(20, 'Wednesday Afternoon Walk', '08-05-2019', 'Walking', '2019-05-08 15:34:49', NULL, 2353, 3, 'Good', 50, 201, 0, 0, 1, NULL),
(21, 'Wednesday Afternoon Walk', '08-05-2019', 'Walking', '2019-05-08 17:14:49', NULL, 1014, 2, 'Good', 48, 51, 0, 0, 1, NULL),
(22, 'Wednesday Afternoon Run', '08-05-2019', 'Running', '2019-05-08 18:00:52', NULL, 3099, 2, 'Awesome', 50, 303, 0, 0, 1, NULL),
(23, '9 hull Drøbak med Lasse', '08-05-2019', 'Golf', '2019-05-08 22:20:26', NULL, 433, 3, 'Good', 43, 43, 0, 0, 1, NULL),
(24, 'Thursday Morning Walk', '09-05-2019', 'Walking', '2019-05-09 09:28:07', NULL, 3244, 3, 'Awesome', 50, 278, 0, 0, 1, NULL),
(25, 'Thursday Afternoon Walk', '09-05-2019', 'Walking', '2019-05-09 14:03:15', NULL, 1916, 3, 'Good', 50, 164, 0, 0, 1, NULL),
(27, 'Friday Afternoon Walk', '10-05-2019', 'Walking', '2019-05-10 14:54:05', NULL, 1897, 3, 'Good', 50, 162, 0, 0, 1, NULL),
(28, 'Friday Afternoon Treadmilling', '10-05-2019', 'Treadmill', '2019-05-10 17:04:36', NULL, 1804, 3, 'Awesome', 47, 89, 0, 0, 1, NULL),
(29, 'Friday Evening Weight Lifting', '10-05-2019', 'Weight Lifting', '2019-05-10 19:28:45', NULL, 3737, 2, 'Good', 48, 190, 0, 1, 1, NULL),
(30, 'Friday Evening Walk', '10-05-2019', 'Walking', '2019-05-10 19:50:35', NULL, 3700, 3, 'Awesome', 50, 317, 0, 0, 1, NULL),
(31, 'Friday Evening Weight Lifting', '10-05-2019', 'Weight Lifting', '2019-05-10 20:11:59', NULL, 2463, 3, 'Awesome', 47, 186, 0, 0, 1, NULL),
(32, 'Saturday Morning Weight Lifting', '11-05-2019', 'Weight Lifting', '2019-05-11 10:59:58', NULL, 1286, 3, 'Awesome', 43, 100, 0, 0, 1, NULL),
(33, 'Sunday Evening Treadmilling', '12-05-2019', 'Treadmill', '2019-05-12 21:05:31', NULL, 1229, 3, 'Good', 43, 63, 0, 1, 1, NULL),
(34, 'Sunday Evening Hike', '12-05-2019', 'Hiking', '2019-05-12 21:14:43', NULL, 9857, 2, 'Good', 50, 805, 0, 3, 1, NULL),
(35, 'Monday Afternoon Walk', '13-05-2019', 'Walking', '2019-05-13 15:24:54', NULL, 3143, 3, 'Good', 50, 269, 0, 0, 1, NULL),
(36, 'Monday Evening Treadmilling', '13-05-2019', 'Treadmill', '2019-05-13 19:38:32', NULL, 1161, 3, 'Ok', 50, 65, 0, 0, 1, NULL),
(37, 'Monday Evening Walk', '13-05-2019', 'Walking', '2019-05-13 20:07:56', NULL, 3375, 2, 'Awesome', 41, 275, 0, 0, 1, NULL),
(38, 'Tuesday Morning Walk', '14-05-2019', 'Walking', '2019-05-14 11:37:14', NULL, 1465, 2, 'Good', 50, 83, 0, 0, 1, NULL),
(39, 'Tuesday Afternoon Walk', '14-05-2019', 'Walking', '2019-05-14 15:18:11', NULL, 2297, 2, 'Good', 50, 131, 0, 0, 1, NULL),
(40, 'Tuesday Evening Weight Lifting', '14-05-2019', 'Weight Lifting', '2019-05-14 21:40:34', NULL, 4690, 4, 'Good', 43, 490, 0, 0, 1, NULL),
(41, 'Wednesday Morning Walk', '15-05-2019', 'Walking', '2019-05-15 08:44:17', NULL, 1145, 4, 'Good', 50, 130, 0, 0, 1, NULL),
(42, 'Wednesday Morning Walk', '15-05-2019', 'Walking', '2019-05-15 11:29:17', NULL, 1231, 2, 'Good', 50, 70, 0, 0, 1, NULL),
(43, 'Wednesday Afternoon Walk', '15-05-2019', 'Walking', '2019-05-15 15:24:15', NULL, 1558, 3, 'Good', 50, 133, 0, 0, 1, NULL),
(44, 'Wednesday Afternoon Treadmilling', '15-05-2019', 'Treadmill', '2019-05-15 17:52:07', NULL, 2116, 4, 'Awesome', 50, 159, 0, 0, 1, NULL),
(45, 'Wednesday Afternoon Circuit Training', '15-05-2019', 'Circuit Training', '2019-05-15 18:41:13', NULL, 2911, 3, 'Good', 50, 570, 0, 0, 1, NULL),
(46, 'Wednesday Evening Walk', '15-05-2019', 'Walking', '2019-05-15 19:31:31', NULL, 3333, 2, 'Awesome', 41, 272, 0, 0, 1, NULL),
(47, 'Thursday Morning Walk', '16-05-2019', 'Walking', '2019-05-16 11:46:24', NULL, 1999, 2, 'Good', 50, 114, 0, 0, 1, NULL),
(48, 'Thursday Afternoon Walk', '16-05-2019', 'Walking', '2019-05-16 16:51:03', NULL, 8058, 3, 'Good', 50, 691, 0, 0, 1, NULL),
(49, 'Thursday Evening Cycling', '16-05-2019', 'Cycling', '2019-05-16 20:25:46', NULL, 2735, 2, 'Good', 50, 156, 0, 0, 1, NULL),
(50, 'Friday Evening Hike', '17-05-2019', 'Hiking', '2019-05-17 20:47:52', NULL, 6658, 3, 'Good', 50, 815, 0, 3, 1, NULL),
(51, 'Sunday Afternoon Walk', '19-05-2019', 'Walking', '2019-05-19 18:31:55', NULL, 3522, 2, 'Awesome', 41, 287, 0, 1, 1, NULL),
(52, 'Fotballkamp', '23-05-2019', 'Soccer', '2019-05-24 07:27:13', NULL, 5059, 2, 'Awesome', 44, 451, 0, 0, 1, NULL),
(53, 'Sunday Evening Walk', '02-06-2019', 'Walking', '2019-06-02 22:45:18', NULL, 316, 4, 'Awesome', 51, 34, 560, 0, 1, NULL),
(54, 'Friday Evening Walk', '24-05-2019', 'Walking', '2019-06-03 16:32:02', NULL, 14399, 4, 'Awesome', 51, 1568, 0, 0, 1, NULL),
(55, 'Sunday Afternoon Walk', '23-06-2019', 'Walking', '2019-06-23 16:54:51', NULL, 332, 5, 'Awesome', 51, 28, 0, 0, 1, NULL),
(56, 'Sunday Evening Walk', '20-06-2019', 'Walking', '2019-06-23 18:34:32', NULL, 325, 5, 'Awesome', 51, 27, 0, 0, 1, NULL),
(57, 'Sunday Evening Swim', '23-06-2019', 'Swimming', '2019-06-23 21:21:14', NULL, 2700, 3, 'Awesome', 51, 234, 0, 0, 1, NULL),
(66, 'Monday Evening Walk', '23-06-2019', 'Walking', '2019-06-24 23:09:02', NULL, 3000, 3, 'Awesome', 57, 646, 0, 0, 1, NULL),
(67, 'Yoga', '25-06-2019', 'Walking', '2019-06-25 11:49:42', NULL, 1800, 4, 'Awesome', 57, 516, 0, 3, 1, NULL),
(68, 'Tuesday Afternoon Walk', '25-06-2019', 'Walking', '2019-06-25 12:19:52', NULL, 301, 4, 'Awesome', 57, 86, 0, 0, 1, NULL),
(69, 'Afternoon Walk', '23-06-2019', 'Walking', '2019-06-25 12:26:16', NULL, 36000, 3, 'Awesome', 57, 7754, 0, 0, 1, NULL),
(70, 'Tuesday Afternoon Swim', '25-06-2019', 'Swimming', '2019-06-25 12:28:03', NULL, 3600, 3, 'Ok', 57, 1329, 0, 0, 1, NULL),
(71, 'Tuesday Afternoon Cycling', '24-06-2019', 'Cycling', '2019-06-25 12:31:13', NULL, 1800, 2, 'Awesome', 57, 258, 0, 0, 1, NULL),
(72, ' Afternoon Run', '21-06-2019', 'Running', '2019-06-25 12:32:31', NULL, 7260, 5, 'Awesome', 57, 4468, 0, 0, 1, NULL),
(73, 'Afternoon Cycling', '22-06-2019', 'Cycling', '2019-06-25 12:33:27', NULL, 10800, 5, 'Awesome', 57, 3877, 0, 0, 1, NULL),
(74, 'Afternoon Hike', '20-06-2019', 'Hiking', '2019-06-25 12:34:02', NULL, 14400, 5, 'Awesome', 57, 7385, 0, 0, 1, NULL),
(75, 'Tuesday Afternoon Walk', '25-06-2019', 'Walking', '2019-06-25 12:34:32', NULL, 18000, 5, 'Awesome', 57, 6462, 0, 0, 1, NULL),
(76, 'Tuesday Afternoon Walk', '25-06-2019', 'Walking', '2019-06-25 12:43:37', NULL, 413, 4, 'Awesome', 57, 118, 0, 0, 1, NULL),
(77, 'Tuesday Afternoon Walk', '25-06-2019', 'Walking', '2019-06-25 12:45:15', NULL, 300, 5, 'Awesome', 57, 107, 0, 0, 1, NULL),
(78, 'Tuesday Afternoon Pushups', '19-06-2019', 'Pushups', '2019-06-25 13:32:35', NULL, 305, 4, 'Awesome', 57, 95, 0, 0, 1, NULL),
(79, 'Tuesday Afternoon Walk', '25-06-2019', 'Walking', '2019-06-25 14:15:21', NULL, 300, 2, 'Awesome', 56, 54, 0, 0, 1, NULL),
(80, 'Evening Walk', '17-06-2019', 'Walking', '2019-06-25 18:50:44', NULL, 1800, 3, 'Awesome', 56, 488, 0, 0, 1, NULL),
(81, 'Evening Run ', '18-06-2019', 'Running', '2019-06-25 18:51:36', NULL, 900, 4, 'Awesome', 56, 558, 0, 0, 1, NULL),
(82, 'Leisure Walk', '18-06-2019', 'Walking', '2019-06-25 18:52:35', NULL, 900, 2, 'Awesome', 56, 162, 0, 0, 1, NULL),
(83, 'Splash', '19-06-2019', 'Swimming', '2019-06-25 18:53:16', NULL, 3600, 1, 'Awesome', 56, 558, 0, 0, 1, NULL),
(84, 'Cycling', '19-06-2019', 'Cycling', '2019-06-25 18:53:56', NULL, 300, 3, 'Awesome', 56, 81, 0, 0, 1, NULL),
(85, 'Tuesday Evening Walk', '20-06-2019', 'Walking', '2019-06-25 18:57:46', NULL, 2400, 5, 'Awesome', 56, 1085, 0, 2, 1, NULL),
(86, 'Walk', '21-06-2019', 'Walking', '2019-06-25 18:58:54', NULL, 1800, 4, 'Awesome', 56, 651, 0, 0, 1, NULL),
(87, 'Run', '22-06-2019', 'Walking', '2019-06-25 18:59:27', NULL, 3000, 4, 'Awesome', 56, 1085, 0, 0, 1, NULL),
(88, 'Evening Walk', '23-06-2019', 'Walking', '2019-06-25 18:59:57', NULL, 3000, 5, 'Awesome', 56, 1357, 0, 0, 1, NULL),
(89, 'Tuesday Afternoon Walk', '25-06-2019', 'Walking', '2019-06-25 16:25:14', NULL, 1398, 3, 'Awesome', 53, 105, 10000, 1, 1, NULL),
(90, 'Tuesday Afternoon Walk', '25-06-2019', 'Walking', '2019-06-25 17:29:51', NULL, 406, 2, 'Awesome', 53, 20, 5000, 3, 1, NULL),
(93, 'Wednesday Afternoon Walk', '26-03-2019', 'Walking', '2019-06-26 13:16:50', NULL, 7200, 2, 'Awesome', 50, 823, 0, 0, 1, NULL),
(94, 'Tuesday Evening Pushups', '27-03-2019', 'Pushups', '2019-06-26 17:31:28', NULL, 900, 3, 'Awesome', 56, 265, 0, 0, 1, NULL),
(95, 'Sunday Evening Swim', '27-05-2019', 'Swimming', '2019-06-26 17:52:47', NULL, 600, 3, 'Awesome', 56, 279, 0, 0, 1, NULL),
(96, 'Monday Afternoon Hike', '26-02-2019', 'Hiking', '2019-06-26 17:54:06', NULL, 300, 2, 'Awesome', 56, 77, 0, 0, 1, NULL),
(97, 'Monday Afternoon Treadmilling', '26-02-2019', 'Treadmill', '2019-06-26 17:55:08', NULL, 300, 2, 'Awesome', 56, 35, 0, 0, 1, NULL),
(98, 'Friday Afternoon Surfing', '26-01-2019', 'Surfing', '2019-06-26 17:57:20', NULL, 300, 2, 'Awesome', 56, 46, 0, 0, 1, NULL),
(99, 'Tuesday Evening Walk', '22-05-2019', 'Walking', '2019-06-26 18:13:17', NULL, 300, 3, 'Awesome', 56, 81, 0, 0, 1, NULL),
(100, 'Monday Evening Walk', '26-03-2019', 'Walking', '2019-06-26 18:17:09', NULL, 82800, 2, 'Awesome', 50, 9470, 0, 0, 1, NULL),
(101, 'Tuesday Evening Walk', '26-06-2019', 'Walking', '2019-06-26 18:17:54', NULL, 3000, 2, 'Awesome', 50, 343, 0, 0, 1, NULL),
(102, 'Thursday Evening Walk', '26-04-2019', 'Walking', '2019-06-26 18:18:51', NULL, 1200, 2, 'Awesome', 50, 137, 0, 0, 1, NULL),
(103, 'Wednesday Evening Walk', '26-06-2019', 'Walking', '2019-06-26 18:23:26', NULL, 1200, 3, 'Awesome', 56, 325, 0, 0, 1, NULL),
(104, 'Wednesday Evening Walk', '26-06-2019', 'Walking', '2019-06-26 23:20:02', NULL, 300, 2, 'Awesome', 61, 26, 0, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userbadge`
--

CREATE TABLE `userbadge` (
  `badgeid` int(11) NOT NULL,
  `badgeidfk` int(11) DEFAULT NULL,
  `badgename` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `addedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userbadge`
--

INSERT INTO `userbadge` (`badgeid`, `badgeidfk`, `badgename`, `userid`) VALUES
(78, NULL, 'Zeal', 51),
(79, NULL, 'Firebody', 51),
(80, NULL, 'Golfer', 51),
(81, NULL, 'Birdie', 51),
(82, NULL, 'Sprinter', 48),
(83, NULL, 'Wheely', 46),
(84, NULL, 'Mover', 50),
(85, NULL, 'Mover', 50),
(86, NULL, 'Miles', 50),
(87, NULL, 'Miles', 50),
(88, NULL, 'Topper', 50),
(89, NULL, 'Eagle', 50),
(90, NULL, 'Hiwalker', 50),
(91, NULL, 'Zeal', 50),
(92, NULL, 'Peak', 50),
(93, NULL, 'Mover', 41),
(94, NULL, 'Shooter', 44),
(95, NULL, 'Mover', 51),
(96, NULL, 'Miles', 51),
(97, NULL, 'Hiwalker', 51),
(98, NULL, 'Sprinter', 50),
(102, NULL, 'Mover', 57),
(103, NULL, 'Miles', 57),
(104, NULL, 'Hiwalker', 57),
(105, NULL, 'Casper', 57),
(106, NULL, 'Bonito', 57),
(107, NULL, 'Sharky', 57),
(108, NULL, 'Wheely', 57),
(109, NULL, 'Sprinter', 57),
(110, NULL, 'Runner', 57),
(111, NULL, 'Achiever', 57),
(112, NULL, 'Chaser', 57),
(113, NULL, 'Rider', 57),
(114, NULL, 'Topper', 57),
(115, NULL, 'Eagle', 57),
(116, NULL, 'Peak', 57),
(117, NULL, 'Mover', 56),
(118, NULL, 'Miles', 56),
(119, NULL, 'Sprinter', 56),
(120, NULL, 'Runner', 56),
(121, NULL, 'Hiwalker', 56),
(122, NULL, 'Casper', 56),
(123, NULL, 'Bonito', 56),
(124, NULL, 'Powermantis', 56),
(125, NULL, 'Sharky', 56);

-- --------------------------------------------------------

--
-- Table structure for table `userlevel`
--

CREATE TABLE `userlevel` (
  `iduserlevel` int(11) NOT NULL,
  `levelindex` int(11) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `addedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlevel`
--

INSERT INTO `userlevel` (`iduserlevel`, `levelindex`, `userid`) VALUES
(13, 1, 50),
(14, 1, 51),
(15, 2, 50),
(24, 1, 57),
(25, 2, 57),
(26, 3, 57),
(27, 4, 57),
(28, 5, 57),
(29, 6, 57),
(30, 7, 57),
(31, 1, 56),
(32, 2, 56),
(38, 3, 50),
(39, 4, 50),
(40, 5, 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT '',
  `bio` longtext NOT NULL,
  `mobilenumber` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` enum('Male','Female','Prefer not to say') DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `heightunit` enum('cm','ft') DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `weightunit` enum('kg','lbs') DEFAULT NULL,
  `bmi` double NOT NULL DEFAULT '0',
  `doexercise` longtext,
  `challengesfaceCSV` longtext,
  `needsCSV` longtext,
  `profilepic` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `relationshipstatus` enum('Single','Cohabitant','Married') DEFAULT NULL,
  `noofchildren` varchar(255) DEFAULT NULL,
  `workingschedule` enum('8-4','Flexible','Self Employed','Shifts') DEFAULT NULL,
  `workingweekhours` mediumtext,
  `workingdailyhours` mediumtext,
  `dailywalkinghours` mediumtext,
  `manuallabourdifficultylevel` varchar(255) DEFAULT NULL,
  `badhabitsCSV` longtext,
  `foodallergiesCSV` longtext,
  `usertype` enum('user','coach') DEFAULT 'user',
  `preferredcoachgender` enum('male','female') DEFAULT NULL,
  `preferredcoach` enum('playful','strict','factual','emotional') DEFAULT NULL,
  `preferredcoachabilitiesCSV` longtext,
  `userlevel` int(11) DEFAULT NULL,
  `totalpoints` int(11) DEFAULT NULL,
  `magiclinktoken` varchar(255) DEFAULT NULL,
  `onesignalid` varchar(255) DEFAULT NULL,
  `coachid` int(11) DEFAULT NULL,
  `isactive` int(11) DEFAULT '1',
  `isdeleted` int(11) DEFAULT '0',
  `createdon` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedon` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `email`, `fullname`, `bio`, `mobilenumber`, `password`, `dob`, `gender`, `height`, `heightunit`, `weight`, `weightunit`, `bmi`, `doexercise`, `challengesfaceCSV`, `needsCSV`, `profilepic`, `relationshipstatus`, `noofchildren`, `workingschedule`, `workingweekhours`, `workingdailyhours`, `dailywalkinghours`, `manuallabourdifficultylevel`, `badhabitsCSV`, `foodallergiesCSV`, `usertype`, `preferredcoachgender`, `preferredcoach`, `preferredcoachabilitiesCSV`, `userlevel`, `totalpoints`, `magiclinktoken`, `onesignalid`, `coachid`, `isactive`, `isdeleted`, `updatedon`) VALUES
(17, 'coach@iproud.ai', 'Coach 1', '', NULL, '123456', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'coach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2019-08-20 20:16:11'),
(40, 'u2@iproud.ai', 'Hailee Steinfeld', '', NULL, NULL, '29-12-1997', 'Female', 174, 'cm', 63, 'kg', 20.81, 'Regularly', 'No motivation', 'Competitions', '1', 'Single', 'Two', '8-4', 'Twenty to Forty', 'More than Five', 'Two to Three', 'Upto Ten', 'Don’t sleep enough', 'None', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, 1, 0, '2019-08-21 05:27:58'),
(41, 'u3@iproud.ai', 'Stella Mills', '', NULL, NULL, '22-02-1968', 'Male', 187, 'cm', 140, 'kg', 40.03, 'Sometimes', 'Laziness', 'Fitness Program', '2', 'Single', 'Two', '8-4', 'Twenty to Forty', 'More than Five', 'Less than One', 'Upto Ten', 'Irregular eating hours', 'None', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, 1, 0, '2019-08-21 05:28:53'),
(42, 'u6@iproud.ai', 'Douchebag', '', NULL, NULL, '28-04-1974', 'Female', 180, 'cm', 80, 'kg', 24.69, 'No', 'No motivation', 'Accountability,Competitions', '3', 'Single', 'None', 'Shifts', 'Ten to Twenty', 'Less than One', 'Less than One', 'Upto Ten', 'Drink very little water,Don’t sleep enough', 'Soybean,Shellfish', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, 1, 0, '2019-08-24 14:50:35'),
(43, 'u4@iproud.ai', 'Cristiano Ronaldo', '', NULL, NULL, '10-02-1977', 'Male', 180, 'cm', 83, 'kg', 25.61, 'Sometimes', 'Not a priority', '', '4', 'Cohabitant', 'Two', '8-4', 'Twenty to Forty', 'More than Five', 'Less than One', 'Upto Ten', 'Drink very little water', 'None', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, 1, 0, '2019-08-21 05:31:15'),
(44, 'u5@iproud.ai', 'Jeremy Smith', '', NULL, NULL, '08-03-1981', 'Female', 160, 'cm', 56, 'kg', 21.87, 'Regularly', 'Injury', 'Coach', '5', 'Cohabitant', 'Two', '8-4', 'Twenty to Forty', 'More than Five', 'Less than One', 'Upto Ten', 'Love sweet things', 'None', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, 1, 0, '2019-08-21 05:29:52'),
(46, 'u7@iproud.ai', 'Claire Mcdonalid', '', NULL, NULL, '03-02-1972', 'Male', 188, 'cm', 76, 'kg', 21.5, 'Regularly', '', 'Fitness Program', '6', 'Single', 'Two', 'Flexible', 'Forty to Sixty or more', 'More than Five', 'Two to Three', 'Upto Ten', 'Drink very little water', 'None', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, 1, 0, '2019-08-21 05:32:19'),
(47, 'u8@iproud.ai', 'Mario Bell', '', NULL, NULL, '02-06-1975', 'Male', 183, 'cm', 83, 'kg', 24.78, 'Sometimes', 'Not a priority', 'Inspiration', '7', 'Cohabitant', 'Two', 'Shifts', 'Forty to Sixty or more', 'More than Five', 'Two to Three', 'Upto Ten', 'Drink very little water', 'None', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, 1, 0, '2019-08-21 05:36:23'),
(48, 'u9@iproud.ai', 'Neymar jr', '', NULL, NULL, '06-08-1970', 'Male', 171, 'cm', 73, 'kg', 24.96, 'Regularly', '', 'Competitions', '9', 'Married', 'Two', '8-4', 'Forty to Sixty or more', 'More than Five', 'Two to Three', 'Upto Ten', 'Love sweet things', 'None', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, 1, 0, '2019-08-21 05:43:09'),
(50, 'u1@iproud.ai', 'Selena Gomez', '', NULL, NULL, '25-10-1969', 'Female', 169, 'cm', 80, 'kg', 28.01, 'No', 'Don’t know where to start', 'Motivation', '10', 'Cohabitant', 'One', '8-4', 'Twenty to Forty', 'More than Five', 'Less than One', 'Upto Ten', 'Drink very little water', 'None', 'user', NULL, NULL, NULL, NULL, NULL, NULL, '8ca37561-8413-4d18-80c7-502ad143934d', 17, 1, 0, '2019-08-21 05:43:53'),
(51, 'testuser@iproud.ai', 'Shy Martin', '', NULL, NULL, '23-06-2019', 'Male', 5, 'ft', 59, 'lbs', 8.27, 'No', 'No motivation', 'Exercise Buddy', '11', 'Single', 'None', '8-4', 'Upto Ten', 'Less than One', '', 'Twenty to Forty', 'Irregular eating hours', 'Groundnuts', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, 1, 0, '2019-08-21 05:45:23'),
(53, 'u11@iproud.ai', 'Camila', '', NULL, NULL, '26-08-1975', 'Male', 182, 'cm', 82, 'kg', 24.75, 'Sometimes', 'No time', 'Competitions', '15', 'Married', 'Two', 'Flexible', 'Forty to Sixty or more', 'More than Five', 'More than Five', 'Forty to Sixty or more', 'Irregular eating hours', 'None', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, 1, 0, '2019-08-24 14:47:57'),
(56, 'u12@iproud.ai', 'Camila  Cabello', '', NULL, NULL, '21-06-1998', 'Male', 5, 'ft', 255, 'lbs', 44.32, 'Sometimes', 'Not a priority', 'Accountability', '16', 'Cohabitant', 'Three or more', 'Flexible', 'Upto Ten', '', 'Less than One', 'Upto Ten', 'Drink very little water', 'Soybean', 'user', NULL, NULL, NULL, NULL, NULL, NULL, '102aac72-1066-46a8-909d-a2a99a136698', 59, 1, 0, '2019-08-24 14:48:17'),
(57, 'u13@iproud.ai', 'Sabrina Carpenter', '', NULL, NULL, '24-09-1995', 'Female', 5, 'ft', 85, 'kg', 35.17, 'Sometimes', 'Not a priority', 'Motivation', '17', 'Cohabitant', 'None', '8-4', 'Forty to Sixty or more', 'Four to Five', 'More than Five', 'Twenty to Forty', 'Drink very little water', 'None', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 59, 1, 0, '2019-08-24 14:48:31'),
(58, 'coach2@iproud.ai', 'Coach 2', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'coach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2019-08-20 20:16:33'),
(59, 'coach3@iproud.ai', 'Coach 3', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'coach', NULL, NULL, NULL, NULL, NULL, NULL, '102aac72-1066-46a8-909d-a2a99a136698', NULL, 1, 0, '2019-08-20 20:16:41'),
(60, 'coach4@iproud.ai', 'Coach 4', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'coach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2019-08-20 20:16:49'),
(61, 'u10@iproud.ai', 'Astrid S', '', NULL, NULL, '10-12-1990', 'Male', 5, 'ft', 67, 'kg', 21.44, 'Sometimes', 'No motivation', 'Motivation', '18', 'Single', 'None', 'Flexible', 'Twenty to Forty', '', 'More than Five', 'Upto Ten', 'Drugs', '', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60, 1, 0, '2019-08-24 14:48:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activityimages`
--
ALTER TABLE `activityimages`
  ADD PRIMARY KEY (`idactivityimages`),
  ADD KEY `activityidfk_activityimages_idx` (`activityidfk`),
  ADD KEY `uploadedby_activityimages_idx` (`uploadedby`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`idchat`),
  ADD KEY `thread_chat_idx` (`threadidfk`),
  ADD KEY `sender_chat_idx` (`senderid`),
  ADD KEY `receiver_chat_idx` (`receiverid`);

--
-- Indexes for table `magiclink`
--
ALTER TABLE `magiclink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masterbadge`
--
ALTER TABLE `masterbadge`
  ADD PRIMARY KEY (`idmasterbadge`);

--
-- Indexes for table `masterconstants`
--
ALTER TABLE `masterconstants`
  ADD PRIMARY KEY (`idmastercontants`);

--
-- Indexes for table `masterlevel`
--
ALTER TABLE `masterlevel`
  ADD PRIMARY KEY (`idmasterlevel`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`idthread`),
  ADD KEY `senderid_thread_idx` (`senderid`),
  ADD KEY `receiverid_thread_idx` (`receiverid`),
  ADD KEY `createdby_thread_idx` (`createdby`);

--
-- Indexes for table `useractivity`
--
ALTER TABLE `useractivity`
  ADD PRIMARY KEY (`activityid`),
  ADD KEY `createdbyuserid_useractivity_idx` (`createdbyuserid`);

--
-- Indexes for table `userbadge`
--
ALTER TABLE `userbadge`
  ADD PRIMARY KEY (`badgeid`) USING BTREE,
  ADD KEY `userbadge_userid` (`userid`);

--
-- Indexes for table `userlevel`
--
ALTER TABLE `userlevel`
  ADD PRIMARY KEY (`iduserlevel`),
  ADD KEY `userlevel_userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `mobilenumber_UNIQUE` (`mobilenumber`),
  ADD KEY `levelid_users_idx` (`userlevel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activityimages`
--
ALTER TABLE `activityimages`
  MODIFY `idactivityimages` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `idchat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=829;

--
-- AUTO_INCREMENT for table `magiclink`
--
ALTER TABLE `magiclink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `masterbadge`
--
ALTER TABLE `masterbadge`
  MODIFY `idmasterbadge` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masterconstants`
--
ALTER TABLE `masterconstants`
  MODIFY `idmastercontants` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masterlevel`
--
ALTER TABLE `masterlevel`
  MODIFY `idmasterlevel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `idthread` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `useractivity`
--
ALTER TABLE `useractivity`
  MODIFY `activityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `userbadge`
--
ALTER TABLE `userbadge`
  MODIFY `badgeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `userlevel`
--
ALTER TABLE `userlevel`
  MODIFY `iduserlevel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activityimages`
--
ALTER TABLE `activityimages`
  ADD CONSTRAINT `activityidfk_activityimages` FOREIGN KEY (`activityidfk`) REFERENCES `useractivity` (`activityid`),
  ADD CONSTRAINT `uploadedby_activityimages` FOREIGN KEY (`uploadedby`) REFERENCES `users` (`userid`);

--
-- Constraints for table `useractivity`
--
ALTER TABLE `useractivity`
  ADD CONSTRAINT `createdbyuserid_useractivity` FOREIGN KEY (`createdbyuserid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
