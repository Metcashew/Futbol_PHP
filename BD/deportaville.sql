CREATE DATABASE Deportville_com;
use Deportville_com;

CREATE TABLE Equipo(
    id_equipo int PRIMARY key AUTO_INCREMENT,
    nombre_equipo varchar (50)
);

create table Jugadores(
id_jugador int primary key auto_increment,
id_equipo int,
nombre varchar (50),
apellido_paterno varchar (50),
apellido_materno varchar (50),
edad int,
estatura double,
posicion varchar (50),
foreign key (id_equipo) references Equipo (id_equipo)
);

create table EstadisticasJugadores (
id_EstadisticasJugadores int primary key auto_increment,
id_jugador int,
asistencias int,
tarjetas_amarillas int,
foreign key (id_jugador) references Jugadores (id_jugador)
);

create table EstadisticasEquipo(
id_estadisticasEquipo int primary key auto_increment,
id_equipo int,
resultados_partidos varchar (100),
posesion_balon float,
eficacia_tiros float,
foreign key (id_equipo) references Equipo (id_equipo)
);

create table LesionesJugadores(
id_lesion int primary key auto_increment,
id_jugador int,
tipo_lesion varchar (100),
gravedad varchar (100),
tiempo_recuperacion_estiamdo varchar (50),
foreign key (id_jugador) references Jugadores (id_equipo)
);

create table HistorialPartidos (
id_partido int primary key auto_increment,
id_equipo_local int,
id_equipo_visitante int,
fecha date,
resultado varchar (20),
foreign key (id_equipo_local) references Equipo (id_equipo),
foreign key (id_equipo_visitante) references Equipo(id_equipo)
);

create table PlanificacaionesEntranamientos (
id_entranamiento int primary key auto_increment,
id_equipo int,
fecha_entramiento date,
rendimiento_fisico varchar (50),
foreign key (id_equipo) references Equipo(id_equipo)
);

create table PresupuestoEquipo(
id_presupuesto int primary key auto_increment,
id_equipo int,
gastos_salarios float,
gastos_instalaciones float,
gastos_equipo_medicos float,
foreign key (id_equipo) references Equipo (id_equipo)
);