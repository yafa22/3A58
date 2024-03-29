<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219194626 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE conseil (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, conseil VARCHAR(255) NOT NULL, date DATE NOT NULL, categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE defi (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, objectif VARCHAR(255) NOT NULL, duree INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rvv (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, date DATE NOT NULL, heure TIME NOT NULL, choix VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, age INT NOT NULL, genre VARCHAR(255) NOT NULL, num_tel INT NOT NULL, adresse VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abonnement DROP numero_tel, CHANGE email name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE rdv CHANGE descripion description VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE conseil');
        $this->addSql('DROP TABLE defi');
        $this->addSql('DROP TABLE rvv');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE abonnement ADD numero_tel INT NOT NULL, CHANGE name email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE rdv CHANGE description descripion VARCHAR(255) NOT NULL');
    }
}
