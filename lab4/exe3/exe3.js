function check()
{
  let Anum=document.getElementById("Anum").value
  let Bnum=document.getElementById("Bnum").value
  let Lnum=document.getElementById("Lnum").value
  let shopping=document.getElementsByName("shopping").checked
  let username=document.getElementById("username").value
  let password=document.getElementById("password").value

  if ((Anum=="")&&(Bnum=="")&&(Cnum==""))
  {
    alert("Quantities cannot be blank ")
  }
  if ((Anum<0)&&(Bnum<0)&&(Cnum<0))
  {
    alert("Quantities cannot be negative ")
  }
  if (!username.includes("@"))
  {
    alert("User name must be an email address")
  }
  if (password==null)
  {
    alert("password cannot be blank")
  }
  if (shopping== false)
  {
    alert("you must pick a shipping option")
  }
}
