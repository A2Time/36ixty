const burger = document.getElementById("burger");
const closeBurger = document.getElementById("close_burger")


let width = screen.width
let ok = "ca marche"
let no ="no"
// function navBar (width){
    // do{
  
    // }


    burger.onclick = function(){
        document.getElementById("nav_links").style.display = "flex"
        document.getElementById("close_burger").style.display = "flex"
        document.getElementById("burger").style.display = "none"
    }
    
    closeBurger.onclick = function(){
            
console.log(   document.getElementById("nav_links").style.display)
        document.getElementById("nav_links").style.display = "none"
        document.getElementById("close_burger").style.display = "none"
        document.getElementById("burger").style.display = "flex"
    
    } 

//     let prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
// 	let currentScrollPos = window.pageYOffset;
// 	if (prevScrollpos > currentScrollPos) {
// 		document.getElementById("navbar").style.top = "0";
// 	} else {
// 		document.getElementById("navbar").style.top = "-270px";
// 	}
// 	prevScrollpos = currentScrollPos;
// }


    
    const allCross = document.querySelectorAll('.visible_panel img');

    allCross.forEach(element =>{
        element.addEventListener('click', function(){
            let height = this.parentNode.parentNode.childNodes[3].scrollHeight;
            let currentChoice = this.parentNode.parentNode.childNodes[3];        
            if(this.src.includes('plus')){
                this.src = '/css/img/close.png'
                gsap.to(currentChoice, {duration: 0.2 , height : height + 40, opacity: 1, padding:' 20px 15px'});
            }else if(this.src.includes('close')){
                this.src = '/css/img/plus.png'
                gsap.to(currentChoice, {duration: 0.2 , height :0, opacity: 0, padding:' 0'});
    
            }
        })
    })

// }
