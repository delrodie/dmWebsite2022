<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220408181020 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE showbiz_album (id INT AUTO_INCREMENT NOT NULL, artiste_id INT DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, mode VARCHAR(255) DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, contenu LONGTEXT DEFAULT NULL, resume LONGTEXT DEFAULT NULL, piste INT DEFAULT NULL, compositeur VARCHAR(255) DEFAULT NULL, choeurs VARCHAR(255) DEFAULT NULL, arrangeur VARCHAR(255) DEFAULT NULL, producteur VARCHAR(255) DEFAULT NULL, mixage VARCHAR(255) DEFAULT NULL, master VARCHAR(255) DEFAULT NULL, spotify VARCHAR(255) DEFAULT NULL, deezer VARCHAR(255) DEFAULT NULL, itunes VARCHAR(255) DEFAULT NULL, amazon VARCHAR(255) DEFAULT NULL, youtube VARCHAR(255) DEFAULT NULL, media VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT NULL, INDEX IDX_6E60E8A21D25844 (artiste_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE showbiz_album ADD CONSTRAINT FK_6E60E8A21D25844 FOREIGN KEY (artiste_id) REFERENCES showbiz_artiste (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE showbiz_album');
    }
}
