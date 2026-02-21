<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260211180815 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE activite_physique DROP FOREIGN KEY `fk_activite_objectif`');
        $this->addSql('ALTER TABLE activite_physique DROP FOREIGN KEY `fk_activite_objectif`');
        $this->addSql('ALTER TABLE activite_physique ADD date DATE NOT NULL, ADD intensite VARCHAR(50) NOT NULL, DROP date_activite, CHANGE calories_brulees calories_brulees INT NOT NULL, CHANGE objectif_id objectif_id INT NOT NULL');
        $this->addSql('ALTER TABLE activite_physique ADD CONSTRAINT FK_261F98F157D1AD4 FOREIGN KEY (objectif_id) REFERENCES objectif (id)');
        $this->addSql('DROP INDEX fk_activite_objectif ON activite_physique');
        $this->addSql('CREATE INDEX IDX_261F98F157D1AD4 ON activite_physique (objectif_id)');
        $this->addSql('ALTER TABLE activite_physique ADD CONSTRAINT `fk_activite_objectif` FOREIGN KEY (objectif_id) REFERENCES objectif (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE aliment ADD macro JSON DEFAULT NULL, DROP calories, CHANGE quantite quantite DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE categorie ADD description VARCHAR(255) DEFAULT NULL, ADD id_user INT DEFAULT NULL');
        $this->addSql('ALTER TABLE categorie ADD CONSTRAINT FK_497DD6346B3CA4B FOREIGN KEY (id_user) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_497DD6346B3CA4B ON categorie (id_user)');
        $this->addSql('ALTER TABLE chapitre DROP FOREIGN KEY `fk_chapitre_cours`');
        $this->addSql('DROP INDEX fk_chapitre_cours ON chapitre');
        $this->addSql('ALTER TABLE chapitre ADD id_chapitre INT DEFAULT NULL, ADD exercise LONGTEXT DEFAULT NULL, ADD id_cours INT NOT NULL, CHANGE contenu contenu LONGTEXT NOT NULL, CHANGE cours_id ordre INT NOT NULL');
        $this->addSql('ALTER TABLE chapitre ADD CONSTRAINT FK_8C62B025134FCDAC FOREIGN KEY (id_cours) REFERENCES cours (id)');
        $this->addSql('CREATE INDEX IDX_8C62B025134FCDAC ON chapitre (id_cours)');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY `fk_cours_user`');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY `fk_cours_user`');
        $this->addSql('ALTER TABLE cours ADD niveau VARCHAR(255) NOT NULL, ADD duree_estimee INT NOT NULL, ADD categorie VARCHAR(255) NOT NULL, ADD date_creation DATE NOT NULL, ADD status VARCHAR(255) NOT NULL, CHANGE titre tittre VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP INDEX fk_cours_user ON cours');
        $this->addSql('CREATE INDEX IDX_FDCA8C9CA76ED395 ON cours (user_id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT `fk_cours_user` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE depense DROP FOREIGN KEY `fk_depense_categorie`');
        $this->addSql('DROP INDEX fk_depense_categorie ON depense');
        $this->addSql('ALTER TABLE depense ADD statut VARCHAR(255) NOT NULL, ADD id_categorie INT NOT NULL, DROP categorie_id');
        $this->addSql('ALTER TABLE depense ADD CONSTRAINT FK_34059757C9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_34059757C9486A13 ON depense (id_categorie)');
        $this->addSql('ALTER TABLE energie DROP FOREIGN KEY `fk_energie_user`');
        $this->addSql('ALTER TABLE energie ADD source VARCHAR(255) NOT NULL, CHANGE periode periode DOUBLE PRECISION NOT NULL, CHANGE valeur valeur DOUBLE PRECISION NOT NULL');
        $this->addSql('DROP INDEX fk_energie_user ON energie');
        $this->addSql('CREATE INDEX IDX_2287DAA0A76ED395 ON energie (user_id)');
        $this->addSql('ALTER TABLE energie ADD CONSTRAINT `fk_energie_user` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE objectif DROP FOREIGN KEY `fk_objectif_user`');
        $this->addSql('ALTER TABLE objectif DROP FOREIGN KEY `fk_objectif_user`');
        $this->addSql('ALTER TABLE objectif ADD type VARCHAR(50) NOT NULL, ADD valeur_cible INT NOT NULL, ADD date_debut DATE NOT NULL, ADD date_fin DATE NOT NULL, ADD statut VARCHAR(50) NOT NULL, DROP date_creation, CHANGE description description LONGTEXT NOT NULL, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE objectif ADD CONSTRAINT FK_E2F86851A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP INDEX fk_objectif_user ON objectif');
        $this->addSql('CREATE INDEX IDX_E2F86851A76ED395 ON objectif (user_id)');
        $this->addSql('ALTER TABLE objectif ADD CONSTRAINT `fk_objectif_user` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recommandation DROP FOREIGN KEY `fk_recommandation_energie`');
        $this->addSql('ALTER TABLE recommandation CHANGE description description LONGTEXT DEFAULT NULL');
        $this->addSql('DROP INDEX fk_recommandation_energie ON recommandation');
        $this->addSql('CREATE INDEX IDX_C7782A28B732A364 ON recommandation (energie_id)');
        $this->addSql('ALTER TABLE recommandation ADD CONSTRAINT `fk_recommandation_energie` FOREIGN KEY (energie_id) REFERENCES energie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY `fk_repas_user`');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY `fk_repas_user`');
        $this->addSql('ALTER TABLE repas ADD heure TIME NOT NULL, ADD calories INT NOT NULL, ADD description LONGTEXT DEFAULT NULL, ADD type VARCHAR(50) DEFAULT \'dejeuner\' NOT NULL, DROP date_repas, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT FK_A8D351B3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP INDEX fk_repas_user ON repas');
        $this->addSql('CREATE INDEX IDX_A8D351B3A76ED395 ON repas (user_id)');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT `fk_repas_user` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repas_aliment DROP FOREIGN KEY `fk_ra_aliment`');
        $this->addSql('DROP INDEX fk_ra_aliment ON repas_aliment');
        $this->addSql('CREATE INDEX IDX_D91FFC7415B9F11 ON repas_aliment (aliment_id)');
        $this->addSql('ALTER TABLE repas_aliment ADD CONSTRAINT `fk_ra_aliment` FOREIGN KEY (aliment_id) REFERENCES aliment (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY `fk_reset_user`');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY `fk_reset_user`');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP INDEX fk_reset_user ON reset_password_request');
        $this->addSql('CREATE INDEX IDX_7CE748AA76ED395 ON reset_password_request (user_id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT `fk_reset_user` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD name VARCHAR(50) NOT NULL, ADD is_blocked TINYINT DEFAULT 0 NOT NULL');
        $this->addSql('DROP INDEX email ON user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE activite_physique DROP FOREIGN KEY FK_261F98F157D1AD4');
        $this->addSql('ALTER TABLE activite_physique DROP FOREIGN KEY FK_261F98F157D1AD4');
        $this->addSql('ALTER TABLE activite_physique ADD date_activite DATE DEFAULT NULL, DROP date, DROP intensite, CHANGE calories_brulees calories_brulees FLOAT DEFAULT NULL, CHANGE objectif_id objectif_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE activite_physique ADD CONSTRAINT `fk_activite_objectif` FOREIGN KEY (objectif_id) REFERENCES objectif (id) ON DELETE SET NULL');
        $this->addSql('DROP INDEX idx_261f98f157d1ad4 ON activite_physique');
        $this->addSql('CREATE INDEX fk_activite_objectif ON activite_physique (objectif_id)');
        $this->addSql('ALTER TABLE activite_physique ADD CONSTRAINT FK_261F98F157D1AD4 FOREIGN KEY (objectif_id) REFERENCES objectif (id)');
        $this->addSql('ALTER TABLE aliment ADD calories FLOAT DEFAULT NULL, DROP macro, CHANGE quantite quantite FLOAT NOT NULL');
        $this->addSql('ALTER TABLE categorie DROP FOREIGN KEY FK_497DD6346B3CA4B');
        $this->addSql('DROP INDEX IDX_497DD6346B3CA4B ON categorie');
        $this->addSql('ALTER TABLE categorie DROP description, DROP id_user');
        $this->addSql('ALTER TABLE chapitre DROP FOREIGN KEY FK_8C62B025134FCDAC');
        $this->addSql('DROP INDEX IDX_8C62B025134FCDAC ON chapitre');
        $this->addSql('ALTER TABLE chapitre ADD cours_id INT NOT NULL, DROP id_chapitre, DROP ordre, DROP exercise, DROP id_cours, CHANGE contenu contenu TEXT NOT NULL');
        $this->addSql('ALTER TABLE chapitre ADD CONSTRAINT `fk_chapitre_cours` FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX fk_chapitre_cours ON chapitre (cours_id)');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CA76ED395');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CA76ED395');
        $this->addSql('ALTER TABLE cours ADD titre VARCHAR(255) NOT NULL, DROP tittre, DROP niveau, DROP duree_estimee, DROP categorie, DROP date_creation, DROP status');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT `fk_cours_user` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('DROP INDEX idx_fdca8c9ca76ed395 ON cours');
        $this->addSql('CREATE INDEX fk_cours_user ON cours (user_id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE depense DROP FOREIGN KEY FK_34059757C9486A13');
        $this->addSql('DROP INDEX IDX_34059757C9486A13 ON depense');
        $this->addSql('ALTER TABLE depense ADD categorie_id INT DEFAULT NULL, DROP statut, DROP id_categorie');
        $this->addSql('ALTER TABLE depense ADD CONSTRAINT `fk_depense_categorie` FOREIGN KEY (categorie_id) REFERENCES categorie (id_categorie) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX fk_depense_categorie ON depense (categorie_id)');
        $this->addSql('ALTER TABLE energie DROP FOREIGN KEY FK_2287DAA0A76ED395');
        $this->addSql('ALTER TABLE energie DROP source, CHANGE periode periode FLOAT NOT NULL, CHANGE valeur valeur FLOAT NOT NULL');
        $this->addSql('DROP INDEX idx_2287daa0a76ed395 ON energie');
        $this->addSql('CREATE INDEX fk_energie_user ON energie (user_id)');
        $this->addSql('ALTER TABLE energie ADD CONSTRAINT FK_2287DAA0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE objectif DROP FOREIGN KEY FK_E2F86851A76ED395');
        $this->addSql('ALTER TABLE objectif DROP FOREIGN KEY FK_E2F86851A76ED395');
        $this->addSql('ALTER TABLE objectif ADD date_creation DATETIME DEFAULT CURRENT_TIMESTAMP, DROP type, DROP valeur_cible, DROP date_debut, DROP date_fin, DROP statut, CHANGE description description TEXT NOT NULL, CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE objectif ADD CONSTRAINT `fk_objectif_user` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_e2f86851a76ed395 ON objectif');
        $this->addSql('CREATE INDEX fk_objectif_user ON objectif (user_id)');
        $this->addSql('ALTER TABLE objectif ADD CONSTRAINT FK_E2F86851A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE recommandation DROP FOREIGN KEY FK_C7782A28B732A364');
        $this->addSql('ALTER TABLE recommandation CHANGE description description TEXT DEFAULT NULL');
        $this->addSql('DROP INDEX idx_c7782a28b732a364 ON recommandation');
        $this->addSql('CREATE INDEX fk_recommandation_energie ON recommandation (energie_id)');
        $this->addSql('ALTER TABLE recommandation ADD CONSTRAINT FK_C7782A28B732A364 FOREIGN KEY (energie_id) REFERENCES energie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY FK_A8D351B3A76ED395');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY FK_A8D351B3A76ED395');
        $this->addSql('ALTER TABLE repas ADD date_repas DATETIME DEFAULT NULL, DROP heure, DROP calories, DROP description, DROP type, CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT `fk_repas_user` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_a8d351b3a76ed395 ON repas');
        $this->addSql('CREATE INDEX fk_repas_user ON repas (user_id)');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT FK_A8D351B3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE repas_aliment DROP FOREIGN KEY FK_D91FFC7415B9F11');
        $this->addSql('DROP INDEX idx_d91ffc7415b9f11 ON repas_aliment');
        $this->addSql('CREATE INDEX fk_ra_aliment ON repas_aliment (aliment_id)');
        $this->addSql('ALTER TABLE repas_aliment ADD CONSTRAINT FK_D91FFC7415B9F11 FOREIGN KEY (aliment_id) REFERENCES aliment (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT `fk_reset_user` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_7ce748aa76ed395 ON reset_password_request');
        $this->addSql('CREATE INDEX fk_reset_user ON reset_password_request (user_id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user DROP name, DROP is_blocked');
        $this->addSql('DROP INDEX uniq_identifier_email ON user');
        $this->addSql('CREATE UNIQUE INDEX email ON user (email)');
    }
}
