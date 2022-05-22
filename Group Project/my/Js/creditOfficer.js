var table = document.getElementById('loans');
var rows = table.getElementsByTagName("tr");
for (var i = 0; i < rows.length; i++) {
    var currentRow = table.rows[i];
    var createClickHandler = function (row) {
        return function () {
            debugger
            document.getElementById("myModal").style.display = "block";
            document.getElementById("selectedLoanId").value = row.getElementsByTagName("td")[0].innerHTML;
            document.getElementById("selectedNic").value = row.getElementsByTagName("td")[1].innerHTML;
            document.getElementById("selectedName").value = row.getElementsByTagName("td")[2].innerHTML;
            document.getElementById("selectedAmount").value = row.getElementsByTagName("td")[6].innerHTML;
            document.getElementById("selectedPeriod").value = row.getElementsByTagName("td")[7].innerHTML;
        };
    };
    currentRow.onclick = createClickHandler(currentRow);
}


// --------------- Modal ---------------------------
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");
var btnRowSelect = document.getElementById("btnRowSelect");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
    modal.style.display = "block";
}

// document.getElementById("selectAction").onclick = function (row) {
//     debugger
//     modal.style.display = "block";
//     document.getElementById("selectedLoanId").value = row.getElementsByTagName("td")[0].innerHTML;
//     document.getElementById("selectedNic").value = row.getElementsByTagName("td")[1].innerHTML;
//     document.getElementById("selectedName").value = row.getElementsByTagName("td")[2].innerHTML;
//     document.getElementById("selectedAmount").value = row.getElementsByTagName("td")[6].innerHTML;
//     document.getElementById("selectedPeriod").value = row.getElementsByTagName("td")[7].innerHTML;
// }

span.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


function fnFormValidate() {
    if (document.getElementById('selectedAmount').value == "") {
        alert("Please enter the Loan Amount.");
        return false;
    } else if (document.getElementById('selectedPeriod').value == "default") {
        alert("Please select the Loan Period.");
        return false;
    } else {
        return true;
    }
}