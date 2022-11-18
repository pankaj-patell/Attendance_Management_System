function get_student(s)
{
	var c = document.getElementById('c').value;
			var ob;
			if(window.XMLHttpRequest)
			{
				ob = new XMLHttpRequest();
			}
			else
			{
				ob = new ActiveXObject("Microsoft.XMLHTTP");
			}
			var url = "fetch_student.php?c="+c;
			ob.open("GET",url,true);
			ob.send();
			ob.onreadystatechange=function()
			{
				if(ob.readyState==4 && ob.status==200)
				{
					var a = ob.responseText;					
					document.getElementById("student").innerHTML = a;
				
					
				}
					
			};

}