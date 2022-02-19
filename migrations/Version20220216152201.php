<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220216152201 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project CHANGE date_previonnel_fin date_previsionnel_fin DATE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE project CHANGE abrege_project abrege_project VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom_project nom_project VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE info_technique info_technique LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE commentaire_commercial commentaire_commercial LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE remarque_estime remarque_estime VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE resumer_doc resumer_doc VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_project type_project VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE date_previsionnel_fin date_previonnel_fin DATE NOT NULL');
    }
}
