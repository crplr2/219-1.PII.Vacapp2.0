create database vacapp2;

CREATE TABLE home (
	id BIGINT NOT NULL,
	titulo_home text NOT NULL,
	url_imagen_home text NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE about (
	id BIGINT NOT NULL,
	texto_about text NOT NULL,
	url_imagen_about text NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE accounts (
	id BIGINT NOT NULL AUTO_INCREMENT,
	user text NOT NULL,
	password text NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE services (
	id BIGINT NOT NULL,
	url_imagen_services text NOT NULL,
	texto_services text NOT NULL,
	PRIMARY KEY (id)
);


insert into home values(1,'VACAPP 2.0 ', 'https://cdn.familyfuncanada.com/wp-content/uploads/2016/05/Why-Family-Vacations-Matter.jpg');

insert into accounts values(1, 'admin','test');

insert into about values(1,
'We are an employee-owned travel agency anchored by our values, integrity and dedication to customer service. Our award-winning company consistently ranks as one of the best agencies in the country (Travel Weekly, Business Travel Weekly), and is a top member of the prestigious Signature Travel Network, a worldwide partnership allowing us to provide our customers unmatched benefits.  
Since 2009, our strong company culture and passion for our profession has resulted in our being named each year as one of the "Best Places To Work" in Los Angeles County. Our management is active on various travel advisory boards and committees for travel organizations, travel magazines (Afar, Travel+Leisure), major hotel brands, and more. 
TravelStore is a Premium Member of ASTA (American Society of Travel Advisors), as well as an ASTA Green Member agency, and CLIA (Cruise Line International Association).
Satisfied employees lead to satisfied customers. We know the growth and success of our company depends upon fulfilling our clients needs every day. That is also our promise ', 
'https://fitsmallbusiness.com/wp-content/uploads/2013/09/about-us-1.jpg');


insert into services values
(1,'https://finance.advids.co/wp-content/uploads//2018/06/travel-insurance.jpg',
'Travel insurance
For your peace of mind, we do require that you provide evidence of having appropriate insurance coverage on day one of your trip.  When selecting a travel insurance plan, at a minimum you should consider a plan with benefits for emergency medical expenses, including emergency repatriation.'),
(2,'https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/transfers-accom_0.jpg',
'Extra accommodation and transfers
Once the trip is underway, your accommodation and transport are all included (phew). But if you want to arrive in your destination a little early or stick around and explore by yourself, we can help you there. Hotels, taxis and airport '),
(3,'https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/book-flights_0.jpg',
'Flights
Finding the right flight online can be pretty frustrating – all those airport codes, stopovers, layovers, hot meals and aisle seats. Let our flight specialists help with the hard stuff. '),
(4,'https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/urban-adventure_0.jpg',
'Sightseeing
So you have touched down, made it to the hotel and slipped on some comfy walking shoes. What next? Kickstart your adventure by joining one of our Urban Adventures. They’re day tours with a difference.');