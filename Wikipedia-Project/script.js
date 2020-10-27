$(document).ready(function(){
  $("#search").click(function(){
    var cardName = "card";
    var lookup = $("#lookup").val();
    var url = "https://en.wikipedia.org/w/api.php?action=opensearch&search="+lookup+"&format=json&callback=?";
    $.ajax({
      type:"GET",
      url:url,
      async:false,
      dataType:"json",
      success: function(data){
        for(var i = 9; i >= 0; i--){
          if(data[1][i] != undefined){
            $("#entries").prepend("<a href="+data[3][i]+"><div id="+cardName+"><h3>"+data[1][i]+"</div></a>"+"<br>");
         }          
        }
        console.log(data);
      },
      error: function(errorMessage){
        alert("Wrong Input");
      }
    });
  });
});

function clearBox(elementID)
{
  document.getElementById(elementID).innerHTML = "";
}