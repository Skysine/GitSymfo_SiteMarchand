<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Produits;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produits();
        $produit1->setCategorie($this->getReference('categorie1'));
        $produit1->setDescription("L'akita est doué d'une grande intelligence et d'une capacité de raisonnement qui peuvent même déstabiliser ou surprendre ses maîtres. C'est pour cela que les moments de dressage ne doivent pas dépasser 20 minutes. Il est également très proche de sa famille, amical, doux, affectueux voire collant. A contrario, ce chien peut ne montrer aucun intérêt envers des étrangers (dans la rue ou des invités à la maison), il peut même se montrer extrêmement réservé. L'akita est reconnu pour être un excellent chien de garde.");
        $produit1->setDisponible('1');
        $produit1->setImage($this->getReference('media3'));
        $produit1->setNom('Akita Inu');
        $produit1->setPrix('800.00');
        $produit1->setTva($this->getReference('tva1'));
        $manager->persist($produit1);

        $produit2 = new Produits();
        $produit2->setCategorie($this->getReference('categorie1'));
        $produit2->setDescription("Également appelé Nizinny, c'est un chien de taille moyenne (45–50 cm pour les mâles, 42–47 cm pour les femelles), ramassé, fort et musclé. Sa fourrure doit être épaisse, dense, longue et sans ondulation excessive. Toutes les couleurs et taches sont admises pour sa robe. Les poils tombant du front couvrent les yeux d’une manière très caractéristique. D’un caractère vif mais tempéré, vigilant, alerte, intelligent, curieux et doué d’une bonne mémoire. Très gourmand, il faut surveiller son alimentation car il a tendance à l’embonpoint.");
        $produit2->setDisponible('1');
        $produit2->setImage($this->getReference('media4'));
        $produit2->setNom('Berger Polonais de Plaine');
        $produit2->setPrix('650.00');
        $produit2->setTva($this->getReference('tva2'));
        $manager->persist($produit2);

        $produit3 = new Produits();
        $produit3->setCategorie($this->getReference('categorie1'));
        $produit3->setDescription("Le chien-loup de Saarloos n'est d'aucune utilité pour la chasse ou la défense car il n'a aucun instinct d'attaque. C'est un chien de compagnie qui s'attache beaucoup à son maître. Très affectueux et curieux, il est indulgent avec les enfants et sociable avec les autres chiens. Il est digne de confiance. Contrairement à de nombreuses races de chiens, le Saarloos va fuir plutôt que faire face lors d'un danger, car il garde certaines caractéristiques comportementales du loup : fuite face au danger donc, méfiance envers les étrangers, surtout les mâles, vie en meute et hégémonie du mâle dominant. Il est nécessaire pour le maître d'assimiler ces différences de comportement pour éviter de mettre son chien dans des situations où il pourrait mal réagir. Cela étant, il est attentif et très prudent. De plus, il possède une intelligence supérieure avec une vivacité d'observation très marquée. Malgré son instinct de méfiance, le Saarloos aboie très rarement.");
        $produit3->setDisponible('1');
        $produit3->setImage($this->getReference('media5'));
        $produit3->setNom('Chien Loup de Saarloos');
        $produit3->setPrix('1200.00');
        $produit3->setTva($this->getReference('tva2'));
        $manager->persist($produit3);
        
        $produit4 = new Produits();
        $produit4->setCategorie($this->getReference('categorie1'));
        $produit4->setDescription("L’épagneul picard est une race de chien originaire de Picardie en France. Il est fortement apparenté à l’épagneul bleu de Picardie et présente plusieurs similitudes avec cette race, mais c’est la race la plus ancienne des deux. C’est une des plus anciennes races d’épagneul du pays et il avait les faveurs de la noblesse française, restant très populaire pour la chasse après la Révolution grâce à son pelage résistant aux intempéries qui lui permet de chasser dans des conditions climatiques diverses et sur tous les terrains. Toutefois, il perd un peu de sa popularité avec l’arrivée des races anglaises au début du XXe siècle. Légèrement plus petit que le setter anglais, mais plus grands que les autres épagneuls, il n’a pas de problèmes de santé particuliers, bien qu’il soit sujet aux otites comme les autres races à oreilles tombantes.");
        $produit4->setDisponible('1');
        $produit4->setImage($this->getReference('media6'));
        $produit4->setNom('Epagneul Picard');
        $produit4->setPrix('500.00');
        $produit4->setTva($this->getReference('tva2'));
        $manager->persist($produit4);
        
        $produit5 = new Produits();
        $produit5->setCategorie($this->getReference('categorie1'));
        $produit5->setDescription("Le chien de Fila a commencé sa première utilisation au Brésil amené par les hollandais de la compagnie des indes occidentales, où dans un document portugais de 1631, on fait état de chiens de \"Fila\" qui sont des engelssen Doggen ou dogue de fort race (en France), croisement de Mastiff avec des Bulldogs, et étaient destinés à la poursuite de soldats déserteurs et d'esclaves. À la fin des guerres, on a ensuite abandonné l'utilisation de Filas pour les reconvertir en chiens de ferme (fazenda), où l'on destinait ce dernier à la garde et la conduite de bétail la journée, et attaché pour surveiller la ferme. De nuit, le Fila était lâché afin de surveiller la ferme et de contenir les esclaves. Lorsqu'un esclave s'échappait, on utilisait les Filas pour le rattraper sans le tuer, l'esclave étant considéré comme précieux. Le Fila est un chien typiquement molossoïde et considéré comme chien de bouvier \"boiadeiro\", c'est le véritable Fila. Un autre type de Fila issu de croisement avec des chiens de chasse afin de donner des qualités pour la chasse est considéré comme un croisement, ce sont plus souvent des Filas croisés avec des perdigueiros, pour alléger sa morphologie.");
        $produit5->setDisponible('1');
        $produit5->setImage($this->getReference('media7'));
        $produit5->setNom('Fila Brasileiro');
        $produit5->setPrix('1500.00');
        $produit5->setTva($this->getReference('tva2'));
        $manager->persist($produit5);
        
        $produit6 = new Produits();
        $produit6->setCategorie($this->getReference('categorie1'));
        $produit6->setDescription("Les pinschers sont débordants d'énergie. Ils sont très affectueux, comprennent vite et cherchent à vous protéger, même si ce sont pourtant de tout petits chiens. Dès leur plus jeune âge ils veulent dormir avec vous pour se sentir aussi en sécurité. Le pinscher nain n'est pas, par nature, un chien timideou qui reste sur les genoux. Au contraire, il montre une grande curiosité et a de l'énergie à revendre. Il est plutôt entêté et hargneux parfois mais peut se montrer très affectueux. Malgré sa petite taille, il fait un excellent gardien, toujours pressé de donner l'alarme lorsqu'une personne étrangère ou des animaux s'approchent de la maison. Mais en oubliant parfois qu'il n'a pas la taille d'un Dogue allemand. C'est pourquoi il peut vivre aisément dans un appartement. Cependant, ce chien actif aime beaucoup jouer et faire le clown pour attirer l'attention, et a besoin d'un minimum d'activité pour ne pas s'ennuyer, de plus, les promenades favorisent sa sociabilité parfois fragile. Le pinscher nain est un chien intelligent et parfois à caractère assez dominateur, son dressage n'est donc pas à laisser de côté.");
        $produit6->setDisponible('1');
        $produit6->setImage($this->getReference('media8'));
        $produit6->setNom('Pinscher nain');
        $produit6->setPrix('1000.00');
        $produit6->setTva($this->getReference('tva2'));
        $manager->persist($produit6);

        $produit7 = new Produits();
        $produit7->setCategorie($this->getReference('categorie1'));
        $produit7->setDescription("Le husky de Sibérie est un chien de travail de taille moyenne. Le corps est modérément compact, ses proportions et sa forme dénotent un équilibre entre les qualités recherchées pour un chien de traîneau : la puissance, la rapidité et l’endurance. Le husky de Sibérie, en bonne condition, est doté d’une musculature ferme et bien développée sans poids superflu. La queue en brosse bien fournie évoque son hérédité nordique, elle est portée au-dessus du dos en forme de faucille. Les oreilles de grandeur moyenne sont de forme triangulaire, rapprochées et attachées haut sur la tête. Elles sont garnies d’une bonne fourrure. L'extrémité légèrement arrondie pointe vers le haut. Les yeux sont en forme d'amande, moyennement espacés et disposés très légèrement en oblique. Ils peuvent être de couleur marron ou bleue. L'hétérochromie est acceptée. Le poil est double et de longueur moyenne : il ne doit pas être long au point de cacher la silhouette du chien. Le sous-poil est dense et doux. Toutes les couleurs de robe sont admises. Les diverses sortes de marques sur la tête donnent au husky de Sibérie des masques typiques que l'on ne trouve pas dans d'autres races.");
        $produit7->setDisponible('1');
        $produit7->setImage($this->getReference('media9'));
        $produit7->setNom('Siberian Husky');
        $produit7->setPrix('1100.00');
        $produit7->setTva($this->getReference('tva2'));
        $manager->persist($produit7);
        
        $produit8 = new Produits();
        $produit8->setCategorie($this->getReference('categorie1'));
        $produit8->setDescription("Le terre-neuve a la particularité d’avoir les pattes palmées (la membrane interdigitale ne se voit que rarement dans ses pattes, mais elle est quand-même bien développée), une fourrure épaisse huileuse, et un sous-poil dense l'aidant à résister au froid et facilitant la flottaison. C'est un chien d'une très grande fidélité et d'un caractère exceptionnel. Doux, généreux, intelligent, patient, c'est un bon compagnon pour les enfants. Sa force impressionnante et sa vitalité en font un excellent gardien (plus par sa morphologie impressionnante que par son caractère) jamais dangereux. C'est un chien polyvalent qui possède des dispositions naturelles pour le sauvetage. Il est doté d'un corps puissant, musclé et harmonieux, son ossature est charpentée mais sans lourdeur excessive. Il mesure environ 71 cm pour plus de 65 kg ; la femelle, 66 cm pour 55 kg environ. Sa robe au poil long et plat, imperméable à l'eau, dense et lustrée, est généralement de couleur noire, bronze, ou noire et blanche. Les couleurs grise ou marron et blanc que l'on peut croiser de temps à autre ne sont pas des couleurs reconnues par la FCI donc non acceptées à la confirmation. Sa tête est massive avec un crâne large, son front et sa face peuvent être plus ou moins lisses ou plissés. Son museau est court ou long, ses yeux sont bien bruns mais peuvent être noisettes chez le terre-neuve bronze.");
        $produit8->setDisponible('1');
        $produit8->setImage($this->getReference('media10'));
        $produit8->setNom('Terre neuve');
        $produit8->setPrix('900.00');
        $produit8->setTva($this->getReference('tva2'));
        $manager->persist($produit8);

        $produit9 = new Produits();
        $produit9->setCategorie($this->getReference('categorie1'));
        $produit9->setDescription("En dépit de sa taille minuscule, le Yorkshire terrier a su garder un tempérament de terrier typique. C'est un petit chien très vif, affectueux et têtu, qui apprécie beaucoup les sorties dans la nature. Comme n'importe quel chien, il a besoin de courir, et ne doit pas être constamment porté dans les bras. Il est resté un très bon tueur de souris et de rats, mais du fait de sa taille, ne peut guère attraper d'animaux plus gros, bien qu'il aime aller les affronter. Bien qu'il soit naturellement incapable d'arrêter physiquement un cambrioleur, ses aboiements en font un chien de garde efficace pour donner l'alarme.");
        $produit9->setDisponible('1');
        $produit9->setImage($this->getReference('media11'));
        $produit9->setNom('Yorkshire');
        $produit9->setPrix('700.00');
        $produit9->setTva($this->getReference('tva2'));
        $manager->persist($produit9);

        $produit10 = new Produits();
        $produit10->setCategorie($this->getReference('categorie2'));
        $produit10->setDescription("Le lieu de naissance de l'abyssin ne se situerait ni en Abyssinie, ni en Égypte, mais dans le sud-est asiatique, au bord de l'océan Indien. Toutefois, il se peut que la race soit africaine. Il se pourrait même que l'Abyssin soit l'héritier du chat sacré de l'Égypte antique. On décrit souvent l'abyssin comme un chat alerte et vif, semblant toujours en mouvement. On dit que c'est cependant un compagnon doux, affectueux avec un miaulement très discret. Il n'en serait pas moins plein de vie et athlétique, voire turbulent. Ces traits de caractère restent toutefois parfaitement individuels et sont fonctions de l'histoire de chaque chat.");
        $produit10->setDisponible('1');
        $produit10->setImage($this->getReference('media12'));
        $produit10->setNom('Abyssin');
        $produit10->setPrix('725.00');
        $produit10->setTva($this->getReference('tva2'));
        $manager->persist($produit10);

        $produit11 = new Produits();
        $produit11->setCategorie($this->getReference('categorie2'));
        $produit11->setDescription("Le bengal résulte du croisement entre un chat domestique et le chat-léopard (Prionailurus bengalensis), petit félin sauvage que l'on trouve en Asie et en particulier dans la province du Bengale1. C’est en 1963 que pour la première fois on croisa chat domestique et félin sauvage. C’était une américaine, Jean S. Mill, généticienne, qui réalisa le croisement et choisit un chat noir de la race american shorthair. On dit généralement du bengal qu'il est vif, intelligent, curieux mais aussi très affectueux, surtout avec les autres animaux et les enfants. Une particularité : il adorerait l'eau et aimerait particulièrement se percher en hauteur. Il serait sportif et bavard. Ces traits de caractère restent toutefois parfaitement individuels et sont en fonction de l'histoire de chaque chat.");
        $produit11->setDisponible('1');
        $produit11->setImage($this->getReference('media13'));
        $produit11->setNom('Bengal');
        $produit11->setPrix('1200.00');
        $produit11->setTva($this->getReference('tva2'));
        $manager->persist($produit11);

        $produit12 = new Produits();
        $produit12->setCategorie($this->getReference('categorie2'));
        $produit12->setDescription("Le bleu russe ou russe est une race de chats aux origines controversées et usuellement considérée comme une race naturelle apparue dans les pays froids comme la Russie ou les pays scandinaves. Les traits de caractère ne sont généralement pas décrits dans les standards. Toutefois, les standards TICA et le LOOF décrivent le bleu russe comme un chat timide. Le bleu russe est souvent décrit comme un chat intelligent et calme. On le dit discret, avec un miaulement doux et mélodieux pour les femelles et il n'aimerait pas particulièrement le bruit ni les enfants et préfèrerait sa tranquillité et une vie de famille calme. Le bleu russe est un chat décrit comme bien adapté à la vie en appartement. Il serait sociable avec les autres animaux. Le bleu russe est décrit comme timide et réservé, attaché à ses habitudes et intelligent par Tamsin Pickeral. Affectueux avec son maître, il le suivrait dans ces déplacements et réclamerait bruyamment sa nourriture. Le Dr Bruce Fogle insiste également sur le caractère réservé du bleu russe, adapté à la vie en appartement.");
        $produit12->setDisponible('1');
        $produit12->setImage($this->getReference('media14'));
        $produit12->setNom('Bleu Russe');
        $produit12->setPrix('750.00');
        $produit12->setTva($this->getReference('tva2'));
        $manager->persist($produit12);

        $produit13 = new Produits();
        $produit13->setCategorie($this->getReference('categorie2'));
        $produit13->setDescription("Le maine coon est une race de chat à poil mi-long originaire de l'État du Maine aux États-Unis. Ce chat au physique rustique est caractérisé par sa grande taille, son museau carré, ses oreilles avec plumets et son poil mi-long. Il est à ce jour l'une des plus grandes races de chat domestique, avec le savannah, une race originaire des États-Unis issue du croisement avec un serval, un félin sauvage africain. Le maine coon est également la plus ancienne race naturelle nord-américaine.");
        $produit13->setDisponible('1');
        $produit13->setImage($this->getReference('media15'));
        $produit13->setNom('Maine Coon');
        $produit13->setPrix('1500.00');
        $produit13->setTva($this->getReference('tva2'));
        $manager->persist($produit13);

        $produit14 = new Produits();
        $produit14->setCategorie($this->getReference('categorie2'));
        $produit14->setDescription("Le norvégien, également appelé chat des forêts norvégiennes ou norsk skogkatt, est une race de chat à poil mi-long originaire de Norvège. Ce chat de grande taille est caractérisé par sa fourrure à poils mi-longs très épaisse et son allure sauvage. D'apparence puissante, sa tête est caractérisée par son profil rectiligne et son menton fort. Les traits de caractère d'un chat ne sont pas définis dans le standard ; ils restent donc à l'appréciation de l'éleveur. Le caractère est toutefois parfaitement individuel et est fonction de l'histoire de chaque chat. Le norvégien est généralement décrit comme un chat rustique, sûr de lui et très posé. Son caractère sportif nécessite, pour qu'il soit heureux, de lui offrir une infrastructure adéquate comme un jardin ou à défaut, un arbre à chat. Il convient d'insister sur la redoutable efficacité de certains individus en tant que chasseurs : la taille imposante de la race leur permet de maîtriser sans difficulté des proies de dimensions importantes comme des lièvres adultes ou des oiseaux domestiques de grande taille comme l'oie et la dinde. Il peut être parfois nécessaire de contrôler les promenades diurnes ou nocturnes.");
        $produit14->setDisponible('1');
        $produit14->setImage($this->getReference('media16'));
        $produit14->setNom('Norvégien');
        $produit14->setPrix('1100.00');
        $produit14->setTva($this->getReference('tva2'));
        $manager->persist($produit14);

        $produit15 = new Produits();
        $produit15->setCategorie($this->getReference('categorie2'));
        $produit15->setDescription("L'oriental, aussi appelé oriental shorthair est une race de chat originaire de Thaïlande. Il est apparenté au siamois, la seule différence entre les deux races étant la couleur de robe puisque ce chat de taille moyenne à grande est la variété non pointée du siamois ou robe colorée. Le chat Oriental est souvent décrit comme étant vif, affectueux, intelligent, et à la morphologie foreign: il est souvent comparé à un lévrier. Un chat Oriental aime se mettre à la hauteur de l'homme, et cette conviction têtue l'amène donc à exiger un rapport égalitaire lors des échanges de respect, d'affection et de gentillesse. Il s’attache beaucoup plus à son maître qu’à la maison où il habite, car il comprend très bien que c’est de lui qu’il obtient tendresse, abri et nourriture, sa grande fierté l'empêchera de partir et devenir indépendant.");
        $produit15->setDisponible('1');
        $produit15->setImage($this->getReference('media17'));
        $produit15->setNom('Oriental Shorthair');
        $produit15->setPrix('700.00');
        $produit15->setTva($this->getReference('tva2'));
        $manager->persist($produit15);

        $produit16 = new Produits();
        $produit16->setCategorie($this->getReference('categorie2'));
        $produit16->setDescription("Le peterbald est une race de chat originaire de Russie. Ce chat est caractérisé par sa robe sans poils. Les peterbald sont décrits comme des chats tempérés et pacifiques mais restant énergiques et curieux. Comme les siamois et les orientaux ils supporteraient mal la solitude et auraient donc besoin de beaucoup d'attention. Ils apprécieraient donc également la compagnie d'autres chats et s'entenderaient généralement bien avec d'autres animaux et avec les enfants. Ces traits de caractère restent toutefois parfaitement individuels et sont avant tout fonctions de l'histoire de chaque chat, quelle que soit sa race.");
        $produit16->setDisponible('1');
        $produit16->setImage($this->getReference('media18'));
        $produit16->setNom('Peterbald');
        $produit16->setPrix('1350.00');
        $produit16->setTva($this->getReference('tva2'));
        $manager->persist($produit16);

        $produit17 = new Produits();
        $produit17->setCategorie($this->getReference('categorie2'));
        $produit17->setDescription("Le sacré de Birmanie ou birman, est une race de chats originaire de Birmanie. Ce chat de taille moyenne est caractérisé par sa robe à poil mi-long, qui présente le même patron colourpoint que le siamois mais ses pieds sont d'un blanc pur, comme s'il possédait des gants. Le chat sacré de Birmanie est souvent décrit comme un chat affectueux et doux. Certains éleveurs décrivent le Birman comme un chat joueur. On dit que malgré sa ressemblance avec le siamois, il n'en aurait pas le caractère puisqu'il serait calme et à la voix douce. Sociable, il s'adapterait bien à la vie en famille. Le birman adapte son comportement aux habitudes de vie de son maître, en d'autres termes le birman est affectueux dans un environnement aimant. Ayant une grande sensibilité, tous les chats sacré de Birmanie deviennent craintifs dans un environnement qui manque d'harmonie. Le chat sacré de Birmanie n'aime pas vivre seul, il s’ennuie, et préfère la compagnie d'autres chats de même race.");
        $produit17->setDisponible('1');
        $produit17->setImage($this->getReference('media19'));
        $produit17->setNom('Sacré de Birmanie');
        $produit17->setPrix('600.00');
        $produit17->setTva($this->getReference('tva2'));
        $manager->persist($produit17);

        $produit18 = new Produits();
        $produit18->setCategorie($this->getReference('categorie2'));
        $produit18->setDescription("Le thaï est une race de chat originaire de Thaïlande. Ce chat de taille moyenne est caractérisé par son physique du siamois traditionnel ou ancien type. Le caractère du thaï est décrit comme identique au siamois. Ce serait ce que l'on appelle des « chats-chiens ». Très affectueux et présent, le thaï, en tant qu’ancêtre du siamois, serait un chat assez expressif et bavard, sachant se faire comprendre en toute situation. Ces traits de caractère restent toutefois parfaitement individuels et sont avant tout fonctions de l'histoire de chaque chat.");
        $produit18->setDisponible('1');
        $produit18->setImage($this->getReference('media20'));
        $produit18->setNom('Thaï');
        $produit18->setPrix('850.00');
        $produit18->setTva($this->getReference('tva2'));
        $manager->persist($produit18);

        $manager->flush();
    }
    
    public function getOrder()
    {
        return 4;
    }
}