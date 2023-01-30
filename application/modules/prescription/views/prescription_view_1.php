<!--main content start-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<?php
        $doctor = $this->doctor_model->getDoctorById($prescription->doctor);
        $patient = $this->patient_model->getPatientById($prescription->patient);
        ?>



<section id="main-content">

<br><br>
            <div class="panel-primary clearfix">
                <!--<div class="panel-heading navyblue"> INVOICE</div>-->
                <div class="panel_button clearfix">
                    <div class="text-center invoice-btn no-print pull-left">
                        <a class="btn btn-info btn-lg invoice_button" onclick="javascript:window.print();"><i class="fa fa-print"></i> <?php echo lang('print'); ?> </a>
                    </div>
                </div>

              <!--   <div class="panel_button clearfix">
                    <div class="text-center invoice-btn no-print pull-left">
     
                    </div>
                </div> -->

                <div class="panel_button col-md-12 no-print" id="ximpr" style= "display:none">
                     <a class="btn btn-info btn-sm detailsbutton pull-right download" id="download"><i class="fa fa-download"></i> <?php echo lang('download'); ?> </a>
                       
                </div>


                   

                <div class="panel_button clearfix">
                    <?php if ($this->ion_auth->in_group(array('admin'))) { ?>
                        <div class="text-center invoice-btn no-print pull-left">
                            <a class="btn btn-info btn-lg info" href='prescription/all'><i class="fa fa-medkit"></i> <?php echo lang('all'); ?> <?php echo lang('prescription'); ?> </a>
                        </div>
                    <?php } ?>
                    <?php if ($this->ion_auth->in_group(array('Doctor'))) { ?>
                        <div class="text-center invoice-btn no-print pull-left">
                            <a class="btn btn-info btn-lg info" href='prescription'><i class="fa fa-medkit"></i> <?php echo lang('all'); ?> <?php echo lang('prescriptions'); ?> </a>
                        </div>
                    <?php } ?>
                </div>
                <div class="panel_button">
                    <?php if ($this->ion_auth->in_group(array('admin', 'Doctor'))) { ?>
                        <div class="text-center invoice-btn no-print pull-left">
                            <a class="btn btn-info btn-lg green" href="prescription/addPrescriptionView"><i class="fa fa-plus-circle"></i> <?php echo lang('add_prescription'); ?> </a>
                        </div>
                    <?php } ?>
                </div>
            </div>

    <section class="wrapper site-min-height" id="prescription"  >

  



            <div class="col-md-12">
                <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-right">
                        Fecha: &nbsp;&nbsp;
                        <?php 

                        $fechaEntera = strtotime($prescription->date);
                        $fechaEntera2 =  $prescription->date;
                        $anio = date("Y", $fechaEntera2);
                        $mes = date("m", $fechaEntera2);
                        $dia = date("d", $fechaEntera2);
                        
                        /* echo 'LA FECHA ES'. $fechaEntera2; */
                        ?>
                      <!--  <input readonly style="border-radius: 31px;width: 90px;" type="text" name="" >
                       <input readonly style="border-radius: 3px;width: 70px;margin-left: -20px;" type="text" name="">
                       <input readonly style="border-radius: 0px 132px 100px 38px;width: 76px; margin-left: -14px;" type="text" name=""> -->

                       <input readonly style="border-radius: 100px 0px 0px 125px ;width: 76px;" type="text" name="" value ="<?php  echo $dia ?> ">
                       <input readonly style="border-radius: 3px;width: 70px;margin-left: -6px;" type="text" name="" value ="<?php  echo $mes ?> ">
                       <input readonly style="border-radius: 0px 132px 100px 38px;width: 76px; margin-left: -7px;" type="text" name="" value ="<?php  echo $anio ?> ">
                    </div>
                </div>
            </div>
            <br><br>
            <div class="col-md-12"  style="">
                <div class="col-md-1"  style=""></div>
                <div class="col-md-10 pull-center" style="    border: 1px solid black;height: 600px; border-radius: 15px;box-shadow: 13px 11px 0px 0px black;">
                    
                    <div class="col-md-12" style="padding-top: 30px;">
                        <div class="col-md-7">
                            <div class="col-md-2    " style=" padding-top: 8px">
                                Paciente: 
                            </div>
                           
                            <div class="col-md-5 " style="padding-left: 0px;" > &nbsp;&nbsp;&nbsp;&nbsp; <?php
                            if (!empty($patient)) {
                                echo $patient->name;
                            }                           ?>
                             <hr style="border:1px solid black;width: 100; margin:auto; padding: left 0px;"> 
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="col-md-2    " style=" padding-top: 8px">
                                Edad: 
                            </div>
                          
                            <div class="col-md-8 " style="padding-left: 0px;" >&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php
                            if (!empty($patient)) {
                                $birthDate = strtotime($patient->birthdate);
                                $birthDate = date('m/d/Y', $birthDate);
                                $birthDate = explode("/", $birthDate);
                                $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y") - $birthDate[2]) - 1) : (date("Y") - $birthDate[2]));
                                echo $age . ' Años';
                            }
                            ?>
                             <hr style="border:1px solid black;width: 100; margin:auto">
                            </div>
                        </div>
                    </div>
                    <br><br>

                    <div class="col-md-12" style="padding-top: 30px;margin:auto">
                        <div  style=" padding-top: 8px; margin:auto">

                        <h1 style="font-weight: bold;">Rp.</h1>
                        <br>
                        <?php 
                        $medicine = $prescription->medicine;
                        if(!empty($medicine)){
                            $medicine = explode('###', $medicine);
                            foreach ($medicine as $key => $value) {
                                ?>
                                <tr>
                                    <?php $single_medicine = explode('***', $value); ?>

                                    <td class=""><?php echo "<strong>MEDICAMENTO: </strong>".$this->medicine_model->getMedicineById($single_medicine[0])->name . ' - ' ."<strong>DOSIFICACIÓN: </strong> ". $single_medicine[1]. ' - '; ?> </td>
                                    <td class=""><?php echo "<strong>DIAS: </strong> ".$single_medicine[3] .  ' - '. "<strong>INSTRUCCION: </strong> ".$single_medicine[4] ."."."<br>"; ?> </td>
                                   
                                </tr>
                                <?php
                            }
                        }
                        
                               
                                ?>


