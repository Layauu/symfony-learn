<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230807025243 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE paint_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE paint (id INT NOT NULL, name VARCHAR(255) NOT NULL, width NUMERIC(6, 2) DEFAULT NULL, height NUMERIC(6, 2) DEFAULT NULL, sellable BOOLEAN NOT NULL, price NUMERIC(10, 2) DEFAULT NULL, realisation_date TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, description TEXT NOT NULL, portfolio BOOLEAN NOT NULL, slug VARCHAR(255) NOT NULL, file_path VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE paint_id_seq CASCADE');
        $this->addSql('DROP TABLE paint');
    }
}
