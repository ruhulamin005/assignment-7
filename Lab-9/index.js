console.log("Hello Everyone");

function validate() {
  var name = document.form.name.value;
  var username = document.form.username.value;
  var password = document.form.password.value;
  var retypepassword = document.form.retypepassword.value;
  var contact = document.form.contact.value;

  var flag = true;

  if (name==null || name == "") {
    document.getElementById('nameError').innerHTML = "*Name can't be blank";
    flag = false;
  } else {
    if(!/^[a-zA-Z ]+$/.test(name)){
      document.getElementById('nameError').innerHTML = "*Only letters and white space allowed";
      flag = false;
    }
  }

  if (username==null || username == "") {
    document.getElementById('usernameError').innerHTML = "*Username can't be blank";
    flag = false;
  } else {
    if(!/^[a-zA-Z0-9\s]+$/.test(username)){
      document.getElementById('usernameError').innerHTML = "*Only letters and numbers allowed";
      flag = false;
    }
  }

  if (password==null || password ==""){
    document.getElementById('passwordError').innerHTML = "*Password can't be blank";
    flag = false;

  }

  if (retypepassword==null || retypepassword ==""){
    document.getElementById('retypepasswordError').innerHTML = "*Retype Password can't be blank";
    flag = false;

  }

  if (contact==null || contact ==""){
    document.getElementById('contactError').innerHTML = "*Contact can't be blank";
    flag = false;

  }

  else {
    if(!/^[0-9]+$/.test(contact)){
      document.getElementById('contactError').innerHTML = "*Only numbers allowed";
      flag = false;
    }
  }

  return flag;

}
