import {getDistanceBetweenElements} from "./distanceBetweenTwoElement";

export  function moovNavIndicator(activeMenu){

    if(activeMenu !== undefined) {
        const nav = document.querySelector('.nav').querySelector('.nav__item')
        const navIndicator = document.querySelector('.nav__indicator')
        if(nav !== activeMenu ) {
            const indicatorPosition = getDistanceBetweenElements(nav,activeMenu) + (activeMenu.offsetWidth / 2)
            navIndicator.style.left =  `${indicatorPosition}px`
        }else {
            navIndicator.style.left =  `${activeMenu.offsetWidth / 2}px`
        }
    }
}
