<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500&display=swap" rel="stylesheet">

    <!--Style Sheet-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="heading1">
    <div class="animation">
      <h1>SENTIMENT  ANALYZER</h1>
    </div>
  </div>
  

  <div class="loginbtn">
    <a href="logout.php">
      <button class="logbtn">Logout </button>
    </a>
  </div>


  <div class="navbar">
    <ul>
      <li class="nav"><a href="index.php">HOME</a></li>
      <li  class="nav"><a href="About.php">ABOUT</a></li>
      <li  class="nav"><a href="Payment.php">PAYMENT</a></li>
      <li  class="nav"><a href="contact.php">CONTACT</a></li>
    </ul>
  </div>
  
  <h2>Project Overview</h2>
  
  <p>
    Sentiment analysis is a technique used in natural language processing (NLP) that involves the 
    use of algorithms to automatically detect and classify subjective information in text data, 
    such as opinions, attitudes, and emotions. The goal of sentiment analysis is to identify 
    the overall sentiment expressed in a piece of text, whether it is positive, negative, or neutral.
  </p>

  <p>
    Sentiment analysis is widely used in a variety of applications, such as social media monitoring, 
    brand monitoring, customer feedback analysis, and market research. It can help businesses and 
    organizations gain valuable insights into how their customers feel about their products or services, 
    as well as track trends and identify areas for improvement.
  </p>  
    
    <p>
      There are several different approaches to sentiment analysis, including rule-based systems, machine learning, 
      and deep learning. Rule-based systems rely on a set of predefined rules or dictionaries to identify and classify 
      sentiment, while machine learning and deep learning approaches involve training a model on a large dataset of 
      labeled text data to automatically identify patterns and make predictions.
    </p>
    
    <p>
      Overall, sentiment analysis has become an important tool for businesses and organizations looking to gain insights 
      into customer sentiment and improve their products and services.
      We decided to include following application for our project.

      <ol>
        <li> Web Application</li>
        <li> Mobile Application</li>
        <li> Desktop Application</li>
        <li> Server & AI Algorithm</li>
      </ol>

  <div class="joinbtn">
    <a href="Payment.php">
      <button class="btn">Download Now </button>
    </a>
  </div>
 </p>


</body>
</html>