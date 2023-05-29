CREATE DATABASE admin;

CREATE TABLE `news` (
	id int auto_increment not null primary key,
	news text,
	create_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

insert into news(news) values 
("稲刈りの季節がやってきました！"),
("クレジット決済の不具合が治りました。"),
("いよいよ春作業が本格化して参りました。繫忙期に入るため、体験申し込みはお早めに！"),
("無事メンテナンス終了いたしました。ご協力ありがとうございました。"),
("勝手ながらサイトメンテナンスのため１月10日～１月15日までお休みさせていただきます。");



