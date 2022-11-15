@include('layout.header')
<!-- Wrapper Start -->
<div class="wrapper">
    @include('layout.sidebar')
    @include('layout.topnav')

    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-center">
                            <div class="header-title">
                                <h4 class="card-title">Data Transaksi Harian</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-1"
                                    class="table data-table table-striped table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Kode Rekening</th>
                                            <th>Nama Rekening</th>
                                            <th>Via Bayar</th>
                                            <th>Tanggal Setor</th>
                                            <th>Jumlah Bayar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($data as $value) {
                                        ?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $value->rekening->kode_rek }}</td>
                                            <td>{{ $value->rekening->nama_rek }}</td>
                                            <td>{{ $value->via_bayar }}</td>
                                            <td>{{ date('d M Y', strtotime($value->tgl_setor)) }}</td>
                                            <td>{{ 'Rp ' . number_format($value->pajak->jumlah_pajak, 0, ',', '.') }}
                                            </td>
                                        </tr>
                                        <?php 
                                            $no += 1;
                                            } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Wrapper End-->
@include('layout.footer')

<!-- Backend Bundle JavaScript -->
@include('layout.script')
</body>

</html>
