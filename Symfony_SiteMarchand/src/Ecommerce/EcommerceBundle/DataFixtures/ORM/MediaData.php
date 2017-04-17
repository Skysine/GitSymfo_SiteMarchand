<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('img/terreneuve.png');
        $media1->setAlt('Chiens');
        $manager->persist($media1);
        
        $media2 = new Media();
        $media2->setPath('img/abyssin.png');
        $media2->setAlt('Chats');
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setPath('img/akita.png');
        $media3->setAlt('Akita Inu');
        $manager->persist($media3);   
            
        $media4 = new Media();
        $media4->setPath('img/nizinny.png');
        $media4->setAlt('Nizinny');
        $manager->persist($media4);              
        
        $media5 = new Media();
        $media5->setPath('img/saarloos.png');
        $media5->setAlt('Saarloos');
        $manager->persist($media5);
        
        $media6 = new Media();
        $media6->setPath('img/picard.png');
        $media6->setAlt('Picard');
        $manager->persist($media6);
        
        $media7 = new Media();
        $media7->setPath('img/fila.png');
        $media7->setAlt('Fila');
        $manager->persist($media7);
        
        $media8 = new Media();
        $media8->setPath('img/pinscher.png');
        $media8->setAlt('Pinscher');
        $manager->persist($media8);

        $media9 = new Media();
        $media9->setPath('img/husky.png');
        $media9->setAlt('Husky');
        $manager->persist($media9);

        $media10 = new Media();
        $media10->setPath('img/terreneuve.png');
        $media10->setAlt('Terre Neuve');
        $manager->persist($media10);

        $media11 = new Media();
        $media11->setPath('img/yorkshire.png');
        $media11->setAlt('Yorkshire');
        $manager->persist($media11);

        $media12 = new Media();
        $media12->setPath('img/abyssin.png');
        $media12->setAlt('Abyssin');
        $manager->persist($media12);

        $media13 = new Media();
        $media13->setPath('img/bengal.png');
        $media13->setAlt('Bengal');
        $manager->persist($media13);

        $media14 = new Media();
        $media14->setPath('img/bleu.png');
        $media14->setAlt('Bleu russe');
        $manager->persist($media14);

        $media15 = new Media();
        $media15->setPath('img/mainecoon.png');
        $media15->setAlt('Main Coon');
        $manager->persist($media15);

        $media16 = new Media();
        $media16->setPath('img/norvegien.png');
        $media16->setAlt('Norvégien');
        $manager->persist($media16);

        $media17 = new Media();
        $media17->setPath('img/oriental.png');
        $media17->setAlt('Oriental');
        $manager->persist($media17);

        $media18 = new Media();
        $media18->setPath('img/peterbald.png');
        $media18->setAlt('Peterbald');
        $manager->persist($media18);

        $media19 = new Media();
        $media19->setPath('img/birmanie.png');
        $media19->setAlt('Birman');
        $manager->persist($media19);

        $media20 = new Media();
        $media20->setPath('img/thai.png');
        $media20->setAlt('Thaï');
        $manager->persist($media20);
        
        $manager->flush();

        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);        
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);        
        $this->addReference('media8', $media8);
        $this->addReference('media9', $media9);
        $this->addReference('media10', $media10);
        $this->addReference('media11', $media11);
        $this->addReference('media12', $media12);
        $this->addReference('media13', $media13);        
        $this->addReference('media14', $media14);
        $this->addReference('media15', $media15);        
        $this->addReference('media16', $media16);
        $this->addReference('media17', $media17);        
        $this->addReference('media18', $media18);
        $this->addReference('media19', $media19);        
        $this->addReference('media20', $media20);
        
    }
    
    public function getOrder()
    {
        return 1;
    }
}