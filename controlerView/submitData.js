$(document).ready(function(){
	$("#inputID").focus();
});
function submitData(select){
	var operation = select.getAttribute("data-operation");
	$("#inputOperation").val(operation);
}