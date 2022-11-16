<div id="edit{{ $id }}" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="createTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createTitle">Form Entry Transaksi Harian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-left">
                <form method="POST" action="{{ url('/daily-transaction/update/' . base64_encode($id)) }}"
                    class="needs-validation" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-3 m-auto">
                            <label for="sel1">Kode Rekening</label>
                        </div>
                        <div class="col-9 mb-0">
                            <select name="id_rek" class="form-control choicesjs mb-0" id="sel1">
                                @foreach ($rek as $code)
                                    @if ($value->id_rek == $code->id)
                                        <option value="{{ $code->id }}" selected>{{ $code->kode_rek }}</option>
                                    @else
                                        <option value="{{ $code->id }}">{{ $code->kode_rek }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-3 m-auto">
                            <label for="validationTooltip02">Nama Rekening</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="validationTooltip02" value="" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-3 m-auto">
                            <label for="validationTooltip03">Jumlah Bayar</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control" id="validationTooltip03" value="" required>
                            <div class="invalid-tooltip">
                                Please provide a valid city.
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-3 m-auto">
                            <label for="validationTooltip04">Via Bayar</label>
                        </div>
                        <div class="col-9">
                            <select class="form-control" id="validationTooltip04" name="via_bayar" required>
                                @if (!empty($value->via_bayar) && $value->via_bayar == 'Bank')
                                    <option value="{{ $value->via_bayar }}" selected>{{ $value->via_bayar }}</option>
                                    <option value="Bendahara">Bendahara</option>
                                @elseif (!empty($value->via_bayar) && $value->via_bayar == 'Bendahara')
                                    <option value="Bank">Bank</option>
                                    <option value="{{ $value->via_bayar }}" selected>{{ $value->via_bayar }}</option>
                                @else
                                    <option selected disabled value="">Choose Payment Via</option>
                                    <option value="Bank">Bank</option>
                                    <option value="Bendahara">Bendahara</option>
                                @endif
                            </select>
                            <div class="invalid-tooltip">
                                Please select a valid state.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-3 m-auto">
                            <label for="validationTooltip05">Tanggal Setor</label>
                        </div>
                        <div class="col-9">
                            <input type="date" class="form-control" id="validationTooltip05" name="tgl_setor"
                                value="{{ $value->tgl_setor }}" required>
                            <div class="invalid-tooltip">
                                Please provide a valid zip.
                            </div>
                        </div>
                    </div>
                    <input type="text" name="id" value="{{ $value->id }}" hidden>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
