<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210610101834 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'creation table user';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649AA08CB10 (login), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contact CHANGE function function VARCHAR(150) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE contact CHANGE function function VARCHAR(150) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
