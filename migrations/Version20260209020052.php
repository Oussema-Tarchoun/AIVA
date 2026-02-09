<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260209020052 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chapitre CHANGE id_chapitre id_chapitre INT DEFAULT NULL, CHANGE contenu contenu LONGTEXT NOT NULL, CHANGE ordre ordre INT NOT NULL');
        $this->addSql('ALTER TABLE chapitre ADD CONSTRAINT FK_8C62B025134FCDAC FOREIGN KEY (id_cours) REFERENCES cours (id)');
        $this->addSql('CREATE INDEX IDX_8C62B025134FCDAC ON chapitre (id_cours)');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY `fk_cours_user`');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY `fk_cours_user`');
        $this->addSql('ALTER TABLE cours DROP id_cours, CHANGE description description VARCHAR(255) NOT NULL, CHANGE niveau niveau VARCHAR(255) NOT NULL, CHANGE duree_estimee duree_estimee INT NOT NULL, CHANGE categorie categorie VARCHAR(255) NOT NULL, CHANGE date_creation date_creation DATE NOT NULL, CHANGE status status VARCHAR(255) NOT NULL, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP INDEX fk_cours_user ON cours');
        $this->addSql('CREATE INDEX IDX_FDCA8C9CA76ED395 ON cours (user_id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT `fk_cours_user` FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY `FK_REPAS_USER`');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY `FK_REPAS_USER`');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT FK_A8D351B3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP INDEX idx_repas_user ON repas');
        $this->addSql('CREATE INDEX IDX_A8D351B3A76ED395 ON repas (user_id)');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT `FK_REPAS_USER` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chapitre DROP FOREIGN KEY FK_8C62B025134FCDAC');
        $this->addSql('ALTER TABLE chapitre DROP FOREIGN KEY FK_8C62B025134FCDAC');
        $this->addSql('ALTER TABLE chapitre CHANGE id_chapitre id_chapitre INT NOT NULL, CHANGE contenu contenu LONGTEXT DEFAULT NULL, CHANGE ordre ordre INT DEFAULT NULL');
        $this->addSql('DROP INDEX idx_8c62b025134fcdac ON chapitre');
        $this->addSql('CREATE INDEX fk_chapitre_cours ON chapitre (id_cours)');
        $this->addSql('ALTER TABLE chapitre ADD CONSTRAINT FK_8C62B025134FCDAC FOREIGN KEY (id_cours) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CA76ED395');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CA76ED395');
        $this->addSql('ALTER TABLE cours ADD id_cours INT NOT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE niveau niveau VARCHAR(255) DEFAULT NULL, CHANGE duree_estimee duree_estimee INT DEFAULT NULL, CHANGE categorie categorie VARCHAR(255) DEFAULT NULL, CHANGE date_creation date_creation DATE DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT NULL, CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT `fk_cours_user` FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_fdca8c9ca76ed395 ON cours');
        $this->addSql('CREATE INDEX fk_cours_user ON cours (user_id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY FK_A8D351B3A76ED395');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY FK_A8D351B3A76ED395');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT `FK_REPAS_USER` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('DROP INDEX idx_a8d351b3a76ed395 ON repas');
        $this->addSql('CREATE INDEX IDX_REPAS_USER ON repas (user_id)');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT FK_A8D351B3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }
}