<br>
                        <?php echo "<strong>DESCRIPCIÓN RECETA: </strong>".$prescription->note; ?>
                   
                        <?php if(!empty($prescription->symptom)){

                             echo "<strong>HISTORIAL: </strong>" .$prescription->symptom; 
                        }?>
                        </div>
                   
                    </div>
                </div>
            </div>

            <style>
                .text{
                    float: right;
                    display: flex;
                    align-items: center;
                    word-break:break-all;
                    margin: 0 0 1em 1em;
                }
            </style>

        
         
               
                <div class="col-md-4" style="padding-top: 30px;margin:auto">
                    
                    
                        Proxima Fecha: &nbsp;&nbsp;
             
                       <input readonly style="border-radius: 31px;width: 50%; margin:auto" type="text" name="">
                       
                    
                    
                       </div>
                <div class="col-md-4"  style="padding-top: 30px;margin:auto">
                    
                    
                        Firma: &nbsp;&nbsp;
             
                       <input readonly style="border-radius: 31px;width: 50%; margin:auto" type="text" name="">
                       
                    
                </div>
        

            
            <div class="col-md-12" style="    padding-top: 40px;">
            <h1 style="text-align: center;font-weight: bold;">"Por favor no cambiar esta receta"</h1>
            </div>

           
     


        
        <!-- invoice end-->
    </section>

</section>


<!--main content end-->
<!--footer start-->


<style>

    hr {
        margin-top: 10px;
        margin-bottom: 7px;
        border: 0;
        border-top: 1px solid #000;
    }

    .panel-body{
        background: #f1f2f7;
    }

    thead {
        background: transparent;
    }

    .bg_prescription {
        min-height: 810px;
        margin-top: 10px; 
    }

    .prescription_footer{
        margin-bottom: 10px;
    }

    .bg_container{
        border: 1px solid #f1f1f1;
    }

    .panel{
        background: #fff;
    }

    .panel-body{
        background: #fff;
    }

    .margin_top{
        margin-top: 20px;
    }

    .wrapper{
        margin:0px;
        padding: 60px 0px 0px 30px;
    }

    .doctor{
        color: #2f80bf;
        font-family: cursive;
    }

    .hospital{
        color: #2f80bf;
        font-family: cursive;
    }

    hr{
        border-top: 1px solid #f1f1f1;
    }

    .panel_button{
        margin: 10px;
    }




    @media print {

        .wrapper{
            margin:0px;
            padding: 0px 10px 0px 0px;
        }

        .patient{  
            width: 23%;
            float: left;
        }

        .patient_name{  
            width: 31%;
            float: left;
        }

        .text-right{
            float: right;
        }

        .doctor{
            color: #2f80bf !important;
            font-family: cursive;
        }

        .hospital{
            color: #2f80bf !important;
            font-family: cursive;
        }

        .prescription{
            float: left;
        }


    }

</style>


<script src="common/js/codearistos.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

<script>


                            $('#download').click(function () {
                                var pdf = new jsPDF('p', 'pt', 'letter');
                                pdf.addHTML($('#prescription'), function () {
                                    pdf.save('prescription_id_<?php echo $prescription->id; ?>.pdf');
                                });
                            });

                            // This code is collected but useful, click below to jsfiddle link.
</script>

