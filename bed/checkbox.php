<?php 
                $mysqlserverhost = "localhost";
 $database_name = "id18768632_test";
 $username_mysql = "id18768632_test123";
 $password_mysql = "zKUN0jmBMB?E2V*n";
                 $conn = mysqli_connect($mysqlserverhost, $username_mysql, $password_mysql, $database_name);
    
  //////// Row -----------------------------------------------------  
    $data = "SELECT * FROM demo where name='1A'";
    $query_runn = mysqli_query($conn, $data);
    $num = mysqli_num_rows($query_runn);
    if ( $num > 0 )
       {
        $a1= "disabled"; }

        $data1 = "SELECT * FROM demo where name='1B'";
        $query_runn1 = mysqli_query($conn, $data1);
        $num1 = mysqli_num_rows($query_runn1);
       if ( $num1 > 0 )
       {
            $b1= "disabled";
    
            }
  //////// Row -----------------------------------------------------  


        $data2 = "SELECT * FROM demo where name='2A'";
        $query_runn2 = mysqli_query($conn, $data2);
        $num2 = mysqli_num_rows($query_runn2);
       if ( $num2 > 0 )
       {
            $a2= "disabled";
    
            }

        $data3 = "SELECT * FROM demo where name='2B'";
        $query_runn3 = mysqli_query($conn, $data3);
        $num3 = mysqli_num_rows($query_runn3);
       if ( $num3 > 0 )
       {
            $b2= "disabled";
    
            }
      //////// Row -----------------------------------------------------  
        

        $data4 = "SELECT * FROM demo where name='3A'";
        $query_runn4 = mysqli_query($conn, $data4);
        $num4 = mysqli_num_rows($query_runn4);
       if ( $num4 > 0 )
       {
            $a3= "disabled";
    
            }

        $data5 = "SELECT * FROM demo where name='3B'";
        $query_runn5 = mysqli_query($conn, $data5);
        $num5 = mysqli_num_rows($query_runn5);
       if ( $num5 > 0 )
       {
            $b3= "disabled";
    
            }
   //////// Row -----------------------------------------------------  
       
            $data6 = "SELECT * FROM demo where name='4A'";
            $query_runn6 = mysqli_query($conn, $data6);
            $num6 = mysqli_num_rows($query_runn6);
           if ( $num6 > 0 )
           {
                $a4= "disabled";
        
                }
                $data7= "SELECT * FROM demo where name='4B'";
                $query_runn7 = mysqli_query($conn, $data7);
                $num7 = mysqli_num_rows($query_runn7);
               if ( $num7 > 0 )
               {
                    $b4= "disabled";
            
                    }

  //////// Row -----------------------------------------------------  
        $data8 = "SELECT * FROM demo where name='5A'";
        $query_runn8 = mysqli_query($conn, $data8);
        $num8 = mysqli_num_rows($query_runn8);
       if ( $num8 > 0 )
       {
            $a5= "disabled";
    
            }
            $data9 = "SELECT * FROM demo where name='5B'";
            $query_runn9 = mysqli_query($conn, $data9);
            $num9 = mysqli_num_rows($query_runn9);
           if ( $num9 > 0 )
           {
                $b5= "disabled";
        
                }
  //////// Row -----------------------------------------------------  


        $data9 = "SELECT * FROM demo where name='6A'";
        $query_runn9 = mysqli_query($conn, $data9);
        $num9 = mysqli_num_rows($query_runn9);
       if ( $num9 > 0 )
       {
            $a6= "disabled";
    
            }
            $data10 = "SELECT * FROM demo where name='6B'";
            $query_runn10 = mysqli_query($conn, $data10);
            $num10 = mysqli_num_rows($query_runn10);
           if ( $num10 > 0 )
           {
                $b6= "disabled";
        
                }
  //////// Row -----------------------------------------------------  


        $data11 = "SELECT * FROM demo where name='7A'";
        $query_runn11 = mysqli_query($conn, $data11);
        $num11 = mysqli_num_rows($query_runn11);
       if ( $num11 > 0) 
       {
            $a7= "disabled";
    
            }

        $data12 = "SELECT * FROM demo where name='7B'";
        $query_runn12 = mysqli_query($conn, $data12);
        $num12 = mysqli_num_rows($query_runn12);
       if ( $num12 > 0 )
       {
            $b7= "disabled";
    
            }
  //////// Row -----------------------------------------------------  

        $data13 = "SELECT * FROM demo where name='8A'";
        $query_runn13 = mysqli_query($conn, $data13);
        $num13 = mysqli_num_rows($query_runn13);
       if ( $num13 > 0 )
       {
            $a8= "disabled";
    
            }
            $data14 = "SELECT * FROM demo where name='8B'";
            $query_runn14 = mysqli_query($conn, $data14);
            $num14 = mysqli_num_rows($query_runn14);
           if ( $num14 > 0 )
           {
                $b8= "disabled";
        
                }
      //////// Row -----------------------------------------------------  
            
    ?>
                