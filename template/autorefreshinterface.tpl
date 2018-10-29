<!DOCTYPE html>
<html>
<head>
	<title>{$autorefresh}</title>
</head>
<body>
<ol id='ul'></ol>
<script type="text/javascript">
	var ajax = new XMLHttpRequest();
	var ul = document.getElementById('ul');

	function request(){
		var url = 'autorefreshajax.php';
		ajax.open('POST',url,true)
		ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded')
		ajax.send('range=all')
		ajax.onreadystatechange =response;

	}
	function response(){
		if(ajax.readyState===4){
			if(ajax.status===200){
				var result = JSON.parse(ajax.responseText);
				//var content = "I am "+result.name+",and i am a "+result.sex;
				
				//if u remove this all the request fetched per sec will keep displayin in DOM
				//feed(content,ul);
				//console.log(result)
				//console.log(result);
				/**$rownumber=result.length;
				ul.innerHTML="";
				for(i=0;i<=$rownumber;i++){
					console.log(result[i]);
					var content = "My name is"+ result[i].name +", i am "+result[i].age+" years old";
					feed(content,ul);
				}
--**/
						if(result[0]){
							//This if construct is needed when in cases where there are no rows retrieved
								//true when row is retrieved
								//console.log(result[1]);
								
							 var length =result[1].length;
							 ul.innerHTML="";
							for(i=0;i<=length;i++){
							var content = "My name is"+ result[1][i].name +", i am "+result[1][i].age+" years old";
							feed(content,ul);
							}

						}
						else{
								// false when no row is retrieved
								 ul.innerHTML="";
								 feed(result[1],ul);
						}
			}

		}
	}

	function feed(element_content,parent_container){
		//this function is to create a li,collect content into it and add it into its parent element
		var li = document.createElement('li');//Create element
		li.append(element_content);// Add content to the element
		parent_container.appendChild(li)// add element to its parent element

	}

 //request();

 /** Updated data from the php backend database at this point does not update automatically.
 a native function is however needed to do auto interval**/
  {literal}setInterval(function(){request()},3000){/literal}


</script>
</body>
</html>