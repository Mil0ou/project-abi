<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220221175424 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE collaborateur (id INT AUTO_INCREMENT NOT NULL, matricule_collaborateur VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, salaire VARCHAR(255) DEFAULT NULL, salaire_brut INT NOT NULL, indemnite_stage INT DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, status VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE collaborateur');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE project CHANGE abrege_project abrege_project VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom_project nom_project VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE info_technique info_technique LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE commentaire_commercial commentaire_commercial LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE remarque_estime remarque_estime VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE resumer_doc resumer_doc VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_project type_project VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
