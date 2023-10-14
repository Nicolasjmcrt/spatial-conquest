<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230816160057 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planet ADD img_caption1 VARCHAR(255) NOT NULL, ADD img_caption2 VARCHAR(255) NOT NULL, ADD img_caption3 VARCHAR(255) NOT NULL, ADD img_caption4 VARCHAR(255) NOT NULL, ADD img_caption5 VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planet DROP img_caption1, DROP img_caption2, DROP img_caption3, DROP img_caption4, DROP img_caption5');
    }
}
