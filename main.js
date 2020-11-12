function zmien() {
    document.querySelector(".a1").style.background = "darkred";
    document.querySelector(".a2").style.background = "darkred";
    document.querySelector(".a3").style.background = "darkred";
    document.querySelector(".b").style.background = "darkgreen";
    document.querySelector(".c").style.background = "darkblue";
}


function zmien1() {
    document.querySelector(".a1").style.background = "pink";
    document.querySelector(".a2").style.background = "pink";
    document.querySelector(".a3").style.background = "pink";
    document.querySelector(".b").style.background = "lightgreen";
    document.querySelector(".c").style.background = "lightblue";
}

function link() {
    login = document.querySelector(".login");
    haslo = document.querySelector(".haslo");

    if (login = "a", haslo = "a") {
        location.href= logowanie.php;
    }
    else {
        alert('zle haslo')
    }
}