<script src="natucam/layout/scripts/jquery.min.js"></script>
<script src="natucam/layout/scripts/jquery.backtotop.js"></script>
<script src="natucam/layout/scripts/jquery.mobilemenu.js"></script>
<script src="natucam/layout/scripts/jquery.fitvids.js"></script>
<!-- <script src="../resources/js/app.js"></script>
<script src="../resources/js/bootstrap.js"></script> -->
<script type="text/javascript">



    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });



    $(".btn-submit").click(function(e){

        e.preventDefault();
        console.log('submit detetect!');


        var name = $("input[name=name]").val();

        var password = $("input[name=password]").val();

        var email = $("input[name=email]").val();



        $.ajax({

           type:'POST',

           url:'./ajaxRequest',

           data:{name:name, password:password, email:email},

           success:function(data){

              alert(data.success);

           }

        });

    });

</script>
