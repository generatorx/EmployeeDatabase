function myFunction() {
    var input, filter, table, tr, td, i, txtValue, txtValue2, txtValue3, txtValue4, txtValue5, txtValue6;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td");
    firstCol = td[1];
    secondCol = td[2];
    thirdCol = td[3];
    fourthCol = td[4];
    fifthCol = td[5];
    sixthCol = td[6];
      if (firstCol || secondCol || thirdCol || fourthCol || fifthCol) {
        txtValue = firstCol.textContent || firstCol.innerText;
        txtValue2 = secondCol.textContent || secondCol.innerText;
        txtValue3 = thirdCol.textContent || thirdCol.innerText;
        txtValue4 = fourthCol.textContent || fourthCol.innerText;
        txtValue5 = fifthCol.textContent || fifthCol.innerText;
        txtValue6 = sixthCol.textContent || sixthCol.innerText;
        
        if (txtValue.toUpperCase().indexOf(filter) > -1  || txtValue2.toUpperCase().indexOf(filter) > -1 || txtValue3.toUpperCase().indexOf(filter) > -1 || txtValue4.toUpperCase().indexOf(filter) > -1 || txtValue5.toUpperCase().indexOf(filter) > -1 || txtValue6.indexOf(filter) > -1) {
          tr[i].style.display = "";

        } else {
          tr[i].style.display = "none";
        }
      }            
    }
  }