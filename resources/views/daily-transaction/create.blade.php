<div id="create" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="createTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createTitle">Form Entry Transaksi Harian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('/daily-transaction/create') }}" class="needs-validation"
                    novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-3 m-auto">
                            <label for="sel1">Kode Rekening</label>
                        </div>
                        <div class="col-9 mb-0">
                            <select name="id_rek" class="form-control choicesjs mb-0" id="sel1" required>
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
                            <label for="validationTooltip02">Nama Rekening</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="validationTooltip02" onchange="autofill()"
                                disabled>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-3 m-auto">
                            <label for="validationTooltip03">Jumlah Bayar</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="validationTooltip03" onchange="autofill()"
                                disabled>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-3 m-auto">
                            <label for="validationTooltip04">Via Bayar</label>
                        </div>
                        <div class="col-9">
                            <select class="form-control" id="validationTooltip04" name="via_bayar" required>
                                <option selected disabled value="">Choose Payment Via</option>
                                <option value="Bank">Bank</option>
                                <option value="Bendahara">Bendahara</option>
                            </select>
                            <div class="invalid-tooltip">
                                Please select One!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-3 m-auto">
                            <label for="validationTooltip05">Tanggal Setor</label>
                        </div>
                        <div class="col-9">
                            <input type="date" class="form-control" id="validationTooltip05" name="tgl_setor"
                                required>
                            <div class="invalid-tooltip">
                                Please Add the Date!
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
    function autofill(){
        $.ajax {
            url: 
        }
    }
</script> --}}