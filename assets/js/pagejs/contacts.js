$(document).ready(function() {

	// Fetch Table Data
	
	$.ajax({
		url:"../../apis/api_m/api.php",
		type: 'POST',
		data:{'req': '1','param': '1'},
		dataType:"json",
		success:function(result){
			$('#wrapper').html(result);
			// $('#employee_details').paging({limit:1});
		}
	}); 
	// Fetch Table Data
	
	$.ajax({
		url:"../../apis/api_m/api.php",
		type: 'POST',
		data:{'req': '1','param': '18'},
		dataType:"json",
		success:function(result){
			$('#contactData').html(result);
			// $('#employee_details').paging({limit:1});
		}
	}); 

	// Fetch employee Table Data
	
	$.ajax({
		url:"../../apis/api_m/api.php",
		type: 'POST',
		data:{'req': '1','param': '19'},
		dataType:"json",
		success:function(result){
			$('#emp_list').html(result);
			// $('#employee_details').paging({limit:1});
		}
	}); 


	//fetch organization data 
	$.ajax({
		url:"../../apis/api_m/api.php",
		type: 'POST',
		data:{'req': '2','param': '2'},
		dataType:"json",
		success:function(result){
			$('#organization').html(result);
		}
	});


	//search by selected organization
	$('#organization').on('change',function(){
		var searchTerm = ($(this).val()=="-1") ? "" : $('#organization option:selected').text().toLowerCase();
		$('tr').each(function(index){
	        if (!index) return;
	        $(this).find("td").each(function () {
	            var id = $(this).text().toLowerCase().trim();
	            var not_found = (id.indexOf(searchTerm) == -1);
	            $(this).closest('tr').toggle(!not_found);
	            return not_found;
	        });
		});
	}); 


	//search by input field
	$("#search").keyup(function () {
	    var value = this.value.toLowerCase().trim();

	    $("tr").each(function (index) {
	        if (!index) return;
	        $(this).find("td").each(function () {
	            var id = $(this).text().toLowerCase().trim();
	            var not_found = (id.indexOf(value) == -1);
	            $(this).closest('tr').toggle(!not_found);
	            return not_found;
	        });
	    });
	});

	// fetch print id

			$('#printData').on('submit',function(){
			    event.preventDefault();
			    var values=[];
					$('input[name="checkid[]"]:checked').each(function () {
					  values[values.length] = (this.checked ? $(this).val() : "");
					});
		         window.open('print?id='+values, '_blank');
		        });
		   });




		function trBgChnage(trId){
			var checked = $('#checkid'+trId).is(":checked");
			if (checked==false) {
				$('#checkid'+trId).attr('checked',true);
			}
			else{
				$('#checkid'+trId).attr('checked',false);
			}
		}

	      function viewId() {
	          var checkBox = document.getElementById("id_Card");
	          var text = document.getElementById("displayId");
	          if (checkBox.checked == true){
	            text.style.display = "block";
	          } else {
	             text.style.display = "none";
	          }
	        }
	 
	      function viewVisiting(){
	          var checkBox2 = document.getElementById("visitingCard");
	          var text2 = document.getElementById("displayVisiting");
	          if (checkBox2.checked == true){
	            text2.style.display = "block";
	          } else {
	             text2.style.display = "none";
	          }
	      }
 

 