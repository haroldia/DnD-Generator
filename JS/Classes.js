var Classes=document.getElementById("Class");
var Subclasses=document.getElementById("Subclass");
var Traits=document.getElementById("Traits");

for(var index in classList) {
  Classes.options[Classes.options.length]=new Option(classList[index], index);
}

document.getElementById("Class").selectedIndex=-1;

function classSet() {
  var selectedClass=Classes.options[Classes.selectedIndex].text;
  var selectedClassValue=Classes.options[Classes.selectedIndex].value;
  
  classSubclasses=window[selectedClass+"Subclasses"];
  
  removeOptions(Subclasses);
  
  for(var index in classSubclasses) {
    Subclasses.options[Subclasses.options.length]=new Option(classSubclasses[index], index);
  }

  Traits.innerHTML=selectedClass+" traits:";
  for(index of window[selectedClassValue+"Traits"]){
    Traits.innerHTML=Traits.innerHTML+"<br>"+index;
  }

  Subclasses.selectedIndex=-1;
}

function subclassSet() {
  var selectedClass=Classes.options[Classes.selectedIndex].text;
  var selectedClassValue=Classes.options[Classes.selectedIndex].value;
  var selectedSubclass=Subclasses.options[Subclasses.selectedIndex].text;
  var selectedSubclassValue=Subclasses.options[Subclasses.selectedIndex].value;
  
  Traits.innerHTML=selectedClass+" traits:";
  for(index of window[selectedClassValue+"Traits"]){
    Traits.innerHTML=Traits.innerHTML+"<br>"+index;
  }
  
  Traits.innerHTML=Traits.innerHTML+"<br><br>"+selectedSubclass+" traits:";
  for(index of window[selectedSubclassValue+"Traits"]){
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
  Classes.selectedIndex=-1;
  removeOptions(Subclasses);
  Traits.innerHTML="Your traits will appear here:";
}