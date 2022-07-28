 $(document).ready(function() {

  $('.dropify').dropify({
    messages: {
        'default': 'Drag and drop or Upload',
        
    }
});

      // $('#removeImg').parent().find(".dropify-clear").trigger('click');

     // $('#msform').parsley();
// Start create employe emergency infos

   $('#msform').submit(function(event) {
      event.preventDefault();
      var form_data = new FormData(this);
      $.ajax({
         data: form_data,
         processData: false,
         contentType: false,
         cache: false,
         url: "../../controller/process_employee.php", //php page URL where we post this data to save in database
         type: 'POST',
         success: function(result) 
         {
            Swal.fire({
               position: 'top-end',
               icon: 'success',
               title: 'Your infos has been saved',
               showConfirmButton: false,
               timer: 1500
            })
         }
      });
      $("#msform")[0].reset();

   });


        // Start fetch district
            $.ajax({
               url: "../../apis/api_m/api.php", //the page containing php script
               type: "post", //request type,
               data: {
                  'req': '12',
                  'param': '2',
                  'get': 'name'
               },
               dataType: "json",
               success: function(result) {
                  $("#emphomedist").html(result);
               }
            });



            // end fetch district

            // start fetch department

               $.ajax({
               url: "../../apis/api_m/api.php", //the page containing php script
               type: "post", //request type,
               data: {
                  'req': '8',
                  'param': '13',
                  'get': 'name'
               },
               dataType: "json",
               success: function(result) {
                  $("#empdept").html(result);
               }
            });

            // end fetch department

            // start fetch designation

               $.ajax({
               url: "../../apis/api_m/api.php", //the page containing php script
               type: "post", //request type,
               data: {
                  'req': '11',
                  'param': '2',
                  'get': 'name'
               },
               dataType: "json",
               success: function(result) {
                  $("#empdesig").html(result);
               }
            });

           // end fetch designation

           // start fetch organization

              $.ajax({
               url: "../../apis/api_m/api.php", //the page containing php script
               type: "post", //request type,
               data: {
                  'req': '2',
                  'param': '2',
                  'get': 'name'
               },
               dataType: "json",
               success: function(result) {
                  $("#emporg").html(result);
               }
            });

            // end fetch organization

            // start fetch location
         
            $.ajax({
               url: "../../apis/api_m/api.php", //the page containing php script
               type: "post", //request type,
               data: {
                  'req': '1',
                  'param': '17',
                  'get': 'name'
               },
               dataType: "json",
               success: function(result) {
                  $("#empref").html(result);
               }
            });

            // end fetch location

            // start fetch employee reference
                $.ajax({
                  url: "../../apis/api_m/api.php", //the page containing php script
                  type: "post", //request type,
                  data: {
                     'req': '10',
                     'param': '2',
                     'get': 'name'
                  },
                  dataType: "json",
                  success: function(result) {
                     $("#empwloc").html(result);
                  }
               });
            // end fetch employee reference
         // Start Dependable dropdown for company department and designation

      $('#emporg').on('change', function() {
         var emporg = $(this).val();
         $.ajax({
            type: 'POST',
            url: '../../apis/api_m/api.php',
            data: {
               'req': '8',
               'param': '14',
               'filter': 'org_id = ' + emporg
            },
            dataType: "json",
            success: function(result) {
               $('#empdept').html(result);
            }
         });

      });

      $('#empdept').on('change', function() {
         var empdept = $(this).val();
         $.ajax({
            type: 'POST',
            url: '../../apis/api_m/api.php',
            data: {
               'req': '11',
               'param': '14',
               'filter': 'dept_id = ' + empdept
            },
            dataType: "json",
            success: function(result) {
               $('#empdesig').html(result);
            }
         });

      });

      
})
  