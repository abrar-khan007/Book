function validation() {
  // var form = document.getElementById('myForm');
  var a = document.form["form"]["cat_name"].value;
  var b = document.form["form"]["cat_desc"].value;
  var cat_name = /[A-Za-z]$/;
  if ((a == null || a == "", b == null || b == "")) {
    if (!a.match(cat_name)) {
      if (!b.length < 50) {
        document.getElementsById("error1").innerHTML = "success";
      } else {
        document.getElementsByClassName("error1").innerHTML =
          "Write  a valid description";
        document.getElementByName("cat_desc").focus();
        return true;
      }
    } else {
      document.getElementsByClassName("error2").innerHTML =
        "Please enter a valid Category..!";
      document.getElementById("cat_name").focus();
      return true;
    }
    
  }
  return false;
}
