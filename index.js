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
if(document.getElementById(icon).classList.value.endsWith("down")){collapseAll();collapseHorizontal();document.getElementById(list_name).style.display="inline-block";document.getElementById(icon).classList.value = "fa fa-chevron-up";document.getElementById(a).style.color="#195";return;}
if(document.getElementById(icon).classList.value.endsWith("right")){collapseHorizontal();document.getElementById(list_name).style.display="inline-block";document.getElementById(icon).classList.value = "fa fa-chevron-left";document.getElementById(a).style.color="#195";return;}
if(document.getElementById(icon).classList.value.endsWith("up")){collapseAll();return;}
if(document.getElementById(icon).classList.value.endsWith("left")){collapseHorizontal();return;}
}