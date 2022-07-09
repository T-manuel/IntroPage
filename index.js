let menu = document.getElementById("menu");
let closeMenu = document.getElementById("closeMenu");
let navBarMenu = document.getElementById("navBarMenu");

menu.addEventListener("click", () => {
    navBarMenu.classList.remove("none");
    navBarMenu.classList.add("fromRight");
})

closeMenu.addEventListener("click", () => {
    navBarMenu.classList.add("none");
    navBarMenu.classList.remove("fromRight");
})

// dropDowns

accordion = document.querySelectorAll(".navhead");
Flist = document.getElementById("firstList");
Farrow = document.getElementById("arrowOne");
Slist = document.getElementById("secondList");
Sarrow = document.getElementById("arrowTwo");

function firstArrow (a,b) {
    a.classList.toggle("rotate");
    b.classList.remove("rotate");
}
function secondArrow (a,b) {
    a.classList.remove("rotate");
    b.classList.toggle("rotate");
}

accordion.forEach(function (item) {

    item.addEventListener("click", function (e) {
        clickedItem = e.currentTarget.id;

        if (clickedItem === "Features") {
            Flist.classList.toggle("noneHack");
            Slist.classList.add("noneHack");
            firstArrow(Farrow, Sarrow);
        }

        if (clickedItem === "Company") {
            Slist.classList.toggle("noneHack");
            Flist.classList.add("noneHack");
            secondArrow(Farrow, Sarrow);
        }
    })

})


