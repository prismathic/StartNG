function getLocation() {
    if (document.getElementById("inputLocation").value === "Other") 
    {
        document.getElementById("locationText").classList.remove("d-none")
    }
    else {
        document.getElementById("locationText").classList.add("d-none")
    }
}