<html>
    <head>
        <title>Coba dynamic form 2</title>
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var maxField = 10; //Input fields increment limitation
                var addButton = $('.add_button'); //Add button selector
                var wrapper = $('.field_wrapper'); //Input field wrapper
                var fieldHTML = '<div><input type="text" name="field_name[][name]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field">remove</a></div>'; //New input field html 
                var x = 1; //Initial field counter is 1
                $(addButton).click(function(){ //Once add button is clicked
                    if(x < maxField){ //Check maximum number of input fields
                        x++; //Increment field counter
                        $(wrapper).append(fieldHTML); // Add field html
                    }
                });
                $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                    e.preventDefault();
                    $(this).parent('div').remove(); //Remove field html
                    x--; //Decrement field counter
                });
            });
        </script>
    </head>
    <body>
        <?php
        include_once 'connection2.php';
        
        $db = new DB_Connection();
        $connection = $db->getConnection();
        
        if(isset($_REQUEST['submit'])){
            $field_values_array = $_REQUEST['field_name[name]'];
            
            print '<pre>';
            print_r($field_values_array);
            print '</pre>';
            
                foreach($field_values_array as $value){
                //your database query goes here
//                $query = "INSERT INTO `peserta` (nama, hobby) VALUES ('$value')";
//                mysqli_query($connection, $query);
//                echo "Data ".$value." telah dimasukkan<br />";
            }
            mysqli_close($connection);
        }
        ?>
        <form name="codexworld_frm" action="" method="post">
            <div class="field_wrapper">
                <div>
                    <input type="text" name="field_name[][name]" value=""/>
                    <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a>
                </div>
            </div>
            <input type="submit" name="submit" value="SUBMIT"/>
        </form>
    </body>
</html>