<?php require_once('header-user.php') ?>
<style>
    .flex-container {
        display: flex;
        flex-direction: row;
        font-size: 30px;
        text-align: center;
        margin-top: 5px;
        justify-content: space-around;
    }

    .flex-item-left {
        background-color: #113F59;
        padding: 10px;
        width: 45%;
        border-radius: 10px;
        color: #ffffff;
    }

    .flex-item-right {
        background-color: #FFFDF6;
        padding: 10px;
        border: 1px solid #FF9F9F;
        border-radius: 10px;
        width: 45%;
        color: #E79C23;
    }
    .coupans{
        display: flex;
       
        justify-content: space-arounds;
      
    }
    .coupan{
        width: 200px;
        height:180px;
        padding:5px;
        border-radius: 5px;
        opacity: 0.75;
        border: 2px dotted grey;
        padding: 6px;
        background-color: #ffffff;
        background-image: url("img/coupan.png");
        background-repeat: no-repeat;
        background-size: 80px 60px;
        background-position: bottom right;
       
    }

    /* Responsive layout - makes a one column-layout instead of two-column layout */
    @media (max-width: 800px) {
        .flex-container {
            flex-direction: column;
        }
        .flex-item-right ,.flex-item-left{
       margin-top:20px;
        width: 96%;
     
    }
    }
</style>
<div class="container-fluid">
   
      <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rewards</h1>
  
</div>

       
   
        <div class="container flex-container">
            
            <div class="flex-item-left bg-gradient-warning">

                <h4> MY BALANCE 
                </h4>
                <img src="img/coins.png" width="100px">
                <h3 id="bal">24</h3>
            </div>
            <div class="flex-item-right">
                <h4> REWARDS & COUPAN</h4>
                <img src="images/reward.svg" width="100px"><br>
                <a href="buy.php" class="btn btn-warning">Redeem </a>
            </div>
        </div>

        <div class="container">
            <br><br><br>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Transaction</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">My Rewards</button>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <table class="table table-borderless table-responsive">
    <thead>
      <tr>
        <th>Coins</th>
        <th>Credit/Debit</th>
        <th>Narration</th>
        <th>Date</th>

      </tr>
    </thead>
    <tbody>
    
        <?php 
        $id=$user['id'];
        $sql="SELECT * FROM  transection where account_no=$id";
        $res=mysqli_query($conn,$sql);
        if(!$res){
            echo mysqli_error($conn);
        }else{
            while($row=mysqli_fetch_assoc($res)){

        
        ?>
           <tr>
        <td><?php echo  $row['amount']?></td>
       <?php  if($row['mode']=='CREDIT'){
       ?>
       <td><span class="text-success">Credit</span></td>
       <?php }else{?>
        <td><span class="text-danger">Debit</span></td>
        <?php } ?>
        <td><?php echo  $row['narration']?></td>
        <td><?php echo  $row['date']?></td>
      </tr>
      <?php }} ?>
    </tbody>
  </table>  


  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="coupans">
  
<?php 
        $id=$user['id'];
        $sql="SELECT * FROM  rewards where owner=$id";
        $res=mysqli_query($conn,$sql);
        if(!$res){
            echo mysqli_error($conn);
        }else{
            while($row=mysqli_fetch_assoc($res)){

                $coupan=$row['coupan'];
                $sql2="SELECT * FROM  coupan where coupan_id=$coupan";
                $res2=mysqli_query($conn,$sql2);
                if(!$res2){
                    echo mysqli_error($conn);
                }else{}
                $row2=mysqli_fetch_assoc($res2);
 ?>
  <div class="coupan">

<!-- <h2><?php echo $row2['title']?></h2> -->
<h3  >Flat Rs <?php echo $row2['amount'];?> off</h3>
<h6>on <?php echo $row2['title'];?></h6>
<br>
<h5>USE CODE</h5>
<h6 style="background-color:#F8F9FC ; padding:6px 8px ; display:inline;s"> <i><?php echo $row['code']?></h6></i>
</div>

<?php }}?>

</div>
 
    </div>

 

  

  
  </div>

</div>
  
        </div>
   
</div>
<?php require_once("footer-user.php")?>
<script>
    $(document).ready(function(){
      $.ajax({
        url:'balance.php',
        type:'post',
        success:function(resp){
            $('#bal').text(resp);
        }
      })
    });
</script>