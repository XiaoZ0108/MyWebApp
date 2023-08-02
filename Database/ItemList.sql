CREATE TABLE cup(
    id INT(11) NOT NULL,
    type VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    dscript VARCHAR(255) NOT NULL,
    star INT(1) NOT NULL,
    price VARCHAR(255) NOT NULL
);

INSERT INTO cup (id,type,image_path,name,dscript,star,price) values ('1','ice cup flavour1','Ice_Cream/Alumni Park After Dark.png','Alumni Park After Dark','Rich Chocolate ice cream with dark chocolate chunks and a hint of coffee','5','RM5');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values('2','ice cup flavour2','Ice_Cream/Angel Food Cake.png','Angel Food Cake','Heavenly light and fluffy ice cream with hints of vanilla and a sweet airy finish','4','RM5');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values('3','ice cup flavour2','Ice_Cream/Batter Up.png','Batter Up','Sweet vanilla ice cream swirled with rich chocolate fudge and chunks of crunchy cookie dough','5','RM6');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values('4','ice cup flavour3','Ice_Cream/Bec-Key Lime Pie.png','Bec-Key Lime Pie','A tangy and creamy blend of key lime pie and ice cream','5','RM6');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values ('5','ice cup flavour3','Ice_Cream/Berry Proud Parent.png','Berry Proud Parent','A tangy and creamy blend of key lime pie and ice cream','5','RM5');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values ('6','ice cup flavour2','Ice_Cream/Blue Moon.png','Blue Moon','A classic flavor with a mysterious blue hue','5','RM4');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values ('7','ice cup flavour1','Ice_Cream/Bucky Caramal Crunch.png','Bucky Caramal Crunch','Rich caramel ice cream with crunchy bits of toffee and caramelized nuts','4','RM7');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values ('8','ice cup flavour3','Ice_Cream/Caramel Apple.png','Caramel Apple','A sweet and tangy blend of creamy caramel and crisp apple flavors','5','RM7');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values ('9','ice cup flavour1','Ice_Cream/Chocolate Chryst.png','Chocolate Chryst','Indulge in rich and creamy chocolate goodness with our Chocolate Chryst ice cream','5','RM5');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values ('10','ice cup flavour2','Ice_Cream/Lumberjack.png','Lumberjack','A delicious mix of maple and pecan','5','RM6');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values ('11','ice cup flavour1','Ice_Cream/Mocha Macchiato.png','Mocha Macchiato','A creamy blend of espresso and chocolate, with a hint of sweetness','5','RM7');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values ('12','ice cup flavour1','Ice_Cream/Orange Custard Chocolate Chip.png','Orange Custard Chocolate Chip','A creamy orange custard base with swirls of rich chocolate chips','5','RM6');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values ('13','ice cup flavour1','Ice_Cream/Salted Caramel Toffee.png','Salted Caramel Toffee','Rich, creamy caramel with a salty twist and crunchy toffee bits','5','RM7');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values ('14','ice cup flavour2',"Ice_Cream/Toasted Smores.png","Toasted S'mores",'Rich chocolate ice cream with a graham cracker swirl and toasted marshmallow pieces','4','RM5');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values ('15','ice cup flavour2','Ice_Cream/Union Utopia.png','Union Utopia','Creamy vanilla ice cream swirled with ribbons of caramel and chunks of chocolate','4','RM8');
INSERT INTO cup (id,type,image_path,name,dscript,star,price) values ('16','ice cup flavour2','Ice_Cream/Wisconsin Old Fashioned.png','Wisconsin Old Fashioned','Classic cocktail-inspired flavor','5','RM8');

CREATE TABLE cone(
id INT(11) NOT NULL,
type VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    dscript VARCHAR(255) NOT NULL,
    star INT(1) NOT NULL,
    price VARCHAR(255) NOT NULL
);

INSERT INTO cone (id,type,image_path,name,dscript,star,price) values ('17','ice cone flavour3','Ice_Cream/Strawberry Field.png','Strawberry Field','Creamy, refreshing ice cream flavor that features ripe, juicy strawberries swirled throughout a smooth vanilla base','5','RM5');
INSERT INTO cone (id,type,image_path,name,dscript,star,price) values ('18','ice cone flavour2','Ice_Cream/Vanilla Dream.png','Vanilla Dream','Creamy and delicious vanilla-flavored ice cream','4','RM5');
INSERT INTO cone (id,type,image_path,name,dscript,star,price) values ('19','ice cone flavour1','Ice_Cream/Chocolate Chunk.png','Chocolate Chunk','Generous chunks of high-quality chocolate mixed in a creamy vanilla base','5','RM6');
INSERT INTO cone (id,type,image_path,name,dscript,star,price) values ('20','ice cone flavour1','Ice_Cream/Minty Marvel.png','Minty Marvel','Refreshing and invigorating ice cream flavor that combines the cool taste of mint with the creaminess of ice cream','5','RM6');
INSERT INTO cone (id,type,image_path,name,dscript,star,price) values ('21','ice cone flavour3','Ice_Cream/Tropical Mango.png','Tropical Mango','Creamy and refreshing ice cream flavor that brings a taste of the tropics to your palate','5','RM5');
INSERT INTO cone (id,type,image_path,name,dscript,star,price) values ('22','ice cone flavour3','Ice_Cream/Durian Delight.png','Durian Delight','Rich and creamy ice cream flavor that features the exotic tropical fruit known as durian','5','RM4');
INSERT INTO cone (id,type,image_path,name,dscript,star,price) values ('23','ice cone flavour3','Ice_Cream/Lime Burst.png','Lime Burst','Zesty and refreshing treat that offers a burst of tangy lime flavor with each scoop','5','RM4');
INSERT INTO cone (id,type,image_path,name,dscript,star,price) values ('24','ice cone flavour3','Ice_Cream/Berrylicious Vanilla.png','Berrylicious Vanilla','Delicious and creamy ice cream flavor that combines the classic taste of vanilla with the sweetness and tartness of fresh berries','5','RM4');
INSERT INTO cone (id,type,image_path,name,dscript,star,price) values ('25','ice cone flavour3','Ice_Cream/Yamazing Delight.png','Yamazing Delight','Delicious and unique ice cream flavor that features the sweet and earthy taste of yam, combined with creamy, smooth vanilla ice cream','5','RM4');