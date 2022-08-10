export class Slider extends HTMLElement {
    constructor() {
        super();

        this.sliders = [
                {image: 'photo1.jpg', content: '1er syndicat de France'},
                {image: 'photo2.jpg', content: 'Votre qualité de vie et vos conditions de travail sont assurés'},
                {image: 'photo3.jpg', content: 'Le mieux vivre ensemble'}
            ]
    }

    connectedCallback(){
        document.documentElement.style.setProperty('--animate-duration', '1.3s');

        this.currentIndex = 0;
       this.sliders =   [
            {image: '/images/photo1.jpg', content: '1er syndicat de France'},
            {image: '/images/photo2.jpg', content: 'Votre qualité de vie et vos conditions de travail sont assurés'},
            {image: '/images/photo3.jpg', content: 'Le mieux vivre ensemble'}
        ]
        this.slidersElements= []
        this.indicatorElements= []
        const slider = document.createElement('div')
        const arrowLeft = document.createElement("span")
        const arrowRight = document.createElement("span")
        const indicatorElement = document.createElement('span')
        indicatorElement.className ="indicator"
        arrowLeft.className = 'arrow arrow_left'
        arrowRight.className = 'arrow arrow_right'
        slider.appendChild(arrowLeft)
        slider.appendChild(arrowRight)
        slider.appendChild(indicatorElement)


        slider.className = 'slider'
       this.sliders.forEach((el,index)=>{
           const indicator = document.createElement('span')
           if(index === 0){
               indicator.className ='indicator_element active'
           }else {
               indicator.className ='indicator_element'

           }
           indicatorElement.appendChild(indicator)
           this.indicatorElements.push(indicator)
           const slide = document.createElement('div')
           slide.className= index === 0  ? "slide active" : "slide"
           slide.style.background = `url("${el.image}") no-repeat`
           slide.setAttribute("index", `${index}`)
           const content = document.createElement('div')
           content.className = "slide__content"
           content.innerText = el.content
           slide.appendChild(content)
           slider.appendChild (slide)
           this.slidersElements.push(slide)
       });
       this.appendChild(slider)
        arrowRight.addEventListener('click', ()=>{
            clearInterval(this.interVale)
            if(this.currentIndex < this.sliders.length - 1) {
               this.handleMoov(this.currentIndex, this.currentIndex + 1)
            }else {
                this.handleMoov(this.currentIndex, 0)
            }
        })
        arrowLeft.addEventListener('click', ()=>{
            clearInterval(this.interVale)
            if(this.currentIndex  > 0) {
                this.handleMoov(this.currentIndex, this.currentIndex - 1)
            }else {
                this.handleMoov(this.currentIndex, this.sliders.length - 1)            }
        })
        this.interVale = setInterval(()=>{
            if(this.currentIndex < this.sliders.length - 1) {
                this.handleMoov(this.currentIndex, this.currentIndex + 1)
            }else {
                this.handleMoov(this.currentIndex, 0)
            }
        },10000)
        this.handleMoov = function (oldIndex, newIndex) {
           this.slidersElements.forEach((el)=>el.style['z-index'] = 0 )
            clearInterval(this.interVale)

            if(oldIndex < newIndex) {
               this.slidersElements[oldIndex].classList.add('animate__animated', 'animate__fadeOutUp');
               this.slidersElements[oldIndex].style['z-index'] = 2
               this.slidersElements[newIndex].style['z-index'] = 1
               this.indicatorElements[oldIndex].classList.remove("active")
               this.slidersElements[newIndex].classList.add('active');
               this.slidersElements[oldIndex].addEventListener('animationend', (e)=>{
                   e.stopPropagation()
                   this.slidersElements[oldIndex].className = "slide";
                   this.indicatorElements[newIndex].classList.add("active")
               })
               this.currentIndex = newIndex
               this.interVale = setInterval(()=>{
                   if(this.currentIndex < this.sliders.length - 1) {
                       this.handleMoov(this.currentIndex, this.currentIndex + 1)
                   }else {
                       this.handleMoov(this.currentIndex, 0)
                   }
               },10000)
           }else {
               this.slidersElements[oldIndex].classList.add('animate__animated', 'animate__fadeOutDown');
               this.indicatorElements[oldIndex].classList.remove("active")
               this.slidersElements[oldIndex].style['z-index'] = 2
               this.slidersElements[newIndex].style['z-index'] = 1
               this.slidersElements[newIndex].classList.add('active');
               this.slidersElements[oldIndex].addEventListener('animationend', (e)=>{
                   e.stopPropagation()
                   this.slidersElements[oldIndex].className = "slide";
                   this.indicatorElements[newIndex].classList.add("active")
               })
               this.currentIndex = newIndex
               this.interVale = setInterval(()=>{
                   if(this.currentIndex < this.sliders.length - 1) {
                       this.handleMoov(this.currentIndex, this.currentIndex + 1)
                   }else {
                       this.handleMoov(this.currentIndex, 0)
                   }
               },10000)

           }
        }

        function autoSlide(data) {


        }

   }


}
