const plus = document.querySelector(".plus"),
minus = document.querySelector(".mius"),
num = document.querySelector(".num");
let a = 1;
plus.addEventListener("click", ()=>{
    a++;
    a = (a < 99 ) ? "0" + a : a;
    num.innerText = a;
    console.log(a);
});

minus.addEventListener("click", ()=>{
   if (a >1){
    a--;
    a = (a < 99 ) ? "0" + a : a;
    num.innerText = a;
   }
});