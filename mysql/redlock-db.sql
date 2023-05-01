Create table `Users` (
    `ID` int(15) not null,
    `Nama` varchar(200) not null,
    `Alamat` varchar(200) not null,
    `Jabatan` varchar(200) not null,
    primary key (`ID`)
);

insert into Users (ID, Nama, Alamat, Jabatan)
values ('1', 'ayb', 'galaxy', 'kapten'),
('2', 'caca', 'bintaro', 'selir'),
('3', 'kalap', 'jaktim', 'solo'),
('4', 'josua', 'kalideres', 'bos'),
('5', 'nikol', 'mangdu', 'member');