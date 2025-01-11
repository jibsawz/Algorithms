import { selectionSort } from "./algotritms.js"
let numberGetter = document.querySelector("#addingNum input")
let addNumber = document.getElementById("addNumber")
let sort = document.getElementById("sort")
let reset = document.getElementById("reset")
let result = document.getElementById("result")
console.log("object");



let arr = []
function eventListeners() {
    addNumber?.addEventListener("click", setNumber)
    sort?.addEventListener("click", sorting)
    reset?.addEventListener("click",setReset)
    numberGetter?.addEventListener("keydown",(e)=>{
        
        if(e?.code == "Enter"){
            setNumber()
        }
    })
}
eventListeners()
function setNumber() {
   
    if (!numberGetter?.value) {
        result.innerHTML = `<p style='font-family: "dirooz";color:red'>لطفا عددی وارد کنید</p>`
    } else {
        result.innerHTML = ``
        const numbers = numberGetter.value.split(',')
            .filter(num => num !== '' && !isNaN(num))
            .map(num => parseInt(num));

        arr.push(...numbers);
    }

    numberGetter.value = ''
}
//start sorting
function sorting() {
    //get value and add to arr
    setNumber()
    //sort
    let sortingItem = selectionSort(arr)
    //show result
    result.innerHTML = `<p style="color:red">${sortingItem}</p>`
}
//reset
function setReset(){
    result.innerHTML = ""
    numberGetter.value = ""
}