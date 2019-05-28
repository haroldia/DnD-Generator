<!DOCTYPE HTML>
<html lang="en_US">
<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../CSS/Navbar.css">
  <link rel="stylesheet" type="text/css" href="../CSS/Races.css">
  <link rel="icon" href="../Images/icon.ico">
</head>
<body>

<div id="Navbar">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="CharGen.php">Character Generator</a></li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Player&apos;s Handbook</a>
      <div class="dropdown-content">
        <a href="Classes.php">Classes</a>
        <a href="Races.php">Races</a>
        <a href="Spells.php">Spells</a>
      </div>
    </li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Additional Resources</a>
      <div class="dropdown-content">
        <a href="Syntax.php">Syntax</a>
        <a href="https://www.worldanvil.com/" target="blank">WorldAnvil</a>
      </div>
    </li>
  </ul>
</div>

<h1>Race:</h1> <select id="Race" class="selectObject" onchange="raceSet()">
  
</select>

<br><br>

<h1>Subrace:</h1> <select id="Subrace" class="selectObject" onchange="subraceSet()">
  
</select>

<br><br>

<input type="button" onclick="clearBoxes()" value="Clear">

<br><br>

<p><span id="Traits">Your traits will appear here:</span></p>

<!--Linked JavaScript Files-->
<script src="../JS/RacesGeneral.js" type="text/javascript"></script>

<script src="../JS/PHB/Races/Dragonborn.js" type="text/javascript"></script>
<script src="../JS/PHB/Races/Dwarf.js" type="text/javascript"></script>
<script src="../JS/PHB/Races/Elf.js" type="text/javascript"></script>
<script src="../JS/PHB/Races/Gnome.js" type="text/javascript"></script>
<script src="../JS/PHB/Races/HalfElf.js" type="text/javascript"></script>
<script src="../JS/PHB/Races/HalfOrc.js" type="text/javascript"></script>
<script src="../JS/PHB/Races/Halfling.js" type="text/javascript"></script>
<script src="../JS/PHB/Races/Human.js" type="text/javascript"></script>
<script src="../JS/PHB/Races/Tiefling.js" type="text/javascript"></script>

<script src="../JS/Races.js" type="text/javascript"></script>

</body>
</html>