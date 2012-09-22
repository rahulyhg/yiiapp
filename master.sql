
-- hobies_master
insert into hobies_master(name) values ("Acting"), ("Astronomy"), ("Astrology"), ("Art/Handicrafts"), ("Collectibles"), ("Cooking") , ("Crosswords") , 

("Dancing") , ("Film-making") , ("Fishing"), ("Gardening/landscaping"), ("Graphology") , ("Nature"), ("Numerology"), ("Painting"), ("Palmistory"), ("Pets"), 

("Photography"), ("Playing Musical instruments"), ("Puzzles");

-- interests table

insert into interests_master(name) values ("Adventure Sports"), ("Book Clubs"), ("Computer Games"), ("Health & Fitness"), ("Internet"), ("Learning new 

languages") , ("Movies") , ("Music") , ("Politics") , ("Reading"), ("Social Service"), ("Sports") , ("Yoga"), ("Alternative healing medicine");


-- musics table

insert into musics_master(name) values ("Blues"), ("Devotional"), ("Disco"), ("Film Songs"), ("Ghazals"), ("Hip-Hop") , ("Heavy metal") , ("House Music") , 

("Indian classical") , ("Indipop"), ("Jazz"), ("Pop") , ("Qawalis"), ("Rap"), ("Reggae"), ("Sufi"), ("Techno"), ("Western Classical"), ("I am not a music 

fan");

-- reading table

insert into reading_master(name) values ("Actually a Bookworm"), ("Biographies"),("Business/Occupational"), ("Clasics"), ("Comics"), ("Fantasy"), ("History") 

, ("Humour") , ("Dancing") , ("Literature") , ("Magazines/Newspaper"), ("Philosphy/Spiritual"), ("Poetry") , ("Romance"), ("Science Fiction"), ("Self help"), 

("Short stories"), ("Stay away from books"), ("Thriller/Suspense");


-- movies table

insert into movies_master(name) values ("Action/Suspense"), ("Comedy"),("Classics"), ("Drama"), ("Documentaries"), ("Epics"), ("Horror") , ("Romantic") , 

("Short film") , ("Sci-Fi & Fantasy") , ("Not into movies"), ("Poetry"), ("Romance"), ("Science Fiction"), ("Self help"), ("Non-Commercial/Art"), ("World 

Cinema"), ("Movie fanatic");

-- activities table

insert into activities_master(name) values ("Adventure Sports"), ("Aerobics"),("Basketball"), ("Badminton"), ("Bowling"), ("Billiards/Snooker/Pool"), 

("Cricket") , ("Cycling") , ("Card Games") , ("Carom") , ("Chess"), ("Football"), ("Golf"), ("Hockey"), ("Jogging/Walking"), ("Martial Arts"), ("Scrabble"), 

("Squash"), ("Swimming/Water Sports"), ("Table tennis"), ("Tennis"), ("Volleyball"), ("Weight Lifting"),("Yoga/Medidation");

-- cuisines table

insert into cuisines_master(name) values ("Arabic"), ("Bengali"),("Chinese"), ("Continental"), ("Gujarati"), ("Italian"), ("Konkan") , ("Mexican") , 

("Mughlai") , ("Not a foodie") , ("Punjabi"), ("Rajasthani"), ("South Indian"), ("Sushi"), ("Thai"), ("I am a foodie"), ("Traditional");

-- languages table

insert into languages(name) values ("Hindi"), ("Bengali"),("Telugu"), ("Marathi"), ("Tamil"), ("Urdu") , ("Gujarati") , ("Kannada") , ("Malayalam") , ("Oriya"), ("Punjabi"), ("Assamese"), ("Maithili"), ("Bhili/Bhilodi"), ("Santali"), ("Kashmiri"), ("Nepali"), ("Gondi"), ("Sindhi"), ("Konkani"), ("Dogri"), ("Khandeshi"), ("Kurukh"), ("Tulu"), ("Meitei/Manipuri"), ("Bodo"), ("Khasi"), ("Mundari"), ("Ho");

-- occupation master data
insert into occupation_master(name) values ("Any"), ("Accounts/Finance Professional"),("Advertising/PR professionals"), ("Agriculture & Farming Professionals"), ("Air Hostess"), ("Airforce") , ("Airline Professional") , ("Architect") , ("Army") , ("Arts & Craftman"), ("Auditor"), ("Banking service Professional"), ("CEO/President, Director,Chairman"), ("Civil Services(IAS,IPS,IRS,IES,IFS)"), ("Clerk"), ("Company Secratary"), ("Consultant"), ("Customer care professional"), ("Doctor"), ("Education professional"), ("Engineer- Non IT"), ("Entertainment Professional"), ("Event Management Proffesional"), ("Executive"), ("Fashion Designer"), ("Hardware Professional"), ("Health care Professional"), ("Hotel- Hospitality Professional"), ("Interior Designer") ,("Journilist"), ("Law enforcement Officer"), ("Manager"), ("Mariner/Mergent Navy"), ("Marketing Professiona"), ("Media professional"), ("Navy"), ("Nurse"), ("Officer"), ("Paramedical Professional"), ("Professor/Lecturer"), ("Sales Professional"), ("Scientists/ Resercher"), ("Social Worker"), ("Software Professional"), ("Sportsman"), ("Supervisor"), ("Teaching/Academician"), ("Technician"), ("Human Resources professional"), ("Financial Analyst/Planing"), ("Designer- IT & Engineering"), ("Designer- Media & Entertainment"), ("Student"), ("Librarian"), ("Financial Accountant"), ("Business Analyst"), ("Others"), ("Business"), ("Not Working");

-- education_master table

insert into education_master(name) values ("Any"), ("Bachelors- Engineering, Computers"),("Masters- Engineering, Computers"), ("Bachelors- 

Arts/Science/commerce/B phil"), ("Masters- Arts/Science/Commerce/M phil"), ("Management- BBA/MBA") , ("Medicine- General/Dental/Surgeon") , ("Legal- 

BL/ML/LLB/CCM") , ("Finanace- ICWAI/CA/CS") , ("Service- IAS/IPS/IRS/IES/IFS"), ("PHD"), ("Diploma"), ("Higher Secondary, Secondary");


-- signs_master table

insert into signs_master(name) values ("Aries"), ("Taurus"),("Gemini"), ("Cancer"), ("Leo"), ("Virgo") , ("Libra") , ("Scorpio") , ("Sagittarius") , 

("Capricon"), ("Aquarius"), ("Pisces");


-- astrodate_master table

insert into astrodate_master(name) values ("Aswathi"), ("Bharani"),("Karthika"), ("Rohini"), ("Makayiram"), ("Management- BBA/MBA") , ("Thiruvathira") , 

("Punartham") , ("Pooyam") , ("Ayilyam"), ("Magam"), ("Pooram"), ("Uthram"),("Atham"), ("Chithira"), ("Chothi"), ("Vishakham"), ("Anizham"), ("Ketta"), 

("Moolam"), ("Thiruvonam"), ("Avittam"), ("Chadayam"), ("Pooruttathi"), ("Uthirattathi"), ("Revathi");

insert into districts(districtId,name) values(1,"Alapuzha"), (2, "CALICUIT"),(3, "IDUKKI"),(4,"KANNUR"),(5,"KASARGOD"),(6,"KOTTAYAM"), (7,"MALAPPURAM"),(8,"PALAKKAD"),(9,"ERNAKULAM"),(10,"PATHANAMTHITTA"),(11,"THRISSUR"),(12,"THIRUVANANTHAPURAM"),(13,"WAYANAD");

-- religion table

insert into religion(name) values("Hindu"),("Muslim-Shia"),("Muslim-Sunni"),("Muslim-Other"),("Christian-Catholic"),("Christian-Orthodox"),("Christian-Protestent"),("Christian-Other"),("Sikh"),("Jain-Digambar"),("Jain-Shetambar"),("Jain-Other"),("Parsi"),("Buddhist"),("InterReligion");

--	Insert query for caste table
insert into caste(name,religionId) values("Ambalavasi",1),("Bramin-Iyer",1),("Bramin-Namboodiri",1),("Brahmin-Saraswat",1),("Brahmin-Other",1),("Chettiyar",1),("Dheevara",1),("Ezhava",1),("Ezhuthachan",1),("Gatti",1),("Guptan",1),("Intercaste",1),("Iyer Brahmin",1),("Kavuthiyya/Ezhavathy",1),("Krishnavak",1),("Kshatriya",1),("Kudumbi",1),("Mapila",1),("Mudaliyar",1),("Nadar",1),("Naidu",1),("Nair ",1),("Nambiar",1),("Nambudhiri brahmin",1),("Panikkar",1),("Rajput",1),("SC",1),("ST",1),("Saliya",1),("Saraswath Brahmin",1),("Thiyya",1),("VanikaVyshya",1),("Vaier",1),("Veera Saivam",1),("Velan",1),("Veluthedathu Nair",1),("Vilakkithala Nair",1),("Vishwakarma",1),("Yadav",1),("Muslim-Ansari",2),("Muslim-Arain",2),("Muslim-Awan",2),("Muslim-Bohra",2),("Muslim-Dekkani",2),("Muslim-Dudekula",2),("Muslim-Hanafi",2),("Muslim-Jat",2),("Muslim-Khoja",2),("Muslim-Lebbai",2),("Muslim-Malik",2),("Muslim-Mapila",2),("Muslim-Maraicar",2),("Muslim-Memon",2),("Muslim-Mughal",2),("Muslim-Other",2),("Muslim-Pathan",2),("Muslim-Qureshi",2),("Muslim-Rajput",2),("Muslim-Rowther",2),("Muslim-Shafi",2),("Muslim-Shekh",2),("Muslim-Siddiqui",2),("Muslim-Syed",2),("Muslim-Unspecified",2),("Don't wish to specify",2),("Muslim-Ansari",3),("Muslim-Arain",3),("Muslim-Awan",3),("Muslim-Bohra",3),("Muslim-Dekkani",3),("Muslim-Dudekula",3),("Muslim-Hanafi",3),("Muslim-Jat",3),("Muslim-Khoja",3),("Muslim-Lebbai",3),("Muslim-Malik",3),("Muslim-Mapila",3),("Muslim-Maraicar",3),("Muslim-Memon",3),("Muslim-Mughal",3),("Muslim-Other",3),("Muslim-Pathan",3),("Muslim-Qureshi",3),("Muslim-Rajput",3),("Muslim-Rowther",3),("Muslim-Shekh",3),("Muslim-Siddiqui",3),("Muslim-Syed",3),("Muslim-Unspecified",3),("Muslim-Ansari",4),("Muslim-Arain",4),("Muslim-Awan",4),("Muslim-Bohra",4),("Muslim-Dekkani",4),("Muslim-Dudekula",4),("Muslim-Hanafi",4),("Muslim-Jat",4),("Muslim-Khoja",4),("Muslim-Lebbai",4),("Muslim-Malik",4),("Muslim-Mapila",4),("Muslim-Maraicar",4),("Muslim-Memon",4),("Muslim-Mughal",4),("Muslim-Other",4),("Muslim-Pathan",4),("Muslim-Qureshi",4),("Muslim-Rajput",4),("Muslim-Rowther",4),("Muslim-Shafi",4),("Muslim-Shekh",4),("Muslim-Siddiqui",4),("Muslim-Syed",4),("Muslim-Unspecified",4),("Don't wish to specify",4),("Christian-Bornagain",5),("Christian-Bretheren",5),("Christian-CSI",5),("Christian-Evangelist",5),("Christian-Jacobite",5),("Christian-Knanaya",5),("Christian-Knanaya Catholic",5),("Christian-Knanaya Jacobite",5),("Christian-Latin Catholic",5),("Christian-Malankara",5),("Christian-Marthoma",5),("Christian-Other",5),("Christian-Penthecost",5),("Christian-Roman Catholic",5),("Christian-Seventh-Day-Adventist",5),("Christian-Syrian Catholic",5),("Christian-Syrian Jacobite",5),("Christian-Syrian Orthodox",5),("Christian-Syro Malabar",5),("Christian-Unspecifed",5),("Don't wish to specify",5),("Christian-Bornagain",6),("Christian-Bretheren",6),("Christian-CSI",6),("Christian-Evangelist",6),("Christian-Jacobite",6),("Christian-Knanaya",6),("Christian-Knanaya Catholic",6),("Christian-Knanaya Jacobite",6),("Christian-Latin Catholic",6),("Christian-Malankara",6),("Christian-Marthoma",6),("Christian-Other",6),("Christian-Penthecost",6),("Christian-Roman Catholic",6),("Christian-Seventh-Day-Adventist",6),("Christian-Syrian Catholic",6),("Christian-Syrian Jacobite",6),("Christian-Syrian Orthodox",6),("Christian-Syro Malabar",6),("Christian-Unspecifed",6),("Don't wish to specify",6),("Christian-Bornagain",7),("Christian-Bretheren",7),("Christian-CSI",7),("Christian-Evangelist",7),("Christian-Jacobite",7),("Christian-Knanaya",7),("Christian-Knanaya Catholic",7),("Christian-Knanaya Jacobite",7),("Christian-Latin Catholic",7),("Christian-Malankara",7),("Christian-Marthoma",7),("Christian-Other",7),("Christian-Penthecost",7),("Christian-Roman Catholic",7),("Christian-Seventh-Day-Adventist",7),("Christian-Syrian Catholic",7),("Christian-Syrian Jacobite",7),("Christian-Syrian Orthodox",7),("Christian-Syro Malabar",7),("Christian-Unspecifed",7),("Don't wish to specify",7),("Christian-Bornagain",8),("Christian-Bretheren",8),("Christian-CSI",8),("Christian-Evangelist",8),("Christian-Jacobite",8),("Christian-Knanaya",8),("Christian-Knanaya Catholic",8),("Christian-Knanaya Jacobite",8),("Christian-Latin Catholic",8),("Christian-Malankara",8),("Christian-Marthoma",8),("Christian-Other",8),("Christian-Penthecost",8),("Christian-Roman Catholic",8),("Christian-Seventh-Day-Adventist",8),("Christian-Syrian Catholic",8),("Christian-Syrian Jacobite",8),("Christian-Syrian Orthodox",8),("Christian-Syro Malabar",8),("Christian-Unspecifed",8),("Don't wish to specify",8),("Sikh-Ahluwalia",9),("Sikh-Arora",9),("Sikh-Bhatia",9),("Sikh-Bhatra",9),("Sikh-Ghumar",9),("Sikh-Intercaste",9),("Sikh-Jat",9),("Sikh-Kamboj",9),("Sikh-Khatri",9),("Sikh-Kshatriya",9),("Sikh-Lubana",9),("Sikh-Majabi",9),("Sikh-Nai",9),("Sikh-Other",9),("Sikh-Rajput",9),("Sikh-Ramdasia",9),("Sikh-Ramgharia",9),("Sikh-Ravidasia",9),("Sikh-Saini",9),("Sikh-Tonk Kshathriya",9),("Sikh-Unspecified",9),("Don't wish to specify",9),("Jain-Agarwal",10),("Jain-Bania",10),("Jain-Intercaste",10),("Jain-Jaiswal",10),("Jain-KVO",10),("Jain-Khandelwal",10),("Jain-Kutchi",10),("Jain-Oswal",10),("Jain-Other",10),("Jain-Porwal",10),("Jain-Unspecified",10),("Jain-Vaishya",10),("Don't wish to specify",10),("Jain-Agarwal",11),("Jain-Bania",11),("Jain-Intercaste",11),("Jain-Jaiswal",11),("Jain-KVO",11),("Jain-Khandelwal",11),("Jain-Kutchi",11),("Jain-Oswal",11),("Jain-Other",11),("Jain-Porwal",11),("Jain-Unspecified",11),("Jain-Vaishya",11),("Don't wish to specify",11),("Jain-Agarwal",12),("Jain-Bania",12),("Jain-Intercaste",12),("Jain-Jaiswal",12),("Jain-KVO",12),("Jain-Khandelwal",12),("Jain-Kutchi",12),("Jain-Oswal",12),("Jain-Other",12),("Jain-Porwal",12),("Jain-Unspecified",12),("Jain-Vaishya",12),("Don't wish to specify",12),("Intercaste",13),("Irani",13),("Parsi",13),("Other",13),("Don't wish to specify",13),("Other",14),("Don't wish to specify",14),("Ad Dharmi",15),("Ad Andhra",15),("ad Dravida",15),("Ad Karnataka",15),("Agarwal",15),("Agnikula Kshatriya",15),("Agri",15),("Ahom",15),("Ambalavasi",15),("Amil Sindhi",15),("Anavil Brahmin",15),("Arekatica",15),("Arora",15),("Arunthathiyar",15),("Arya Vysya",15),("Audichya Brahmin",15),("Ayyaraka",15),("Badaga",15),("Bagdi",15),("Baibhand Sindhi",15),("Baidya",15),("Baishnab",15),("Baishya",15),("Bajantri",15),("Balija",15),("Banayat Oriya",15),("Banik",15),("Baniya",15),("Baniya-Bania",15),("Baniya-Kumuti",15),("Banjara",15),("Barai",15),("Barendra Brahmin",15),("Barujibi",15),("Besta",15),("Bhandari",15),("Bhanusali Sindhi",15),("Bhatia",15),("Bhatia Sindhi",15),("Bhatraju",15),("Bhatt Brahmin",15),("Bhavasar Kshatriya",15),("Bhoi",15),("Bhovi",15),("Bhumihar Brahmin",15),("Billava",15),("Bishnoi/Vishnoi",15),("Bondili",15),("Boyar",15),("Brahmbatt",15),("Brahmin-Anavil",15),("Audichya",15),("Baraendra",15),("Bhatt Brahmin",15),("Bhumihar Brahmin",15),("Dhiman",15),("Dravida",15),("Garhwali",15),("Gaur",15),("Goswami/Gosavi",15),("Gujar Gaur",15),("Gurukkal",15),("Halua",15),("Hvyaka",15),("Hoysala",15),("Iyenger",15),("Iyer",15),("Janigid",15),("Jhadua",15),("Jyothish",15),("Kanyakubj",15);

