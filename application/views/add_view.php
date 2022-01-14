<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<form class="needs-validation" novalidate action="/" method="post">

  <div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-light  ">
            <a>
                <div class="text3d-wrap-1">
                    <span class="text3d-1">Add Product </span>
                </div></a>
                <div class="row ">
                    <div class="col-md-12">

                    </div>
                    <div class="form-inline">
                        <div class="" id="btn_v">
                            <button class="glow-on-hover m-2" name="add_product" type="submit">Add Disk</button>
                        </div>
                        <div class="glow-on-hover m-2" id="btn_v">
                            <a class="" href="\">Cansel</a>
                        </div>
                    </div>
                </div>
        </nav>


    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8 ">
                <div class="col-md-12 mt-5">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">SKU</label>
                        <div class="col-sm-6">
                            <input type="text"  placeholder="enter letters" name="sku" class="form-control inp input-en" id="inputEmail3"  required >
                            <div class="invalid-tooltip">
                                Please fill out SKU.
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label ">Name</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="enter letters" name="name" class="form-control inp input-en" id="inputEmail3" required>
                            <div class="invalid-tooltip">
                                Please fill out Name.
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3"  class="col-sm-2 col-form-label">Price($)</label>
                        <div class="col-sm-6">
                            <input type="text"  placeholder="enter digits" maxlength="10" name="price" class="form-control inp input-number" id="inputEmail3" required>
                            <div class="invalid-tooltip">
                                Please fill out Price.
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Type Switcher</label>
                        <div class="col-sm-6 ">
                            <select class="form-control inp" name="type" id="selectid"   required>
                                <option></option>

                                <option value="DVD" > DVD </option>
                                <option value="Book" > Book </option>
                                <option value="Furniture" > Furniture </option>

                            </select>
                            <div class="invalid-tooltip">
                                Please choose parameter
                            </div>
                        </div>
                    </div>

                    <div class="form-group row" id="DVD_row"style="display: none">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Size(Mb)</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="enter digits"  maxlength="5" name="size" class="form-control inp   input-number" id="input_size" required >
                            <div class="invalid-tooltip">
                                Please fill out Price.
                            </div>
                        </div>
                    </div>
                    <div class="form-group row  "  id="Weight_row" style="display: none" >
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Weight (kg)</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="enter digits"  name="weight" maxlength="2" class="form-control inp input-number" id="input_weight" required>
                            <div class="invalid-tooltip">
                                Please fill out Weight.
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" id="dimensions_row" style="display: none">
                        <div class="form-group col-md-12" >
                            <label for="inputEmail3" class="col-sm-2 col-form-label ">Height (cm)</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="enter digits" maxlength="2" name="height" class="form-control inp  input-number  "  id="init_height" required>
                                <div class="invalid-tooltip">
                                    Please fill out Height.
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12"  >
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Width (cm)</label >
                            <div class="col-sm-6">
                                <input type="text" placeholder="enter digits" maxlength="2"  name="width" class="form-control inp input-number" id="init_width" required>
                                <div class="invalid-tooltip">
                                    Please fill out Width.
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12" >
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Length (cm)</label>
                            <div class="col-sm-6">
                                <input type="text"  placeholder="enter digits"  maxlength="2" name="length" class="form-control inp input-number" id="init_length" required >
                                <div class="invalid-tooltip">
                                    Please fill out Length.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
            <div class="col-md-4 ">
                <div class="row " >
                    <div id="chart_div" class="col-md-12 m-5" > </div>
                    <div id="chart_div1" class="col-md-12 m-5" ></div>
                    <div id="columnchart_material" class="col-md-8 m-5" style="width: 200px; height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>
   </div>
</form>


