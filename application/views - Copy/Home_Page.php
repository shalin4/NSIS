<?php include 'partials/header.php'?>


<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Home Page</li>
    </ol>
    <div class="row">
        <div class="col-12">
            <?php
                $res = $this->session->userdata('userType');
            if(!($this->session->userdata('loggedIN'))){

                redirect('Welcome/index');
            }

 ?>
            <h1><?php echo $response -> userType;?></h1>



            <div>
                <a href="<?php echo base_url('index.php/Getdata/retriveData'); ?>"> Click me </a>
            </div>
            <?php
            if($this->session->flashdata('welcome2')) {

            echo "<p><h6>" . $this->session->flashdata('welcome2') . "<h6></p>";

            "<br><br>";


            } ?>


        </div>
    </div>
</div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php include 'partials/footer.php'?>
</body>

</html>
