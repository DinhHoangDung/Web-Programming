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
      alert("Create table để thực hiện thao tác này");
      return;
    }
  
    var tagTable = table.firstElementChild;
    if (tagTable.childNodes[0] == null)
    {
      alert("Create new table để thực hiện thao tác này");
      return;
    }
    var countCol = tagTable.childNodes[0].childNodes.length;
    if (countCol == 0)
    {
      alert("Create new table để thực hiện thao tác này");
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
      alert("Create table để thực hiện thao tác này");
      return;
    }
    var tagTable = table.firstElementChild;
    if (tagTable.childNodes[0] == null)
    {
        alert("Create new table để thực hiện thao tác này");
        return;
    }
    var countRow = tagTable.childNodes.length;
    if (countRow == 0)
    {
      alert("Create new table để thực hiện thao tác này");
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
