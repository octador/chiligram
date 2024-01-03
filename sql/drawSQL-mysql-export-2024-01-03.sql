CREATE TABLE `commentaire`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `text_com` VARCHAR(255) NOT NULL,
    `id_user_com` INT NOT NULL,
    `id_post` INT NOT NULL
);
ALTER TABLE
    `commentaire` ADD PRIMARY KEY `commentaire_id_primary`(`id`);
CREATE TABLE `post`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `text` VARCHAR(255) NOT NULL,
    `id_user_post` INT NOT NULL,
    `picture_post` VARCHAR(255) NOT NULL,
    `date` DATETIME NOT NULL
);
ALTER TABLE
    `post` ADD PRIMARY KEY `post_id_primary`(`id`);
CREATE TABLE `profil`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `pseudo` VARCHAR(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `firstname` VARCHAR(255) NOT NULL,
    `age` INT NOT NULL,
    `mail` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `picture` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `profil` ADD PRIMARY KEY `profil_id_primary`(`id`);
ALTER TABLE
    `commentaire` ADD CONSTRAINT `commentaire_id_user_com_foreign` FOREIGN KEY(`id_user_com`) REFERENCES `profil`(`id`);
ALTER TABLE
    `commentaire` ADD CONSTRAINT `commentaire_id_post_foreign` FOREIGN KEY(`id_post`) REFERENCES `post`(`id`);
ALTER TABLE
    `post` ADD CONSTRAINT `post_id_user_post_foreign` FOREIGN KEY(`id_user_post`) REFERENCES `profil`(`id`);