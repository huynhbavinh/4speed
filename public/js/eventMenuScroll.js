window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 2 || document.documentElement.scrollTop > 22) {
        document.getElementById("navbar").style.padding = "5px 30px";
        document.getElementById("white-background").style.backgroundColor = "rgba(253, 253, 2253, 1)";
    } else {
        document.getElementById("navbar").style.padding = "5px";
        document.getElementById("white-background").style.backgroundColor = "rgba(253, 253, 253, 0.8)";

    }
}