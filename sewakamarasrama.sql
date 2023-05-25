create database sewakamarasrama;
create table sewakamarasrama.kamarasrama (nomorkamar int(2) not null auto_increment primary key, namakamar varchar(10) not null);
create table sewakamarasrama.penyewa (nik varchar(20) not null primary key, namapenyewa varchar(50) not null, nohp varchar(15) not null, tanggalmasuk date null, nomorkamar int(2) null, tanggalkeluar date null)
