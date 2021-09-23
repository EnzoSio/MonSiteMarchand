CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` varchar(50) NOT NULL,
  `date_commande` date NOT NULL,
  `loginPersonne` varchar(50) NOT NULL,
  KEY `loginPersonne` (`loginPersonne`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `compte` (
  `idPersonne` int(11) NOT NULL AUTO_INCREMENT,
  `loginPersonne` varchar(50) NOT NULL,
  `nomPersonne` varchar(50) NOT NULL,
  `prenomPersonne` varchar(50) NOT NULL,
  `mailPersonne` varchar(50) NOT NULL,
  `mdpPersonne` varchar(100) NOT NULL,
  PRIMARY KEY (`idPersonne`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;



INSERT INTO `compte` (`idPersonne`, `loginPersonne`, `nomPersonne`, `prenomPersonne`, `mailPersonne`, `mdpPersonne`) VALUES
(1, 'oui', 'oui', 'oui', 'oui', '5898fc860300e228dcd54c0b1045b5fa0dcda502'),
(2, 'non', 'non', 'non', 'non.@gmail.com', '37031f99ac78580c9f82e04fa237d295ea10ca41'),
(3, 'ceciestuntest', 'ceciestuntest', 'ceciestuntest', 'ceciestuntest', '882daac7ea9ce06a721a7499533ee2c06a671c12'),
(4, 'test', 'test', 'test', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(5, 'lola.fligiel', 'Fligiel', 'Lola', 'lolafligiel@gmail.com', 'e54ca0f451fa67adfdc259e3a21a86b1a9f5dc67'),
(6, 'enzo.aime', 'AIME', 'Enzo', 'enzo.aimebtssio1@gmail.com', '5898fc860300e228dcd54c0b1045b5fa0dcda502');


CREATE TABLE IF NOT EXISTS `enceinte` (
  `idEnceinte` int(30) NOT NULL,
  `imgEnceinte` varchar(100) NOT NULL,
  `prixEnceinte` decimal(10,2) NOT NULL,
  `nomEnceinte` varchar(40) NOT NULL,
  `marqueEnceinte` varchar(40) NOT NULL,
  `lienEnceinte` text NOT NULL,
  `descEnceinte` text CHARACTER SET utf8 NOT NULL,
  `slideimg1` varchar(100) NOT NULL,
  PRIMARY KEY (`idEnceinte`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;



INSERT INTO `enceinte` (`idEnceinte`, `imgEnceinte`, `prixEnceinte`, `nomEnceinte`, `marqueEnceinte`, `lienEnceinte`, `descEnceinte`, `slideimg1`) VALUES
(1, '../assets/Produits/Produit1-InnovaGoods/Produit1-removebg-preview.png', '25.90', 'Innovagoods', 'Dropsounds', '../php/Produits/Produit1.php', 'Voici le nouveau haut-parleur Bluetooth sans fil portable Waterproof DropSound InnovaGoods Gadget Tech ! Un mini haut-parleur très complet et polyvalent qui offre de nombreuses options en raison de son design portable de petite taille et ses caractéristiques spécifiques. 				Il permet de répondre aux appels et a une ventouse au dos afin que vous puissiez l’attacher facilement à la paroi de douche. En fin de compte, elle est idéale pour écouter de la musique confortablement sous la douche.', '../../assets/Produits/Produit1-InnovaGoods/Produit1-removebg-preview.png'),
(2, '../assets/Produits/Produit2-AugustMS430/produit2-removebg-preview.png', '32.90', 'MS430', 'August', '../php/Produits/Produit2.php', 'Pour le MS430 d\'August, vous ne devez pas avoir peur d\'éclabousser l\'eau, celle-ci est protégée contre les jets d\'eau sous n\'importe quel angle. L\'emporter sous la douche n\'est alors pas un problème, cependant vous ne devez pas immerger l\'enceinte dans l\'eau du bain ! Excellent pour les salles de bains, les piscines, les baignoires, les bateaux, etc.		', '../../assets/Produits/Produit2-AugustMS430/produit2-removebg-preview.png'),
(3, '../assets/Produits/Produit3-OlikeBluetoothSpeakerOBS-02/Produit3-removebg-preview.png', '64.90', 'OBS-02', 'Oppo', '../php/Produits/Produit3.php', '					Voici l\'OBS-02, un produit d\'excellente facture, avec un grave d\'une qualit� surprenante pour ce format d\'enceinte, une polyvalence bienvenue, une puissance disponible plus que suffisante. ', '../../assets/Produits/Produit3-OlikeBluetoothSpeakerOBS-02/Produit3-removebg-preview.png'),
(4, '../assets/Produits/Produit4-SonySRS-XB43/Produit4-removebg-preview.png', '69.90', 'SRS-XB43', 'Sony', '../php/Produits/Produit4.php', 'L\'enceinte sans fil SRS-XB43, robuste et facile d\'utilisation, offre des basses puissantes et dynamiques tout en restituant des voix claires. Elle est �tanche et r�sistante � l\'eau. Vous pouvez la laver sans probl�me.				', '../../assets/Produits/Produit4-SonySRS-XB43/Produit4-removebg-preview.png'),
(5, '../assets/Produits/Produit5-JBLGo3/Produit5-removebg-preview.png', '39.90', 'JBL GO 3', 'JBL', '../php/Produits/Produit5.php', 'La JBL Go 3 arbore un style audacieux et un son Pro JBL puissant. Avec son nouveau design accrocheur et audacieux, son tissu color� et ses d�tails expressifs, voici l�accessoire indispensable pour votre prochaine sortie. Laissez-vous transporter par le son Pro JBL, la conception �tanche � l�eau et � la poussi�re certifi�e IP67 qui vous permet une �coute sous la pluie ou au soleil. L�enceinte JBL Go 3 affiche un son aussi net que puissant.', '../../assets/Produits/Produit5-JBLGo3/Produit5-removebg-preview.png'),
(6, '../assets/Produits/Produit6-UEBoom3/Produit6-removebg-preview.png', '32.60', 'Boom 3', 'Ultimate Ears', '../php/Produits/Produit6.php', 'L\'enceinte Bluetooth ULTIMATE EARS UE BOOM 3 Night Black est l\'enceinte mobile par excellence. Elle résiste aux chutes, à l\'eau et à la poussière. Elle vous accompagnera partout pour mettre l\'ambiance pendant de longues heures grâce à sa batterie longue durée.', '../../assets/Produits/Produit6-UEBoom3/Produit6-removebg-preview.png');



CREATE TABLE IF NOT EXISTS `panier` (
  `idEnceinte` int(30) NOT NULL,
  `loginPersonne` varchar(50) NOT NULL,
  `imgEnceinte` varchar(100) NOT NULL,
  `prixEnceinte` decimal(10,2) NOT NULL,
  `nomEnceinte` varchar(40) NOT NULL,
  `marqueEnceinte` varchar(40) NOT NULL,
  PRIMARY KEY (`idEnceinte`,`loginPersonne`),
  KEY `idPersonne` (`loginPersonne`),
  KEY `imgEnceinte` (`imgEnceinte`),
  KEY `loginPersonne` (`loginPersonne`),
  KEY `prixEnceinte` (`prixEnceinte`),
  KEY `idEnceinte` (`idEnceinte`),
  KEY `nomEnceinte` (`nomEnceinte`,`marqueEnceinte`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;



INSERT INTO `panier` (`idEnceinte`, `loginPersonne`, `imgEnceinte`, `prixEnceinte`, `nomEnceinte`, `marqueEnceinte`) VALUES
(1, 'oui', '../assets/Produits/Produit1-InnovaGoods/Produit1-removebg-preview.png', '25.90', 'Innovagoods', 'Dropsounds'),
(6, 'oui', '../assets/Produits/Produit6-UEBoom3/Produit6-removebg-preview.png', '32.60', 'Boom', 'Ultimate'),
(4, 'oui', '../assets/Produits/Produit4-SonySRS-XB43/Produit4-removebg-preview.png', '69.90', 'SRS-XB43', 'Sony');
COMMIT;

