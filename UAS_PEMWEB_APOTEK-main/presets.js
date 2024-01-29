function presets()
{

//============================\\
//Fungsi untuk ajax call
  this.get = function(url, callback)
  {
    var ajax = new XMLHttpRequest();
    var loading = $("#loading");
    var Process = $("#process");
    var width = 0;
    loading.show(500);
    ajax.open("get",url,true);
    ajax.onreadystatechange = function()
    { /*awal ajax*/
      if (ajax.readyState == 1) {
        width += 25;
        Process.css("width", `${width}%`);
      }
      else if(ajax.readyState == 2){
        width += 25;
        Process.css("width", `${width}%`);
      }
      else if(ajax.readyState == 3){
        width += 25;
        Process.css("width", `${width}%`);
      }
      else if(ajax.readyState == 4){
        // untuk menjadikan 100%
        width += 25;
        Process.css("width", `100%`);

        // untuk memberikan data dan menghilangkan loading
        callback(ajax.responseText);

        setTimeout(function(){
          width = 0;
          loading.hide(500);
          Process.css("width", `0%`);
        }, 2000);
      }
    }
    // untuk mengirim  data
    ajax.send();
  }
  //----------------------\\

//===============================\\
  //fungsi ajax dengan post
  this.post = function(url, data, callback)
  {
    var ajax = new XMLHttpRequest();
    var loading = $("#loading");
    var Process = $("#process");
    var width = 0;
    var data = "data="+JSON.stringify(data);
    loading.show(500);
    ajax.open("post", url, data);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax.onreadystatechange = function(){
      /*awal ajax*/
        if (ajax.readyState == 1) {
          width += 25;
          Process.css("width", `${width}%`);
        }
        else if(ajax.readyState == 2){
          width += 25;
          Process.css("width", `${width}%`);
        }
        else if(ajax.readyState == 3){
          width += 25;
          Process.css("width", `${width}%`);
        }
        else if(ajax.readyState == 4){
          // untuk menjadikan 100%
          width += 25;
          Process.css("width", `100%`);

          // untuk memberikan data dan menghilangkan loading
          callback(ajax.responseText);

          setTimeout(function(){
            width = 0;
            loading.hide(500);
            Process.css("width", `0%`);
          }, 2000);
        }
    }

    //kirim datanya
    ajax.send(data);
  }
//=================================================\\

//==================================================\\
//fungsi untuk toggle menu ke left
this.left = function(direction = "left", time = 500)
{
  $("#main, #footer").click(function(event) {

      var selector = document.getElementById("slide");
      var header = document.getElementById("header");
      var nilai = event.currentTarget != selector && event.currentTarget != header;

    if(nilai){
      $(`#slide`).hide("slide", {direction: direction}, time);
    }
  });
}
//==================================================\\

//fungsi untuk toggle menu ke left\\
this.toggle = function(direction = "left", time = 500)
{
  $("#menu").click(function(event) {
    $("#slide").toggle("slide", {direction : direction}, time);
  });
}
//end dari fungsi toggle
}
