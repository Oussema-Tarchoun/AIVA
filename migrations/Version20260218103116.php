<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260218103116 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL, expires_at DATETIME NOT NULL, user_id INT NOT NULL, INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE activite_physique DROP FOREIGN KEY `FK_ACTIVITE_OBJECTIF`');
        $this->addSql('ALTER TABLE activite_physique DROP FOREIGN KEY `FK_ACTIVITE_OBJECTIF`');
        $this->addSql('ALTER TABLE activite_physique CHANGE type type VARCHAR(100) NOT NULL, CHANGE duree duree INT NOT NULL, CHANGE calories_brulees calories_brulees INT NOT NULL, CHANGE date date DATE NOT NULL, CHANGE intensite intensite VARCHAR(50) NOT NULL, CHANGE objectif_id objectif_id INT NOT NULL');
        $this->addSql('ALTER TABLE activite_physique ADD CONSTRAINT FK_261F98F157D1AD4 FOREIGN KEY (objectif_id) REFERENCES objectif (id)');
        $this->addSql('DROP INDEX fk_activite_objectif ON activite_physique');
        $this->addSql('CREATE INDEX IDX_261F98F157D1AD4 ON activite_physique (objectif_id)');
        $this->addSql('ALTER TABLE activite_physique ADD CONSTRAINT `FK_ACTIVITE_OBJECTIF` FOREIGN KEY (objectif_id) REFERENCES objectif (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE aliment DROP calories');
        $this->addSql('ALTER TABLE categorie DROP FOREIGN KEY `FK_CATEGORIE_USER`');
        $this->addSql('ALTER TABLE categorie CHANGE id_user id_user INT DEFAULT NULL');
        $this->addSql('DROP INDEX fk_categorie_user ON categorie');
        $this->addSql('CREATE INDEX IDX_497DD6346B3CA4B ON categorie (id_user)');
        $this->addSql('ALTER TABLE categorie ADD CONSTRAINT `FK_CATEGORIE_USER` FOREIGN KEY (id_user) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE chapitre DROP FOREIGN KEY `FK_CHAPITRE_COURS`');
        $this->addSql('ALTER TABLE chapitre DROP FOREIGN KEY `FK_CHAPITRE_COURS`');
        $this->addSql('ALTER TABLE chapitre CHANGE contenu contenu LONGTEXT NOT NULL, CHANGE exercise exercise LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE chapitre ADD CONSTRAINT FK_8C62B025134FCDAC FOREIGN KEY (id_cours) REFERENCES cours (id)');
        $this->addSql('DROP INDEX idx_chapitre_cours ON chapitre');
        $this->addSql('CREATE INDEX IDX_8C62B025134FCDAC ON chapitre (id_cours)');
        $this->addSql('ALTER TABLE chapitre ADD CONSTRAINT `FK_CHAPITRE_COURS` FOREIGN KEY (id_cours) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY `FK_COURS_USER`');
        $this->addSql('DROP INDEX UNIQ_COURS_ID_COURS ON cours');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY `FK_COURS_USER`');
        $this->addSql('ALTER TABLE cours DROP id_cours, CHANGE description description VARCHAR(255) NOT NULL, CHANGE niveau niveau VARCHAR(255) NOT NULL, CHANGE duree_estimee duree_estimee INT NOT NULL, CHANGE categorie categorie VARCHAR(255) NOT NULL, CHANGE date_creation date_creation DATE NOT NULL, CHANGE status status VARCHAR(255) NOT NULL, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP INDEX fk_cours_user ON cours');
        $this->addSql('CREATE INDEX IDX_FDCA8C9CA76ED395 ON cours (user_id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT `FK_COURS_USER` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE depense DROP FOREIGN KEY `FK_DEPENSE_CATEGORIE`');
        $this->addSql('ALTER TABLE depense CHANGE description description VARCHAR(255) NOT NULL, CHANGE statut statut VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX fk_depense_categorie ON depense');
        $this->addSql('CREATE INDEX IDX_34059757C9486A13 ON depense (id_categorie)');
        $this->addSql('ALTER TABLE depense ADD CONSTRAINT `FK_DEPENSE_CATEGORIE` FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE energie DROP FOREIGN KEY `FK_ENERGIE_USER`');
        $this->addSql('DROP INDEX idx_energie_user ON energie');
        $this->addSql('CREATE INDEX IDX_2287DAA0A76ED395 ON energie (user_id)');
        $this->addSql('ALTER TABLE energie ADD CONSTRAINT `FK_ENERGIE_USER` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE objectif DROP FOREIGN KEY `FK_OBJECTIF_USER`');
        $this->addSql('ALTER TABLE objectif DROP FOREIGN KEY `FK_OBJECTIF_USER`');
        $this->addSql('ALTER TABLE objectif CHANGE description description LONGTEXT NOT NULL, CHANGE type type VARCHAR(50) NOT NULL, CHANGE valeur_cible valeur_cible INT NOT NULL, CHANGE date_debut date_debut DATE NOT NULL, CHANGE date_fin date_fin DATE NOT NULL, CHANGE statut statut VARCHAR(50) NOT NULL, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE objectif ADD CONSTRAINT FK_E2F86851A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP INDEX fk_objectif_user ON objectif');
        $this->addSql('CREATE INDEX IDX_E2F86851A76ED395 ON objectif (user_id)');
        $this->addSql('ALTER TABLE objectif ADD CONSTRAINT `FK_OBJECTIF_USER` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recommandation DROP FOREIGN KEY `FK_RECO_ENERGIE`');
        $this->addSql('DROP INDEX idx_reco_energie ON recommandation');
        $this->addSql('CREATE INDEX IDX_C7782A28B732A364 ON recommandation (energie_id)');
        $this->addSql('ALTER TABLE recommandation ADD CONSTRAINT `FK_RECO_ENERGIE` FOREIGN KEY (energie_id) REFERENCES energie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY `FK_REPAS_USER`');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY `FK_REPAS_USER`');
        $this->addSql('ALTER TABLE repas ADD date DATE NOT NULL');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT FK_A8D351B3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP INDEX fk_repas_user ON repas');
        $this->addSql('CREATE INDEX IDX_A8D351B3A76ED395 ON repas (user_id)');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT `FK_REPAS_USER` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE repas_aliment DROP FOREIGN KEY `FK_REPAS_ALIMENT_ALIMENT`');
        $this->addSql('DROP INDEX fk_repas_aliment_aliment ON repas_aliment');
        $this->addSql('CREATE INDEX IDX_D91FFC7415B9F11 ON repas_aliment (aliment_id)');
        $this->addSql('ALTER TABLE repas_aliment ADD CONSTRAINT `FK_REPAS_ALIMENT_ALIMENT` FOREIGN KEY (aliment_id) REFERENCES aliment (id) ON DELETE CASCADE');
        $this->addSql('DROP INDEX email ON user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE activite_physique DROP FOREIGN KEY FK_261F98F157D1AD4');
        $this->addSql('ALTER TABLE activite_physique DROP FOREIGN KEY FK_261F98F157D1AD4');
        $this->addSql('ALTER TABLE activite_physique CHANGE type type VARCHAR(100) DEFAULT NULL, CHANGE duree duree INT DEFAULT NULL, CHANGE calories_brulees calories_brulees INT DEFAULT NULL, CHANGE date date DATE DEFAULT NULL, CHANGE intensite intensite VARCHAR(50) DEFAULT NULL, CHANGE objectif_id objectif_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE activite_physique ADD CONSTRAINT `FK_ACTIVITE_OBJECTIF` FOREIGN KEY (objectif_id) REFERENCES objectif (id) ON DELETE SET NULL');
        $this->addSql('DROP INDEX idx_261f98f157d1ad4 ON activite_physique');
        $this->addSql('CREATE INDEX FK_ACTIVITE_OBJECTIF ON activite_physique (objectif_id)');
        $this->addSql('ALTER TABLE activite_physique ADD CONSTRAINT FK_261F98F157D1AD4 FOREIGN KEY (objectif_id) REFERENCES objectif (id)');
        $this->addSql('ALTER TABLE aliment ADD calories DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE categorie DROP FOREIGN KEY FK_497DD6346B3CA4B');
        $this->addSql('ALTER TABLE categorie CHANGE id_user id_user INT NOT NULL');
        $this->addSql('DROP INDEX idx_497dd6346b3ca4b ON categorie');
        $this->addSql('CREATE INDEX FK_CATEGORIE_USER ON categorie (id_user)');
        $this->addSql('ALTER TABLE categorie ADD CONSTRAINT FK_497DD6346B3CA4B FOREIGN KEY (id_user) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE chapitre DROP FOREIGN KEY FK_8C62B025134FCDAC');
        $this->addSql('ALTER TABLE chapitre DROP FOREIGN KEY FK_8C62B025134FCDAC');
        $this->addSql('ALTER TABLE chapitre CHANGE contenu contenu TEXT NOT NULL, CHANGE exercise exercise TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE chapitre ADD CONSTRAINT `FK_CHAPITRE_COURS` FOREIGN KEY (id_cours) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_8c62b025134fcdac ON chapitre');
        $this->addSql('CREATE INDEX IDX_CHAPITRE_COURS ON chapitre (id_cours)');
        $this->addSql('ALTER TABLE chapitre ADD CONSTRAINT FK_8C62B025134FCDAC FOREIGN KEY (id_cours) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CA76ED395');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CA76ED395');
        $this->addSql('ALTER TABLE cours ADD id_cours INT NOT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE niveau niveau VARCHAR(255) DEFAULT NULL, CHANGE duree_estimee duree_estimee INT DEFAULT NULL, CHANGE categorie categorie VARCHAR(255) DEFAULT NULL, CHANGE date_creation date_creation DATE DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT NULL, CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT `FK_COURS_USER` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_COURS_ID_COURS ON cours (id_cours)');
        $this->addSql('DROP INDEX idx_fdca8c9ca76ed395 ON cours');
        $this->addSql('CREATE INDEX FK_COURS_USER ON cours (user_id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE depense DROP FOREIGN KEY FK_34059757C9486A13');
        $this->addSql('ALTER TABLE depense CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE statut statut VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX idx_34059757c9486a13 ON depense');
        $this->addSql('CREATE INDEX FK_DEPENSE_CATEGORIE ON depense (id_categorie)');
        $this->addSql('ALTER TABLE depense ADD CONSTRAINT FK_34059757C9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE energie DROP FOREIGN KEY FK_2287DAA0A76ED395');
        $this->addSql('DROP INDEX idx_2287daa0a76ed395 ON energie');
        $this->addSql('CREATE INDEX IDX_ENERGIE_USER ON energie (user_id)');
        $this->addSql('ALTER TABLE energie ADD CONSTRAINT FK_2287DAA0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE objectif DROP FOREIGN KEY FK_E2F86851A76ED395');
        $this->addSql('ALTER TABLE objectif DROP FOREIGN KEY FK_E2F86851A76ED395');
        $this->addSql('ALTER TABLE objectif CHANGE description description LONGTEXT DEFAULT NULL, CHANGE type type VARCHAR(50) DEFAULT NULL, CHANGE valeur_cible valeur_cible INT DEFAULT NULL, CHANGE date_debut date_debut DATE DEFAULT NULL, CHANGE date_fin date_fin DATE DEFAULT NULL, CHANGE statut statut VARCHAR(50) DEFAULT NULL, CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE objectif ADD CONSTRAINT `FK_OBJECTIF_USER` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_e2f86851a76ed395 ON objectif');
        $this->addSql('CREATE INDEX FK_OBJECTIF_USER ON objectif (user_id)');
        $this->addSql('ALTER TABLE objectif ADD CONSTRAINT FK_E2F86851A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE recommandation DROP FOREIGN KEY FK_C7782A28B732A364');
        $this->addSql('DROP INDEX idx_c7782a28b732a364 ON recommandation');
        $this->addSql('CREATE INDEX IDX_RECO_ENERGIE ON recommandation (energie_id)');
        $this->addSql('ALTER TABLE recommandation ADD CONSTRAINT FK_C7782A28B732A364 FOREIGN KEY (energie_id) REFERENCES energie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY FK_A8D351B3A76ED395');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY FK_A8D351B3A76ED395');
        $this->addSql('ALTER TABLE repas DROP date');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT `FK_REPAS_USER` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('DROP INDEX idx_a8d351b3a76ed395 ON repas');
        $this->addSql('CREATE INDEX FK_REPAS_USER ON repas (user_id)');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT FK_A8D351B3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE repas_aliment DROP FOREIGN KEY FK_D91FFC7415B9F11');
        $this->addSql('DROP INDEX idx_d91ffc7415b9f11 ON repas_aliment');
        $this->addSql('CREATE INDEX FK_REPAS_ALIMENT_ALIMENT ON repas_aliment (aliment_id)');
        $this->addSql('ALTER TABLE repas_aliment ADD CONSTRAINT FK_D91FFC7415B9F11 FOREIGN KEY (aliment_id) REFERENCES aliment (id) ON DELETE CASCADE');
        $this->addSql('DROP INDEX uniq_identifier_email ON user');
        $this->addSql('CREATE UNIQUE INDEX email ON user (email)');
    }
}
