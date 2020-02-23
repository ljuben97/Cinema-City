# Cinema City-A Simple PHP Laravel MVC Project

This is a simple Web Project I've created using the PHP Laravel MVC framework for demonstration purposes.

## Main controllers and actions

The project has two controllers that control separate sections:

- Theater
- Movie

Each have separate Actions:

- Add
- Edit
- Delete
- Details
- Index

### Add

The Add action takes you to a web form that allows you to add a new Item(Movie, Theater) to the database (A Local SQL Database that's connected MySQL on Xampp).


![alt text](https://raw.githubusercontent.com/ljuben97/Cinema-City/master/images/AddMovie.PNG)


### Details

The details action consists of all the information of a specific movie and theater.

Further more for the details of the movie the system displays all the theaters that the movie is available for viewing along with a "Buy Tickets" button.

Inside the details of a Theater along with the theater's full details you can also see all the movies that are playing in the theater right now along with a "Buy Tickets" button.

![alt text](https://raw.githubusercontent.com/ljuben97/Cinema-City/master/images/Details.PNG)

### Index

The index action displays all the movies and theater displayed in a stylized fashion. Every item holds information abou it's title the image and further info depending on the type of item. Also every item holds a "Details" button that takes the user to the details section of the specified item.

![alt text](https://raw.githubusercontent.com/ljuben97/Cinema-City/master/images/Movies.PNG)

## Extra actions for the Theater Controller

The theater controller holds extra action including:

- Add a Movie
- Buy Movie Tickets

### Add a Movie

The add a movie action takes the user to add a movie to the specific theater. The view for this action displays the theater's information and generates a form that holds a drop-down list of all the movies available, a text field for the selected movie's ticket price and another text field for the number of seats for the viewing of the movie.

Once submitted the Post Action connects the movie to the theater by creating a link object that holds the theater's id, the movie's id, the price and the number of seats and saves it to the database.

![alt text](https://raw.githubusercontent.com/ljuben97/Cinema-City/master/images/AddMovie.PNG)

### Buy Tickets

The buy tickets action takes the user to the buy tickets section for the specific theater. It displays the theater's details, the movie's details and a simple form that has a textfield for the number of seats the user likes to buy. 

![alt text](https://raw.githubusercontent.com/ljuben97/Cinema-City/master/images/BuyTickets.PNG)
