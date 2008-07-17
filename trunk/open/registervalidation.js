function validate_required(username,alerttxt)
{
with (username)
{
if (value==null||value=="")
  {alert(alerttxt);return false;}
else {return true}

re = /^\w+$/; 
if(!re.test(form.username.value)) { alert("Error: Username must contain only letters, numbers and underscores!"); form.username.focus(); return false; }
}
}

function validate_email(email,alerttxt)
{
with (email)
{
if (value==null||value=="")
   {alert(alerttxt);return false;}
else {return true}
}
}
function validate_correct_email(email,alerttxt)
{
with (email)
{
apos=value.indexOf("@");
dotpos=value.lastIndexOf(".");
if (apos<1||dotpos-apos<2) 
  {alert(alerttxt);return false;}
else {return true;}
}
}


function validate_password(password,alerttxt)
{
with (password)
{
if (value==null||value=="")
   {alert(alerttxt);return false;}
else {return true}
}
}
function validate_password2(confirm,alerttxt)
{
with (confirm)
{
if (value==null||value=="")
   {alert(alerttxt);return false;}
else {return true}
}
}
function check_passwords(password,confirm,alerrtxt)
{
with (password,confirm)
{
if (password!=confirm)
   {alert(alerttxt);return false;}
else {return true}
}
}
function validate_code(code,alerttxt)
{
with (code)
{
if (value==null||value=="")
  {alert(alerttxt);return false;}
else if (code.value.length != 10)
  {alert(alerttxt);return false;}
else {return true;}
}
}



function validate_form(thisform)
{
with (thisform)
{
if (validate_required(username,"Username must be filled out!")==false)
  {username.focus();return false;}
}
with (thisform)
{
if (validate_email(email,"Email must be filled out!")==false)
  {email.focus();return false;}
}
with (thisform)
{
if (validate_correct_email(email,"Error:  Non-valid Email!" + '\n' + "Please enter a valid email address.")==false)
  {email.focus();return false;}
}
with (thisform)
{
if (validate_password(password,"You must choose a password!")==false)
  {password.focus();return false;}
}
with (thisform)
{
if (validate_password2(confirm,"You must confirm your password!")==false)
  {confirm.focus();return false;}
}
with (thisform)
{
if (validate_code(code,"Error:  Bad registration code:" + '\n' + "Code must be 10 digits long" + '\n' + code.value.length)==false)
  {code.focus();return false;}
}
with (thisform)
{
if (validate_password(password,"Password must be filled out!")==false)
  {Password.focus();return false;}
}
with (thisform)
{
if (check_passwords(password,confirm,"Error: Passwords must match.")==false)
  {password.focus();return false;}
}
}