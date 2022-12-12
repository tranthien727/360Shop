<?php include 'partials/header.php'; ?>
<section class="body">
    <div class="container">
        <div align="center">
            <img class="mySlides" src="HinhanhSP/spnb1.png">
            <img class="mySlides" src="HinhanhSP/spnb2.png">
            <img class="mySlides" src="HinhanhSP/spnb3.png">
        </div>
        <div align="center">
            <img class="ban1" src="HinhanhSP/ban1.jpg">
        </div>
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 3000); // Change image every 3 seconds
            }
        </script>
        <?php            
            require 'dt.php';
        ?>
        
    </div>
</section>
<?php include 'partials/footer.php'; ?>
 