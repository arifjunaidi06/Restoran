<!doctype html>
<html lang="en">
 
<head>
    <?php $this->load->view('_partials/head'); ?>
    <title>Detail Transaksi</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php $this->load->view('_includes/navbar'); ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php $this->load->view('_includes/left-sidebar'); ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row d-print-none">
                    <div class="col-12">
                        <div class="page-header">
                            <div class="pageheader-title d-flex flex-row justify-content-between">
                                <h2>Detail Transaksi</h2>
                                <button onclick="javascript:window.print()" class="btn btn-success rounded d-print-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2"></path>
                                        <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path>
                                        <rect x="7" y="13" width="10" height="8" rx="2"></rect>
                                    </svg>
                                </button>
                            </div>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo site_url($this->uri->segment(1)) ?>"><?php echo $this->uri->segment(1) ?></a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $this->uri->segment(2) ?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                   <div class="col">
                        <div class="card">
                            <div class="card-header p-4">
                                 <a class="pt-2 d-inline-block" href="<?php echo site_url('') ?>"><?php echo $this->session->userdata('restoran')->nama; ?></a>
                               
                                <div class="float-right"> <h3 class="mb-0">Invoice #<?php echo $pesanan->id ?></h3>
                                Date: <?php echo $pesanan->tanggal ?></div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive-sm">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="center">#</th>
                                                <th>Item</th>
                                                <th class="right">Unit Cost</th>
                                                <th class="center">Qty</th>
                                                <th class="right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($pesanan->masakan as $key => $value): ?>
                                                <tr>
                                                    <td><?php echo $key+1 ?></td>
                                                    <td><?php echo $value ?></td>
                                                    <td><?php echo $pesanan->harga[$key] ?></td>
                                                    <td><?php echo $pesanan->total[$key] ?></td>
                                                    <td><?php echo $pesanan->harga[$key] * $pesanan->total[$key] ?></td>
                                                </tr>
                                                <?php $total[] = $pesanan->harga[$key] * $pesanan->total[$key] ?>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-4 mt-4 ml-auto">
                                        <table class="table table-clear">
                                            <tbody>
                                                <tr>
                                                    <td class="left">
                                                        <strong class="text-dark">No Meja</strong>
                                                    </td>
                                                    <td class="right">
                                                        <strong class="text-dark"><?php echo $pesanan->no_meja ?></strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="left">
                                                        <strong class="text-dark">Total</strong>
                                                    </td>
                                                    <td class="right">
                                                        <strong class="text-dark">Rp <?php echo array_sum($total) ?></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <p class="mb-0"><?php echo $this->session->userdata('restoran')->alamat; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php $this->load->view('_includes/footer'); ?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <?php $this->load->view('_partials/foot'); ?>
</body>

<style>
    @media print {
        .dashboard-wrapper {
            margin: 0;
        }
    }
</style>
 
</html>