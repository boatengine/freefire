
    <script>

$(document).ready(function(){
  
setInterval(check, 1000);

function check(){
  $.post('action/check.php', {check: 'status'},
  function(data){
    if(data  == "on"){
      $("#status").html("<span style='font-size:18px; color:#2CC200;' class='fas'>✔</span> เปิดให้บริการ");
    }else{
      $("#status").html("<span style='font-size:18px; color:#2CC200;' class='fas'>❌</span> ร้านปิด");
    }
  }
  );
}
});

function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "action/action.php?q=" + str, true);
    xmlhttp.send();
  }
}


    </script>