<?php
include('header.php');
?>
<div class="container">
<div class="row">
<div class="header d-flex justify-content-between flex-row">
    <h4 class="mt-3 mb-2 text-left">Dashboard > Stock Report</h4>
    <button class="btn btn-success mt-2 mb-2" type="submit" id="download">Download report</button>  
</div>
    <table class="table table-bordered table-hover table-light table-striped" id="stock_report">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Code</th>
                <th>QTY</th>
                <th>Unit Price</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>

        <?php 

        $sql = "SELECT pdt_name,pdt_code,pdt_cost,pdt_stock, sum(pdt_cost * pdt_stock) as 'total_cost' FROM `tb_product` GROUP BY p_id;";

        $res = mysqli_query(
            $conn, $sql
        );
        mysqli_close($conn);

        while($rows=$res->fetch_assoc())
        {
        ?>
            <tr>
                <td><?php echo $rows["pdt_name"]; ?></td>
                <td><?php echo $rows["pdt_code"]; ?></td>
                <td><?php echo $rows["pdt_cost"];?></td>
                <td><?php echo $rows["pdt_stock"]; ?></td>
                <td><?php echo $rows["total_cost"]; ?></td>
            </tr>
        <?php }; ?>
        </tbody>
    </table>
</div>
</div>
<!-- PDF report code -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    const report = document.getElementById('stock_report'); // report table
    const getDownloadBtn = document.getElementById('download'); // download button 


    // event listener to trigger report download
    getDownloadBtn.addEventListener('click', (e)=>{
        e.preventDefault();
        var options = {
            filename: 'stock_report.pdf',
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
        };
        html2pdf().from(report).set(options).save();
    })

    </script>


<?php
include('footer.php');
?>