<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260218213559 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chapitre ADD CONSTRAINT FK_8C62B025134FCDAC FOREIGN KEY (id_cours) REFERENCES cours (id)');
        $this->addSql('DROP INDEX fk_chapitre_cours ON chapitre');
        $this->addSql('CREATE INDEX IDX_8C62B025134FCDAC ON chapitre (id_cours)');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY `fk_cours_user`');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY `fk_cours_user`');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP INDEX fk_cours_user ON cours');
        $this->addSql('CREATE INDEX IDX_FDCA8C9CA76ED395 ON cours (user_id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT `fk_cours_user` FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE depense DROP FOREIGN KEY `FK_DEPENSE_CATEGORIE`');
        $this->addSql('ALTER TABLE depense CHANGE description description VARCHAR(255) NOT NULL, CHANGE statut statut VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX idx_depense_categorie ON depense');
        $this->addSql('CREATE INDEX IDX_34059757C9486A13 ON depense (id_categorie)');
        $this->addSql('ALTER TABLE depense ADD CONSTRAINT `FK_DEPENSE_CATEGORIE` FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE energie DROP FOREIGN KEY `fk_energie_user`');
        $this->addSql('ALTER TABLE energie DROP FOREIGN KEY `fk_energie_user`');
        $this->addSql('ALTER TABLE energie ADD CONSTRAINT FK_2287DAA0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('DROP INDEX fk_energie_user ON energie');
        $this->addSql('CREATE INDEX IDX_2287DAA0A76ED395 ON energie (user_id)');
        $this->addSql('ALTER TABLE energie ADD CONSTRAINT `fk_energie_user` FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE objectif DROP FOREIGN KEY `fk_objectif_user`');
        $this->addSql('ALTER TABLE objectif DROP FOREIGN KEY `fk_objectif_user`');
        $this->addSql('ALTER TABLE objectif ADD CONSTRAINT FK_E2F86851A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP INDEX fk_objectif_user ON objectif');
        $this->addSql('CREATE INDEX IDX_E2F86851A76ED395 ON objectif (user_id)');
        $this->addSql('ALTER TABLE objectif ADD CONSTRAINT `fk_objectif_user` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recommandation DROP FOREIGN KEY `fk_recommandation_energie`');
        $this->addSql('ALTER TABLE recommandation DROP FOREIGN KEY `fk_recommandation_energie`');
        $this->addSql('ALTER TABLE recommandation ADD CONSTRAINT FK_C7782A28B732A364 FOREIGN KEY (energie_id) REFERENCES energie (id) ON DELETE CASCADE');
        $this->addSql('DROP INDEX fk_recommandation_energie ON recommandation');
        $this->addSql('CREATE INDEX IDX_C7782A28B732A364 ON recommandation (energie_id)');
        $this->addSql('ALTER TABLE recommandation ADD CONSTRAINT `fk_recommandation_energie` FOREIGN KEY (energie_id) REFERENCES energie (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY `FK_REPAS_USER`');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY `FK_REPAS_USER`');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT FK_A8D351B3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP INDEX idx_repas_user ON repas');
        $this->addSql('CREATE INDEX IDX_A8D351B3A76ED395 ON repas (user_id)');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT `FK_REPAS_USER` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE repas_aliment DROP FOREIGN KEY `FK_REPAS_ALIMENT_ALIMENT`');
        $this->addSql('ALTER TABLE repas_aliment DROP FOREIGN KEY `FK_REPAS_ALIMENT_REPAS`');
        $this->addSql('DROP INDEX idx_repas_aliment_repas ON repas_aliment');
        $this->addSql('CREATE INDEX IDX_D91FFC71D236AAA ON repas_aliment (repas_id)');
        $this->addSql('DROP INDEX idx_repas_aliment_aliment ON repas_aliment');
        $this->addSql('CREATE INDEX IDX_D91FFC7415B9F11 ON repas_aliment (aliment_id)');
        $this->addSql('ALTER TABLE repas_aliment ADD CONSTRAINT `FK_REPAS_ALIMENT_ALIMENT` FOREIGN KEY (aliment_id) REFERENCES aliment (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repas_aliment ADD CONSTRAINT `FK_REPAS_ALIMENT_REPAS` FOREIGN KEY (repas_id) REFERENCES repas (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chapitre DROP FOREIGN KEY FK_8C62B025134FCDAC');
        $this->addSql('ALTER TABLE chapitre DROP FOREIGN KEY FK_8C62B025134FCDAC');
        $this->addSql('DROP INDEX idx_8c62b025134fcdac ON chapitre');
        $this->addSql('CREATE INDEX fk_chapitre_cours ON chapitre (id_cours)');
        $this->addSql('ALTER TABLE chapitre ADD CONSTRAINT FK_8C62B025134FCDAC FOREIGN KEY (id_cours) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CA76ED395');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CA76ED395');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT `fk_cours_user` FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_fdca8c9ca76ed395 ON cours');
        $this->addSql('CREATE INDEX fk_cours_user ON cours (user_id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE depense DROP FOREIGN KEY FK_34059757C9486A13');
        $this->addSql('ALTER TABLE depense CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE statut statut VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX idx_34059757c9486a13 ON depense');
        $this->addSql('CREATE INDEX IDX_DEPENSE_CATEGORIE ON depense (id_categorie)');
        $this->addSql('ALTER TABLE depense ADD CONSTRAINT FK_34059757C9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE energie DROP FOREIGN KEY FK_2287DAA0A76ED395');
        $this->addSql('ALTER TABLE energie DROP FOREIGN KEY FK_2287DAA0A76ED395');
        $this->addSql('ALTER TABLE energie ADD CONSTRAINT `fk_energie_user` FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_2287daa0a76ed395 ON energie');
        $this->addSql('CREATE INDEX fk_energie_user ON energie (user_id)');
        $this->addSql('ALTER TABLE energie ADD CONSTRAINT FK_2287DAA0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE objectif DROP FOREIGN KEY FK_E2F86851A76ED395');
        $this->addSql('ALTER TABLE objectif DROP FOREIGN KEY FK_E2F86851A76ED395');
        $this->addSql('ALTER TABLE objectif ADD CONSTRAINT `fk_objectif_user` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_e2f86851a76ed395 ON objectif');
        $this->addSql('CREATE INDEX fk_objectif_user ON objectif (user_id)');
        $this->addSql('ALTER TABLE objectif ADD CONSTRAINT FK_E2F86851A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE recommandation DROP FOREIGN KEY FK_C7782A28B732A364');
        $this->addSql('ALTER TABLE recommandation DROP FOREIGN KEY FK_C7782A28B732A364');
        $this->addSql('ALTER TABLE recommandation ADD CONSTRAINT `fk_recommandation_energie` FOREIGN KEY (energie_id) REFERENCES energie (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_c7782a28b732a364 ON recommandation');
        $this->addSql('CREATE INDEX fk_recommandation_energie ON recommandation (energie_id)');
        $this->addSql('ALTER TABLE recommandation ADD CONSTRAINT FK_C7782A28B732A364 FOREIGN KEY (energie_id) REFERENCES energie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY FK_A8D351B3A76ED395');
        $this->addSql('ALTER TABLE repas DROP FOREIGN KEY FK_A8D351B3A76ED395');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT `FK_REPAS_USER` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('DROP INDEX idx_a8d351b3a76ed395 ON repas');
        $this->addSql('CREATE INDEX IDX_REPAS_USER ON repas (user_id)');
        $this->addSql('ALTER TABLE repas ADD CONSTRAINT FK_A8D351B3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE repas_aliment DROP FOREIGN KEY FK_D91FFC71D236AAA');
        $this->addSql('ALTER TABLE repas_aliment DROP FOREIGN KEY FK_D91FFC7415B9F11');
        $this->addSql('DROP INDEX idx_d91ffc71d236aaa ON repas_aliment');
        $this->addSql('CREATE INDEX IDX_REPAS_ALIMENT_REPAS ON repas_aliment (repas_id)');
        $this->addSql('DROP INDEX idx_d91ffc7415b9f11 ON repas_aliment');
        $this->addSql('CREATE INDEX IDX_REPAS_ALIMENT_ALIMENT ON repas_aliment (aliment_id)');
        $this->addSql('ALTER TABLE repas_aliment ADD CONSTRAINT FK_D91FFC71D236AAA FOREIGN KEY (repas_id) REFERENCES repas (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repas_aliment ADD CONSTRAINT FK_D91FFC7415B9F11 FOREIGN KEY (aliment_id) REFERENCES aliment (id) ON DELETE CASCADE');
    }
}
