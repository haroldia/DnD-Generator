<!DOCTYPE HTML>
<html lang="en_US">
<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../CSS/Navbar.css">
  <link rel="stylesheet" type="text/css" href="../CSS/Classes.css">
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

<h1>Class:</h1> <select id="Class" class="selectObject" onchange="classSet()">
  
</select>

<br><br>

<h1>Subclass:</h1> <select id="Subclass" class="selectObject" onchange="subclassSet()">
  
</select>

<br><br>

<input type="button" onclick="clearBoxes()" value="Clear">

<br><br>

<p><span id="Traits">Your traits will appear here:</span></p>

<!--Linked JavaScript Files-->
<script src="../JS/ClassesGeneral.js"></script>

<script src="../JS/PHB/Classes/Barbarian.js" type="text/javascript"></script>
<script src="../JS/PHB/Classes/Bard.js" type="text/javascript"></script>
<script src="../JS/PHB/Classes/Cleric.js" type="text/javascript"></script>
<script src="../JS/PHB/Classes/Druid.js" type="text/javascript"></script>
<script src="../JS/PHB/Classes/Fighter.js" type="text/javascript"></script>
<script src="../JS/PHB/Classes/Monk.js" type="text/javascript"></script>
<script src="../JS/PHB/Classes/Paladin.js" type="text/javascript"></script>
<script src="../JS/PHB/Classes/Ranger.js" type="text/javascript"></script>
<script src="../JS/PHB/Classes/Rogue.js" type="text/javascript"></script>
<script src="../JS/PHB/Classes/Sorcerer.js" type="text/javascript"></script>
<script src="../JS/PHB/Classes/Warlock.js" type="text/javascript"></script>
<script src="../JS/PHB/Classes/Wizard.js" type="text/javascript"></script>

<script src="../JS/Classes.js" type="text/javascript"></script>

</body>
</html>