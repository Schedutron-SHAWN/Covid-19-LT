<!DOCTYPE HTML>
<html>
	<head>
		<title>Covid-19 LT</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/tracker.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
	</head>
	<body onload="fetch()">
        
              <section>
                <h1>COVID-19 LIVE STATUS</h1>
                <div class="tbl-header">
                    <table class="table table-responsive" cellpadding="0" cellspacing="0" border="0"  id="tbval">
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>TotalConfirmed</th>
                            <th>TotalRecovered</th>
                            <th>TotalDeaths</th>
                            <th>NewConfirmed</th>
                            <th>NewRecovered</th>
                           
                        </tr>
                    </thead>
                    </table>
                </div>
             </section>   
 

         
 


            <!-- Scripts -->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha-256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            

                        
            <script>
            $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({'padding-right':scrollWidth});
            }).resize();
            </script>


            <script>
             function fetch(){

                    $.get("https://api.covid19api.com/summary",
                    
                    function (data){

                       // console.log(data['Countries'].length);
                        
                       var tbval = document.getElementById('tbval');

                       for(var i=1; i<(data['Countries'].length); i++){

                        var x = tbval.insertRow();

                        x.insertCell(0);

                        tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                       
                            tbval.rows[i].cells[0].style.background = '#25b7c4';
                            tbval.rows[i].cells[0].style.color = '#fff';

                            x.insertCell(1);

                        tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];

                            tbval.rows[i].cells[1].style.background = '#25b7c4';

                            x.insertCell(2);

                        tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];

                            tbval.rows[i].cells[2].style.background = '#25b7c4';

                            x.insertCell(3);

                        tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];

                            tbval.rows[i].cells[3].style.background = '#25b7c4';

                            x.insertCell(4);

                        tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];

                            tbval.rows[i].cells[4].style.background = '#25b7c4';
                                                                            

                            x.insertCell(5);

                        tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];

                            tbval.rows[i].cells[5].style.background = '#25b7c4';
 


                       }

                    }
                    
                 );

             }

            </script>

	</body>
</html>
