{{-- <!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="container">
        <div class="form-group">
            <form name="add_name" id="add_name">
                <h1>this is it</h1>
                <div class="">
                    <div class="col-md-3">
                        <label for="email" class="w-50">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="w-50">name:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="col-md-3">
                        <label for="sel1">Select list (select one):</label>
                        <select class="form-control" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="sel1">Select list (select one):</label>
                        <select class="form-control" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <table class="table" id="dynamic_field">
                        <button type="button" name="add" id="add" class="btn btn-success">+</button>
                    </table>
                    <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                </div>
            </form>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function(){      
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  


      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append
           ('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter email" class="form-control name_list" /><td><td><input type="text" name="name[]" placeholder="email" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="Select one" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="select one" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  

     


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  


      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      $('#submit').click(function(){            
           $.ajax({  
                url:postURL,  
                method:"POST",  
                data:$('#add_name').serialize(),
                type:'json',
                success:function(data)  
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }  
           });  
      });  


      function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });
      }
    });  
    </script>
</body>

</html> --}}

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    <input type="button" id = "btnAdd" onclick = "AddDropDownList()" value = "Add DropDownList" />
    <hr />
    <div id = "dvContainer"></div>
    <script type="text/javascript">
        function AddDropDownList() {
            //Build an array containing Customer records.
            var customers = [
                { CustomerId: 1, Name: "John Hammond", Country: "United States" },
                { CustomerId: 2, Name: "Mudassar Khan", Country: "India" },
                { CustomerId: 3, Name: "Suzanne Mathews", Country: "France" },
                { CustomerId: 4, Name: "Robert Schidner", Country: "Russia" }
            ];
            //Create a DropDownList element.
            var ddlCustomers = document.createElement("SELECT");
 
            //Add the Options to the DropDownList.
            for (var i = 0; i < customers.length; i++) {
                var option = document.createElement("OPTION");
 
                //Set Customer Name in Text part.
                option.innerHTML = customers[i].Name;
 
                //Set CustomerId in Value part.
                option.value = customers[i].CustomerId;
 
                //Add the Option element to DropDownList.
                ddlCustomers.options.add(option);
            }
 
            //Reference the container DIV.
            var dvContainer = document.getElementById("dvContainer")
 
            //Add the DropDownList to DIV.
            var div = document.createElement("DIV");
            div.appendChild(ddlCustomers);
 
            //Create a Remove Button.
            var btnRemove = document.createElement("INPUT");
            btnRemove.value = "Remove";
            btnRemove.type = "button";
            btnRemove.onclick = function () {
                dvContainer.removeChild(this.parentNode);
            };
 
            //Add the Remove Buttton to DIV.
            div.appendChild(btnRemove);
 
            //Add the DIV to the container DIV.
            dvContainer.appendChild(div);
        };
    </script>
</body>
</html>