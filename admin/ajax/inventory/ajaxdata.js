// JavaScript Document
function get_city(id){
	//alert(id);
var res = $.ajax({
url: "http://www.merahometutor.com/crm//index.php/settings/ajax/get_city/"+id,
data: "true=true",
async:false
}).responseText;
if(res != ''){
	//alert(res);
$('#cty').html(res);
}
}
function get_loc(id){
	//alert(id);
var res = $.ajax({
url: "http://www.merahometutor.com/crm/index.php/settings/ajax/get_loc/"+id,
data: "true=true",
async:false
}).responseText;
if(res != ''){
	//alert(res);
$('#locations').html(res);
}
}