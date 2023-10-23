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

    if (table.childNodes.length == 1)
    {
        alert("Create table to do this");
        return;
    }
    table.removeChild(tagTable);
}

function addRow() 
{
    var table = document.getElementById("tab");
  
    if (table.childNodes.length == 1)
    {
      alert("Create table to do this!");
      return;
    }
  
    var tagTable = table.firstElementChild;
    if (tagTable.childNodes[0] == null)
    {
      alert("Create table to do this!");
      return;
    }
    var countCol = tagTable.childNodes[0].childNodes.length;
    if (countCol == 0)
    {
      alert("Create table to do this!");
      return;
    }
    var tagRow = document.createElement("tr");
    tagTable.appendChild(tagRow);
  
    for (var j = 0; j < countCol; j++) 
    {
      var tagColumn = document.createElement("td");
      tagColumn.classList.add('border');
      tagColumn.classList.add('p-4');
      tagRow.appendChild(tagColumn);
    }
}

function addCol() 
{
    var table = document.getElementById("tab");
  
    if (table.childNodes.length == 1){
      alert("Create table to do this!");
      return;
    }
    var tagTable = table.firstElementChild;
    if (tagTable.childNodes[0] == null)
    {
        alert("Create table to do this!");
        return;
    }
    var countRow = tagTable.childNodes.length;
    if (countRow == 0)
    {
      alert("Create table to do this!");
      return;
    }
    for (var i = 0; i < countRow; i++)
    {
      var tagRow = tagTable.childNodes[i];
      var tagColumn = document.createElement("td");
      tagColumn.classList.add('border');
      tagColumn.classList.add('p-4');
      tagRow.appendChild(tagColumn);
    }
}

function removeRow()
{
    var table = document.getElementById("tab");
    if (table.childNodes.length == 1)
    {
      alert("Create table to do this!");
      return;
    }
    var tagTable = table.firstElementChild;
    var countRow = tagTable.childNodes.length;
    var Rownumber = document.getElementById("Rownumber").value;
    if (!Rownumber)
    {
      alert("Input index of row!");
      return;
    }
    if (Rownumber >= countRow || Rownumber < 0)
    {
      alert("Invalid input index!");
      return;
    }

    tagTable.removeChild(tagTable.childNodes[Rownumber]);
}
function removeCol()
{
    var table = document.getElementById("tab");
    if (table.childNodes.length == 1)
    {
      alert("Create table to do this!");
      return;
    }
    var tagTable = table.firstElementChild;
    var Colnumber = document.getElementById("Colnumber").value;
    var countCol = tagTable.childNodes[0].childNodes.length;
    var countRow = tagTable.childNodes.length;
    if (!Colnumber)
    {
      alert("Input index of column!");
      return;
    }
    if (Colnumber >= countCol || Colnumber < 0)
    {
      alert("Invalid input index!");
      return;
    }
    for (var i = 0; i < countRow; i++)
    {
      var tagRow = tagTable.childNodes[i];
      tagRow.removeChild(tagRow.childNodes[Colnumber]);
    }
}