<div id="create" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="createTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createTitle">Form Master Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('/master-data/create') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-3 m-auto">
                            <label for="sel1">Kode Rekening</label>
                        </div>
                        <div class="col-9 mb-0" id="sel1">
                            <select name="id_rek" class="form-control choicesjs mb-0" id="idRek" required>
                                @foreach ($rek as $code)
                                    <option value="{{ $code->id }}">{{ $code->kode_rek }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-tooltip">
                                Please select One!
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-3 m-auto">
                            <label>Nama Rekening</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="nama_rek">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-3 m-auto">
                            <label for="validationTooltip05">Target</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="validationTooltip05" name="target" required>
                            <div class="invalid-tooltip">
                                Please Add the Date!
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-3 m-auto">
                            <label for="sel1">Bulan Berlaku</label>
                        </div>
                        <div class="col-9">
                            <select class="form-control" id="sel1" name="bulan_berlaku" required>
                                <option selected disabled value="">Choose Month</option>
                                @for ($a = 1; $a <= 12; $a++)
                                    <option value="{{ $a }}">{{ date('F', mktime(0, 0, 0, $a, 10)) }}
                                    </option>
                                @endfor
                            </select>
                            <div class="invalid-tooltip">
                                Please select One!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-3 m-auto">
                            <label for="validationTooltip04">Tahun Berlaku</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="validationTooltip05" name="tahun_berlaku"
                                required>
                            <div class="invalid-tooltip">
                                Please select One!
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- <script>
    $('#idRek').change(function() {
        var id = $(this).val();
        var url = '{{ route('autofill', ':id') }}';
        url = url.replace(':id', id);

        $.ajax({
            url: url,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                if (response != null) {
                    $('#nama_rek').val(response.nama_rek);
                }
            }
        });
    });
</script> --}}
