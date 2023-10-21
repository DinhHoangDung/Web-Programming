function createTable() 
{
    var table = document.getElementById("tab");
    if (table.childNodes.length != 1)
    {
        alert("Remove table to do this");
        return;
    }
    var tagTable = document.createElement("table");
    for (var i = 0; i < 2; i++)
    {
        var tagRow = document.createElement("tr");
        tagTable.appendChild(tagRow);
        for (var j = 0; j < 2; j++)
        {
            var tagColumn = document.createElement("td");
            tagColumn.classList.add('border');
            tagColumn.classList.add('p-4');
            tagRow.appendChild(tagColumn);
        }
    }
    table.appendChild(tagTable);
}

function remove()
{
    var table = document.getElementById("tab");
    var tagTable = table.firstElementChild;

    if (table.childNodes.length() == 1)
    {
        alert("Create table to do this");
        return;
    }
    table.removeChild(tagTable);

}