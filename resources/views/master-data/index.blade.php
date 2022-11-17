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
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Master Data Target (Tahun Anggaran 2022)</h4>
                            </div>
                            <button type="button" class="btn btn-primary rounded-pill" data-toggle="modal"
                                data-target="#create">
                                Add New
                            </button>
                            {{-- Modal Create --}}
                            @include('master-data.create')

                            {{-- <a class="iq-icons-list text-dark" href="" title="Export">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M15.75 2.25H21a.75.75 0 01.75.75v5.25a.75.75 0 01-1.5 0V4.81L8.03 17.03a.75.75 0 01-1.06-1.06L19.19 3.75h-3.44a.75.75 0 010-1.5zm-10.5 4.5a1.5 1.5 0 00-1.5 1.5v10.5a1.5 1.5 0 001.5 1.5h10.5a1.5 1.5 0 001.5-1.5V10.5a.75.75 0 011.5 0v8.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V8.25a3 3 0 013-3h8.25a.75.75 0 010 1.5H5.25z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a> --}}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info text-light px-2" id="basic-addon1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6" width="20px" height="20px">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                                </svg>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="start_date"
                                            placeholder="Start Date" readonly>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-info text-light px-2" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6" width="20px"
                                                height="20px">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control" id="end_date" placeholder="End Date"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md-2 my-2 mr-0">
                                    <button id="filter" class="btn btn-outline-info btn-sm">Filter</button>
                                    <button id="reset" class="btn btn-outline-warning btn-sm">Reset</button>
                                </div>
                            </div>

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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="records">
                                        <?php
                                            $no = 1;
                                            foreach ($data as $master) {
                                                $id = $master->id;
                                        ?>
                                        <tr>
                                            <td width="5%">{{ $no }}</td>
                                            <td>{{ $master->rekening->kode_rek }}</td>
                                            <td>{{ $master->rekening->nama_rek }}</td>
                                            <td>{{ 'Rp ' . number_format($master->target, 0, ',', '.') }}</td>
                                            <?php
                                            // to call last day of the month
                                            $last_day = cal_days_in_month(CAL_GREGORIAN, $master->bulan_berlaku, $master->tahun_berlaku);
                                            // start date
                                            $start = date('d-m-Y', mktime(0, 0, 0, $master->bulan_berlaku, 1, $master->tahun_berlaku));
                                            // end date
                                            $end = date('d-m-Y', mktime(0, 0, 0, $master->bulan_berlaku, $last_day, $master->tahun_berlaku));
                                            ?>
                                            <td>{{ $start }} <b>sd</b> {{ $end }}</td>
                                            <td>
                                                <a class="iq-icons-list text-left" href="" title="Edit"
                                                    data-toggle="modal" data-target="#edit{{ $id }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                    </svg>
                                                </a>
                                                <a class="iq-icons-list text-danger"
                                                    href="{{ url('/master-data/delete/' . base64_encode($id)) }}"
                                                    title="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </a>

                                                {{-- Modal Edit --}}
                                                @include('master-data.edit')
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


<script>
    $(function() {
        $("#start_date").datepicker({
            "dateFormat": "yy-mm-dd"
        });
        $("#end_date").datepicker({
            "dateFormat": "yy-mm-dd"
        });
    });

    // Fetch records
    function fetch(start_date, end_date) {
        $.ajax({
            url: "{{ route('master-data/records') }}",
            type: "GEt",
            data: {
                start_date: start_date,
                end_date: end_date
            },
            dataType: "json",
            success: function(data) {
                // Datatables
                var i = 1;
                $('#records').DataTable({
                    "data": data.masters,
                    // buttons
                    "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    "buttons": [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    // responsive
                    "responsive": true,
                    "columns": [{
                            "data": "no",
                            "render": function(data, type, row, meta) {
                                return i++;
                            }
                        },
                        {
                            "data": "kode_rek",
                            "render": function(data, type, row, meta) {
                                return `${}`;
                            }
                        },
                        {
                            "data": "nama_rek",
                            "render": function(data, type, row, meta) {
                                return ``;
                            }
                        },
                        {
                            "data": "target",
                            "render": function(data, type, row, meta) {
                                return `${row.standard}th Standard`;
                            }
                        },
                        {
                            "data": "percentage",
                            "render": function(data, type, row, meta) {
                                return `${row.percentage}%`;
                            }
                        },
                        {
                            "data": "created_at",
                            "render": function(data, type, row, meta) {
                                return moment(row.created_at).format('DD-MM-YYYY');
                            }
                        }
                    ]
                });
            }
        });
    }

    fetch();

    // Filter
    $(document).on("click", "#filter", function(e) {
        e.preventDefault();
        var start_date = $("#start_date").val();
        var end_date = $("#end_date").val();
        if (start_date == "" || end_date == "") {
            alert("Both date required");
        } else {
            $('#records').DataTable().destroy();
            fetch(start_date, end_date);
        }
    });

    // Reset
    $(document).on("click", "#reset", function(e) {
        e.preventDefault();
        $("#start_date").val(''); // empty value
        $("#end_date").val('');
        $('#records').DataTable().destroy();
        fetch();
    });
</script>

</body>

</html>
