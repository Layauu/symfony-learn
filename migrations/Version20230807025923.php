<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230807025923 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE paint_category (paint_id INT NOT NULL, category_id INT NOT NULL, PRIMARY KEY(paint_id, category_id))');
        $this->addSql('CREATE INDEX IDX_6ECF4F139017B5FF ON paint_category (paint_id)');
        $this->addSql('CREATE INDEX IDX_6ECF4F1312469DE2 ON paint_category (category_id)');
        $this->addSql('ALTER TABLE paint_category ADD CONSTRAINT FK_6ECF4F139017B5FF FOREIGN KEY (paint_id) REFERENCES paint (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE paint_category ADD CONSTRAINT FK_6ECF4F1312469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE paint ADD painter_id INT NOT NULL');
        $this->addSql('ALTER TABLE paint ADD CONSTRAINT FK_577A8417D3A137FE FOREIGN KEY (painter_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_577A8417D3A137FE ON paint (painter_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE paint_category DROP CONSTRAINT FK_6ECF4F139017B5FF');
        $this->addSql('ALTER TABLE paint_category DROP CONSTRAINT FK_6ECF4F1312469DE2');
        $this->addSql('DROP TABLE paint_category');
        $this->addSql('ALTER TABLE paint DROP CONSTRAINT FK_577A8417D3A137FE');
        $this->addSql('DROP INDEX IDX_577A8417D3A137FE');
        $this->addSql('ALTER TABLE paint DROP painter_id');
    }
}
