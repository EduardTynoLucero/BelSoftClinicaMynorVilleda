<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="col-md-5">
            <header class="panel-heading">
                <?php echo "Añadir Evolución médica" ?> 
            </header> 

            <div class=""> 
                <form role="form" action="patient/addMedicalHistory" class="clearfix" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1"><?php echo lang('date'); ?></label>
                        <input type="text" class="form-control form-control-inline input-medium default-date-picker" name="date" id="exampleInputEmail1" value='' placeholder="" readonly="" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1"><?php echo lang('patient'); ?></label>
                        <select class="form-control m-bot15 js-example-basic-single" name="patient_id" value=''>
                            <?php foreach ($patients as $patient) { ?>
                                <option value="<?php echo $patient->id; ?>"> <?php echo $patient->name; ?> </option> 
                            <?php } ?> 
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"><?php echo lang('title'); ?></label>
                        <input type="text" class="form-control form-control-inline input-medium" name="title" id="exampleInputEmail1" value='' placeholder="">
                    </div>

                 
                    <div class="form-group col-md-12">
                        <label class=""><?php echo "Datos Subjetivos"; ?></label>
                        <textarea class="form-control ckeditor" name="dato_subjetivo" value="" rows="70" cols="70"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label class=""><?php echo "Datos Objetivos"; ?></label>
                        <textarea class="form-control ckeditor" name="dato_objetivo" value="" rows="70" cols="70"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label class=""><?php echo "Nuevos Datos"; ?></label>
                        <textarea class="form-control ckeditor" name="nuevo_dato" value="" rows="70" cols="70"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label class=""><?php echo "Diagnóstico"; ?></label>
                        <textarea class="form-control ckeditor" name="diagnostico" value="" rows="70" cols="70"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label class=""><?php echo "Plan Terapeutico"; ?></label>
                        <textarea class="form-control ckeditor" name="plan_terapeutico" value="" rows="70" cols="70"></textarea>
                    </div>

                    <div class="form-group col-md-12">
                        <label class=""><?php echo "Evolución médica"; ?></label>
                        <textarea class="form-control ckeditor" name="description" value="" rows="70" cols="70"></textarea>
                    </div>
                    <input type="hidden" name="redirect" value='patient/caseList'>
                    <section class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-info submit_button pull-right"><?php echo lang('submit'); ?></button>
                    </section>


                </form>
            </div>

        </section>


        <section class="col-md-7">
            <header class="panel-heading">
                <?php echo "Evoluciones médicas"?>
            </header> 
            <div class="panel-body"> 

                <div class="adv-table editable-table">
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th style="width: 10%"><?php echo lang('date'); ?></th>
                                <th style="width: 15%"><?php echo lang('patient'); ?></th>
                                <th style="width: 15%"><?php echo "Evolución médica" ?></th>
                                <th style="width: 10%;" class="no-print"><?php echo lang('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

        </section>





    </section>
    <!-- page end-->
</section>
</section>
<!--main content end-->
<!--footer start-->






<!-- Add Department Modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">  <?php echo lang('add_medical_history'); ?></h4>
            </div> 
            <div class="modal-body row">
                <form role="form" action="patient/addMedicalHistory" class="clearfix" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1"><?php echo lang('date'); ?></label>
                        <input type="text" class="form-control form-control-inline input-medium default-date-picker" name="date" id="exampleInputEmail1" value='' placeholder="" readonly="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1"><?php echo lang('patient'); ?></label>
                        <select class="form-control m-bot15 js-example-basic-single" name="patient_id" value=''>
                            <?php foreach ($patients as $patient) { ?>
                                <option value="<?php echo $patient->id; ?>"> <?php echo $patient->name; ?> </option> 
                            <?php } ?> 
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"><?php echo lang('title'); ?></label>
                        <input type="text" class="form-control form-control-inline input-medium" name="title" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group col-md-12">
                        <label class=""><?php echo lang('description'); ?></label>
                        <textarea class="ckeditor form-control" name="description" value="" rows="10"></textarea>
                    </div>
                    <input type="hidden" name="id" value=''>
                    <input type="hidden" name="redirect" value='patient/caseList'>
                    <section class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-info submit_button pull-right"> <?php echo lang('submit'); ?></button>
                    </section>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Add Department Modal-->

<!-- Modal para editar datos-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">  <?php echo "Editar Evolución médica"; ?></h4>
            </div>
            <div class="modal-body row">
                <form role="form" id="medical_historyEditForm" class="clearfix" action="patient/addMedicalHistory" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1"><?php echo lang('date'); ?></label>
                        <input type="text" class="form-control form-control-inline input-medium default-date-picker" name="date" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1"><?php echo lang('patient'); ?></label>
                        <select class="form-control m-bot15 js-example-basic-single patient" name="patient_id" value=''>
                            <?php foreach ($patients as $patient) { ?>
                                <option value="<?php echo $patient->id; ?>" <?php
                                if (!empty($medical_history->patient_id)) {
                                    if ($patient->id == $medical_history->patient_id) {
                                        echo 'selected';
                                    }
                                }
                                ?> > <?php echo $patient->name; ?> </option>
                                    <?php } ?> 
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"><?php echo lang('title'); ?></label>
                        <input type="text" class="form-control form-control-inline input-medium" name="title" id="exampleInputEmail1" value='' placeholder="">
                    </div>

                    <div class="form-group col-md-12">
                        <label class=""><?php echo "Datos Subjetivos"; ?></label>
                      
                        <div class="">
                            <textarea class="ckeditor form-control editor" id="editor1" name="dato_subjetivo" value="" rows="70"></textarea>
                        </div>
                        
                    </div>
                    <div class="form-group col-md-12">
                        <label class=""><?php echo "Datos Objetivos"; ?></label>
                   

                        <div class="">
                            <textarea class="ckeditor form-control editor" id="editor2" name="dato_objetivo" value="" rows="70"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class=""><?php echo "Nuevos Datos"; ?></label>
   
                        <div class="">
                            <textarea class="ckeditor form-control editor" id="editor3" name="nuevo_dato" value="" rows="70"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class=""><?php echo "Diagnóstico"; ?></label>
                       
                        <div class="">
                            <textarea class="ckeditor form-control editor" id="editor4" name="diagnostico" value="" rows="70"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class=""><?php echo "Plan Terapeutico"; ?></label>
                        <div class="">
                            <textarea class="ckeditor form-control editor" id="editor5" name="plan_terapeutico" value="" rows="70"></textarea>
                        </div>
                    </div>



                    <div class="form-group col-md-12">
                        <label class=""><?php echo lang('description'); ?></label>
                        <div class="">
                            <textarea class="ckeditor form-control editor" id="editor" name="description" value="" rows="70"></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="id" value=''>
                    <input type="hidden" name="redirect" value='patient/caseList'>
                    <div class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-info submit_button pull-right">Submit</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>






<div class="modal fade" id="caseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close no-print" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">  <?php echo "Detalle Evolución médica"?></h4>
            </div>
            <div class="modal-body row">
                <form role="form" id="medical_historyEditForm" class="clearfix" action="patient/addMedicalHistory" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-12 row">
                        <div class="form-group col-md-6 case_date_block">
                            <label for="exampleInputEmail1"><?php echo "Fecha Creación:" ?></label>
                            <div class="case_date"></div>
                        </div>
                        <div class="form-group col-md-6 case_patient_block">
                            <label for="exampleInputEmail1"><?php echo "Paciente:" ?></label>
                            <div class="case_patient"></div>
     
                        </div> 
                        <div>
                            <hr>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"><?php echo "Titulo" ?> </label>
                        <div class="case_title"></div>
                        <hr>
                    </div>




                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"><?php echo "Datos Subjetivos"; ?> </label>
                        <div class="dato_subjetivo"></div>
                        <hr>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"><?php echo "Datos Objetivos";?> </label>
                        <div class="dato_objetivo"></div>
                        <hr>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"><?php echo "Nuevos Datos"; ?> </label>
                        <div class="nuevo_dato"></div>
                        <hr>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"><?php echo "Diagnostico"; ?> </label>
                        <div class="diagnostico"></div>
                        <hr>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"><?php echo "Plan Terapeutico"; ?> </label>
                        <div class="plan_terapeutico"></div>
                        <hr>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1"> <?php echo "Evolución médica" ?></label>
                        <div class="case_details"></div>
                        <hr>
                    </div>


                    <div class="panel col-md-12">
                        <h5 class="pull-right">
                            <?php echo $settings->title . '<br>' . $settings->address; ?>
                        </h5>
                    </div>

                    <div class="panel col-md-12 no-print">
                        <a class="btn btn-info invoice_button pull-right" onclick="javascript:window.print();"><i class="fa fa-print"></i> <?php echo lang('print'); ?> </a>
                    </div>

                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>



<style>

    @media print {

        .modal-content{
            width: 100%;
        }


        .modal{
            overflow: hidden;
        }

        .case_date_block{
            width: 50%;
            float: left;
        }

        .case_patient_block{
            width: 50%;
            float: left;
        }

    }



</style>



<?php
$current_user = $this->ion_auth->get_user_id();
if ($this->ion_auth->in_group('Doctor')) {
    $doctor_id = $this->db->get_where('doctor', array('ion_user_id' => $current_user))->row()->id;
}
?>




<script src="common/js/codearistos.min.js"></script>
<script type="text/javascript">
                            $(".table").on("click", ".editbutton", function () {
                                // Get the record's ID via attribute  
                                var iid = $(this).attr('data-id');

                                $.ajax({
                                    url: 'patient/editMedicalHistoryByJason?id=' + iid,
                                    method: 'GET',
                                    data: '',
                                    dataType: 'json',
                                }).success(function (response) {
                                    // Populate the form fields with the data returned from server
                                    var de = response.medical_history.date * 1000;
                                    var d = new Date(de);
                                    var da = (d.getDate() +1 )+ '-' + (d.getMonth() + 1) + '-' + d.getFullYear();
                                    $('#medical_historyEditForm').find('[name="id"]').val(response.medical_history.id).end()
                                    $('#medical_historyEditForm').find('[name="date"]').val(da).end()
                                    $('#medical_historyEditForm').find('[name="patient"]').val(response.medical_history.patient_id).end()
                                    $('#medical_historyEditForm').find('[name="title"]').val(response.medical_history.title).end()
                                    CKEDITOR.instances['editor'].setData(response.medical_history.description)

                                    CKEDITOR.instances['editor1'].setData(response.medical_history.dato_subjetivo)
                                    CKEDITOR.instances['editor2'].setData(response.medical_history.dato_objetivo)
                                    CKEDITOR.instances['editor3'].setData(response.medical_history.nuevo_dato)
                                    CKEDITOR.instances['editor4'].setData(response.medical_history.diagnostico)
                                    CKEDITOR.instances['editor5'].setData(response.medical_history.plan_terapeutico)


                                    $('.js-example-basic-single.patient').val(response.medical_history.patient_id).trigger('change');

                                    $('#myModal2').modal('show');

                                });
                            });
</script>

<script type="text/javascript">
    $(".table").on("click", ".case", function () {
        // Get the record's ID via attribute  
        var iid = $(this).attr('data-id');

        $('.case_date').html("").end()
        $('.case_details').html("").end()
        $('.case_title').html("").end()
        $('.case_patient').html("").end()
         $('.case_patient_id').html("").end()

         $('.dato_subjetivo').html("").end()
         $('.dato_objetivo').html("").end()
         $('.nuevo_dato').html("").end()
         $('.diagnostico').html("").end()
         $('.plan_terapeutico').html("").end()

        $.ajax({
            url: 'patient/getCaseDetailsByJason?id=' + iid,
            method: 'GET',
            data: '',
            dataType: 'json',
        }).success(function (response) {
            // Populate the form fields with the data returned from server
            var de = response.case.date * 1000;
            var d = new Date(de);


            var monthNames = [
                "Enero", "Febrero", "Marzo",
                "Abril", "Mayo", "Junio", "Julio",
                "Agosto", "Septiembre", "Octobre",
                "Noviembre", "Diciembre"
            ];

            var day = d.getDate() +1;
            var monthIndex = d.getMonth();
            var year = d.getFullYear();

            var da = day + ' ' + monthNames[monthIndex] + ', ' + year;


            $('.case_date').append(da).end()
            $('.case_patient').append(response.patient.name).end()
            $('.case_patient_id').append('ID: ' + response.patient.id).end()
            $('.case_title').append(response.case.title).end()
            $('.case_details').append(response.case.description).end()

            $('.dato_subjetivo').append(response.case.dato_subjetivo).end()
            $('.dato_objetivo').append(response.case.dato_objetivo).end()
            $('.nuevo_dato').append(response.case.nuevo_dato).end()
            $('.diagnostico').append(response.case.description).end()
            $('.plan_terapeutico').append(response.case.plan_terapeutico).end()





            $('#caseModal').modal('show');

        });
    });
</script>


<script>


    $(document).ready(function () {
        var table = $('#editable-sample').DataTable({
            responsive: true,
            //   dom: 'lfrBtip',

            "processing": true,
            "serverSide": true,
            "searchable": true,
            "ajax": {
                url: "patient/getCaseList",
                type: 'POST',
            },
            scroller: {
                loadingIndicator: true
            },
            dom: "<'row'<'col-sm-3'l><'col-sm-5 text-center'B><'col-sm-4'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [0, 1, 2],
                    }
                },
            ],
            aLengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
            iDisplayLength: 100,
            "order": [[0, "desc"]],

            "language": {
                "lengthMenu": "_MENU_",
                search: "_INPUT_",
                "url": "common/assets/DataTables/languages/<?php echo $this->language; ?>.json" 
            },

        });

        table.buttons().container()
                .appendTo('.custom_buttons');
    });

</script>

<script>
    $(document).ready(function () {
        $(".flashmessage").delay(3000).fadeOut(100);
    });
</script>

<script src="common/js/codearistos.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

