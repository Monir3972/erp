<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style type="text/css">
      .results {
        display: flex;
      }

      .results p {
        flex: 1;
      }

    </style>
  </head>
  <body>
     <div class="container m-5 p-5">
      <div class="row">
        <div class="col-md-3">
           <input id="filter" placeholder="Search" type="text" class="form-control mb-2">
        </div>
      </div>
       <div class="row">
         <div class="col-md-4" id="results">
           <div class="card">
             <div class="card-body">
              <div class="container small">
                <div class="row">
                  <div class="col-md-4">
                     <img src="../../assets/images/img1.jpg" class="img-fluid">
                  </div>
                  <div class="col-md-8 p-2 small">
                      <p class="m-0 p-0"> Name: Md Moniruzzaman Monir</p>
                      <p class="m-0 p-0"> Email: monircse3973@gmail.com</p>
                      <p class="m-0 p-0"> Designation: Developer</p>
                      <p class="m-0 p-0"> Dept: IT</p>
                  </div>
                </div>
              </div>
                
               
             </div>
           </div>
          
         </div>
           <div class="col-md-4" id="results">
           <div class="card">
             <div class="card-body">
              <div class="container small">
                <div class="row">
                  <div class="col-md-4">
                    <img src="../../assets/images/img1.jpg" class="img-fluid">
                  </div>
                  <div class="col-md-8 p-2 small">
                      <p class="m-0 p-0"> Name: Md Mehedi Hasan Siam</p>
                      <p class="m-0 p-0"> Email: siam@gmail.com</p>
                      <p class="m-0 p-0"> Designation: Developer</p>
                      <p class="m-0 p-0"> Dept: Account</p>
                  </div>
                </div>
              </div>
                
               
             </div>
           </div>
          
         </div>
           <div class="col-md-4" id="results">
           <div class="card">
             <div class="card-body">
              <div class="container small">
                <div class="row">
                  <div class="col-md-4">
                     <img src="../../assets/images/img1.jpg" class="img-fluid">
                  </div>
                  <div class="col-md-8 p-2 small">
                      <p class="m-0 p-0"> Name: Md Ashikur Rahman</p>
                      <p class="m-0 p-0"> Email: ahsiq@gmail.com</p>
                      <p class="m-0 p-0"> Designation: Executive</p>
                      <p class="m-0 p-0"> Dept: Sales</p>
                  </div>
                </div>
              </div>
                
               
             </div>
           </div>
          
         </div>
       </div>
     </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script type="text/javascript">
            $("#filter").keyup(function() {

              // Retrieve the input field text and reset the count to zero
              var filter = $(this).val(),
                count = 0;

              // Loop through the comment list
              $('#results div').each(function() {

                // If the list item does not contain the text phrase fade it out
                if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                  $(this).hide();

                  // Show the list item if the phrase matches and increase the count by 1
                } else {
                  $(this).show();
                  count++;
                }

              });

            });

       
    </script>
  </body>
</html>