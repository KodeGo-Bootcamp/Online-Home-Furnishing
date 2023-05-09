# Furniture-Store

# TEAM NAME : (Online Home Furnishing | Mini-Project 2)

# Background Of The project:

The online home furnishing project aims to provide a convenient and efficient way for customers to purchase furniture and home decor items through an online platform. Consumers seeking to decorate and enhance their living spaces. However, traditional brick-and-mortar furniture stores often have limited inventory and can be inconvenient for customers to visit, especially for those with busy schedules or limited mobility.

To address these challenges, the online home furnishing project proposes to create a user-friendly website that offers a wide range of furniture and decor items that customers can browse and purchase from the comfort of their homes. The website will feature detailed product descriptions and images, as well as customer reviews and ratings to help shoppers make informed purchasing decisions.

To ensure customer satisfaction, the project team will partner with reputable furniture manufacturers and suppliers to provide high-quality and affordable products. Additionally, the project will offer various delivery options to cater to different customer needs, including home delivery and in-store pickup.

The online home furnishing project aims to differentiate itself from other online furniture retailers by providing personalized customer service and expert advice through its online chat and phone support. Customers will be able to ask questions and receive recommendations from knowledgeable home decor specialists who can help them create the perfect look for their home.

# [**Sitemap**](https://www.figma.com/file/qrRpgW9uygt0O8AP6ZP65G/Untitled?type=design&node-id=0%3A1&t=UQDQCyNpCJ1kXX3Z-1)

![](../assets/images/sitemap.jpg)

# Wireframe LFD Link:

# Wireframe HFD Link:

# [Github Page Link](https://github.com/KodeGo-Bootcamp/Online-Home-Furnishing?fbclid=IwAR0bYGUSMRKBU7Ap_7L_6XXxUKAuK_mgC6lB8LICFFZWoyefVs8ADZtcWB4)

## Project Goals / Services provided by the application

1.
2.
3.
4.
5.

## TECHNOLOGIES and VERSION

1. HTML , CSS, and Javascript
2. Bootstrap
3.

## TEAM CONTRIBUTORS:

1. Raymond King Usman
2. Gilbert Terbio
3. Regie Marzan
4. Benjie Gorgod

## OUTSIDE CONTRIBUTORS:

1.
2.
3.

## CURRENT FEATURES IMPLEMENTED

1. Responsive web design
2.
3.
4.
5.

## TESTING AND DEBUGGING TASKS DONE (POSSIBLE BUGS IN THE APPLICATION)

1. SPEED TEST
2. SEMANTIC VALIDATION
3. RESPONSIVE WEB TEST
4.
5.

## TESTING DONE:

### SCREEN SHOT OF SCHEMA VALIDATION

### SCREEN SHOT OF GOOGLE PAGE SPEED INSIGHTS MOBILE

### SCREEN SHOT OF GOOGLE PAGE SPEED INSIGHTS DESKTOP

## ADDITIONAL POST-RELEASE FEATURES (OPTIONAL)



<!-- Database tables
CREATE TABLE IF NOT EXISTS products (
product_id int(11) NOT NULL AUTO_INCREMENT,
product_name varchar(100) NOT NULL,
product_category varchar(100) NOT NULL,
product_description varchar(255) NOT NULL,
product_image varchar(255) NOT NULL,
product_image1 varchar(255) NOT NULL,
product_image2 varchar(255) NOT NULL,
product_image3 varchar(255) NOT NULL,
product_image4 varchar(255) NOT NULL,
product_price decimal(6,2) NOT NULL, /* 9999.99 */
product_special_offer integer(2) NOT NULL,
product_color varchar(100) NOT NULL,
PRIMARY KEY (product_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS orders (
order_id int(11) NOT NULL AUTO_INCREMENT,
order_cost decimal(6,2) NOT NULL,
order_status varchar(100) NOT NULL DEFAULT 'on_hold',
user_id int(11) NOT NULL,
user_phone int(11) NOT NULL,
user_city varchar(255) NOT NULL,
user_address varchar(255) NOT NULL,
order_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (order_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS order_items (
item_id int(11) NOT NULL AUTO_INCREMENT,
order_id int(11) NOT NULL,
product_id varchar(255) NOT NULL,
product_name varchar(255) NOT NULL,
product_image varchar(255) NOT NULL,
user_id int(11) NOT NULL,
order_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (item_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS users (
user_id int(11) NOT NULL AUTO_INCREMENT,
user_name varchar(100) NOT NULL,
user_email varchar(100) NOT NULL,
user_password varchar(100) NOT NULL,
product_image varchar(255) NOT NULL,
PRIMARY KEY (user_id),
UNIQUE KEY UX_Constraint (user_email)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; -->