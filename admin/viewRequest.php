<?php require_once("header.php");
$id = $_GET['id'];
$sql = "SELECT * FROM service WHERE id=$id";
if (!$res = mysqli_query($conn, $sql)) {
    mysqli_error($conn);
} else {
    $row = mysqli_fetch_assoc($res);
}



?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<style>
    body {
        background: #f5f5f5;
        margin-top: 20px;
    }

    /*------- portfolio -------*/
    .project {
        margin: 15px 0;
    }

    .no-gutter .project {
        margin: 0 !important;
        padding: 0 !important;
    }

    .has-spacer {
        margin-left: 30px;
        margin-right: 30px;
        margin-bottom: 30px;
    }

    .has-spacer-extra-space {
        margin-left: 30px;
        margin-right: 30px;
        margin-bottom: 30px;
    }

    .has-side-spacer {
        margin-left: 30px;
        margin-right: 30px;
    }

    .project-title {
        font-size: 1.25rem;
    }

    .project-skill {
        font-size: 0.9rem;
        font-weight: 400;
        letter-spacing: 0.06rem;
    }

    .project-info-box {
        margin: 15px 0;
        background-color: #fff;
        padding: 30px 40px;
        border-radius: 5px;
    }

    .project-info-box p {
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #d5dadb;
    }

    .project-info-box p:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }

    img {
        width: 100%;
        max-width: 100%;
        height: auto;
        -webkit-backface-visibility: hidden;
    }

    .rounded {
        border-radius: 5px !important;


    }

    .btn-xs.btn-icon {
        width: 34px;
        height: 34px;
        max-width: 34px !important;
        max-height: 34px !important;
        font-size: 10px;
        line-height: 34px;
    }

    /* facebook button */
    .btn-facebook,
    .btn-facebook:active,
    .btn-facebook:focus {
        color: #fff !important;
        background: #4e68a1;
        border: 2px solid #4e68a1;
    }

    .btn-facebook:hover {
        color: #fff !important;
        background: #3b4f7a;
        border: 2px solid #3b4f7a;
    }

    .btn-facebook-link,
    .btn-facebook-link:active,
    .btn-facebook-link:focus {
        color: #4e68a1 !important;
        background: transparent;
        border: none;
    }

    .btn-facebook-link:hover {
        color: #3b4f7a !important;
    }

    .btn-outline-facebook,
    .btn-outline-facebook:active,
    .btn-outline-facebook:focus {
        color: #4e68a1 !important;
        background: transparent;
        border: 2px solid #4e68a1;
    }

    .btn-outline-facebook:hover {
        color: #fff !important;
        background: #4e68a1;
        border: 2px solid #4e68a1;
    }

    /* twitter button */
    .btn-twitter,
    .btn-twitter:active,
    .btn-twitter:focus {
        color: #fff !important;
        background: #65b5f2;
        border: 2px solid #65b5f2;
    }

    .btn-twitter:hover {
        color: #fff !important;
        background: #5294c6;
        border: 2px solid #5294c6;
    }

    .btn-twitter:hover {
        color: #fff !important;
        background: #5294c6;
        border: 2px solid #5294c6;
    }

    .btn-twitter-link,
    .btn-twitter-link:active,
    .btn-twitter-link:focus {
        color: #65b5f2 !important;
        background: transparent;
        border: none;
    }

    .btn-twitter-link:hover {
        color: #5294c6 !important;
    }

    .btn-outline-twitter,
    .btn-outline-twitter:active,
    .btn-outline-twitter:focus {
        color: #65b5f2 !important;
        background: transparent;
        border: 2px solid #65b5f2;
    }

    .btn-outline-twitter:hover {
        color: #fff !important;
        background: #65b5f2;
        border: 2px solid #65b5f2;
    }

    /* google button */
    .btn-google,
    .btn-google:active,
    .btn-google:focus {
        color: #fff !important;
        background: #e05d4b;
        border: 2px solid #e05d4b;
    }

    .btn-google:hover {
        color: #fff !important;
        background: #b94c3d;
        border: 2px solid #b94c3d;
    }

    .btn-google-link,
    .btn-google-link:active,
    .btn-google-link:focus {
        color: #e05d4b !important;
        background: transparent;
        border: none;
    }

    .btn-google-link:hover {
        color: #b94c3d !important;
    }

    .btn-outline-google,
    .btn-outline-google:active,
    .btn-outline-google:focus {
        color: #e05d4b !important;
        background: transparent;
        border: 2px solid #e05d4b;
    }

    .btn-outline-google:hover {
        color: #fff !important;
        background: #e05d4b;
        border: 2px solid #e05d4b;
    }

    /* linkedin button */
    .btn-linkedin,
    .btn-linkedin:active,
    .btn-linkedin:focus {
        color: #fff !important;
        background: #2083bc;
        border: 2px solid #2083bc;
    }

    .btn-linkedin:hover {
        color: #fff !important;
        background: #186592;
        border: 2px solid #186592;
    }

    .btn-linkedin-link,
    .btn-linkedin-link:active,
    .btn-linkedin-link:focus {
        color: #2083bc !important;
        background: transparent;
        border: none;
    }

    .btn-linkedin-link:hover {
        color: #186592 !important;
    }

    .btn-outline-linkedin,
    .btn-outline-linkedin:active,
    .btn-outline-linkedin:focus {
        color: #2083bc !important;
        background: transparent;
        border: 2px solid #2083bc;
    }

    .btn-outline-linkedin:hover {
        color: #fff !important;
        background: #2083bc;
        border: 2px solid #2083bc;
    }

    /* pinterest button */
    .btn-pinterest,
    .btn-pinterest:active,
    .btn-pinterest:focus {
        color: #fff !important;
        background: #d2373b;
        border: 2px solid #d2373b;
    }

    .btn-pinterest:hover {
        color: #fff !important;
        background: #ad2c2f;
        border: 2px solid #ad2c2f;
    }

    .btn-pinterest-link,
    .btn-pinterest-link:active,
    .btn-pinterest-link:focus {
        color: #d2373b !important;
        background: transparent;
        border: none;
    }

    .btn-pinterest-link:hover {
        color: #ad2c2f !important;
    }

    .btn-outline-pinterest,
    .btn-outline-pinterest:active,
    .btn-outline-pinterest:focus {
        color: #d2373b !important;
        background: transparent;
        border: 2px solid #d2373b;
    }

    .btn-outline-pinterest:hover {
        color: #fff !important;
        background: #d2373b;
        border: 2px solid #d2373b;
    }

    /* dribble button */
    .btn-dribbble,
    .btn-dribbble:active,
    .btn-dribbble:focus {
        color: #fff !important;
        background: #ec5f94;
        border: 2px solid #ec5f94;
    }

    .btn-dribbble:hover {
        color: #fff !important;
        background: #b4446e;
        border: 2px solid #b4446e;
    }

    .btn-dribbble-link,
    .btn-dribbble-link:active,
    .btn-dribbble-link:focus {
        color: #ec5f94 !important;
        background: transparent;
        border: none;
    }

    .btn-dribbble-link:hover {
        color: #b4446e !important;
    }

    .btn-outline-dribbble,
    .btn-outline-dribbble:active,
    .btn-outline-dribbble:focus {
        color: #ec5f94 !important;
        background: transparent;
        border: 2px solid #ec5f94;
    }

    .btn-outline-dribbble:hover {
        color: #fff !important;
        background: #ec5f94;
        border: 2px solid #ec5f94;
    }

    /* instagram button */
    .btn-instagram,
    .btn-instagram:active,
    .btn-instagram:focus {
        color: #fff !important;
        background: #4c5fd7;
        border: 2px solid #4c5fd7;
    }

    .btn-instagram:hover {
        color: #fff !important;
        background: #4252ba;
        border: 2px solid #4252ba;
    }

    .btn-instagram-link,
    .btn-instagram-link:active,
    .btn-instagram-link:focus {
        color: #4c5fd7 !important;
        background: transparent;
        border: none;
    }

    .btn-instagram-link:hover {
        color: #4252ba !important;
    }

    .btn-outline-instagram,
    .btn-outline-instagram:active,
    .btn-outline-instagram:focus {
        color: #4c5fd7 !important;
        background: transparent;
        border: 2px solid #4c5fd7;
    }

    .btn-outline-instagram:hover {
        color: #fff !important;
        background: #4c5fd7;
        border: 2px solid #4c5fd7;
    }

    /* youtube button */
    .btn-youtube,
    .btn-youtube:active,
    .btn-youtube:focus {
        color: #fff !important;
        background: #e52d27;
        border: 2px solid #e52d27;
    }

    .btn-youtube:hover {
        color: #fff !important;
        background: #b31217;
        border: 2px solid #b31217;
    }

    .btn-youtube-link,
    .btn-youtube-link:active,
    .btn-youtube-link:focus {
        color: #e52d27 !important;
        background: transparent;
        border: none;
    }

    .btn-youtube-link:hover {
        color: #b31217 !important;
    }

    .btn-outline-youtube,
    .btn-outline-youtube:active,
    .btn-outline-youtube:focus {
        color: #e52d27 !important;
        background: transparent;
        border: 2px solid #e52d27;
    }

    .btn-outline-youtube:hover {
        color: #fff !important;
        background: #e52d27;
        border: 2px solid #e52d27;
    }

    .btn-xs.btn-icon span,
    .btn-xs.btn-icon i {
        line-height: 34px;
    }

    .btn-icon.btn-circle span,
    .btn-icon.btn-circle i {
        margin-top: -1px;
        margin-right: -1px;
    }

    .btn-icon i {
        margin-top: -1px;
    }

    .btn-icon span,
    .btn-icon i {
        display: block;
        line-height: 50px;
    }

    a.btn,
    a.btn-social {
        display: inline-block;
    }

    .mr-5 {
        margin-right: 5px !important;
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    .btn-facebook,
    .btn-facebook:active,
    .btn-facebook:focus {
        color: #fff !important;
        background: #4e68a1;
        border: 2px solid #4e68a1;
    }

    .btn-circle {
        border-radius: 50% !important;
    }

    .project-info-box p {
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #d5dadb;
    }

    p {
        font-family: "Barlow", sans-serif !important;
        font-weight: 300;
        font-size: 1rem;
        color: #686c6d;
        letter-spacing: 0.03rem;
        margin-bottom: 10px;
    }

    b,
    strong {
        font-weight: 700 !important;
    }

    /* popup */
</style>
</style>
<div id="layoutSidenav_content">

    <main>

        <div class="container">
            <div class="allot-container">

            </div>
           
            <div class="row">
                <div class="col-md-5">
                    <div class="project-info-box mt-0">
                        <h5>DESCRIPTION</h5>
                        <p class="mb-0"><?php echo htmlentities($row['description']) ?></p>
                    </div><!-- / project-info-box -->

                    <div class="project-info-box">
                        <p><b>Name:</b> <?php
                                        $citizen = htmlentities($row['citizen_id']);
                                        $sql2 = "SELECT full_name FROM citizen where id=$citizen";
                                        $res2 = mysqli_query($conn, $sql2);
                                        $row2 = mysqli_fetch_assoc($res2);
                                        echo  htmlentities($row2['full_name']);

                                        ?></p>
                        <p><b>Date:</b> <?php echo htmlentities($row['date']) ?></p>
                        <p><b>Address:</b><?php echo htmlentities($row['address']) ?> <br> <small><a href="../map.php?lat=<?php echo htmlentities($row['latt']) ?>&long=<?php echo htmlentities($row['lon']) ?>">View on Map</a></small></p>
                        <p><b>Contact:</b> <?php echo htmlentities($row['contact']) ?></p>
                        <p class="mb-0"><b>Status:</b> <?php
                                                        if (htmlentities($row['status']) == 1) {
                                                            echo "New Request.Yet to verified";
                                                        } else if (htmlentities($row['status']) == 0) {
                                                            echo "Request Discart";
                                                        } else if (htmlentities($row['status']) == 2) {
                                                            $emp = $row['allocated_to'];
                                                            $query = "Select * from employee_info where id=$emp";

                                                            if (!$rslt = mysqli_query($conn, $query)) {
                                                                echo  mysqli_error($conn);
                                                            } else {
                                                                $row2 = mysqli_fetch_assoc($rslt);
                                                                echo "Allocated to " . $row2['name'];
                                                            }
                                                        }else if(htmlentities($row['status']) == 4){
                                                            echo "Completed";
                                                        }




                                                        ?>  </p>
                    </div><!-- / project-info-box -->
                                               
                    <div class="project-info-box mt-0 mb-0">
                        <p class="mb-0">
                        <?php  if($row['status']!=4 && $row['status']!=0){ ?>
                            <select class="form-select" id="actionRequest">
                                <option selected>Action</option>
                                <?php if($row['status']!=-1){?>
                                <option value="1">Discart</option>
                                <?php }?>
                                <?php if($row['status']==1){?>
                                <option value="2">Assign</option>
                                <?php }?>
                            </select>
                            <?php }?>
                            <?php  if($row['status']==4){
                                $sq="SELECT * FROM complete_service where service_id=$id";
                                $resl=mysqli_query($conn,$sq);
                                if(!$resl){
                                    echo mysqli_error($conn);
                                }else{
                                    $ro=mysqli_fetch_assoc($resl);
                                }
                                 ?>
                                 <b>After Complete Image</b>
                                    <img src="../<?php echo $ro['image']?>" style='width:"80px"; height:"80px";'>
                                    <p><?php echo $ro['address']?></p>
                                 <?php
                                 
                            } if($row['status']==4){
                                 ?>
                                 <b>Widthdraw </b>
                                 <?php }?>
                        </p>
                    </div>



                    <!-- / project-info-box -->
                </div><!-- / column -->

                <div class="col-md-7">
                    <img src="../<?php echo htmlentities($row['image']) ?>" alt="project-image" class="rounded">
                    <div class="project-info-box">
                        <p><b>Remark:</b> <?php echo htmlentities($row['remark']) ?></p>

                    </div>
                    <!-- / project-info-box -->
                </div><!-- / column -->
            </div>
        </div>
    </main>
    <?php require_once("footer.php") ?>
</div>
<script>
    $(document).ready(function() {
        myMap();
    })

    document.getElementById('actionRequest').addEventListener("change", () => {
        let val = $('#actionRequest').val();
        if (val == 1) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "Enter Reason for discarting the request",
                input: 'text',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Discart it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true,
                preConfirm: (resp) => {
                    id=<?php echo htmlentities($row['id'])?>;
                    $.ajax({
                        url: 'controller/discartRequest.php',
                        type: 'post',
                        data:{remark:resp,id:id},
                        success: function(response) {
                            console.log(response.resp);
                        }
                    })
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Request Dicarted.',
                        'success'
                    )
                    location.reload()
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled'
                    )
                    location.reload()

                }
            })
        } else if (val == 2) {

            let option={};
            $.ajax({
                        url: 'controller/fetchEmployee.php',
                        type: 'post',
                        async: false,
                        success: function(response) {
                            // let obj=JSON.parse(response);
                            // for(const item of obj){
                            //     i=item['id'];
                            //     j=item['name'];
                            //     option={i,j}
                            // }
                            // console.log(option);
                            option=JSON.parse(response);
                          
                            console.log(option);
                            
                        }
                    })
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            let emp;
            swalWithBootstrapButtons.fire({

                text: "Select Employee",
                input: 'select',
                inputOptions:option,
                showCancelButton: true,
                confirmButtonText: 'Yes, Assign it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true,
                
                preConfirm: (resp) => {
                 
                    service =<?php echo $row['id']?>;
                    $.ajax({
                        url: 'controller/allocate.php',
                        type: 'post',
                        async: false,
                        data:{service:service,employee:resp},
                        success: function(response) {
                           
                            option=JSON.parse(response);
                          
                            console.log(option);
                            
                        }
                    });
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {
                    

                    swalWithBootstrapButtons.fire(
                        'Success!',
                        'Request Allocated.',
                        'success'
                    )
                    location.reload()
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',

                    )
                    location.reload()
                }
            })
        }
    });


    // function myMap() {


    //     latt = 51.508742;
    //     long = -0.120850;

    //     var lattlong = new google.maps.LatLng(latt, long);
    //     var myOptions = {
    //         center: lattlong,
    //         zoom: 15,
    //         mapTypeControl: true,
    //         navigationControlOptions: {
    //             style: google.maps.NavigationControlStyle.SMALL
    //         }
    //     }
    //     var maps = new google.maps.Map(document.getElementById("googleMap"), myOptions);
    //     var markers =
    //         new google.maps.Marker({
    //             position: lattlong,
    //             map: maps,
    //             title: "You are here!"
    //         });
    // }
</script>