<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Movie Cards</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

</head>
<body>

<style>
    body {
      background: #e2e2e2;
      font-family: "Montserrat", sans-serif;
      padding: 40px;
    }

    .card-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 40px;
    }

    .card {
      width: 800px;
      height: 400px;
      background: transparent;
      border-radius: 10px;
      box-shadow: 0px 20px 30px 3px rgba(0, 0, 0, 0.55);
      display: flex;
      overflow: hidden;
    }

    .card_left {
      width: 40%;
    }

    .card_left img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 10px 0 0 10px;
    }

    .card_right {
      width: 60%;
      background: #000000;
      color: white;
      padding: 30px 40px;
      box-sizing: border-box;
      border-radius: 0 10px 10px 0;
    }

    .card_right h1 {
      font-size: 32px;
      margin: 0 0 10px;
    }

    .card_right__details ul {
      list-style: none;
      padding: 0;
      margin: 10px 0;
    }

    .card_right__details ul li {
      display: inline-block;
      color: #e3e3e3;
      font-size: 14px;
      padding-right: 30px;
    }

    .card_right__review p {
      font-size: 12px;
      line-height: 1.6;
      margin: 15px 0;
    }

    .card_right__review a {
      color: #ffda00;
      text-decoration: none;
    }

    .card_right__button a {
      display: inline-block;
      color: #ffda00;
      text-decoration: none;
      font-size: 12px;
      padding: 10px 20px 10px 40px;
      border: 2px solid #ffda00;
      border-radius: 5px;
      background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/343086/COMdoWZ.png) no-repeat 10px center;
      background-size: 12px 12px;
      transition: 0.3s;
    }

    .card_right__button a:hover {
      background-color: #ffda00;
      background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/343086/rFQ5dHA.png);
      color: black;
    }

    body .card_right__rating__stars {
  position: relative;
  right: 160px;
  margin: 10px 0 10px 0;
  /***** CSS Magic to Highlight Stars on Hover *****/
  /* hover previous stars in list */
}
body .card_right__rating__stars fieldset, body .card_right__rating__stars label {
  margin: 0;
  padding: 0;
}
body .card_right__rating__stars .rating {
  border: none;
}
body .card_right__rating__stars .rating > input {
  display: none;
}
body .card_right__rating__stars .rating > label:before {
  margin: 5px;
  font-size: 1.25em;
  display: inline-block;
  content: "";
  font-family: FontAwesome;
}
body .card_right__rating__stars .rating > .half:before {
  content: "";
  position: absolute;
}
body .card_right__rating__stars .rating > label {
  color: #ddd;
  float: right;
}
body .card_right__rating__stars .rating > input:checked ~ label,
body .card_right__rating__stars .rating:not(:checked) > label:hover,
body .card_right__rating__stars .rating:not(:checked) > label:hover ~ label {
  color: #FFD700;
}
body .card_right__rating__stars .rating > input:checked + label:hover,
body .card_right__rating__stars .rating > input:checked ~ label:hover,
body .card_right__rating__stars .rating > label:hover ~ input:checked ~ label,
body .card_right__rating__stars .rating > input:checked ~ label:hover ~ label {
  color: #FFED85;
}
  </style>

<div class="card-wrapper">
  <?php
    include_once("config.php");
     $sql = "SELECT * from movies";
     $getMovies = $conn->prepare($sql);
     $getMovies->execute();

     $movies= $getMovies->fetchALL();
    foreach ($movies as $movie) {
      echo "
      <div class='card'>
        <div class='card_left'>
          <img src='{$movie['movie_image']}' alt='Poster'>
        </div>
        <div class='card_right'>
          <h1>{$movie['movie_name']}</h1>
          <div class='card_right__details'>
            <ul>
              <li>{$movie['movie_year']}</li>
              <li>{$movie['movie_length']} min</li>
              <li>{$movie['movie_genre']}</li>
            </ul>
        <div class='card_right__rating'>
        <div class='card_right__rating__stars'>
          <fieldset class='rating'>
            <input id='star10' name='rating' type='radio' value='10'>
            <label class='full' for='star10' title='10 stars'></label>
            <input id='star9half' name='rating' type='radio' value='9 and a half'>
            <label class='half' for='star9half' title='9.5 stars'></label>
            <input id='star9' name='rating' type='radio' value='9'>
            <label class='full' for='star9' title='9 stars'></label>
            <input id='star8half' name='rating' type='radio' value='8 and a half'>
            <label class='half' for='star8half' title='8.5 stars'></label>
            <input id='star8' name='rating' type='radio' value='8'>
            <label class='full' for='star8' title='8 stars'></label>
            <input id='star7half' name='rating' type='radio' value='7 and a half'>
            <label class='half' for='star7half' title='7.5 stars'></label>
            <input id='star7' name='rating' type='radio' value='7'>
            <label class='full' for='star7' title='7 stars'></label>
            <input id='star6half' name='rating' type='radio' value='6 and a half'>
            <label class='half' for='star6half' title='6.5 stars'></label>
            <input id='star6' name='rating' type='radio' value='6'>
            <label class='full' for='star6' title='6 star'></label>
            <input id='star5half' name='rating' type='radio' value='5 and a half'>
            <label class='half' for='star5half' title='5.5 stars'></label>
            <input id='star5' name='rating' type='radio' value='5'>
            <label class='full' for='star5' title='5 stars'></label>
            <input id='star4half' name='rating' type='radio' value='4 and a half'>
            <label class='half' for='star4half' title='4.5 stars'></label>
            <input id='star4' name='rating' type='radio' value='4'>
            <label class='full' for='star4' title='4 stars'></label>
            <input id='star3half' name='rating' type='radio' value='3 and a half'>
            <label class='half' for='star3half' title='3.5 stars'></label>
            <input id='star3' name='rating' type='radio' value='3'>
            <label class='full' for='star3' title='3 stars'></label>
            <input id='star2half' name='rating' type='radio' value='2 and a half'>
            <label class='half' for='star2half' title='2.5 stars'></label>
            <input id='star2' name='rating' type='radio' value='2'>
            <label class='full' for='star2' title='2 stars'></label>
            <input id='star1half' name='rating' type='radio' value='1 and a half'>
            <label class='half' for='star1half' title='1.5 stars'></label>
            <input id='star1' name='rating' type='radio' value='1'>
            <label class='full' for='star1' title='1 star'></label>
            <input id='starhalf' name='rating' type='radio' value='half'>
            <label class='half' for='starhalf' title='0.5 stars'></label>
          </fieldset>
        </div>
      </div>
            <div class='card_right__review'>
              <p>{$movie['movie_desc']}</p>
              <a href='{$movie['movie_readmore']}' target='_blank'>Read more</a>
            </div>
            <div class='card_right__button'>
              <a href='{$movie['movie_trailer']}' target='_blank'>WATCH TRAILER</a>
            </div>
          </div>
        </div>  
      </div>
      ";
    }
  ?>
</div>

</body>
</html>
