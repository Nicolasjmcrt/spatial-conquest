<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230816140606 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE planet (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, intro VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, fact_name1 VARCHAR(255) NOT NULL, fact_name2 VARCHAR(255) NOT NULL, fact_name3 VARCHAR(255) NOT NULL, fact_name4 VARCHAR(255) NOT NULL, fact_name5 VARCHAR(255) NOT NULL, fact_name6 VARCHAR(255) NOT NULL, fact_name7 VARCHAR(255) NOT NULL, fact_name8 VARCHAR(255) NOT NULL, fact_name9 VARCHAR(255) NOT NULL, fact_name10 VARCHAR(255) NOT NULL, fact_text1 LONGTEXT NOT NULL, fact_text2 LONGTEXT NOT NULL, fact_text3 LONGTEXT NOT NULL, fact_text4 LONGTEXT NOT NULL, fact_text5 LONGTEXT NOT NULL, fact_text6 LONGTEXT NOT NULL, fact_text7 LONGTEXT NOT NULL, fact_text8 LONGTEXT NOT NULL, fact_text9 LONGTEXT NOT NULL, fact_text10 LONGTEXT NOT NULL, hero_img VARCHAR(255) NOT NULL, planet_img1 VARCHAR(255) NOT NULL, planet_img2 VARCHAR(255) NOT NULL, planet_img3 VARCHAR(255) NOT NULL, planet_img4 VARCHAR(255) NOT NULL, planet_img5 VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE planet');
    }
}
