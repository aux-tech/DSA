var needle = document.getElementsByClassName('needle');
var el = document.getElementsByClassName('el');

 function measureDeg( ){
   for(var i = 0;i<needle.length;i++){
    var x = [75,60,54,82];
    var st = window.getComputedStyle(needle[i], null);
    var tr = st.getPropertyValue("-webkit-transform") ||
             st.getPropertyValue("-moz-transform") ||
             st.getPropertyValue("-ms-transform") ||
             st.getPropertyValue("-o-transform") ||
             st.getPropertyValue("transform") ||
             "fail...";

    var angle = (x[i]*180)/100;
    needle[i].style.transform = "rotate("+ angle +"deg)";
    el[i].dataset.value = x[i] + "%";

   }
};

measureDeg();
