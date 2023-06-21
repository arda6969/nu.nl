function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "flex";
        document.getElementById("mnm").innerHTML = "Meer V";
    } else {
        x.style.display = "none";
        document.getElementById("mnm").innerHTML = "Minder ∧";
    }
};