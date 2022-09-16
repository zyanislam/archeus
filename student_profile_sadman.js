let tabs = document.querySelector(".tabs");
    let tabHeader = tabs.querySelector(".tab_header");
    let tabBodyy = tabs.querySelector(".tab_body");
    let tabIndicator = tabs.querySelector(".tab_indicator");
    let tabHeaderNodes = tabs.querySelectorAll(".tab_header > div");
    let tabBodyNodes = tabs.querySelectorAll("tab_body > div");

    for(let i = 0; i<tabHeaderNodes.length; i++){
        tabHeaderNodes[i].addEventListener("click", function(){
            tabHeader.querySelector(".active").classList.remove("active");
            tabHeaderNodes[i].classList.add("active");
            tabBody.querySelector(".active").classList.remove("active");
            tabBodyNodes[i].classList.add("active");
            tabIndicator.style.left = 'cal(calc(calc(25% - 5px) * ${i}) + 10px)';
        });
    }