function setCookie() 
{
    getname = document.getElementById("name").value;
    getvalue = document.getElementById("value").value;
    if (!getname)
    {
        alert("Please input name");
    }
    else if (!getvalue)
    {
        alert("Please input value");
    }
    else
    {
        alert("Complete, press 'Show' to see result");
    }
    document.cookie = `${getname}=${getvalue}`;
}

function deleteCookie()
{
    getname = document.getElementById("name").value;
    getvalue = document.getElementById("value").value;
    if (!getname)
    {
        alert("Please input name");
    }
    else if (!getvalue)
    {
        alert("Please input value");
    }
    else
    {
        alert("Complete, press 'Show' to see result");
    }
    document.cookie = `${getname}=${getvalue};expires=Thu, 01 Jan 1970 00:00:01 GMT`;
}

function show()
{
    let x = document.cookie;
    document.getElementById("display").innerHTML = x;
    alert("Complete");
}