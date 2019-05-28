var Races=document.getElementById("Race");
var Subraces=document.getElementById("Subrace");
var Traits=document.getElementById("Traits");

for(var index in raceList) {
  Races.options[Races.options.length]=new Option(raceList[index], index);
}

Races.selectedIndex=-1;

function raceSet() {
  
  var selectedRace=Races.options[Races.selectedIndex].text;
  var selectedRaceValue=Races.options[Races.selectedIndex].value;
  
  raceSubraces=window[selectedRace+"Subraces"];
  
  removeOptions(Subraces);
  
  for(var index in raceSubraces) {
    Subraces.options[Subraces.options.length]=new Option(raceSubraces[index], index);
  }
  
  Traits.innerHTML=selectedRace+" traits:";
  for(index of window[selectedRaceValue+"Traits"]){
    Traits.innerHTML=Traits.innerHTML+"<br>"+index;
  }
  
  Subraces.selectedIndex=-1;
}

function subraceSet() {
  var selectedRace=Races.options[Races.selectedIndex].text;
  var selectedRaceValue=Races.options[Races.selectedIndex].value;
  var selectedSubrace=Subraces.options[Subraces.selectedIndex].text;
  var selectedSubraceValue=Subraces.options[Subraces.selectedIndex].value;
  
  Traits.innerHTML=selectedRace+" traits:";
  for(index of window[selectedRaceValue+"Traits"]){
    Traits.innerHTML=Traits.innerHTML+"<br>"+index;
  }
  
  Traits.innerHTML=Traits.innerHTML+"<br><br>"+selectedSubrace+" traits:";
  for(index of window[selectedSubraceValue+"Traits"]){
    Traits.innerHTML=Traits.innerHTML+"<br>"+index;
  }
}

function removeOptions(selectbox) {
  var option;
  for(option=selectbox.options.length-1; option>=0; option--) {
    selectbox.remove(option);
  }
}

function clearBoxes() {
  Races.selectedIndex=-1;
  removeOptions(Subraces);
  Traits.innerHTML="Your traits will appear here:";
}