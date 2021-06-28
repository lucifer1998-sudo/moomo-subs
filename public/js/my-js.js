const hamburgerBtn = document.querySelector("#hamburger-btn")
const navList = document.querySelector(".nav-list")

hamburgerBtn.addEventListener("click",()=>{
    if (navList.style.top == "70px") {
        navList.style.top = "-270px"
    }
    else{
        navList.style.top = "70px"

    }
})