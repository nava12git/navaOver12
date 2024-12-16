create table login(
    id_usu int primary key not null auto_incremnet,
    nombre varchar(50) not null,
    correo varchar(50) not null,
    contrasena varchar(50) not null,
    roll varchar(50) not null);


create table pago(
id_pago int primary key not null auto_incremnet,
metodo varchar(50) not null,
nombre varchar(50) not null,
correo varchar(50) not null,
monto varchar(50) not null);
