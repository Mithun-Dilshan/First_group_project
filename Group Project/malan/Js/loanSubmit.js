function fnLoanSubmitValidate() {
    if (document.getElementById('nic').value == "") {
        alert("Please enter the NIC No.");
        return false;
    } else if (document.getElementById('nic').value.length != 10) {
        alert("NIC should be 10 characters.");
        return false;
    } else if (document.getElementById('nic').value.slice(-1) != "V" && document.getElementById('nic').value.slice(-1) != "v") {
        alert("NIC last character should be 'V'.");
        return false;
    } else if (document.getElementById('name').value == "") {
        alert("Please enter the name.");
        return false;
    } else if (document.getElementById('address1').value == "") {
        alert("Please enter the Address Line 1.");
        return false;
    } else if (document.getElementById('city').value == "") {
        alert("Please enter the City.");
        return false;
    } else if (document.getElementById('mobile').value == "") {
        alert("Please enter the Mobile No.");
        return false;
    } else if (document.getElementById('amount').value == "") {
        alert("Please enter the Loan Amount.");
        return false;
    } else if (document.getElementById('period').value == "default") {
        alert("Please select the Loan Period.");
        return false;
    } else {
        return true;
    }
}