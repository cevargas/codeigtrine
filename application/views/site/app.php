<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Carlos Eduardo de Vargas">

        <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url()?>components/custom/images/favicon.ico' />

        <title>
            Codigniter e Doctrine
        </title>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

        <?php 
            $this->minify->css(array('bootstrap/css/bootstrap.min.css', 
                                     'custom/css/custom.css', 
                                     'toastr/toastr.css',
                                     'font-awesome/css/font-awesome.min.css',
                                     'datetimepicker/css/bootstrap-datetimepicker.min.css'));
            echo $this->minify->deploy_css(true); 
        ?>

        <script type="text/javascript" src="<?php echo base_url()?>components/jquery/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>components/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>components/toastr/toastr.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>components/custom/js/scripts.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>components/moment/moment.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>components/moment/locale/pt-br.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>components/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

    </head>

    <body>

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <?php $this->load->view($view);?>     
                </div>

            </div>
        </div>

    </body>
</html>