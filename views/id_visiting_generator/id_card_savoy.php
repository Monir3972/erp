
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ID Card || Savoy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
     .fontpage {
          height: 2.15in;
          width: 3.37in;
          border: 2px solid #000;
          padding: 13px
      }
       .backpage {
          height: 2.15in;
          width: 3.37in;
          padding: 9px
      }
      .contact{
        font-size: 8px;
       line-height: 0;
      }
      .company_address p {
        font-size: 8px;
    }
     .contAddress {
     width: 100%;
     }
     .contact {
      width: 50%;
     }
    .company_address {
       position: relative;
       top: -50px;
       left: 47%;
     }

   .bg_img{
    background-image: url(../../assets/images/backpage.png);
    /*background-size: cover;*/
    /*background-repeat: no-repeat;*/
    background-position: center;
    background-repeat: no-repeat;
    background-size: auto 100%;
    position: relative;
   }
   .svoy_logo{
    position: relative!important;
    left: 25%!important;
   }

   @media print {
        .svoy_logo img{
          position: relative;
          top: -65px;
          left:60%;
          width:90px;
        }
        .savoy_qr img{
          width: 35px
        }
        .nameDetails{
          position: relative;
          top: -70px;
        }
        .printView{
          position: relative;
          left:15%;
        }
         .svoy_logo{
            position: relative!important;
            left: 10%!important;
           }
      }
      
    </style>
      </head>
      <body>
            <div class="container mt-5">
              <div class="row" id="">
                <div class="col-md-4 col-sm-5">
                  <div class="fontpage">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="savoy_qr">
                        <img class="img-fluid" src="../../assets/images/savoyqr.png">
                      </div>
                    </div>
                    <div class="col-md-4 offset-md-4">
                      <div class="svoy_logo">
                        <img class="img-fluid" src="../../assets/images/savoy.png">
                      </div> 
                    </div>
                  </div>
                  <div class="nameDetails">
                  <h3 class="mt-4 p-0 mb-0" style="font-size: 13px">Md. Mahin Rahman</h3>
                  <p class="p-0 mb-1" style="font-size: 9px;margin-top: -3px">TSO, Sales</p>
                  <hr class="p-0 m-0 divider">
                  <div class="contAddress">
                    <div class="contact mt-3">
                      <p class="" style="color:#000"><i class="fa-solid fa-mobile-screen p-0 mb-0" style="line-height: 0"></i> 019347783484378</p>
                      <p class="" style="margin-top: -5px"><i class="fa-solid fa-square-phone p-0 mb-0" style="line-height: 0"></i> 019347783484378</p>
                      <p class="" style="margin-top: -5px"><i class="fa-solid fa-envelope p-0 mb-0" style="line-height: 0"></i> m.mahin@goldengroup-bd.com</p>
                    </div>
                   <div class="company_address">
                      <h3 class="mb-0" style="font-size: 11px;font-weight: 400">Savoy Ice Cream Factory Limited</h3>
                      <p class="text-muted mb-0" style="margin-top: -2px">A Concern of Golden Group</p>
                      <p class="mb-0">Navana Tower (14th Floor), 45 Gulshan Avenue</p>
                      <p class="mb-0">Gulshan-1, Dhaka-1212, Bangladesh</p>
                   </div>
                </div>
                </div>
                </div>
                </div>

                <div class="col-md-4 col-sm-5 mx-auto printView">
                 <div class="backpage bg_img">
                  
                 </div>
                </div>
               </div>
              
             </div>
        
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

