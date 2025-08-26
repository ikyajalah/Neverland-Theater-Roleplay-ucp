document.getElementById("infoButton").addEventListener("click", function() {
    var infoDiv = document.getElementById("info");
    if (infoDiv.style.display === "none") {
        infoDiv.style.display = "block";
        this.textContent = "Sembunyikan Info";
    } else {
        infoDiv.style.display = "none";
        this.textContent = "Info Lebih Lanjut";
    }
});