<!--script that checks input of numeric and alphabetic values-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('body').on('input', '.input-number', function(){
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    $('body').on('input', '.input-en', function(){
        this.value = this.value.replace(/[^a-z\s]/gi, '');
    });



    $('#selectid').on('change', function() {
       if(this.value === 'DVD'){
             $("#DVD_row").css('display', '')
             $("#dimensions_row").css('display', 'none')
             $('#chart_div1').css('display', 'none')
             $('#chart_div').css('display', '')
             $('#columnchart_material').css('display', 'none')
             $('#init_height').prop('required',false);
             $('#init_width').prop('required',false);
             $('#init_length').prop('required',false);
             $("#Weight_row").css('display', 'none')
             $('#input_weight').prop('required',false);

       }
        if(this.value === 'Book'){
            $("#DVD_row").css('display', 'none')
            $('#columnchart_material').css('display', '')
            $('#chart_div').css('display', 'none')
            $('#chart_div1').css('display', 'none')
            $('#input_size').prop('required',false);
            $("#dimensions_row").css('display', '')
            $("#Weight_row").css('display', 'none')
            $('#input_weight').prop('required',false);
        }
        if(this.value === 'Furniture'){
            $("#DVD_row").css('display', 'none')
            $('#chart_div').css('display', 'none')
            $('#chart_div1').css('display', '')
            $('#columnchart_material').css('display', 'none')
            $('#input_size').prop('required',false);
            $("#dimensions_row").css('display', 'none')
            $('#init_height').prop('required',false);
            $('#init_width').prop('required',false);
            $('#init_length').prop('required',false);
            $("#Weight_row").css('display', '')

        }
    });


</script>



<!--script that draws a table of the size and capacity of the disk-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

    google.charts.load('current', {'packages':['gauge']});
    google.charts.setOnLoadCallback(drawChart);
     function drawChart() {
         input_size.oninput = function (){
                var data = google.visualization.arrayToDataTable([
                    ['Label', 'Value'],
                    ['Size', Number(input_size.value)  ],

                ]);
                var options = {
                    width: 800, height: 240,
                    redFrom: 90, redTo: 100,
                    yellowFrom:75, yellowTo: 90,
                    minorTicks: 5
                };
                var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

                chart.draw(data, options);
            }
    }
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart1);
      function drawChart1() {
          input_weight.oninput = function (){
              var data = google.visualization.arrayToDataTable([
                  ['Label', 'Value'],
                  ['Weight', Number(input_weight.value)  ],

              ]);
              var options = {
                  width: 800, height: 240,
                  redFrom: 90, redTo: 100,
                  yellowFrom:75, yellowTo: 90,
                  minorTicks: 5
              };
              var chart = new google.visualization.Gauge(document.getElementById('chart_div1'));
              chart.draw(data, options);
          }
      }

</script>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">



    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart3);
    function drawChart3() {
        init_height.oninput = function (){

            var data = google.visualization.arrayToDataTable([
                ['', 'Width', 'length', 'height'],
                ['centimeters', init_width.value, init_length.value, init_height.value],

            ]);

            var options = {
                chart: {
                    title: 'dimensions',

                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        init_width.oninput = function (){

            var data = google.visualization.arrayToDataTable([
                ['', 'Width', 'length', 'height'],
                ['centimeters', init_width.value, init_length.value, init_height.value],

            ]);

            var options = {
                chart: {
                    title: 'dimensions',

                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

        init_length.oninput = function (){
            var data = google.visualization.arrayToDataTable([
                ['', 'Width', 'length', 'height'],
                ['centimeters', init_width.value, init_length.value, init_height.value],

            ]);
            var options = {
                chart: {
                    title: 'dimensions',
                }
            };
            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

    }


</script>

<style>
   .inp{
       border-radius: 15px;

   }
   .inp:hover{
       border-color: #f1c1e3;
       box-shadow: 0 0 15px #8c90c2;
   }

   .inp_weight{

   }
   @media (max-width:767px) {
       .inp_weight{
            margin-top: 0px;
       }

   }
   @media (min-width:900px) {
       .inp_weight{
           margin-top: 200px;
       }

</style>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
