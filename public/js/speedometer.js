var needle = document.getElementById('needle');
var el = document.getElementById('el');

 function measureDeg(){
  var st = window.getComputedStyle(needle, null);
  var tr = st.getPropertyValue("-webkit-transform") ||
           st.getPropertyValue("-moz-transform") ||
           st.getPropertyValue("-ms-transform") ||
           st.getPropertyValue("-o-transform") ||
           st.getPropertyValue("transform") ||
           "fail...";

  console.log(tr);
  var x = 50;
  var angle = (x*180)/100;
  needle.style.transform = "rotate("+ angle +"deg)";
  el.dataset.value = x + "%";
};

measureDeg();
