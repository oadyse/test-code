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
                                <h4 class="card-title">Master Data Target (Tahun Anggaran 2022)</h4>
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
                                            <th>Target</th>
                                            <th>Masa Berlaku</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($data as $master) {
                                        ?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $master->rekening->kode_rek }}</td>
                                            <td>{{ $master->rekening->nama_rek }}</td>
                                            <td>{{ 'Rp ' . number_format($master->target, 0, ',', '.') }}</td>
                                            <td></td>
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
