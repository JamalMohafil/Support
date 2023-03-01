let fileInput = document.getElementById("file")
let fileList = document.getElementById("files-list")
let numOfList = document.getElementById("num-of-list")


fileInput.addEventListener("change",() =>{
   fileList.innerHTML = "";
   numOfList.textContent = `حدد ${fileInput.files.length} صورة`
   for(i of fileInput.files){
      console.log(i);
      let reader = new FileReader();
      let listItem = document.createElement("li")
      let fileName = i.name;
      let fileSize = (i.size / 1024 ).toFixed(1)
listItem.innerHTML = `<p>
${fileName}
</p><p>
${fileSize}KB
</p>`
if(fileSize >= 1024){
   fileSize = (fileSize / 1024).toFixed(1)
   listItem.innerHTML = `<p>${fileName}</p><p>${fileSize}MB</p>`
}
fileList.appendChild(listItem)
   }
})

var one = document.getElementById("one");
one.addEventListener("click",()=>{
   document.querySelector(".one").style.display = "none";
   document.querySelector(".two").style.display = "inline";

})
var two = document.getElementById("two");
two.addEventListener("click",()=>{
   document.querySelector(".two").style.display = "none";
   document.querySelector(".three").style.display = "inline";

})
var three = document.getElementById("three");
three.addEventListener("click",()=>{
   document.querySelector(".three").style.display = "none";
   document.querySelector(".four").style.display = "inline";

})
var four = document.getElementById("four");
four.addEventListener("click",()=>{
   document.querySelector(".four").style.display = "none";
   document.querySelector(".five").style.display = "inline";

})
var five = document.getElementById("five");
five.addEventListener("click",()=>{
   document.querySelector(".five").style.display = "none";
   document.querySelector(".six").style.display = "inline";

})
var six = document.getElementById("six");
six.addEventListener("click",()=>{
   document.querySelector(".six").style.display = "none";
   document.querySelector(".one").style.display = "none";

   document.querySelector(".seven").style.display = "inline";

})
