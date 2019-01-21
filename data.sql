CREATE DATABASE panel;

use panel;

CREATE TABLE IF NOT EXISTS Kullanicilar(
	OKytNo			Int		Not Null AUTO_INCREMENT,
    KaydTarihi     		DATETIME DEFAULT CURRENT_TIMESTAMP,
    modification_time 	DATETIME ON UPDATE CURRENT_TIMESTAMP,	
	isim 				VarChar(180) NOT NULL,
	kisim 				VarChar(180) NOT NULL,
	kmail 				VarChar(180) NOT NULL,	
	ksifre 				VarChar(180) NOT NULL,
		CONSTRAINT PK__Kullanicilar__OKytNo PRIMARY KEY(OKytNo)
);
