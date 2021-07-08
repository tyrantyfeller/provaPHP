USE `dbase`;

CREATE TABLE `grupo`
(
    `id_grupo` INT         NOT NULL AUTO_INCREMENT,
    `tx_nome`  VARCHAR(45) NOT NULL,
    `in_admin` INT(1) NOT NULL,
    PRIMARY KEY (`id_grupo`)
);

INSERT INTO `grupo` (`tx_nome`, `in_admin`) VALUES ('Admin', '1');
INSERT INTO `grupo` (`tx_nome`, `in_admin`) VALUES ('Infra', '1');
INSERT INTO `grupo` (`tx_nome`, `in_admin`) VALUES ('Diretores', '0');
INSERT INTO `grupo` (`tx_nome`, `in_admin`) VALUES ('Funcionarios', '0');



CREATE TABLE `usuario`
(
    `id_usuario` INT          NOT NULL AUTO_INCREMENT,
    `tx_nome`    VARCHAR(150) NOT NULL,
    `tx_email`   VARCHAR(200) NOT NULL,
    `tx_usuario` VARCHAR(50)  NOT NULL,
    `tx_senha`   VARCHAR(100) NOT NULL,
    `id_grupo`   INT(1) NULL,
    PRIMARY KEY (`id_usuario`),
    INDEX        `fx_grupo_idx` (`id_grupo` ASC),
    CONSTRAINT `fx_grupo`
        FOREIGN KEY (`id_grupo`)
            REFERENCES `dbase`.`grupo` (`id_grupo`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION
);

INSERT INTO `dbase`.`usuario` (`tx_nome`, `tx_usuario`, `tx_email`, `tx_senha`, `id_grupo`) VALUES ('admin', 'admin', 'admin@admin.com', 'admin', '1');
INSERT INTO `dbase`.`usuario` (`tx_nome`, `tx_usuario`, `tx_email`, `tx_senha`, `id_grupo`) VALUES ('infra', 'infra', 'infra@infra.com', 'infra', '2');
INSERT INTO `dbase`.`usuario` (`tx_nome`, `tx_usuario`, `tx_email`, `tx_senha`, `id_grupo`) VALUES ('diretor', 'diretor', 'diretor@diretor.com', 'diretor', '3');
INSERT INTO `dbase`.`usuario` (`tx_nome`, `tx_usuario`, `tx_email`, `tx_senha`, `id_grupo`) VALUES ('funcionario', 'funcionario', 'funcionario@funcionario.com', 'funcionario', '4');
