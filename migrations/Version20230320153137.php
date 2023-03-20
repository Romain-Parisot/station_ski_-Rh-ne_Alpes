<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230320153137 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE domaine (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, logo VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE piste (id INT AUTO_INCREMENT NOT NULL, station_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, level VARCHAR(255) NOT NULL, schedule JSON NOT NULL, message LONGTEXT DEFAULT NULL, type TINYINT(1) NOT NULL, is_close TINYINT(1) NOT NULL, INDEX IDX_59E2507721BDB235 (station_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE remonte_meca (id INT AUTO_INCREMENT NOT NULL, station_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, schedule JSON NOT NULL, message LONGTEXT DEFAULT NULL, is_close TINYINT(1) NOT NULL, INDEX IDX_F9EDED3621BDB235 (station_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE remonte_meca_piste (remonte_meca_id INT NOT NULL, piste_id INT NOT NULL, INDEX IDX_4FBD8A8F73CC4F8F (remonte_meca_id), INDEX IDX_4FBD8A8FC34065BC (piste_id), PRIMARY KEY(remonte_meca_id, piste_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE station (id INT AUTO_INCREMENT NOT NULL, domaine_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, logo VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_9F39F8B14272FC9F (domaine_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE super_admin (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_BC8C2783F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE piste ADD CONSTRAINT FK_59E2507721BDB235 FOREIGN KEY (station_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE remonte_meca ADD CONSTRAINT FK_F9EDED3621BDB235 FOREIGN KEY (station_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE remonte_meca_piste ADD CONSTRAINT FK_4FBD8A8F73CC4F8F FOREIGN KEY (remonte_meca_id) REFERENCES remonte_meca (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE remonte_meca_piste ADD CONSTRAINT FK_4FBD8A8FC34065BC FOREIGN KEY (piste_id) REFERENCES piste (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE station ADD CONSTRAINT FK_9F39F8B14272FC9F FOREIGN KEY (domaine_id) REFERENCES domaine (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE piste DROP FOREIGN KEY FK_59E2507721BDB235');
        $this->addSql('ALTER TABLE remonte_meca DROP FOREIGN KEY FK_F9EDED3621BDB235');
        $this->addSql('ALTER TABLE remonte_meca_piste DROP FOREIGN KEY FK_4FBD8A8F73CC4F8F');
        $this->addSql('ALTER TABLE remonte_meca_piste DROP FOREIGN KEY FK_4FBD8A8FC34065BC');
        $this->addSql('ALTER TABLE station DROP FOREIGN KEY FK_9F39F8B14272FC9F');
        $this->addSql('DROP TABLE domaine');
        $this->addSql('DROP TABLE piste');
        $this->addSql('DROP TABLE remonte_meca');
        $this->addSql('DROP TABLE remonte_meca_piste');
        $this->addSql('DROP TABLE station');
        $this->addSql('DROP TABLE super_admin');
    }
}
