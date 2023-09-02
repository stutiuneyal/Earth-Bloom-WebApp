
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Get Plant Suggestions</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Get Plant Suggestions.css">
  </head>
  <body>
<h1 id="title">Get Suggestions</h1>
<p id="description"></p>
<form action="sugg_connect.php" method="POST">
  <fieldset>
    
    <label for="name">Name<input required type="text" name="name" placeholder="Name" id="name"></input></label>
    <label id="name-label"></label>
    
    <label for="email">Email<input required type="email" name="email" placeholder="Email" id="email"></input></label>
    <label id="email-label"></label>
    
    <label for="number">Average temperature in your area(in degree celcius)<input type="number" name="number" placeholder="" id="number" min="-5" max="100"></input></label>
    <label id="number-label"></label>

    <label for="name">Type of soil<input required type="text" placeholder="Name" id="type" name="type"></input></label>
    <label id="name-label"></label>
    
    <label>What kind of garden do you want?
      <select id="dropdown" name="dropdown">
        <option disabled selected>Space available</option>
        <option>Terrace</option>
        <option>Balcony</option>
        <option>Kitchen</option>
        <option>Lawn</option>
        <option>Other</option>
          </select>
          </label>

    Which plants do you prefer? (Check all that apply)
    <label><input class="inline" value="ANNUALS, BIENNIALS AND HERBACEOUS PERENNIALS" type="checkbox" name="plant_preferences"></input>ANNUALS, BIENNIALS AND HERBACEOUS PERENNIALS</label>
  <label><input class="inline" value="SHRUBS" type="checkbox" name="plant_preferences"></input>SHRUBS</label>
  <label><input class="inline" value="CLIMBERS AND CREEPERS" type="checkbox" name="plant_preferences"></input>CLIMBERS AND CREEPERS</label>
  <label><input class="inline" value=" CACTI AND SUCCULENTS" type="checkbox" name="plant_preferences"></input>CACTI AND SUCCULENTS</label>
  <label><input class="inline" value="INDOOR PLANTS" type="checkbox"name="plant_preferences"></input>INDOOR PLANTS</label>
  <label><input class="inline" value="ORNAMENTAL PALMS AND BULBOUS PLANTS" type="checkbox" name="plant_preferences"></input>ORNAMENTAL PALMS AND BULBOUS PLANTS</label>
  <label><input class="inline" value="TREES/BONSI" type="checkbox" name="plant_preferences"></input>TREES/BONSI</label>
  </label>
  <label>Any comments or specifications?
    <textarea rows="3" cols="30" placeholder="Write your comment here..." name="comments"></textarea>
  </label>

</fieldset>
<input type="submit" id="submit" name="submit"></input>
</form>
