SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `productos`(
    `id` INT(5) NOT NULL AUTO_INCREMENT,
    `codigo` VARCHAR(50) NOT NULL,
    `nombre` VARCHAR(50) NOT NULL,
    `descripcion` VARCHAR(50) NOT NULL,
    `cantidad` INT(6) NOT NULL,
    `precio` INT(6) NOT NULL,
    PRIMARY KEY (`id`)
)ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3;

INSERT INTO `productos` (`id`,`codigo`,`nombre`,`descripcion`,`cantidad`,`precio`) VALUES
(1,'1234','Celular','Samsung', 10, 300),
(2,'5678','Celular','LG', 20, 100);