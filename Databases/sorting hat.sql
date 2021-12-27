use sortinghat;

create table Person(
Person_ID int not null auto_increment,
First_Name varchar(500) not null,
Last_Name varchar(500) not null,
Gender varchar(20) not null,
Description text not null,
photo text,
primary key(Person_ID)
);

create table Houses(
House_ID int not null unique,
House_Name varchar(50) not null
);

create table Votes(
Vote_ID int not null unique auto_increment,
House_ID int not null,
Person_ID int not null,
primary key(Vote_ID),
foreign key(House_ID) references Houses(House_ID),
foreign key(Person_ID) references Person(Person_ID)
);

insert into Houses(House_ID , House_Name)
values (1 , "Gryffindor");

insert into Houses(House_ID , House_Name)
values (2 , "Hufflepuff");

insert into Houses(House_ID , House_Name)
values (3 , "Ravenclaw");

insert into Houses(House_ID , House_Name)
values (4 , "Slytherin");

insert into Person(First_Name , Last_Name , Gender , Description , photo)
values
("Hermione" , "Granger" , "Female" , "Hermione was noted for being both extremely intellectual curious and very hard-working, coming out on top in most of her classes and continuously aiding Harry and Ron in their adventures. She was so studious that the Ministry allowed her a Time-Turner in her third year, a device that rewinds time so that she could take extra courses. Because of her efficiency and compassion, Hermione often had time to do hobby work on the side, such as preparing a defence for Buckbeak to save him from execution and creating S.P.E.W., an organisation promoting the freedom of house-elves.Such acts demonstrated her social conscience and tenacity." , "hermionegranger.jpg"),
("Dobby" , " ", "X" , "Dobby was a brave, loyal house-elf, willing to put himself in dangerous situations when he knew it to be the right thing to do. He was also very loyal to the few friends he had. He considered himself to be a good house-elf, though other house-elves seemed to find his desires and proclamations of being a free house-elf to be shameful. Despite this, he was still a hard worker." , "dobby.jpg"),
("Newton" , "Scamander" , "Male" , "Newton Scamander was a dedicated individual who tirelessly researched new information for his book Fantastic Beasts and Where to Find Them, even when he was supposedly retired. Considered an authority in the field of Magizoology, his works were respected throughout the wizarding community. Newton was described as eccentric and felt more comfortable around creatures than he did around humans. Eye contact and being close to another person usually made him very uncomfortable. He admitted that most people found him annoying." , "NewtonScamander-Profile-crop.png"),
("Gilderoy" , "Lockhart" , "Male" , "Gilderoy Lockhart's defining characteristics were his extreme arrogance, exceeding vanity, conceit, egomania, narcissism, impudence, insensitivity, inconsideration, and self-obsession. He was a voracious self-promoter and claimed to have done many great deeds, though in actuality he was just a fraud who merely stole the credit for other wizards and witches' accomplishments and whose claims about himself were for the most part nothing but conceit, self-praise, and vanity and whose claims about other things were idle speculations, gross exaggerations, and pure sensationalism; he went as far as to claim his winning of the Witch Weekly's Most Charming Smile Award five times in a row was more impressive than Harry Potter surviving an attack by Lord Voldemort himself.", null),
("Tom" , "Marvolo Riddle" , "Male" , "Also known as: (lord) Voldemort. Voldemort was considered by many to be \"the most evil wizard in hundreds and hundreds of years\". His evil nature far exceeded that of any common evildoer and Dumbledore stated that he \"went beyond normal evil\" in the extent of his crimes. Hagrid claimed that while all Dark Wizards \"go bad\", Voldemort went \"worse than worse\". Indeed, Voldemort speedily developed into a power-obsessed megalomaniac of the worst kind and the worst of any known Dark Wizard, being considered by all to be far more evil than even Gellert Grindelwald. He was unable and unwilling to express remorse or empathy for the countless crimes he had committed." , "Voldemort_Infobox.jpg"),
("Luna" , "Lovegood" , "Female" , "Luna was an extremely quirky girl, with a serene disposition and many eccentric beliefs and qualities. She was a complete nonconformist; she lacked self-consciousness and was not afraid to show who she truly was. Luna was also intelligent and unusually perceptive." , "luna1.jpg"),
("Bellatrix" , "Lestrange" , "Female" , "Bellatrix was an intensely sadistic witch with brutal, violent tendencies. She possessed a fierce and dangerous temper, a trait that she shared with her cousin Sirius and her aunt Walburga and which was likely a result of the inbreeding that plagued her birth family. Bellatrix was one of Voldemort's cruellest Death Eaters, always eager to inflict the Cruciatus Curse on enemies. Harry Potter noted that she was as \"mad as her master.\" Likely for these reasons, Bellatrix was slavishly devoted to Lord Voldemort and was willing to do anything for his cause. She believed to have proven her loyalty by her time in Azkaban, an event which had seemingly furthered her mental decline. Despite her loyalty towards her master she was able to disagree with him on occasion. She did not trust Severus Snape, and believed that Voldemort was mistaken in doing so, though she showed shame and fear when expressing this." , "bellatrix.jpg"),
("Dolores" , "Umbridge" , "Female" , "Dolores Umbridge was an evil woman, who represented the very worst of political power. She was extremely ruthless, cruel, callous, brutal, corrupt, sadistic, arrogant, intolerant, power-hungry and devoid of any kind of moral or ethical centre. She was apathetic and absolutist, yet also a committed and flexible witch who was dogmatically supportive of the British Ministry of Magic, eagerly obeying the every command of Cornelius Fudge, Rufus Scrimgeour and Pius Thicknesse when in their respective terms of power, in order to gain power herself. She was even willing to go to Hogwarts for Fudge, in spite of her bad memories there and strong dislike of children. She was depicted using any means to maintain the political power of her bosses, often flaunting the power she in turn obtained during her time in Hogwarts." , "dolores.jpg");


insert into Votes(House_ID , Person_ID)
values (1 , 1);

select * from Person;