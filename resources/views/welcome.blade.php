<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Multiple SQL</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>

<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <br/>
            <br/>
            <br/>
        <div>
            <h2 style="text-align: center;">ข้อมูลตาราง SQL SERVER</h2>
        </div>
            <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">คำหน้าชื่อ</th>
                    <th scope="col">ชื่อ</th>
                    <th scope="col">นามสกุล</th>
                    <th scope="col">บัตรประชาชน</th>
                    <th scope="col">เบอร์โทร</th>
                    <th scope="col">ที่อยู่</th>
                    <th scope="col">เมือง</th>
                    <th scope="col">จังหวัด</th>
                    <th scope="col">รหัสไปรษณี</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($personModels as $SQLServer)  
                      <tr>
                        <td>{{ $SQLServer->PersonPrefixColID }}</td>
                        <td>{{ $SQLServer->PersonName }}</td>
                        <td>{{ $SQLServer->PersonLastName }}</td>
                        <td>{{ $SQLServer->PersonIDCard }}</td>
                        <td>{{ $SQLServer->PhoneNum }}</td>
                        <td>{{ $SQLServer->AddressOfPerson }}</td>
                        <td>{{ $SQLServer->City }}</td>
                        <td>{{ $SQLServer->Country }}</td>
                        <td>{{ $SQLServer->ZipCode }}</td>
                      </tr>
                    @endforeach
                 
                </tbody>
              </table>

        </div>
    </div> {{-- end row ข้อมูลตาราง SQL SERVER --}}

    <div class="row">
      <div class="col-lg-12">
          <br/>
          <br/>
          <br/>
      <div>
          <h2 style="text-align: center;">ข้อมูลตาราง MYSQL</h2>
      </div>
          <table class="table table-bordered border-primary">
              <thead>
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Body Text</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($nemoModels as $MYSQL)  
                <tr>
                  <td>{{ $MYSQL->title }}</td>
                  <td>{{ $MYSQL->bodytext }}</td>
                </tr>
                  @endforeach
               
              </tbody>
            </table>
            <br/>
            <br/>
            <br/>
      </div>
  </div> {{-- end row ข้อมูลตาราง MYSQL --}}
    
</div> {{-- end container --}}


   

  
 

   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>


