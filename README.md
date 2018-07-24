# Greeting letter

#### This is a WebPage to draft a friend greeting card.

#### By Qianqian Hu

## Description

This webpage will help user to draft a card.

## Setup/Installation Requirements

* Copy repository from GitHub to your computer using Terminal command $ git clone and then open index.html in a browser
* Using terminal command $ php -S localhost:8000
visit http://localhost:8000/hello.php by the browser
* change the root name into index.php (index is a keyword for the host that means the default resource for this project)
visit http://localhost:8000/

## Memo
* PHP in atom looks like this:
```
<?php
  $my_name = "Qianqian!";
  $friend_name = "Maomao";
?>
<?php echo "$my_name"; ?>/<?php echo $my_name ?>
<?php echo "$friend_name"; ?>/<?php echo $friend_name ?>
```
* echo is the keyword
* Every line of PHP code must end with a semicolon
* Variable names must begin with $
* After the $, variable names must start with a lowercase letter.
* Variable names must only contain the letters a-z, A-Z, the characters 0-9 and _ (underscore).
* Variable names must not contain spaces.
* indented by 4 spaces instead of 2 spaces.
* The <label> tag takes one attribute called for, which should match the id attribute of the corresponding <input> tag.
* the . concatenation operator
* function: action eg strlen(takes a string as an input, and returns the length of the string as the output)/round(takes a number with a decimal as an input, and returns the number rounded to the nearest whole number as the output)
* $ php -a
(go to php shell)try > echo strlen("Charlie Parker")/> echo round(4.8)
* To leave the PHP shell, just type exit and hit Enter.
* try more functions by https://www.learnhowtoprogram.com/php/php-basics/using-functions
* write functions:
function combineFrinendsAndWeather($parameter1,$parameter2)
{

}
