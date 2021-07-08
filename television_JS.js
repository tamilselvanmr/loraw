var numberOfZeros=0;
var revealed = 0;
var originalArray=[];
for(var i=0;i<15;i++)
{
var temp = getPureCost(document.getElementsByClassName("productCost")[i].innerText);originalArray.push(temp);
}
function moreless(index)
{
console.log(index);
if(document.getElementsByClassName("moreLessButton")[index].innerText == "More"){
document.getElementsByClassName("moreLessButton")[index].innerText="Less";
document.getElementsByClassName("moreLess")[index].style.display = "block";return;}
if(document.getElementsByClassName("moreLessButton")[index].innerText == "Less"){
document.getElementsByClassName("moreLessButton")[index].innerText="More";
document.getElementsByClassName("moreLess")[index].style.display = "none";return;}
}
function makeAllOptionsBlack(){for(var i=0;i<3;i++){document.getElementsByClassName("options")[i].style.color="#777";document.getElementsByClassName("options")[i].style.borderBottom="2px solid #fff";}}
function sortArray(arr){return [...arr].sort(function(a,b){return a-b;});}
function sortPrice(type)
{
var unsortedArray = originalArray;
var sortedArray = [];
makeAllOptionsBlack();
if(type=="ascending"){sortedArray = sortArray(unsortedArray);document.getElementsByClassName("options")[1].style.color="#295";document.getElementsByClassName("options")[1].style.borderBottom="2px solid #295";}
if(type=="descending"){sortedArray = sortArray(unsortedArray).reverse();document.getElementsByClassName("options")[2].style.color="#295";document.getElementsByClassName("options")[2].style.borderBottom="2px solid #295";}
for(var a=0;a<sortedArray.length;a++)
{
for(var b=0;b<sortedArray.length;b++)
{
if(sortedArray[a]==unsortedArray[b]){document.getElementsByClassName("item")[b].style.order = a;}
}
}
}
function inchProcess(checkBoxNumber,from,to)
{
var checkBoxs = document.querySelectorAll('input[type="checkbox"]');
var name = document.getElementsByClassName("productName");
var price = document.getElementsByClassName("productCost");
for(var index = 0;index<15;index++)
{
var currentName = name[index].innerText;
var currentCost = price[index].innerText;
if(checkBoxNumber>=0 && checkBoxNumber<=4)
{
var pureCost = getPureCost(price[index].innerText);
if(pureCost>=from && pureCost<=to){revealed++;revealItem(index);}
}
if(checkBoxNumber>=5 && checkBoxNumber<=9)
{
var found = name[index].innerText.search("inch");
var inches = currentName[found-3]+currentName[found-2];
if(inches>=from && inches<=to){revealed++;revealItem(index);}
}
if(revealed==0){numberOfZeros++;}
if(numberOfZeros==15 && numberOfCheckboxesCHECKED()==1)
{
console.log("no items fouund!");
}
}
}
function inchPrice(checkBoxNumber,from,to,beg,end)
{
numberOfZeros=0;
revealed = 0;
hideAllItems();
for(var i=0;i<=9;i++)
{
if(document.querySelectorAll('input[type="checkbox"]')[i].checked==true)
{
switch(i)
{
case 0 : inchProcess(0,0,10000);break;case 1 : inchProcess(1,10000,25000);break;case 2 : inchProcess(2,25000,50000);break;case 3 : inchProcess(3,50000,75000);break;case 4 : inchProcess(4,75000,100000);break;case 5 :inchProcess(5,0,24);break;case 6 : inchProcess(6,26,32);break;case 7 : inchProcess(7,34,42);break;case 8 : inchProcess(8,44,54);break;case 9 : inchProcess(9,56,100);break;
}
}
isAllUnChecked();
}
}
function numberOfCheckboxesCHECKED(){let count = 0;for(var i=0;i<=9;i++){if(document.querySelectorAll('input[type="checkbox"]')[i].checked==true){count++;}}return count;}
function isAllUnChecked(){let count = 0;for(var i=0;i<=9;i++){if(document.querySelectorAll('input[type="checkbox"]')[i].checked==false){count++;}}if(count==10){revealAllItems();}}
function hideAllItems(){for(var i=0;i<15;i++){document.getElementsByClassName("item")[i].style.display="none";}}
function revealAllItems(){for(var i=0;i<15;i++){document.getElementsByClassName("item")[i].style.display="flex";}}
function revealItem(index){document.getElementsByClassName("item")[index].style.display = "flex";}
function getPureCost(rupees){var rs = rupees.search("₹");return rupees.substr(rs+1,rupees.length).replaceAll(",","");}
function getDetails(index)
{
var img = document.getElementsByClassName("productPhoto")[index-1].src;
var name=document.getElementsByClassName("productName")[index-1].innerText;
var originalCost = document.getElementsByClassName("productCost")[index-1].innerText;
var oldCost = document.getElementsByClassName("productOldCost")[index-1].innerText;
var pureCost = document.getElementsByClassName("productCost")[index-1].innerText.substr(document.getElementsByClassName("productCost")[index-1].innerText.search("₹")+1,originalCost.length).replaceAll(",","");
var off=document.getElementsByClassName("offer")[index-1].innerText;
document.getElementsByClassName("cart")[index-1].innerHTML="carted <i class='fa fa-cart-plus'></i>";

document.getElementById("link").value = img;
document.getElementById("name").value = name;
document.getElementById("cost1").value = pureCost;
document.getElementById("cost2").value = getPureCost(oldCost);
document.getElementById("quantity").value = 1;
document.getElementById("offers").value=off;

// showInserted();
// console.log("Name : "+name);
// console.log("Cost : "+originalCost);
// console.log("Old cost : "+oldCost);
// console.log("Pure Cost : "+pureCost);
// console.log("Image link : "+img);
// console.log("Offer : "+off);
}
function showOnBigScreen(index)
{
document.getElementById("bigScreenImage").src = document.getElementsByClassName("productPhoto")[index-1].src;document.getElementById("bigScreen").style.display="flex";document.getElementById("body").style.opacity="0.75";
}
function showOffBigScreen()
{
document.getElementById("bigScreenImage").src = "";document.getElementById("bigScreen").style.display="none";document.getElementById("body").style.opacity="1";
}
function collapseAll()
{
collapseHorizontal();
for(let list_num = 1;list_num<=5;list_num++)
{
document.getElementById("sub"+list_num).style.display="none";document.getElementById("down_"+list_num).classList.value = "fa fa-chevron-down";
document.getElementById("a"+list_num).style.color="#111";
}
}
function collapseHorizontal()
{
let arr = ["3a","3b","3c","3d","3e","3f","4a","4b","4c","4d","4e","4f","5a","5b","5c","5d","5e"];
for(let list_num = 0;list_num<arr.length;list_num++)
{
document.getElementById("sub"+arr[list_num]).style.display="none";document.getElementById("down_"+arr[list_num]).classList.value = "fa fa-chevron-right";
document.getElementById("a"+arr[list_num]).style.color="#111";
}
}
function expand(list_name,icon,a)
{
console.log("entered");
if(document.getElementById(icon).classList.value.endsWith("down")){collapseAll();collapseHorizontal();document.getElementById(list_name).style.display="inline-block";document.getElementById(icon).classList.value = "fa fa-chevron-up";document.getElementById(a).style.color="#195";return;}
if(document.getElementById(icon).classList.value.endsWith("right")){collapseHorizontal();document.getElementById(list_name).style.display="inline-block";document.getElementById(icon).classList.value = "fa fa-chevron-left";document.getElementById(a).style.color="#195";return;}
if(document.getElementById(icon).classList.value.endsWith("up")){collapseAll();return;}
if(document.getElementById(icon).classList.value.endsWith("left")){collapseHorizontal();return;}
}