<!doctype html>
<html lang="en">
 
<head>
    <?php $this->load->view('_partials/head'); ?>
    <title>Data Transaksi</title>
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
        <div class="dashboard-wrapper d-print-flex">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row d-print-none">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Transaksi</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $this->uri->segment(1) ?></li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-row justify-content-between">
                                <h5>
                                    Data Transaksi
                                </h5>
                                <button onclick="javascript:window.print()" class="btn btn-success rounded d-print-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2"></path>
                                        <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path>
                                        <rect x="7" y="13" width="10" height="8" rx="2"></rect>
                                    </svg>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="info">
                                    <?php if ($this->session->flashdata('hapus')): ?>
                                        <div class="alert alert-danger">Sukses Menghapus Data</div>
                                    <?php endif ?>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered d-print-table" width="100%">
                                        <thead>
                                            <tr class="d-print-table-row">
                                                <th class="d-print-table-cell">No</th>
                                                <th class="d-print-table-cell">Masakan</th>
                                                <th class="d-print-table-cell">No Meja</th>
                                                <th class="d-print-table-cell">Tanggal</th>
                                                <th class="d-print-none">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($transaksi === 'kosong'): ?>
                                                <tr class="d-print-table-row">
                                                    <td class="d-print-table-cell" colspan="5" align="center">Kosong</td>
                                                </tr>
                                            <?php else: ?>
                                                <?php foreach ($transaksi as $key => $value): ?>
                                                    <tr class="d-print-table-row">
                                                        <td class="d-print-table-cell"><?php echo $key+1 ?></td>
                                                        <td class="d-print-table-cell"><?php foreach ($value->masakan as $key => $val): ?>
                                                            <div class="d-grid gap-3">
                                                                <?php echo $val ?> 
                                                                <span class="badge badge-primary">
                                                                    <?php echo $value->total[$key] ?>
                                                                </span>
                                                            </div>
                                                        <?php endforeach ?></td>
                                                        <td class="d-print-table-cell"><?php echo $value->no_meja ?></td>
                                                        <td class="d-print-table-cell"><?php echo $value->tanggal ?></td>
                                                        <td width="20%" class="d-print-none">
                                                            <a href="<?php echo site_url('transaksi/detail/').$value->id ?>" class="btn btn-success btn-sm">Detail</a>
                                                            <a href="<?php echo site_url('transaksi/hapus/').$value->id ?>" class="btn btn-danger btn-sm">Hapus</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                            <?php endif ?>
                                        </tbody>
                                    </table>
                                </div>
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
    </form>
    </div>
    </div>
    </div>
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