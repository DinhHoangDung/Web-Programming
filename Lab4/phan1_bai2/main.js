
function getAllCookie() {
    var cookies = document.cookie.split(';');
    var cookieList = [];
    for(let i = 0; i < cookies.length;i++) {
        var cookie = cookies[i].trim();
        var cookieName = cookie.split('=')[0];
        var cookieValue = cookie.split('=')[1];
        var cookieObj = {
            name: cookieName,
            value: cookieValue
        };
        cookieList.push(cookieObj);
    }
    return cookieList;
}

function displayAllCookie() {
    if (document.cookie == "") return;
    var cookieList = getAllCookie();
    var table = document.querySelector(".table");
    for(let i = 0; i < cookieList.length; i++) {
        var row = table.insertRow();
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        cell1.innerHTML = cookieList[i].name;
        cell2.innerHTML = cookieList[i].value;
    }
}

function setCookie(cname, cvalue) {
    document.cookie = cname + "=" + cvalue  + ";path=/";
}

function addCookie() {
    var name = document.forms["myForm"]["name"].value;
    var value = document.forms["myForm"]["value"].value;
    setCookie(name,value);
    updateTable();
}

function updateTable() {
    var table = document.querySelector(".table");
    table.innerHTML = "<tr><th>Name</th><th>Value</th></tr>"
    displayAllCookie();
}

function deleteCookie() {
    var name = document.forms["myForm"]["name"].value;
    document.cookie = name + '=; expires=Thu, 01, Jan 1970 00:00:00 UTC; path=/;'
    updateTable();
}
  