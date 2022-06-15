use sample; -- 空のデータベースを選択
create table hoge(
    id integer primary key,
    name varchar(32) not null,
    zip varchar(7) not null
);

-- データの挿入
insert into hoge values(1, '星 徹平', '2048945');
insert into hoge values(2, '岩崎 麻衣', '1125574');
insert into hoge values(3, '黒崎 直樹', '8374919');
insert into hoge values(4, '中山 智隆', '5783922');
insert into hoge values(5, '太田 智子', '5877296');
