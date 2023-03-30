# ClassAssignment-InputValidation-Client-ServerSide-
## 1. index.php
This is the client-side input validation that consist of HTML codes. The user will enter their input and the request will be send to the server-side code. In this index.php file, there are Regexes implemented so that certain characters and letters are allowed to be input.
## 2. process.php 
This is the server-side input validation file that consist of PHP codes. This is where the request coming from the client-side will be sent and processed. It processes the request and will sending back the HTML code to the client-side to be rendered by them. In this file also have implemented Regexes and whitelists that will not allow any cross-site scripting codes to be processed. Furthermore, the codes wil be checked and if there is any Javascript codes, it will tell the client that the input they send are invalid.
## 3. css/style.css
This is where the CSS for the client-side file will be stored. It styles the client-side HTML and how the user sees the webpage. 
## 4. js/script.js
This is where the Javascript code for the client-side file will be stored. The objective of this Javascript code is to validate if the user enters the correct input and will remind them if their input is not suitable.
