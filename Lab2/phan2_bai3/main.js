function year()
{
    var year = document.getElementById("year");
  
    for (var i = 2022; i > 1920; i--) {
      var options = document.createElement("option");
      options.value = i;
      options.text = i;
      year.appendChild(options);
    }
}

function submit()
{
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var day = document.getElementById("day");
    var month = document.getElementById("month");
    var year = document.getElementById("year");
    var male = document.getElementById("male");
    var female = document.getElementById("female");
    var other = document.getElementById("other");
    var country = document.getElementById("country");
    //name
    if (firstname.length < 2 || firstname.length > 30)
    {
        alert("Length of firstname is form 2 to 30 charecters!");
        return;
    }
    if (lastname.length < 2 || lastname.length > 30)
    {
        alert("Length of lastname is form 2 to 30 charecters!");
        return;
    }
    //email
    if (!email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/))
    {
        alert("Please enter a valid email <sth>@<sth>.<sth>");
        return;
    }
    //password
    if (password.length < 2 || password.length > 30)
    {
        alert("Length of password is form 2 to 30 charecters!");
        return;
    }
    //day
    if (day.options[day.selectedIndex].value == "Day")
    {
        alert("Please select day!");
        return;
    }
    //month
    if (month.options[month.selectedIndex].value == "Month")
    {
        alert("Please select month!");
        return;
    }
    //year
    if (year.options[year.selectedIndex].value == "Year")
    {
        alert("Please select year!");
        return;
    }
    //gender
    if (male.checked == false && female.checked == false && other.checked == false)
    {
        alert("Please select gender!");
        return;
    }
    //country
    if (country.options[country.selectedIndex].value == "Country")
    {
        alert("Please select country!");
        return;
    }
    //about
    if (about.length > 10000)
    {
        alert("Length of about is maximum 10000 charecters!");
        return;
    }
    alert("Complete!")
}

function reset()
{
    document.getElementById("firstname").value = ""
    document.getElementById("lastname").value = ""
    document.getElementById("email").value = ""
    document.getElementById("password").value = ""
    document.getElementById("day").selectedIndex = 0

    var month = document.getElementById("month")
    month.innerHTML = ""
    var year = document.getElementById("year")
    year.innerHTML = ""

    document.getElementById("male").checked = false;
    document.getElementById("female").checked = false;
    document.getElementById("other").checked = false;
    document.getElementById("country").selectedIndex = 0
    document.getElementById("about").value = ""
}