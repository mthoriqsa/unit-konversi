<html>
<head>
<title>Konversi Sinus</title>
<?php $this->load->view('_partials/head.php') ?>

<!-- <style type="text/css">
body
{
    background-color:#66CCFF;
    font-family: Times New Roman;
    margin:40px;
    font-size:14px;
    color: #4f55155;
}

a
{
    color: #003399;
    background-color: transparent;
    font-weight: normal;
}

h1
{
    color: #444;
    background-color: transparent;
    border-bottom: 1px solid #d0d0d0;
    font-size: 16px;
    font-weight: bold;
    margin: 24px 0 2px;
    padding: 5px 0 6px 0;
}
</style> -->

</head>

<body>
    <?php $this->load->view('_partials/navbar.php') ?>

    <div id="wrapper">

        <?php $this->load->view('_partials/sidebar.php') ?>

        <div id="content-wrapper">
            <div id="container-fluid">
                <h1><strong>Form Konversi </strong></h1>
                <p>Silahkan masukan data :</p>

                    <?php echo form_open(); ?>
                    <?php echo form_input('x1'); ?> <br />
                    <?php echo form_submit('submit','Hitung'); ?>
                    <?php echo form_close(); ?> <br>

                    <strong>Maka, Hasilnya </strong>: <?php echo $result; ?>
            </div>
        </div>
    </div>
<?php $this->load->view('_partials/js.php') ?>
</body>

</html>
