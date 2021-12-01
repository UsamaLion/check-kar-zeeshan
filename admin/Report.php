<?php

        require('fpdf/fpdf.php');
        $pdf=new FPDF();
        $pdf->AddPage();
        $pdf->Ln();
        $pdf->Ln();
        $pdf->SetFont('times','B',12);
        $pdf->Cell(170, 10, "Online Mobile Info",0,1 , 'C');
        

        $pdf->Cell(450,7,"----------------------------------------------------------------------------------------------------------------------------------------------------------");
        $pdf->Ln();$pdf->Ln();
        $pdf->Cell(170, 10, "-----Mobiles Details-----",0,1 , 'C');

        $con=mysqli_connect('localhost', 'root', '', 'mobiles');
        $query = "SELECT * FROM mobile_data WHERE company = 'apple' ";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);

        $query = "SELECT * FROM mobile_data WHERE company = 'nokia' ";
        $result = mysqli_query($con, $query);
        $nokiaCount = mysqli_num_rows($result);

        $query = "SELECT * FROM mobile_data WHERE company = 'samsung' ";
        $result = mysqli_query($con, $query);
        $samsungCount = mysqli_num_rows($result);
        
        $query = "SELECT * FROM mobile_data WHERE company = 'oppo' ";
        $result = mysqli_query($con, $query);
        $oppoCount = mysqli_num_rows($result);

        $query = "SELECT * FROM mobile_data WHERE company = 'huawei' ";
        $result = mysqli_query($con, $query);
        $huaweiCount = mysqli_num_rows($result);

        $query = "SELECT * FROM mobile_data WHERE price <= '20000' ";
        $result = mysqli_query($con, $query);
        $priceLessThan = mysqli_num_rows($result);

        $query = "SELECT * FROM mobile_data WHERE price BETWEEN '20000' AND '40000' ";
        $result = mysqli_query($con, $query);
        $priceBetween = mysqli_num_rows($result);

        $query = "SELECT * FROM mobile_data WHERE price >= '40001' ";
        $result = mysqli_query($con, $query);
        $priceGreaterThan = mysqli_num_rows($result);

            $pdf->Cell(80,9,"Total Number of Apple Iphones",1, 0, 'C'); 
            $pdf->Cell(80,9,$count, 1, 0, 'C');
            $pdf->Ln();$pdf->Ln();

            $pdf->Cell(80,9,"Total Number of Nokia Mobiles",1, 0, 'C'); 
            $pdf->Cell(80,9,$nokiaCount, 1, 0, 'C');
            $pdf->Ln();$pdf->Ln();

            $pdf->Cell(80,9,"Total Number of Samsung Mobiles",1, 0, 'C'); 
            $pdf->Cell(80,9,$samsungCount, 1, 0, 'C');
            $pdf->Ln();$pdf->Ln();

            $pdf->Cell(80,9,"Total Number of OPPO Mobiles",1, 0, 'C'); 
            $pdf->Cell(80,9,$oppoCount, 1, 0, 'C');
            $pdf->Ln();$pdf->Ln();

            $pdf->Cell(80,9,"Total Number of Huawei Mobiles",1, 0, 'C'); 
            $pdf->Cell(80,9,$huaweiCount, 1, 0, 'C');
            $pdf->Ln();$pdf->Ln();

            $pdf->Cell(170, 10, "------------------Mobiles Details By Price------------------",0,1 , 'C');
            $pdf->Ln();$pdf->Ln();

            $pdf->Cell(100,9,"Mobiles Having Price Less Than 20,000",1, 0, 'C'); 
            $pdf->Cell(60,9,$priceLessThan, 1, 0, 'C');
            $pdf->Ln();$pdf->Ln();

            $pdf->Cell(100,9,"Mobiles Having Price Between 20,000 and 40,000",1, 0, 'C'); 
            $pdf->Cell(60,9,$priceBetween, 1, 0, 'C');
            $pdf->Ln();$pdf->Ln();

            $pdf->Cell(100,9,"Mobiles Having Price Greater Than 40,000",1, 0, 'C'); 
            $pdf->Cell(60,9,$priceGreaterThan, 1, 0, 'C');
            $pdf->Ln();$pdf->Ln();



            
        
        
    
        date_default_timezone_set('Asia/Karachi');
        $Date = date('Y-m-d', time());

        $pdf->Output('F', '../Reports/'.$Date.' Mobiles Details Report.pdf');

            if ($result) {
              
                echo " <script> 
                       alert('Report Generated'); 
                       window.location='index.php';
                      </script>; ";
            }

            ?>