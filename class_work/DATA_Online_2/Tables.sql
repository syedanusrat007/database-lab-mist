Create table ACTOR
(
	Actor_id	VARCHAR2(20),
	Actor_name	VARCHAR2(20),
	date_of_birth	DATE,
	Passing_date	DATE,
	Gender	VARCHAR2(20),
	First_Movie		VARCHAR2(20),
	Nationality		VARCHAR2(20),
	Spouse		VARCHAR2(20)
	
);

Create table DIRECTOR
(
	Director_id	VARCHAR2(20),
	Director_name	VARCHAR2(20),
	date_of_birth	DATE,
	Passing_date	DATE,
	First_Movie VARCHAR2(10),
	Nationality	VARCHAR2(20)
	
);

Create table PRODUCER
(
	Producer_id	VARCHAR2(20),
	Name	VARCHAR2(20),
	date_of_birth	DATE,
	passing_date	DATE,
	Company	VARCHAR2(20),
	Nationality	VARCHAR2(20),
	First_Movie VARCHAR2(20)
	
);

Create table MOVIE
(
	Movie_id	VARCHAR2(20),
	Title	VARCHAR2(100),
	Release_date DATE,
	type	VARCHAR2(20),
	Budget	NUMBER(20,2),
	Earned_Money	NUMBER(20,2),
	Language	VARCHAR2(20),
	Country	VARCHAR2(20),
	Vote	NUMBER(5,0)
		
);

Create table AWARDS
(
	Award_id	VARCHAR2(20),
	Title	VARCHAR2(100),
	country VARCHAR2(20),
	type	VARCHAR2(20),
	Start_date DATE		
);

Create table DIRECTED_BY
(
	Movie_id	VARCHAR2(20),
	Director_id	VARCHAR2(20)
);

Create table STARRING_IN
(
	Actor_id	VARCHAR2(20),
	Movie_id	VARCHAR2(20),
	Role 	VARCHAR2(20)
);

Create table PRODUCED_BY
(
	Movie_id	VARCHAR2(20),
	Producer_id	VARCHAR2(20)
);

Create table WINS_AWARD
(
	Movie_id	VARCHAR2(20),
	Award_id	VARCHAR2(20),
	Awarding_date	DATE,
	Category VARCHAR2(100)
);

Create table RATING
(
	Vote_Upper_Bound	NUMBER(6,0),
	Vote_Lower_Bound	NUMBER(6,0),
	Rate VARCHAR2(10)
);
