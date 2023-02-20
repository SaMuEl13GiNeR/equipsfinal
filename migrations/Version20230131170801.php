<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230131170801 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equip ADD cicle_id INT NOT NULL, ADD curs_id INT NOT NULL, DROP cicle, DROP curs');
        $this->addSql('ALTER TABLE equip ADD CONSTRAINT FK_F273C3B062328DAC FOREIGN KEY (cicle_id) REFERENCES cicle (id)');
        $this->addSql('ALTER TABLE equip ADD CONSTRAINT FK_F273C3B01F45B58B FOREIGN KEY (curs_id) REFERENCES curs (id)');
        $this->addSql('CREATE INDEX IDX_F273C3B062328DAC ON equip (cicle_id)');
        $this->addSql('CREATE INDEX IDX_F273C3B01F45B58B ON equip (curs_id)');
        $this->addSql('ALTER TABLE membre CHANGE nota nota NUMERIC(2, 2) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equip DROP FOREIGN KEY FK_F273C3B062328DAC');
        $this->addSql('ALTER TABLE equip DROP FOREIGN KEY FK_F273C3B01F45B58B');
        $this->addSql('DROP INDEX IDX_F273C3B062328DAC ON equip');
        $this->addSql('DROP INDEX IDX_F273C3B01F45B58B ON equip');
        $this->addSql('ALTER TABLE equip ADD cicle VARCHAR(10) NOT NULL, ADD curs VARCHAR(10) NOT NULL, DROP cicle_id, DROP curs_id');
        $this->addSql('ALTER TABLE membre CHANGE nota nota NUMERIC(2, 0) DEFAULT NULL');
    }
}
