
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